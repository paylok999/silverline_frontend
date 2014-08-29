<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

<title>Front End</title>
<!-- Bootstrap core CSS -->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">

<link href="css/bootstrap-select" rel="stylesheet">
<!-- jQuery core JS -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
<!-- Bootstrap core JS -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<script type="text/javascript" src="js/bootstrap-select.js"></script>

</head>
<script>
$.get( "product_data.php", function( data ) {
  $('.box-content-container').html(data);
});
</script>
<style>
.container-fluid{
	margin:0 !important;
	padding:0 !important;
}
.cointainer-max-width{
	max-width:1400px;
	margin:0 auto;
	padding:0;
}
.top-nav{
	width:100%;
	height:60px;
	border-bottom:solid 1px #D5D5D5;
	padding: 13px;
}

.top-nav .top-boxes{
	display:inline-block;
	width: 30%;

}
.top-nav .top-boxes .logo{
	margin-top: -28px;
}
.top-nav .top-boxes-middle{
	display:inline-block;
	width:69%;
}

.top-nav .top-boxes-right{
	width: 100%;
	text-align:right;
	padding-right: 33px;
}
.top-nav .top-boxes-right a{
	font-size: 12px;
	color: #6D6D6D;
	padding-left: 5px;
	font-weight: bold;
	
}
.top-nav .top-boxes-middle select{
	border-radius: 4px 0px 0px 4px !important;
	max-width: 22%;
	min-width: 160px;
	font-size: 13px;
}

.top-nav .top-boxes input{
	border-radius: 0px !important;
	max-width:65%; 
	min-width:160px; 
	border-left: none;
	font-size: 13px;
}
.top-nav .top-boxes-middle img{
	margin-top: -1px;
}
.top-nav .top-boxes-right select{
	border-radius: 4px 0px 0px 4px !important;
	max-width:130px; 
	font-size: 13px;
}

.top-nav .top-boxes-right .boxes{
	display:inline-block;
	margin-left: 10px;
	
}

.top-nav-background{
	background-color:#f8f8f8;
	padding: 10px;
}
.top-nav-background .imgicon{
	padding-right:50px;
}
.top-nav-background .quicklinks{
	display:inline-block;
	padding:0 8px;
	
}
.top-nav-background .network{
	display:inline-block;
	width: 178px;
	text-align: right;
	color:#0e7cc2;
	font-size:14px;
	font-weight: bold;
	
}
.top-nav-background .network img{
	margin-top: -5px;
}
.top-nav-background .quicklinks a{
	font-size: 13px;
	font-weight: bold;
	color:#504E4E;
}

/*contents*/

.left-section{
	width:230px;
	display:inline-block;
	padding: 0 10px;
}

.left-section h1{
	font-size:15px;
	font-weight:bold;
}
.left-section .checkbox-container{
	font-size:13px;
}



.left-section .checkbox-container span{
	color:rgb(129, 129, 129);
	font-weight: bold;
}
.right-section{
	display:inline-block;
	padding: 10px;
	max-width: 1139px;
	width: 100%;
	border-left:solid 1px #D5D5D5;
}
.right-section .breadcrumb-container{
	max-width:500px;
	width:50%;
}

.right-section .box-content-container{
	width:100%;
	padding-top: 50px;
	text-align: center;
}

.right-section .box-content-container .boxes{
	display:inline-block;
	width:255px;
	border:solid 8px #eeeeee;
	background-color:#eeeeee;
	margin: 9px;
	text-align: left;
}
.right-section .box-content-container p{
	padding:10px 0;
	font-weight:bold;
}
.right-section .box-content-container .boxes .main-img{
	width:100%;
}
.right-section .box-content-container .price-container{
	width:125px;
	height:31px;
	background-image:url('/images/bg-tag.png');
	display:inline-block;
	margin-left: -8px;
}
.right-section .box-content-container .price-container span{
	padding-left: 10px;
	line-height: 30px;
	font-weight:bold;

}
.right-section .box-content-container .price-compare{
	display:inline-block;
}
.clear{
	clear:both;
}
.btn-custom { 
  color: #ffffff; 
  background-color: #B81A79; 
  border-color: #B81A79; 
} 
 
