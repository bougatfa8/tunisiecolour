<?php
session_start();



?>
<!DOCTYPE html>
<html>
	<head>
		<title>Tunisie Couleur</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500&display=swap" rel="stylesheet">
		 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />
    
        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js"></script>
		<style>
		.popover
		{
		    width: 100%;
		    max-width: 800px;
		}
		body{
			font-family: 'Playfair Display', serif;
		}
       
		
        .dot {
  height: 25px;
  width: 25px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
}
		</style>
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
    <link rel="icon" type="image/xcon-i"  href="assets/imgs/logo.png" />

<link rel="stylesheet" href="assets/vendors/animate/animate.css">

<!-- Bootstrap + FoodHut main styles -->
<link rel="stylesheet" href="assets/css/foodhut.css">
</head>
<body ng-app="shoppingCart" ng-controller="shoppingCartController" ng-init="loadProduct(); fetchCart();" data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

<!-- Navbar -->
<nav class="custom-navbar navbar navbar-expand " data-spy="affix" data-offset-top="10" >
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link" href="#home">Accueil</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#À propos">À propos</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#REVIEWS">Évaluations</a>
			</li>
            <li class="nav-item">
				<a class="nav-link" href="#contact">contactez-nous</a>
			</li>
		
		
    
       
		
	
			
    
        
    </ul>
    <a class="navbar-brand m-auto" href="index.php" >
              
                </a>
	</div>
    <ul class="navbar-nav">
		
			
			<li class="nav-item"  >
				
				<a  href="carttry.php" class="btn btn-primary ml-xl-4 fixed-bottom"><i class="fas fa-shopping-bag"></i> Your Bag <span class="dot" >{{setTotalqt()}}</span></a>
			</li>
            <li class="nav-item"  >
				
				<a  href="image.php" class="btn btn-primary ml-xl-4"><i class="fas fa-shopping-bag"></i> Insert data</a>
			</li>
		</ul>
</nav>
<!-- header -->
<header id="home" class="header">
	<div class="overlay text-white text-center">
		<h1 class="display-2 font-weight-bold my-3">Tunisie Couleur</h1>
		<h3 class="display-4 mb-5">Nous travaillons pour vous  Servir </h3>
<br>
<br>
<span> PROMOTIONS :
La livraison est gratuite à partir de 99 dinars d'achats sur une sélection des produits</span>
	</div>

</header>

<script>
  
  let text = "Bienvenue dans Votre  Librairie  Tunisie Couleur"
  let paroles= new SpeechSynthesisUtterance();
  paroles.text=text;
  
  speechSynthesis.speak(paroles);
  
          
          </script>

    <!-- BLOG Section  -->
    <div id="blog" class="container-fluid bg-dark text-light py-5 text-center wow fadeIn">
        <h2 class="section-title py-5">
		
				</h2>

	
        <div class="row justify-content-center" >

            <div >
                <ul class="nav nav-pills nav-justified " id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#Stylos"  role="tab" ng-click="fn()"  aria-controls="pills-home" aria-selected="true" >Stylos</a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#Ardoise" role="tab" ng-click="fn1()"  aria-controls="pills-profile" aria-selected="false"> Ardoise</a>
                    </li>

					<li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#Colle" role="tab"  ng-click="fn2()"   aria-controls="pills-profile" aria-selected="false">Colle</a>
                    </li>
					<li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#juices" role="tab" ng-click="fn32()"  aria-controls="pills-profile" aria-selected="false">Taille-crayon </a>
                    </li>
					<li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#juices" role="tab" ng-click="fn3()"  aria-controls="pills-profile" aria-selected="false">Correction</a>
                    </li>
					<li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#juices" role="tab"   ng-click="fn4()"  aria-controls="pills-profile" aria-selected="false">Ciseaux</a>
                    </li>
					<li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#crayons" role="tab" aria-controls="pills-profile" ng-click="fn5()"    aria-selected="false">crayons
