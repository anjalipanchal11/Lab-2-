//alert("Hi");
window.onload = function() {
    var name = document.getElementById("name");
    var email = document.getElementById("email");
    var mobile = document.getElementById("mobile");
    var thankyou = document.getElementById("thankYou");
    var emailregex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    var formHandle = document.forms[0];
    formHandle.onsubmit = validateForm;
    
    function validateForm() {
        if(name.value === ""){
            nameValue.style.display = "block";
            nameValue.innerHTML = "* Name cannot be blank";
            return false;
        } else if(email.value === "" || !emailregex.test(email.value)){
            emailValue.style.display = "block";
            emailValue.innerHTML = "* Email cannot be blank";
            return false;
        } else if(phone.value === "" || isNaN(phone.value) || phone.value.length !== 10){
            nameValue.style.display = "block";
            nameValue.innerHTML = "* Name cannot be blank";
            return false;
        } else {
            thankyou.style.display = "block";
        }
    }
}