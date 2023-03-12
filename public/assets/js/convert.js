const cmInRadio = document.getElementById("cmInRadio");
const inCmRadio = document.getElementById("inCmRadio");
const mFtRadio = document.getElementById("mFtRadio");
const ftMRadio = document.getElementById("ftMRadio");
const kmNmRadio = document.getElementById("kmNmRadio");
const nmKmRadio = document.getElementById("nmKmRadio");

const kgLbsRadio = document.getElementById("kgLbsRadio");
const lbsKgRadio = document.getElementById("lbsKgRadio");

const distanceResult = document.getElementById("distanceResult");
const distanceUnit = document.getElementById("distanceUnit");
const distanceValue = document.getElementById("distanceValue");
const distanceFrom = document.getElementById("distanceFrom");

const weightResult = document.getElementById("weightResult");
const weightUnit = document.getElementById("weightUnit");
const weightValue = document.getElementById("weightValue");
const weightFrom = document.getElementById("weightFrom");



function distanceUnitChecked() {
    if(cmInRadio.checked) {
        distanceUnit.innerText = "in";
        distanceFrom.innerText = "cm";
        return "in"
    } else if(inCmRadio.checked) {
        distanceUnit.innerText = "cm";
        distanceFrom.innerText = "in";
        return "cm"
    } else if(mFtRadio.checked) {
        distanceUnit.innerText = "ft";
        distanceFrom.innerText = "m";
        return "ft"
    } else if(ftMRadio.checked) {
        distanceUnit.innerText = "m";
        distanceFrom.innerText = "ft";
        return "m"
    } else if(kmNmRadio.checked) {
        distanceUnit.innerText = "nm";
        distanceFrom.innerText = "km";
        return "nm"
    } else if(nmKmRadio.checked) {
        distanceUnit.innerText = "km";
        distanceFrom.innerText = "nm";
        return "km"
    }
}

distanceUnitChecked();
distanceResult.innerText = "0.00";
distanceValue.value = 0;


function convertCmIn() {
    if(distanceUnitChecked() == "in") {
        distanceResult.innerText = (parseFloat(distanceValue.value) * 0.393700787).toFixed(2);
    } else {
        distanceResult.innerText = (parseFloat(distanceValue.value) / 0.393700787).toFixed(2);
    }
}

function convertMFt() {
    if(distanceUnitChecked() == "ft") {
        distanceResult.innerText = (parseFloat(distanceValue.value) * 3.280839895).toFixed(2);
    } else {
        distanceResult.innerText = (parseFloat(distanceValue.value) / 3.280839895).toFixed(2);
    }
}

function convertKmNm() {
    if(distanceUnitChecked() == "nm") {
        distanceResult.innerText = (parseFloat(distanceValue.value) / 1.852).toFixed(2);
    } else {
        distanceResult.innerText = (parseFloat(distanceValue.value) * 1.852).toFixed(2);
    }
}

function convertDistance() {
    if(cmInRadio.checked || inCmRadio.checked) {
        convertCmIn();
    } else if(mFtRadio.checked || ftMRadio.checked) {
        convertMFt();
    } else if(kmNmRadio.checked || nmKmRadio.checked) {
        convertKmNm();
    }
}


function weightUnitChecked() {
    if(kgLbsRadio.checked) {
        weightUnit.innerText = "Kg";
        weightFrom.innerText = "lbs";
        return "lbs"
    } else if(lbsKgRadio.checked) {
        weightUnit.innerText = "lbs";
        weightFrom.innerText = "Kg";
        return "Kg"
    }
}

weightUnitChecked();
weightResult.innerText = "0.00";
weightValue.value = 0;

function convertKgLbs() {
    weightUnitChecked();
    if(weightUnitChecked() == "lbs") {
        weightResult.innerText = (parseFloat(weightValue.value) / 2.2046226218).toFixed(2);
    } else {
        weightResult.innerText = (parseFloat(weightValue.value) * 2.2046226218).toFixed(2);
    }
}