import React from 'react';
import ReactDOM from 'react-dom';

function Example() {
    return (
        <div className="container">
            <div className="row justify-content-center">
                <div className="col-md-8">
                    <div className="card">
                        <div className="card-header">This is a component</div>

                        <div className="card-body">I'm an example component!</div>
                    </div>
                </div>
            </div>
        </div>
    );
}

export default Example;

if (document.getElementById('example')) {

    ReactDOM.render(
        // JSX syntax works with babel
        <h1 className={'we-can-add-class-name'}> <i> Vital </i> </h1>,
        document.getElementById('example'),
    );
}

