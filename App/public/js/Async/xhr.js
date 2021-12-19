// xhr request__ n.o.s
// endpoint | https://jsonplaceholder.typicode.com/todos/1

/*
    There is a difference between window events and document events
    for example ready state change exists only in document object and
    not window object.
*/

/*Name of the document : */
console.log('xhr.js');

let request = new XMLHttpRequest();
let received = false;

request.addEventListener("readystatechange", () => {
    switch (request.readyState){
        case 1:
            console.log('Request server connection established');
            break;
        case 2:
            console.log('Request is received');
            received = true;
            break;
        case 3:
            console.log('Request is being processed');
            break;
        case 4:
            if (!received){
                console.log('Check the URL and make sure you send the request.');
                break;
            }
            console.log('Request finished and response is ready');
            console.log(request.response);
            break;
    }
});


/* window events
window.addEventListener('load', () => {
    console.log('Page is fully loaded');
});

window.onload = ()=>{
    window.alert('Page is fully loaded');
}
*/


request.open("GET", 'https://jsonplaceholder.typicode.com/todos/5');
request.send();





