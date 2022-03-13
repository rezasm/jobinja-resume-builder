// var boxes  = document.querySelectorAll(".box-content");
var editButton = document.querySelectorAll('.edit-btn');
// item => {
//     item.addEventListener('mouseenter',event);

document.querySelectorAll('.box-content').forEach(function(item,i){
    item.addEventListener('mouseenter',function(){
        editButton[i].style.display = 'block';
     });
    item.addEventListener('mouseleave',function(){
        editButton[i].style.display = 'none';
     });
});







 

 