<?php
session_start();
$fullNameValue = "" ;
$totalValue2="" ;
$Email ="";
/*
 * Create a session variable for the mobile number
 */
$totalValue = $_POST['txtTotal'];
$_SESSION['txtName'] = $fullNameValue;
$_SESSION['txtTotal']= $totalValue2 ;
$_SESSION['txtnum']= $Email;
/**
 * Allocate the mobile number session variable to a text
 */
?> 
<!DOCTYPE html>
<html>
<head>
    <title> eBusiness 2 </title>
</head>
<style>
    table {
  border: 1px solid black;
}
    body   {background-color: rgb(250,128,114)
     

</style>
<body>
    <div class ="form">
        <form name ="Details" method ="post" action= "eBUS3.php">
            <center>
                <table cellspacing ="10">
                    <tr>
                        <td><b></b></td>
                        <td><b> Enter in your details below</b></td>
                    </tr>
        
                    <tr>
                         <td> Name </td>
                         <td><input type="text" id="txtName" name="txtName" value="" required="" /> </td>
                    </tr>
        
                     <tr>
                         <td> Email </td>
                         <td><input type="text" id="txtNum" name="txtNum" value="" required=""/> </td>
                    </tr>
        
                    <tr>
                         <td> Password </td>
                         <td><input type="password" id="txtPassword" name="txtPassword" value="" required="" maxlength="4"/> </td>
                    </tr>
        
                    <tr>
                         <td><input type="Hidden" id="txtTotal" name="txtTotal" value="<?php echo $totalValue;?>" /> </td>
                    </tr>
        
                </table>
         </center>
        
        
            <center>   
        <input type="submit" name ="btnContinue" id="btnContinue" onclick="" value="Continue"  style=background-color:green; />
         
            </center>
    </div>
</form>
    </body>
    </html>
