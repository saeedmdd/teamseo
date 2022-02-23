function send_ticket_info(){

    let name = $("#name").val();
    let fname = $("#familyname").val();
    let email = $("#email").val();
    let ticket_title = $("#ticket-titlee").val();
    let ticket_text = $("#ticket-text").val();

        if (name != null ,fname != null ,email != null ,ticket_title != null ,ticket_text != null ) {
            var xhttp = new XMLHttpRequest();
            xhttp.open("POST", `your API`, true);
            xhttp.onreadystatechange = function() {
                if(this.readyState == 4 && this.status==200){
                    $(result).HTML = JSON.parse(this.responseText);
                    if (result['s.th'] == "something") {
                        // before url change back to prev page , it has to show the massage
                        md.showNotification('top','center','تیک شما با موفقیت ثبت شد');
                        
                        window.location.href = "./dashboardr.html";
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