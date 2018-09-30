var hidden = true;

document.getElementById("search_button").onclick = reveal_search;
document.getElementById("search_button_small").onclick = reveal_search;
document.getElementById("login_button").onclick = reveal_login;
document.getElementById("login_button_small").onclick = reveal_login;

//checks to see if the search bar is open
if(typeof(Storage)!== 'undefined') {
	hidden = localStorage.getItem('hidden');
	if (hidden == 'false') {

		//if it is, it opens the search bar
		var item = document.getElementById('search_bar');
		item.className = 'unhidden';
	}

	search = localStorage.getItem('search');
	if (search =='false') {
		var item = document.getElementById('login_bar');
		item.className = 'unhidden';
	}
}

//fuction to show and hide the search bar if the search option is selected
//source: https://www.lifewire.com/show-and-hide-text-3467102

function reveal_search() {
 var item=document.getElementById("search_bar");
 if (item.className == 'hidden') {
     item.className = 'unhidden';

     //stores the fact that the search bar is open in the local storage
     localStorage.setItem('hidden','false');
 } else {

 	//closes the search bar and clears the local storage
 	item.className = 'hidden';
 	localStorage.setItem('hidden','true');
 }

 }
function reveal_login() {
 var item=document.getElementById("login_bar")
 if (item.className =='hidden') {
     item.className = 'unhidden';

     localStorage.setItem('search','false');
 } else {
 	item.className = 'hidden';
 	localStorage.setItem('search','true');
 }
}