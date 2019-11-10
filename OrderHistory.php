<!DOCTYPEHTML>
<html><head><title>Order History</title>
<meta charset="UTF-8">
<style>
body{
text-align: center;
background-image:url("homepage.jpg");
}
h1{
font-family: stencil;
text-align: center;
}
p{color:#b80ee3;font-family: stencil;}
div{
     background-color:#c2e7ed;
     top:100px;
     right:300px;left:300px;width:700px;height:600px;position:sticky;}
table{
        text-align:center;margin-right:auto;margin-left:auto;
        font:stencil;color:#2b2524;border-collapse: collapse;}
table, th, td {color:Green;
              border: 1px solid red;padding:8px;
}
</style>
</head></title>
<body><div><h1 style="color:purple">Order History</h1>
<form method=post action="">
<h3 style="color:#f24216">Enter the name of the Fertilizer</h3><br>
<?php
$d=mysqli_connect('localhost','root','','fertManagement') or die("Error connecting to MySQL server.");
$rq=mysqli_query($d,"Select distinct(FName) from FERTILIZER");
echo "<form method='POST' action=''><select name='fer'><option disbled selected value> -- Select a Fertilizer -- </option>";
while($rop=mysqli_fetch_array($rq,MYSQLI_NUM)){
echo "<option value='$rop[0]'>$rop[0]</option>";}
echo "</select>         <input type='submit' value='  OK  '></form><br><br>";
if(isset($_POST["fer"]))
{
     $farmid=1000;
     $f=$_POST["fer"];
     $q=mysqli_query($d,"select distinct(B.Bill_Id),B.BDate,F.FCompany,D.DName,B.Qty,B.Amount from Billing B,Fertilizer F,Dealer D,Farmer Fa where Fa.FarmId=B.FarmId and F.FId=B.FId and D.DId=B.DId and F.FName='$f'");
     if(mysqli_num_rows($q)>0)
     {  
         echo "<p>Fertilizer:   $f</p><br>";
         echo "<table><tr><th>Bill No.</th><th>Purchase Date</th><th>Company</th><th>Dealer</th><th>Quantity</th><th>Amount</th></tr>";
         while($ro=mysqli_fetch_array($q,MYSQLI_NUM))
         {
             echo '<tr><td>'.$ro[0].'</td><td>'.$ro[1].'</td><td>'.$ro[2].'</td><td>'.$ro[3].'</td><td>'.$ro[4].'</td><td>'.$ro[5].'</td></tr>';
         }
         echo "</table>";
     }
     else
     {
         echo "<p>You didn't buy $f fertilizer!!</p>";
     }
}
else
{
     mysqli_close($d);
}
?>
<br><br><p style="text-align:right;color:red"><a href="home.html">Go Back</a></p>
</div>
</body>
</html>

