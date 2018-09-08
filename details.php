<!--header-->
<?php
include("includes/db.php");
include("functions/functions.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>E commerce store</title>

	<link href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->
	<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->

	
	<!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>-->
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>-->
<!--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>-->
	<link href="styles/bootstrap.min.css" rel="stylesheet">
	<link href="styles/style.css" rel="stylesheet">
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">

	
	<!----------->

</head>
<body>
	<div id="top"><!--top starts-->
		<div class="container"><!--container starts-->
			<div class="col-md-6 offer"><!-- colmd6-->
				<a href="#" class="btn btn-success btn-sm">
					Jnata Murti store
				</a>
				<a href="#">
					&nbsp Shooping cart Total price:$100, Total items 2
				</a>
				
			</div><!-- col-md-6 offer ends-->
			<div class="col-md-6"><!-- col-md-6 starts-->
				<ul class="menu"><!--menu starts-->
					<li><!--li starts-->
						<a href="customer_register.php">
							Register
						</a>
					</li><!--li starts-->
					<li>
						<a href="checkout.php">
							My account
						</a>
					</li>
					<li>
						<a href="cart.php">
							Go to cart
						</a>
					</li>
					<li>
						<a href="checkout.php">
							Login
						</a>
					</li>
				</ul><!--menu end-->
				
			</div><!-- col-md-6 ends-->
			
		</div><!--container ends-->
		
	</div><!--top ends-->

	<div class="navbar navbar-default" id="navbar"><!--navbar navbar-default start-->
		<div class="container"><!--container starts-->
			<div class="navbar-header"><!--navbar-header starts-->
				<a class="navbar-brand home" href="index.php"><!--navbar navbar-brand home starts-->
					<img src="images1/logo.png" height="58px;" alt="images1 logo" class="hidden-xs">
					<img src="images1/logo-small.png"  alt="images1 logo" class="visible-xs">
				</a><!--navbar navbar-brand home ends-->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation" >
					<span class="sr-only">Toggle Navigation</span>
					<i class="fa fa-align-justify" aria-hidden="true"></i>
				</button>
				<button type="button" class="navbar-toggle" data-toggle="collapse" data- target="#search">
					<span class="sr-only">Toggle Search</span>
					<i class="fa fa-search"></i>
					<!--<i class="fa fa-search" aria-hidden="true"></i>-->
				</button>

				
			</div><!--navbar-header ends-->
			<div class="navbar-collapse" id="navigation"><!--navbar-collapse starts-->
				<div class="padding-nav"><!--padding-nav starts-->
					<ul class="nav navbar-nav navbar-left"><!--nav navbar-nav navbar-left start-->
						<li>
							<a href="index.php">Home</a>
						</li>
						<li class="active">
							<a href="shop.php">shop</a>
						</li>
						<li>
							<a href="checkout.php">My account</a>
						</li>
						<li>
							<a href="cart.php">Shopping cart</a>
						</li>
						<li>
							<a href="contact.php">Contact us</a>
						</li>
					</ul><!--nav navbar-nav navbar-left Ends-->	
					
				</div><!--padding-nav Ends-->
				
				 <a class="btn btn pirmary navbar-btn right" href="cart.php"><!--btn btn pirmary navbar-btn right starts-->
					<!--<i class="fa fa-shopping-cart" aria-hidden="true"></i>-->
					<i class="fa fa-shopping-cart"></i>
					<span>4 items in cart</span>
					   
				</a><!--btn btn pirmary navbar-btn right ends-->
				


				<div class="navbar-collapse collapse right"><!--navbar-collapse collapse right starts-->
					<button  class="btn navbar-btn btn-primary" type="button" data-toggle="collapse" data-target="#search">
						<span class="sr-only">Toggle Search	</span>
						<i  class="fa fa-search"></i>

					</button>
				</div><!--navbar-collapse collapse right ends-->

				<div class="collapse clearfix" id="search"><!--collapse clearfix starts-->
					<form class="navbar-form" method="get" action="results.php"><!--navbar- form starts-->
						<div class="input-group"><!--input- group starts-->
							<input class="form-control" type="text" placeholder="Search" name="user_query" required>
							<span class="input-group-btn"><!--input-group-btn starts-->
							<button type= "submit" value="Search" name="search" class="btn btn-primary">
								<i class="fa fa-search"></i>
								
							</button>
						    </span><!--input-group-btn ends-->
						</div><!--input- group ends-->
						
					</form><!--navbar- form ends-->
						
				</div><!--collapse clearfix starts-->
				
			</div><!--navbar-collapse ends-->


		</div><!--container ends-->
		
	</div><!--navbar navbar-default ends-->
	







<div id="content"><!--content starts-->
	<div class="container"><!--container starts-->
		<div class="col-md-12"><!--col-md-12 starts-->
			<ul class="breadcrumb"><!--breadcrump strats-->
				<li>
					<a href="index.php">Home</a>
				</li>
				<li>Shop</li>
			</ul><!--breadcrump ends-->


		</div><!--col-md-12 ends-->

        <div class="col-md-3"><!--col-md-3 starts-->
        	<?php include("includes/siderbar.php");?>
                  

        
        </div><!--col md- 3 ends-->

        <!---details.php--->
        <div class="col-md-9"><!--col-md-9 starts-->
        	<div class="row" id="productMain"><!--row starts-->
        		<div class="col-sm-6"><!--col-sm-6 starts-->
        			<div id="mainImage"><!--main image starts-->
        				<div id="myCarousel" class="carousel slide" data-ride="carousel">
        					<ol class="carousel-indicators"><!--crousel indicators starts-->
        						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        						<li data-target="myCarousel" data-slide-to="1"></li>
        						<li data-target="myCarousel" data-slide-to="2"></li>
        				
        					</ol><!--crousel indicators ends-->
        					<div class="carousel-inner"><!--carousle inner starts-->
        						<div class="item active">
        							<center>
        								<img src="admin_area/product_images/madhu1.jpg" style="width: 250px; height: 350px";class="img-responsive">
        							</center>
        						</div>
        						<div class="item">
        							<center>
        								<img src="admin_area/product_images/madhu2.jpg" style="width: 250px; height: 350px"; class="img-responsive">
        							</center>
        						</div>
        						<div class="item">
        							<center>
        								<img src="admin_area/product_images/madhu3.jpg" style="width: 250px; height: 350px";class="img-responsive">
        							</center>
        						</div>
        					</div><!--carousle inner ends-->
        					<a href="#myCarousel" class="left carousel-control" data-slide="prev"><!--left carousle-control" data-slide="prev" starts-->
        						<span class="glyphicon glyphicon-chevron-left"></span>
        						<span class="sr-only">Previous</span>	
        						
        					</a><!--left carousle-control" data-slide="prev" ends-->
        						<a class="right carousel-control" href="#myCarousel" data-slide="next"><!--"right carousle-control" href="#myCarousel" data-slide="next" starts-->
        							<span class="glyphicon glyphicon-chevron-right"></span>
        							<span class="sr-only">Next</span>	
        							
        						</a><!--"right carousle-control ends-->
        				
        				</div>
        			</div><!--main image ends-->
        		</div><!--col-sm-6 ends-->

        		<!--product number need--->
        		<div class="col-sm-6"><!--col-sm-6 starts-->
        			<div class="box"><!--box starts-->
        				<h1 class="text-center">Madhubani Painting</h1>	
        				<form action="details.php" method="post" class="form-horizontal"><!--form-horizontal starts"-->
        					<div class="form-group"><!--form-group starts-->
        						<label class="col-md-5 control-label">
        							Product Quantity
        						</label>
        						<div class="col-md-7"><!--col=md-7 starts-->
        							<select name="product_qty" class="form-control">
        								<option>1</option>
        								<option>2</option>
        								<option>3</option>
        								<option>4</option>
        								<option>5</option>
        							</select>
        						</div><!--col=md-7 ends-->
        					</div><!--form-group ends-->

        					<div class="form-group"><!--form group starts-->
        						<label class="col-md-5 control-label">Product Size</label>
        						<div class="col-md-7"><!--col-md-7 starts-->
        							<select name="product_size" class="form-control">
        								<option>Select a Size</option>
        								<option>Small</option>
        								<option>Medium</option>
        								<option>Large</option>
        							</select>
        						</div><!--col-md-7 ends-->
        					</div><!--form group ends-->
        					<p class="price">
        						&#8377 1000
        					</p>
        					<p class="text-center buttons"><!--text-center buttons starts-->
        						<button class="btn btn-primary" type="submit">
        							<i class="fa fa-shopping-cart"></i>Add to cart
        						</button>
        					</p><!--text-center buttons ends-->
        				</form><!--form-horizontal ends-->
        			</div><!--box ends--> 

        			<div class="row" id="thumbs"><!--row Starts-->
        				<div class="col-xs-4"><!--col-xs-4 starts-->
        					<a href="#" class="thumb">
        						<img src="admin_area/product_images/madhu1.jpg"  class="img-responsive">
        					</a>
        				</div><!--col-xs-4 Ends-->
        				<div class="col-xs-4"><!--col-xs-4 starts-->
        					<a href="#" class="thumb">
        						<img src="admin_area/product_images/madhu2.jpg" style="height: 160px;" class="img-responsive">
        					</a>
        				</div><!--col-xs-4 Ends-->
        				<div class="col-xs-4"><!--col-xs-4 starts-->
        					<a href="#" class="thumb">
        						<img src="admin_area/product_images/madhu3.jpg" style="height: 160px; width: 300px;" class="img-responsive">
        					</a><br>
        				</div><!--col-xs-4 Ends-->
        			</div><!--row Ends-->

        			

        		</div><!--col-sm-6 ends-->
        		
        		

        	</div><!--row ends-->
<!--box---->
            <div class="box" id="details"><!--box Starts-->
                <p><!--p starts-->
                    <h4>Product Deatils</h4>
                    <p>
                        
Kohbar made by Legendary Artist Padma Shri Sita Devi
Madhubani art (or Mithila painting) is practiced in the Mithila region of Bihar in India and Nepal. Painting is done with fingers, twigs, brushes, nib-pens, and matchsticks, using natural dyes and pigments, and is characterised by eye-catching geometrical patterns. There is ritual content for particular occasions, such as birth or marriage, and festivals, such as Holi, Surya Shasti, Kali Puja, Upanayana, Durga Puja.
                    </p>
                    <h4>Size</h4>
                    <ul>
                        <li>Small</li>
                        <li>Medium</li>
                        <li>Large</li>
                    </ul>
                </p><!--p ends-->
                <hr>
            </div><!--box Ends-->

            <div id="row same-height-row"><!--same height row starts-->
                <div class="col-md-3 col-sm-6"><!--col-md-3 col-sm-6" starts-->
                    <div class="box same-height headline"><!--box same-height headline starts-->
                        <h3  class="text-center">You also like this products</h3>
                    </div><!--box same-height headline ends-->
                </div><!--col-md-3 col-sm-6" ends-->
                <div class="center-responsive col-md-3 col-sm-6"><!--center-responsive col-md-3 col-sm-6 starts-->
                    <div class="product same-height"><!--product same -height starts-->
                        <a href="details.php">
                            <img src="admin_area/product_images/madhu2.jpg" style="height: 250px;" class="img-responsive">
                        </a>
                        <div class="text"><!--text starts-->
                            <h3>
                                <a href="details.php>">Mahubani Painting</a>
                            </h3>
                            <p class="price">rs 500</p>
                        </div><!--text ends-->
                    </div><!--product same -height ends-->
                </div><!--center-responsive col-md-3 col-sm-6 ends-->
                <div class="center-responsive col-md-3 col-sm-6"><!--center-responsive col-md-3 col-sm-6 starts-->
                    <div class="product same-height"><!--product same -height starts-->
                        <a href="details.php">
                            <img src="admin_area/product_images/madhu1.jpg" style="height: 250px" class="img-responsive">
                        </a>
                        <div class="text"><!--text starts-->
                            <h3>
                                <a href="details.php>">Mahubani Painting</a>
                            </h3>
                            <p class="price">rs 500</p>
                        </div><!--text ends-->
                    </div><!--product same -height ends-->
                </div><!--center-responsive col-md-3 col-sm-6 ends-->
                <div class="center-responsive col-md-3 col-sm-6"><!--center-responsive col-md-3 col-sm-6 starts-->
                    <div class="product same-height"><!--product same -height starts-->
                        <a href="details.php">
                            <img src="admin_area/product_images/madhu3.jpg" style="height: 250px" class="img-responsive">
                        </a>
                        <div class="text"><!--text starts-->
                            <h3>
                                <a href="details.php>">Mahubani Painting</a>
                            </h3>
                            <p class="price">rs 500</p>
                        </div><!--text ends-->
                    </div><!--product same -height ends-->
                </div><!--center-responsive col-md-3 col-sm-6 ends-->
            </div><!--row same height row Ends-->


        </div><!--col-md-9 ends-->

        
        </div><!--container ends-->
</div><!--content ends-->



<!--footer------->

	<?php
include("includes/footer.php")
?>

<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
	<!--<script src="js/bootstrap.min.js"></script>-->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
<!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>-->

	<!--<script src="js/jquery.min.js"></script>-->

</body>
</html>