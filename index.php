<!DOCTYPE html>
<html>
<head>
    <title>One Time Roll Number Generator</title>
    <link rel="stylesheet" type="text/css" 

href="roll.css">
<script>
function validate()
{
if( document.myForm.pid.value == "" )
{
alert( "Please provide your one time Roll Number!" );
document.myForm.pid.focus() ;
return false;
}
return( true );
}
</script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" 

href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/cs

s/bootstrap.min.css">
</head>
<body>
    <div class="jupiter">
        <h1>TO INTER INTO EXAM, FOLLOW THE STEPS.</h1>
        <br>
        <br>
        <br>
    <div class="inputBox">
     <h2>One Time Roll Number Generator</h2>
     <input type="text" name="" placeholder="Roll 

Number" id="password" readonly="">
     <div id="btn" onclick="getPassword

()">Generate</div>
</div>
<script>
 function getPassword(){

     var chars = 

"0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRS

TUVWXYZ";
     var passwordLength = 20;
     var password = "";

     for (var i=0; i<passwordLength; i++){
         var randomNumber = Math.floor(Math.random() * 

chars.length);
         password += chars.substring

(randomNumber,randomNumber+1);

     }
     document.getElementById("password").value = 

password
 }
  
  
</script>
<br>
<div class="terobau">
<h5>1.First, generate one time Roll Number or make your 

own. </h5>
<h5>2.Copy generated Roll Number into Roll Number box 

below.</h5>
<h5>3.Important, don't use same Roll Number twice</h5>
<h5>4.Proceed for esewa payment of Rs.1000</h5>
</div>
<div class="slipping">

<form action="https://uat.esewa.com.np/epay/main" 

method="POST" name="myForm" onsubmit="return(validate

());">
    <input value="1000" name="tAmt" type="hidden">
    <input value="990" name="amt" type="hidden">
    <input value="5" name="txAmt" type="hidden">
    <input value="2" name="psc" type="hidden">
    <input value="3" name="pdc" type="hidden">
    <input value="EPAYTEST" name="scd" type="hidden">
    
    <input value="" name="pid" placeholder="type one 

time unique Roll Number" class="unique" type="">

    <input 

value="https://gangmore.blogspot.com/p/resultpage.html" 

type="hidden" name="su">
    <input 

value="http://merchant.com.np/page/esewa_payment_failed?

q=fu" type="hidden" name="fu"> 
    <br>
    
    <input value="Proceed for Esewa payment Rs.1000" 

type="submit" class="btn-primary">
    </form>
</div>
</div>
<!-- jQuery library -->
<script 

src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/

jquery.min.js"></script>

<!-- Popper JS -->
<script 

src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.

16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script 

src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/

bootstrap.min.js"></script>
</body>
</html>