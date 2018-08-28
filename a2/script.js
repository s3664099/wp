var quantity = 0;
var price = 10;
const basePrice=10;

function add() {
    var quant = document.getElementById('num');
    quantity ++;
    quant.textContent=quantity;
    
    //source: https://stackoverflow.com/questions/14966905/passing-values-from-javascript-to-form
    document.getElementById("qty").value = quantity;
    displayPrice();
}

function subtract() {
    var quant = document.getElementById('num');
    quantity --;
    if (quantity<0)
        {
            quantity =0;
        }
    
    quant.textContent=quantity;
    //source: https://stackoverflow.com/questions/14966905/passing-values-from-javascript-to-form
    document.getElementById("qty").value = quantity;
    displayPrice();
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


