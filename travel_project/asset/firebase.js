






const firebaseConfig = {
    apiKey: "AIzaSyAQnzPtKPwi5JCg527qO0kN5-FoWk-YBHw",
    authDomain: "travello-6867b.firebaseapp.com",
    projectId: "travello-6867b",
    storageBucket: "travello-6867b.appspot.com",
    messagingSenderId: "552226138946",
    appId: "1:552226138946:web:6a6da1a677ce51c821f6db",
    measurementId: "G-5NJM3VEJST"
  };

  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);

   window.onload=function(){
    render();
 }

  function render(){
   
    window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('recaptcha-container');
    recaptchaVerifier.render();
  }

       //check email login

       $(".loginForm").on("submit",function(e){
      
          var values = $(this).serialize();
          console.log(values);
          phone=values.loginPhone;
          pass=values.password;

          if(isNaN(values.loginPhone)){
               $(this).find("#msg").html("<div class='alert alert-success' role='alert'>Invalid Mobile</div>");
          }else{

              $("#loginBtn").attr('disabled',true);
              $("#loginBtn").html("Loading...");

                 $.ajax({  
                   type:"POST",  
                   url:"../templates/register_login.php",  
                   data:"mobile="+phone+"&type=checkMobile",
                   success:function(result){

                      msg=jQuery.parseJSON(result);

                     if(msg.status=="success"){
                       $("#msg").html("<div class='alert alert-success' role='alert'>"+msg.message+"</div>");
                        $("#loginBtn").attr('disabled',false);
                        $("#loginBtn").html("Sign In");
                        //send otp here
                      
                     }
                     if(msg.status=="fail"){
                        $("#msg").html("<div class='alert alert-danger' role='alert'>"+msg.message+"</div>");
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

        console.log(name+mob+add)
         
           $.ajax({  
                   type:"POST",  
                   url:"../templates/register_login.php",  
                   data:"mobile="+mob+"&type=checkMobile",
                   success:function(result){

                      msg=jQuery.parseJSON(result);

                     if(msg.status=="success"){

                       $("#msg").html("<div class='alert alert-danger' role='alert'>Mobile already registered!</div>");
                        $("#signbtn").attr('disabled',false);
                        $("#signbtn").html("Sign Up");
                      
                     }
                     if(msg.status=="fail"){

                        $("#msg").html("<div class='alert alert-success' role='alert'>Enter OTP sent to "+mob+"</div>");
                        $("#signbtn").attr('disabled',false);
                        $("#signbtn").html("Sign Up");
                        $("#mainSignUpForm").hide();
                        $("#signUpOTP").show();
                        //send otp here
                        
                       
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
  return true;

}


//sen email 
function sendingVerifyEmail(){

  $("#signbtn").attr('disabled',true);
      $("#signbtn").html("Loading...");


  firebase.auth().currentUser.sendEmailVerification().then(function(response){
    console.log(response);

     $("#signbtn").attr('disabled',false);
     $("#signbtn").html('Sign Up');
     $("#signUpForm")[0].reset();

     $("#msg").html("<div class='alert alert-success' role='alert'>Thank you for Registration! Verify your Email...then login </div>");

    

  })
  .catch(function(error){
    console.log(error);

     $("#signbtn").attr('disabled',false);
     $("#signbtn").html('Sign Up');
     $("#signUpForm")[0].reset();

     $("#msg").html("<div class='alert alert-success' role='alert'>"+error.message+"</div>");

  })



}






