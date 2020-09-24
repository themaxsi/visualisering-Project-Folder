var imgs = document.querySelector(".mainItem1").querySelectorAll("img");
var center = 0;
 
// for (let i = 0; i < imgs.length; i++) {
//     document.querySelector("section").appendChild(document.createElement("div"));
// }
// var dots = document.querySelector("section")querySelectorAll("div");
// dots[0].classList.add('picket');
 
if(window.innerWidth >= 600)
{
    document.onload = setInterval(placeImagesAuto(), 5000);
    // document = setInterval(placeImagesAuto(), 1000);
}
 
function placeImagesAuto()
{
    document.querySelector(".center").classList.remove("center");
    document.querySelector(".left").classList.remove("left");
    // document.querySelector(".picket").classList.remove("picket");
    imgs[center].classList.add("left");
    center++;
    if(center >= imgs.length)
    {
        center = 0;
    }
    imgs[center].classList.add("center");
    // dots[center].classList.add('picket');
    setTimeout(function(){ placeImagesAuto(); }, 5000);
}