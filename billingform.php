<!doctype html>
<html>
<head>
<title>form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

.hundered{
	width:100%;
	float:left;
	background-color:#fae6f4;
    
}
.ninenty{
	width:90%;
	margin:0 auto;
}
.twenty {
    width: 20%;
    float: left;
}
.eighty {
    width: 80%;
    float: right;
}

li.hh {
    padding: 2px 0 0 126px;
    font-size: 20px;
}
ul.menu li a {
    text-decoration: none;
    color: #161615;
}
img.image1 {
    width: 86px;
}
ul.menu {
    list-style-type: none;
    display: inline-flex;
    padding-top: 25px;
}
.dropdown {
  color: white;
  position : relative;
  border: none;
   margin: 0px 0 0 126px;
    font-size: 20px;
}
ul.dropdown-content {
    position: absolute;
    left: 0;
    top: 24px;
    border: 1px solid #ccc;
    display: none;
    height: 92px;
    width: 136px;
	background-color: blanchedalmond;
    list-style-type: none;
	    
}
li.dropdown:hover ul.dropdown-content {
    display: block;
}
a.aa:hover {
    color: black;
    background-color: beige;
}






body {
 
  font-size: 10px;
  

    margin: 0 auto;

}

* {
  box-sizing: border-box;
}

.row {
		width: 100%;
		font-size: 20px;
    float: left;
    background-color: #f2f2f2;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
	width: 90%;
	margin: 0 auto;
}


.container {
    /* padding: 5px 20px 15px 20px; */
    border: 1px solid lightgrey;
    border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
    margin-bottom: 10px;
    display: block;
    padding-top: 20px;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #04AA6D;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
input[type="tel"] {
    width: 1213px;
    border: 1px solid lightgrey;
    height: 42px;
}

.footer {
    width: 100%;
    float: left;
    background-color: darkblue;
    color: white;
}
.foot_section1 {
    width: 20%;
    float: left;
}
p.de {
    font-size: 22px;

}
p.te {
    font-size: 15px;
    line-height: 2;
}
.foot_section2 {
    float: left;
    width: 20%;
	padding-left:30px;
}
p.le {
    
    font-size: 15px;
    padding-left: 20px;
	 line-height: 2;
}
p.me {
    padding-left: 20px;
    font-size: 23px;
}
.foot_section3 {
    width: 20%;
    float: left;
		padding-left:60px;
}
p.about {
    font-size: 23px;
    
}

.foot_section4 {
    width: 30%;
    float: right;
}
p.nw {
    font-size: 23px;
}
p.paragraph1 {
    line-height: 1.5;
}
a {
    text-decoration: none;
    color: white;
}
li {
    list-style-type: none;
}
ul.parha {
    line-height: 2;
    font-size: 14px;
   
    padding-left: 0;
}
i.fa.fa-star {
    color: orangered;
    padding-left: 2px;
    font-size: 18px;
}
input.eml {
    text-align: center;
    width: 215px;
    height: 40px;
    font-size: 17px;
    color: white;
    border: white;
    padding-top: 0px;
    background-color: #e17c4;
	
}
i.fa.fa-facebook-square {
    font-size: 25px;
	color:white;
}
i.fa.fa-linkedin-square {
    font-size: 25px;
	padding-left: 4px;
	
}
i.fa.fa-instagram {
    font-size: 25px;
	padding-left: 4px;
	
}
i.fa.fa-youtube-square {
    font-size: 25px;
	padding-left: 4px;
	
}
/*footer section completed here*/
.footer_sub {
    float: left;
    width: 100%;
    background-color: darkorange;
}
p.footsub {
    text-align: center;
    background-color: darkorange;
}
 
</style></head>
<body>

<div class="hundered">
	<div class="ninenty">
		<div class="twenty">
			<img class="image1" src="images\log1.png">
		</div>
		<div class="eighty">
			<ul class="menu">
				<li class="hh"><a href="header.php">Home</a></li>
				<li class="hh"><a href="#content2">About</a></li>
				<li class="dropdown"><a href="#">Products</a>
					<ul class="dropdown-content">
						<li><a class="aa" href="realme.php">Realme</a></li>
						<li><a class="aa" href="iphone1.php">Apple</a></li>
						<li><a class="aa" href="oneplus.php">One PLus</a></li>
						<li><a class="aa" href="vivo.php">Vivo</a></li>
					</ul>
				</li>
				<li class="hh"><a href="contactus.php">Contact</a></li>
			</ul>
		</div>
	</div></div>
	<div class="row">

 <div class="col-75">
 <div class="container">

      <form action="paymentform.php" method="POST">
      
        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="">
			<label for="pname"><i class="fa fa-mobile-phone"></i> Product Name</label>
			<input type="text" name="mobilename" value="<?php echo $_POST['mobile'];?> ">
			 <label for="phone" ><i class="fa fa-phone"></i>Phone number</label>
              <input type="tel" id="phone" name="phone" >
			 
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="abc@example.com">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="New York">

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="NY">
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="10001">
              </div>
			   <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        <input type="submit" value="Continue to checkout" class="btn">
      </form>
            </div>
          </div></div></div></div></div>
		  <!--footer section starts here-->
<div class="footer">
<div class="ninenty">
<div class="foot_section1">
<p class="de"><u>Contact Us</u></p>
<p class="te">Call us (10 AM - 7 PM) IST<br>
04035616279</p>
<i class="fa fa-facebook-square" aria-hidden="true"></i>
<i class="fa fa-linkedin-square" aria-hidden="true"></i>
<i class="fa fa-instagram" aria-hidden="true"></i>
<i class="fa fa-youtube-square" aria-hidden="true"></i>
</div>
<div class="foot_section2">
<p class="me"><u>Policy</u></p>
<p class="le">Privacy policy<br>
Return & Refund Policy<br>
Cancellation Policy
</p>


</div>
<div class="foot_section3">
<p class="about"><u>About</u> </p>
<ul class="parha"><a href="#"><li>About Us</li>
<li>Contact Us</li><li>Our Store</li>
<li>Blogs</li>
<li>Terms and Conditions</li></a></p>
</div>
<div class="foot_section4">

<p class="nw"><u>Newsletter</u></p>
<p class="paragraph1">Subscribe our newsletter to get our <br>latest updates & news.</p>
<form>
        
       <input class="eml" type="email" placeholder="Enter Email Address"></form>
        <br ><p class="paragraph3">
		<i class="fa fa-star" aria-hidden="true"></i>
		<i class="fa fa-star" aria-hidden="true"></i>
		<i class="fa fa-star" aria-hidden="true"></i>
		 We never gonna spamming</p>

</div>

</div>
</div>
<!--Sub footer section starts here-->
<div class="footer_sub">
<div class="ninenty">
<p class="footsub">&copy Shivali U roll 21020203006</p>

</div>
</div>

		  </body>
		  </html>