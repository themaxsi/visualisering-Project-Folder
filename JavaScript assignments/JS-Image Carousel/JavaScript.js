var slideIndex = 1;

var myTimer;

var slideshowContainer;

//Loads the slide show when the site opens
window.addEventListener("load",function() 
{
    //calls the function and gives it and index to work with 
    showSlides(slideIndex);
    //gives the variable a interval so that it can change slide
    myTimer = setInterval(function(){plusSlides(1)}, 4000);
  
    //COMMENT OUT THE LINE BELOW TO KEEP ARROWS PART OF MOUSEENTER PAUSE/RESUME
    slideshowContainer = document.getElementsByClassName('SS-inner')[0];
  
    //UNCOMMENT OUT THE LINE BELOW TO KEEP ARROWS PART OF MOUSEENTER PAUSE/RESUME
    // slideshowContainer = document.getElementsByClassName('SSC')[0];
  
    slideshowContainer.addEventListener('mouseenter', pause);
    slideshowContainer.addEventListener('mouseleave', resume);
})

// NEXT AND PREVIOUS CONTROL
//this function is used to make the arrow to be able to turn the next slide
function plusSlides(n)
{
    clearInterval(myTimer);
    if (n < 0)
    {
        showSlides(slideIndex -= 1);
    } 
    else 
    {
        showSlides(slideIndex += 1); 
    }
    
    //COMMENT OUT THE LINES BELOW TO KEEP ARROWS PART OF MOUSEENTER PAUSE/RESUME
    
    if (n === -1)
    {
        myTimer = setInterval(function(){plusSlides(n + 2)}, 3000);
    } 
    else 
    {
        myTimer = setInterval(function(){plusSlides(n + 1)}, 3000);
    }
}

//Controls the current slide and resets interval if needed
function currentSlide(n)
{
    clearInterval(myTimer);
    myTimer = setInterval(function(){plusSlides(n + 1)}, 3000);
    showSlides(slideIndex = n);
}

//shows the slides on the screen
function showSlides(n)
{
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) 
    {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) 
    {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
}

pause = () => {
  clearInterval(myTimer);
}

resume = () =>{
  clearInterval(myTimer);
  myTimer = setInterval(function(){plusSlides(slideIndex)}, 3000);
}


//this is so that i can click to the previous slide
var LClick = document.getElementsByClassName("prev");

LClick.addEventListener('click', function()
{
    plusSlides(-1);
})


//this is so that i can click to the next slide
var RClick = document.getElementsByClassName("next");

RClick.addEventListener('click', function()
{
    plusSlides(1);
})

