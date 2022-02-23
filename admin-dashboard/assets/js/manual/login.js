document.querySelector("#login").addEventListener("submit", function(event) {
    event.preventDefault();

    var email = $("#email").val();
    var password = $("#pwd").val();

    if (password.length < 8) {
        alert("Password is wrong.");
        return 0;
    }
    if (email.length > 6 || fullname.includes("@") == false) {
        alert("email is wrong.");
        return 0;
    }else{
        var xhttp = new XMLHttpRequest();
        xhttp.open("GET", `your api`, true);
        xhttp.onreadystatechange = function() {
            if(this.readyState == 4 && this.status==200){
                $(result).HTML = JSON.parse(this.responseText);
                if (result['s.th'] == "something") {
                    window.location.href = "./dashboard.php";
                } else {
                    alert("There is an error.");
                }
            }
        }
        xhttp.send();
    }
})