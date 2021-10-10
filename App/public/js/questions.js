/* Selection */
let btns = document.querySelectorAll('.question-btn');
let add_btn = document.querySelector('.add');
let main_section = document.querySelector('.section-center');
const ques_id = document.getElementById('question');
const ans_id = document.getElementById('answer');

let faq = {
    question: "",
    answer: ""
};
/* End Selection */


btns.forEach(function (btn) {
    btn.addEventListener(
        'click',
        function (e) {
            const question = e.currentTarget.parentElement.parentElement;
            // question.classList.toggle('show-text');
            if (question.classList.contains('show-text')) {
                question.classList.remove('show-text');
            } else {
                question.classList.add('show-text');
            }
        }
    );
});


add_btn.addEventListener(
    'click',
    function () {

        faq.question = ques_id.value;
        faq.answer = ans_id.value;

        let item =
        `
            <article class="question">
            <div class="question-title">
            <p>${faq.question}?</p>
            <button type="button" class="question-btn">
            <span class="plus-icon">
              <i class="far fa-plus-square"></i>
            </span>
            <span class="minus-icon">
              <i class="far fa-minus-square"></i>
            </span>
            </button>
            </div>
            <div class="question-text">
              <p>${faq.answer}</p>
            </div>
            </article>

        `;

        if((faq.answer.length && faq.question.length) > 0){
            main_section.insertAdjacentHTML(
                'beforeend',
                item
            );
        }else{
            alert('Please make sure that the length is diffrent then zero');
        }
    }
)
