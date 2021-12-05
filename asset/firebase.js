const firebaseConfig = {
    apiKey: "AIzaSyBphi0YaFKtMxrNi8owYJL_bpcMszkIIN8",
    authDomain: "imperioustours-a5e00.firebaseapp.com",
    projectId: "imperioustours-a5e00",
    storageBucket: "imperioustours-a5e00.appspot.com",
    messagingSenderId: "55255626054",
    appId: "1:55255626054:web:a8ff1d66783cc42d787547",
    measurementId: "G-59BM4NFJ0K"
  };


  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();

   window.onload=function(){
    render();
 }

  function render(){
   
    window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier(
      "recaptcha-container",
    {
      size: "invisible",
      callback: function(response) {
        submitPhoneNumberAuth();
      }
    }
      );
    recaptchaVerifier.render();
  }


       //check phone login

       $(".loginForm").on("submit",function(e){
    
              phone=$("#loginPhone").val().toString();
          if(isNaN(phone)){
               $(this).find("#msg").html("<div class='alert alert-success' role='alert'>Invalid Mobile</div>");
          }else{

              $("#loginBtn").attr('disabled',true);
              $("#loginBtn").html("Loading...");

                 $.ajax({  
                   type:"POST",  
                   url:"register_login",  
                   data:"mobile="+phone+"&type=checkMobile",
                   success:function(result){
                      
                      msg=jQuery.parseJSON(result);

                     if(msg.status=="success"){
                        $("#loginBtn").attr('disabled',false);
                        $("#loginBtn").html("Sign In");
                        $(".loginVerify").css("display","flex");
                        $("#mainLoginForm").hide();
                        //send otp here
                        cverify=window.recaptchaVerifier;

                        firebase.auth().signInWithPhoneNumber("+91"+phone,cverify).then(function(response){
                          window.confirmationResult = response;
                          $("#msg").html("<div class='alert alert-success' role='alert'>Enter OTP sent to "+phone+"</div>");
                          
                        }).catch(function(error){
                            
                        })
                      
                     }
                     if(msg.status=="fail"){
                        $("#msg").html("<div class='alert alert-danger' role='alert'>"+msg.msg+"</div>");
                        $("#loginBtn").attr('disabled',false);
                        $("#loginBtn").html("Sign In");
                     }
                     
                   }
                   
                  });

          }

          

         e.preventDefault();

       });
// ---------------------
 

  $("#signUpForm").on("submit",function(e){

    e.preventDefault();
     $("#signbtn").attr('disabled',true);
     $("#signbtn").html("Loading...");

    $("#msg").html(" ");

    var formdata = $("#signUpForm").serializeArray();
    var data = {};
    $(formdata ).each(function(index, obj){
        data[obj.name] = obj.value;
    });

   let name=data.signUpName;
    let mob=data.signUpMob;
    let add=data.signUpAdd;
    let email=data.signUpEmail;
         
           $.ajax({  
                   type:"POST",  
                   url:"register_login",  
                   data:"mobile="+mob+"&email="+email+"&type=checkMbEmail",
                   success:function(result){

                      msg=jQuery.parseJSON(result);

                     if(msg.status=="fail"){

                       $("#msg").html("<div class='alert alert-danger' role='alert'>"+msg.msg+"</div>");
                        $("#signbtn").attr('disabled',false);
                        $("#signbtn").html("Sign Up");
                      
                     }
                     if(msg.status=="success"){
                        $("#signbtn").attr('disabled',false);
                        $("#signbtn").html("Sign Up");
                        $("#mainSignUpForm").hide();
                        $("#signbtn").hide();
                        $("#OTP").show();
                        //send otp here
                        cverify=window.recaptchaVerifier;

                        firebase.auth().signInWithPhoneNumber("+91"+mob,cverify).then(function(response){
                          window.confirmationResult = response;
                          $("#msg").html("<div class='alert alert-success' role='alert'>Enter OTP sent to "+mob+"</div>");
                          
                        }).catch(function(error){
                            
                        })

                       
                     }
                     
                   }
                   
                  });
         
  });

function signUpvalidation(){
var formdata = $("#signUpForm").serializeArray();
var data = {};
$(formdata ).each(function(index, obj){
    data[obj.name] = obj.value;
});

 
   let name=data.signUpName;
    let mob=data.signUpMob;
    let add=data.signUpAdd;


  if(isNaN(mob)){
      $("#msg").html("<div class='alert alert-danger' role='alert'>Invalid Mobile</div>");
      return false;
      
  }
  if(name.length<3){
     $("#msg").html("<div class='alert alert-danger' role='alert'>Name is too short!</div>");
      return false;
  }
  if(name.length>15){
     $("#msg").html("<div class='alert alert-danger' role='alert'>Name is too long!</div>");
      return false;
  }
  return true;

}


