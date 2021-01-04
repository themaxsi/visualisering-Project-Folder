<?php

function test_input($data) 
{
    $data = trim($data);                // Strips data of unnecessary characters (newline, tab, extra spaces)
    $data = stripslashes($data);        // Strips data of backslashes
    $data = htmlspecialchars($data);    // Changes HTML-characters to HTML encoded entities (&lt; < &gt; >)
    return $data;
}

?>