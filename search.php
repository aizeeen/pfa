<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OUR PRODUCTS</title>
   
    
    
    <link rel="stylesheet" href="/opt/lampp/htdocs/testt/PROJETLPFA/MVC_client/view/stylesearch.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="css/style1.css">
    
   
</head>
<body>
<header>


<a href="#" class="logo"><i class="fas-fa-untensils">monster</i></a>
<nav class="navbar">
    <a class="active" href="monsterindex.php#home" >home</a>
    <a href="monsterindex.php#order">Order</a>
</nav>

<!--symbol icon header-->
</header>
<section class="products" id="products">
    <h3 class="sub-heading">OUR PRODUCTS</h3>
    <h1 class="heading">MONSTER FLAVORS</h1>
     <div class="box-container">
<?php
$search = $_POST['search'];

$servername = "localhost";
$username = "root";
$password = "";
$db = "swiss_collection";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $search = $_POST['search'];
    
    $sql = "SELECT * FROM product WHERE product_name LIKE '%$search%'";
    
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        
        echo "<div class='box-container'>";

        while($row = $result->fetch_assoc()) {   
            echo "<div class='box'>";
            echo "<div class='image'>";
            
            
            echo "<img src='" . $row["product_image"] . "' alt='Product Image'>";
            
            echo "<i class='fas fa-heart'></i>";
            echo "</div>";

            echo "<div class='content'>";
            
            echo "<h3>" . $row["product_name"]. "</h3>";
           
            echo "<p>" . $row["product_desc"]. "</p>";
           
            echo "<p class='price'>$" . $row["price"]. "</p>";
            echo "</div>"; 

            echo "</div>"; 
        }

        echo "</div>";
    } else {
        echo "No results found";
    }
    

    $conn->close();
}
?>
     </div>
    </section>
    <style>* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
  }
  
  body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
    color: #333;
  }
  
  h1, h3 {
    text-align: center;
    margin-bottom: 20px;
  }
  
  h1 {
    font-size: 36px;
    font-weight: bold;
  }
  
  h3 {
    font-size: 24px;
    font-weight: bold;
    color: #34C759;
  }
   
  .products {
    max-width: 1200px;
    margin: 40px auto;
    padding: 20px;
    background-color: #f9f9f9;
    border: 1px solid #ddd;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }
  
  .box-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
  }
  
  .box {
    width: 300px;
    margin: 20px;
    background-color: #fff;
    border: 1px solid #ddd;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    padding: 20px;
    text-align: center;
  }
  
  .image {
    width: 40%;
    height: 250px;
    overflow: hidden;
    margin-bottom: 50px;
    
  }
  
  .image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }
  
  .content {
    padding: 20px;
  }
  
  .content h3 {
    font-size: 24px;
    margin-bottom: 10px;
  }
  
  .content p {
    font-size: 18px;
    margin-bottom: 20px;
  }
  
  .price {
    font-size: 24px;
    font-weight: bold;
    color: #666;
  }
  
  .fa-heart {
    position: absolute;
    top: 10px;
    right: 10px;
    font-size: 24px;
    color: #666;
    cursor: pointer;
  }
  
  .fa-heart:hover {
    color: #999;
  }</style>

</body>
</html>