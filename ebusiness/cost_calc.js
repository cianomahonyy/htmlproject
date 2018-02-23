function calcSub(){
    
    var argSubTotal;
    var vat;
    var discount;
    var total;
    
    if(document.getElementById('salesforce').checked) {
      argSubTotal = 100;
      discount = argSubTotal * 0.05;
      vat = argSubTotal * 0.1;
      total = argSubTotal - discount - vat;
    }
    else if(document.getElementById('aws').checked) {
      argSubTotal = 300;
      discount = argSubTotal * 0.05;
      vat = argSubTotal * 0.1;
      total = argSubTotal - discount - vat;
    }
    else if(document.getElementById('cloud9').checked) {
      argSubTotal = 200;
      discount = argSubTotal * 0.05;
      vat = argSubTotal * 0.1;
      total = argSubTotal - discount - vat;
    }
    else if(document.getElementById('gmail').checked) {
      argSubTotal = 400;
      discount = argSubTotal * 0.05;
      vat = argSubTotal * 0.1;
      total = argSubTotal - discount - vat;
    }
    else {
      argSubTotal = 0;
    }
    
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