.btn-custom:hover, 
.btn-custom:focus, 
.btn-custom:active, 
.btn-custom.active, 
.open .dropdown-toggle.btn-custom { 
  color: #ffffff; 
  background-color: #B81A79; 
  border-color: #B81A79; 
} 
 
.btn-custom:active, 
.btn-custom.active, 
.open .dropdown-toggle.btn-custom { 
  background-image: none; 
} 
 
.btn-custom.disabled, 
.btn-custom[disabled], 
fieldset[disabled] .btn-custom, 
.btn-custom.disabled:hover, 
.btn-custom[disabled]:hover, 
fieldset[disabled] .btn-custom:hover, 
.btn-custom.disabled:focus, 
.btn-custom[disabled]:focus, 
fieldset[disabled] .btn-custom:focus, 
.btn-custom.disabled:active, 
.btn-custom[disabled]:active, 
fieldset[disabled] .btn-custom:active, 
.btn-custom.disabled.active, 
.btn-custom[disabled].active, 
fieldset[disabled] .btn-custom.active { 
  background-color: #B81A79; 
  border-color: #B81A79; 
} 
 
.btn-custom .badge { 
  color: #B81A79; 
  background-color: #ffffff; 
}
</style>
<script>
$(function(){
	  $('.selectpicker').selectpicker({
		style: 'btn-default',
		size: 3,
	});
})
</script>
<body>
<div class="container-fluid">
	
	<div class="top-nav">
		<div class="cointainer-max-width">
				<div class="col-md-8">
				<div class="top-boxes"><img src="images/logo-streamconnect.png" class="logo"></div>
				<div class="top-boxes top-boxes-middle">
					<select class="form-control pull-left">
					  <option>Shop by Category</option>
					  <option>2</option>
					  <option>3</option>
					  <option>4</option>
					  <option>5</option>
					</select>
					<input type="text" class="form-control pull-left" placeholder="Search Shop">
					<img src="images/icon-mag-2.png" class="pull-left">
					<div class="clear"></div>
				</div>
				</div>
				
				<div class="col-md-4">
					<div class="top-boxes top-boxes-right">
				<div class="boxes">
				<select class="selectpicker">
					<option data-content="<img src='images/icon-flag.png'> <span style='display:inline-block; width:100px;'>AUD</span>">AUD</option>
					<option data-content="<img src='images/icon-flag.png'>  <span style='display:inline-block; width:100px;'>AUD</span>">AUD</option>
					<option data-content="<img src='images/icon-flag.png'> <span style='display:inline-block; width:100px;'>AUD</span>">AUD</option>
				</select>
				</div>
				<div class="boxes">
				<img src="/images/icon-register.png"><a href="#">Register</a>
				</div>
				<div class="boxes">
				<img src="/images/icon-login.png"><a href="#">Login</a>
				</div>
			</div>
				</div>

		</div>
	</div>
	
	<div class="top-nav top-nav-background">
		<div class="cointainer-max-width">
			<img src="images/img-shop.png" class="imgicon">
			<div class="quicklinks"><a href="#">By brand</a></div>
			<div class="quicklinks"><a href="#">Clothes & Fashion</a></div>
			<div class="quicklinks"><a href="#">Electronics</a></div>
			<div class="quicklinks"><a href="#">Health and Beauty</a></div>
			<div class="quicklinks"><a href="#">Home and Garden</a></div>
			<div class="quicklinks"><a href="#">Gifts, Books, Toys & Games</a></div>
			<div class="quicklinks"><a href="#">Sport and Travel</a></div>
			<div class="quicklinks"><a href="#">Business & Office</a></div>
			<div class="network">
				<img src="images/icon-network.png"><span>Our Network</span>
			</div>
		</div>

	</div>
	<!--<div class="">
		-->
	<div class="cointainer-max-width">
		<div class="col-md-10 col-md-push-2">
		<div class="right-section">
			<div class="col-md-4">
				<a href="#">Shop</a> &#187;
				<a href="#">Clothing & Fashion</a> &#187;
				Womens Clothing
				
			</div>
			<div class="col-md-4 col-md-offset-4">
				 <div class="form-group">
					<label class="col-sm-2 control-label">Email</label>
					<div class="col-sm-10">
					<select class="form-control">
					  <option>Sort by</option>
					  <option>2</option>
					  <option>3</option>
					  <option>4</option>
					  <option>5</option>
					</select>
					</div>
				</div>
			</div>
			<div class="box-content-container">
			
			</div>
		<div class="clear"></div>
		</div>
		</div>
		<div class="col-md-2 col-md-pull-10">
		<div class="left-section">
		<h1>Narrow Your Results</h1>
		<div class="checkbox-container">
			<span>Heading</span>
			<div class="checkbox">
			  <label>
				<input type="checkbox" value="">
				Option One (15)
			  </label>
			</div>
			<div class="checkbox">
			  <label>
				<input type="checkbox" value="">
				Option Two (100)
			  </label>
			</div>
			<div class="checkbox">
			  <label>
				<input type="checkbox" value="">
				Option Three (20)
			  </label>
			</div>
			<div class="checkbox">
			  <label>
				<a href="#">More Options...</a>
			  </label>
			</div>
		</div>
		<div class="checkbox-container">
			<span>Heading</span>
			<div class="checkbox">
			  <label>
				<input type="checkbox" value="">
				Option One
			  </label>
			</div>
			<div class="checkbox">
			  <label>
				<input type="checkbox" value="">
				Option Two
			  </label>
			</div>
			<div class="checkbox">
			  <label>
				<input type="checkbox" value="">
				Option Three
			  </label>
			</div>
			<div class="checkbox">
			  <label>
				<a href="#">More Options...</a>
			  </label>
			</div>
		</div>
		<div class="checkbox-container">
			<span>Heading</span>
			<div class="checkbox">
			  <label>
				<input type="checkbox" value="">
				Option One 
			  </label>
			</div>
			<div class="checkbox">
			  <label>
				<input type="checkbox" value="">
				Option Two
			  </label>
			</div>
			<div class="checkbox">
			  <label>
				<input type="checkbox" value="">
				Option Three
			  </label>
			</div>
			<div class="checkbox">
			  <label>
				<a href="#">More Options...</a>
			  </label>
			</div>
		</div>
		<div class="checkbox-container">
			<span>Heading</span>
			<div class="checkbox">
			  <label>
				<input type="checkbox" value="">
				Option One
			  </label>
			</div>
			<div class="checkbox">
			  <label>
				<input type="checkbox" value="">
				Option Two
			  </label>
			</div>
			<div class="checkbox">
			  <label>
				<input type="checkbox" value="">
				Option Three
			  </label>
			</div>
			<div class="checkbox">
			  <label>
				<a href="#">More Options...</a>
			  </label>
			</div>
		</div>
		</div>
		
	</div>
		</div>

	<!--footer -->
	
	
	<style>
		.footer-contact{
			width:100%;
			border-top:solid 1px #D5D5D5;
			min-height: 60px;
		}
		.footer-contact .footer-contact-wrapper{
			height:100%;
			min-height:60px;
			
			padding:10px;
		}
		.footer-contact .contact-right{

			text-align:right;
		}
		.footer-contact .contact-right img{
			padding: 3px;
			padding-left: 0;
		}
		
		.footer{
			width:100%;
			border-top:solid 3px #e7e7e7;
			min-height: 233px;
			background-color:#eeeeee;
		}
		.footer-wrapper{
			height:100%;
			background-color:#eeeeee;
			padding:10px;
			min-height: 230px;
		}
		.footer h3{
			color: #165A99;
			font-size: 14px;
			font-weight: bold;
		}
		.footer span a{
			display:block;
			font-size:13px;
			line-height: 30px;
			color:black;
		}
		.footer h2{
			display: inline-block;
			padding-left: 10px;
			font-weight: bold;
			font-size: 27px;
		}
		.footer .newsletter-mail-icon{
			display: inline-block;
			margin-top: -15px;

		}
		.footer .footer-content-container {
			height: 60px;
		}
		.footer .control-group {
			display: inline-block;
			vertical-align: top;
			width:49.5%
		}
		.footer .learn-more{
			font-weight:bold;
			padding-left:5px;
		}
		.footer-bottom{
			width:100%;
			min-height: 60px;
			background-color:#cccccc;
			font-size:13px;
		}
		.footer-bottom .footer-bottom-wrapper{
			height:60px;
			padding: 22px 10px;
		}
		.footer-bottom .terms{
			text-align:right;
		}
		.footer-bottom .terms a{
			color:black
		}
	</style>
	<div class="clear"></div>
	<div class="footer-contact">
		<div class="cointainer-max-width">
			<div class="contact">
			<div class="col-md-4 footer-contact-wrapper"><img src="images/img-social.png"></div>
			<div class="col-md-4 col-md-offset-4 contact-right footer-contact-wrapper"><button type="button" class="btn btn-primary"><img src="images/icon-contact.png">Contact</button></div>
			</div>
		</div>
	</div>
	<div class="footer">
		<div class="cointainer-max-width">
			<div class="col-md-6 footer-wrapper">
				<div class="col-md-4">
					<h3>StreamConnect</h3>
					<span><a href="#">About Us</a></span>
					<span><a href="#">Partner Program</a></span>
					<span><a href="#">Register</a></span>
					<span><a href="#">Login</a></span>
					<span><a href="#">Our Network</a></span>
				</div>
				<div class="col-md-4">
					<h3>We're here to help</h3>
					<span><a href="#">Contact Us</a></span>
					<span><a href="#">FAQs</a></span>
					<span><a href="#">Buying Guides</a></span>
					<span><a href="#">Something</a></span>
					<span><a href="#">Others</a></span>
				</div>
				<div class="col-md-4">
					<h3>Shop</h3>
					<span><a href="#">Buying Guides</a></span>
					<span><a href="#">Products</a></span>
					<span><a href="#">Stores</a></span>
					<span><a href="#">Brand</a></span>
					<span><a href="#">Things</a></span>
				</div>
			</div>
			<div class="col-md-6 footer-wrapper">
				<div class="footer-content-container">
					<img src="/images/icon-mail.png" class="newsletter-mail-icon"><h2>Newsletter</h2>
				</div>
				<div class="control-group">
					 <div class="form-group">
						<label for="exampleInputEmail1">Name</label>
						<input type="text" class="form-control" placeholder="Enter name">
					</div>
				</div>
				<div class="control-group">
					 <div class="form-group">
						<label for="exampleInputEmail1">Email</label>
						<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
					</div>
				</div>
				<button type="button" class="btn btn-default">Sign Up</button> <a href="#" class="learn-more">Learn More</a>
			</div>
		</div>
	</div>
	<div class="footer-bottom">
		<div class="cointainer-max-width">
			<div class="col-md-4 footer-bottom-wrapper">&copy; 2014 StreamConnect. All Rights Reserve.</div>
			<div class="col-md-4 col-md-offset-4 footer-bottom-wrapper">
				<div class="terms">
					<a href="#">Terms & Condition</a> |
					<a href="#">Privacy Policy</a>
				</div>
			</div>
		</div>
	</div>
	</div>
</div>
</body>

</html>