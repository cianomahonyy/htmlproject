function calcSub(){
    
    var argSubTotal;
    
    if(document.getElementById('salesforce').checked) {
      argSubTotal = 100;
    }
    else {
      argSubTotal = 300;
    }
    
    calcDisVatTotal(argSubTotal);
}

function calcDisVatTotal(parmSubTotal) {
  
  var subTotal = parmSubTotal;
  var totalPrice = parmSubTotal;
  
  display(subTotal, totalPrice);
  
}

function display(parm1, parm2){
  
  document.getElementById("subtotal").value = parm1;
  document.getElementById("total").value = parm2;
        
  enablebtnProceed();
}


function enablebtnProceed(){
    $('#btnProceed').prop('disabled', false);
}

function disablebtnProceed() {
    $('#btnProceed').prop('disabled', true);
}