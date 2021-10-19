/* Select Items */
let grocery = document.getElementById('grocery');
let form = document.querySelector('.grocery-form');
let alert = document.querySelector('.alert');
let submitBtn = document.querySelector('.submit-btn');
let editBtn = document.querySelector('.edit-btn');
let deleteBtn = document.querySelector('.delete-btn');
let clearBtn = document.querySelector('.clear-btn');
let grecery = document.querySelector('#grocery');
let list = document.querySelector('.grocery-list');

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
        // create element
        const element = document.createElement('article');
        // add class
        element.classList.add('grocery-item');
        // add attribute
        const attr = document.createAttribute('data-id');
        attr.value = id;
        // add the attr attribute to <article>
        element.setAttributeNode(attr);
        element.innerHTML = `
        <p class="title">${value}</p>
        <div class="btn-container">
            <button type="button" class="edit-btn">
            <i class="fas fa-edit"></i>
          </button>
          <button type="button" class="delete-btn">
            <i class="fas fa-trash"></i>
          </button>
        </div>
        `;
        // append child
        list.appendChild(element);

        // display  alert
        displayAlert('The element is successfully added', 'success');

        // display the element
        element.classList.add('show-container');

    }
    // edit flag is only true when edit button is clicked
    else if (value && editFlag) {
        console.log('Editing');
    }
    else {
        displayAlert('Please Enter A Value','danger');
    }
}
function displayAlert(text, action){
    alert.textContent = text;
    alert.classList.add(`alert-${action}`);

    setTimeout(function(){
        alert.textContent ="";
        alert.classList.remove(`alert-${action}`);
    }, 3000);
}

/* Setup Items */
