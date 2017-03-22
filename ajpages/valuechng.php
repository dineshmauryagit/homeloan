<?php 


$selprop = $_GET['selprop'];
$selcity = $_GET['selcity'];
$constcost = $_GET['constcost'];
$loanten= $_GET['loanten'];
$salamt= $_GET['salamt'];


?>


<br>
<br>
<table border='2' width='70%' class="table table-bordered">
    
    <thead>
      <tr>
        <th>Bank</th>
        <th>Interest Rate</th>
        <th>Processing Fee</th>
        <th>EMI</th>
        <th>Max Loan Amount</th>
        <th>Proceed</th>
    </tr>
    </thead>

<?php
require '../config/db.php';
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM bankloan where property='$selprop' and city='$selcity'  and minamt<=$constcost and maxamt>=$constcost and  loantenuremin<=$loanten and loantenuremax>=$loanten and sal_min_amt<=$salamt and sal_max_amt>=$salamt  ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
   while($row = $result->fetch_assoc()) {
      $bn_id = $row["bn_id"];
      $bankname= $row["bankname"];
      $property = $row["property"];
      $city = $row["city"];
      $interestrate = $row["interestrate"];
      $bankimg = $row["bankimg"];
      $maxamt = $row["maxamt"];
      $date = $row["date"];
      
      $processing_fee_rate = $row["processing_fee_rate"];
      $sumintrate= $interestrate/(12*100) ;
      $power=$loanten*12;
      $valuepower=(1+$sumintrate)^$power;
      $intpls = 1+$sumintrate;
      $totalsum =$constcost*$sumintrate*pow($intpls, $power)/(pow($intpls, $power)-1);
    
    $totpressint = $constcost/100;
      $calprocefess = $totpressint*$processing_fee_rate;
    
//    echo $constcost."act amt<br>";
//    echo $interestrate."intrst<br>";
//    echo "$sumintrate sumintrate<br>";
//    echo "$power power<br>";
//    echo "$totalsum totalsum<br>";
//    echo "$valuepower valueof power<br>";
//    echo '<--------------------------------------->';
//       
        
        ?>
    
    
    <input type="text"  hidden id="hiamt" value="<?php echo $constcost; ?>">
<input type="text" hidden id="hibn_id" value="<?php echo $bn_id; ?>">        
    <tr>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;<b><i><?php echo "<img src='img/$bankimg' > " ?></i></b></td>
        <td><?php echo $interestrate ?>%</td>
        <td><?php echo round($calprocefess) ?></td>
        <td><?php echo round($totalsum) ;  $emotot =round($totalsum);?></td>
        <td><?php echo  round($maxamt); ?></td>
        
        <td><?php echo "<button class='btn-warning' style='background-color: yellow;color: #000;' onclick='onviwbtn($bn_id,$constcost,$loanten,$calprocefess,$emotot)' > + Details/ Select </button>" ?></td>
    </tr>
  
   <?php
      // echo $sumintrate."and".$constcost;
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</table>
     