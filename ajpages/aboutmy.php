
<span class="btn btn-default" style="cursor: default;">
        <span  id="chklo" >Check loan eligibility </span>|
        <span id="viewoff" > View Offers </span>|
        <span  id="aboumysel" style="background-color: #ccc; height: 100%;"> About myself </span>
                            </span>
<br>
<br>
<br>

<div class="boxsha">
    <br>
   
<table border='2' width='70%' class="table table-bordered">
    
    <tr>
        <td>Bank</td>
        <td>Interest Rate</td>
        <td>Processing Fee</td>
        <td>EMI</td>
        <td>Max Loan Amount</td>

    </tr>

<?php


$hiamt = $_GET['hiamt'];
$hibn_id = $_GET['hibn_id'];
$emmitot = $_GET['emmitot'];
$procfee = $_GET['procfee'];
$loantenura = $_GET['loantenura'];

$selpropab = $_GET['selpropab'];
$selcityab = $_GET['selcityab'];
$constcostab = $_GET['constcostab'];
$bildnameab = $_GET['bildnameab'];
$resistatuab = $_GET['resistatuab'];
$empsalab = $_GET['empsalab'];
$salamtab= $_GET['salamtab'];
$coborrowerselab= $_GET['coborrowerselab'];
$cobosalab= $_GET['cobosalab'];
$cobordetab= $_GET['cobordetab'];

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
      $bankimg= $row["bankimg"];
      $bankname= $row["bankname"];
      $property = $row["property"];
      $city = $row["city"];
      $interestrate = $row["interestrate"];
      $processing_fee_rate = $row["processing_fee_rate"];

      $pre_pay_penalty = $row["pre_pay_penalty"];
 $security = $row["security"];
      $maxamt = $row["maxamt"];
      $date = $row["date"];
       
        
        ?>
<input type="text" hidden id="hiamt" value="<?php echo $hiamt; ?>">
<input type="text" hidden id="hibn_id" value="<?php echo $bn_id; ?>">        
    <tr>
         <td>&nbsp;&nbsp;&nbsp;&nbsp;<b><i><?php echo "<img src='img/$bankimg' > " ?></i></b></td>
         <td><?php echo $interestrate ?><input type="text" id="planselint" hidden value="<?php  echo $interestrate ?>"><input type="text" id="banknameofplan" hidden value="<?php  echo $bankname ?>"></td>
        <td><?php echo $procfee ?><input type="text" id="planprofee" hidden value="<?php  echo $procfee ?>"><input type="text" id="processfeerat" hidden value="<?php  echo $processing_fee_rate ?>"></td>
        <td><?php echo $emmitot ?><input type="text" id="planuseremi" hidden value="<?php  echo $emmitot ?>"></td>
        <td><?php echo $maxamt ?><input type="text" id="planmaxamt" hidden value="<?php  echo $hiamt ?>"></td>
          </tr>
   <?php    
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</table>

    <span>
        
        <span><b>Loan Amount:  </b></span><span> <?php echo $hiamt ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
        <span><b>Loan Tenure: </b></span><span> <?php echo $loantenura ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" id="loanyearplan" hidden value="<?php  echo $loantenura ?>"></span>
        <span><b>Processing Fee Rate: </b></span><span> <?php echo $processing_fee_rate ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><br><br>
        <span><b>Pre Payment penalty: </b></span><span> <?php echo $pre_pay_penalty ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" id="planproesspnal" hidden value="<?php  echo $pre_pay_penalty ?>"></span>
        <span><b>Processing Fee (incl. Tax):  </b></span><span> <?php echo $procfee ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="procfeeamt" hidden value="<?php  echo $procfeeamt ?>"></span>
        <span><b>Security: </b></span><span> <?php echo $security ?> <input type="text" id="plansecurity" hidden value="<?php  echo $security ?>"></span>
        
    </span>
    
</div>

<div>
<br><br>    <br>
<input type="text"    id="selpropvo" value="<?php echo $selpropab; ?>">
<input type="text"   id="selcityvo" value="<?php echo $selcityab; ?>">
<input type="text"   id="constcostvo" value="<?php echo $hiamt; ?>">
<input type="text"   id="bildernamevo" value="<?php echo $bildnameab; ?>">
<input type="text"   id="resistatuvo" value="<?php echo $resistatuab; ?>">
<input type="text"   id="empsalvo" value="<?php echo $empsalab; ?>">
<input type="text"   id="salamtvo" value="<?php echo $salamtab; ?>">
<input type="text"   id="coborrowerselvo" value="<?php echo $coborrowerselab; ?>">
<input type="text"   id="cobosalvo" value="<?php echo $cobosalab; ?>">
<input type="text"   id="cobordetvo" value="<?php echo $cobordetab; ?>">
<br>
    <b>You have selected IndiaBulls Finance. We only need a few more details from you to forward your application to the bank.</b> <br>
    ........................................................................................................................................................
    <br>
