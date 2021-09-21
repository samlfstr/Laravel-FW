let circle = document.getElementById("circle");
let initial_pos = 0;

circle.addEventListener(
  'click',
  () =>{
    let interval = setInterval(moveToRight(), 10);
  }
);

function moveToRight() {
  initial_pos++;
  circle.style.left = initial_pos + 'px';
}