var qrcode=new QRCode(document.getElementById('qrResult'),{
    
});

// This is The Function for Name
function generate(){
var name=document.getElementById('qr');
var Name=name.value;
if(!Name){
    alert("Input Name");
    
    return;
}

// This is The Function for Email
var email=document.getElementById('mail');
var Email=email.value;
if(!Email){
    alert("Input Email");
    return;
}

// This is The Function for Phone Number
var number=document.getElementById('num');
var Num=number.value;
if(!Num){
    alert("Input Phone Number");
    return;
}

// This is The Function for Address
var add=document.getElementById('add');
var Address=add.value;
if(!Address){
    alert("Input Address");
    return;
}

// Code for fetching the value of NAME, EMAIL, PHONE NUMBER, ADDRESS
qrcode.makeCode(`Name: ${Name} \nEmail: ${Email} \nPhone Number: ${Num} \nAddress: ${Address}`);

}