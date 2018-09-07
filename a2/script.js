
//https://www.tek-tips.com/viewthread.cfm?qid=243168 - Login Popup Box

var quantity = 0;
var price = 10;
var quant = 0;
const basePrice=10;
var error = false;
var message = "";

document.getElementById("increase").onclick = add;

function add() {
    getAmount();

    if(error == false)
    {
        quantity ++;
        quant.textContent=quantity;
        updateAmount();
    } else {
        quant.textContent = 0;
        error = false;
    }
}

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
        error = false;
    }

}

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

function getAmount() {
    quant = parseInt(document.getElementById('qty').value);

    if(isNaN(quant))
    {
        message = "Please enter a number";
        showError();

        error = true;
        document.getElementById('qty').value = 0;
    }
}

function checkAmount() {
        if (quantity<0)
        {
            quantity =0;
        }
}

function updateAmount() {
    
    //source: https://stackoverflow.com/questions/14966905/passing-values-from-javascript-to-form
    document.getElementById("qty").value = quantity;
    displayPrice();
    hideError();
}

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

function displayPrice(){
    var total = document.getElementById('priceTotal');
    total.textContent = price*quantity;
}

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

function showError() {
    var prob = document.getElementById('error');
    prob.textContent = message;
    prob.style.visibility = "visible";
}

function hideError() {
    var prob = document.getElementById('error');
    prob.textContent = "";
    prob.style.visibility = "hidden";
}
