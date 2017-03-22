
<?php 


$selpropvo = $_GET['selprop'];
$selcityvo = $_GET['selcity'];
$constcostvo = $_GET['constcost'];
$bildernamevo = $_GET['bildname'];
$resistatuvo = $_GET['resistatu'];
$empsalvo = $_GET['empsal'];
$salamtvo= $_GET['salamt'];
$coborrowerselvo= $_GET['coborrowersel'];
$cobosalvo= $_GET['cobosal'];
$cobordetvo= $_GET['cobordet'];


echo $selpropvo ;
echo $selcityvo;
echo $constcostvo;
echo $bildernamevo;
echo $resistatuvo;
echo $salamtvo;
echo $empsalvo;
echo $coborrowerselvo;
echo $cobosalvo;
echo $cobordetvo;

?>

<h2>View Offers</h2>
<input type="text"    id="selpropvo" value="<?php echo $selpropvo; ?>">
<input type="text"   id="selcityvo" value="<?php echo $selcityvo; ?>">
<input type="text"   id="constcostvo" value="<?php echo $constcostvo; ?>">
<input type="text"   id="bildernamevo" value="<?php echo $bildernamevo; ?>">
<input type="text"   id="resistatuvo" value="<?php echo $resistatuvo; ?>">
<input type="text"   id="salamtvo" value="<?php echo $salamtvo; ?>">
<input type="text"   id="empsalvo" value="<?php echo $empsalvo; ?>">
<input type="text"   id="coborrowerselvo" value="<?php echo $coborrowerselvo; ?>">
<input type="text"   id="cobosalvo" value="<?php echo $cobosalvo; ?>">
<input type="text"   id="cobordetvo" value="<?php echo $cobordetvo; ?>">


   <span class="btn btn-default" style="cursor: default;">
        <span  id="chklo" >Check loan eligibility </span>|
        <span id="viewoff"  style="background-color: #ccc; height: 100%;"> View Offers </span>|
        <span  id="aboumysel" > About myself </span>
                            </span>
<br>
<br>
 <section class="content">
     <div class="box">
      <table >
          <tr>
              <td width="500px">
                  &nbsp;&nbsp;&nbsp;
         <div class="example">
      <div class="slider-wrapper">
           <label class="display-box-label">Select Loan Amount (In Lacs)</label><br><br>
           <input type="text" class="js-decimal" />
            
            <div id="js-display-decimal" class="display-box"></div>
          </div>
        </div>
                  &nbsp;&nbsp;
              </td>
          </tr>
          <tr>
              <td  width="500px">
                  &nbsp;&nbsp;&nbsp;
        <div class="example">
       <div class="slider-wrapper">
            <label class="display-box-label">Select Tenure (In years) </label><br><br>
           <input type="text" class="js-callback" />
           
            <div id="js-display-callback" class="display-box"></div>
          </div>
      
        </div>
                  &nbsp;&nbsp;
              </td>
      </tr>
         </table>
        </div>
        </section>
<br>
<br>
<div id="valuechng">
<!--<table border='2' width='70%' class="table table-bordered">
    
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

$sql = "SELECT * FROM bankloan where property='$selprop' and city='$selcity' and maxamt>=$constcost  or minamt<=$constcost ";
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
      $interestrate= $row["interestrate"];
      $processing_fee_rate = $row["processing_fee_rate"];
      
    
    $calprocefess = $constcost*$processing_fee_rate/100;         
  
      
       
        
        ?>
<input type="text" hidden id="hiamt" value="<?php echo $constcost; ?>">
<input type="text" hidden id="hibn_id" value="<?php echo $bn_id; ?>">        
    <tr>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;<b><i><?php echo "<img src='img/$bankimg' > " ?></i></b></td>
        <td><?php echo $interestrate ?></td>
        <td><?php echo $calprocefess ?></td>
        <td><?php echo "N/A" ?></td>
        <td><?php echo $constcost ?></td>
        <td><?php echo "<button class='btn-warning' style='background-color: yellow;color: #000;' onclick='onviwbtn($bn_id,$constcost)' > + Details/ Select </button>" ?></td>
    </tr>
   <?php    
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</table>-->
</div>





