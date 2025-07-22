function isValid(pForm) {
    const  Emailphone=pForm.emailphone.value;
    const  Password=pForm.password.value;

    const EmailphoneErrMsg=document.getElementById("emailphone");
    const PasswordErrMsg=document.getElementById("password");

    EmailphoneErrMsg.innerHTML="";
    PasswordErrMsg.innerHTML="";

    let flag=true;
    if(Emailphone=== ""){
        EmailphoneErrMsg.innerHTML="J Please fill up the Email or Phone Number";
        flag=false;
    }
    if(Password=== ""){
        PasswordErrMsg.innerHTML="J Please fill up the Password";
        flag=false;
    }
    return flag;
   
}