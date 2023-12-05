<?php

/**
 * PREDEFINED BLOCKS
 * 
 */


$libraryBlocks = array();

$libraryBlocks['header_mgm_tu_codigo_unico'] ='
        {
            "type"              : "columns",
            "font"              : "Cabin",
            "margin_sides"      : "0",
            "margin_top"        : "34",
            "margin_bottom"     : "34",
            "color_bkg"         : "#fffcfa",
            "this"              : "HEADER MGM CODIGO UNICO",
            "columns"           :
            [
                {
                    "coltype"       : "spacer",
                    "color_bkg"     : "transparent",
                    "widthp100"     : "5",
                    "mtop"          : "0"
                },
                {
                    "coltype"       : "img",
                    "color_bkg"     : "transparent",
                    "widthp100"     : "20",
                    "imgwidth"      : "116",
                    "mtop"          : "4",
                    "img"           : "logo-header-iqos.png",
                    "imgulr"        : "#",
                    "THISIMG"       : "IMG logo-header-iqos"
                },
                {
                    "coltype"       : "multirows",
                    "color_bkg"     : "transparent",
                    "widthp100"     : "66",
                    "rows"          :
                    [
                        {
                            "rowtype"       : "p",
                            "p"             : "Tu Código Único:",
                            "color_bkg"     : "transparent",
                            "p_fontweight"  : "300",
                            "p_fontsize"    : "16px",
                            "p_height"      : "20px",
                            "p_align"       : "right",
                            "p_color"       : "#34303d",
                            "margin_top"    : "0",
                            "margin_bottom" : "0"
                        },
                        {
                            "rowtype"       : "p",
                            "p"             : "<span style=\"padding:0 5px;background-color:#00d1d2;\">%%referral_code%%</span>",
                            "color_bkg"     : "transparent",
                            "p_fontweight"  : "700",
                            "p_fontsize"    : "18px",
                            "p_height"      : "22px",
                            "p_align"       : "right",
                            "p_color"       : "#34303d",
                            "margin_top"    : "0",
                            "margin_bottom" : "0"
                        }
                    ]
                },
                {
                    "coltype"       : "spacer",
                    "color_bkg"     : "transparent",
                    "widthp100"     : "9",
                    "mtop"          : "0"
                }
            ]
        },';
$libraryBlocks['get_iqos_wallet_app'] ='
        {
            "type"          : "p_v2",
            "font"          : "Cabin",
            "fontweight"    : "300",
            "fontsize"      : "18",
            "height"        : "24", 
            "width"         : "80%",
            "align"         : "center",
            "color"         : "#34303d",
            "color_bkg"     : "#f9f7f4",
            "margin_top"    : "40",
            "margin_bottom" : "20",
            "margin_sides"  : "2",
            "margin_color"  : "transparent",
            "content"       : "Ten siempre a la mano tu Código Único,<br>lleva el control de tus referidos y beneficios <br>con <span style=\"color:#00d1d2;font-weight:700;\">IQOS Wallet.</span><br>Disponible para <b>IOS y Android.</b>",
            "readme"        : "height px, margin %" ,
            "this"          : ""
        },
        {
            "type"              : "columns",
            "font"              : "Cabin",
            "margin_sides"      : "0",
            "margin_top"        : "0",
            "margin_bottom"     : "30",
            "color_bkg"         : "transparent",
            "this"              : "LINKS APP - ITUNES / PLAY STORE",
            "columns"           :
            [
                {
                    "coltype"       : "spacer",
                    "color_bkg"     : "transparent",
                    "widthp100"     : "2",
                    "mtop"          : "0"
                },
                {
                    "coltype"       : "img",
                    "color_bkg"     : "#f9f7f4",
                    "widthp100"     : "48",
                    "imgwidth"      : "173",
                    "mtop"          : "0",
                    "img"           : "cta-store-apple-wallet.png",
                    "imgulr"        : "https://api.iqoswalletmx.com/wallet/passes/download/%%referral_code%%",
                    "THISIMG"       : "IMG cta-store-apple-wallet"
                },
                {
                    "coltype"       : "img",
                    "color_bkg"     : "#f9f7f4",
                    "widthp100"     : "48",
                    "imgwidth"      : "202",
                    "mtop"          : "0",
                    "img"           : "cta-store-google-play.png",
                    "imgulr"        : "https://api.iqoswalletmx.com/wallet/passes/download/%%referral_code%%",
                    "THISIMG"       : "IMG cta-store-google-play"
                },
                {
                    "coltype"       : "spacer",
                    "color_bkg"     : "transparent",
                    "widthp100"     : "2",
                    "mtop"          : "0"
                }
            ]
        },';

$libraryBlocks['get_iqos_wallet_app_slate'] ='
        {
            "type"          : "p_v2",
            "font"          : "Cabin",
            "fontweight"    : "300",
            "fontsize"      : "18",
            "height"        : "24", 
            "width"         : "80%",
            "align"         : "center",
            "color"         : "#ffffff",
            "color_bkg"     : "#373340",
            "margin_top"    : "40",
            "margin_bottom" : "20",
            "margin_sides"  : "2",
            "margin_color"  : "transparent",
            "content"       : "Ten siempre a la mano tu Código Único,<br>lleva el control de tus referidos y beneficios <br>con <span style=\"color:#00d1d2;font-weight:700;\">IQOS Wallet.</span><br>Disponible para <b>IOS y Android.</b>",
            "readme"        : "height px, margin %" ,
            "this"          : ""
        },
        {
            "type"              : "columns",
            "font"              : "Cabin",
            "margin_sides"      : "0",
            "margin_top"        : "0",
            "margin_bottom"     : "30",
            "color_bkg"         : "transparent",
            "this"              : "LINKS APP - ITUNES / PLAY STORE",
            "columns"           :
            [
                {
                    "coltype"       : "spacer",
                    "color_bkg"     : "transparent",
                    "widthp100"     : "2",
                    "mtop"          : "0"
                },
                {
                    "coltype"       : "img",
                    "color_bkg"     : "#373340",
                    "widthp100"     : "48",
                    "imgwidth"      : "173",
                    "mtop"          : "0",
                    "img"           : "cta-store-apple-wallet.png",
                    "imgulr"        : "https://api.iqoswalletmx.com/wallet/passes/download/%%referral_code%%",
                    "THISIMG"       : "IMG cta-store-apple-wallet"
                },
                {
                    "coltype"       : "img",
                    "color_bkg"     : "#373340",
                    "widthp100"     : "48",
                    "imgwidth"      : "202",
                    "mtop"          : "0",
                    "img"           : "cta-store-google-play.png",
                    "imgulr"        : "https://api.iqoswalletmx.com/wallet/passes/download/%%referral_code%%",
                    "THISIMG"       : "IMG cta-store-google-play"
                },
                {
                    "coltype"       : "spacer",
                    "color_bkg"     : "transparent",
                    "widthp100"     : "2",
                    "mtop"          : "0"
                }
            ]
        },';
$libraryBlocks['img_Logo_Header_HTML'] ='
        {
            "type"          : "img",
            "img"           : "header_iqos.png",
            "imgHTML"       : "header_iqos.png",
            "imgFSH"        : "http://image.email-futurosinhumo.com/lib/fe42157175640478741574/m/1/e2f8bd1f-3fe6-4e38-8962-28d385dddb6b.png",
            "imgDCE"        : "https://image.e.iqos.com/lib/fe3a15707564067e7d1073/m/1/a0bc2beb-aea1-41da-831a-f9101cdeca95.png",
            "url"           : "https://mx.iqos.com/",
            "this"          : "Logo Header"
        },';
$libraryBlocks['img_Cover_HTML'] ='
        {
            "type"          : "img",
            "img"           : "22.id-1.jpg",
            "url"           : "#",
            "this"          : "Cover"
        },';
$libraryBlocks['img'] ='
        {
            "type"          : "img",
            "bgcolor"       : "transparent",
            "img"           : "22.id-x.jpg",
            "url"           : "#",
            "this"          : "IMG 22.id-x"
        },';
$libraryBlocks['greeting_negro'] ='
        {
            "type"          : "greeting",
            "fontweight"    : "300",
            "color_greeting": "#34303d",
            "color_bkg"     : "transparent",
            "greeting"      : "Hola, %%first_name%%",
            "greetingBW"    : "<span style=\"color:#e4ab68;\">Hola,</span> %%first_name%%",
            "greetingFSH"   : "Hola, %%FirstName%%",
            "greetingHTML"  : "Hola, %%first_name%%",
            "greetingDCE"   : "Hola, %%first_name%%",
            "this"          : "Hola [nombre]"
        },';
$libraryBlocks['greeting_dorado'] ='
        {
            "type"          : "greeting",
            "fontweight"    : "300",
            "color_greeting": "#e4ab68",
            "color_bkg"     : "transparent",
            "greeting"      : "Hola, %%first_name%%",
            "greetingFSH"   : "Hola, %%FirstName%%",
            "greetingHTML"  : "Hola, %%first_name%%",
            "greetingDCE"   : "Hola, %%first_name%%",
            "this"          : "Hola [nombre]"
        },';
