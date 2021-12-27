const add = document.querySelector('.add');
const todos = document.querySelector('.todos');
const search = document.querySelector('.search input');

const addListElement = function (todo) {

    const li =
        `
     <li class="list-group-item d-flex justify-content-between align-items-center">
      <span>${todo}</span>
      <i class="far fa-trash-alt delete"></i>
     </li>
    `;
    todos.innerHTML += li;
};

add.addEventListener('submit', (e) => {
    e.preventDefault();
    const todo = add.add.value.trim();
    if (todo.length) {
        addListElement(todo);
        add.add.value = "";
    }
});

todos.addEventListener('click', (e)=>{
    let x = e.target;
    // if the target class list contains ... class
    if(e.target.classList.contains('delete')){
        x.parentNode.remove();
        // x.parentElement.remove();
    }
});

const filterInput = function (input){

    let _todos = todos.childNodes;
    let _elements = Array();
    let _nodes;

    _todos.forEach((item)=>{
        if(item.nodeName === 'LI'){
            _nodes = item.childNodes;
            _elements.push(_nodes.item(1).innerText);
        }
    });


};

search.addEventListener('keyup',(e)=>{
    const _in = search.value.trim();
    filterInput(_in);
    if(e.target.classList.contains('delete')){

    }
});