//Verify signup OTP
$("#verifybtn").on("click",function(e){


    var formdata = $("#signUpForm").serializeArray();
    var data = {};
    $(formdata ).each(function(index, obj){
        data[obj.name] = obj.value;
    });

 
   let name=data.signUpName;
    let mob=data.signUpMob;
    let add=data.signUpAdd;

  $("#verifybtn").attr("disabled",true);
  $("#verifybtn").html("Loading..");
  otp=$("#signUpOTP").val();

  confirmationResult.confirm(otp).then(function(response){
      
         
           $.ajax({  
                   type:"POST",  
                   url:"register_login",  
                   data:"name="+name+"&mobile="+mob+"&add="+add+"&type=signUp",
                   success:function(result){
                
                      msg=jQuery.parseJSON(result);

                     if(msg.status=="success"){

                       $("#msg").html("<div class='alert alert-success' role='alert'>"+msg.msg+"</div>");
                       window.location.href="http://imperioustours.com/";
                        $("#signbtn").attr('disabled',false);
                        $("#signbtn").html("Sign Up");
                      
                     }
                     if(msg.status=="fail"){


                       $("#msg").html("<div class='alert alert-danger' role='alert'>"+msg.msg+"</div>");
                        $("#signbtn").attr('disabled',false);
                        $("#signbtn").html("Sign Up");
                     }
                     
                     
                   }
                   
          });
         
  }).catch(function(error){
    $("#msg").html("<div class='alert alert-danger' role='alert'>Invalid OTP</div>");
  })
  e.preventDefault();

});



// verify login otp
$("#verifyLoginOtp").on("click",function(e){

  $("#verifyLoginOtp").attr("disabled",true);
  $("#verifyLoginOtp").html("Loading..");
  phone=$("#loginPhone").val();
  otp=$("#logotp").val();

  confirmationResult.confirm(otp).then(function(response){
      
         
           $.ajax({  
                   type:"POST",  
                   url:"register_login",  
                   data:"mobile="+phone+"&type=login",
                   success:function(result){
                
                      msg=jQuery.parseJSON(result);

                     if(msg.status=="success"){
                        window.location.href="http://imperioustours.com/";
                        $("#signbtn").attr('disabled',false);
                        $("#signbtn").html("Sign Up");
                      
                     }
                     if(msg.status=="fail"){

                       $("#msg").html("<div class='alert alert-danger' role='alert'>"+msg.msg+"</div>");
                        $("#signbtn").attr('disabled',false);
                        $("#signbtn").html("Sign Up");
                     }
                     
                     
                   }
                   
          });
         
  }).catch(function(error){
    $("#msg").html("<div class='alert alert-danger' role='alert'>Invalid OTP</div>");
    $("#signbtn").attr('disabled',false);
    $("#signbtn").html("Sign Up");

  })
  e.preventDefault();

});




       $("#adminloginForm").on("submit",function(e){
     
            $("#msg").html("");
              adminUname=$("#adminUname").val();
              adminPass=$("#adminPass").val();
     
              $("#loginBtn").attr('disabled',true);
              $("#loginBtn").html("Loading...");

                 $.ajax({  
                   type:"POST",  
                   url:"register_login",  
                   data:"uname="+adminUname+"&pass="+adminPass+"&type=adminlogin",
                   success:function(result){
                      msg=jQuery.parseJSON(result);

                     if(msg.status=="success"){
                        $("#loginBtn").attr('disabled',false);
                        $("#loginBtn").html("Login");
                        window.location.href="admin_panel/index";
                      
                     }
                     if(msg.status=="fail"){
                        $("#msg").html("<div class='alert alert-danger' role='alert'>"+msg.msg+"</div>");
                        $("#loginBtn").attr('disabled',false);
                        $("#loginBtn").html("Login");
                     }
                     
                   }
                   
                  });

          

          

         e.preventDefault();

       });
// ---------------------
 
function gmailLogIn(userInfo){
    userProfile=userInfo.getBasicProfile();
           $.ajax({  
                   type:"POST",  
                   url:"register_login",  
                   data:"name="+userProfile.getName()+"&email="+userProfile.getEmail()+"&profile="+userProfile.getImageUrl()+"&type=regUsingGmail",
                   success:function(result){
                      msg=jQuery.parseJSON(result);

                     if(msg.status=="success"){
                        window.location.href="http://imperioustours.com/";
                    
                     }
                     if(msg.status=="fail"){

                       $("#msg").html("<div class='alert alert-danger' role='alert'>"+msg.msg+"</div>");
                        
                     }
                     
                     
                   }
                   
          });
}