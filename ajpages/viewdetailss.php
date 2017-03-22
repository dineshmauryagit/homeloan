 
<?php


$hiamt = $_GET['hiamt'];
$hibn_id = $_GET['hibn_id'];
$loantren = $_GET['loantren'];
$procfee = $_GET['procfee'];
$emmitot = $_GET['emmitot'];


require '../config/db.php';
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM bankloan where bn_id=$hibn_id ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    if($row = $result->fetch_assoc()) {
      $bn_id = $row["bn_id"];
      $bankname= $row["bankname"];
      $property = $row["property"];
      $city = $row["city"];
      $interestrate = $row["interestrate"];

     
      $maxamt = $row["maxamt"];
     
      $processing_fee_rate = $row["processing_fee_rate"];
      $pre_pay_penalty = $row["pre_pay_penalty"];
      $security = $row["security"];
      $date = $row["date"];
     
    }
} else {
    echo "0 results";
}
$conn->close();
?>

<p><b> Loan Amount </b><?php echo $hiamt;?></p>
                 <p><b>Loan Tenure </b><?php echo " ".$loantren." Years";?></p>
                 <p><b>Processing Fee Rate</b><?php echo $processing_fee_rate;?>%</p>
                 <p><b>Pre Payment penalty </b><?php echo $pre_pay_penalty;?></p>
                 <p><b>Processing Fee(incl.Tax):</b><?php echo $procfee;?></p>
                 <p><b>Security </b><?php echo $security;?></p>
                <p><b>Special Offer:</b></p>
                <p>Higher eligibility and lower EMIs at attractive interest rates. </p>
                
                <input type="text" hidden id="hiamt" value="<?php echo $hiamt; ?>">
                <input type="text" hidden id="hibn_id" value="<?php echo $hibn_id; ?>">
                <input type="text" hidden id="procfee" value="<?php echo  $procfee ; ?>">
                <input type="text" hidden id="emmitot" value="<?php echo  $emmitot ; ?>">
                <input type="text" hidden id="loanamt" value="<?php echo  $hiamt ; ?>">
                <input type="text" hidden id="loantenura" value="<?php echo  $loantren." years" ; ?>">
             