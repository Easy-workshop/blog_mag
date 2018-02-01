<?php
require_once("../Include/DB.php");




//champ
if($_POST['Title']!="")      
	$Title=$_POST['Title'];
else      
	$Title="";



//champ : idcategorie
if($_POST['titrecategorie']!="")      
	$idcategorie=$_POST['titrecategorie'];
else      
	$idcategorie="";





if($_POST['introtxt']!="")      
	$introtxt=$_POST['introtxt'];
else      
	$introtxt="";




//champ

if(isset($_POST['submit'])) {
$target = "uploads/"; //make sure to create a folder named 'uploads' and put it in the same directory that upload.php (this script) is in
    $file_name = $_FILES['file']['name'];
    $tmp_dir = $_FILES['file']['tmp_name'];
 
                        if(!preg_match('/(gif|jpe?g|png|csv|svg)$/i', $file_name) //set permissible file types
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
/*
// copier l'image Admin-->blog

$source="../blog_mag/".$target.$file_name;
 
$destination=$file_name;
 
copy($source,$destination);

// fin copie
*/
//champ 1:publie et 0: brouillon

if(($_POST['choix'])!=""&& $_POST['choix']=="1")      
$affciher="1"; else $affciher="0";





//champ -->2018-01-20 00:00:00

$d=date("Y-m-d H:i");
$datecreationcourante=$d;



if($_POST['datecreation']!="") { 
$datecreation=$_POST['datecreation'];
}else{     
$datecreation=$datecreationcourante;
}


// formater les données avant l'insertion

$temp_Title=str_replace("'"," ",$Title);
$temp_introtxt=str_replace("'"," ",$introtxt);
$temp_contenutxt=str_replace("'"," ",$contenutxt);

// fin de formatage

$sql="INSERT INTO article (idarticle, titre,introtxt,contenutxt, contenuimage, afficher, nbrlecture, datecreation, idcategorie) 
VALUES (NULL, '$temp_Title', '$temp_introtxt','$temp_contenutxt', '$contenuimage', '$affciher', 0, '$datecreation', '$idcategorie')";


//echo "---->sql  est --->".$sql;

$result = mysql_query($sql);


?>