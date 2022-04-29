<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "register_db";

$conn = mysqli_connect($host,$user,$pass,$db);
if (!$conn) {
	echo "There are some problem while connecting the database";
	
}
	if(isset($_POST['Register']))
	   {
	
$fname = $_POST['first_name'];
$lname = $_POST['last_name'];
$password = $_POST['password'];
$confirm = $_POST['confirm_p'];
$email = $_POST['email'];
$number = $_POST['phone'];
$address = $_POST['address'];
$postal = $_POST['postal'];

$qry = "INSERT INTO register_table(f_name, l_name, password, confirm, email, number, address, postal) VALUES ($fname','$lname','$password','$confirm','$email','$number','$address','$postal')";
$insert = mysqli_query($conn, $qry);
		
if (!$insert) {
	echo("There are some problem while inserting data");
}
else{
	echo "Data Inserted";
}

	}
	
?>

<!doctype html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kalam&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../../../Users/Antonio/Downloads/style.css">
</head>
<style>
	html, body {
	height: 100%;
	width: 100%;
}
.navbar-nav {
	color: #000;
	font-size: 20px;
	font-family: 'Kalam', cursive;
	transition: 0.6s ease;
	margin right: 20px;
	justify-content: center;
}
.nav-link {
	font-size: 22px;
	margin: 3px;
	font-weight: 500;

}
.nav-link:hover {
	font-weight: 600;
	border-bottom: 3px solid #F1948A; 
}
.logo {
	width: 190px;
	cursor: pointer;
	float: left;
}
.cart{
	width: 40px;
	cursor: pointer;
}
.search-container {
	margin-right: 20px;
	display: flex;
}
input[type=search]{
	padding: 6px;
	font-size: 22px;
	border: none;
	font-family: 'Kalam', cursive;

}
button {
	float: right;
	padding: 5px;
	margin-right: 16px;
	transform: translate(-20%);
	background: gray;
	font-size: 18px;
	border: none;
	cursor: pointer;
}

.slideshow-container {
  position: relative;
  margin: auto;
}

.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 2.5s;
  animation-name: fade;
  animation-duration: 2.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}

@import url('https://fonts.googleapis.com/css?family=Roboto:700');

body {
  margin:0px;
  font-family:'Roboto';
  text-align:center;
}

#container {
  color:#999;
  text-transform: uppercase;
  font-size:30px;
  font-weight:bold;
  padding-top:300px;
  padding-left:100px;  
  width:100%;
  bottom:45%;
  display:block;
}

#flip {
  height:50px;
  overflow:hidden;
}

#flip > div > div {
  color:#fff;
  padding:4px 12px;
  height:45px;
  margin-bottom:45px;
  display:inline-block;
}

#flip div:first-child {
  animation: show 5s linear infinite;
}

#flip div div {
  background:#EC7063;
}
#flip div:first-child div {
  background: #E74C3C;
}
#flip div:last-child div {
  background: #B03A2E;
}

.small-container {
	padding-top: 50px;
	padding-bottom: 50px;
}

.small-container h2 {
	color: #808080;
	font-family:'Roboto';
	font-size: 30px;
	padding-bottom: 25px;
}
.product-grid{
	font-family:'Roboto';
	position: relative;
}

.product-grid .product-image{
	overflow: hidden;
	position: relative;
}

.product-grid .product-image:before{
	content: "";
	background: rgba(0,0,0,0.3);
	width: 80%;
	height: 100%;
	opacity: 0;
	position: absolute;
	top: 0;
	left: 0;
	z-index: 1;
	transition: all 0.4s ease-out 0s;
}

.product-grid:hover .product-image:before{
	opacity: 1;
}

.product-grid .product-image a{
	display: block;
}

.product-grid .product-image img{
	width: 80%;
	height: auto;
}

.product-image .pic-1 {
	opacity: 1;
	backface-visibility: hidden;
	transition: all 0.4s ease-out 0s;
}

.product-grid:hover .product-image .pic-1 {
	opacity: 0;
}

.product-image .pic-2 {
	width: 80%;
	height: 86%;
	opacity: 0;
	backface-visibility: hidden;
	transform: scale(3);
	position: absolute;
	top: 0;
	left: 0;
	transition: all 0.4s ease-out 0s;
}