</a>
                    </li>
					<li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#Feutre" role="tab" aria-controls="pills-profile" ng-click="fn6()"  aria-selected="false">Feutre</a>
                    </li>				
						<li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#Géométrie & tracage" role="tab" ng-click="fn7()" aria-controls="pills-profile" aria-selected="false">Géométrie & tracage </a>
                    </li>
					<li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#juices" role="tab" aria-controls="pills-profile" ng-click="fn8()"   aria-selected="false">Marqueres</a>
                    </li>
					<li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#juices" role="tab" aria-controls="pills-profile"  ng-click="fn9()"  aria-selected="false">Matériel de dessin</a>
                    </li>
					<li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#juices" role="tab" aria-controls="pills-profile"  ng-click="fn10()"  aria-selected="false">Pate a modeler  </a>
                    </li>
					<li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#juices" role="tab" aria-controls="pills-profile"  ng-click="fn11()"  aria-selected="false">  Sac </a>
                    </li>
					<li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab" ng- data-toggle="pill" href="#juices" role="tab" aria-controls="pills-profile" ng-click="fn12()"   aria-selected="false">Trousse</a>
                    </li>

                    
                </ul>
                <ul class="nav nav-pills nav-justified " id="pills-tab" role="tablist">


           
                </ul>
            </div>
        </div>
 
	
<div class="input-group">
  <input type="text" class="form-control" placeholder="Taper la categorie que vous cherchez"  id="search-focus" ng-model="searchTerm" type="search" id="form1" aria-label="Recipient's username" aria-describedby="basic-addon2">
  <div class="input-group-append">
  <button type="button" class="btn btn-info" ng-click="search(searchTerm)">
  Chercher   <i class="fas fa-search"> </i></button>  </div>
</div>

		<div class="tab-content" id="pills-tabContent">
			<div class="tab-pane fade show active" id="stylos" role="tabpanel" aria-labelledby="pills-home-tab">


				
				<form method="post">
					<div class="row"    >
						<div class="col-md-4" ng-repeat = "product in  products"  >
								<div class="card bg-transparent border my-3 my-md-0" >
											<img ng-src="images/{{product.data}}"   class="rounded-0 card-img-top mg-responsive" style="height:200px">


											<h1 class="text-center mb-4"><p href="#" class="badge badge-primary">{{product.price}} dt</p></h1>
											<h4 class="pt20 pb20">{{product.name}}</h4>
											<h4 class="pt20 pb20">{{product.categorie}}</h4>

											
										<input type="button" name="add_to_cart" style="background-color:#FBBC05 "  class="btn btn-dark form-control " value="Add to Cart" ng-click="addtoCart(product)" />

										</div>
								</div>
						</div>
					</div>
				</form>
		
		


		</div>
						



		

					
		</div>
	</div>




	 <!--  À propos Section  -->
	 <div id="À propos" class="container-fluid wow fadeIn" id="À propos"data-wow-duration="1.5s">

     <div class="row">
            <div class="col-md-6 px-0">
                <div  > <img class="rounded-0 card-img-top mg-responsive" src="./assets/imgs/about-section.jpg"></div>
            </div>
            <div class="col-md-6 px-5 has-height-lg middle-items">
                        <h2 class="mb-4">À propos Us</h2>
<p>  Vous site web de librairie en ligne est le lieu idéal pour trouver tous les fournitures scolaires dont vous avez besoin. Nous proposons une large gamme de produits allant des cahiers et stylos aux sacs à dos et trousses, en passant par les livres scolaires et les calculatrices.

Notre site est facile à naviguer et vous permet de trouver rapidement ce que vous cherchez. Vous pouvez faire des recherches par catégorie ou utiliser notre moteur de recherche pour trouver un produit spécifique. Nous avons également des sections dédiées aux fournitures scolaires pour chaque niveau d'études, ce qui vous permet de trouver facilement ce dont vous avez besoin.
</p><p>

</p>
                    </div>
                </div>
            </div>
  
	  <!-- REVIEWS Section  -->
	  <div id="REVIEWS" class="container-fluid wow fadeIn bg-dark text-light has-height-lg middle-items">
        <h2 class="section-title my-5 text-center">REVIEWS</h2>
        <div class="row mt-3 mb-5">
            <div class="col-md-4 my-3 my-md-0">
                <div class="testmonial-card">
                    <h3 class="testmonial-title">Nawres </h3>
                    <h6 class="testmonial-subtitle">Chelly</h6>
                    <div class="testmonial-body">
