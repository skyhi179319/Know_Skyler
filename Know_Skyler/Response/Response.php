<head>
<style>
body{
  background-color:goldenrod;
}
</style>
<link rel="icon" href="http://localhost:3000/Icon.png">
</head>
<?php
$Skyler = $_GET['Skyler'];
$Member = $_GET['Member'];
$Member_Name = $_GET['NAME'];
$Member_Number = $_GET['NUMBER'];
$Member_Age = $_GET['AGE'];
$Staff = $_GET['Staff'];
$Guest = $_GET['Guest'];
function Staff_Form_Responder(){
echo 
"
<html>
<form method='GET' action='http://localhost:3000/PHP/Programs/Know_Skyler/Response/Staff_Response.php'>
Staff Name:<input type='name' name='STAFF_NAME'>
<br>
Web Developer:<input type='radio' name='Web_Staff'>Youth Pastor:<input type='radio' name='Youth_Pastor_Staff'>Personal Life:<input type='radio' name='Personal_Life_Staff'>
<br>
<input type='submit'>
</form>
</html>
";
}
if($Staff){
    Staff_Form_Responder();
}
elseif($Member){
    echo "Your Name Is $Member_Name. Your Number Is $Member_Number.You Are $Member_Age Years Old.";
}
elseif($Skyler){
    echo "You Know Yourself Skyler!";
}
elseif($Guest){
    echo "Hello Guest.";
}
else{
    Die();
}
?>
<br>
<?php
$Web_Developer = $_GET['Web'];
$Youth_Pastor = $_GET['Pastor'];
$Personal_Life = $_GET['Personal'];
$Web_Developer_Info = "I started programing HTML in April 2018. Then In November of 2018 I turned my HTML pages into PHP (Server Language) pages. I love programming and I plan to do it for a side job.";
$Youth_Pastor_Info = "I Want To Become A Youth Pastor To Help Youth Through Their Troubles With And Through God.";
$Personal_Life_Info = "I Was Born On May 7, 2000. I Have Been In Foster Care Twice. The Second Time I Was In Since I Was 9 Years Old And Now 18. I Graduated For Rapid City Christian High School In Rapid City, South Dakota In 2019. I Am Going To OTC And SBU. ";
if($Web_Developer){
    echo $Web_Developer_Info;
}
elseif($Youth_Pastor){
    echo $Youth_Pastor_Info;
}
elseif($Personal_Life){
    echo $Personal_Life_Info;
}
else{
    Die();
}
?>