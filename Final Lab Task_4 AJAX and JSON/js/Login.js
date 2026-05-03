function loginAjax() {

    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;
    var btn      = document.getElementById('loginBtn');
    var msgBox   = document.getElementById('message');

    // Hide old message
    msgBox.style.display = 'none';
    msgBox.className = 'message';

    // Build JSON object
    var data = {
        username : username,
        password : password
    };

    var jsonData = JSON.stringify(data);

    // Disable button while loading
    btn.disabled    = true;
    btn.textContent = 'Signing in...';

    var xhttp = new XMLHttpRequest();
    xhttp.open('POST', '../controller/loginCheck.php', true);
    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhttp.send('data=' + jsonData);

    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {

            btn.disabled    = false;
            btn.textContent = 'Login';

            var res = JSON.parse(this.responseText);

            msgBox.style.display = 'block';

            if (res.status == true) {
                msgBox.className     = 'message success';
                msgBox.textContent   = res.message;
                // Redirect to home after short delay
                setTimeout(function () {
                    window.location.href = 'home.php';
                }, 800);
            } else {
                msgBox.className   = 'message error';
                msgBox.textContent = res.message;
            }
        }
    };
}