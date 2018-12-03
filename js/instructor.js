
function validateForm() {
    if (document.login.username.value === "") {
        alert("Please enter username");
        document.login.username.focus();
        return false;
    }
    if (document.login.password.value === "") {
        alert("Please enter password");
        document.login.password.focus();
        return false;
    }

    return(true);
}
function submform() {
    //all fiels are required
    var result = true;
    var msg = 'All fields must be completed!';
    for (var i = 0; i < document.forms[0].length; ++i) {
        if (document.forms[0][i].value === '') {
            alert(msg);
            document.forms[0][0].focus();
            result = false;
        }
        if (document.client.client_id.value !== '' && document.client.client_id.value.length < 13 ||document.client.client_id.value.length >13) {
            alert("ID number must be 13 numbers long");
            document.forms[0][1].focus();
            result = false;
        }
        if (document.client.contact_number.value !== '' && document.client.contact_number.value.length < 10 ||document.client.contact_number.value.length > 10) {
            alert("Contact number must be 10 numbers long");
            document.forms[0][1].focus();
            result = false;
        }
        return result;
    }
}

function getClient(str){
    if(str ===""){
    document.getElementById('selected_client').innerHtml=str;
    return;
}
  else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState === 4 && this.status === 200) {
                document.getElementById("selected_client").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","getLesson.php?q="+str,true);
        xmlhttp.send();
    }
    
}

