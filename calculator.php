<!DOCTYPE html>
<html>
<head>
<title>Simple Calculator</title>
</head>
<body>
<h2>Simple Calculator</h2>
<form method="post">
  <input type="number" name="num1" placeholder="Enter first number" required>
  <input type="number" name="num2" placeholder="Enter second number" required><br><br>
  
  <select name="operation">
   <option value="add">Add (+)</option>
   <option value="subtract">Subtract (-)</option>
   <option value="multiply">Multiply (x)</option>
   <option value="divide">Divide (÷)</option>
  </select><br><br>
  <input type="submit" name="submit" value="Calculate">
</form>
<?php
if(isset($_POST['submit']))
{
   $num1 = $_POST['num1'];
   $num2 = $_POST['num2'];
   $operation = $_POST['operation'];
   $result = '';
   switch ($operation)
      case 'add':
         $result = $num1 + $num2;
         break;
      case 'subtract':
         $result = $num1 - $num2;
         break;
      case 'multiply':
         $result = $num1 * $num2;
         break;
      case 'divide':
            if ($num2 == 0) {
                $result = "Cannot divide by zero!";
            } else{
              $result = $num1/$num2;
            }
            break;
      default:
           $result = "Invalid operation selected.";
           break;
      }
      echo"<h3>Result: $result</h3>";
?>
</body>
</html>