fetch("https://openlibrary.org/works/OL45883W.json")
.then(response => response.json())
.then(data => console.log(data))
.catch(err => {
	console.error(err);
});
