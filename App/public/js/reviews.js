let btns = document.querySelectorAll('.btn');
let imgs = document.querySelectorAll('.image');
var i = 0;

btns.forEach(btn => {
  btn.addEventListener('click', 
  (event) =>{
    if(event.currentTarget.id === 'btn-right'){
          console.log(imgs[i].attributes.id.nodeValue);
          if(i < 2){
            i++;

          }else{
            i = 0;

          }
    }else if(event.currentTarget.id === 'btn-left'){
      if(event.currentTarget.id === 'btn-left'){
        console.log(imgs[i].attributes.id.nodeValue);
        if(i > 0){
          i--;
        }else{
          i = 2;
        }
      }
    }
  });

});
