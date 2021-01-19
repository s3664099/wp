# Webprogramming Assignments

## Introduction

This is the code for the webpage that formed the three assignments for my first year Webprogramming subject. The first assignment was designed to get the hang of working with HTML, and the second and third assigments involved us building a commerce site. While the suggestion was that we sell T-Shirts, I decided to do books.

[Here is the link to the site](https://dusty-books-281607.ts.r.appspot.com/)

The site was initially set up on the RMIT servers, but since I am no longer a student, my account has been closed. As such, I have put the site up onto my Google Cloud platform. This means that only the finished version of Assignment 3 (with a few additions) is visible. The first assignment (which I could add a link to if I get around to it) is just a page that introduces myself (though I did have to show off by including a link to one of my Youtube videos, which is basically a train going by - nothing fancy).

# The Assignment

The assignment consisted of a number of pages that we had to create using PHP. At the bottom of the site the code has been printed out, which was used for marking purposes. I have kept that since it was a requirement for the assignment, an all of the code is visible here anyway.

1. Homepage
...This is an introduction to the site with a few pictures. The header at the top takes you to other sections of the site, which include a page for browsing products, searching for products, logging in/signing up, going to the shopping cart, and contacting the site owner.

2. Browse
...The data for the books is stored in a text file, which is loaded when the browse button is selected. The user can select one of the books to get more information, and also add the book to the shopping cart. Adding a book to the shopping cart directs the user to the page for the shopping cart. The books are loaded in as objects. If the user attempt to add nothing to the cart, the webpage will respond by saying that this is not permissable.

3. Search
...This opens up a search bar in the header, however this functionality does not work (and I have no plans on expanding it either). The search bar does have a drop down box that allows the user to make specific searches. 

4. Login
...This is the beginnings of a login/signup function. Looking at the code I don't believe I ended up implementing it, and in any event, it won't work since it will call the RMIT server, which no longer exists (or my account at least). Due to the basic nature of this assignment, I won't be adding anything more to it other than this readme file.

5. Cart
...This is the shopping cart and lists all of the items that are in the cart. The user can either empty the cart, or go and place the order. In placing the order the user is redirected to another screen where the order details are requested. Regex is used to verify that the information is valid, and the fields are also checked to make sure that it is correct. If they are correct, then the user to sent to final page which produces an invoice.

6. Contact
...The idea of this tab is to send the user to a page where an email can be sent. This was not implemented namely because, well, the RMIT servers wouldn't let us send emails. Once again, I won't be building upon this.
