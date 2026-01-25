import './bootstrap';





const password = document.getElementById('reg-password');
const confirmPassword = document.getElementById('reg-password-confirm')
const msg = document.getElementById('msg')
const submitBtn = document.getElementById('submitBtn')

function validatePassword(){
    
    if (!password.value || !confirmPassword.value) {
        
        msg.textContent = "";
        submitBtn.disabled = true;
        return

    }

    if (password.value === confirmPassword.value) {
        
        msg.textContent = "Passwords Matched";
        msg.style.color = 'green';
        submitBtn.disabled = false

    }
    else{

        msg.textContent = "Passwords Do Not Matched";
        msg.style.color = 'red';
        submitBtn.disabled = true;

    }

}

password.addEventListener('input' , validatePassword);
confirmPassword.addEventListener('input' , validatePassword);

console.log("hello world");