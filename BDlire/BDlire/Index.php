
<?php
// Create connection to Oracle
$conn = oci_connect("SYSTEM", "azerty", "//localhost/XE");
if (!$conn) {
   $m = oci_error();
   echo $m['message'], "\n";
   exit;
}
else {
   print "Connected to Oracle!";
}


 function AchatProduit() {
   $conn = oci_connect("SYSTEM", "azerty", "//localhost/XE");
                                       $select_stmt2 = "SELECT * FROM ALEXIS.AUTEUR";
                                        $stid  = oci_parse($conn, $select_stmt2);
                                        $result=oci_execute($stid);
              
  while($ligne2 = oci_fetch_assoc($stid))
   {
        echo '<li><a href="#">' . $ligne2['PRENOM_AUTEUR']." ".$ligne2["NOM_AUTEUR"]. "</a></li>";
    }
                                        
         oci_free_statement($stid); 
  }

  if (isset($_GET['hello'])) {
    AchatProduit();
  }


// Close the Oracle connection
oci_close($conn);

?>

 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en-US" xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<head>
	<title>Vente de BD</title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<link rel="shortcut icon" href="css/images/favicon.ico" />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<script type="text/javascript" src="js/jquery-1.6.2.min.js"></script>
	<script type="text/javascript" src="js/jquery.jcarousel.min.js"></script>
	<!--[if IE 6]>
		<script type="text/javascript" src="js/png-fix.js"></script>
	<![endif]-->
	<script type="text/javascript" src="js/functions.js"></script>
</head>
<body>
	<!-- Header -->
	<div id="header" class="shell">
		<div id="logo"><h1><a href="#">BestSeller</a></h1><span><a href="#"></a></span></div>
		<!-- Navigation -->
		<div id="navigation">
			<ul>
				<li><a href="#" class="active">Accueil</a></li>
				<li><a href="#">Bande dessinés</a></li>
				<li><a href="#">Promotions</a></li>
				<li><a href="#">Profile</a></li>
				<li><a href="#">A propos de nous</a></li>
				<li><a href="#">Contact</a></li>
			</ul>
		</div>
		<!-- End Navigation -->
		<div class="cl">&nbsp;</div>
		<!-- Login-details -->
		<div id="login-details">
			<p>Welcome, <a href="#" id="user">Nom</a> .</p><p><a href="#" class="cart" ><img src="css/images/cart-icon.png" alt="" /></a>Panier (0) <a href="#" class="sum">0.00€</a></p>
		</div>
		<!-- End Login-details -->
	</div>
	<!-- End Header -->
	<!-- Slider -->
	<div id="slider">
		<div class="shell">
			<ul>
				<li>
					<div class="image">
						<img src="css/images/books.png" alt="" />
					</div>
					<div class="details">
						<h2>DEADPOOL</h2>
						<h3>Nouveau numero</h3>
						<p class="title">Deadpool, connu sous le nom de Wade Wilson, perd son père à l'âge de 5 ans. </p>
						<p class="description">il est doté du même pouvoir d'autoguérison que le mutant Wolverine, un de ses principaux ennemis. Ce même pouvoir le maintient en vie étant donné que Wade est atteint du cancer. </p>
						<a href="#" class="read-more-btn">Lire Plus</a>
					</div>
				</li>
				<li>
					<div class="image">
						<img src="css/images/books2.png" alt="" />
					</div>
					<div class="details">
						<h2>WOLVERINE</h2>
						<h3>-20%</h3>
						<p class="title">Pellentesque congue lorem quis massa blandit non pretium nisi pharetra</p>
						<p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent id odio in tortor scelerisque dictum. Phasellus varius sem sit amet metus volutpat vel vehicula nunc lacinia.</p>
						<a href="#" class="read-more-btn">Lire Plus</a>
					</div>
				</li>
				<li>
					<div class="image">
						<img src="css/images/books3.png" alt="" />
					</div>
					<div class="details">
						<h2>NARUTO</h2>
						<h3>Offre Speciales</h3>
						<p class="title">Pellentesque congue lorem quis massa blandit non pretium nisi pharetra</p>
						<p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent id odio in tortor scelerisque dictum. Phasellus varius sem sit amet metus volutpat vel vehicula nunc lacinia.</p>
						<a href="#" class="read-more-btn">Lire Plus</a>
					</div>
				</li>
				<li>
					<div class="image">
						<img src="css/images/books4.png" alt="" />
					</div>
					<div class="details">
						<h2>KID PADDLE</h2>
						<h3>Special Offers</h3>
						<p class="title">Pellentesque congue lorem quis massa blandit non pretium nisi pharetra</p>
						<p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent id odio in tortor scelerisque dictum. Phasellus varius sem sit amet metus volutpat vel vehicula nunc lacinia.</p>
						<a href="#" class="read-more-btn">Lire Plus</a>
					</div>
				</li>
			</ul>
			<div class="nav">
				<a href="#">1</a>
				<a href="#">2</a>
				<a href="#">3</a>
				<a href="#">4</a>
			</div>
		</div>
	</div>
	<!-- End Slider -->
	<!-- Main -->
	<div id="main" class="shell">
		<!-- Sidebar -->
		<div id="sidebar">
			<ul class="categories">
				<li>
					<h4>Genre</h4>
                                        <ul>
                                            <?php
                                      
                                        $conn = oci_connect("SYSTEM", "azerty", "//localhost/XE");
                                       $select_stmt = "SELECT nom_genre FROM ALEXIS.GENRE";
                                        $stid  = oci_parse($conn, $select_stmt);
                                        $result=oci_execute($stid);
              
  while($ligne = oci_fetch_assoc($stid))
   {
        echo '<li><a href="#">' . $ligne["NOM_GENRE"]. "</a></li>";
    }
                                        
         oci_free_statement($stid); 
