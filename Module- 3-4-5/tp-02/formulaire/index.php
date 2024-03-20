<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
    body {
font-family: sans-serif;
margin: 0; /* Remove default margin */
background-color: #f5f5f5; /* Light background */
}

form {
display: flex;
flex-direction: column;
align-items: center;
padding: 20px;
border: 1px solid #ddd;
border-radius: 5px;
margin: 20px auto;
max-width: 300px;
}

fieldset {
border: none;
padding: 10px;
}

legend {
font-size: 16px;
margin-bottom: 5px;
}

label {
display: block;
margin-bottom: 5px;
}

input[type="number"],
select {
padding: 5px;
border: 1px solid #ccc;
border-radius: 3px;
margin-bottom: 10px;
}

input[type="submit"] {
padding: 10px 20px;
background-color: #4CAF50; /* Green button */
color: white;
border: none;
border-radius: 5px;
cursor: pointer;
}

input[type="submit"]:hover {
background-color: #42A047; /* Darker green on hover */
}

.result {
font-size: 20px;
font-weight: bold;
margin-top: 10px;
}

    </style>
  </head>
  <body>

    <form class="" action="index.php" method="post">
      <input type="number" name="a" value="">
      <select class="" name="ope">
        <option value="+">+</option>
        <option value="*">*</option>
      </select>
      <input type="number" name="b" value="">
      <input type="submit" name="submit" value="calcul">
    </form>
<?php
include('request_handler.php');
?>

  </body>
</html>
