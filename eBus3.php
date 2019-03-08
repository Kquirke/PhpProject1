<!DOCTYPE html>
<html> 
    <body>
        <style> 
            
            button {
        background-color: rgb(250,128,114);
      border: 2px solid Black;
        margin-left : 100px;
      
    }
    .button{font-size: 15px}
    
        body {background-color: rgb(250,128,114);
        Font-Family: Arial, Helvetica, sana-serif;
        }
        </style>
    
 <?php
 
 session_start () ;
 $totalValue2 = $_POST ['txtTotal'];
 $fullNameValue= $_POST ['txtName'];
 $Email = $_POST['txtNum'];
 echo "Customer name : ".$fullNameValue.".";
 echo "<br></br>";
 echo "The Email is : ".$Email.".";
 echo "<br></br>";
 echo "The total value is : ".$totalValue2."";
 ?>
        <br></br> <form method="get" action="index.php" > <button type="submit" class="button button" >Return to Index</button>   </form>
    </body>
</html>