oci_close($conn);                                    
                                            
                                            
                                            ?>
						<!--<li><a href="#">Comics</a></li>
						<li><a href="#">Science Fiction</a></li>
						<li><a href="#">Aventure</a></li>
						<li><a href="#">Jeunesse</a></li>
						<li><a href="#">Humour</a></li>
						<li><a href="#">Romantique</a></li>
						<li><a href="#">Action</a></li>-->
					</ul>
				</li>
				<li>
					<h4>Auteur</h4>
					<ul>
                                            
                                            
                                             <?php
                                      
                                        $conn = oci_connect("SYSTEM", "azerty", "//localhost/XE");
                                       $select_stmt2 = "SELECT * FROM ALEXIS.AUTEUR";
                                        $stid  = oci_parse($conn, $select_stmt2);
                                        $result=oci_execute($stid);
              
  while($ligne2 = oci_fetch_assoc($stid))
   {
        echo '<li><a href="#">' . $ligne2['PRENOM_AUTEUR']." ".$ligne2["NOM_AUTEUR"]. "</a></li>";
    }
                                        
         oci_free_statement($stid); 
oci_close($conn);                                    
                                            
                                            
                                            ?>
                                            
                                            
                                            
					</ul>
				</li>
			</ul>
		</div>
		<!-- End Sidebar -->
		<!-- Content -->
		<div id="content">
			<!-- Products -->
			<div class="products">
				<h3>Nouveau Produits</h3>
				<ul>
					
							
                                                    
                                                    <?php
                                      
                                        $conn = oci_connect("SYSTEM", "azerty", "//localhost/XE");
                                       $select_stmt3 = "SELECT ID_PRODUIT,TITRE_PRODUIT,IMAGE_PRODUIT,DESCRIPTION_PRODUIT,PRIX_PRODUIT,NOM_AUTEUR,PRENOM_AUTEUR FROM ALEXIS.PRODUIT,ALEXIS.AUTEUR WHERE PRODUIT.ID_AUTEUR=AUTEUR.ID_AUTEUR";
                                        $stid  = oci_parse($conn, $select_stmt3);
                                        $result=oci_execute($stid);
              
  while($ligne2 = oci_fetch_assoc($stid))
   {
        echo '<li><div class="product"><a href="#" class="info"><span class="holder"><img src="css/images/'. $ligne2['IMAGE_PRODUIT'].'" alt="" />
									<span class="book-name">'. $ligne2['TITRE_PRODUIT'].'</span>
									<span class="author">par '. $ligne2['NOM_AUTEUR']." ". $ligne2['PRENOM_AUTEUR'].'</span>
									<span class="description">'. $ligne2['DESCRIPTION_PRODUIT'].'<br /><br /><br /></span>
								</span>
							</a>
	<a href="#" value='.$ligne2['ID_PRODUIT'].' onClick="javascript:window.location.href=Index.php?parametre1='. $ligne2['ID_PRODUIT'].'" class="buy-btn">ACHETER <span class="price"><span class="low"></span>'. $ligne2['PRIX_PRODUIT'].'<span class="high">€</span></span></a></div>
					</li>
						';
    }
    
    $leproduit=$data->quote($_GET(parametre1));
    
     $conn = oci_connect("SYSTEM", "azerty", "//localhost/XE");
                                       $select_stmt4 = "INSERT INTO ACHETER (ID_PRODUIT,ID_CLIENT,QUANTITE_ACHAT,DATE_ACHAT)VALUES ($leproduit,1,1,'06/02/2015')";
                                        $stid  = oci_parse($conn, $select_stmt3);
                                        $result=oci_execute($stid);
    
                                        
         oci_free_statement($stid); 
