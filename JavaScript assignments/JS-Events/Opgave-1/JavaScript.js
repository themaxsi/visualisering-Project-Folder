var but = document.querySelector('button');

but.addEventListener("click", function()
    {
        console.log("Hello World")
        
        changecolors();

    }
)

var x;

function changecolors() {
    x = 1;
    setInterval(change, 1);
}

function change() 
{
    if (x == 1) {
        color = "red";
        x = 2;
    } 
    else if(x==2){
        color = "green";
        x = 3;
    }
    else if(x==3){
        color = "blue";
        x = 4;
    }
    else if(x==4){
        color = "yellow";
        x = 5;
    }
    else if(x==5){
        color = "purple";
        x = 6;
    }
    else
    {
        color = "black";
        x = 1;
    }

    document.body.style.background = color;
}

