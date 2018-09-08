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
						<li>
							<a href="shop.php">shop</a>
						</li>
						<li>
							<a href="checkout.php">My account</a>
						</li>
						<li class="active">
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
				<li>Cart</li>
			</ul><!--breadcrump ends-->


		</div><!--col-md-12 ends-->


		
		<div class="col-md-9" id="cart"><!--col-md-9 starts cart.php-->
			<div class="box"><!--box strats-->
				<form action="cart.php" method="post" enctype="multipart-form-data"><!--form starts-->
					<h1>Shooping Cart</h1>
					<p class="text-muted">You currently have 3 items in your cart.</p>
					<div class="table-responsive"><!--table-responsive starts-->
						<table class="table"><!--table start-->
							<thead><!--thead starts-->
								<tr>
									<th colspan="2">Product</th>
									<th>Quantity</th>
									<th>Unit price</th>
									<th>Size</th>
									<th colspan="1">Delete</th>
									<th class="2">Sub Total</th>
								</tr>
							</thead><!--thead ends-->
							<tbody><!--tbody starts-->
								<tr><!--tr starts-->
									<td>
										<img src="admin_area/product_images/madhu1.jpg" >
									</td>
									<td>
										<a href="#">MAdhubani Painting</a>
									</td>
									<td>
										2
									</td>
									<td>
										rs500
									</td>
									<td>
										Large
									</td>
									<td>
										<input type="checkbox" name="remove[]">
									</td>
									<td>
										rs500.00
									</td>

								</tr><!--tr ends-->

								<tr><!--tr starts-->
									<td>
										<img src="admin_area/product_images/madhu1.jpg" >
									</td>
									<td>
										<a href="#">MAdhubani Painting</a>
									</td>
									<td>
										2
									</td>
									<td>
										rs500
									</td>
									<td>
										Large
									</td>
									<td>
										<input type="checkbox" name="remove[]">
									</td>
									<td>
										rs500.00
									</td>

								</tr><!--tr ends-->

								<tr><!--tr starts-->
									<td>
										<img src="admin_area/product_images/madhu1.jpg" >
									</td>
									<td>
										<a href="#">MAdhubani Painting</a>
									</td>
									<td>
										2
									</td>
									<td>
										rs500
									</td>
									<td>
										Large
									</td>
									<td>
										<input type="checkbox" name="remove[]">
									</td>
									<td>
										rs500.00
									</td>

								</tr><!--tr ends-->
								
							</tbody><!--tbody ends-->

							<tfoot><!--tfoot starts-->
								<tr>
									<th colspan="5">Total</th>
									<th colspan="2">rs 100</th>

								</tr> 
							</tfoot><!--tfoot ends-->

						</table><!--table Ends-->
					</div><!--table-responsive ends-->
					<div class="box-footer"><!--box footer strats-->
						<div class="pull-left"><!-- pull-left starts-->
							<a href="index.php" class="btn btn-default">
							<i class="fa fa-chevron-left"></i>Continue shooping
							</a>
						</div><!-- pull-left Ends-->

						<div class="pull-right"><!--pull right starts-->
							<button class="btn btn-default" type="submit" name="update" value="Update Cart">
								<i class="fa fa-refresh"></i>Update cart
							</button>	

							<a href="checkout.php" class="btn btn-primary">
								Proceed to checkout<i class="fa fa-chevron-right"></i>
							</a>

						</div><!--pull right ends-->

					</div><!--box footer ends-->

				</form><!--form Ends-->
			</div><!--box ends-->

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
<!---sidebar-->
		<div class="col-md-3"><!--col-md-3 starts-->
			<div class="box" id="order-summary"><!--box starts-->
				<div class="box-header"><!--box header starts-->
					<h3>Order summary</h3>
				</div><!--box header ends-->
				<p class="text-muted">
					shiiping and addtional cost
				</p>
				<div class="table-responsive"><!--table responsive starts-->
					<table class="table"><!--table starts-->
						<tbody><!--tbosy starts-->
							<tr>
								<td>Order Subtotal</td>
								<th>$5000</th>
							</tr>
							<tr>
								<td>Shiiping</td>
								<td>0</td>
							</tr>
							<tr>
								<td>Tax</td>
								<th>0.00</th>
							</tr>
							<tr class="total">
								<td>Total</td>
								<th>$200</th>
							</tr>
						</tbody><!--tbody ends-->
					</table><!--table ends-->
				</div><!--table responsive ends-->
			</div><!--box ends-->
		</div><!--col-md-3 ends-->
	</div><!--container ends-->
</div><!--content ends-->



<!--footer------->

	<?php
include("includes/footer.php");
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