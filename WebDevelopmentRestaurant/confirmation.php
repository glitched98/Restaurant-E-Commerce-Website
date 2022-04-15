<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC">
<script type="text/javascript" src="script.js"></script>
<style>
body, html {height: 100%}
body,h1,h2,h3,h4,h5,h6 {font-family: "Amatic SC", sans-serif; text-align: center; }
.centerImage{
  margin-left: 0px;
  margin-right: 5px;
  margin-top: 5px;
}
.bgimg {
  background-repeat: no-repeat;
  background-size: cover;
  background-image: url("https://images.iphonephotographyschool.com/23045/1120/food.jpg");
  min-height: 90%;
}

.hide-big{
  display: none;
}

@media (max-width: 600px){
  .hide-big{
    display: block !important;

  }
}

/* https://www.w3schools.com/howto/howto_js_dropdown.asp */

/* Dropdown Button */
.dropbtn {
  background-color: black;
  background-image: url(dropdown.png);
  background-position: center;
  background-repeat: no-repeat;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
  width: 100%;
  height: 75px;

}

/* Dropdown button on hover & focus */
.dropbtn:hover, .dropbtn:focus {
  filter: invert(0.6);
}


/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  width: 100%;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd}

/* Show the dropdown menu (use JS to add this class to the .dropdown-content container when the user clicks on the dropdown button) */
.show {display:block;}
</style>
<body>
<!-- Navbar (sit on top) -->
<div class="w3-top w3-hide-small">
  <div class="w3-bar w3-xlarge w3-black w3-opacity w3-hover-opacity-off" id="myNavbar">
    <a href="https://www.cs.ryerson.ca/~f9zhang/proj/main.html" class="w3-bar-item w3-button">HOME</a>
    <a href="https://www.cs.ryerson.ca/~f9zhang/proj/menu.html" class="w3-bar-item w3-button">MENU</a>
    <a href="https://www.cs.ryerson.ca/~f9zhang/proj/aboutus.html" class="w3-bar-item w3-button">ABOUT US</a>
    <a href="https://www.cs.ryerson.ca/~f9zhang/proj/survey.html" class="w3-bar-item w3-button">SURVEY</a>
    <a href="https://www.cs.ryerson.ca/~f9zhang/proj/checkout.html" class="w3-bar-item w3-button">CHECKOUT</a>
  </div>
</div>

<div class="w3-top hide-big dropDown">
  <button onclick="dropDown()" class="dropbtn"></button>
  <div id="myDropdown" class=" dropdown-content w3-white w3-xlarge">
      <a href="https://www.cs.ryerson.ca/~f9zhang/proj/main.html" class="w3-bar-item w3-button">HOME</a>
      <a href="https://www.cs.ryerson.ca/~f9zhang/proj/menu.html" class="w3-bar-item w3-button">MENU</a>
      <a href="https://www.cs.ryerson.ca/~f9zhang/proj/aboutus.html" class="w3-bar-item w3-button">ABOUT US</a>
      <a href="https://www.cs.ryerson.ca/~f9zhang/proj/survey.html" class="w3-bar-item w3-button">SURVEY</a>
      <a href="https://www.cs.ryerson.ca/~f9zhang/proj/checkout.html" class="w3-bar-item w3-button">CHECKOUT</a>
  </div>
</div>

<header class="bgimg w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-bottomleft w3-padding">
    <span class="w3-tag w3-xlarge">Open from 10am to 12pm</span>
    <span class="w3-tag w3-xlarge">Contact us: 123-456-7890</span>
  </div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<h1><b>Welcome <?php echo $_POST["name"]; ?><br>
<h1><b>Thank You For Your Order</h1> <br>
<h2><b>Order Confirmation Number: 7344-249583</h2><br>
<h1><b>Hope You Enjoy Your Meal</h1></b>
</body>
</html>
