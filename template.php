<?php

function footer():string {
    $filename = basename($_SERVER["SCRIPT_FILENAME"]);
    $footer = "This page was last modified: " . date( format: "F d Y H:i:s.", filemtime($filename));
    return $footer;
}

?>