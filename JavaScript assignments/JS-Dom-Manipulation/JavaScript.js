//---------- Dom 1 ---------------
var menuid = document.getElementById("menu");
console.dir(menuid);

//---------- Dom 2 ---------------

var akt = document.getElementsByClassName("active");
for(var i = 0; i < akt.length; i++)
{
    console.dir(akt[i])
}


//---------- Dom 3 ---------------

var ah1 = document.querySelectorAll("h1");

for(var i = 0; i < ah1.length; i++)
{
    console.dir(ah1[i])
}

//---------- Dom 4 ---------------

var ap = document.querySelectorAll("p");

for(var i = 0; i < ap.length; i++)
{
    console.dir(ap[i])
}

//---------- Dom 5 ---------------

var cp = document.querySelectorAll('img');

cp.forEach(cp1 => {
    cp1.setAttribute('alt', 'Billedet er underlagt copyright');
});
console.log("opgave 5")

//---------- Dom 6 ---------------

var ch = document.querySelector('h1').innerHTML = 'overskriften er udskiftet'

console.log("opgave 6")

//---------- Dom 7 ---------------

var ac = document.querySelector("h1");

ac.classList.add("title")

console.log("opgave 7")

//---------- Dom 8 ---------------

var uli = document.querySelectorAll('li');

uli.forEach(element => {
    console.dir(element)
});

//---------- Dom 9 ---------------

var Item = ["Rainbow", "Six", "Siege"];

var listPlace = document.getElementById("playground");

function createList()
{
    var listLength = Item.length;

    if(listLength > 0)
    {
        var myList = document.createElement("ul");
        // myList.className = "list";
        for(var i=0;i<listLength;i++)
        {
            var listItem = document.createElement("li");
            var listValue = document.createTextNode(Item[i]);
            listItem.appendChild(listValue);
            myList.appendChild(listItem);

        }
        listPlace.appendChild(myList);
    }
    else
    {
        var message = document.createTextNode("no R6");
        listPlace.appendChild(message);
    }
}
window.onload = createList;
console.log("opgave 9")

//---------- Dom 10 --------------


    var image1 = document.querySelectorAll('img');
    var img1 = image1[0].src;
    var img2 = image1[1].src;

    image1[0].src = img2;
    image1[1].src = img1;

    console.log("opgave 10")

//---------- Dom 11 --------------


var Dp = document.getElementById("deleteme"); 
Dp.parentNode.removeChild(Dp);


console.log("opgave 11")

//---------- Dom 12 --------------

var demo = document.getElementById("deletemetoo"); 
demo.remove()

console.log("opgave 12")


