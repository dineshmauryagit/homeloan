<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home Loan</title>

    <!-- Bootstrap Core CSS -->

  <link rel="stylesheet" href="dist/powerange.css" />
   
    <link href="css/bootstrap.min.css" rel="stylesheet">
     

    <!-- Custom CSS -->
    
    <link href="css/simple-sidebar.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<style>
.btncol{
	
background-color: yellow;
color: #000;
}

.boxsha{
  -webkit-box-shadow: 13px 13px 25px -2px rgba(0,0,0,0.41);
-moz-box-shadow: 13px 13px 25px -2px rgba(0,0,0,0.41);
box-shadow: 13px 13px 25px -2px rgba(0,0,0,0.41);
}

</style>
	
</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                <div class="col-lg-12">

    <h1>Home Loan</h1>
    <div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">View details</h4>
            </div>
            <div class="modal-body" >
                <div id="viewallmod">
                    
                </div>
            <div class="modal-footer">
               <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
               <button type="button" class="" style="background-color: yellow;color: #000" onclick="aboutme()" >Select</button>
            </div>
        </div>
    </div>
</div>
    </div>
    <div id="viewallth">
    <center> 
        
    <span class="btn btn-default" style="cursor: default;">
        <span  id="chklo" style="background-color: #ccc; height: 100%;">Check loan eligibility </span>|
        <span id="viewoff" > View Offers </span>|
        <span  id="aboumysel" > About myself </span>
                            </span>
                            <br>
                            <br>
                            <table  width="60%" >
                            <tr>
                            <td>
                            <span style="color:red;"> *</span> Have you identified a property?</td>  <td><input type="radio" name="havepro" id="idenyes" class="radio-inline"   checked> Yes  <input type="radio" name="havepro" id="idensno" class="radio-inline" > No </td>
                            </tr>
                            <tr id="havenosee">
                            <td>
                            <span style="color:red;"> *</span> What type of property are you seeking loan for? </td>
                            <td> 
                                <select id="selprop" onclick="selpropval()" onblur="selpropval()" onchange="selpropval()" name="slecproper" class="form-control">
                                <option selected value="Select Property Type">Select Property Type</option>
                            <option value="Home as Resale">Home as Resale </option>
                            <option value="Home as New booking">Home as New booking</option>
                            <option value="Plot">Plot</option>
                            <option value="Construct on a plot you own">Construct on a plot you own</option>
                            </select><span id="lselprop">  </span>
                            </td>
                            </tr>
                            <tr id="homeresalbild">
                            <td>
                             (Optional) Builder Name? </td>
                            <td> 
                                  <input type="text"  name="bildername"  id="bildernameop" placeholder="Enter Builder Name" class="form-control">
                            </td>
                            </tr>
                            <tr id="homesalecostprop">
                            <td>
                            <span style="color:red;"> *</span>  Cost of the property? </td>
                            <td> 
                                   <input type="text"  name="costconstr"  id="constcost" placeholder="Enter Property Cost" class="form-control">
                            </td>
                            </tr> 
                            <tr id="plotprop">
                            <td>
                            <span style="color:red;"> *</span>  Location of Land? </td>
                            <td> 
                                   <input type="radio" name="citylimts" id="insidecitylimts" class="radio-inline" checked value="Inside City Limits">Inside City Limits 
                                   <input type="radio" id="outsidecitylimts" name="citylimts" class="radio-inline"  value="Outside City Limits"> Outside City Limits   
                            </td>
                            </tr>
                            <tr id="plotpropcost">
                            <td>
                            <span style="color:red;"> *</span>  What is the cost of your plot? </td>
                            <td> 
                                   <input type="text"  name="costconstrplot"  id="constcostplot" placeholder="Enter Number" class="form-control">
                            </td>
                            </tr>
                            <tr id="constructcost">
                            <td>
                            <span style="color:red;"> *</span>  What is your cost of construction? </td>
                            <td> 
                                   <input type="text"  name="constcostconst"  id="constcostconst" placeholder="Enter cost " class="form-control">
                            </td>
                            </tr>
                            <tr>
                            <td>
                            <span style="color:red;"> *</span> Which city is the property in ? </td>
                            <td> 
                                <select id="selcity" name="cityproper" class="form-control">
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
                                <span style="color:red;"> *</span> Your residence status ?</td>  <td><input type="radio" name="residence" id="resiind" class="radio-inline" checked value="Resident Indian"> Resident Indian   <input type="radio" id="pioholder" name="residence" class="radio-inline"  value="PIO Holder / NRI">PIO Holder / NRI  </td>
                            </tr>
                            
                            <tr>
                            <td>
                                <span style="color:red;"> *</span>  Your employment type ?</td>  <td><input type="radio" name="empty" class="radio-inline" id="empsel" checked> Salaried   <input type="radio" name="empty" class="radio-inline" id="selfemp"> Self Employed   </td>
                            </tr>
                           <tr id="monthlysal">
                            <td>
                            <span style="color:red;"> *</span>  Your net monthly income? </td>
                            <td> 
                                   <input type="text"  name="monthinc"  id="monthinc" placeholder="Enter Monthly Income" class="form-control">
                            </td>
                            </tr>
                            <tr>
                            <td>
                                <span style="color:red;"> *</span>   Add a co-borrower ?</td>  <td><input type="radio" name="coborrower" class="radio-inline"  id="borroweryes" onclick="cobrowrelation()"> Yes   <input type="radio" name="coborrower" id="borrowerno" class="radio-inline" checked> No </td>
                            </tr>
                            
                            </table>
                            <br>
                            <br>
                               <div id="codrodetail">
                                <table width="60%">
                                <tr>
                            <td>
                            <span style="color:red;"> *</span>  Your relationship with co-borrower ? </td>
                            <td> 
                               <select id="coborrowersel" name="coborrowersel" class="form-control">
                                   
                                    <option value="Spouse"> Spouse </option>
                                    <option value="Father"> Father </option>
                                    <option value="Mother"> Mother </option>
                                    <option value="Brother"> Brother </option>
                                    <option value="Sister"> Sister </option>
                                    <option value="Child"> Child </option>
                            </select>
                            </td>
                            </tr>
                              <tr>
                            <td>
                            <span style="color:red;"> *</span> Employment type of co-borrower ? </td>
                            <td> 
                                <input type="radio" value="Salaried" name="coempsal" class="radio-inline" id="cobrosal" checked> Salaried  
                               <input type="radio" value="Self Employed" name="coempsal" class="radio-inline" id="cobroself"> Self Employed  
                               <input type="radio" value="Non-Working" name="coempsal" class="radio-inline" id="cobornon"> Non-Working
                            </td>
                            </tr>
                            
                            <tr id="cobroincview">
                            <td>
                            <span style="color:red;"> </span> Co-borrower's monthly income ? </td>
                            <td> 
                                <input type="text"  name="coborrowerinc"  id="coborrowerinc" placeholder="Enter Number" class="form-control">
                            </td>
                            </tr>
                            
                            </table>
                            </div>
                                                         
                            <br>
                            <div style="background-color: #ccc; height: 50px;width: 50%"><br>&nbsp; If you provide us more information, we will give you better offers   <a id="moreinviewl" style="cursor: pointer;" >Click here</a></div>
                            <br>
                         <div id="moreinfo" >
                                <table width="60%">
                              
                               <tr>
                            <td>
                             Loan amount? </td>
                            <td> 
                                <input type="text"  name="morloanamount"  id="morloanamount" placeholder="Enter Number" class="form-control">
                            </td>
                            </tr>
                              
                              <tr>
                            <td>
                             Loan tenure ? </td>
                            <td> 
                               <select id="loantenure" name="loantenure" class="form-control">
                                   
                                    <option value="1"> 1 </option>
                                    <option value="2"> 2 </option>
                                    <option value="3"> 3 </option>
                                    <option value="4"> 4 </option>
                                    <option value="5"> 5 </option>
                                    <option value="6"> 6 </option>
                                    <option value="7"> 7 </option>
                                    <option value="8"> 8 </option>
                                    <option value="9"> 9 </option>
                                    <option value="10"> 10 </option>
                                    <option value="11"> 11 </option>
                                    <option value="12"> 12 </option>
                                    <option value="13"> 13</option>
                           </select>
                            </td>
                            </tr>
                              <tr>
                            <td>
                             What is your Date of Birth ? </td>
                            <td> 
                                <input type="date" name="dob" id="dob" class="form-control">
                            </td>
                            </tr>
                            
                            <tr>
                            <td>
                           Choose a bank that you have an account with ?
                            </td>
                            <td> 
                               <select id="bankname" name="bankname" class="form-control">
                                   
                                    <option value="ICICI BANK"> ICICI BANK  </option>
                                    <option value="HDFC BANK"> HDFC BANK </option>
                                    <option value="State Bank of India"> State Bank of India </option>
                                    <option value="Axis Bank"> Axis Bank </option>
                                   
                                  
                           </select>
                            </td>
                            </tr>
                             <tr>
                            <td>
                             City where you are currently residing? </td>
                            <td> 
                                <select id="selcity" name="morinfocity" class="form-control">Total EMI you pay currently ?
                                    <option value="Mumbai"> Mumbai </option>
                                    <option value="Delhi"> Delhi </option>
                                    <option value="Noida"> Noida </option>
                                    <option value="Pune"> Pune </option>
                            </select>
                            </td>
                            </tr>
                            <tr>
                            <td>
                             Total EMI you pay currently ? </td>
                            <td> 
                                <input type="text"  name="emiamt"  id="emiamt" placeholder="Enter Number" class="form-control">
                            </td>
                            </tr>
                            </table>
                            </div> 
                            <br>
                              <input type="button" class="btn btn-success" onclick="valid()" id="btnviewpff" value="View offers">
                            </center>
    </div>
                            <br>
                            <br>
   <!-- <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    <!-- /#wrapper -->

    <!-- jQuery -->
   
    <script src="js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/ajwork.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    

    
    </script>

    
<script src="dist/powerange.min.js"></script>
  <script type="text/javascript">

    // Basic customization.
   
    // Decimal.

   
    
  </script>
    
</body>

</html>
