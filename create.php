<?php
    $formData = $_POST;
    $formData = implode(" - ", $formData);

    $unconvertedFile = fopen("unconvertedFile.txt", "a+");
    fwrite($unconvertedFile, $formData);
    fclose($unconvertedFile);

    header("location: conversao.php")
?>