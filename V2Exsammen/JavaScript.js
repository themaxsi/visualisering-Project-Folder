var imgs = document.querySelector(".mainItem1").querySelectorAll("img");
var center = 0;
 
for (let i = 0; i < imgs.length; i++) {
    document.querySelector("#dots").appendChild(document.createElement("div"));
}
var dots = document.querySelector("#dots").querySelectorAll("div");
dots[0].classList.add('picked');
 
if(window.innerWidth >= 600)
{
    document.onload = setInterval(placeImagesAuto(), 5000);
}
 
document.querySelector("#dots").addEventListener('click', function(e){
    if(e.target.tagName = 'DIV')
    {
        var index = 0;
        dots.forEach(dot => {            
            if(dot === e.target)
            {
                // console.log(e.target);
                if(index != center)
                {
                    center = index;
                    // console.log(index + ' ' + center);
                    placeImages(index);
                }
            }
            index++
        });
    }
})
 
function placeImages(pick)
{
    var centerImage = document.querySelector(".center");
    var leftImage = document.querySelector(".left");
    var picketDIV = document.querySelector(".picked");
    if(pick != 0 && pick != imgs.length - 1)
    {
        imgs[pick - 1].classList.add("left");
    }
    else if(pick != 0)
    {
        imgs[imgs.length - 1].classList.add("left");
    }
    else
    {
        imgs[0].classList.add("left");
    }
    imgs[pick].classList.add("center");
    dots[pick].classList.add('picked');
    centerImage.classList.remove("center");

    if(leftImage != null)
    {
        leftImage.classList.remove("left");
    }

    // leftImage.classList.remove("left");
    picketDIV.classList.remove('picked');
}
 
function placeImagesAuto()
{
    document.querySelector(".center").classList.remove("center");
    if(document.querySelector(".left") != null)
    {
        document.querySelector(".left").classList.remove("left");
    }
    // document.querySelector(".left").classList.remove("left");
    document.querySelector(".picked").classList.remove("picked");
    imgs[center].classList.add("left");
    center++;
    if(center >= imgs.length)
    {
        center = 0;
    }
    imgs[center].classList.add("center");
    dots[center].classList.add('picked');
    setTimeout(function(){ placeImagesAuto(); }, 5000);
}