$libraryBlocks['p300'] ='
        {
            "type"          : "p",
            "fontweight"    : "300",
            "fontsize"      : "18",
            "height"        : "24",
            "width"         : "80%",
            "align"         : "center",
            "color"         : "#34303d",
            "color_bkg"     : "transparent",
            "margin_top"    : "50",
            "margin_bottom" : "50",
            "content"       : "<b>IQOS</b> <span style=\"color: #e4ab68; font-weight: 700;\">IQOS</span> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.",
            "this"          : "TXT"
        },';
$libraryBlocks['p700'] ='
        {
            "type"          : "p",
            "fontweight"    : "700",
            "fontsize"      : "20",
            "height"        : "24",
            "width"         : "80%",
            "align"         : "center",
            "color"         : "#000000",
            "color_bkg"     : "transparent",
            "margin_top"    : "50",
            "margin_bottom" : "50",
            "content"       : "<b>IQOS</b> <span style=\"color: #e4ab68; font-weight: 700;\">IQOS</span> Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.",
            "this"          : "TXT"
        },';
$libraryBlocks['rawHTML'] ='
        {
            "type"          : "rawHTML",
            "th_valign"     : "",
            "th_style"      : "",
            "th_align"      : "",
            "html"          : "<div data-type=\"slot\" data-key=\"bspwz932ek9\" data-label=\"Drop blocks or content here\">",
            "th_valign_NOPE"     : "top",
            "th_style_NOPE"      : "text-align:center;margin:0;padding:0;",
            "th_align_NOPE"      : "center",
            "html_NOPE"          : "%%=ContentBlockbyKey(\"lending_form_mx\")=%%",
            "this"          : "HTML RAW"
        },';
$libraryBlocks['m_TXT_TXT_m'] ='
        {
            "type"              : "cols_m_A_B_m",
            "font"              : "Cabin",
            "margin_sides"      : "5",
            "margin_topbottom"  : "10",
            "color_bkg"         : "transparent",
            "this"              : "",
            "columns"           :
            [
                {
                    "coltype"       : "txt_cta",
                    "color_bkg"     : "#ffffff",
                    "widthp100"     : "45",

                    "h1"            : "",
                    "h1_fontweight" : "700",
                    "h1_fontsize"   : "18px",
                    "h1_height"     : "20px",
                    "h1_align"      : "left",
                    "h1_color"      : "#34303d",
                    
                    "p"             : "<span style=\"font-weight:700;color:#e3ae6f\">IQOS</span> Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.",
                    "p_fontweight"  : "300",
                    "p_fontsize"    : "18px",
                    "p_height"      : "20px",
                    "p_align"       : "center",
                    "p_color"       : "#111111",

                    "button"        : "",
                    "buttonurl"     : "#",
                    "widthbutton"   : "235",
                    "button_topm"   : "30",
                    "buttonalign"   : "center",
                    "THISIMG"       : ""
                },
                {
                    "coltype"       : "spacer",
                    "color_bkg"     : "transparent",
                    "widthp100"     : "10",
                    "mtop"          : "0"
                },
                {
                    "coltype"       : "txt_cta",
                    "color_bkg"     : "#ffffff",
                    "widthp100"     : "45",

                    "h1"            : "",
                    "h1_fontweight" : "700",
                    "h1_fontsize"   : "18px",
                    "h1_height"     : "20px",
                    "h1_align"      : "left",
                    "h1_color"      : "#34303d",
                    
                    "p"             : "<span style=\"font-weight:700;color:#e3ae6f\">IQOS</span> Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.",
                    "p_fontweight"  : "300",
                    "p_fontsize"    : "18px",
                    "p_height"      : "20px",
                    "p_align"       : "center",
                    "p_color"       : "#111111",

                    "button"        : "",
                    "buttonHTML"    : "",
                    "buttonFSH"     : "",
                    "buttonDCE"     : "",
                    "buttonurl"     : "#",
                    "widthbutton"   : "260",
                    "button_topm"   : "30",
                    "buttonalign"   : "center",
                    "THISIMG"       : ""
                }
            ]
        },';
$libraryBlocks['m_TXT_IMG_m'] ='
        {
            "type"              : "cols_m_A_B_m",
            "font"              : "Cabin",
            "margin_sides"      : "5",
            "margin_topbottom"  : "10",
            "color_bkg"         : "transparent",
            "this"              : "DESCRIPCION",
            "columns"           :
            [
                {
                    "coltype"       : "txt_cta",
                    "color_bkg"     : "#ffffff",
                    "widthp100"     : "45",

                    "h1"            : "",
                    "h1_fontweight" : "700",
                    "h1_fontsize"   : "18px",
                    "h1_height"     : "20px",
                    "h1_align"      : "left",
                    "h1_color"      : "#34303d",
                    
                    "p"             : "<span style=\"font-weight:700;color:#e3ae6f\">IQOS</span> Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.",
                    "p_fontweight"  : "300",
                    "p_fontsize"    : "18px",
                    "p_height"      : "20px",
                    "p_align"       : "center",
                    "p_color"       : "#111111",

                    "button"        : "",
                    "buttonurl"     : "#",
                    "widthbutton"   : "235",
                    "button_topm"   : "30",
                    "buttonalign"   : "center",
                    "THISIMG"       : ""
                },
                {
                    "coltype"       : "spacer",
                    "color_bkg"     : "transparent",
                    "widthp100"     : "10",
                    "mtop"          : "0"
                },
                {
                    "coltype"       : "img",
                    "color_bkg"     : "#ffffff",
                    "widthp100"     : "45",
                    "imgwidth"      : "100",
                    "mtop"          : "0",
                    "img"           : "22.id-x.jpg",
                    "imgulr"        : "#",
                    "THISIMG"       : "22.id-x"
                }
            ]
        },';
$libraryBlocks['m_IMG_TXT_m'] ='
        {
            "type"              : "cols_m_A_B_m",
            "font"              : "Cabin",
            "margin_sides"      : "5",
            "margin_topbottom"  : "10",
            "color_bkg"         : "transparent",
            "this"              : "DESCRIPCION",
            "columns"           :
            [
                {
                    "coltype"       : "img",
                    "color_bkg"     : "#ffffff",
                    "widthp100"     : "25",
                    "imgwidth"      : "100",
                    "mtop"          : "0",
                    "img"           : "22.id-x.jpg",
                    "imgulr"        : "#",
                    "THISIMG"       : "IMG 22.id-x"
                },
                {
                    "coltype"       : "spacer____",
                    "color_bkg"     : "transparent",
                    "widthp100"     : "10",
                    "mtop"          : "0"
                },
                {
                    "coltype"       : "txt_cta",
                    "color_bkg"     : "#ffffff",
                    "widthp100"     : "75",

                    "h1"            : "",
                    "h1_fontweight" : "700",
                    "h1_fontsize"   : "18px",
                    "h1_height"     : "20px",
                    "h1_align"      : "left",
                    "h1_color"      : "#34303d",

                    "p"             : "<span style=\"font-weight:700;color:#e3ae6f\">IQOS</span> Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.",
                    "p_fontweight"  : "300",
                    "p_fontsize"    : "18px",
                    "p_height"      : "20px",
                    "p_align"       : "center",
                    "p_color"       : "#111111",

                    "button"        : "",
                    "buttonurl"     : "#",
                    "widthbutton"   : "235",
                    "button_topm"   : "30",
                    "buttonalign"   : "center",
                    "THISIMG"       : ""
                }
            ]
        },';
$libraryBlocks['m_IMG_IMG_m'] ='
        {
            "type"              : "cols_m_A_B_m",
            "margin_sides"      : "5",
            "margin_topbottom"  : "10",
            "color_bkg"         : "transparent",
            "this"              : "DESCRIPCION",
            "columns"           :
            [
                {
                    "coltype"       : "img",
                    "color_bkg"     : "#ffffff",
                    "widthp100"     : "25",
                    "imgwidth"      : "100",
                    "mtop"          : "0",
                    "img"           : "22.id-x.jpg",
                    "imgulr"        : "#",
                    "THISIMG"       : "IMG 22.id-x"
                },
                {
                    "coltype"       : "spacer__",
                    "color_bkg"     : "transparent",
                    "widthp100"     : "10",
                    "mtop"          : "0"
                },
                {
                    "coltype"       : "img",
                    "color_bkg"     : "#ffffff",
                    "widthp100"     : "25",
                    "imgwidth"      : "100",
                    "mtop"          : "0",
                    "img"           : "22.id-x.jpg",
                    "imgulr"        : "#",
                    "THISIMG"       : "IMG 22.id-x"
                }
            ]
        },';
$libraryBlocks['btn_sa_comprar_HTML'] ='
        {
            "type"          : "cta1",
            "widthbutton"   : "200",
            "button"        : "btn-sa-comprar.png",
            "buttonHTML"    : "btn-sa-comprar.png",
            "buttonFSH"     : "http://image.email-futurosinhumo.com/lib/fe42157175640478741574/m/1/37fd757c-ddfb-4cbf-ae83-c0fc0d953ef1.png",
            "buttonDCE"     : "https://image.e.iqos.com/lib/fe3a15707564067e7d1073/m/1/7461a56c-a749-47ca-96cf-541d642b576a.png",
            "url_cta"       : "https://www.iqos.com/mx/es/descubre/comprar-dispositivos.html",
            "this"          : "CTA comprar"
        },';
