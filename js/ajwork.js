    function viewoffer(){
    var selprop= document.getElementById("selprop").value;
    var bildername= document.getElementById("bildernameop").value;
    var selcity= document.getElementById("selcity").value;
    var constcost= document.getElementById("constcost").value;

    var coborrowerinc= document.getElementById("coborrowerinc").value;
    var salamt= document.getElementById("monthinc").value;
    
   var resistatu;
   var empsal;
   var cobordet;
   var cobosal;
   var coborrowersel;
    
     if (document.getElementById('resiind').checked==true){resistatu="Resident Indian"}
    if (document.getElementById('pioholder').checked==true){resistatu="PIO Holder / NRI"}
     if (document.getElementById('resiind').checked==true){resistatu="Resident Indian"}
   
    if(document.getElementById('borroweryes').checked==true)
    {
     coborrowersel= document.getElementById("coborrowersel").value;
    if (document.getElementById('cobrosal').checked==true){cobordet="Salaried"; cobosal=coborrowerinc; }
    if (document.getElementById('cobroself').checked==true){cobordet="Self Employed" ; cobosal=coborrowerinc;}
    if (document.getElementById('cobornon').checked==true){cobordet="Non-Working" ; cobosal="N/A";}
    
     }
    else{
     coborrowersel="N/A";
       cobordet="N/A";
        cobosal=0;
        
    }
      if (document.getElementById('empsel').checked==true){empsal="Salaried"}
    if (document.getElementById('selfemp').checked==true){empsal="Self Employed"}
 
   
    var xmlhttp = new XMLHttpRequest();
    
    xmlhttp.open("Get","ajpages/viewoffer.php?selprop="+selprop+"&selcity="+selcity+"&constcost="+constcost+"&bildname="+bildername+"&resistatu="+resistatu+"&empsal="+empsal+"&salamt="+salamt+"&coborrowersel="+coborrowersel+"&cobosal="+cobosal+"&cobordet="+cobordet,false);
    xmlhttp.send(null);
    var constcostval=constcost;
    document.getElementById("viewallth").innerHTML=xmlhttp.responseText;
   
    var conlac=(constcostval/100000).toFixed(2)
        var dec = document.querySelector('.js-decimal');
    var initDec = new Powerange(dec, { decimal: true, callback: displayDecimalValue, min: 5, max: 50, start: conlac });


    function displayDecimalValue() {
        
      document.getElementById('js-display-decimal').innerHTML = dec.value;
      var xmlhttp = new XMLHttpRequest();
     var loanten= document.getElementById("js-display-callback").innerHTML;
       
    xmlhttp.open("Get","ajpages/valuechng.php?selprop="+selprop+"&selcity="+selcity+"&constcost="+dec.value*100000+"&loanten="+loanten+"&salamt="+salamt,false);
    xmlhttp.send(null);
    document.getElementById("valuechng").innerHTML=xmlhttp.responseText;
    }
    // Checking state.
    // On click.
   // Callback.
    var clbk = document.querySelector('.js-callback');
    var initClbk = new Powerange(clbk, { callback: displayValue,min: 1, start: 20,max: 30 });

    function displayValue() { 
  
         
      document.getElementById('js-display-callback').innerHTML = clbk.value;
      var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("Get","ajpages/valuechng.php?selprop="+selprop+"&selcity="+selcity+"&constcost="+dec.value*100000+"&loanten="+clbk.value+"&salamt="+salamt,false);
    xmlhttp.send(null);
    document.getElementById("valuechng").innerHTML=xmlhttp.responseText;
    }

    
    }
    
    
    
    function valid()
    {
       var selprop= document.getElementById("selprop").value;
       var selcity= document.getElementById("selcity").value;
       var constcost= document.getElementById("constcost").value;
       var idenyes=document.getElementById('idenyes').checked;
       var idensno=document.getElementById('idensno').checked;
       
       if(document.getElementById('idenyes').checked==true)
       {
         var numpar=/[1-9]{4}$/;
        if(selprop=="Select Property Type")
       { alert("plz select proper property");
           $("#selprop").focus();
       }
       else if(selprop=="Home as Resale"||selprop=="Home as New booking")
       {
       var salamt=/[1-9]{4}$/;
         var monthinc= document.getElementById("monthinc").value; 
                
           
          if(!numpar.test(constcost))
       {alert("Enter proper cost in number");
            $("#constcost").focus();}
       else if(selcity=="Select City")
       { alert("plz select proper city");
           $("#selcity").focus();}
       
        else if(!salamt.test(monthinc))
          {alert("Enter proper income ");
            $("#monthinc").focus();}
      else if(document.getElementById('borroweryes').checked==true)
       {
       if(document.getElementById('cobrosal').checked==true||document.getElementById('cobroself').checked==true)
       {
           var numbar=/[1-9]{4}$/;
           var coborrowerinc = document.getElementById("coborrowerinc").value;
        if(!numbar.test(coborrowerinc))
       {alert("Enter proper cost in number");
            $("#coborrowerinc").focus();}
        
        else {
         
          viewoffer();
         
     }
     }
     
     
       
       }
       else
       {
          
           viewoffer();
       }
           
       }
       
      
         else if(selprop=="Plot")
       {
          var salamt=/[1-9]{4}$/;
         var monthinc= document.getElementById("monthinc").value; 
             var numbar=/[1-9]{4}$/;
           
            var constcostplot= document.getElementById("constcostplot").value;
            
          if(!numpar.test(constcostplot))
          {alert("Enter proper cost in number ");
            $("#constcostplot").focus();}
        
       else if(selcity=="Select City")
       { alert("plz select proper city");
           $("#selcity").focus();}
           
         
         else if(!salamt.test(monthinc))
          {alert("Enter proper income ");
            $("#monthinc").focus();}
 
      else if(document.getElementById('borroweryes').checked==true)
       {
       
           var numbar=/[1-9]{4}$/;
           var coborrowerinc = document.getElementById("coborrowerinc").value;
        if(!numbar.test(coborrowerinc))
       {alert("Enter proper cost in number");
            $("#coborrowerinc").focus();}
        
        else {
         
              var selprop= document.getElementById("selprop").value;
    var selcity= document.getElementById("selcity").value;
    var constcostplot= document.getElementById("constcostplot").value;
     var salamt= document.getElementById("monthinc").value;
     var coborrower= document.getElementById("coborrower").value;
     
     var empcoborrowertype;
     var coborrmontinc;
       if(document.getElementById('cobornon').checked==true){
           empcoborrowertype="Non-Working";
           coborrmontinc="Non-Working";                    
       }
       if(document.getElementById('cobroself').checked==true){
           empcoborrowertype="Self Employed";
            coborrmontinc="Self Employed";                   
       } 
     if(document.getElementById('cobrosal').checked==true){
           empcoborrowertype="Salaried";
           coborrmontinc="Salaried";
                            }
   
    //var selprop= document.getElementById("selprop").value;
    //var selprop= document.getElementById("selprop").value;
   // var selprop= document.getElementById("selprop").value;
   // var selprop= document.getElementById("selprop").value;
   // var selprop= document.getElementById("selprop").value;
    
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("Get","ajpages/viewoffer.php?selprop="+selprop+"&selcity="+selcity+"&constcost="+constcostplot+"&empcobotype="+empcoborrowertype+"&coborrmontinc="+coborrmontinc+"&coborrower="+coborrower,false);
    xmlhttp.send(null);
    document.getElementById("viewallth").innerHTML=xmlhttp.responseText;
    var conlac=(constcostplot/100000).toFixed(2)
    
        var dec = document.querySelector('.js-decimal');
    var initDec = new Powerange(dec, { decimal: true, callback: displayDecimalValue, min: 5, max: 50, start: conlac });

    function displayDecimalValue() {
        
      document.getElementById('js-display-decimal').innerHTML = dec.value;
      var xmlhttp = new XMLHttpRequest();
     var loanten= document.getElementById("js-display-callback").innerHTML;
       
    xmlhttp.open("Get","ajpages/valuechng.php?selprop="+selprop+"&selcity="+selcity+"&constcost="+dec.value*100000+"&loanten="+loanten+"&salamt="+salamt,false);
    xmlhttp.send(null);
    document.getElementById("valuechng").innerHTML=xmlhttp.responseText;
    }
    // Checking state.
    // On click.
   // Callback.
    var clbk = document.querySelector('.js-callback');
    var initClbk = new Powerange(clbk, { callback: displayValue,min: 1, start: 20,max: 30 });

    function displayValue() { 
  
         
      document.getElementById('js-display-callback').innerHTML = clbk.value;
      var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("Get","ajpages/valuechng.php?selprop="+selprop+"&selcity="+selcity+"&constcost="+dec.value*100000+"&loanten="+clbk.value+"&salamt="+salamt,false);
    xmlhttp.send(null);
    document.getElementById("valuechng").innerHTML=xmlhttp.responseText;
    }
         
     }
     
     
     
       
       }
       else
       {
            var selprop= document.getElementById("selprop").value;
    var selcity= document.getElementById("selcity").value;
    var constcostplot= document.getElementById("constcostplot").value;
     var salamt= document.getElementById("monthinc").value;
   
    //var selprop= document.getElementById("selprop").value;
    //var selprop= document.getElementById("selprop").value;
   // var selprop= document.getElementById("selprop").value;
   // var selprop= document.getElementById("selprop").value;
   // var selprop= document.getElementById("selprop").value;
    
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("Get","ajpages/viewoffer.php?selprop="+selprop+"&selcity="+selcity+"&constcost="+constcostplot,false);
    xmlhttp.send(null);
    document.getElementById("viewallth").innerHTML=xmlhttp.responseText;
    var conlac=(constcostplot/100000).toFixed(2)
    
        var dec = document.querySelector('.js-decimal');
    var initDec = new Powerange(dec, { decimal: true, callback: displayDecimalValue, min: 5, max: 50, start: conlac });

    function displayDecimalValue() {
        
      document.getElementById('js-display-decimal').innerHTML = dec.value;
      var xmlhttp = new XMLHttpRequest();
     var loanten= document.getElementById("js-display-callback").innerHTML;
       
    xmlhttp.open("Get","ajpages/valuechng.php?selprop="+selprop+"&selcity="+selcity+"&constcost="+dec.value*100000+"&loanten="+loanten+"&salamt="+salamt,false);
    xmlhttp.send(null);
    document.getElementById("valuechng").innerHTML=xmlhttp.responseText;
    }
    // Checking state.
    // On click.
   // Callback.
    var clbk = document.querySelector('.js-callback');
    var initClbk = new Powerange(clbk, { callback: displayValue,min: 1, start: 20,max: 30 });

    function displayValue() { 
  
         
      document.getElementById('js-display-callback').innerHTML = clbk.value;
      var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("Get","ajpages/valuechng.php?selprop="+selprop+"&selcity="+selcity+"&constcost="+dec.value*100000+"&loanten="+clbk.value+"&salamt="+salamt,false);
    xmlhttp.send(null);
    document.getElementById("valuechng").innerHTML=xmlhttp.responseText;
    }

       }
           
       }
       
        else if(selprop=="Construct on a plot you own")
       {
          var salamt=/[1-9]{4}$/;
         var monthinc= document.getElementById("monthinc").value; 
             var numbar=/[1-9]{4}$/;
           
            var constcostconst= document.getElementById("constcostconst").value;
            
          if(!numpar.test(constcostconst))
          {alert("Enter proper cost in number ");
            $("#constcostconst").focus();}
        
       else if(selcity=="Select City")
       { alert("plz select proper city");
           $("#selcity").focus();}
           
         
         else if(!salamt.test(monthinc))
          {alert("Enter proper income ");
            $("#monthinc").focus();}
 
      else if(document.getElementById('borroweryes').checked==true)
       {
       if(document.getElementById('cobrosal').checked==true||document.getElementById('cobroself').checked==true)
       {
           var numbar=/[1-9]{4}$/;
           var coborrowerinc = document.getElementById("coborrowerinc").value;
        if(!numbar.test(coborrowerinc))
       {alert("Enter proper cost in number");
            $("#coborrowerinc").focus();}
        
        else {
         
              var selprop= document.getElementById("selprop").value;
    var selcity= document.getElementById("selcity").value;
    var constcostconst= document.getElementById("constcostconst").value;
     var salamt= document.getElementById("monthinc").value;
     var coborrower= document.getElementById("coborrower").value;
     
     var empcoborrowertype;
     var coborrmontinc;
       if(document.getElementById('cobornon').checked==true){
           empcoborrowertype="Non-Working";
           coborrmontinc="Non-Working";                    
       }
       if(document.getElementById('cobroself').checked==true){
           empcoborrowertype="Self Employed";
            coborrmontinc="Self Employed";                   
       } 
     if(document.getElementById('cobrosal').checked==true){
           empcoborrowertype="Salaried";
           coborrmontinc="Salaried";
                            }
   
    //var selprop= document.getElementById("selprop").value;
    //var selprop= document.getElementById("selprop").value;
   // var selprop= document.getElementById("selprop").value;
   // var selprop= document.getElementById("selprop").value;
   // var selprop= document.getElementById("selprop").value;
    
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("Get","ajpages/viewoffer.php?selprop="+selprop+"&selcity="+selcity+"&constcost="+constcostconst+"&empcobotype="+empcoborrowertype+"&coborrmontinc="+coborrmontinc+"&coborrower="+coborrower,false);
    xmlhttp.send(null);
    document.getElementById("viewallth").innerHTML=xmlhttp.responseText;
    var conlac=(constcostconst/100000).toFixed(2)
    
        var dec = document.querySelector('.js-decimal');
    var initDec = new Powerange(dec, { decimal: true, callback: displayDecimalValue, min: 5, max: 50, start: conlac });

    function displayDecimalValue() {
        
      document.getElementById('js-display-decimal').innerHTML = dec.value;
      var xmlhttp = new XMLHttpRequest();
     var loanten= document.getElementById("js-display-callback").innerHTML;
       
    xmlhttp.open("Get","ajpages/valuechng.php?selprop="+selprop+"&selcity="+selcity+"&constcost="+dec.value*100000+"&loanten="+loanten+"&salamt="+salamt,false);
    xmlhttp.send(null);
    document.getElementById("valuechng").innerHTML=xmlhttp.responseText;
    }
    // Checking state.
    // On click.
   // Callback.
    var clbk = document.querySelector('.js-callback');
    var initClbk = new Powerange(clbk, { callback: displayValue,min: 1, start: 20,max: 30 });

    function displayValue() { 
  
         
      document.getElementById('js-display-callback').innerHTML = clbk.value;
      var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("Get","ajpages/valuechng.php?selprop="+selprop+"&selcity="+selcity+"&constcost="+dec.value*100000+"&loanten="+clbk.value+"&salamt="+salamt,false);
    xmlhttp.send(null);
    document.getElementById("valuechng").innerHTML=xmlhttp.responseText;
    }

         
     }
     }
     
     
       
       }
       else
       {
          
            var selprop= document.getElementById("selprop").value;
    var selcity= document.getElementById("selcity").value;
    var constcostconst= document.getElementById("constcostconst").value;
     var salamt= document.getElementById("monthinc").value;
   
    //var selprop= document.getElementById("selprop").value;
    //var selprop= document.getElementById("selprop").value;
   // var selprop= document.getElementById("selprop").value;
   // var selprop= document.getElementById("selprop").value;
   // var selprop= document.getElementById("selprop").value;
    
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("Get","ajpages/viewoffer.php?selprop="+selprop+"&selcity="+selcity+"&constcost="+constcostconst,false);
    xmlhttp.send(null);
    document.getElementById("viewallth").innerHTML=xmlhttp.responseText;
    var conlac=(constcostconst/100000).toFixed(2)
    
        var dec = document.querySelector('.js-decimal');
    var initDec = new Powerange(dec, { decimal: true, callback: displayDecimalValue, min: 5, max: 50, start: conlac });

    function displayDecimalValue() {
        
      document.getElementById('js-display-decimal').innerHTML = dec.value;
      var xmlhttp = new XMLHttpRequest();
     var loanten= document.getElementById("js-display-callback").innerHTML;
       
    xmlhttp.open("Get","ajpages/valuechng.php?selprop="+selprop+"&selcity="+selcity+"&constcost="+dec.value*100000+"&loanten="+loanten+"&salamt="+salamt,false);
    xmlhttp.send(null);
    document.getElementById("valuechng").innerHTML=xmlhttp.responseText;
    }
    // Checking state.
    // On click.
   // Callback.
    var clbk = document.querySelector('.js-callback');
    var initClbk = new Powerange(clbk, { callback: displayValue,min: 1, start: 20,max: 30 });

    function displayValue() { 
  
         
      document.getElementById('js-display-callback').innerHTML = clbk.value;
      var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("Get","ajpages/valuechng.php?selprop="+selprop+"&selcity="+selcity+"&constcost="+dec.value*100000+"&loanten="+clbk.value+"&salamt="+salamt,false);
    xmlhttp.send(null);
    document.getElementById("valuechng").innerHTML=xmlhttp.responseText;
    }

       }
           
       }
       
       
       else if(selcity=="Select City")
       { alert("plz select proper city");
           $("#selcity").focus();}
  

        
      else if(!numpar.test(constcost))
       {alert("Enter proper cost in number");
            $("#constcost").focus();}
      else if(document.getElementById('borroweryes').checked==true)
       {
       if(document.getElementById('cobrosal').checked==true||document.getElementById('cobroself').checked==true)
       {
           var numbar=/[1-9]{4}$/;
           var coborrowerinc = document.getElementById("coborrowerinc").value;
        if(!numbar.test(coborrowerinc))
       {alert("Enter proper cost in number");
            $("#coborrowerinc").focus();}
        
        else {
         
          viewoffer();
         
     }
     }
     
     
       
       }
       else
       {
          
           viewoffer();
       } 
       }
       else if(document.getElementById('idensno').checked==true)
       {
         var numpar=/[1-9]{4}$/;
        
            if(selcity=="Select City")
       { alert("plz select proper city");
           $("#selcity").focus();}
  

        
      else if(!numpar.test(constcost))
       {alert("Enter proper cost in number");
            $("#constcost").focus();}
      else if(document.getElementById('borroweryes').checked==true)
       {
       if(document.getElementById('cobrosal').checked==true||document.getElementById('cobroself').checked==true)
       {
           var numbar=/[1-9]{4}$/;
           var coborrowerinc = document.getElementById("coborrowerinc").value;
        if(!numbar.test(coborrowerinc))
       {alert("Enter proper cost in number");
            $("#coborrowerinc").focus();}
        
        else {
         
          viewoffer();
         
     }
     }
     
     
       
       }
       else
       {
           viewoffer();
       } 
            
       }
           
          
    
    }
    
    
    function selpropval()
    {
         var selprop= document.getElementById("selprop").value;
         if(selprop=="Select Property Type")
        {
                $("#homeresalbild").hide();
                $("#homesalecostprop").hide();
                $("#plotprop").hide();
                $("#plotpropcost").hide();
                $("#constructcost").hide();
            
        }
        if(selprop=="Home as Resale")
        {
                $("#homeresalbild").show();
                $("#homesalecostprop").show();
                $("#plotprop").hide();
                $("#plotpropcost").hide();
                $("#constructcost").hide();
            
        }
        if(selprop=="Home as New booking")
        {
            $("#homeresalbild").show();
                $("#homesalecostprop").show();
                $("#plotprop").hide();
                $("#plotpropcost").hide();
                $("#constructcost").hide();
            
        }
        if(selprop=="Plot")
        {
             $("#homeresalbild").hide();
                $("#homesalecostprop").hide();
                $("#plotprop").show();
                $("#plotpropcost").show();
                $("#constructcost").hide();
            
        }
        if(selprop=="Construct on a plot you own")
        {
            $("#homeresalbild").hide();
                $("#homesalecostprop").hide();
                $("#plotprop").hide();
                $("#plotpropcost").hide();
                $("#constructcost").show();
            
        }
    }
    
    
   function cobrowrelation()
       {
     
    
           
       }
       
    $(document).ready(function(){
    $("#codrodetail").hide();
    $("#moreinfo").hide();
    
     $("#homeresalbild").hide();
 $("#homesalecostprop").hide();
 $("#plotprop").hide();
 $("#plotpropcost").hide();
 $("#constructcost").hide();
    
    $('#borroweryes').click(function () {
     $('#codrodetail').show('fast');});
 
     $('#borrowerno').click(function () {
     $('#codrodetail').hide('fast');});
 
    $('#cobornon').click(function () {
     $('#cobroincview').hide('fast');});
 
 $('#cobrosal').click(function () {
     $('#cobroincview').show('fast');});
 
 $('#cobroself').click(function () {
     $('#cobroincview').show('fast');});
 
  $('#moreinviewl').click(function () {
     $('#moreinfo').show('fast');});
        
        $('#idensno').click(function () {
     $('#havenosee').hide('fast');});
        
         $('#idenyes').click(function () {
     $('#havenosee').show('fast');});
 
   $('#selprop').click(function () {
     $('#havenosee').show('fast');
 });
 
   $('#selprop').click(function () {
     $('#havenosee').show('fast');
 });
   $('#selprop').click(function () {
    $('#havenosee').show('fast');
 });
   $('#selprop').click(function () {
     $('#havenosee').show('fast');});
 

        
     
         
    });


