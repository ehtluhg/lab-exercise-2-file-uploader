<?php
// Build the file directory
$destination ="/Applications/XAMPP/xamppfiles/htdocs/uploads/" . $_FILES['userfile']['name'];

// Temporary path
$tmp = $_FILES['userfile']['tmp_name'];

// Checks whether the file is successfully uploaded
if (is_uploaded_file($tmp)){
    if (move_uploaded_file($tmp, $destination)){
        echo 'File is successfully uploaded';
        exit();
    }
}
echo 'Unable to upload file';