$libraryBlocks['cta1'] ='
        {
            "type"          : "cta1",
            "widthbutton"   : "280",
            "color_bkg"     : "transparent",
            "button"        : "btn.png",
            "url_cta"       : "#",
            "this"          : "CTA btn"
        },';
$libraryBlocks['spacer'] ='
        {
            "type"          : "spacer",
            "height"        : "50",
            "color_bkg"     : "transparent",
            "readme"        : "height in px",
            "this"          : "spacer"
        },';
$libraryBlocks['one_rs'] =' 
        {
            "type"          : "one_rs",
            "fontweight"    : "300",
            "fontsize"      : "18",
            "height"        : "24",
            "widthpx"       : "150",
            "align"         : "center",
            "color"         : "#34303d",
            "color_bkg"     : "transparent",
            "margin_top"    : "30",
            "margin_bottom" : "50",

            "url"           : "seleccionar url FB o IG",
            "url__IQOS_FB"  : "https://www.facebook.com/iqosmx",
            "url__IQOS_IG"  : "https://www.instagram.com/iqos_mx/",

            "img"           : "seleccionar img FB o IG",
            "imgHTML_FB"    : "facebook_icon.png",
            "imgFSH_FB"     : "http://image.email-futurosinhumo.com/lib/fe42157175640478741574/m/1/8eaed728-c3cf-4b14-909d-72c82b60dfad.png",
            "imgDCE_FB"     : "https://image.e.iqos.com/lib/fe3a15707564067e7d1073/m/1/4bf684c3-e253-40da-8658-4e0fa4e92e83.png",
            "imgHTML_IG"    : "instagram_icon.png",
            "imgFSH_IG"     : "http://image.email-futurosinhumo.com/lib/fe42157175640478741574/m/1/5473186d-7c04-4029-8808-6dc6fd6d8e75.png",
            "imgDCE_IG"     : "https://image.e.iqos.com/lib/fe3a15707564067e7d1073/m/1/fd4bbe37-986a-4b70-935d-eb70b66239e6.png",
            
            "txt"           : "@iqosmx",
            "txt_decoration": "none",
            "imgwidthpx"    : "50",
            "this"          : "RS FB / IG"
        },';
$libraryBlocks['two_rs'] =' 
        {
            "type"          : "two_rs",
            "widthpx"       : "350",
            "align"         : "center",
            "color_bkg"     : "transparent",
            "margin_top"    : "30",
            "margin_bottom" : "50",
            
            "url1"           : "https://www.facebook.com/iqosmx",
            "img1"           : "facebook_icon.png",
            "imgwidthpx1"    : "50",
            "this1"          : "RS FACEBOOK",
            
            "fontsize1"      : "18",
            "fontweight1"    : "300",
            "height1"        : "24",
            "color1"         : "#34303d",
            "txt_decoration1": "none",
            "txt1"           : "@iqosmx",
            
            "url2"           : "https://www.instagram.com/iqos_mx/",
            "img2"           : "instagram_icon.png",
            "imgwidthpx2"    : "50",
            "this2"          : "RS INSTAGRAM",
            
            "fontsize2"      : "18",
            "fontweight2"    : "300",
            "height2"        : "24",
            "color2"         : "#34303d",
            "txt_decoration2": "none",
            "txt2"           : "@iqos_mx"
        },';
$libraryBlocks['three_rs'] ='
        {
            "type"          : "three_rs",
            "widthpx"       : "450",
            "align"         : "center",
            "color_bkg"     : "transparent",
            "margin_top"    : "30",
            "margin_bottom" : "30",
            
            "url1"           : "https://www.facebook.com/iqosmx",
            "img1"           : "facebook.png",
            "imgwidthpx1"    : "40",
            "this1"          : "RS FACEBOOK",
            
            "fontsize1"      : "14",
            "fontweight1"    : "300",
            "height1"        : "18",
            "color1"         : "#34303d",
            "txt_decoration1": "none",
            "txt1"           : "@iqosmx",
            
            "url2"           : "https://www.youtube.com/channel/UCQ0NR6SLSmgfrV5TicZXqaA",
            "img2"           : "youtube.png",
            "imgwidthpx2"    : "40",
            "this2"          : "RS YOUTUBE",
            
            "fontsize2"      : "14",
            "fontweight2"    : "300",
            "height2"        : "18",
            "color2"         : "#34303d",
            "txt_decoration2": "none",
            "txt2"           : "IQOS México",

            "url3"           : "https://www.instagram.com/iqos_mx/",
            "img3"           : "instagram.png",
            "imgwidthpx3"    : "40",
            "this3"          : "RS INSTAGRAM",
            
            "fontsize3"      : "14",
            "fontweight3"    : "300",
            "height3"        : "18",
            "color3"         : "#34303d",
            "txt_decoration3": "none",
            "txt3"           : "@iqos_mx"
        },';



$libraryBlocks['sinfuego_sinhumo_sinceniza_negro_HTML'] ='
        {
            "type"          : "p",
            "fontweight"    : "700",
            "fontsize"      : "20",
            "height"        : "24",
            "width"         : "80%",
            "align"         : "center",
            "color"         : "#000000",
            "color_bkg"     : "transparent",
            "margin_top"    : "50",
            "margin_bottom" : "50",
            "content"       : "SIN FUEGO, SIN HUMO, SIN CENIZA.",
            "this"          : "TXT SIN FUEGO, SIN HUMO, SIN CENIZA"
        },';
$libraryBlocks['sinfuego_sinhumo_sinceniza_dorado_HTML'] ='
        {
            "type"          : "p",
            "fontweight"    : "700",
            "fontsize"      : "20",
            "height"        : "24",
            "width"         : "80%",
            "align"         : "center",
            "color"         : "#d6a76f",
            "color_bkg"     : "transparent",
            "margin_top"    : "50",
            "margin_bottom" : "50",
            "content"       : "SIN FUEGO, SIN HUMO, SIN CENIZA.",
            "this"          : "TXT SIN FUEGO, SIN HUMO, SIN CENIZA"
        },';


$libraryBlocks['legal_extra'] ='
        {
            "type"          : "disclaimer",
            "bgcolor"       : "transparent",
            "align"         : "justify",
            "color"         : "#34303d",
            "fontsize"      : "11",
            "txt"           : "LEGALES_TBD",
            "this"          : "LEGALES"
        },';
$libraryBlocks['disclaimer_fsh'] ='
        {
            "type"          : "disclaimer",
            "bgcolor"       : "transparent",
            "align"         : "justify",
            "color"         : "#34303d",
            "fontsize"      : "11",
            "txt"           : "Consulta nuestro aviso de privacidad con base en el cual son tratados tus datos personales <a href=\"https://www.pmiprivacy.com/es-la/consumer\" style=\"text-decoration:underline;\" target=\"_blank\">aquí</a>.",
            "this"          : "PRIVACY NOTICE"
        },
        {
            "type"          : "spacer",
            "height"        : "25",
            "color_bkg"     : "transparent",
            "this"          : "spacer"
        }';
$libraryBlocks['disclaimer_iqos'] ='
        {
            "type"          : "pframed",
            "fontweight"    : "300",
            "fontsize"      : "11",
            "height"        : "11",
            "width"         : "80%",
            "align"         : "justify",
            "color"         : "#34303d",
            "color_bkg"     : "transparent",
            "color_boxbkg"  : "#FFFFFF",
            "margin_top"    : "15",
            "margin_bottom" : "15",
            "framecolor"    : "#000000",
            "framepadding"  : "15",
            "content"       : "<b>Información importante:</b> IQOS es un dispositivo electrónico que, al calentar unidades de tabaco, entrega nicotina, la cual es adictiva y no está libre de riesgo. Prohibida su venta a menores de edad.",
            "this"          : "DTI - DUTY TO INFORM"
        },
        {
            "type"          : "disclaimer",
            "bgcolor"       : "transparent",
            "align"         : "justify",
            "color"         : "#34303d",
            "fontsize"      : "11",
            "txt"           : "Consulta nuestro aviso de privacidad con base en el cual son tratados tus datos personales <a href=\"https://www.pmiprivacy.com/es-la/consumer\" alias=\"footer_pmi_privacy\" style=\"text-decoration:underline;\" target=\"_blank\">aquí</a>.",
            "this"          : "PRIVACY NOTICE"

        },
        {
            "type"          : "spacer",
            "height"        : "25",
            "color_bkg"     : "transparent",
            "this"          : "spacer"
        },';
$libraryBlocks['pframed'] ='
        {
            "type"          : "pframed",
            "fontweight"    : "300",
            "fontsize"      : "16",
            "height"        : "20",
            "width"         : "80%",
            "align"         : "center",
            "color"         : "#000000",
            "color_bkg"     : "transparent",
            "color_boxbkg"  : "#faf7f4",
            "framecolor"    : "#faf7f4",
            "margin_top"    : "20",
            "margin_bottom" : "20",
            "framepadding"  : "30",
            "content"       : "<strong>IQOS</strong><sup>(2)</sup>",
            "this"          : ""
        },';
