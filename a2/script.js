
//https://www.tek-tips.com/viewthread.cfm?qid=243168 - Login Popup Box

var quantity = 0;
var price = 10;
var quant = 0;
const basePrice=10;
var error = false;

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
        quant.textContent=quantity;
        updateAmount();
    } else {
        error = false;
    }
}

function getAmount() {
    quant = parseInt(document.getElementById('qty').value);

    if(isNaN(quant))
    {
        document.getElementById('error').textContent = "Please enter a number";
        error = true;
        quant.textContent = 0;
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
    document.getElementById('error').textContent = "";
}



document.getElementById("soft").onclick = soft;
document.getElementById("hard").onclick = hard;
document.getElementById("audio").onclick = audio;
document.getElementById("graphic").onclick = graphic;

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

