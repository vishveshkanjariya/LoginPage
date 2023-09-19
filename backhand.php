<?php
include 'database.php';
if(isset($_POST['Submit']))
{
    $name=$_POST['txtName'];
    $epn1=$_POST['contactnumber1'];
    $epn2=$_POST['contactnumber2'];
    $ea1=$_POST['txtaddress1'];
    $ea2=$_POST['txtaddress2'];
    $amount=$_POST['amount'];
    $otn=$_POST['otnumber'];
    $pi=$_POST['physicalitem'];
    $poi=$_POST['poi'];
    $poa=$_POST['poa'];
    $sql="insert into visitor1(username,contact_number1,contact_number2,user_address1,user_address2,amount,transaction_number,physical_item,poi,poa)
            values('$name','$epn1','$epn2','$ea1','$ea2','$amount','$otn','$pi','$poi','$poa')";
    if(mysqli_query($con,$sql))
    {
        echo "<script>alert('new record inserted')</script>";
    }
    else
    {
        echo "error:".mysqli_error($con);
    }
    mysqli_close($con);

}
?>