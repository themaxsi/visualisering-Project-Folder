var lk = document.querySelectorAll("li");

lk.forEach(element => {
    element.addEventListener('click', function()
    {
        alert(element.innerText);
    })
});