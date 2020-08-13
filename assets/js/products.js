import * as React from 'react';
import * as ReactDOM from 'react-dom';

class Products extends React.Component {
    render() {
        return <table>
            <tbody>
                <tr>
                    <th>Продукт</th>
                    <th>Цена</th>
                    <th>Подробности</th>
                </tr>
                <tr>
                    <th>asdqwer</th>
                    <th>asdqwer</th>
                    <th>asdqwer</th>
                </tr>
                <tr>
                    <th>asdqwer</th>
                    <th>asdqwer</th>
                    <th>asdqwer</th>
                </tr>
                <tr>
                    <th>asdqwer</th>
                    <th>asdqwer</th>
                    <th>asdqwer</th>
                </tr>
            </tbody>
        </table>
    }
}

ReactDOM.render(<Products />, document.getElementById('products-holder'));

console.log('Products here');