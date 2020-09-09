//---------- Loops assignment 1 -------

var i = 1;
while(i < 11)
{
    console.log(i)
    i++;
}
console.log("")
//---------- Loops assignment 2 -------

var i = 10;
while(i < 101)
{
    console.log(i)
    i++;
}
console.log("")

//---------- Loops assignment 3 -------

var i = 10;
while(0 < i)
{
    console.log(i)
    i--;
}
console.log("")

//---------- Loops assignment 4 -------

var marvel = ["Iron Man", "Spider-Man", "Captain America", "Deadpool", "Wolverine", "Hulk"];

for(var i = 0; i < marvel.length; i++)
{
    console.log(marvel[i])
}
console.log("")

//---------- Loops assignment 5 -------

var info = {Name: "Lars Løkke", Birthday: "1964-05-15", Height: "172 cm", Job: "Prime Minister Of Danmark", Party: "Venstre", Children: "3"}

Object.keys(info);

for(var fk2 in info)
{
    console.log(fk2);
    console.log(info[fk2])
    console.log("")
}

//---------- Loops assignment 6 -------

var BC = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]

for(var n in BC)
{
    if(n == 6) {console.log("Seven"); continue; }
    console.log(BC[n])
    
}


