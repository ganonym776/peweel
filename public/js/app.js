// Register
var regis_currentTab = 0; // Current tab is set to be the first tab (0)
regis_showTab(regis_currentTab); // Display the current tab

function regis_showTab(n) {
    // This function will display the specified tab of the form ...
    var x = document.querySelectorAll(".register .regis_tab");
    x[n].style.display = "block";
    // ... and fix the Previous/Next buttons:
    if (n == 0) {
        document.querySelector(".register #prevBtn").style.display = "none";
    } else {
        document.querySelector(".register #prevBtn").style.display = "block";
    }
    if (n == (x.length-1)) {
        console.log(n);
        document.querySelector(".register #nextBtn").innerHTML = "Submit";
    }else if(n === x.length){
        document.querySelector(".register #nextBtn").type = "submit";
    }else {
        document.querySelector(".register #nextBtn").innerHTML = "Next";
    }
    // ... and run a function that displays the correct step indicator:
    regis_fixStepIndicator(n)
}

function regis_nextPrev(n) {
    // This function will figure out which tab to display
    var x = document.querySelectorAll(".register .regis_tab");
    // Exit the function if any field in the current tab is invalid:
    if (n === 3 && !regis_validateForm()) return false;
    // Hide the current tab:
    x[regis_currentTab].style.display = "none";
    // Increase or decrease the current tab by 1:
    regis_currentTab = regis_currentTab + n;
    // if you have reached the end of the form... :
    if (regis_currentTab >= x.length) {
        //...the form gets submitted:
        document.querySelector(".register #regForm").submit();
        return false;
    }
    // Otherwise, display the correct tab:
    regis_showTab(regis_currentTab);
}

function regis_validateForm() {
    // This function deals with validation of the form fields
    var x, y, i, valid = true;
    x = document.querySelectorAll(".register .regis_tab");
    y = x[regis_currentTab].getElementsByTagName("input");
    // A loop that checks every input field in the current tab:
    for (i = 0; i < y.length; i++) {
        // If a field is empty...
        if (y[i].value == "") {
            // add an "invalid" class to the field:
            y[i].className += " invalid";
            // and set the current valid status to false:
            valid = false;
        }
    }
    // If the valid status is true, mark the step as finished and valid:
    if (valid) {
        document.querySelectorAll(".step")[regis_currentTab].className += " finish";
    }
    return valid; // return the valid status
}

function regis_fixStepIndicator(n) {
    // This function removes the "active" class of all steps...
    var i, x = document.querySelectorAll(".step");
    for (i = 0; i < x.length; i++) {
        x[i].className = x[i].className.replace(" active", "");
    }
    //... and adds the "active" class to the current step:
    x[n].className += " active";
}