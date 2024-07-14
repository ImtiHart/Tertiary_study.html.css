<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST["title"];
    $content = $_POST["content"];

    echo "Title: " . $title . "<br>";
    echo "Content: " . $content;
}
?>