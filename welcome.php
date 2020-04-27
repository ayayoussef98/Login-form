<html>
<head></head>
<body>

<style>
body{	background:white;}
txt{color:#006600;font-size:xx-large;font-weight:bold;font-style:normal;}
}

</style>

<?php
error_reporting(E_ERROR | E_PARSE);
$link= mysqli_connect('localhost', 'root', '','registration');
$_getName=$_POST['username'];
$_getEmail=$_POST['email'];
$_getPw=MD5($_POST['password']);

if($_getName==NULL){
if($link->connect_error){
    echo 'Connection Failed: '.$link->connect_error;
    }
    else{
     $sql="select username from user where email like '%$_getEmail%' and password like '%$_getPw%'";
     $found= mysqli_query($link, $sql); //mysqli betraga3 el rows el mawgood fiha el kelma el badawar 3aleiha w tehotohom fi result

  if(mysqli_num_rows($found)>0) //num_rows di bet3ed kam row et7at fi result
        {
          while($row= mysqli_fetch_array($found))
  {
    $name=$row['username'];
    $print="Welcome " .$name." !";
    echo"<txt style='font-size:65px;'>".$print."</txt>";
  }
        }
        else{
        $print="Invalid Credentials";
        echo"<txt style='font-size:65px;'>".$print."</txt>";

}}

}
else{
 $sql1="select * from user where email like '%$_getEmail%'";
 $sql2="select * from user where username like '%$_getName%'";

        $found1 = mysqli_query($link, $sql1); //mysqli betraga3 el rows el mawgood fiha el kelma el badawar 3aleiha w tehotohom fi result
        $found2 = mysqli_query($link, $sql2);
        if(mysqli_num_rows($found1)>0) //num_rows di bet3ed kam row et7at fi result
        {
             $print="Invalid credentials, email already exists";
        echo"<txt style='font-size:65px;'>".$print."</txt>";

          }
        else if(  mysqli_num_rows($found2)>0) //num_rows di bet3ed kam row et7at fi result
        {
             $print="Invalid credentials, username already exists";
          echo"<txt style='font-size:65px;'>".$print."</txt>";
          }

       else{

$sql= "INSERT INTO user(email,username,password) VALUES('$_getEmail','$_getName','$_getPw')";
if (mysqli_query($link, $sql)) {
     $print="Welcome " .$_getName. "!";
        echo"<txt style='font-size:65px;'>".$print."</txt>";
}
else {
      echo "Error: " . $sql . "<br>" . mysqli_error($link);
}

}
}

mysqli_close($link);

?>
</body>
</html>
