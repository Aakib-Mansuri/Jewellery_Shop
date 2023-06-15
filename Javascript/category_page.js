let video = document.getElementsByClassName('card-img-top');
Array.from(video).forEach(element => {
    element.addEventListener('mouseover',funcplay);
    element.addEventListener('mouseout',funcstop);
});

let deleteclass = document.getElementsByClassName('btn-secondary');
Array.from(deleteclass).forEach(element => {
       element.addEventListener('click',funcdelete);
});

let editclass = document.getElementsByClassName('btn-primary');
Array.from(editclass).forEach(element => {
       element.addEventListener('click',funcedit);
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

function funcdelete(e)
{
   if(confirm('Do you want to delete data'))
   {
      let element = e.target;
      let parentNode = element.parentNode;
      let child = parentNode.children[0].value;
      window.location = `/Jewellery%20Shop/Admin/category page.php?DeleteElement=${child}&redirect=<?php echo$_GET['redirect'];?>&value=<?php echo$_GET['value'];?>`;
   }
}

function funcedit(e)
{
    let element = e.target;
    let parentNode = element.parentNode;
    let child = parentNode.children[0].value;
    window.location = `/Jewellery%20Shop/Admin/edit page.php?EditElement=${child}&redirect=<?php echo$_GET['redirect'];?>&value=<?php echo$_GET['value'];?>`;
}
