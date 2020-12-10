$('#qrReg').on('submit', function(e) {
    
    e.preventDefault();

    var username = $("p_name").val();
    var fname = $("p_address").val();
    var lname = $("#p_number").val();
    var email = $("p_mail").val();
 
    $.ajax({
       url:'qr_reg.php',
       type:'post',
       data:{username:username,fname:fname,lname:lname,email:email},
       success:function(response){
          location.reload(); 
       }
    });
});

