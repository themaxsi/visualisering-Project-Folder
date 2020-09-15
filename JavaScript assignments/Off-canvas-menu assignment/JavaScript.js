var button = document.querySelector('#menu-button');

button.addEventListener('click', function()
{
    var menu = document.querySelector('.menu');

    if(menu.classList.contains('show'))
    {
        menu.classList.remove("show");
        button.style.backgroundImage = 'url(menu-white-18dp.svg)';
    }
    else
    {
        menu.classList.add('show');
        button.style.backgroundImage = 'url(close-white-18dp.svg)';
    }
})





var buttonDark = document.querySelector('input');

buttonDark.addEventListener('click', function()
{
    var element = document.body;
    element.classList.toggle("dark-mode");
})