$libraryBlocks['cols_33_33_33'] ='
        {
            "type"          : "cols_33_33_33",
            "color_bkg"     : "transparent",
            "columns"       :
            [
                {
                    "coltype"        : "icontxtcta",
                    "icon"           : "https://image.e.iqos.com/lib/fe3a15707564067e7d1073/m/1/3d08a9e4-1cef-4a84-9e19-86d79885065e.png",
                    "iconFSH"        : "20.68-icon-1.png",
                    "iconDCE"        : "https://image.e.iqos.com/lib/fe3a15707564067e7d1073/m/1/3d08a9e4-1cef-4a84-9e19-86d79885065e.png",
                    "iconHTML"       : "20.68-icon-1.png",
                    "icon_url"       : "https://www.iqos.com/mx/es/ayuda.html",
                    "icon_widthNOPE" : "200",
                    "icon_alignNOPE" : "center",

                    "txt"            : "<span style=\"line-height:32px;\">CHAT EN VIVO</span><br>Nuestros<br>asesores están<br>listos para<br>atenderte.",
                    "txt_url"        : "#",
                    "txt_fontweight" : "300",
                    "txt_fontsize"   : "14px",
                    "txt_height"     : "18px",
                    "txt_width"      : "",
                    "txt_topm"       : "5",
                    "txt_align"      : "center",
                    "txt_color"      : "#2f2f2f",

                    "button"         : "https://image.e.iqos.com/lib/fe3a15707564067e7d1073/m/1/bfb1a866-3c17-41cc-8c47-ab00fff8131c.png",
                    "buttonHTML"     : "btn-visitar.png",
                    "buttonFSH"      : "btn-visitar.png",
                    "buttonDCE"      : "https://image.e.iqos.com/lib/fe3a15707564067e7d1073/m/1/bfb1a866-3c17-41cc-8c47-ab00fff8131c.png",
                    "buttonurl"      : "https://www.iqos.com/mx/es/ayuda.html",
                    "widthbutton"    : "120",
                    "button_topm"    : "15",
                    "buttonalign"    : "center"
                },
                {
                    "coltype"        : "icontxtcta",
                    "icon"           : "https://image.e.iqos.com/lib/fe3a15707564067e7d1073/m/1/30a55ba2-1c25-4bbc-ac57-69ff667362b3.png",
                    "iconFSH"        : "20.68-icon-2.png",
                    "iconDCE"        : "https://image.e.iqos.com/lib/fe3a15707564067e7d1073/m/1/30a55ba2-1c25-4bbc-ac57-69ff667362b3.png",
                    "iconHTML"       : "20.68-icon-2.png",
                    "icon_url"       : "https://www.facebook.com/iqosmx/",
                    "icon_widthNOPE" : "200",
                    "icon_alignNOPE" : "center",

                    "txt"            : "<span style=\"line-height:32px;\">FACEBOOK</span><br>Visita nuestro perfil, escríbenos y uno de nuestros asesores resolverá tus dudas.",
                    "txt_url"        : "#",
                    "txt_fontweight" : "300",
                    "txt_fontsize"   : "14px",
                    "txt_height"     : "18px",
                    "txt_width"      : "",
                    "txt_topm"       : "5",
                    "txt_align"      : "center",
                    "txt_color"      : "#2f2f2f",

                    "button"         : "https://image.e.iqos.com/lib/fe3a15707564067e7d1073/m/1/bfb1a866-3c17-41cc-8c47-ab00fff8131c.png",
                    "buttonHTML"     : "btn-visitar.png",
                    "buttonFSH"      : "btn-visitar.png",
                    "buttonDCE"      : "https://image.e.iqos.com/lib/fe3a15707564067e7d1073/m/1/bfb1a866-3c17-41cc-8c47-ab00fff8131c.png",
                    "buttonurl"      : "https://www.facebook.com/iqosmx/",
                    "widthbutton"    : "120",
                    "button_topm"    : "15",
                    "buttonalign"    : "center"
                },
                {
                    "coltype"        : "icontxtcta",
                    "icon"           : "https://image.e.iqos.com/lib/fe3a15707564067e7d1073/m/1/215ef010-0267-4d0a-ab5f-3a0506352905.png",
                    "iconFSH"        : "20.68-icon-3.png",
                    "iconDCE"        : "https://image.e.iqos.com/lib/fe3a15707564067e7d1073/m/1/215ef010-0267-4d0a-ab5f-3a0506352905.png",
                    "iconHTML"       : "20.68-icon-3.png",
                    "icon_url"       : "tel:8001476769",
                    "icon_widthNOPE" : "200",
                    "icon_alignNOPE" : "center",

                    "txt"            : "<span style=\"line-height:32px;\">TELÉFONO</span><br>800 1 IQOSMX (4767 69)<br>Llámanos.<br>Estaremos felices<br>de escucharte.",
                    "txt_url"        : "#",
                    "txt_fontweight" : "300",
                    "txt_fontsize"   : "14px",
                    "txt_height"     : "18px",
                    "txt_width"      : "",
                    "txt_topm"       : "5",
                    "txt_align"      : "center",
                    "txt_color"      : "#2f2f2f",

                    "button"         : "https://image.e.iqos.com/lib/fe3a15707564067e7d1073/m/1/76f389a5-61ae-4ebf-b324-8c172f08473a.png",
                    "buttonHTML"     : "btn-llamar.png",
                    "buttonFSH"      : "btn-llamar.png",
                    "buttonDCE"      : "https://image.e.iqos.com/lib/fe3a15707564067e7d1073/m/1/76f389a5-61ae-4ebf-b324-8c172f08473a.png",
                    "buttonurl"      : "tel:8001476769",
                    "widthbutton"    : "120",
                    "button_topm"    : "15",
                    "buttonalign"    : "center"
                }
            ]
        },';
$libraryBlocks['form'] ='
        {
            "type"          : "form",
            "ID"            : "form1",
            "method"        : "get",
            "fontweight"    : "300",
            "fontsize"      : "16",
            "align"         : "left",
            "color_greeting": "#000000",
            "color_bkg"     : "transparent",
            "width"         : "80%",
            "form_bgcolor"  : "#edeeed",
            "this"          : "",
            "imgBullet"     : "http://image.email-futurosinhumo.com/lib/fe42157175640478741574/m/1/23150b58-1b62-4576-9a23-8052512bca74.png",

            "formurl"       : "#",
            "formurl_HTML"  : "http://mailtool.lan:8888/form.php",
            "formurl_DCE"   : "#",

            "button"        : "btn-sa-enviar.png",
            "buttonwidth"   : "180",

            "list" :  
            [
                {
                    "name"      : "survey_reply",
                    "type"      : "radio",
                    "class"     : "container",
                    "checkedEJ" : "checked",
                    "checked"   : "",
                    "value"     : "Survey_1_only_IQOS",
                    "txt"       : "Solo uso IQOS."
                },
                {
                    "name"      : "survey_reply",
                    "type"      : "radio",
                    "class"     : "container",
                    "checked"   : "",
                    "value"     : "Survey_4_both_cigarettes_more",
                    "txt"       : "Uso IQOS tanto como fumo cigarros pero fumo cigarros con mayor frecuencia."
                },
                {
                    "name"      : "survey_reply",
                    "type"      : "radio",
                    "class"     : "container",
                    "checked"   : "",
                    "value"     : "Survey_5_only_cigarettes",
                    "txt"       : "Solo fumo cigarros."
                }
            ]
        },
        {
            "type"          : "rawHTML_______ACTIVATE_THIS_FOR_DCE_OR_LOCAL",
            "th_valign"     : "",
            "th_style"      : "",
            "th_align"      : "",
            "html"          : "<div data-type=\"slot\" data-key=\"bspwz932ek9\" data-label=\"Drop blocks or content here\">",
            "th_valign_NOPE"     : "top",
            "th_style_NOPE"      : "text-align:center;margin:0;padding:0;",
            "th_align_NOPE"      : "center",
            "html_NOPE"          : "%%=ContentBlockbyKey(\"lending_form_mx\")=%%",
            "this"          : "HTML RAW"
        },';
$libraryBlocks['mgm_coupon_1'] ='
        {
            "type"          : "pframed",
            "fontweight"    : "700",
            "fontsize"      : "26",
            "height"        : "28",
            "width"         : "60%",
            "align"         : "center",
            "color"         : "#000000",
            "color_bkg"     : "#f6f6f6",
            "color_boxbkg"  : "#e2aa68",
            "margin_top"    : "10",
            "margin_bottom" : "20",
            "framecolor"    : "#e2aa68",
            "framepadding"  : "10",
            "content"       : "%%=v(@voucher_code)=%%",
            "this"          : "MGM COUPON"
        },';
