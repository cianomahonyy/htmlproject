function calcSub(){
    
    var argSubTotal;
    var vat;
    var discount;
    var total;
    
    if(document.getElementById('salesforce').checked) {
      argSubTotal = 100;
    }
    else if(document.getElementById('aws').checked) {
      argSubTotal = 300;
    }
    else if(document.getElementById('cloud9').checked) {
      argSubTotal = 200;
    }
    else if(document.getElementById('gmail').checked) {
      argSubTotal = 400;
    }
    else {
      argSubTotal = 0;
    }
    
    display(argSubTotal);
    calcDisVatTotal(argSubTotal);
}

function calcDisVatTotal(parmSubTotal){
  var argSubTotal = parmSubTotal;
  var vat = parmSubTotal * 0.1;
  var discount = parmSubTotal * 0.05;
  var total = parmSubTotal - discount - vat;
  
  display(argSubTotal, vat, discount, total);
}


function display(parm1, parm2, parm3, parm4){
  
  document.getElementById("subtotal").value = parm1;
  document.getElementById("vat").value = parm2;
  document.getElementById("discount").value = parm3;
  document.getElementById("total").value = parm4;
        
  enablebtnProceed();
}


function enablebtnProceed(){
    $('#btnProceed').prop('disabled', false);
}

function disablebtnProceed() {
    $('#btnProceed').prop('disabled', true);
}