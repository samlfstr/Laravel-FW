fetch("https://openlibrary.org/works/OL45883W.json")
    .then(function (response) {
        response.json().then(function (data) {
            console.log(data.subjects);
        })
    })
    .catch(err => {
        console.error(err);
    });
