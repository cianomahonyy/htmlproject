function validateDetails(){
    
    var pin;
    var name;
    var email;

    var atposition;
    var dotposition;
    
    pin = document.getElementById("user_pin").value;
    name = document.getElementById("name").value;
    email = document.getElementById("email").value;

    atposition = email.indexOf("@");
    dotposition = email.lastIndexOf(".");

    
    if (pin == ""){
        alert("Please Enter Your PIN");
    }
    else if (String(pin).length < 4){
        alert("Please make sure your PIN is accurate");
    }
    else if (name ==""){
        alert("Please Enter Your Name");
    }
    else if (atposition < 1 || dotposition < atposition + 2 || dotposition + 2 > email.length) {
        alert("Please Enter A Valid Email Address");
    }
    else{
        enablebtnPurchase();
    }
    
}

function enablebtnPurchase(){
    $('#btnPurchase').prop('disabled', false);
}

function disablebtnPurchase() {
    $('#btnPurchase').prop('disabled', true);
}