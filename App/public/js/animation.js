let btns = document.querySelectorAll('.btn');

btns.forEach((btn) =>{
console.log(btn);
});


let orginal_loc = 0;
// call the function move to right every ten sec.
let interval = setInterval(moveToRight, 10);

// increase the location var by 1 assigne it to the style parameter
function moveToRight(){
  orginal_loc++;
  document.getElementById("circle").style.left = orginal_loc + "px";
}

// stop calling the interval callback function after 5 sec.
setTimeout(function(){
  clearInterval(interval);
},5000);

if(event.keyCode == 37) {
  alert('Left arrow of keyboard was smashed');
}
else if(event.keyCode == 38) {
  alert('Up arrow of keyboard was smashed');
}
else if(event.keyCode == 39) {
  alert('Right arrow of keyboard was smashed');
}
else if(event.keyCode == 40) {
  alert('Down arrow of keyboard was smashed');
}