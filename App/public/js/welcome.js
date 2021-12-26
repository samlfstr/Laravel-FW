let btn = document.querySelectorAll('.btn');

btn.forEach((item) => {
    item.addEventListener('click', () => {
        if (item.innerHTML == 'BG COLOR') {
            location.href = '/bg';
        } else if (item.innerHTML == 'COUNTER') {
            location.href = '/counter';
        } else if (item.innerHTML == 'CAROUSEL') {
            location.href = '/reviews';
        } else if (item.innerHTML == 'MODAL') {
            location.href = '/modal';
        } else if (item.innerHTML == 'ANIMATION') {
            location.href = '/animate1';
        } else if (item.innerHTML == 'QUESTIONS') {
            location.href = '/questions';
        } else if (item.innerHTML == 'TODOLIST') {
            location.href = '/todo';
        } else if (item.innerHTML == 'TEST') {
            location.href = '/test';
        } else if (item.innerHTML == 'ASYNC') {
            location.href = '/async';
        } else if (item.innerHTML == 'MATH') {
            location.href = '/math';
        } else if (item.innerHTML == 'REACT') {
            location.href = '/react';
        }

    });
});

