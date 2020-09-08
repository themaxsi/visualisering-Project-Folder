//---------- Array assignment 1 --------

var country = new Array;
var country = ["Danmark", "Sverige", "Norge", "Finland"];


console.log(country);

//---------- Array assignment 2 --------

var num = new Array;
var num = [5, 9, 42, 64, 79];

console.log(num);

//---------- Array assignment 3 --------
var mul = new Array;
var mul = ["Christian", 45, [1,2,3], "Dorte"];

console.log(mul[1] , mul[2][1]);

//---------- Array assignment 4 --------

var col = new Array;
var col = ["Red", "Green", "Blue"];

var addItem = col.push("Yellow");

console.log(col)

//---------- Array assignment 5 --------

var Fru = new Array;
var Fru = ["Apples", "Oranges", "Bananas"];

var addItem = Fru.unshift("Strawberries");

console.log(Fru)

//---------- Array assignment 6 --------

var Fru2 = new Array;
var Fru2 = ["Apples", "Oranges", "Bananas"];

var addItem = Fru2.pop();

console.log(Fru2)

//---------- Array assignment 7 --------

var Fru3 = new Array;
var Fru3 = ["Apples", "Oranges", "Bananas"];

var addItem = Fru3.shift();

console.log(Fru3)

//---------- Array assignment 8 --------

var num1 = new Array;
var num1 = [1, 2, 3, 4, 5];

num1.length = 0;

console.log(num1)

//---------- Array assignment 9 --------


var car = new Array;
var car = ["Toyota", "Ford", "Mercedes", "Audi"];

console.log(car[3])

//---------- Array assignment 10 -------

var pep = new Array;
var pep = ["Kasper Schmerichel", "Christian Eriksen", "Lasse Schone", "William Kvist", "Simon Kjær", "Nicklas Bendtner"];

pep.forEach(element => {
    console.log(element)
});

//---------- Array assignment 11 -------

var info = {fn: "John", ln: "Doe", adr: "Fosse way 1", City: "London", Pho: "4532 2341 7392"}

console.log(info)

//---------- Array assignment 12 -------

var info1 = {fn: "John", ln: "Doe", adr: "Fosse way 1", City: "London", Pho: "4532 2341 7392"}

Object.keys(info1);

for(var fk in info1)
{
    console.log(fk);
}

console.log("")
//---------- Array assignment 13 -------

var info2 = {fn: "John", ln: "Doe", adr: "Fosse way 1", City: "London", Pho: "4532 2341 7392"}

Object.keys(info2);

for(var fk1 in info2)
{
    console.log(info2[fk1])
}
console.log("")

//---------- Array assignment 14 -------

var info3 = {fn: "John", ln: "Doe", adr: "Fosse way 1", City: "London", Pho: "4532 2341 7392"}

Object.keys(info3);

for(var fk2 in info2)
{
    console.log(fk2);
    console.log(info3[fk2])
    console.log("")
}

//---------- Array assignment 15 -------

var info4 = {fn: "John", ln: "Doe", adr: "Fosse way 1", City: "London", Pho: "4532 2341 7392"}

var dot = info4.adr

console.log(dot)

var bra = info4['Pho'];

console.log(bra)
