import React from 'react';
import ReactDOM from 'react-dom';

// This is a component
function Hello (){
    return (
        <p> Hello Fellas </p>
    );
}
function Person(props){
    return <p> {props.name} </p>
}

function Welcome(){
    // retun person with name parameter
    return (
        <div className="names">
            <Person name={"Sam"} />
            <Person name={"Aaron"} />
            <Person name={"Joshua"} />
        </div>
    );
}


if (document.getElementById('example')) {

    ReactDOM.render(
        // And this is how do we call a component
        <h1 className={'we-can-add-class-name'}>
            <Welcome/>
        </h1>,
        document.getElementById('example'),
    );
}