$libraryBlocks['mgm_coupon_2cols'] ='
        {
            "type"              : "cols_m_A_B_m",
            "margin_sides"      : "10",
            "margin_topbottom"  : "30",
            "color_bkg"         : "#f6f6f6",
            "this"              : "MGM COUPON",
            "columns"           : 
            [
                {
                    "coltype"   : "img",
                    "color_bkg" : "#f7f7f7",
                    "widthp100" : "40",
                    "imgwidth"  : "200",
                    "img"       : "22.id-x.jpg",
                    "imgulr"    : "#",
                    "this"      : "IMG 22.id-x"
                },
                {
                    "coltype"            : "txt_pframed",
                    "color_bkg"          : "#f6f6f6",
                    "widthp100"          : "60",
                    "p"                  : "<br><br>TU CÓDIGO ÚNICO ES:",
                    "p_fontweight"       : "700",
                    "p_fontsize"         : "16px",
                    "p_height"           : "20px",
                    "p_align"            : "center",
                    "p_color"            : "#111111",
                    "pframed"            : "%%=v(@voucher_code)=%%",
                    "pframed_fontsizepx" : "20",
                    "pframed_color"      : "#111111",
                    "pframed_widthpx"    : "250",
                    "pframed_heightpx"   : "50",
                    "border"             : "3",
                    "border_color"       : "#e2aa68",
                    "frame_bkg"          : "#e2aa68",
                    "button"             : "btn-sa-compartir.png",
                    "widthbutton"        : "220",
                    "margintop"          : "20",
                    "marginbottom"       : "20",
                    "buttonHTML"         : "btn-sa-compartir.png",
                    "donde_codificar_la_siguiente url" : "https://www.urlencoder.org/",
                    "url_ctaDECODED"     : "whatsapp://send?text=",
                    "url_cta1"           : "whatsapp://send?text=",
                    "url_cta2"           : "https://wa.me/?text=",
                    "url_cta3"           : "https://web.whatsapp.com/send?text=",
                    "url_cta"            : "https://wa.me/?text=",
                    "pB"                 : "Te recomendamos hacerlo<br>desde tu celular.",
                    "pB_fontweight"      : "300",
                    "pB_fontsize"        : "16px",
                    "pB_height"          : "20px",
                    "pB_align"           : "center",
                    "pB_color"           : "#111111"
                }
            ]
        },';
$libraryBlocks['rgm_coupon_2cols'] = '
        {
            "type"              : "cols_m_A_B_m",
            "margin_sides"      : "10",
            "margin_topbottom"  : "30",
            "color_bkg"         : "#f6f6f6",
            "this"              : "CUPON RGM NUEVO - VER 2",
            "columns"           :
            [
                {
                    "coltype"       : "txt_pframed",
                    "color_bkg"     : "#f6f6f6",
                    "widthp100"     : "50",
                    
                    "p"             : "<br>Utiliza el código<br>",
                    "p_fontweight"  : "700",
                    "p_fontsize"    : "16px",
                    "p_height"      : "20px",
                    "p_align"       : "center",
                    "p_color"       : "#111111",
                    
                    "pframed"            : "RGM_W220",
                    "pframed_fontsizepx" : "32",
                    "pframed_color"      : "#e2aa68",
                    "pframed_widthpx"    : "250",
                    "pframed_heightpx"   : "50",
                    "border"             : "3",
                    "border_color"       : "#34303d",
                    "frame_bkg"          : "#f6f6f6"
                },
                {
                    "coltype"       : "txt_cta",
                    "color_bkg"     : "#f6f6f6",
                    "widthp100"     : "50",

                    "h1"            : "",
                    "h1_fontweight" : "700",
                    "h1_fontsize"   : "18px",
                    "h1_height"     : "20px",
                    "h1_align"      : "left",
                    "h1_color"      : "#34303d",
                    
                    "p"             : "Recibe<br><span style=' . "'color: #e2aa68;font-size:40px;line-height:40px;;font-weight:700;'>$300.00<sup style='font-size:14px;'> 2</sup></span><br>de descuento en la <br>compra de tu<br>primer <span style='color: #e2aa68; font-weight: 700;'>Kit IQOS.</span>".'",
                    "p_fontweight"  : "300",
                    "p_fontsize"    : "18px",
                    "p_height"      : "22px",
                    "p_align"       : "center",
                    "p_color"       : "#111111",

                    "button"        : "",
                    "buttonurl"     : "",
                    "widthbutton"   : "160",
                    "button_topm"   : "30",
                    "buttonalign"   : "center"
                }
            ]
        },';
$libraryBlocks['cta_share_WA_coupon'] ='
        {
            "type"          : "cta1",
            "widthbutton"   : "260",
            "color_bkg"     : "transparent",
            "button"        : "btn-sa-compartir.png",
            "buttonHTML"    : "",
            "buttonFSH"     : "",
            "buttonDCE"     : "",

            "donde_codificar_la_siguiente_url" : "https://www.urlencoder.org/",
            "url_cta1"       : "whatsapp://send?text=",
            "url_cta2"       : "https://wa.me/?text=",
            "url_cta3"       : "https://web.whatsapp.com/send?text=",
            "url_cta"        : "whatsapp://send?text=",

            "this"          : "CTA compartir"
        },';
$libraryBlocks['graylineframed'] ='
        {
            "type"          : "graylineframed",
            "img"           : "mgm-greyline.png",
            "imgwidth"      : "400",
            "height"        : "auto",
            "width"         : "80%",
            "align"         : "center",
            "color_bkg"     : "transparent",
            "color_boxbkg"  : "#e2aa68",
            "margin_top"    : "0",
            "margin_bottom" : "0",
            "this"          : "GRAY LINE"
        },';
$libraryBlocks['shopping_list'] ='
        {
            "type"              : "shopping_list",
            "margin_sides"      : "12",
            "margin_topbottom"  : "0",
            "margin_bgcolor"    : "transparent",
            "this"              : "ITEM LIST",
            "columns"           :
            [
                {
                    "coltype"       : "img",
                    "col_bgcolor"   : "#f6f6f6",
                    "widthp100"     : "30",
                    "imgwidth"      : "100",
                    "img"           : "22.id-item-.jpg",
                    "imgHTML"       : "",
                    "imgFSH"        : "",
                    "imgDCE"        : "",
                    "imgulr"        : "#",
                    "this"          : "IMG 22.id-item-"
                },
                {
                    "coltype"       : "description_cta",
                    "col_bgcolor"   : "#f6f6f6",
                    "widthp100"     : "55",

                    "h1"            : "",
                    "h1_fontweight" : "700",
                    "h1_fontsize"   : "20px",
                    "h1_height"     : "20px",
                    "h1_align"      : "left",
                    "h1_color"      : "#34303d",

                    "p"             : "TAPA IQOS 3 DUO DORADO",
                    "p_fontweight"  : "300",
                    "p_fontsize"    : "14px",
                    "p_height"      : "18px",
                    "p_align"       : "left",
                    "p_color"       : "#414141",

                    "button"        : "",
                    "buttonurl"     : "",
                    "widthbutton"   : "200",
                    "button_topm"   : "20",
                    "buttonalign"   : "center"
                },
                {
                    "coltype"       : "price",
                    "col_bgcolor"   : "#f6f6f6",
                    "widthp100"     : "15",

                    "h1"            : "$289",
                    "h1_fontweight" : "700",
                    "h1_fontsize"   : "20px",
                    "h1_height"     : "20px",
                    "h1_align"      : "center",
                    "h1_color"      : "#34303d"
                }
            ]
        },';
