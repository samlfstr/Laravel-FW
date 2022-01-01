console.log('quiz.js');
let _names = Array();
let answers = Array();
let questions = document.querySelectorAll('.question');
let inputs = document.querySelectorAll('input[name]');


inputs.forEach((item, key) => {
    if (inputs[key].name !== undefined && inputs[key].name !== null && inputs[key].name.length !== 0) {
        _names.push(inputs[key].name);

    }
    if(key === inputs.length -1){
        let uniq = [...new Set(_names)];
        uniq.forEach((item, key)=>{
            answers.push(document.querySelector(`input[name="${uniq[key]}"]:checked`).value);
        });

    }

});

console.log(answers);
