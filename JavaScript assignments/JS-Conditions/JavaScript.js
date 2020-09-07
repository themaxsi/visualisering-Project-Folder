//---------- If statement 1 ----------

var val = 73;

if(val>50)
{
    console.log("Tallet er støre end 50");
}

//------ If statement 2 -------------

var val2 = 23;
var minAge = 18;
if(val2 >= minAge)
{
    console.log(val2 + " er større eller lig med 18");
}


//------- If statement 3 -------------

var firstName = "";

if(firstName == "")
{
    console.log("Du glemte at indtaste dit fornavn")
}


//-------- if else statement 1 -------

var gender = "Male"

if(gender == "Male")
{
    console.log("Personen er en Mand");
}
else if(gender == "Female")
{
    console.log("Personen er en kvinde");
}
else
{
    console.log("Error");
}

//-------- if else statement 2 -------

var Counter = 49;

if(Counter != 50)
{
    console.log("Tallet er Godkendt");
}
else if(Counter == 50)
{
    console.log("Tallet er 50");
}

//-------- else if statement 1 -------

var myAge = 20;

if(myAge <= 18)
{
    console.log("Du er et barn");
}
else if(myAge < 18 && myAge < 62)
{
    console.log("Du er voksen");
}
else
{
    console.log("Du er pensionist");
}

