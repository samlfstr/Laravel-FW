let x = []; /*Initial Declaration*/
x[0] = 1; /*Initiial Condition*/
x[1] = 2; /*Initiial Condition*/

// The loop
for (let i = 2; i < 10; i++) {
    x[i] = x[i - 1] + x[i - 2];
    console.log(x[i]);
}

