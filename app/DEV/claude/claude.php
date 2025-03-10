<?php
// Function to read the source text file and extract data pairs
function readSourceFile($sourceFilePath) {
    $content = file_get_contents($sourceFilePath);
    if ($content === false) {
        die("Error: Unable to read the source file at $sourceFilePath\n");
    }
    
    // Split by empty lines
    $blocks = preg_split('/\n\s*\n/', $content);
    $dataPairs = [];
    
    foreach ($blocks as $block) {
        $lines = explode("\n", trim($block));
        if (count($lines) >= 2) {
            $dataPairs[] = [
                'html' => trim($lines[0]),
                'value' => trim($lines[1])
            ];
        }
    }
    
    return $dataPairs;
}

// Function to read the JSON target file preserving formatting
function readJsonFile($jsonFilePath) {
    $content = file_get_contents($jsonFilePath);
    if ($content === false) {
        die("Error: Unable to read the JSON file at $jsonFilePath\n");
    }
    
    // Keep the original content for formatting reference
    $originalContent = $content;
    
    $jsonData = json_decode($content, true);
    if ($jsonData === null && json_last_error() !== JSON_ERROR_NONE) {
        die("Error: Invalid JSON format in the target file. " . json_last_error_msg() . "\n");
    }
    
    return [
        'data' => $jsonData,
        'original' => $originalContent
    ];
}

// Function to update the JSON data with source data pairs
function updateJsonData($jsonData, $dataPairs, $targetField) {
    $warnings = [];
    $updateCount = 0;
    
    // Validate target field
    if ($targetField !== 'DCE' && $targetField !== 'FSH') {
        die("Error: Target field must be either 'DCE' or 'FSH'\n");
    }
    
    // Process the replacements array
    if (isset($jsonData['replacements']) && is_array($jsonData['replacements'])) {
        foreach ($jsonData['replacements'] as &$replacement) {
            if (isset($replacement['HTML'])) {
                $html = $replacement['HTML'];
                
                // Find matching pair from source
                foreach ($dataPairs as $pair) {
                    if ($pair['html'] === $html) {
                        // Check if the target field already has a value
                        if (!empty($replacement[$targetField])) {
                            $warnings[] = "Warning: Element with HTML '{$html}' already has a {$targetField} value: '{$replacement[$targetField]}'. Skipping.";
                        } else {
                            // Update the target field value
                            $replacement[$targetField] = $pair['value'];
                            $updateCount++;
                        }
                        break;
                    }
                }
            }
        }
    }
    
    return [
        'data' => $jsonData,
        'warnings' => $warnings,
        'updateCount' => $updateCount
    ];
}

// Function to save the modified JSON to a new file while preserving formatting
function saveJsonToFile($jsonData, $originalContent, $outputFilePath) {
    // Parse the original content to understand its formatting
    $lines = explode("\n", $originalContent);
    $result = '';
    $inReplacements = false;
    $currentIndent = '';
    $replacementIndex = 0;
    
    // Extract replacements array for easier access
    $replacements = $jsonData['replacements'];
    
    // Process each line
    foreach ($lines as $line) {
        // Check if we're in the replacements array section
        if (strpos($line, '"replacements"') !== false) {
            $inReplacements = true;
            $result .= $line . "\n";
            continue;
        }
        
        // If we're within a replacement object
        if ($inReplacements && preg_match('/^\s*{\s*$/', $line)) {
            $currentIndent = preg_replace('/^(\s*).*$/', '$1', $line);
            $result .= $line . "\n";
            continue;
        }
        
        // Look for HTML, FSH, or DCE fields
        if ($inReplacements && preg_match('/^\s*"(HTML|FSH|DCE)"\s*:\s*"([^"]*)"/', $line, $matches)) {
            $field = $matches[1];
            
            // If we have data for this replacement and this is a field we're interested in
            if (isset($replacements[$replacementIndex][$field])) {
                $padding = str_repeat(' ', max(0, 12 - strlen($field)));
                $result .= $currentIndent . '    "' . $field . '"' . $padding . ': "' . $replacements[$replacementIndex][$field] . '"';
                
                // Check if there's a comma at the end of the line
                if (substr(rtrim($line), -1) === ',') {
                    $result .= ',';
                }
                $result .= "\n";
            } else {
                $result .= $line . "\n";
            }
            continue;
        }
        
        // If we're at the end of a replacement object
        if ($inReplacements && preg_match('/^\s*}/', $line)) {
            $result .= $line . "\n";
            $replacementIndex++;
            continue;
        }
        
        // Add all other lines unchanged
        $result .= $line . "\n";
    }
    
    // Write the result to the output file
    $writeResult = file_put_contents($outputFilePath, rtrim($result));
    if ($writeResult === false) {
        die("Error: Failed to write to output file at $outputFilePath\n");
    }
    
    return $writeResult;
}

// Main execution
function main($sourceFilePath, $jsonFilePath, $targetField, $outputFilePath = null) {
    // If output file is not specified, create one based on the input file
    if ($outputFilePath === null) {
        $pathInfo = pathinfo($jsonFilePath);
        $outputFilePath = $pathInfo['dirname'] . '/' . $pathInfo['filename'] . '_filled.' . $pathInfo['extension'];
    }
    
    echo "Starting to process files...\n";
    echo "Source file: $sourceFilePath\n";
    echo "Target JSON: $jsonFilePath\n";
    echo "Target field: $targetField\n";
    echo "Output file: $outputFilePath\n\n";
    
    // Read the source file
    $dataPairs = readSourceFile($sourceFilePath);
    echo "Found " . count($dataPairs) . " data pairs in the source file.\n";
    
    // Read the JSON file
    $jsonFileResult = readJsonFile($jsonFilePath);
    $jsonData = $jsonFileResult['data'];
    $originalContent = $jsonFileResult['original'];
    
    // Update the JSON data
    $result = updateJsonData($jsonData, $dataPairs, $targetField);
    
    // Display warnings
    if (!empty($result['warnings'])) {
        echo "\nWarnings:\n";
        foreach ($result['warnings'] as $warning) {
            echo "- $warning\n";
        }
    }
    
    // Save the updated data
    $bytesWritten = saveJsonToFile($result['data'], $originalContent, $outputFilePath);
    
    echo "\nProcess completed:\n";
    echo "- " . $result['updateCount'] . " elements updated\n";
    echo "- " . count($result['warnings']) . " warnings generated\n";
    echo "- $bytesWritten bytes written to $outputFilePath\n";
    
    return true;
}

// Check if this script is being run from command line
if (php_sapi_name() === 'cli') {
    // Check for required arguments
    if ($argc < 4) {
        echo "Usage: php claude.php <source_txt_file> <target_json_file> <target_field> [output_json_file]\n";
        echo "  <target_field> must be either 'DCE' or 'FSH'\n";
        exit(1);
    }
    
    $sourceFilePath = $argv[1];
    $jsonFilePath = $argv[2];
    $targetField = strtoupper($argv[3]); // Convert to uppercase for consistency
    $outputFilePath = isset($argv[4]) ? $argv[4] : null;
    
    main($sourceFilePath, $jsonFilePath, $targetField, $outputFilePath);
}
