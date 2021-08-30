// let background = document.documentElement;
let background = document.getElementsByTagName("body")[0];
let bg_color = document.getElementById("bg-color");
let previous = 0;

let colors = [
  "red",
  "green",
  "yellow",
  "gray",
  "blue",
  "purple",
  "orange",
  "black",
  "pink"
];

bg_color.addEventListener(
  'click',
  ()=> {
    // Generate random values
      let randm = Math.floor(Math.random() * 8);
      // Make sure that never the next color is the same
      if(randm === previous){
        randm = randm + 1;
      }
      // Generate the meta data
      console.log(randm);

      // Do what's intendted
      background.style.backgroundColor = `${colors[randm]}`;
      // Make sure that the loop is always there
      previous = randm;
  }
);