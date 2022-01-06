console.log('quiz.js');
let _names = Array();
let answers = Array();
let check = [];
let questions = document.querySelectorAll('.question');
let inputs = document.querySelectorAll('input[name]');
let submit = document.querySelector('#submit');


inputs.forEach((item, key) => {
    if (inputs[key].name !== undefined && inputs[key].name !== null && inputs[key].name.length !== 0) {
        _names.push(inputs[key].name);
    }
    let uniq = [...new Set(_names)];


    item.addEventListener('click', () => {
        item.classList.value = "selected";
        if (item.classList.contains('selected')) {
            answers = [];

            uniq.forEach((item, key) => {
                if (document.querySelector(`input[name="${uniq[key]}"]:checked`)) {
                    check = document.querySelectorAll(`input[name="${uniq[key]}"]:checked`);
                    answers.push(check[0].value);
                }
            });
            console.log(item.nextElementSibling.textContent + ' is selected');
            console.log(answers);
        }
    });
});


/*inputs.forEach((item, key) => {
    if (inputs[key].name !== undefined && inputs[key].name !== null && inputs[key].name.length !== 0) {
        _names.push(inputs[key].name);

    }
    if (key === inputs.length - 1) {
        let uniq = [...new Set(_names)];
        uniq.forEach((item, key) => {
            if (document.querySelector(`input[name="${uniq[key]}"]:checked`)) {
                answers.push(document.querySelector(`input[name="${uniq[key]}"]:checked`).value);
            } else {
                console.log('Not selected');
            }
        });

    }

});*/
