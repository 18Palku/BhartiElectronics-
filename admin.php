<!DOCTYPE html>
<html>
<head>
<title></title>
<style>
table, th, td {
    border: 1px solid #ccc;
}
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
</style>
</head>
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
<?php
$link=mysqli_connect("localhost","root","", "mobile1");
//checking connections
if($link===false)
{
	die("ERROR could'nt connect".mysqli_connect_error());
}
$sql="select*from bill";
if($result=mysqli_query($link,$sql))
{
	if(mysqli_num_rows($result)>0)
	{
		echo"<table>";
		echo"<tr>";
		echo"<th>id</th>";
		echo"<th>firstname</th>";
		echo"<th>mobile</th>";
		echo"<th>phone</th>";
		echo"<th>email</th>";
		echo"<th>address</th>";
		echo"<th>city</th>";
		echo"<th>state</th>";
		echo"<th>zip</th>";
		echo"<th>bought_at</th>";
		echo"</tr>";
		while($row=mysqli_fetch_array($result)){
			echo"<tr>";
			echo"<td>".$row['id']."</td>";
		    echo"<td>".$row['firstname']."</td>";
		    echo"<td>".$row['mobile']."</td>";
		    echo"<td>".$row['phone']."</td>";
		    echo"<td>".$row['email']."</td>";
		    echo"<td>".$row['address']."</td>";
		    echo"<td>".$row['city']."</td>";
		    echo"<td>".$row['state']."</td>";
		    echo"<td>".$row['zip']."</td>";
		    echo"<td>".$row['bought_at']."</td>";
			echo"</tr>";
		}
		echo "</table>";
		mysqli_free_result($result);
	}
	
		else
		echo "No Record Found";
}
else{
	echo "Error".mysqli_error($link);
	mysqli_close($link);
}
		
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
		