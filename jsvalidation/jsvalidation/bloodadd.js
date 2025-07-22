
function isValid(pForm){
    const Quantity=pForm.quantity.value;

    const QuantityErrMsg=document.getElementById("quantityErr");

    QuantityErrMsg.innerHtml="";

    let flag=true;
    if(Quantity=== ""){
        QuantityErrMsg.innerHTML="J Please fill up the Quantity";
        flag=false;
    }
    return flag;
}