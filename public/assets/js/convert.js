const cmInRadio = document.getElementById("cmInRadio");
const cmInResult = document.getElementById("cmInResult");
const cmInUnit = document.getElementById("cmInUnit");
const cmInValue = document.getElementById("cmInValue");

function cmInChecked() {
    if(cmInRadio.checked) {
        cmInUnit.innerText = "in";
        return "in"
    } else {
        cmInUnit.innerText = "cm";
        return "cm"
    }
}

cmInChecked();
cmInResult.innerText = "0.00";
cmInValue.value = 0;


function convertCmIn() {
    if(cmInChecked() == "in") {
        cmInResult.innerText = (parseFloat(cmInValue.value) * 0.393700787).toFixed(2);
    } else {
        cmInResult.innerText = (parseFloat(cmInValue.value) / 0.393700787).toFixed(2);
    }
}
