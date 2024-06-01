<?php

$file = "dummy.txt";

if (file_exists($file)) {
    // Uncomment to read the file content
    // echo readfile($file);

    // Uncomment to copy the file
    // copy($file, "newfile.txt");

    // Uncomment and ensure that "newfile.txt" exists to rename it
    if (file_exists("newfile.txt")) {
        rename("newfile.txt", "oldfile.txt");
    } else {
        echo "newfile.txt does not exist, cannot rename.";
    }
} else {
    echo "file does not exist";
}

?>