.product-grid:hover .product-image .pic-2 {
	opacity: 1;
	transform: scale(1);

}

.product-image .product-trend-label {
	content: "";
	color: white;
	background-color: #C0392B;
	font-size: 12px;
	line-height: 28px;
	font-weight: 700;
	text-align: center;
	text-transform: uppercase;
	padding: 0 7px;
	position: absolute;
	top: 12px;
	left: 12px;
	z-index: 3;
}

.product-grid .social {
	padding: 0;
	margin: 0;
	list-style: none;
	transform: translateY(-50%);
	position: absolute;
	top: 50%;
	left: 45px;
	z-index: 4;
}

.product-grid .social li {
	margin: 0 0 12px;
	opacity: 0;
	transform: translateX(-60px);
	transition: transform 0.3s ease-out 0s;
}

.product-grid:hover .social li {
	opacity: 1;
	transform: translateX(0);
}

.product-grid:hover .social li:nth-child(2) {
	transition-delay: 0.1s;
}

.product-grid .social li a {
	color: white;
	font-size: 22px;
	transition: all 0.3s;
}
.product-grid h3 {
	color: #626567;
	font-family:'Roboto';
	font-size: 25px;
}

.price {
	font-weight: bold;
}

.social a {
	color: #F1948A;
	font-size: 30px;
	padding: 10px;
}

footer {
	background-color: #F2F4F4;
	padding-top: 30px;
}

hr.dark{
	border-top: 1px solid #515A5A;
	width: 75%;
}

.col-12 h5 {
	color: #F1948A;
}

@media only screen and (max-width: 1000px) {
	.nav-link:hover {
		border-bottom: none!important;
	}
}
.regform{
	max-width: 500px;
	background: #F2F4F4;
	margin: 20px auto;
	border-radius: 5px;
	box-shadow: 1px 1px 2px rgba(0,0,0,0.125)
}
.regform .mane{
	line-height: 80px;
	background-color: #F1948A;
	padding-left: 20px;
	border-radius: 5px 5px 0 0;
	font-size: 45px;
	color: #515A5A;
	font-family: 'Kalam', cursive;
}
.input_field{
	margin-top: 20px;
	margin-bottom: 20px;
	display: flex;
	padding: 15px;
	align-items: center;
}
.input_field label{
	width: 200px;
	color: #515A5A;
	margin-right: 10px;
	font-size: 18px;
	font-family: 'Kalam', cursive;
}
.input_field .input{
	width: 100%;
	outline: none;
	border: 1px solid lightgrey;
	font-size: 20px;
	padding: 8px 10px;
	border-radius: 5px;
	transition: all 0.3s ease;
}
.input_field .textarea{
	resize: none;
	height: 125px;
	width: 100%;
	outline: none;
	border: 1px solid lightgrey;
	border-radius: 5px;
}
.input_field .button{
	width: 100%;
	color: #515A5A;
	padding: 8px 10px;
	font-size: 18px;
	border: 0;
	border: 1px solid #F1948A;
	background-color: #F1948A;
	cursor: pointer;
	border-radius: 5px;
	outline: none;
	font-family: 'Kalam', cursive;
}
.input_field:last-child{
	margin-bottom: 0;
}
.input_field .button:hover{
	background: #F5B7B1;
}

@media (max-width: 420px){
	.input_field{
		flex-direction: column;
		align-items: flex-start;
	}
	.input_field .textarea{
		flex-direction: column;
		align-items: flex-start;
	}
}

