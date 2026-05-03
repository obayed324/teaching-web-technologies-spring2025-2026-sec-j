function signupAjax() {

    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;
    var email    = document.getElementById('email').value;
    var btn      = document.getElementById('signupBtn');
    var msgBox   = document.getElementById('message');

    // Hide old message
    msgBox.style.display = 'none';
    msgBox.className = 'message';

    // Build JSON object
    var data = {
        username : username,
        password : password,
        email    : email
    };

    var jsonData = JSON.stringify(data);

    // Disable button while loading
    btn.disabled    = true;
    btn.textContent = 'Registering...';

    var xhttp = new XMLHttpRequest();
    xhttp.open('POST', '../controller/signupCheck.php', true);
    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhttp.send('data=' + jsonData);

    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {

            btn.disabled    = false;
            btn.textContent = 'Register';

            var res = JSON.parse(this.responseText);

            msgBox.style.display = 'block';

            if (res.status == true) {
                msgBox.className   = 'message success';
                msgBox.textContent = res.message;
                // Redirect to login after short delay
                setTimeout(function () {
                    window.location.href = 'login.php';
                }, 1000);
            } else {
                msgBox.className   = 'message error';
                msgBox.textContent = res.message;
            }
        }
    };
}