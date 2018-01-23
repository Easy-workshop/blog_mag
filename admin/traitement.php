<?php
require_once("../Include/DB.php");

//$title="walou";
//champ
if(isset($_POST['Title']))      
	$Title=$_POST['Title'];

else      
	$Title="";




//champ

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

//champ
if(isset($_POST['editor1']))      
	$contenutxt=$_POST['editor1'];
else      
	$contenutxt="";

// champ

$contenuimage="";
$contenuimage=$target.$file_name;
//champ 1:publie et 0: brouillon

$affciher="rien";
if(!isset($_POST['Publier'])&& !isset($_POST['Brouillon'])) {
$affciher="vide";
}else if(isset($_POST['Publier'])&& !isset($_POST['Brouillon'])) {
$affciher="1";
}
else if(!isset($_POST['Publier'])&& isset($_POST['Brouillon'])) {
$affciher="0";
}

//champ -->2018-01-20 00:00:00

$d=date("Y-m-d");
$h=date("H:i");
$datecreationcourante=$d."".$h;

if($_POST['datecreation']!="") { 
$datecreation=$_POST['datecreation'];
}else{     
$datecreation=$datecreationcourante;
}




$sql="INSERT INTO article (idarticle, titre, contenutxt, contenuimage, afficher, nbrlecture, datecreation, idcategorie) 
VALUES (NULL, '$Title', '$contenutxt', '$contenuimage', '$affciher', 0, '$datecreation', 1)";


//echo "---->sql  est --->".$sql;

$result = mysql_query($sql);


?>