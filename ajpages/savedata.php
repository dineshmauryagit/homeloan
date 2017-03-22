<?php

$bn_id= $_GET['bn_id'];
$selpropvo= $_GET['selpropvo'];
$bildernamevo= $_GET['bildernamevo'];
$planmaxamt= $_GET['planmaxamt'];
$selcityvo= $_GET['selcityvo'];
$resistatuvo= $_GET['resistatuvo'];
$empsalvo= $_GET['empsalvo'];
$salamtvo= $_GET['salamtvo'];
$coborrowerselvo= $_GET['coborrowerselvo'];
$cobordetvo= $_GET['cobordetvo'];
$cobosalvo= $_GET['cobosalvo'];
$banknameofplan= $_GET['banknameofplan'];
$planselint= $_GET['planselint'];
$processfeerat= $_GET['processfeerat'];
$planuseremi= $_GET['planuseremi'];
$planmaxamt= $_GET['planmaxamt'];
$loanyearplan= $_GET['loanyearplan'];
$planproesspnal= $_GET['planproesspnal'];
$plansecurity= $_GET['plansecurity'];
$nameuser= $_GET['nameuser'];
$enteremail= $_GET['enteremail'];
$phonenum= $_GET['phonenum'];
$enteraddress= $_GET['enteraddress'];
$enterpincode= $_GET['enterpincode'];
$enterpan= $_GET['enterpan'];
$enterempname= $_GET['enterempname'];
$officeadd= $_GET['officeadd'];
$officecity= $_GET['officecity'];
$officepincode= $_GET['officepincode'];
$planprofee= $_GET['planprofee'];
$agree= $_GET['agree'];
$usercitt= $_GET['usercitt'];
$gender= $_GET['gender'];




?>

<input type="text"   id="bn_id" value="<?php echo $bn_id; ?>">
<input type="text"   id="selpropvo" value="<?php echo $selpropvo; ?>">
<input type="text"   id="bildernamevo" value="<?php echo $bildernamevo; ?>">
<input type="text"   id="planmaxamt" value="<?php echo $planmaxamt; ?>">
<input type="text"   id="selcityvo" value="<?php echo $selcityvo; ?>">
<input type="text"   id="resistatuvo" value="<?php echo $resistatuvo; ?>">
<input type="text"   id="empsalvo" value="<?php echo $empsalvo; ?>">
<input type="text"   id="salamtvo" value="<?php echo $salamtvo; ?>">
<input type="text"   id="coborrowerselvo" value="<?php echo $coborrowerselvo; ?>">
<input type="text"   id="cobordetvo" value="<?php echo $cobordetvo; ?>">
<input type="text"   id="cobosalvo" value="<?php echo $cobosalvo; ?>">
<input type="text"   id="banknameofplan" value="<?php echo $banknameofplan; ?>">
<input type="text"   id="planselint" value="<?php echo $planselint; ?>">
<input type="text"   id="processfeerat" value="<?php echo $processfeerat; ?>">
<input type="text"   id="planprofee" value="<?php echo $planprofee; ?>">
<input type="text"   id="planuseremi" value="<?php echo $planuseremi; ?>">
<input type="text"   id="planmaxamt" value="<?php echo $planmaxamt; ?>">
<input type="text"   id="loanyearplan" value="<?php echo $loanyearplan; ?>">
<input type="text"   id="planproesspnal" value="<?php echo $planproesspnal; ?>">
<input type="text"   id="plansecurity" value="<?php echo $plansecurity; ?>">
<input type="text"   id="nameuser" value="<?php echo $nameuser; ?>">
<input type="text"   id="enteremail" value="<?php echo $enteremail; ?>">
<input type="text"   id="phonenum" value="<?php echo $phonenum; ?>">
<input type="text"   id="enteraddress" value="<?php echo $enteraddress; ?>">
<input type="text"   id="enterpincode" value="<?php echo $enterpincode; ?>">
<input type="text"   id="enterpan" value="<?php echo $enterpan; ?>">
<input type="text"   id="enterempname" value="<?php echo $enterempname; ?>">
<input type="text"   id="officeadd" value="<?php echo $officeadd; ?>">
<input type="text"   id="officecity" value="<?php echo $officecity; ?>">
<input type="text"   id="officepincode" value="<?php echo $officepincode; ?>">
<input type="text"   id="gender" value="<?php echo $gender; ?>">
<input type="text"   id="usercitt" value="<?php echo $usercitt; ?>">



<?php
require '../config/db.php';
$conn = mysqli_connect($servername, $username, $password, $dbname);
//$sql = "insert into homeusersubmit values ($bn_id,'$selpropvo','$bildernamevo',$planmaxamt,'$selcityvo','$resistatuvo','$empsalvo','$salamtvo','$coborrowerselvo','$cobordetvo',$cobosalvo,'$banknameofplan',$planselint,$processfeerat,$planprofee,$planuseremi,$planmaxamt,'$loanyearplan','$planproesspnal','$plansecurity','$nameuser','$enteremail','$phonenum','$gender','$enteraddress','$usercitt',$enterpincode,'$enterpan','$enterempname','$officeadd','$officecity',$officepincode)";

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "insert into homeusersubmit values (null,$bn_id,'$selpropvo','$bildernamevo',$planmaxamt,'$selcityvo','$resistatuvo','$empsalvo','$salamtvo','$coborrowerselvo','$cobordetvo',$cobosalvo,'$banknameofplan',$planselint,$processfeerat,$planprofee,$planuseremi,$planmaxamt,'$loanyearplan','$planproesspnal','$plansecurity','$nameuser','$enteremail','$phonenum','$gender','$enteraddress','$usercitt',$enterpincode,'$enterpan','$enterempname','$officeadd','$officecity',$officepincode)";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
 

?>