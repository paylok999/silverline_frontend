<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

<title>Front End</title>
<!-- Bootstrap core CSS -->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
<link href="css/main.css" rel="stylesheet">

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