function onviwbtn(val1,val2,val3,val4,val5)
{   
    var hiamt= val2;
    var hibn_id= val1;
   var loantren = val3;
   var procfee = val4;
   var emmitot = val5;
    
     var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("Get","ajpages/viewdetailss.php?hiamt="+hiamt+"&hibn_id="+hibn_id+"&loantren="+loantren+"&procfee="+procfee+"&emmitot="+emmitot,false);
    xmlhttp.send(null);
    document.getElementById("viewallmod").innerHTML=xmlhttp.responseText;
    
   $("#myModal").modal('show');
}
 
 
 function aboutme()
{   
   var hiamt= document.getElementById("hiamt").value;
    var hibn_id= document.getElementById("hibn_id").value;
    var procfee= document.getElementById("procfee").value;
     var emmitot= document.getElementById("emmitot").value;
      var loantenura= document.getElementById("loantenura").value;
      
      var selpropvo= document.getElementById("selpropvo").value;
      var selcityvo= document.getElementById("selcityvo").value;
      var constcostvo= document.getElementById("constcostvo").value;
      var bildernamevo= document.getElementById("bildernamevo").value;
      var resistatuvo= document.getElementById("resistatuvo").value;
      var salamtvo= document.getElementById("salamtvo").value;
      var empsalvo= document.getElementById("empsalvo").value;
      var coborrowerselvo= document.getElementById("coborrowerselvo").value;
      var cobosalvo= document.getElementById("cobosalvo").value;
      var cobordetvo= document.getElementById("cobordetvo").value;
      
     var xmlhttp = new XMLHttpRequest();
     
    xmlhttp.open("Get","ajpages/aboutmy.php?hiamt="+hiamt+"&hibn_id="+hibn_id+"&procfee="+procfee+"&emmitot="+emmitot+"&loantenura="+loantenura+"&selpropab="+selpropvo+"&selcityab="+selcityvo+"&constcostab="+constcostvo+"&bildnameab="+bildernamevo+"&resistatuab="+resistatuvo+"&empsalab="+empsalvo+"&salamtab="+salamtvo+"&coborrowerselab="+coborrowerselvo+"&cobosalab="+cobosalvo+"&cobordetab="+cobordetvo,false);
    xmlhttp.send(null);
    document.getElementById("viewallth").innerHTML=xmlhttp.responseText;
    
   $("#myModal").modal('hide');
   
}
    
       
       function savealldata()
       {
           var numpar=/[1-9]{4}$/;
         var nameuser= document.getElementById("nameuser").value;
         var enteremail= document.getElementById("enteremail").value;
         var phonenum= document.getElementById("phonenum").value;
        // var malegen= document.getElementById('malegen').checked==true;
        // var femalegen= document.getElementById('femalegen').checked==true;
         var enteraddress= document.getElementById("enteraddress").value;
         var usercitt= document.getElementById("usercitt").value;
         var enterpincode= document.getElementById("enterpincode").value;
         var enterpan= document.getElementById("enterpan").value;
         var enterempname= document.getElementById("enterempname").value;
         var officeadd= document.getElementById("officeadd").value;
         var officecity= document.getElementById("officecity").value;
         var officepincode= document.getElementById("officepincode").value;
         var agree= document.getElementById("agree").checked==true;
         var nameuser= document.getElementById("nameuser").value;
         var gender;
         
         if(nameuser==""){alert("Enter name");  $("#nameuser").focus(); }
         else if(enteremail==""){alert("Enter Email"); $("#enteremail").focus();}
         else if(phonenum==""){alert("Enter phone number"); $("#phonenum").focus();}
         else if(document.getElementById('malegen').checked==true)
         {
            gender="Male";
            if(enteraddress=="")
         {
             alert("Enter Address");  $("#enteraddress").focus(); 
         }
          else if(usercitt=="Select City")
         {
             alert("Select City");  $("#usercitt").focus(); 
         }
          else if(enterpincode=="")
         {
             alert("Enter pincode");  $("#enterpincode").focus(); 
         }
         else if(enterempname=="")
         {
             alert("Enter employee name");  $("#enterempname").focus(); 
         }
         else if(officeadd=="")
         {
             alert("Enter office address");  $("#officeadd").focus(); 
         }
         else if(officecity=="Select City")
         {
             alert("Select City");  $("#officecity").focus(); 
         }
         else if(officepincode=="")
         {
             alert("Enter office pincode");  $("#officepincode").focus(); 
         }
         else if(agree==false)
         {
             alert("Check the button");  $("#agree").focus(); 
         }
          else
          {
             var hibn_id= document.getElementById("hibn_id").value;
               var selpropvo= document.getElementById("selpropvo").value;
               var bildernamevo= document.getElementById("bildernamevo").value;
               var planmaxamt= document.getElementById("planmaxamt").value;
               var selcityvo= document.getElementById("selcityvo").value;
               var resistatuvo= document.getElementById("resistatuvo").value;
               var empsalvo= document.getElementById("empsalvo").value;
               var salamtvo= document.getElementById("salamtvo").value;
               var coborrowerselvo= document.getElementById("coborrowerselvo").value;
               var cobordetvo= document.getElementById("cobordetvo").value;
               var cobosalvo= document.getElementById("cobosalvo").value;
               var banknameofplan= document.getElementById("banknameofplan").value;
               var planselint= document.getElementById("planselint").value;
               var processfeerat= document.getElementById("processfeerat").value;
               var planuseremi= document.getElementById("planuseremi").value;
               var planmaxamt= document.getElementById("planmaxamt").value;
               var loanyearplan= document.getElementById("loanyearplan").value;
               var planproesspnal= document.getElementById("planproesspnal").value;
               var plansecurity= document.getElementById("plansecurity").value;
                var planprofee= document.getElementById("planprofee").value;
               
                
           var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("Get","ajpages/savedata.php?bn_id="+hibn_id+"&selpropvo="+selpropvo+"&bildernamevo="+bildernamevo+"&planmaxamt="+planmaxamt+"&selcityvo="+selcityvo+"&resistatuvo="+resistatuvo+"&empsalvo="+empsalvo+"&salamtvo="+salamtvo+"&coborrowerselvo="+coborrowerselvo+"&cobordetvo="+cobordetvo+"&cobosalvo="+cobosalvo+"&banknameofplan="+banknameofplan+"&planselint="+planselint+"&processfeerat="+processfeerat+"&planuseremi="+planuseremi+"&planmaxamt="+planmaxamt+"&loanyearplan="+loanyearplan+"&planproesspnal="+planproesspnal+"&plansecurity="+plansecurity+"&nameuser="+nameuser+"&enteremail="+enteremail+"&phonenum="+phonenum+"&enteraddress="+enteraddress+"&usercitt="+usercitt+"&enterpincode="+enterpincode+"&enterpan="+enterpan+"&enterempname="+enterempname+"&officeadd="+officeadd+"&officecity="+officecity+"&officepincode="+officepincode+"&agree="+agree+"&gender="+gender+"&planprofee="+planprofee,false);
    xmlhttp.send(null);
    document.getElementById("viewallth").innerHTML=xmlhttp.responseText;    
              alert("Thank you submiting your data we will inform you shortly");
              
          }
         }
       else if(document.getElementById('femalegen').checked==true)
         {
            gender="Female";
           if(enteraddress=="")
         {
             alert("Enter Address");  $("#enteraddress").focus(); 
         }
          else if(usercitt=="Select City")
         {
             alert("Select City");  $("#usercitt").focus(); 
         }
          else if(enterpincode=="")
         {
             alert("Enter pincode");  $("#enterpincode").focus(); 
         }
         else if(enterempname=="")
         {
             alert("Enter employee name");  $("#enterempname").focus(); 
         }
         else if(officeadd=="")
         {
             alert("Enter office address");  $("#officeadd").focus(); 
         }
         else if(officecity=="Select City")
         {
             alert("Select City");  $("#officecity").focus(); 
         }
         else if(officepincode=="")
         {
             alert("Enter office pincode");  $("#officepincode").focus(); 
         }
         else if(agree==false)
         {
             alert("Check the button");  $("#agree").focus(); 
         }
          else
          {
              
             var hibn_id= document.getElementById("hibn_id").value;
               var selpropvo= document.getElementById("selpropvo").value;
               var bildernamevo= document.getElementById("bildernamevo").value;
               var planmaxamt= document.getElementById("planmaxamt").value;
               var selcityvo= document.getElementById("selcityvo").value;
               var resistatuvo= document.getElementById("resistatuvo").value;
               var empsalvo= document.getElementById("empsalvo").value;
               var salamtvo= document.getElementById("salamtvo").value;
               var coborrowerselvo= document.getElementById("coborrowerselvo").value;
               var cobordetvo= document.getElementById("cobordetvo").value;
               var cobosalvo= document.getElementById("cobosalvo").value;
               var banknameofplan= document.getElementById("banknameofplan").value;
               var planselint= document.getElementById("planselint").value;
               var processfeerat= document.getElementById("processfeerat").value;
               var planuseremi= document.getElementById("planuseremi").value;
               var planmaxamt= document.getElementById("planmaxamt").value;
               var loanyearplan= document.getElementById("loanyearplan").value;
               var planproesspnal= document.getElementById("planproesspnal").value;
               var plansecurity= document.getElementById("plansecurity").value;
                var planprofee= document.getElementById("planprofee").value;
               
                
           var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("Get","ajpages/savedata.php?bn_id="+hibn_id+"&selpropvo="+selpropvo+"&bildernamevo="+bildernamevo+"&planmaxamt="+planmaxamt+"&selcityvo="+selcityvo+"&resistatuvo="+resistatuvo+"&empsalvo="+empsalvo+"&salamtvo="+salamtvo+"&coborrowerselvo="+coborrowerselvo+"&cobordetvo="+cobordetvo+"&cobosalvo="+cobosalvo+"&banknameofplan="+banknameofplan+"&planselint="+planselint+"&processfeerat="+processfeerat+"&planuseremi="+planuseremi+"&planmaxamt="+planmaxamt+"&loanyearplan="+loanyearplan+"&planproesspnal="+planproesspnal+"&plansecurity="+plansecurity+"&nameuser="+nameuser+"&enteremail="+enteremail+"&phonenum="+phonenum+"&enteraddress="+enteraddress+"&usercitt="+usercitt+"&enterpincode="+enterpincode+"&enterpan="+enterpan+"&enterempname="+enterempname+"&officeadd="+officeadd+"&officecity="+officecity+"&officepincode="+officepincode+"&agree="+agree+"&gender="+gender+"&planprofee="+planprofee,false);
    xmlhttp.send(null);
    document.getElementById("viewallth").innerHTML=xmlhttp.responseText;    
              alert("Thank you submiting your data we will inform you shortly");
               
          } 
         }

        
       }
       
       