$libraryBlocks['3cols_chat_fb_phone'] ='
        {
            "type"          : "cols_33_33_33",
            "color_bkg"     : "#FFFFFF",
            "columns"       :
            [
                {
                    "coltype"        : "icontxtcta",
                    "icon"           : "contact-3cols-icon-1-chat.png",
                    "iconFSH"        : "",
                    "iconDCE"        : "",
                    "iconHTML"       : "",
                    "icon_url"       : "https://www.iqos.com/mx/es/ayuda.html",
                    "icon_widthNOPE" : "200",
                    "icon_alignNOPE" : "center",

                    "txt"            : "<span style=\"line-height:32px;\">CHAT EN VIVO</span><br>Nuestros<br>asesores están<br>listos para<br>atenderte.",
                    "txt_url"        : "#",
                    "txt_fontweight" : "300",
                    "txt_fontsize"   : "14px",
                    "txt_height"     : "18px",
                    "txt_width"      : "",
                    "txt_topm"       : "5",
                    "txt_align"      : "center",
                    "txt_color"      : "#2f2f2f",

                    "button"         : "btn-frameless-visitar.png",
                    "buttonHTML"     : "",
                    "buttonFSH"      : "",
                    "buttonDCE"      : "",
                    "buttonurl"      : "https://www.iqos.com/mx/es/ayuda.html",
                    "widthbutton"    : "120",
                    "button_topm"    : "30",
                    "buttonalign"    : "center"
                },
                {
                    "coltype"        : "icontxtcta",
                    "icon"           : "contact-3cols-icon-2-fb.png",
                    "iconFSH"        : "",
                    "iconDCE"        : "",
                    "iconHTML"       : "",
                    "icon_url"       : "https://www.facebook.com/iqosmx/",
                    "icon_widthNOPE" : "200",
                    "icon_alignNOPE" : "center",

                    "txt"            : "<span style=\"line-height:32px;\">FACEBOOK</span><br>Visita nuestro perfil, escríbenos y uno de nuestros asesores resolverá tus dudas.",
                    "txt_url"        : "#",
                    "txt_fontweight" : "300",
                    "txt_fontsize"   : "14px",
                    "txt_height"     : "18px",
                    "txt_width"      : "",
                    "txt_topm"       : "5",
                    "txt_align"      : "center",
                    "txt_color"      : "#2f2f2f",

                    "button"         : "btn-frameless-visitar.png",
                    "buttonHTML"     : "",
                    "buttonFSH"      : "",
                    "buttonDCE"      : "",
                    "buttonurl"      : "https://www.facebook.com/iqosmx/",
                    "widthbutton"    : "120",
                    "button_topm"    : "30",
                    "buttonalign"    : "center"
                },
                {
                    "coltype"        : "icontxtcta",
                    "icon"           : "contact-3cols-icon-3-phone.png",
                    "iconFSH"        : "",
                    "iconDCE"        : "",
                    "iconHTML"       : "",
                    "icon_url"       : "tel:8001476769",
                    "icon_widthNOPE" : "200",
                    "icon_alignNOPE" : "center",

                    "txt"            : "<span style=\"line-height:32px;\">TELÉFONO</span><br>800 1 IQOSMX (4767 69)<br>Llámanos.<br>Estaremos felices<br>de escucharte.",
                    "txt_url"        : "#",
                    "txt_fontweight" : "300",
                    "txt_fontsize"   : "14px",
                    "txt_height"     : "18px",
                    "txt_width"      : "",
                    "txt_topm"       : "5",
                    "txt_align"      : "center",
                    "txt_color"      : "#2f2f2f",

                    "button"         : "btn-frameless-llamar.png",
                    "buttonHTML"     : "",
                    "buttonFSH"      : "",
                    "buttonDCE"      : "",
                    "buttonurl"      : "tel:8001476769",
                    "widthbutton"    : "120",
                    "button_topm"    : "30",
                    "buttonalign"    : "center"
                }
            ]
        },';
$libraryBlocks['footer_brand_world'] =',
        {
            "_THIS_BLOCK"   : "-------------- FOOTER ------------",
            "type"          : "spacer",
            "height"        : "15",
            "color_bkg"     : "#34303e",
            "this"          : "FOOTER SPACER"
        },
        {
            "type"              : "cols_m_A_B_m",
            "margin_sides"      : "15",
            "margin_topbottom"  : "10",
            "color_bkg"         : "#34303e",
            "this"              : "FOOTER LINKS STORE & CONTACT",
            "columns"           :
            [
                {
                    "coltype"       : "txt_cta",
                    "color_bkg"     : "#34303e",
                    "widthp100"     : "25",

                    "h1"            : "",
                    "h1_fontweight" : "700",
                    "h1_fontsize"   : "18px",
                    "h1_height"     : "20px",
                    "h1_align"      : "left",
                    "h1_color"      : "#34303d",
                    
                    "p"             : "<a href=\"https://www.iqos.com/mx/es/descubre/devices.html\"><span style=\"color:#c7c7c7;\">COMPRA<br>EN LÍNEA</span></a>",
                    "p_fontweight"  : "300",
                    "p_fontsize"    : "12px",
                    "p_height"      : "14px",
                    "p_align"       : "center",
                    "p_color"       : "#c7c7c7",

                    "button"        : "",
                    "buttonurl"     : "#",
                    "widthbutton"   : "235",
                    "button_topm"   : "30",
                    "buttonalign"   : "center",
                    "THISIMG"       : ""
                },
                {
                    "coltype"       : "txt_cta",
                    "color_bkg"     : "#34303e",
                    "widthp100"     : "25",

                    "h1"            : "",
                    "h1_fontweight" : "700",
                    "h1_fontsize"   : "18px",
                    "h1_height"     : "20px",
                    "h1_align"      : "left",
                    "h1_color"      : "#34303d",
                    
                    "p"             : "<a href=\"https://www.iqos.com/mx/es/localizador-tiendas.html\"><span style=\"color:#c7c7c7;\">LOCALIZA<br>UNA TIENDA</span></a>",
                    "p_fontweight"  : "300",
                    "p_fontsize"    : "12px",
                    "p_height"      : "14px",
                    "p_align"       : "center",
                    "p_color"       : "#c7c7c7",

                    "button"        : "",
                    "buttonurl"     : "#",
                    "widthbutton"   : "235",
                    "button_topm"   : "30",
                    "buttonalign"   : "center",
                    "THISIMG"       : ""
                },
                {
                    "coltype"       : "txt_cta",
                    "color_bkg"     : "#34303e",
                    "widthp100"     : "25",

                    "h1"            : "",
                    "h1_fontweight" : "700",
                    "h1_fontsize"   : "18px",
                    "h1_height"     : "20px",
                    "h1_align"      : "left",
                    "h1_color"      : "#34303d",
                    
                    "p"             : "<a href=\"mailto:contact.mx@iqos.com\"><span style=\"color:#c7c7c7;\">EMAIL</span></a>",
                    "p_fontweight"  : "300",
                    "p_fontsize"    : "12px",
                    "p_height"      : "14px",
                    "p_align"       : "center",
                    "p_color"       : "#c7c7c7",

                    "button"        : "",
                    "buttonurl"     : "#",
                    "widthbutton"   : "235",
                    "button_topm"   : "30",
                    "buttonalign"   : "center",
                    "THISIMG"       : ""
                },
                {
                    "coltype"       : "txt_cta",
                    "color_bkg"     : "#34303e",
                    "widthp100"     : "25",

                    "h1"            : "",
                    "h1_fontweight" : "700",
                    "h1_fontsize"   : "18px",
                    "h1_height"     : "20px",
                    "h1_align"      : "left",
                    "h1_color"      : "#34303d",
                    
                    "p"             : "<a href=\"tel:8001476769\"><span style=\"color:#c7c7c7;\">LLÁMANOS</span></a>",
                    "p_fontweight"  : "300",
                    "p_fontsize"    : "12px",
                    "p_height"      : "14px",
                    "p_align"       : "center",
                    "p_color"       : "#c7c7c7",

                    "button"        : "",
                    "buttonurl"     : "#",
                    "widthbutton"   : "235",
                    "button_topm"   : "30",
                    "buttonalign"   : "center",
                    "THISIMG"       : ""
                }

            ]
        },
        {
            "type"          : "spacer",
            "height"        : "20",
            "color_bkg"     : "#34303e",
            "this"          : "FOOTER SPACER"
        },
        {
            "type"              : "cols_m_A_B_m",
            "margin_sides"      : "5",
            "margin_topbottom"  : "1",
            "color_bkg"         : "#34303e",
            "this"              : "FOOTER LOGO & SOCIAL",
            "columns"           :
            [
                {
                    "coltype"       : "img",
                    "color_bkg"     : "#34303e",
                    "widthp100"     : "30",
                    "imgwidth"      : "130",
                    "mtop"          : "0",
                    "img"           : "footer-logo-iqos.png",
                    "imgulr"        : "#",
                    "THISIMG"       : "IMG footer-logo-iqos LOGO IQOS BRAND WORLD"
                },
                {
                    "coltype"       : "spacer",
                    "color_bkg"     : "#34303e",
                    "widthp100"     : "50",
                    "mtop"          : "0"
                },
                {
                    "coltype"       : "img",
                    "color_bkg"     : "#34303e",
                    "widthp100"     : "10",
                    "imgwidth"      : "30",
                    "mtop"          : "6",
                    "img"           : "footer-logo-fb.png",
                    "imgulr"        : "https://www.facebook.com/iqosmx/",
                    "THISIMG"       : "IMG footer-logo-fb LOGO FB"
                },
                {
                    "coltype"       : "img",
                    "color_bkg"     : "#34303e",
                    "widthp100"     : "10",
                    "imgwidth"      : "30",
                    "mtop"          : "6",
                    "img"           : "footer-logo-ig.png",
                    "imgulr"        : "https://www.instagram.com/iqos_mx/",
                    "THISIMG"       : "IMG footer-logo-ig LOGO IG"
                }
            ]
        },
        {
            "type"          : "spacer",
            "height"        : "35",
            "color_bkg"     : "#34303e",
            "this"          : "FOOTER SPACER"
        },
        {
            "_THIS_BLOCK"   : "-------------- LEGAL ------------",
            "type"          : "p",
            "fontweight"    : "300",
            "fontsize"      : "11",
            "height"        : "11",
            "width"         : "90%",
            "align"         : "center",
            "color"         : "#34303d",
            "color_bkg"     : "transparent",
            "margin_top"    : "25",
            "margin_bottom" : "15",
            "content"       : "&copy; 2022 Philip Morris Products S.A. Todos los derechos reservados.<br>Lago Zurich No. 245, Edificio Presa Falcón, Tercer Piso, Ampliación Granada,<br> Miguel Hidalgo, 11529, CDMX, México. <a href=\"https://www.iqos.com/mx/es/preference-center.html?data=sDm1jmlDBx8hegPLF8R%2fyCqu1tRRL2yfnvTUZajduvA%3d&key=79d6bb837848a629&mode=form&Tracking_Parameter=%%__AdditionalEmailAttribute1%%\"><span style=\"text-decoration:underline;color:blue;\">Darme de baja.</span></a>",
            "this"          : "COPYRIGHT"
        }';




        