.wrapper{
	width: 400px;
	background: #F2F4F4;
	border-radius: 5px;
	margin: 100px auto;
	box-shadow: 1px 1px 2px rgba(0,0,0,0.125);
}
.wrapper .title{
	line-height: 80px;
	background-color: #F1948A;
	padding-left: 20px;
	border-radius: 5px 5px 0 0;
	font-size: 45px;
	color: #515A5A;
	font-family: 'Kalam', cursive;
}
.wrapper form{
	padding: 30px 20px 25px 20px;

}
.wrapper form .row{
	height: 45px;
	margin-bottom: 15px;
	position: relative;
}
.wrapper form .row input{
	height: 100%;
	width: 100%;
	font-size: 18px;
	outline: none;
	border-radius: 5px;
	padding-left: 60px;
	border: 1px solid lightgrey;
	font-family: 'Kalam', cursive;
}
.wrapper form .row i{
	position: absolute;
	width: 47px;
	height: 100%;
	color: #515A5A;
	font-size: 18px;
	background: #F1948A;
	border: 1px solid #F1948A;
	border-radius: 5px 0 0 5px;
	display: flex;
	align-items: center;
	justify-content: center;
}
.wrapper form .pass{
	margin: -8px 0 20px 0;
}
.wrapper form .pass a{
	color: #F1948A;
	font-size: 18px;
	text-decoration: none;
	font-family: 'Kalam', cursive;
}
.wrapper form .pass a:hover{
	text-decoration: underline;
}
.wrapper form .button input{
	padding-left: 0px;
	font-size: 18px;
	color: #515A5A;
	background-color: #F1948A;
	border: 1px solid #F1948A;
	cursor: pointer;
}
form .button input:hover{
	background: #F5B7B1;
}
.wrapper form .signup-link{
	margin-top: 20px;
}
.wrapper form .signup-link a{
	color: #F1948A;
	font-size: 18px;
	text-decoration: none;
	font-family: 'Kalam', cursive;
}
form .signup-link a:hover{
	text-decoration: underline;
}

.wrapper1{
	width: 400px;
	background: #F2F4F4;
	border-radius: 5px;
	margin: 150px auto;
	box-shadow: 1px 1px 2px rgba(0,0,0,0.125);
}
.wrapper1 .title1{
	padding-top: 40px;
	padding-left: 20px;
	font-size: 18px;
	color: #515A5A;
	font-family: 'Kalam', cursive;
}
.wrapper1 p{
	color: #515A5A;
	font-family: 'Kalam', cursive;
}
.wrapper1 form{
	padding: 10px 20px 25px 20px;
}
.wrapper1 form .row1{
	height: 40px;
	margin-bottom: 15px;
	position: relative;
}
.wrapper1 form .row1 input{
	height: 100%;
	font-size: 18px;
	outline: none;
	border-radius: 5px;
	border: 1px solid lightgrey;
	font-family: 'Kalam', cursive;
	text-align: center;
}
.wrapper1 form .button1 input{
	margin: 10px auto;
	font-size: 18px;
	padding: 5px 10px;
	color: #515A5A;
	border-radius: 5px;
	background-color: #F1948A;
	border: 1px solid #F1948A;
	cursor: pointer;
	font-family: 'Kalam', cursive;
}
form .button1 input:hover{
	background: #F5B7B1;
}

.cart-page{
	margin: 100px;
}
table{
	width: 100%;
	border-collapse: collapse;
}
.cart-info{
	display: flex;
	flex-wrap: wrap;
	color: #515A5A;
	font-size: 18px;
	font-family: 'Kalam', cursive;
	align-items: center;
}
th{
	text-align: left;
	padding: 5px;
	font-size: 25px;
	color: #515A5A;
	background: #F1948A;
	font-weight: normal;
	font-family: 'Kalam', cursive;
}
td{
	padding:  30px 10px;
	color: #515A5A;
	font-size: 18px;
	font-family: 'Kalam', cursive;
}
td input{
	width: 40px;
	height: 30px;
	padding: 5px;
}
td a{
	color: #515A5A;
	font-size: 18px;
	font-family: 'Kalam', cursive;
}
td img{
	width: 200px;
	height: 200px;
	margin-right: 20px;
}
.total-price{
	display: flex;
	justify-content: flex-end;
	color: #515A5A;
	font-size: 18px;
	font-family: 'Kalam', cursive;
}
.total-price table{
	border-top: 4px solid #F1948A;
	width: 100%;
	max-width: 550px; 
}

