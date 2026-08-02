
function validateForm() {
    if (document.login.username.value.trim() === "") {
        alert("Please enter username");
        document.login.username.focus();
        return false;
    }
    if (document.login.password.value.trim() === "") {
        alert("Please enter password");
        document.login.password.focus();
        return false;
    }

    return true;
}
function submform() {
    var form = document.client;
    var requiredFields = ["date", "client_id", "name", "surname", "address", "contact_number", "num_of_lessons", "start_date", "start_time", "lesson_duration", "instructor_id"];

    for (var i = 0; i < requiredFields.length; i++) {
        if (form[requiredFields[i]].value.trim() === "") {
            alert("All fields must be completed!");
            form[requiredFields[i]].focus();
            return false;
        }
    }

    if (!/^[0-9]{13}$/.test(form.client_id.value.trim())) {
        alert("Identity number must be exactly 13 digits.");
        form.client_id.focus();
        return false;
    }

    if (!/^[0-9]{10}$/.test(form.contact_number.value.trim())) {
        alert("Contact number must be exactly 10 digits.");
        form.contact_number.focus();
        return false;
    }

    if (!document.querySelector('input[name="gender"]:checked')) {
        alert("Please select a gender.");
        return false;
    }

    if (!document.querySelector('input[name="license_code"]:checked')) {
        alert("Please select a license code.");
        return false;
    }

    return true;
}

function getClient(str) {
    if (str === "") {
        document.getElementById('selected_client').innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function () {
            if (this.readyState === 4 && this.status === 200) {
                document.getElementById("selected_client").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "getAttendance.php?q=" + encodeURIComponent(str), true);
        xmlhttp.send();
    }

}
function getInstructor(str) {
    if (str === "") {
        document.getElementById('selected_instructor').style.display = "none";
        document.getElementById('selected_instructor').innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function () {
            if (this.readyState === 4 && this.status === 200) {
                document.getElementById("selected_instructor").innerHTML = this.responseText;
                document.getElementById("selected_instructor").style.display = "block";
            }
        };
        xmlhttp.open("GET", "getLesson.php?q=" + encodeURIComponent(str), true);
        xmlhttp.send();
    }

}
