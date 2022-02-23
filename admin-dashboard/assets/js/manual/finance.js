function send_finance_info(){

    let package = $("#package").val();
    let monthING = $("#monthING").val();
    let personINT = $("#personINT").val();
        if (package != null ,monthING != null ,personINT != null) {
            var xhttp = new XMLHttpRequest();
            xhttp.open("POST", `your API`, true);
            xhttp.onreadystatechange = function() {
                if(this.readyState == 4 && this.status==200){
                    $(result).HTML = JSON.parse(this.responseText);
                    if (result['s.th'] == "something") {
                        // before url change back to prev page , it has to show the new user ID number
                        md.showNotification('top','center','شناسه کاربر شما 000000 میباشد.');
                        
                        window.location.href = "./finance.html";
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