.container1{
	width: 750px;
	background: #F2F4F4;
	border-radius: 5px;
	margin: 150px auto;
	padding: 20px 60px 40px 40px;
	box-shadow: 1px 1px 2px rgba(0,0,0,0.125);
	font-family: 'Kalam', cursive;
}
.container1 .content{
	height: 100%;
	width: 100%;
	display: flex;
	align-items: center;
	text-align: left;
	justify-content: space-between;
}
.container1 .content .left-side{
	width: 25%;
	height: 100%;
	display: flex;
	flex-direction: column;
	align-items: center;
	justify-content: center;
	margin-top: 15px;
	position: relative; 
}
.content .left-side:before{
	content: '';
	position: absolute;
	height: 70%;
	width: 2px;
	right: -40px;
	top: 50%;
	transform: translateY(-50%);
	background: #515A5A;
}
.content .left-side .details{
	margin: 14px;
	text-align: center;
}
.content .left-side .details i{
	font-size: 30px;
	color: #F1948A;
	margin-bottom: 10px;
}
.content .left-side .details .topic{
	font-size: 18px;
	font-weight: 500;
}
.content .left-side .details .text-one{
	font-size: 15px;
	color: #515A5A;
}
.container1 .content .right-side{
	width: 75%;
	margin-left: 75px;
}
.content .right-side .topic-text{
	font-size: 23px;
	font-weight: 600;
	color:#F1948A;
}
.right-side .input-box{
	height: 50%;
	width: 100%;
	margin: 12px 0;	
}
.right-side .input-box input,
.right-side .input-box textarea{
	resize: none;
	height: 100%;
	width: 100%;
	font-size: 16px;
	font-weight: 500; 
	outline: none;
	border: 1px solid lightgrey;
	border-radius: 5px;
	padding: 0 15px;
}
.right-side .message-box{
	height: 125px;
	width: 100%;
	outline: none;
	border-radius: 5px;	
}
.right-side .button2{
	display: inline-block;
	margin-top: 6px;
}
.right-side .button2 input[type="button"]{
	color: #515A5A;
	font-size: 18px;
	outline: none;
	background-color: #F1948A;
	border: 1px solid #F1948A;
	padding: 5px 15px;
	border-radius: 5px;
	cursor: pointer;
}
.button2 input[type="button"]:hover{
	background: #F5B7B1;
}

@media (max-width:950px ){
	.container1{
	width: 90%;
	padding: 20px 35px 40px 35px;
	}
}
@media (max-width:820px ){
	.container1{
		margin: 40px 0;
		height: 100%;	
	}
	.container1 .content{
		flex-direction: column-reverse;
	}
	.container1 .content .left-side{
		width: 100%;
		flex-direction: row;
		margin-top: 40px;
		justify-content: center;
		flex-wrap: wrap;
	}
	.container1 .content .left-side:before{
		display: none;

	}
	.container1 .content .right-side{
		width: 100%;
		margin-left: 0;
	}
}

/* menu design */
.food-items{
	display: none;
}

#cake,#pastry,#coffee,#milk-tea,#snacks{
	margin-top: 40px;
}

#cake #item-card,#pastry #item-card,#coffee #item-card,#milk-tea #item-card,#snacks #item-card{
	background: #F2F4F4;
}

#category-name{
	margin: 10px;
	font-size: 35px;
	color: #515A5A;
	font-family: 'Kalam', cursive;
}

#item-card{
	width: 180px;
	height: 260px;
	padding: 10px;
	margin: 10px;
	display: inline-block;
	border-radius: 5px;
	cursor: pointer;
	transition: 0.5s all ease-in-out;
}

#card-top{
	display: flex;
	margin: 5px 0;
	justify-content: space-between;
}

#rating{
	padding: 7px;
	color: #F1948A;
	background: #000;
	font-size: 14px;
	border-radius: 14px;
}

.fa-shopping-cart{
	padding: 6px;
	color: #F1948A;
	background: #000;
	cursor: pointer;
	border-radius: 50%;
}

#item-card img{
	width: 130px;
	height: 130px;
	border-radius: 50%;
	margin: auto;
	display: block;
	margin-bottom: 15px;
	transition: 0.5s all ease-in-out; 
}

#item-card:hover img{
	transform: scale(1.1);
}

#item-name{
	margin: 5px 0;
	font-weight: 600;
	color: #F1948A;
	font-size: 20px;
	font-family: 'Kalam', cursive;
}

#item-price{
	margin: 0;
	color: #F1948A;
	font-weight: 500;
	font-size: 19px;
	font-family: 'Kalam', cursive;
}

