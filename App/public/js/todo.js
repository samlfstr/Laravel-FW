/* Select Items */
let grocery = document.getElementById('grocery');
let form = document.querySelector('.grocery-form');
let alert = document.querySelector('.alert');
let submitBtn = document.querySelector('.submit-btn');
let editBtn = document.querySelector('.edit-btn');
let deleteBtn = document.querySelector('.delete-btn');
let clearBtn = document.querySelector('.clear-btn');555
let grecery = document.querySelector('#grocery');

/* Edit Option */
let editElement;
let editFlag = false;
let editId = "";


/* Event Listeners */
form.addEventListener('submit', addItem);
/* Functions */
function addItem(e) {
    e.preventDefault();
    // save the input value into a variable
    const value = grocery.value;
    // generate a unique id
    const id = new Date().getTime().toString();
    if (value && !editFlag) {
        console.log('Add item to the list');
    }
    // edit flag is only true when edit button is clicked
    else if (value && editFlag) {
        console.log('Add item to the list');
    }
    else {
        alert.textContent = 'Empity Value';
        alert.classList.add('alert-danger');
    }


}

/* Setup Items */
