function checkName(n) {
    const errorMsg = n.nextElementSibling;
    console.log(errorMsg);
    if (n.value.length < 3 || n.value.split(" ").length > 1) {
        userName.className = 'red';
        errorMsg.className = 'show-error';
        return false;
    } else {
        userName.className = 'green';
        errorMsg.className = 'hide-error';
        return true;
    }
}

function checkEmail(email) {
    const errorMsg = email.nextElementSibling;
    const regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if (!regex.test(email.value)) {
        email.className = 'red';
        errorMsg.className = 'show-error';
        return false;
    } else {
        email.className = 'green';
        errorMsg.className = 'hide-error';
        return true;
    }
}

function checkPassword(pw) {
    const errorMsg = pw.nextElementSibling;
    const regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[@$&]){8,30}/;
    if (!regex.test(pw.value)) {
        pw.className = 'red';
        errorMsg.className = 'show-error';
        return false;
    } else {
        pw.className = 'green';
        errorMsg.className = 'hide-error';
        return true;
    }
}

function recheckPassword(pwCheck) {
    const errorMsg = pwCheck.nextElementSibling;
    const originalPw = pw.value;
    if (pwCheck.value !== originalPw || originalPw == '') {
        pwCheck.className = 'red';
        errorMsg.className = 'show-error';
        return false;
    } else {
        pwCheck.className = 'green';
        errorMsg.className = 'hide-error';
        return true;
    }
}

function checkAllInput(e) {
    let valid = checkName(userName);
    valid = checkEmail(email) && valid;
    valid = checkPassword(pw) && valid;
    valid = recheckPassword(pwConfirm) && valid;
    if (!valid) {
        // prevent from submitting invalid form
        e.preventDefault();
    } else {
        alert("good form");
    }
}

userName.addEventListener('keyup', () => {
    checkName(userName);
})

email.addEventListener('keyup', () => {
    checkEmail(email);
})

pw.addEventListener('keyup', () => {
    checkPassword(pw);
})

pwConfirm.addEventListener('keyup', () => {
    recheckPassword(pwConfirm);
})

signUpForm.addEventListener("submit", checkAllInput);
