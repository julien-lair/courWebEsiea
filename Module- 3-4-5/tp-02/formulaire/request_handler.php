<?php
include('function.php');
echo "oui";
if(isset($_POST["submit"])){
  $a = htmlspecialchars($_POST["a"]);
  $b = htmlspecialchars($_POST["b"]);

  $operation = $_POST["ope"];

  if($operation == "+"){
    echo calcul_add($a,$b);
  }
  elseif($operation == "*"){
    echo calcul_multiplier($a,$b);
  }
}

 ?>
