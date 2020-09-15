var photo = document.querySelector("main");

photo.addEventListener('click', function(e) {
    if(e.target.tagName === "IMG")
    {
       
        var div = document.createElement('div');
        var img = document.createElement('img');

        var imgOldSrc = e.target.src;

        img.src = "img/" + imgOldSrc.split("_")[1];
        div.appendChild(img);

        document.querySelector("body").appendChild(div);
        div.addEventListener('click', function(e2)
        {
            if(e2.target.tagName == 'DIV')
            {
                div.remove();
            }
        },false)


    }
})