<p >J'ai acheté un livre pour mon fils  sur le site et j'ai été très satisfait de la qualité de la livraison. Le livre est arrivé rapidement et en parfait état. Je recommande vivement cette librairie en ligne.
</p>                    </div>
                </div>
            </div>
            <div class="col-md-4 my-3 my-md-0">
                <div class="testmonial-card">
                    <h3 class="testmonial-title">Jamila</h3>
                    <h6 class="testmonial-subtitle">Kahla</h6>
                    <div class="testmonial-body">
<p> J'ai commandé plusieurs livres sur ce site et j'ai été très contente de la qualité de la livraison. Les livres sont arrivés rapidement et en parfait état, et le processus de commande a été très simple. Je recommande vraiment cette librairie en ligne.</p>                </div>
            </div>
			</div>
            <div class="col-md-4 my-3 my-md-0">
                <div class="testmonial-card">
                    <h3 class="testmonial-title">Hazem</h3>
                    <h6 class="testmonial-subtitle">bougatf</h6>
                    <div class="testmonial-body">
<p> Service clientèle attentionné et serviable
Livraison sûre et fiable chaque fois
Nous sommes ravis de notre expérience de livraison.</p>                    </div>
                </div>
            </div>
        </div>
    </div>	
	
	
	    <!-- CONTACT Section  -->
		<div id="contact" class="container-fluid bg-dark text-light border-top wow fadeIn">
        <div class="row">
            <div class="col-md-6 px-0">
                <div  > <img class="rounded-0 card-img-top mg-responsive" src="./assets/imgs/free.jpg"></div>
            </div>
            <div class="col-md-6 px-5 has-height-lg middle-items">
                <h3>Trouvez-Nous</h3>
               
<p>
Nous proposons la livraison gratuite pour toutes les commandes en ligne. Que vous commandiez un seul livre ou une grande commande de fournitures scolaires, vous pouvez être sûr que votre commande vous parviendra rapidement et sans frais supplémentaires. Nous utilisons des transporteurs fiables et professionnels pour assurer la livraison de votre commande à temps et en toute sécurité. Nous nous efforçons de rendre votre expérience d'achat en ligne aussi simple et agréable que possible, c'est pourquoi nous proposons la livraison gratuite pour tous nos clients.

</p>                <div class="text-muted">
                    <p><span class="ti-location-pin pr-3"></span> Nabeul,nabeul 800</p>
                    <p><span class="ti-support pr-3"></span> (123) 456-7890</p>
                    <p><span class="ti-email pr-3"></span>dremdev8@gmail.com</p>
                </div>
            </div>
        </div>
    </div>


	
    <!-- page footer  -->
    <div class="container-fluid bg-dark text-light has-height-md middle-items border-top text-center wow fadeIn">
        <div class="row">
            <div class="col-sm-4">
                <h3>Mail</h3>
                <P class="text-muted">dremdev8@gmail.com</P>
            </div>
            <div class="col-sm-4">
                <h3>Phone</h3>
                <P class="text-muted">(216)XXXXXXXX</P>
            </div>
            <div class="col-sm-4">
                <h3>Trouvez-Nous</h3>
                <P class="text-muted">Nabeul,nabeul 8000</P>
            </div>
        </div>
    </div>
    <div class="bg-dark text-light text-center border-top wow fadeIn">
        <p class="mb-0 py-3 text-muted small">&copy; Copyright <script>document.write(new Date().getFullYear())</script> Made with <i class="ti-heart text-danger"></i> By <a href="http://devcrud.com">DevCRUD</a></p>
    </div>
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>


</html>

<script>

var app = angular.module('shoppingCart', []);

