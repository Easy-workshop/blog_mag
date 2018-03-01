<?php
require_once("../Include/DB.php");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Administration</title>
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body> 
 
 
 <header id="main-header" class="py-2 bg-primary text-white">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1><i class="fa fa-gear"></i> Dashboard</h1>
        </div>
      </div>
    </div>
  </header>
  
  
  
  <div class="container">
      <div class="row">
        <div class="col-md-6">
		
		<form enctype="multipart/form-data" action="traitement.php" method="post">
		 <!--<form method="POST" action="traitement.php">-->
			
			
			<div class="form-group">
              <label for="posteur">Posteur</label>
              <input type="text" name="posteur" class="form-control">
            </div>
			
			<div class="form-group">
              <label for="title">Title</label>
              <input type="text" name="Title" class="form-control">
            </div>
            <div class="form-group">
              <label for="category">Category</label>
              <select class="form-control" name="titrecategorie">

			  <?php
				$sqllistecategorie="select * from categorie";
				$resultlistecategorie = mysql_query($sqllistecategorie);
				echo "<option value=\"\">Choisir une Catégorie</option>";
				while($data = mysql_fetch_assoc($resultlistecategorie)) {
				echo "<option  value=".$data["idcategorie"].">".$data["titre"]."</option>";
				}
				?>

			   <!--
			   <option value="">Web Development</option>
                <option value="">Tech Gadgets</option>
                <option value="">Business11</option>
                <option value="">Health & Wellness</option>
              -->
			  </select>
            </div>
            <div class="form-group">
              
			  <label for="file">Image Upload</label>
              <input type="file" class="form-control-file" id="file" name="file">
              
			  <!--
			  <label for="file">Choose a file to upload:</label>
              <input id="file" type="file" name="file" /><br />
			  -->
			  
			  <small class="form-text text-muted">Résolution : 225x136 Extension : svg</small>
            </div>
           

		   <div class="form-group">
              <label for="Intro-text">Intro-text</label>
              <input type="text" name="introtxt" class="form-control">
            </div>
		   
		   
		   
		   <div class="form-group">
              <label for="body">Body</label>
              <textarea name="editor1" class="form-control"></textarea>
            </div>
   
  
   
   
   
   
   
   <div class="radio">
  <label class="radio-inline"><input type="radio" name="choix" value="1" >Publier</label>
<label class="radio-inline"><input type="radio" name="choix" value="0" checked="checked">Brouillon</label>
   </div> 
   
   <div class="form-group">
              <label for="datecreation">date de creation</label>
              <input type="text" name="datecreation" value="" class="form-control">
            exemple : 2018-01-20 02:09:17
			</div>
   
<!--<input type="submit" value="Envoyer" name="envoyer">-->
<input type="submit" value="Envoyer" name="submit" />
   <!--
		  <button class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button class="btn btn-primary" type="submit" name="envoyer" data-dismiss="modal">Save Changes</button>
-->		  		
				</form>
		
		
		
		
		</div> <!--fin col6 dial les articles-->
		
		<!--2-->
 <div class="col-md-6">
		
 catégorie
 </div>
		
		
		</div> <!--fin row =ligne 1-->
		
		
		
  
        
 



		
		
		
		</div> <!--fin container-->
  

 
		 
<!-- liste des post par catégorie -->


<section id="posts">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4>Latest Posts</h4>
            </div>
            <table class="table table-striped">
              <thead class="thead-inverse">
                <tr>
                  <th>#</th>
                  <th>Title</th>
                  <th>Category</th>
                  <th>Date Posted</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                
				
				
				
				<?php
							
				$sqlrecuppostcat="select ar.idarticle as idarticle,ar.titre as titrearticle,cat.titre as titrecategorie,ar.datecreation from article ar,categorie cat where ar.idcategorie=cat.idcategorie ORDER BY ar.datecreation DESC ";
				$resultrecuppostcat = mysql_query($sqlrecuppostcat);
				while($data = mysql_fetch_assoc($resultrecuppostcat)) {
				
				
				echo " <tr>
                  <td scope=\"row\">".$data["idarticle"]."</td>
                  <td>".$data["titrearticle"]."</td>
                  <td>".$data["titrecategorie"]."</td>
                  <td>".$data["datecreation"]."</td>
                  <td><a href=\"detailspost.php?idarticle=".$data["idarticle"]."\" class=\"btn btn-secondary\">
                  <i class=\"fa fa-angle-double-right\"></i> Details
                  </a></td>
                </tr>";
				
				}
				?>
				
				
                <!--
				<tr>
                  <td scope="row">2</td>
                  <td>Post Two</td>
                  <td>Tech Gadgets</td>
                  <td>July 13, 2017</td>
                  <td><a href="details.html" class="btn btn-secondary">
                    <i class="fa fa-angle-double-right"></i> Details
                  </a></td>
                </tr>
                <tr>
                  <td scope="row">3</td>
                  <td>Post Three</td>
                  <td>Web Development</td>
                  <td>July 14, 2017</td>
                  <td><a href="details.html" class="btn btn-secondary">
                    <i class="fa fa-angle-double-right"></i> Details
                  </a></td>
                </tr>
                <tr>
                  <td scope="row">4</td>
                  <td>Post Four</td>
                  <td>Business</td>
                  <td>July 14, 2017</td>
                  <td><a href="details.html" class="btn btn-secondary">
                    <i class="fa fa-angle-double-right"></i> Details
                  </a></td>
                </tr>
                <tr>
                  <td scope="row">5</td>
                  <td>Post Five</td>
                  <td>Web Development</td>
                  <td>July 15 2017</td>
                  <td><a href="details.html" class="btn btn-secondary">
                    <i class="fa fa-angle-double-right"></i> Details
                  </a></td>
                </tr>
                <tr>
                  <td scope="row">6</td>
                  <td>Post Six</td>
                  <td>Health & Wellness</td>
                  <td>July 16, 2017</td>
                  <td><a href="details.html" class="btn btn-secondary">
                    <i class="fa fa-angle-double-right"></i> Details
                  </a></td>
                </tr>
              -->
			  </tbody>
            </table>
          </div>
        </div>


<!-- FIN tableau d'edition-->



		 
		  
		  
		  
		  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="https://cdn.ckeditor.com/4.7.1/standard/ckeditor.js"></script>
  <script>
      CKEDITOR.replace( 'editor1' );
  </script>
</body>
</html>
        