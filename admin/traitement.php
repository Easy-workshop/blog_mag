<?php
require_once("../Include/DB.php");

$stockurlimg="";

if(isset($_POST['Title']))      
	$Title=$_POST['Title'];
else      
	$Title="";


if(isset($_POST['titre']))      
	$titre=$_POST['titre'];
else      
	$titre="";
echo  $titre."<br/>";

if(isset($_POST['submit'])) {
$target = "uploads/"; //make sure to create a folder named 'uploads' and put it in the same directory that upload.php (this script) is in
    $file_name = $_FILES['file']['name'];
    $tmp_dir = $_FILES['file']['tmp_name'];
 
                        if(!preg_match('/(gif|jpe?g|png|csv)$/i', $file_name) //set permissible file types
                                          )
                            {
                                echo "sorry that file type is not allowed";
                            } else {
                        move_uploaded_file($tmp_dir, $target . $file_name);
                        echo "The file was uploaded successfully<br><br>";
					  
                    }
}
else 
{
	echo "NOOO";
	
}

$stockurlimg=$target.$file_name;

/*
$sql="INSERT INTO article (idarticle, titre, contenutxt, contenuimage, afficher, nbrlecture, datecreation, idcategorie) 
VALUES (NULL, '$Title', NULL, '$stockurlimg', NULL, NULL, NULL, NULL)";

$result = mysql_query($sql);
*/

?>