$libraryBlocks['header_brand_world'] ='
        {
            "type"          : "img",
            "bgcolor"       : "transparent",
            "img"           : "header-iqos-bw-8.png",
            "url"           : "#",
            "this"          : "IMG header IQOS Brand World"
        },';
$libraryBlocks['p300_BW'] ='
        {
            "type"          : "p",
            "font"          : "Cabin",
            "fontweight"    : "300",
            "fontsize"      : "18",
            "height"        : "24",
            "width"         : "80%",
            "align"         : "center",
            "color"         : "#34303d",
            "color_bkg"     : "transparent",
            "margin_top"    : "50",
            "margin_bottom" : "50",
            "content"       : "<span style=\"color:#00d1d2;\">IQOS</span> Quis autem<span style=\"font-size:12px;\"><sup>(1)</sup></span> vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?",
            "this"          : "TXT"
        },';
$libraryBlocks['p700_BW'] ='
        {
            "type"          : "p",
            "font"          : "Cabin",
            "fontweight"    : "700",
            "fontsize"      : "20",
            "height"        : "26",
            "width"         : "80%",
            "align"         : "center",
            "color"         : "#34303d",
            "color_bkg"     : "transparent",
            "margin_top"    : "50",
            "margin_bottom" : "50",
            "content"       : "<span style=\"color:#e4ab68;\">IQOS</span> Et harum quidem rerum facilis est et expedita distinctio.",
            "this"          : "TXT"
        },';

$libraryBlocks['FSH_Yellow_Share'] ='
        {
            "type"              : "cols_m_A_B_m",
            "margin_sides"      : "4",
            "margin_topbottom"  : "25",
            "color_bkg2"        : "#ffdd3a",
            "color_bkg"         : "#ffffff",
            "this"              : "SHARE FB TW WA",
            "columns"           :
            [
                {
                    "coltype"       : "img",
                    "color_bkg"     : "#ffdd3a",
                    "widthp100"     : "40",
                    "imgwidth"      : "260",
                    "mtop"          : "0",
                    "img"           : "yellow-share-1-txt.png",
                    "imgulr"        : "#",
                    "THISIMG"       : "IMG yellow-share-1-txt  TXT COMPARTE ESTA INICIATIVA"
                },
                {
                    "coltype"       : "img",
                    "color_bkg"     : "#ffdd3a",
                    "widthp100"     : "18",
                    "imgwidth"      : "45",
                    "mtop"          : "15",
                    "img"           : "yellow-share-2-fb-share.png",
                    "imgulr"        : "http://www.facebook.com/share.php?u=https://futurosinhumo.com.mx&quote=Hablemos%20para%20que%2015%20millones%20de%20fumadores%20puedan%20elegir.%20Hablemos%20de%20alternativas%20para%20los%20que%20fuman.%20%C3%9Anete%20al%20movimiento.",
                    "THISIMG"       : "IMG yellow-share-2-fb-share"
                },
                {
                    "coltype"       : "img",
                    "color_bkg"     : "#ffdd3a",
                    "widthp100"     : "18",
                    "imgwidth"      : "45",
                    "mtop"          : "15",
                    "img"           : "yellow-share-3-tw-share.png",
                    "imgulr"        : "https://ctt.ac/z13Mr",
                    "THISIMG"       : "IMG yellow-share-3-tw-share"
                },
                {
                    "coltype"       : "img",
                    "color_bkg"     : "#ffdd3a",
                    "widthp100"     : "18",
                    "imgwidth"      : "45",
                    "mtop"          : "15",
                    "img"           : "yellow-share-4-wa-share.png",
                    "imgulr"        : "https://wa.me/?text=Hablemos%20para%20que%2015%20millones%20de%20fumadores%20puedan%20elegir.%20Hablemos%20de%20alternativas%20para%20los%20que%20fuman.%20%C3%9Anete%20al%20movimiento.%20https%3A%2F%2Ffuturosinhumo.com.mx",
                    "THISIMG"       : "IMG yellow-share-4-wa-share"
                },
                {
                    "coltype"       : "spacer",
                    "color_bkg"     : "#ffdd3a",
                    "widthp100"     : "6",
                    "mtop"          : "0"
                }
            ]
        },
        {
            "type"          : "img",
            "bgcolor"       : "transparent",
            "img"           : "yellow-share-5-end.png",
            "url"           : "#",
            "this"          : "IMG yellow-share-5-end   triangulo de direccion de globo de dialogo"
        },';
$libraryBlocks['FSH_Yellow_Share_2'] ='
        {
            "type"              : "cols_m_A_B_m",
            "margin_sides"      : "4",
            "margin_topbottom"  : "25",
            "color_bkg2"        : "#ffdd3a",
            "color_bkg"         : "#ffffff",
            "this"              : "SHARE FB TW WA",
            "columns"           :
            [
                {
                    "coltype"       : "img",
                    "color_bkg"     : "#ffdd3a",
                    "widthp100"     : "59",
                    "imgwidth"      : "318",
                    "mtop"          : "0",
                    "img"           : "yellow-share-1v1-txt.png",
                    "imgulr"        : "#",
                    "THISIMG"       : "IMG TXT COMPARTE ESTA INICIATIVA yellow-share-1v1-txt "
                },
                {
                    "coltype"       : "img",
                    "color_bkg"     : "#ffdd3a",
                    "widthp100"     : "12",
                    "imgwidth"      : "45",
                    "mtop"          : "15",
                    "img"           : "yellow-share-2-fb-share.png",
                    "imgulr"        : "http://www.facebook.com/share.php?u=https://futurosinhumo.com.mx&quote=Hablemos%20para%20que%2015%20millones%20de%20fumadores%20puedan%20elegir.%20Hablemos%20de%20alternativas%20para%20los%20que%20fuman.%20%C3%9Anete%20al%20movimiento.",
                    "THISIMG"       : "IMG FACEBOOK yellow-share-2-fb-share"
                },
                {
                    "coltype"       : "img",
                    "color_bkg"     : "#ffdd3a",
                    "widthp100"     : "12",
                    "imgwidth"      : "45",
                    "mtop"          : "15",
                    "img"           : "yellow-share-3-tw-share.png",
                    "imgulr"        : "https://ctt.ac/z13Mr",
                    "THISIMG"       : "IMG TWITTER yellow-share-3-tw-share"
                },
                {
                    "coltype"       : "img",
                    "color_bkg"     : "#ffdd3a",
                    "widthp100"     : "12",
                    "imgwidth"      : "45",
                    "mtop"          : "15",
                    "img"           : "yellow-share-4-wa-share.png",
                    "imgulr"        : "https://wa.me/?text=Hablemos%20para%20que%2015%20millones%20de%20fumadores%20puedan%20elegir.%20Hablemos%20de%20alternativas%20para%20los%20que%20fuman.%20%C3%9Anete%20al%20movimiento.%20https%3A%2F%2Ffuturosinhumo.com.mx",
                    "THISIMG"       : "IMG WHATSAPP yellow-share-4-wa-share"
                },
                {
                    "coltype"       : "spacer",
                    "color_bkg"     : "#ffdd3a",
                    "widthp100"     : "5",
                    "mtop"          : "0"
                }
            ]
        },
        {
            "type"          : "img",
            "bgcolor"       : "transparent",
            "img"           : "yellow-share-5-end.png",
            "url"           : "#",
            "this"          : "IMG yellow-share-5-end   triangulo de direccion de globo de dialogo"
        },';
$libraryBlocks['FSH_Framed_Card'] ='
        {
            "type"              : "cols_m_A_B_m",
            "frameSize"         :  "2",
            "frameColor"        :  "#ffdd3a",
            "margin_sides"      : "5",
            "margin_topbottom"  : "0",
            "color_bkg"         : "transparent",
            "this"              : "CARD 1",
            "columns"           :
            [
                {
                    "coltype"       : "img",
                    "color_bkg"     : "#ffdd3a",
                    "widthp100"     : "25",
                    "imgwidth"      : "190",
                    "mtop"          : "0",
                    "img"           : "22.id-x.jpg",
                    "imgulr"        : "#",
                    "THISIMG"       : "IMG 22.id-x"
                },
                {
                    "coltype"       : "spacer",
                    "color_bkg"     : "transparent",
                    "widthp100"     : "5",
                    "mtop"          : "0"
                },
                {
                    "coltype"       : "txt_cta",
                    "color_bkg"     : "transparent",
                    "widthp100"     : "65",

                    "h1"            : "",
                    "h1_fontweight" : "700",
                    "h1_fontsize"   : "18px",
                    "h1_height"     : "24px",
                    "h1_align"      : "left",
                    "h1_color"      : "#34303d",
                    
                    "p"             : "<br>Hoy en día existen muchos fumadores adultos que no tienen acceso a productos de menor riesgo, por esta razón, es necesario hacerle saber al <b>Congreso</b> que estas alternativas deben ser reguladas y no prohibidas.",
                    "p_fontweight"  : "300",
                    "p_fontsize"    : "16px",
                    "p_height"      : "24px",
                    "p_align"       : "left",
                    "p_color"       : "#111111",

                    "button"        : "",
                    "buttonurl"     : "#",
                    "widthbutton"   : "235",
                    "button_topm"   : "30",
                    "buttonalign"   : "center",
                    "THISIMG"       : ""
                },
                {
                    "coltype"       : "spacer",
                    "color_bkg"     : "transparent",
                    "widthp100"     : "5",
                    "mtop"          : "0"
                }
            ]
        },';

