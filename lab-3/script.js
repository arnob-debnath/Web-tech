console.log("connected");

let registrations = [];

function registerEvent(){

    const name = document.getElementById("name").value.trim();
    const email = document.getElementById("email").value.trim();
    const company = document.getElementById("company").value.trim();
    const attendance = document.querySelector('input[name="attendance"]:checked');

    let isNameValid = false;
    let isEmailValid = false;
    let isAttendanceValid = false;

    if(name.length < 6 || name.length > 100){
        document.getElementById("nameErr").innerHTML =
        "Name must be between 6 and 100 characters.";
    } else {
        document.getElementById("nameErr").innerHTML = "";
        isNameValid = true;
    }

    if(!email.includes("@") || !email.includes(".")){
        document.getElementById("emailErr").innerHTML =
        "Please enter a valid professional email address.";
    } else {
        document.getElementById("emailErr").innerHTML = "";
        isEmailValid = true;
    }

    if(!attendance){
        document.getElementById("attendanceErr").innerHTML =
        "Please select your attendance type.";
    } else {
        document.getElementById("attendanceErr").innerHTML = "";
        isAttendanceValid = true;
    }


    if(isNameValid && isEmailValid && isAttendanceValid){

        let data = {
            name : name,
            email : email,
            company : company,
            attendance : attendance.value
        };

        registrations.push(data);

        updateAnalytics();
    }

    return false;
}



function updateAnalytics(){

    let total = registrations.length;
    let virtual = 0;
    let inperson = 0;

    for(let i=0; i<registrations.length; i++){
        if(registrations[i].attendance == "Virtual"){
            virtual++;
        } else {
            inperson++;
        }
    }

    document.getElementById("totalCount").innerHTML = total;
    document.getElementById("virtualCount").innerHTML = virtual;
    document.getElementById("inpersonCount").innerHTML = inperson;

}


function toggleAnalytics(){

    const panel = document.getElementById("analyticsPanel");
    const btn = document.getElementById("analyticsBtn");

    if(panel.style.display === "none"){
        panel.style.display = "block";
        btn.innerHTML = "Hide Event Analytics";
    } else {
        panel.style.display = "none";
        btn.innerHTML = "Show Event Analytics";
    }

}