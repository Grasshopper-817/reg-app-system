var aTransferSchool = document.getElementById("ATransferSchool");
var bTransferSchool = document.getElementById("BTransferSchool");

var aTransfer = document.getElementsByName("isATransfer");
var bTransfer = document.getElementsByName("isBTransfer");

function updateATransfer() {
    if (aTransfer[0].checked && aTransfer[0].value === "yes") {
        aTransferSchool.style.display = "block";
    } else {
        aTransferSchool.style.display = "none";
    }
}
for (var i = 0; i < aTransfer.length; i++) {
    aTransfer[i].addEventListener("change", updateATransfer);
}

function updateBTransfer() {
    if (bTransfer[0].checked && bTransfer[0].value === "yes") {
        bTransferSchool.style.display = "block";
    } else {
        bTransferSchool.style.display = "none";
    }
}
for (var i = 0; i < bTransfer.length; i++) {
    bTransfer[i].addEventListener("change", updateBTransfer);
}

var stats = document.getElementById("inputStudentStatus");
var graduate = document.getElementById("input-gradYear");
var undergrad = document.getElementById("input-acadYear");
if (stats.value === "alumni") {
    graduate.style.display = "block";
    undergrad.style.display = "none";
} else {
    graduate.style.display = "none";
    undergrad.style.display = "block";
}

function updateForm() {
    if (stats.value === "alumni") {
        graduate.style.display = "block";
        undergrad.style.display = "none";
    } else {
        graduate.style.display = "none";
        undergrad.style.display = "block";
    }
}
stats.addEventListener("change", updateForm);
