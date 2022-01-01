import React from 'react';
import ReactDOM from 'react-dom';

// This is a component
function Hello (){
    return <p> Hello Fellas </p>;
}

if (document.getElementById('example')) {

    ReactDOM.render(
        // And this is how do we call a component
        <h1 className={'we-can-add-class-name'}> <i> Vital <Hello/> </i> </h1>,
        document.getElementById('example'),
    );
}

