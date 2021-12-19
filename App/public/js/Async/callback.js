/*
    So the function that has the callback as parameter and makes the call
    of the other function that'll be executed.
*/

// and I don't wanna wait for the execution of the database
function wait (){
    console.log('First function.');
}

// getting data from database takes time for example
function second(callback){
    // it could be replaced with if or while...
    setTimeout(()=>{
        console.log('Second function.');
        callback(wait);
    }, 3000);
}

function last(){
    console.log('Last function.');
}

second(wait);
