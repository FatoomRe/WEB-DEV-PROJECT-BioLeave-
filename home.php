<!DOCTYPE html>
<html>
<head>
<title>Bio Leave plant store</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="./styles/reset.css">
  <link rel="stylesheet" href="./styles/main.css">
  <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond&display=swap" rel="stylesheet"> 
<style>
* {
  box-sizing: border-box;
}


body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}


.header {
  padding: 80px;
  text-align: center;
  background: #1abc9c;
  color: white;
}


.header h1 {
  font-size: 40px;
}


.navbar {
  overflow: hidden;
  background-color: #333;
}


.navbar a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
}


.navbar a.right {
  float: right;
}


.navbar a:hover {
  background-color: #ddd;
  color: black;
}


.row {  
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
}


.side {
  -ms-flex: 30%; /* IE10 */
  flex: 30%;
  background-color: #f1f1f1;
  padding: 20px;
}


.main {   
  -ms-flex: 70%; /* IE10 */
  flex: 70%;
  background-color: white;
  padding: 20px;
}


.xnamefname {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
}


.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
}


@media screen and (max-width: 700px) {
  .row {   
    flex-direction: column;
  }
}

@media screen and (max-width: 400px) {
  .navbar a {
    float: none;
    width: 100%;
  }
}
</style>
</head>
<body>
    

<div class="header">
  <h1>Bio Leave</h1>
  <p>Welcome to plant world</p>
</div>

<div class="navbar">
    <a href="plants.php">Plants</a>
    <a href="supplies.php">Supplies</a>
  <a href="regist.php" class="right">Sign up</a>
  <a href="login.php" class="right">Log in</a>
</div>

<div class="row">
  <div class="side">
      <h1><font color="#092F42"> New Arrivals</h1>
    <br>
    <img src="https://hips.hearstapps.com/vader-prod.s3.amazonaws.com/1627652416-Bird-of-Paradise_746d55b281d8490f984a352470e4764e.jpg?crop=1.00xw:1xh;center,top&resize=768:*"
             alt="plant" width="250" height="250" border="6">
    <img src="https://images.squarespace-cdn.com/content/v1/54fbb611e4b0d7c1e151d22a/1610074066643-OP8HDJUWUH8T5MHN879K/Snake+Plant.jpg*"
             alt="plant" width="250" height="250" border="6">
    <img src="https://cdn.shopify.com/s/files/1/0150/6262/products/the-sill_zz-plant_variant_medium_grant_black.jpg?v=1648839401*"
             alt="plant" width="250" height="250" border="6"> 
    <img src="https://cdn10.bigcommerce.com/s-jg374jqeyq/products/780/images/1020/P2160_LOL_preset_ftd-mx-tile-wide-lv-new__80181.1642751417.500.500.jpg?c=2*"
             alt="plant" width="250" height="250" border="6">
    <br>
    <img src="https://gogarden.co.in/wp-content/uploads/2019/05/POT-7.jpg"
             alt="plant" width="250" height="250" border="6">
    <img src="https://www.lealansgardencentre.co.uk/wp-content/uploads/2020/11/shop-600x338.png"
             alt="plant" width="250" height="250" border="6">
    <img src="https://www.lovethegarden.com/sites/default/files/styles/product_xl/public/content/products/AU_118415_SOS_PS_POY.jpg?itok=nUnr4fYJ"
             alt="plant" width="250" height="250" border="6"> 
    <img src="https://d3o372dlsg9lxo.cloudfront.net/catalog/products/e2990/images/grid/5e559787f626ad4d80f6c3df/E2990_C2_BK2_180122_051_E2990.jpg"
             alt="plant" width="250" height="250" border="6">
    <br><br><br><br>
  <footer>
      <img class="map" src="https://i0.wp.com/aaagunandammo.com/wp-content/uploads/2017/10/screen-shot-2017-10-26-at-9-09-05-pm.png?resize=768%2C461&ssl=1" alt="Where we are">
      <nav class="footer-bar">
        <div class="subscribe-btn">
            <span>Subscribe to our newsletter</span>
            <i class="fa fa-envelope" aria-hidden="true"></i>
        </div>
        <div class="address footer-block">
          <span>Some street, 12</span>
          <span>05647415555</span>
          <span>bioleave@hotmail.com</span>
        </div>
        <div class="other-links footer-block">
          <a href="">Shipping return</a>
          <a href="">Info about us</a>
          <a href="">Discounts</a>        </div>
        <div class="copyright footer-block">
         
          <div class="card-logos">
            <div class="card-logo">
              <img src="./images/mastercard.png" alt="Mastercard">
            </div>
            <div class="card-logo card-logo2">
              <img src="./images/visa.png" alt="Visa">
            </div>
            <div class="card-logo card-logo3">
              <img src="./images/paypal.png" alt="Paypal">
            </div>
          </div>
        </div>
      </nav>
    </footer>

</body>
</html>