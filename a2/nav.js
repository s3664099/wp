document.getElementById("search_button").onclick = reveal_search;
document.getElementById("search_button_small").onclick = reveal_search;

document.getElementById("login_button").onclick = reveal_login;
document.getElementById("login_button_small").onclick = reveal_login;

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