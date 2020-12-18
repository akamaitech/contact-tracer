$(function(){
    
    var qrcode=new QRCode(document.getElementById('qrResult'),{
        width:250,
        height:250,
       
    });
    
    // This is The Function for Name
    function generate(){

        var name=document.getElementById('name');
        var Name=name.value;
        if(!Name){
            alert("Input Name");
            
            return;
        }
        // This is The Function for Address
        var add=document.getElementById('mail');
        var Address=add.value;
        if(!Address){
            alert("Input Address");
            return;
        }
        
        
        // This is The Function for Phone Number
        var number=document.getElementById('num');
        var Num=number.value;
        if(!Num){
            alert("Input Phone Number");
            return;
        }
        // This is The Function for Email
        var email=document.getElementById('add');
        var Email=email.value;
        if(!Email){
            alert("Input Email");
            return;
        }
        
        
        // Code for fetching the value of NAME, EMAIL, PHONE NUMBER, ADDRESS
        qrcode.makeCode(`${Name}\n${Email}\n${Num}\n${Address}`);
    }

    $("#qrReg").on('submit', function(e){
        e.preventDefault();
        var Name = $("#name").val();
        var Address = $("#add").val();
        var Mail = $("mail").val();
        var Phone = $("#num").val();

        var postdata ="p_name="+Name;
            postdata+="&p_address="+Address;
            postdata+="&p_mail="+Mail;
            postdata+="&p_number="+Phone;
        
        console.log(base_url);    
        $.ajax({
            url: base_url + '/save/data',
            headers: {'X-Requested-With': 'XMLHttpRequest'},
            type: 'POST',
            dataType: 'json',
            data: postdata,
            beforeSend: function(){
                console.log('Saving data...');
            },
            success: function(data){
                qrcode.makeCode(`${Name}\n${Email}\n${Num}\n${Address}`);
            }
        })
    })
})