$libraryBlocks['columns'] ='
        {
            "type"              : "columns",
            "font"              : "Cabin",
            "margin_sides"      : "0",
            "margin_top"        : "0",
            "margin_bottom"     : "0",
            "color_bkg"         : "transparent",
            "this"              : "",
            "columns"           :
            [
                {
                    "coltype"       : "img",
                    "color_bkg"     : "transparent",
                    "widthp100"     : "40",
                    "imgwidth"      : "240",
                    "mtop"          : "0",
                    "img"           : "22.id-x.jpg",
                    "imgulr"        : "#",
                    "THISIMG"       : "IMG 22.id-x"
                },
                {
                    "coltype"       : "spacer",
                    "color_bkg"     : "transparent",
                    "widthp100"     : "5",
                    "mtop"          : "0"
                },
                {
                    "coltype"       : "multirows",
                    "color_bkg"     : "transparent",
                    "widthp100"     : "50",
                    "rows"          :
                    [
                        {
                            "rowtype"       : "p",
                            "p"             : "Lorem ipsum dolor sit amet, consectetur adipiscing elit",
                            "color_bkg"     : "transparent",
                            "p_fontweight"  : "300",
                            "p_fontsize"    : "18px",
                            "p_height"      : "22px",
                            "p_align"       : "center",
                            "p_color"       : "#34303d",
                            "margin_top"    : "20",
                            "margin_bottom" : "5"
                        },
                        {
                            "rowtype"       : "spacer",
                            "height"        : "20px",
                            "color_bkg"     : "transparent"
                        },
                        {
                            "rowtype"       : "pframed",
                            "color_bkg"     : "transparent",
                            "p"             : "<b>Información importante:</b> Lorem ipsum dolor sit amet, consectetur adipiscing elit",
                            "fontweight"    : "300",
                            "fontsize"      : "9",
                            "lineheight"    : "11",
                            "align"         : "center",
                            "width"         : "100%",
                            "margin_top"    : "5",
                            "margin_bottom" : "5",

                            "color"         : "#000000",
                            "framecolor"    : "#000000",
                            "framebgcolor"  : "transparent",
                            "framepadding"  : "5",
                            "border"        : "1",
                            
                            "this"          : ""
                        },
                        {
                            "rowtype"       : "cta1_cta2",
                            "color_bkg"     : "transparent",
                            "margin_top"    : "20",
                            "margin_bottom" : "0",

                            "widthbutton1"   : "130",
                            "button1"        : "btn.png",
                            "url_cta1"       : "#",
                            "align1"         : "left",

                            "widthbutton2"   : "130",
                            "button2"        : "btn.png",
                            "url_cta2"       : "#",
                            "align2"         : "left",

                            "this"          : "CTA1 /CTA2"
                        },
                        {
                            "rowtype"        : "img",
                            "img"            : "22.id-x.png",
                            "color_bkg"      : "transparent",
                            "margin_top"     : "10",
                            "margin_bottom"  : "10",
                            "imgWidth"       : "100",
                            "align"          : "center",
                            "imgulr"         : "#",
                            "THISIMG"        : "22.id-x"
                        }
                    ]
                },
                {
                    "coltype"       : "spacer",
                    "color_bkg"     : "transparent",
                    "widthp100"     : "5",
                    "mtop"          : "0"
                }
            ]
        },';

$libraryBlocks['greeting_v2'] ='
        {
            "type"          : "greeting_v2",
            "fontweight"    : "700",
            "color_greeting": "#34303d",
            "color_bkg"     : "transparent",
            "margin_top"    : "50",
            "margin_bottom" : "0",
            "greeting"      : "Hola, %%first_name%%",
            "this"          : "Hola [nombre]"
        },';
$libraryBlocks['cta1_v2'] ='
        {
            "type"          : "cta1_v2",
            "widthbutton"   : "280",
            "color_bkg"     : "transparent",
            "button"        : "btn.png",
            "margin_top"    : "50",
            "margin_bottom" : "0",
            "url_cta"       : "#",
            "this"          : "CTA btn"
        },';
$libraryBlocks['spacer_v2'] ='
        {
            "type"          : "spacer_v2",
            "height"        : "30",
            "color_bkg"     : "#faf7f4",
            "margin_sides"  : "5",
            "margin_color"  : "transparent",
            "readme"        : "height px, margin %",
            "this"          : "spacer" 
        },';
$libraryBlocks['p_v2'] ='
        {
            "type"          : "p_v2",
            "font"          : "Cabin",
            "fontweight"    : "300",
            "fontsize"      : "18",
            "height"        : "28", 
            "width"         : "80%",
            "align"         : "center",
            "color"         : "#34303d",
            "color_bkg"     : "#faf7f4",
            "margin_top"    : "30",
            "margin_bottom" : "30",
            "margin_sides"  : "5",
            "margin_color"  : "transparent",
            "content"       : "<span style=\"color:#00d1d2;font-weight:700;\">Ut enim ad minima veniam,</span> quis nostrum <a href=\"http://somelink\" style=\"text-decoration:underline;\" target=\"_blank\">LINK</a> exercitationem<span style=\"font-size:12px;\"><sup>(1)</sup></span> ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?",
            "readme"        : "height px, margin %" ,
            "this"          : ""
        },';
$libraryBlocks['ElijoIQOS'] ='
        {
            "type"          : "p",
            "font"          : "Cabin",
            "fontweight"    : "700",
            "fontsize"      : "26",
            "height"        : "30",
            "width"         : "80%",
            "align"         : "center",
            "color"         : "#00d1d2",
            "color_bkg"     : "transparent",
            "margin_top"    : "50",
            "margin_bottom" : "50",
            "content"       : "#ElijoIQOS",
            "this"          : "#ElijoIQOS"
        },';
$libraryBlocks['Solo_con_IQOS'] ='
        {
            "type"          : "p",
            "font"          : "Cabin",
            "fontweight"    : "700",
            "fontsize"      : "26",
            "height"        : "30",
            "width"         : "80%",
            "align"         : "center",
            "color"         : "#00d1d2",
            "color_bkg"     : "transparent",
            "margin_top"    : "50",
            "margin_bottom" : "50",
            "content"       : "Solo con IQOS",
            "this"          : "Solo con IQOS"
        },';

        

$libraryBlocks['footer_bw_v1'] ='
        {
            "type"          : "footer_bw_v1"
        }';
$libraryBlocks['footer_bw_v1_lowercase'] ='
        {
            "type"          : "footer_bw_v1_lowercase"
        }';
$libraryBlocks['footer_fsh'] ='
        {
            "type"          : "footer_fsh"
        }';
$libraryBlocks['footer_bw_oos'] ='
        {
            "type"          : "footer_bw_oos"
        }';
$libraryBlocks['footer_bw_oos_lowercase'] ='
        {
            "type"          : "footer_bw_oos_lowercase"
        }';

$libraryBlocks['undefined'] ='
        {
        },';


// ----


// Get the keys of array
// print_r(array_keys($libraryBlocks));

/*
    "header_mgm_tu_codigo_unico",
    "get_iqos_wallet_app",
    "get_iqos_wallet_app_slate",
    "Solo_con_IQOS",

    "img_Logo_Header_HTML",
    "img_Cover_HTML",
    "img",
    "spacer",
    "greeting_negro",
    "greeting_dorado",
    "p300",
    "p700",
    "rawHTML",
    "m_TXT_TXT_m",
    "m_TXT_IMG_m",
    "m_IMG_TXT_m",
    "m_IMG_IMG_m",
    "btn_sa_comprar_HTML",
    "cta1",
    "one_rs",
    "two_rs",
    "three_rs",
    "sinfuego_sinhumo_sinceniza_negro_HTML",
    "sinfuego_sinhumo_sinceniza_dorado_HTML",
    "legal_extra",
    "disclaimer_iqos",
    "disclaimer_fsh",
    "pframed",
    "cols_33_33_33",
    "form",
    "mgm_coupon_1",
    "mgm_coupon_2cols",
    "rgm_coupon_2cols",
    "cta_share_WA_coupon",
    "graylineframed",
    "shopping_list",
    "3cols_chat_fb_phone",
    "footer_brand_world",
    "header_brand_world",
    "p300_BW",
    "p700_BW",
    "FSH_Yellow_Share",
    "FSH_Yellow_Share_2",
    "FSH_Framed_Card",
    "columns",
    "greeting_v2",
    "cta1_v2",
    "spacer_v2",
    "p_v2",
    "footer_bw_v1",

*/
