console.log('search.js');

let str_input = `Lorem ipsum dolor, sit amet consectetur adipisicing elit.
Voluptatibus omnis nesciunt asperiores reiciendis sequi consequuntur nihil odit dolor deserunt quibusdam,
cumque aliquid illum laudantium voluptas dolores iste velit amet repudiandae.`;
let the_term = "";
let pos = str_input.search(`${the_term}`);

console.log(str_input.substring(pos,pos +   the_term.length));
