let orginal_loc = 0;
let interval = setInterval(moveToRight, 10);

function moveToRight(){
  orginal_loc++;
  document.getElementById("circle").style.left = orginal_loc + "px";
}

setTimeout(function(){
  clearInterval(interval);
},5000);