console.log('quiz.js');
let _names = Array();
let answers = Array();
let check = [];
let questions = document.querySelectorAll('.question');
// select all the inputs that has a name parameter
let inputs = document.querySelectorAll('input[name]');
let submit = document.querySelector('#submit');


inputs.forEach((item, key) => {
    if (inputs[key].name !== undefined && inputs[key].name !== null && inputs[key].name.length !== 0) {
        // take all the names out of that query selection
        _names.push(inputs[key].name);
    }
    // delete all duplicate elements
    let uniq = [...new Set(_names)];

    // event delegation to detect each new selection
    item.addEventListener('click', () => {
        // insert selected class to each selected radio button
        item.classList.value = "selected";
        // then catch them
        if (item.classList.contains('selected')) {
            answers = [];
            // for each name
            uniq.forEach((item, key) => {
                // go through all the unique names
                if (document.querySelector(`input[name="${uniq[key]}"]:checked`)) {
                    // with each new user entry go through all the inputs over again
                    check = document.querySelectorAll(`input[name="${uniq[key]}"]:checked`);
                    answers.push(check[0].value);
                }
            });
            console.log(item.nextElementSibling.textContent + ' is selected');
            console.log(answers);
        }
    });
});
