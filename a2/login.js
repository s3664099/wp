var message = "";

//validator to confirm that the contents of either text box is empty
//will not submit, and create an error state if they are empty and
//the user attempts to submit.
function checkInput() {

    hideError();

    var nameVal = document.getElementById('username').value;
    var passVal = document.getElementById('password').value;

    if (!nameVal.match(/\S/))
    {
        message = "Name cannot be blank";
        showError();
        return false;
    } else if (!passVal.match(/\S/))
    {
    	message = "Password cannot be blank";
    	showError();
    	return false
    }

    return true;
}

//Reveals the error state
function showError() {
    var prob = document.getElementById('error');
    prob.textContent = message;
    prob.style.visibility = "visible";

}

//hides the error state
function hideError() {
    var prob = document.getElementById('error');
    prob.textContent = "";
    prob.style.visibility = "hidden";
}