oci_close($conn);                                            
                                            ?>
                                     
                                    
                                    
					<!--<li>
						<div class="product">
							<a href="#" class="info">
								<span class="holder">
									<img src="css/images/image08.jpg" alt="" />
									<span class="book-name">Book Name</span>
									<span class="author">by John Smith</span>
									<span class="description">Maecenas vehicula ante eu enim pharetra<br />scelerisque dignissim <br />sollicitudin nisi</span>
								</span>
							</a>
							<a href="#" class="buy-btn">ACHETER <span class="price"><span class="low">$</span>22<span class="high">00</span></span></a>
						</div>
					</li>-->
				</ul>
			<!-- End Products -->
			</div>
			<div class="cl">&nbsp;</div>
			<!-- Best-sellers -->
			<div id="best-sellers">
				<h3>Meilleurs Ventes</h3>
				<ul>
					<li>
						<div class="product">
							<a href="#">
								<img src="css/images/image-best01.jpg" alt="" />
								<span class="book-name">Book Name </span>
								<span class="author">by John Smith</span>
								<span class="price"><span class="high"></span>15<span class="low">€</span></span>
							</a>
						</div>
					</li>
					<li>
						<div class="product">
							<a href="#">
								<img src="css/images/image-best02.jpg" alt="" />
								<span class="book-name">Book Name </span>
								<span class="author">by John Smith</span>
								<span class="price"><span class="high"></span>15<span class="low">€</span></span>
							</a>
						</div>
					</li>
					<li>
						<div class="product">
							<a href="#">
								<img src="css/images/image-best03.jpg" alt="" />
								<span class="book-name">Book Name </span>
								<span class="author">by John Smith</span>
								<span class="price"><span class="high"></span>15<span class="low">€</span></span>
							</a>
						</div>
					</li>
					<li>
						<div class="product">
							<a href="#">
								<img src="css/images/image-best04.jpg" alt="" />
								<span class="book-name">Book Name </span>
								<span class="author">by John Smith</span>
								<span class="price"><span class="high"></span>15<span class="low">€</span></span>
							</a>
						</div>
					</li>
					<li>
						<div class="product">
							<a href="#">
								<img src="css/images/image-best01.jpg" alt="" />
								<span class="book-name">Book Name </span>
								<span class="author">by John Smith</span>
								<span class="price"><span class="high"></span>15<span class="low">€</span></span>
							</a>
						</div>
					</li>
					<li>
						<div class="product">
							<a href="#">
								<img src="css/images/image-best02.jpg" alt="" />
								<span class="book-name">Book Name </span>
								<span class="author">by John Smith</span>
								<span class="price"><span class="high"></span>13<span class="low">€</span></span>
							</a>
						</div>
					</li>
					<li>
						<div class="product">
							<a href="#">
								<img src="css/images/image-best03.jpg" alt="" />
								<span class="book-name">Book Name </span>
								<span class="author">by John Smith</span>
								<span class="price"><span class="high"></span>12<span class="low">€</span></span>
							</a>
						</div>
					</li>
					<li>
						<div class="product">
							<a href="#">
								<img src="css/images/image-best04.jpg" alt="" />
								<span class="book-name">Book Name </span>
								<span class="author">by John Smith</span>
								<span class="price"><span class="high"></span>9<span class="low">€</span></span>
							</a>
						</div>
					</li>
				</ul>
			</div>
			<!-- End Best-sellers -->
		</div>
		<!-- End Content -->
		<div class="cl">&nbsp;</div>
	</div>
	<!-- End Main -->
	<!-- Footer -->
	<div id="footer" class="shell">
		<div class="top">
			<div class="cnt">
				<div class="col about">
					<h4>About BestSellers</h4>
					<p>Nulla porttitor pretium mattis. Mauris lorem massa, ultricies non mattis bibendum, semper ut erat. Morbi vulputate placerat ligula. Fusce <br />convallis, nisl a pellentesque viverra, ipsum leo sodales sapien, vitae egestas dolor nisl eu tortor. Etiam ut elit vitae nisl tempor tincidunt. Nunc sed elementum est. Phasellus sodales viverra mauris nec dictum. Fusce a leo libero. Cras accumsan enim nec massa semper eu hendrerit nisl faucibus. Sed lectus ligula, consequat eget bibendum eu, consequat nec nisl. In sed consequat elit. Praesent nec iaculis sapien. <br />Curabitur gravida pretium tincidunt.  </p>
				</div>
				<div class="col store">
					<h4>Store</h4>
					<ul>
						<li><a href="#" class="active">Accueil</a></li>
				<li><a href="#">Bande dessinés</a></li>
				<li><a href="#">Promotions</a></li>
				<li><a href="#">Profile</a></li>
				<li><a href="#">A propos de nous</a></li>
				<li><a href="#">Contact</a></li>
					</ul>
				</div>
				<div class="col" id="newsletter">
					<h4>Newsletter</h4>
					<p>Lorem ipsum dolor sit amet  consectetur. </p>
					<form action="" method="post">
						<input type="text" class="field" value="Your Name" title="Your Name" />
						<input type="text" class="field" value="Email" title="Email" />
						<div class="form-buttons"><input type="submit" value="Submit" class="submit-btn" /></div>
					</form>
				</div>
				<div class="cl">&nbsp;</div>
				<div class="copy">
					<p>&copy; <a href="#">BestSeller.com</a>. Design by <a href="">Bill Tremendous</a></p>
				</div>
			</div>
		</div>
	</div>
	<!-- End Footer -->
</body>
</html>