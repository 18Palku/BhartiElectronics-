<!doctype html>
<html>
<head>
<title>contact us </title>
<style>
* {
  box-sizing: border-box;
}

/* Style inputs */
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: deeppink;
}

/* Style the container/contact section */
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 10px;
}

/* Create two columns that float next to eachother */
.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
.container {
    border-radius: 5px;
    background-color: peachpuff;
    padding: 10px;
}
input[type=submit] {
    background-color: black;
    color: white;
    padding: 12px 20px;
    border: none;
    cursor: pointer;
}
p {
    font-size: 23px;
}
h2 {
    font-size: 43px;
}
label {
    font-size: 18px;
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
	</div>
</div>


<div class="container">
  <div style="text-align:center">
    <h2>Contact Us</h2>
    <p>Swing by for a cup of coffee, or leave us a message:</p>
  </div>
  <div class="row">
    <div class="column">
      <img src="images/contactus.jpg" style="width:100%">
    </div>
    <div class="column"><form>
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
        <label for="country">Country</label>
        <select id="country" name="country">
          <option value="australia">Australia</option>
          <option value="canada">Canada</option>
          <option value="usa">USA</option>
        </select>
        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
        <input type="submit" value="Submit">
      </form>
    </div>
  </div>
</div>