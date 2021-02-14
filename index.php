<?php
    #echo "Workes";
    $Link = ""; # Link to were this file is
    $DirForImages = ""; # Were the images are going to be stored ex: images/
    $Tittle = "Example";
    $Description = "Example";

    $files = array_merge(glob($DirForImages . "*.png"));
    #echo $files;
    $files = array_combine($files, array_map("filemtime", $files));
    arsort($files);
    $latest_file = key($files);
    #print_r($latest_file);

    function website($l) {
        $code = '<!DOCTYPE html>
        <html style="height:100%">
            <style>
                body {
                    padding: 5px;
                    background-color: rgb(17, 17, 17);
                    color: black;
                    font-size: 25px;
                }
        
                .top {
                    background-color: rgb(27, 27, 27);
                    overflow: hidden;
                }
        
                .top center {
                    float: top;
                    color: #ffffff;
                    text-align: center;
                    padding: 10px 0px;
                    text-decoration: none;
                    font-size: 18px;
                }
            </style>
        
            <body>
                <div class="top">
                    <center style="font-family:sans-serif" class="active" href="">Custom.Upload | Made by SK3#3160</center>
                </div>
                
                <div1 style="margin: 350px;background: rgb(17, 17, 17);display:flex;justify-content:center;height:1000%">
                    <img style="-webkit-user-select:none;margin:auto" src="' . $l . '">
                </div1>
            </body>
        </html>
        ';
        echo $code;
    }

    website($latest_file);

    $s = '<html><head> <meta content="text/html; charset=UTF-8" http-equiv="Content-Type" /><link type="application/json+oembed" href="' . $Link . 'doc.json" /><meta name="twitter:card" content="player" /> <meta name="twitter:site" content="@harry" /><meta name="twitter:title" content="' . $Tittle . '" /><meta name="twitter:description" content="' . $Description . '" /><meta name="twitter:player:width" content="320" /><meta name="twitter:player:height" content="180" /><meta name="twitter:player:stream:content_type" content="video/mp4" /> <meta property="og:image" content="' . $Link . $latest_file;
    $x = '"/><meta name="twitter:card" content="summary_large_image"><meta name="theme-color" content="#0b68ea"/>';
    echo $s . $x;
?>