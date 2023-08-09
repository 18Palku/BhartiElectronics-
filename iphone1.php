<!doctype html>
<html>
<head>
<title>iphone</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
body {
    margin: 0 auto;
}
.hundered{
	width:100%;
	float:left;
    background-color: #fae6f4;
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
    width: 89px;
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

/*head section starts here*/
.head_section {
    width: 100%;
    float: left;
	 
}
img.image2 {
    width: 56%;
    margin-left: 199px;
    height: 645px;
}
/*head section finishes here*/
.section {
    width: 100%;
    float: left;
}
.sub_section1 {
    margin-top: 69px;
    width: 30%;
    float: left;
    border: 1px solid #ccc;
    margin-left: 68px;
}
.sub_section2 {
    width: 45%;
    float: right;
    border: 1px solid #ccc;
    margin-top: 69px;
    margin-right: 122px;
    padding-left: 38px;
    height: 451px;
}
.btn1 {
  border: 1px solid grey;
  background-color: inherit;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
  display: inline-block;
}
.btn1:hover {background: lightpink;}

.btn2 {
    border: 1px solid grey;
    background-color: inherit;
    padding: 14px 28px;
    font-size: 16px;
    cursor: pointer;
    margin-left: 15px;
    display: inline-block;
}
.btn2:hover {background: lightpink;}
img.image3 {
    padding-left: 23px;
    padding-top: 31px;
}
h2.yu {
    font-size: 30px;
}
p.brnd {
    font-size: 23px;
}
i.fa.fa-star {
    color: deeppink;
}
i.fa.fa-star-o {
    color: deeppink;
}
h3.se {
    font-size: 25px;
}
p.ja {
    font-size: 17px;
}

img.image4 {
    width: 92%;
}
.sub_section1_1 {
    margin-top: 71px;
    width: 30%;
    float: left;
    border: 1px solid #ccc;
    margin-left: 68px;
}
/*footer css*/

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
    background-color: #e17c2e;
	
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
input.alpha {
    border: white;
    width: 524px;
    font-size: 27px;
    padding-top: 25px;
}
</style>
<body>
<!-- top header -->
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
	</div>
</div>
<!--header section completed here-->
<div class="head_section">
<div class="ninenty">
<img class="image2" src="images\iphone11.jpg">

</div>

</div>
<!--header section2 finishes here-->

<div class="section">
<div class="ninenty">

<div class="sub_section1">
<img class="image3" src="images\apple1.jpg">
</div>
<div class="sub_section2">
<form action="billingform.php" method="POST">
<input type="text" name="mobile" class="alpha" value="APPLE iPhone 13 Pro Sierra Blue 512GB">
<!--<h2 class="yu">APPLE iPhone 13 Pro Sierra Blue 512GB</h2>-->
<p class="brnd">Brand: Apple</p>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star-o" aria-hidden="true"></i>
<hr>
<h3 class="se">₹1,49,900.00</h3>
<p class="ja">Order Now & get the product delivered between  <b>31 Aug 2022 - 3 Sep 2022</b> </p>
<p class="oi">EMI starts at ₹ per month<p>
<button type="submit" class="btn1">Buy Now</button>
<button class="btn2" type="button" onclick="cart()">Add to Cart</button>
</div></div>
</div>
<script type="text/javascript">
function cart(){
	alert("Added to cart sucessfully");
}
</script>


<div class="section">
<div class="ninenty">

<div class="sub_section1">

<img class="image3" src="images\apple2.jpg">
</div>
<div class="sub_section2">
<form action="billingform.php" method="POST">
<input type="text" name="mobile" class="alpha" value="APPLE iPhone 13 Starlight 128GB">
<!--<h2 class="yu">APPLE iPhone 13 Starlight 128GB</h2>-->
<p class="brnd">Brand: Apple</p>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star-o" aria-hidden="true"></i>
<hr>
<h3 class="se">₹1,49,900.00</h3>
<p class="ja">Order Now & get the product delivered between  <b>31 Aug 2022 - 3 Sep 2022</b> </p>
<p class="oi">EMI starts at ₹ per month<p>
<button type="submit" class="btn1">Buy Now</button>
 <button class="btn2" type="button" onclick="cart()">Add to Cart</button>
</div></div>
</div>


<div class="section">
<div class="ninenty">
<div class="sub_section1">
<img class="image3" src="images\apple3.jpg">
</div>
<div class="sub_section2">
<form action="billingform.php" method="POST">
<input type="text" name="mobile" class="alpha" value="APPLE iPhone 13 Pink 128 GB">
<!--<h2 class="yu">APPLE iPhone 13 Pink 128 GB</h2>-->
<p class="brnd">Brand: Apple</p>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star-o" aria-hidden="true"></i>
<hr>
<h3 class="se"> ₹72,000.00 </h3>
<p class="ja">Order Now & get the product delivered between  <b>31 Aug 2022 - 3 Sep 2022</b> </p>
<p class="oi">EMI starts at ₹ per month<p>
<button type="submit" class="btn1">Buy Now</button>
 <button class="btn2" type="button" onclick="cart()">Add to Cart</button>
</div></div>
</div>



<div class="section">
<div class="ninenty">
<div class="sub_section1">
<img class="image3" src="images\apple5.jpg">
</div>
<div class="sub_section2">
<form action="billingform.php" method="POST">
<input type="text" name="mobile" class="alpha" value="APPLE iPhone 13 Midnight 128GB">
<!--<h2 class="yu">APPLE iPhone 13 Midnight 128GB</h2>-->
<p class="brnd">Brand: Apple</p>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star-o" aria-hidden="true"></i>
<hr>
<h3 class="se">   ₹72,000.00  </h3>
<p class="ja">Order Now & get the product delivered between  <b>31 Aug 2022 - 3 Sep 2022</b> </p>
<p class="oi">EMI starts at ₹ per month<p>
<button type="submit" class="btn1">Buy Now</button>
 <button class="btn2" type="button" onclick="cart()">Add to Cart</button>
</div></div>
</div>


<div class="section">
<div class="ninenty">
<div class="sub_section1_1">
<img class="image4" src="images\apple4.jpg">
</div>
<div class="sub_section2">
<form action="billingform.php" method="POST">
<input type="text" name="mobile" class="alpha" value="iPhone 11 Purple 128GB">
<!--<h2 class="yu">iPhone 11 Purple 128GBB</h2>-->
<p class="brnd">Brand: Apple</p>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star-o" aria-hidden="true"></i>
<hr>
<h3 class="se">  ₹51,999.00 </h3>
<p class="ja">Order Now & get the product delivered between  <b>31 Aug 2022 - 3 Sep 2022</b> </p>
<p class="oi">EMI starts at ₹ per month<p>
<button type="submit" class="btn1">Buy Now</button>
 <button class="btn2" type="button" onclick="cart()">Add to Cart</button>
</div></div>
</div>



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