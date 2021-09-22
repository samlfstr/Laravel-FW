let btns = document.querySelectorAll('.btn');

let orginal_loc = 0;
// call the function move to right every ten sec.

// increase the location var by 1 assign it to the style parameter
function moveToRight(){
  orginal_loc++;
  document.getElementById("circle").style.right = orginal_loc + "px";
}
function moveToLeft(){
  orginal_loc++;
  document.getElementById("circle").style.left = orginal_loc + "px";
}
function moveToUp(){
  orginal_loc++;
  document.getElementById("circle").style.top = orginal_loc + "px";
}
function moveToDown (){
  orginal_loc++;
  document.getElementById("circle").style.bottom = orginal_loc + "px";
}

/* // stop calling the interval callback function after 5 sec.
setTimeout(function(){
  clearInterval(interval);
},5000); */


/* To use arrow keys
document.onkeydown = checkKey;

function checkKey(e) {
    e = e || window.event;

    if (e.keyCode == '38') {
      let interval = setInterval(moveToDown, 1);
      clearInterval(interval);
    }
    else if (e.keyCode == '40') {
      let interval = setInterval(moveToUp, 1);
      clearInterval(interval);
    }
    else if (e.keyCode == '37') {
      let interval = setInterval(moveToLeft, 1);
      clearInterval(interval);
    }
    else if (e.keyCode == '39') {
      let interval = setInterval(moveToRight, 1);
    }
} */
