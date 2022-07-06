<?php
include_once 'index.php';
if(isset($_POST['submit']))
{    
     $title = $_POST['title'];
     $description = $_POST['description'];
     $verse = $_POST['verse'];
     $author = $_POST['author'];
     $sql = "INSERT INTO news (title,description,verse,author)
     VALUES ('$title','$description','$verse','author')";
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>