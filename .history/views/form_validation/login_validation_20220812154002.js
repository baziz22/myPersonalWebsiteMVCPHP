let check_username = document.getElementById("invalidFeedback")
document.getElementById("login-username").addEventListener("keyup", checkUsername);
    //Function for checking if username already exists in the database.
    function checkUsername(event) {
        //console.log("I've been clicked by you!!!!");
        event.preventDefault();
        let getName = document.getElementById("login-username").value;
        //console.log(getName);
        let params = 'username='+getName;
        console.log(params);
        let xhr = new XMLHttpRequest();
        //console.log(xhr);
        
        
        xhr.onload = function () {
            console.log(this.responseText);
            check_username.innerHTML = this.responseText;
        };
        xhr.open('GET', 'login/check_username_run', true);
        xhr.send(params);xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        // xhr.send("name=Bader&message=Welcome!");
    }