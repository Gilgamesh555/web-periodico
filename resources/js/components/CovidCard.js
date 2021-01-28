import axios from 'axios';
import React, {useState, useEffect} from 'react'
import ReactDOM from 'react-dom';
import Pagination from 'react-js-pagination';
import CategoryApi from '../api/NewsApi'

function App() {
    const [data, setData] = useState([]);

    async function getData(pageNumber = 1){
        const response = fetch('https://mac-softins.com/api/depa')
        .then(res => res.json())
        .then(
            (response) => {
                // console.log(response)
                setData(response)
            },
            (error) => {
                console.log(error)
            }
        )
        setData(response)
    }

    useEffect( () => {
        getData()
    }, [])

    if(data[0] == null){
        return <div>GAA</div>
    }

    return(
        <>	
        <h1 style={{textAlign: 'center', color: 'black'}}> 
            Info Covid
        </h1>

        <table class="table table-dark table-striped">  
            <thead>  
                <tr>  
                    <th scope="col">Departamento</th>  
                    <th scope="col">Confirmados</th>  
                    <th scope="col">Recuperados</th>  
                    <th scope="col">Fallecidos</th>  
                </tr>  
            </thead>  
            {
                data.map((data, i) => (
                    <tbody key={i}>  
                        <tr>  
                            <th scope="row">{data.departamento}</th>  
                            <td>{data.confirmados}</td>  
                            <td>{data.recuperados}</td>  
                            <td>{data.muertos}</td>  
                        </tr>  
                    </tbody>
                ))
            }  
        </table>
        </>  
    );

}


export default App;

if (document.getElementById('card_covid')) {
    ReactDOM.render( <App /> , document.getElementById('card_covid'));
}

