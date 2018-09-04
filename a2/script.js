
//https://www.tek-tips.com/viewthread.cfm?qid=243168 - Login Popup Box

var quantity = 0;
var price = 10;
const basePrice=10;

document.getElementById("search_button").onclick = reveal_search;
document.getElementById("search_button_small").onclick = reveal_search;

document.getElementById("login_button").onclick = reveal_login;
document.getElementById("login_button_small").onclick = reveal_login;

document.getElementById("increase").onclick = add;

function add() {
    var quant = document.getElementById('num');
    quantity ++;
    quant.textContent=quantity;
    
    //source: https://stackoverflow.com/questions/14966905/passing-values-from-javascript-to-form
    document.getElementById("qty").value = quantity;
    displayPrice();
}

document.getElementById("decrease").onclick = subtract;

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

//source: https://www.lifewire.com/show-and-hide-text-3467102

function reveal_search() {
 var item=document.getElementById("search_bar")
 if (item) {
     item.className =
         (item.className=='hidden')?'unhidden':'hidden';
 }
}

function reveal_login() {
 var item=document.getElementById("login_bar")
 if (item) {
     item.className =
         (item.className=='hidden')?'unhidden':'hidden';
 }
}