app.controller('shoppingCartController', function($scope, $http){
	
	$scope.loadProduct = function(){
		$http.get('fetch.php').success(function(data){
            $scope.products = data;
        });
	};


                    
                        $scope.search = function(term) {
                           
            $http.get('fetch.php').success(function(data){
                    $scope.products = data.filter(i=>{
            return i.categorie==term });
                });

                
                    
                    }
$scope.fn = function(){

                console.log("function")

                        
            $http.get('fetch.php').success(function(data){
                    $scope.products = data.filter(i=>{
            return i.categorie=="stylo" });
                });

   }

 $scope.fn1= function(){
                console.log("function")

            
                $http.get('fetch.php').success(function(data){
                        $scope.products = data.filter(i=>{
            return i.categorie=="ardoise" });
                    });
                
               

   }


   $scope.fn2= function(){
                console.log("function")

            
                $http.get('fetch.php').success(function(data){
                        $scope.products = data.filter(i=>{
            return i.categorie=="colle" });
                    });
                
               

   }

   
   $scope.fn32= function(){
                console.log("function")

            
                $http.get('fetch.php').success(function(data){
                        $scope.products = data.filter(i=>{
            return i.categorie=="taille" });
                    });
                
               

   }




   
   $scope.fn3= function(){
                console.log("function")

            
                $http.get('fetch.php').success(function(data){
                        $scope.products = data.filter(i=>{
            return i.categorie=="correction" });
                    });
                
               

   }

   
   $scope.fn4= function(){
                console.log("function")

            
                $http.get('fetch.php').success(function(data){
                        $scope.products = data.filter(i=>{
            return i.categorie=="ciseau" });
                    });
                
               

   }

   
   $scope.fn5= function(){
                console.log("function")

            
                $http.get('fetch.php').success(function(data){
                        $scope.products = data.filter(i=>{
            return i.categorie=="crayon" });
                    });
                
               

   }

   
   $scope.fn6= function(){
                console.log("function")

            
                $http.get('fetch.php').success(function(data){
                        $scope.products = data.filter(i=>{
            return i.categorie=="feutre" });
                    });
                
               

   }

   
   $scope.fn7= function(){
                console.log("function")

            
                $http.get('fetch.php').success(function(data){
                        $scope.products = data.filter(i=>{
            return i.categorie=="geométrie" });
                    });
                
               

   }
      
   $scope.fn8= function(){
                console.log("function")

            
                $http.get('fetch.php').success(function(data){
                        $scope.products = data.filter(i=>{
            return i.categorie=="marquere" });
                    });
                
               

   }

      
   $scope.fn9= function(){
                console.log("function")

            
                $http.get('fetch.php').success(function(data){
                        $scope.products = data.filter(i=>{
            return i.categorie=="dessin" });
                    });
                
               

   }

      
   $scope.fn10= function(){
                console.log("function")

            
                $http.get('fetch.php').success(function(data){
                        $scope.products = data.filter(i=>{
            return i.categorie=="modeler" });
                    });
                
               

   }

      
   $scope.fn11= function(){
                console.log("function")

            
                $http.get('fetch.php').success(function(data){
                        $scope.products = data.filter(i=>{
            return i.categorie=="sac" });
                    });
                
               

   }
      
   $scope.fn12= function(){
                console.log("function")

            
                $http.get('fetch.php').success(function(data){
                        $scope.products = data.filter(i=>{
            return i.categorie=="trousse" });
                    });
                
               

   }


//add to panier in angular

//for searchin stylo
/*$scope.products =	$scope.search2 = function(term) {
	term="stylos"
  return $scope.products.filter(function(item) {
    return item.categorie.toLowerCase().indexOf(term.toLowerCase()) > -1;

  });}
//for searching crayon
$scope.products =	$scope.search3 = function(term) {
	term="crayon"
  return $scope.products.filter(function(item) {
    return item.categorie.toLowerCase().indexOf(term.toLowerCase()) > -1;

  });}*/

	$scope.carts = [];
	
	$scope.fetchCart = function(){
		$http.get('fetch_cart.php').success(function(data){
            $scope.carts = data;
        });
	};
	
	
	$scope.setTotals = function(){
        $scope.fetchCart();

		var total = 0;
		for(var count = 0; count<$scope.carts.length; count++)
		{
			var item = $scope.carts[count];
			total = total + (item.product_quantity * item.product_price);
		}
		return total;
	};


	$scope.setTotalqt = function(){
		var totalqt = 0;
		for(var count = 0; count<$scope.carts.length; count++)
		{
			var item = $scope.carts[count];
			totalqt = totalqt + (item.product_quantity);
		}
		return totalqt;
	};
	
	$scope.addtoCart = function(product){

  
  let text = "vous avez ajouter de" + product.categorie+product.name;
  let paroles= new SpeechSynthesisUtterance();
  paroles.text=text;
  
  speechSynthesis.speak(paroles);
  
          
        
        
		$http({
            method:"POST",
            url:"add_item.php",
            data:product
        }).success(function(data){
			$scope.fetchCart();
        });
	};
	
	$scope.removeItem = function(id){
		$http({
            method:"POST",
            url:"remove_item.php",
            data:id
        }).success(function(data){
			$scope.fetchCart();
        });
	};
	
});

</script>