<?php
function test_input($data)
{
    global $conn;
    $data = trim($data); //remove whitespaces, newline, tabs
    $data = stripslashes($data); //remove \
    $data = htmlspecialchars($data); //convert <, > to &lt;, &gt;
    $data = $conn->real_escape_string($data);
    return $data;
}
?>