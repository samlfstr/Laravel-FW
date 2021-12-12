// xhr request__ n.o.s
// endpoint | https://jsonplaceholder.typicode.com/todos/1

/*Name of the document : */
console.log('xhr.js');

let request = new XMLHttpRequest();

request.addEventListener("readystatechange", () => {
    if (request.readyState === 1) {
        console.log('Request opened');
    } else if (request.readyState === 2) {
        console.log('Request send');
    } else if (request.readyState === 3) {
        console.log('Request loading');
    } else if (request.readyState === 4) {
        console.log(request);
    }
});

/*readyState : 1*/
request.open("GET", 'https://jsonplaceholder.typicode.com/todos');
/*readyState : 2*/
request.send();
/*readyState : 3 - Loading*/
/*readyState : 4 - Done*/