<table  width="60%" >
    <tr >
    <td>
    <span style="color:red;"> *</span> Name: </td>
    <td> 
           <input type="text"  name="nameuser"  id="nameuser" placeholder="Enter your full name" class="form-control">
    </td>
    </tr>
    <tr >
    <td>
    <span style="color:red;"> *</span>  Email: </td>
    <td> 
           <input type="text"  name="enteremail"  id="enteremail" placeholder="Enter email id" class="form-control">
    </td>
    </tr>
    <tr >
    <td>
    <span style="color:red;"> *</span>  Phone: </td>
    <td> 
           <input type="text"  name="phonenum"  id="phonenum" placeholder="Enter Your Mobile Number" class="form-control">
    </td>
    </tr>
    <tr >
    <td>
    <span style="color:red;"> *</span> * Gender: </td>
    <td> 
           <input type="radio" name="gender" id="malegen" class="radio-inline" checked value="Male">Male
           <input type="radio" id="femalegen" name="gender" class="radio-inline"  value="Female"> Female   
    </td>
    </tr>
    <tr >
    <td>
    <span style="color:red;"> *</span>  Address: </td>
    <td> 
        <textarea  name="Address"  id="enteraddress" placeholder="Enter Your Current Address" class="form-control"> </textarea>
    </td>
    </tr>
    <tr >
    <td>
    <span style="color:red;"> *</span>  City: </td>
    <td> 
           <select id="usercitt" name="usercitt" class="form-control">
                                    <option value="Select City">Select City</option>
                                    <option value="Mumbai"> Mumbai </option>
                                    <option value="Delhi"> Delhi </option>
                                    <option value="Noida"> Noida </option>
                                    <option value="Pune"> Pune </option>
                            </select>
    </td>
    </tr>
    <tr>
    <td>
    <span style="color:red;"> *</span>  Pin Code: </td>
    <td> 
           <input type="text"  name="enterpincode"  id="enterpincode" placeholder="Enter pincode" class="form-control">
    </td>
    </tr>
    <tr>
    <td>
  PAN: </td>
    <td> 
           <input type="text"  name="enterpan"  id="enterpan" placeholder="Enter PAN" class="form-control">
    </td>
    </tr>
</table>
    <br>
    <br>
    <b>Your Employer Details for home loan </b> <br>
    ......................................................................................................................................................
    <table  width="60%" >
    <tr >
    <td>
    <span style="color:red;"> *</span> Employer Name: </td>
    <td> 
           <input type="text"  name="enterempname"  id="enterempname" placeholder="Enter Employer name" class="form-control">
    </td>
    </tr>
    <tr>
    <td>
    <span style="color:red;"> *</span> Office Address: </td>
    <td> 
        <textarea  name="officeadd"  id="officeadd" placeholder="Enter Office Address" class="form-control"> </textarea>
    </td>
    </tr>
    <tr>
    <td>
    <span style="color:red;"> *</span>  Office City: </td>
    <td> 
          <select id="officecity" name="officecity" class="form-control">
        <option value="Select City">Select City</option>
        <option value="Mumbai"> Mumbai </option>
        <option value="Delhi"> Delhi </option>
        <option value="Noida"> Noida </option>
        <option value="Pune"> Pune </option>
        </select>
    </td>
    </tr>
    <tr>
    <td>
    <span style="color:red;"> *</span>  * Office Pincode: </td>
    <td> 
           <input type="text"  name="officepincode"  id="officepincode" placeholder="Enter office pincode" class="form-control">
    </td>
    </tr>
    
</table>
     <br>
     <br>
     <input type="checkbox" id="agree" value="I accept"> I authorise Name and its associate to call me or SMS me with reference to financial product. This consent will override any registration for DNC/NDNC
<br>
<br>
<button class='btn-warning' style='background-color: yellow;color: #000;'  onclick="savealldata()" > Submit</button>
</div>