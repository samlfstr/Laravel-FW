/*
    So the function that has the callback as parameter and makes the call
    of the other function that'll be executed callback(other_function)
    will be executed first. And when I call I use the first executing
    function(secon executed function) as we can see below.
*/

// and I don't wanna wait for the execution of the database
function wait (callback){
    console.log('First function.');
    callback(second);
}

// getting data from database takes time for example
function second(){
    setTimeout(()=>{
        console.log('Second function.');
        prompt('Sth here');
    }, 3000);
}

function last(){
    console.log('Last function.');
}

wait(second);
last();

