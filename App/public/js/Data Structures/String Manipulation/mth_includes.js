console.log('includes.js');

let str_input = `Lorem ipsum dolor, sit amet consectetur adipisicing elit.
Voluptatibus omnis nesciunt asperiores reiciendis sequi consequuntur nihil odit dolor deserunt quibusdam,
cumque aliquid illum laudantium voluptas dolores iste velit amet repudiandae.`;
let the_term = 'Lorem';
let str_output;
let includes = str_input.includes(the_term);
if(includes){
    str_output = str_input.replace(the_term, 'Merol');
}
console.log(str_output);