#cart{
	padding-right: 50px;
}

.taste-header{
	padding-bottom: 10px;
	position: sticky;
	top: 0;
	background: #fff;
}

.item-menu{
	margin: 0;
	font-size: 35px;
	margin-top: 45px;
	color: #F1948A;
	font-family: 'Kalam', cursive;
}

.border{
	width: 80px;
	height: 5px;
	margin: 3px 0;
	margin-bottom: 30px;
	border-radius: 5px;
	background: #F1948A;
}

.list-card{
	display: flex;
	align-items: center;
	margin-top: 15px;
	border-radius: 25px;
	cursor: pointer;
	transition: 0.3s all ease-in-out;
}

.list-card:hover{
	background: #F2F4F4;
}

.list-card:hover img{
	transition: 0.5s all ease-in-out;
	transform: scale(1.1);
}

.list-card img{
	width: 60px;
	height: 60px;
	border-radius: 50%;
}

.list-name{
	font-size: 25px;
	margin: 0 10px;
	text-decoration: none;
	text-transform: capitalize;
	color: #F1948A;
	font-family: 'Kalam', cursive;
}

/* about us */
.inner-container{
	width: 100%;
	color: #515A5A;
	font-family: 'Kalam', cursive;
	padding: 150px;
}

.inner-container h1{
	margin-bottom: 30px;
	font-size: 35px;
	font-weight: 900;
}

.inner-container p{
	font-size: 17px;
	color: #515A5A;
	line-height: 30px;
	text-align: justify;
}


	</style>
<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
        <a href="../../../../Users/Antonio/Downloads/sample.html"><img src="../../../../Users/Antonio/Downloads/fwdimages/logo.png" class="logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">

            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="../../../../Users/Antonio/Downloads/Untitled-1.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../../../../Users/Antonio/Downloads/index.html">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../../../../Users/Antonio/Downloads/aboutus.html">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../../../../Users/Antonio/Downloads/contactus.html">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../../../../Users/Antonio/Downloads/SendtoMany.html">Send to Many</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../../../../Users/Antonio/Downloads/Promo.html">Promo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../../../../Users/Antonio/Downloads/cart.html">Cart</a>
                </li>
            </ul>
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="../../../../Users/Antonio/Downloads/register.html">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../../../../Users/Antonio/Downloads/log in.html">Login</a>
                </li>
            </ul>

            <div class="search-container">
                <form class="form-inline">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search..." aria-label="Search">
                    <button type="submit"><i class="fa fa-search"></i></button>

                </form>
            </div>
        </div>
    </nav>

    <!--- Register -->
    <div class="regform">
        <div class="mane"><span>Register</span></div>
        <form method = "post" action = "connection.php">
            <div id="form">
                <div class="input_field">
                    <label class="firstlabel">First Name</label>
                    <input class="input" type="text" name="first_name" required>
                </div>
                <div class="input_field">
                    <label class="lastlabel">Last Name</label>
                    <input class="input" type="text" name="last_name" required>
                </div>
                <div class="input_field">
                    <label class="password">Password</label>
                    <input class="input" type="password" name="password" required>
                </div>
                <div class="input_field">
                    <label class="password">Confirm Password</label>
                    <input class="input" type="password" name="confirm_p" required>
                </div>
                <div class="input_field">
                    <label class="emailadd">Email Address</label>
                    <input class="input" type="text" name="email" required>
                </div>
                <div class="input_field">
                    <label class="phonenumber">Contact Number</label>
                    <input class="input" type="text" name="phone" required>
                </div>
                <div class="input_field">
                    <label class="Address">Address</label>
                     <input class="input" type="text" name="address" required>
                </div>
                <div class="input_field">
                    <label class="postalcode">postal Code</label>
                    <input class="input" type="text" name="postal" required>
                </div>
                <div class="input_field">
                    <input type="submit" value="Register" name="Register" class="button">
                </div>
            </div>
        </form>
    </div>
    <!--- Footer -->
    <footer>
        <div class="container-fuild padding">
            <div class="row text-center">
                <div class="col-12 social padding">
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                </div>
                <div class="col-12">
                    <hr class="dark">
                    <h5>&copy; sweetlibakes.com</h5>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>

	