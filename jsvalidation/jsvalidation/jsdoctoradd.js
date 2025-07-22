function isValid(pForm){
   
    const Firstname=pForm.firstname.value;
    const Lastname=pForm.lastname.value;
    const Doctortype=pForm.doctortype.value;
    const Gender=pForm.gender.value;
    const Doctorfee=pForm.doctorfee.value;
    const Date=pForm.date.value;
    const Doctortime=pForm.doctortime.value;
    const Email=pForm.email.value;
    const Phonenumber=pForm.phonenumber.value;
    
    
    const FirstnameErrMsg=document.getElementById("firstnameErr");
    const LastnameErrMsg=document.getElementById("lastnameErr");
    const DoctortypeErrMsg=document.getElementById("doctortypeErr");
    const GenderErrMsg=document.getElementById("genderErr");
    const DoctorfeeErrMsg=document.getElementById("doctorfeeErr");
    const DateErrMsg=document.getElementById("dateErr");
    const DoctortimeErrMsg=document.getElementById("doctortimeErr");
    const EmailErrMsg=document.getElementById("emailErr");
    const PhonenumberErrMsg=document.getElementById("phonenumberErr");
    

    FirstnameErrMsg.innerHtml="";
    LastnameErrMsg.innerHtml="";
    DoctortypeErrMsg.innerHtml="";
    GenderErrMsg.innerHtml="";
    DoctorfeeErrMsg.innerHtml="";
    DateErrMsg.innerHtml="";
    DoctortimeErrMsg.innerHtml="";
    EmailErrMsg.innerHtml="";
    PhonenumberErrMsg.innerHtml="";
    
    
    let flag=true;
    if(Firstname=== ""){
        FirstnameErrMsg.innerHTML="J Please fill up the First Name";
        flag=false;
    }
    if(Lastname=== ""){
        LastnameErrMsg.innerHTML="J Please fill up the Last Name";
        flag=false;
    }
    if(Doctortype=== ""){
        DoctortypeErrMsg.innerHTML="J Please fill up the Doctor Type";
        flag=false;
    }
    if(Gender=== ""){
        GenderErrMsg.innerHTML="J Please fill up the Gender";
        flag=false;
    }
    if(Doctorfee=== ""){
        DoctorfeeErrMsg.innerHTML="J Please fill up the Doctor Fee";
        flag=false;
    }
    if(Date=== ""){
        DateErrMsg.innerHTML="J Please fill up the Date";
        flag=false;
    }
    if(Doctortime=== ""){
        DoctortimeErrMsg.innerHTML="J Please fill up the Doctor Time";
        flag=false;
    }
    if(Email=== ""){
        EmailErrMsg.innerHTML="J Please fill up the Email";
        flag=false;
    }
    if(Phonenumber=== ""){
        PhonenumberErrMsg.innerHTML="J Please fill up the Phone Number";
        flag=false;
    }
    return flag;

}