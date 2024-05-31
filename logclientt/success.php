<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style1.css">
  <title>Order Successful</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-image: url('PROJETLPFA/images/backorder.jpg'); /* Replace 'monster_energy_background.jpg' with the path to your background image */
      background-size: cover;
      background-position: center;
      color: #34C759;
      text-align: center;
      padding: 300px;
    }
    .container {
      text-align: center; /* Aligns text within container to the left */
      /* Allows the container to take only as much width as necessary */
    }

    h1 {
     
      font-size: 2em;
      
    }

    p {
      
      
      font-size: 1.2em;
      margin-top: 20px;
    } 
    .btn {
  font-size: 1.7rem;
  border-radius: .5rem;
  padding: .5rem 1.5rem;
  color: var(--light-color); /* Assuming this is a variable for light color */
  background-color: transparent; /* Initially transparent background */
  border: 2px solid var(--green); /* Assuming --green is a variable for green color */
  transition: background-color 0.3s, color 0.3s; /* Smooth transition for color and background */
  text-decoration: none; /* Remove default link underline */
}

.btn:hover {
  color: #fff; /* Text color on hover */
  background-color: var(--green); /* Background color on hover */
}

    
  </style>
  
</head>
<body>
  <div class="container">
    <h1>Order Placed Successfully!</h1>
    <p>Thank you for your order.</p>
    <a href="monsterindex.php" class="btn">Home</a>
	
  </div>
</body>
</html>