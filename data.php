<!DOCTYPE html>
<html>
<body>
<?php
$usergender=$_POST['gender'];
if ($usergender==="male"){
echo "thanks Mr ";
}
else{
    echo "thanks Miss ";
}
echo $_POST['firstName']." ".$_POST['lastName'];
echo "<br>";
echo "pleas review your data  ";
echo "<br>";
echo "your name is:- ".$_POST['firstName']." ".$_POST['lastName'];
echo "<br>";
echo "your address is :- : ".$_POST['address'];
echo "<br>";
echo "your country is :-".$_POST['country'];
echo "<br>";
echo "your Skills are :- ";
foreach($_POST['skills'] as $skill){
    echo"<br>". $skill."</br>";
    }
echo "<br>";
echo "your username is :-".$_POST['userName'];
echo "<br>";
echo "your password is :-".$_POST['password'];
echo "<br>";
echo "your department is :-".$_POST['Department'];
?>




</body>
</html>
