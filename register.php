<html>
<head>
</head>

<style>
body {background-color:white; }
h2 {color:#006600; font-size:40px; text-align:center; font-style:oblique }
h3{color:#006600; font-size:x-large;text-align:left; font-style:italic}
input{background:white;font-size:large; left:auto; color:#006600;}
img{right:auto;}	
}
</style>


<body>
<form action="welcome.php" method="post" name="Register" onsubmit="return validate();">
<h2>Please fill in the information below to create a new account.</h2>

<h3> Email: <input id="1" type="text" name="email"> </h3>
<h3> Password: <input id="2" type="password" name="password" > </h3>
<h3> User Name: <input id="3" type="text" name="username"> </h3>

<input type="submit" value="Register">

<img src="tree2.jpg" alt="tree" align="right" width="300" height="345">

</form>

</body>
</html>


<script type="text/javascript">
 function validate() 
   {

//var emailcheck=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
var check=/\S+@\S+\.\S+/;
   
     if (document.getElementById("1").value== "")
      { 
         alert("Email cannot be empty");  	
     return false;
      }  	
     if (document.getElementById("2").value== ""){
     alert("Password cannot be empty");
     return false;
     }
     if(check.test(document.getElementById("1").value)==false)
     {
     alert("Please enter the correct email form");
     return false;
     }
     
     if (document.getElementById("3").value== "")
      { 
         alert("Name cannot be empty");  	
     return false;
      }  	
     return true;
    } 
    
</script>
