let video = document.getElementsByClassName('card-img-top');
Array.from(video).forEach(element => {
    element.addEventListener('mouseover',funcplay);
    element.addEventListener('mouseout',funcstop);
});

let itemclass = document.getElementsByClassName('btn-primary');
Array.from(itemclass).forEach(element => {
       element.addEventListener('click', funcredirect);
});

function funcplay(e)
{
   let element = e.target;
   element.play();
}

function funcstop(e)
{
   let element = e.target;
   element.pause();
}


function funcredirect(e)
{
    let element = e.target;
    let parentNode = element.parentNode;
    let child = parentNode.children[0].value;
    window.location = `item page.php?Sno=${child}`;
}
