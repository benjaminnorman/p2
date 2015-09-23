#Project 1

###Overview
The purpose of Project 2 is to create a basic password generator that can do things such as load a file of text, add special
characters and numbers on demand, select a certain number of words to determine the length of the password, etc.

This objective seems quite simple but when you begin to consider all of the aspects that go along with password security and good security practices in general
things begin to become a bit hazy. For the sake of this project I did not consider, for example, the cryptographic strength of my password generating algorithm
or the level of randomness that the built in random number generators truly provide.

My page contains a simple PHP form in which users enter the number of words with which they want the password to consist of, and can select options such as capitalization and including additional characters.
The user then presses the 'Generate Password' button and they are displayed a plain white background page with the output of their password. It would have been nice to make the display of the password a bit more visually appealing
or to just include it in the main page, but I did not implement that for the sake of working on the back end of this project.

###Live URL
The live Project one can be found here: 
[Live Project 2](p2.benorman.com)

The video presentation for this project can be found here:
[Project 2 Vide](https://youtu.be/e1T6Woy3k3s)

###Other Details
The word list came from a list of words I found online with approximately 52,000 words in the list. I use a built in php function, file(), to read this file.
This function handily puts each word from the list into each entry in an array, which randomly pull words out of using a randomly generated number as the getter index.

I utilized a nice radio button variation in which you can include a title in the button itself, and applied it to the capitalization selection.
This way, the user cannot select more than one capitalization method and therefore cause an error or accidentally override their own choices.

I implemented input sanitation on the number of words that can be entered, but ran out of time to fully implement functional input sanitation for the other two textboxes.
I realize that this is highly important due to things like SQL injections and if this were a fully deployed solution then it would be an absolute requirement.


###Plugins and Libraries
The only outside libraries used for this page were the ones included in Bootstrap.
Rather than include the files in my repository I have the page just loading the files from the CDN that Bootstrap is hosted on.

I used some of the basic code templates for some page elements but heavily modified most of it.
