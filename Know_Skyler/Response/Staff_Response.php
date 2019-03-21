<head>
<style>
body{
  background-color:goldenrod;
}
</style>
<link rel="icon" href="http://localhost:3000/Icon.png">
</head>
<?php
$Staff_Name = $_GET['STAFF_NAME'];
$Web_Developer = $_GET['Web_Staff'];
$Youth_Pastor = $_GET['Pastor_Staff'];
$Personal_Life = $_GET['Personal_Staff'];
$Web_Developer_Info = "I started programing HTML in April 2018. Then In November of 2018 I turned my HTML pages into PHP (Server Language) pages. I love programming and I plan to do it for a side job.";
$Youth_Pastor_Info = "I Want To Become A Youth Pastor To Help Youth Through Their Troubles With And Through God.";
$Personal_Life_Info = "I Was Born On May 7, 2000. I Have Been In Foster Care Twice. The Second Time I Was In Since I Was 9 Years Old And Now 18. I Graduated For Rapid City Christian High School In Rapid City, South Dakota In 2019. I Am Going To OTC And SBU. ";
echo "Hello $Staff_Name.";
echo "<br>";
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