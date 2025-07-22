function isValid(pForm){
    
    
    const Firstname=pForm.firstname.value;
    const Lastname=pForm.lastname.value;
    const Email=pForm.email.value;
    const Gender=pForm.gender.value;
    const Phone=pForm.phonenumber.value;
    const Password=pForm.password.value;
    const cPassword=pForm.confirmpassword.value; 

    const FirstnameErrMsg=document.getElementById("firstname");
    const LastnameErrMsg=document.getElementById("lastname");
    const EmailErrMsg=document.getElementById("email");
    const GenderErrMsg=document.getElementById("gender");
    const PhoneErrMsg=document.getElementById("phonenumber");
    const PasswordErrMsg=document.getElementById("password");
    const cPasswordErrMsg=document.getElementById("confirmpassword");
  
 
    
    FirstnameErrMsg.innerHTML="";
    LastnameErrMsg.innerHTML="";
    EmailErrMsg.innerHTML="";
    GenderErrMsg.innerHTML="";
    PhoneErrMsg.innerHTML="";
    PasswordErrMsg.innerHTML="";
    cPasswordErrMsg.innerHTML="";
    
    
    let flag=true;
    
    if(Firstname=== ""){
        FirstnameErrMsg.innerHTML="J Please fill up the Firstname";
        flag=false;
    }
    
    if(Lastname=== ""){
        LastnameErrMsg.innerHTML="J Please fill up the Lastname";
        flag=false;
    }
    
    if(Email=== ""){
        EmailErrMsg.innerHTML="J Please fill up the Email";
        flag=false;
    }
   
    if(Gender=== ""){
        GenderErrMsg.innerHTML="J Please fill up the Gender";
        flag=false;
    }
   
    if(Phone=== ""){
        PhoneErrMsg.innerHTML="J Please fill up the Phone Number";
        flag=false;
    }
    
    if(Password=== ""){
        PasswordErrMsg.innerHTML="J Please fill up the Password";
        flag=false;
    }
    
    if(cPassword=== ""){
        cPasswordErrMsg.innerHTML="J Please fill up the Confirm Password";
        flag=false;
    }
    
  
   
    return flag;

    

}