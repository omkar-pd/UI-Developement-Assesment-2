let job =document.querySelectorAll('.job')
let show_more=document.getElementsByClassName('show-more')
let show_less=document.getElementsByClassName('show-less')
console.log(show_more.length)
for(let i=0;i<job.length;i++){
    show_more[i].addEventListener('click',function(){
    job[i].classList.add("d-block")
    show_more[i].textContent=""
   });
   show_less[i].addEventListener('click',function(){
       job[i].classList.remove("d-block")
       show_more[i].textContent="Show-More"
   })
}

//Scroll to top button
//Get the button
let mybutton = document.getElementById("btn-back-to-top");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (
    document.body.scrollTop > 20 ||
    document.documentElement.scrollTop > 20
  ) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
// When the user clicks on the button, scroll to the top of the document
mybutton.addEventListener("click", backToTop);

function backToTop() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}