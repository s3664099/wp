
var quantity = 0;
var price = 10;
var quant = 0;
const basePrice=10;
var error = false;
var message = "";

//Function for the button to increase the quantity when pressed
document.getElementById("increase").onclick = add;

function add() {
    getAmount();

    if(error == false)
    {
        quantity ++;
        quant.textContent=quantity;
        updateAmount();
    } else {

        //removed the error state and returns the value to 0
        quant.textContent = 0;
        error = false;
    }
}

//function for the button to decrease the property when pressed
document.getElementById("decrease").onclick = subtract;

function subtract() {
    getAmount();

    if(error == false)
    {
        quantity --;
        checkAmount();
        quant.textContent=quantity;
        updateAmount();

    } else {
        quant.textContent =0;
        error = false;
    }

}

//Fuction to determine whether an input has been made into the box
document.getElementById("qty").onblur = amount;

function amount() {
    getAmount();

    if(error == false)
    {
        quantity = quant;
        checkAmount();
        updateAmount();
    } else {
        error = false;

    }
}

//gets the contents of the box and turns it into a number
function getAmount() {
    quant = parseInt(document.getElementById('qty').value);

    //if it isn't a number, activates the error state
    if(isNaN(quant))
    {
        message = "Please enter a number";
        showError();

        //returns the value of the box to 0
        error = true;
        document.getElementById('qty').value = 0;
    }
}

//checks to see if the amount is less than 0.
//returns the quantity to 0 if that is the case.
function checkAmount() {
        if (quantity<0)
        {
            quantity =0;
        }
}
//update the total cost displayed on the page
function updateAmount() {
    
    document.getElementById("qty").value = quantity;
    displayPrice();
    hideError();
}

//fuction to change the value of the order depending on the
//type that has been ordered
document.getElementById("option").onchange = changeValue;

function changeValue() {
    var yourSelect = document.getElementById("option");
    var value = yourSelect.options[yourSelect.selectedIndex].value;

    switch (value) {
        case "soft":
            soft();
            break;
        case "hard":
            hard();
            break;
        case "audio":
            audio();
            break;
        case "graphic":
            graphic();
            break;
    }

}

function soft(){
    price = basePrice;
    console.log(price);
    displayPrice();
}

function hard() {
    price = basePrice*2;
    displayPrice();
}

function audio() {
    price = basePrice/2;
    displayPrice();
}

function graphic() {
    price = basePrice*4;
    displayPrice();
}

//displays the total price of the order on the page
function displayPrice(){
    var total = document.getElementById('priceTotal');
    total.textContent = price*quantity;
}

//validator for the submit button.
//Will not submit if the value is 0
function checkQuantity() {

    hideError();

    if (quantity == 0)
    {
        message = "You cannot order 0 products";
        showError();
        return false;
    }

    return true;
}

//The function for the error state.
//Activates the error state if called
function showError() {
    var prob = document.getElementById('error');
    prob.textContent = message;
    prob.style.visibility = "visible";
    document.getElementById('order_amount').style.borderColor = "red";
}

//hide the error state if called
function hideError() {
    var prob = document.getElementById('error');
    prob.textContent = "";
    prob.style.visibility = "hidden";
    document.getElementById('order_amount').style.borderColor = "black";
}
