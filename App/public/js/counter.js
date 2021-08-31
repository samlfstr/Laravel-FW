// button selections
let decrease = document.querySelector('#decrease');
let reset = document.querySelector('#reset');
let increase = document.querySelector('#increase');
let number = document.querySelector('#number');
let count = 0;
 
decrease.addEventListener(
  'click',
  () => {
    count--;
    number.textContent = count;
    if(count === 0){
      number.style.color = 'black';
    } else if (count > 0){
      number.style.color = 'green';
    } else {
      number.style.color = 'red';
    }
  }
);
reset.addEventListener(
  'click',
  () => {
    count = 0;
    number.textContent = count;
    if(count === 0){
      number.style.color = 'black';
    } else if (count > 0){
      number.style.color = 'green';
    } else {
      number.style.color = 'red';
    }
  }
);
increase.addEventListener(
  'click',
  () => {
    count++;
    number.textContent = count;
    if(count === 0){
      number.style.color = 'black';
    } else if (count > 0){
      number.style.color = 'green';
    } else {
      number.style.color = 'red';
    }
  }
);



