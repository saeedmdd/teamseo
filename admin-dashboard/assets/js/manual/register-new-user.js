function send_new_user_info(){

    let name = $("#name").val();
    let fname = $("#familyname").val();
    let email = $("#email").val();
    let IDnumber = $("#socialIDnumber").val();
    let birth = $("#birthDAte").val();
    let gender = $("#gender").val();

        if (name != null ,fname != null ,email != null ,IDnumber != null ,birth != null ,gender != null ) {
            var xhttp = new XMLHttpRequest();
            xhttp.open("POST", `your API`, true);
            xhttp.onreadystatechange = function() {
                if(this.readyState == 4 && this.status==200){
                    $(result).HTML = JSON.parse(this.responseText);
                    if (result['s.th'] == "something") {
                        // before url change back to prev page , it has to show the new user ID number
                        md.showNotification('top','center','شناسه کاربر شما 000000 میباشد.');
                        
                        window.location.href = "./articles.php";
                    } else {
                        alert("There is an error.");
                    }
                }
            
            }
            xhttp.send();
            
        }else{
            alert("you must fill in the blanks");
            return 0;
        }
    }