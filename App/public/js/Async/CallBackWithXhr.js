
const handleXhr = function (callback){
    console.log('CallBackWithXhr.js');

    let request = new XMLHttpRequest();

    request.addEventListener("readystatechange", () => {
        switch (request.readyState){
            case 1:
                console.log('Request server connection established');
                break;
            case 2:
                console.log('Request is received');
                break;
            case 3:
                console.log('Request is being processed');
                break;
            case 4:
                console.log('Request finished and response is ready');
                if(request.status === 200){
                    callback(undefined, request.responseText);
                }else{
                    callback('Cound not fetch data', undefined);
                }
                break;
        }
    });

    request.open("GET", 'https://jsonplaceholder.typicode.com/todos/1');
    request.send();
}

handleXhr((err, data)=>{
    console.log('Callback fired')
    if (err) {
        console.log(err);
    }else{
        console.log(data);
    }
});

