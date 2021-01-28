import axios from 'axios';
import React, {useState, useEffect} from 'react'
import ReactDOM from 'react-dom';
import Pagination from 'react-js-pagination';
import CategoryApi from '../api/NewsApi'

function App() {
    const [data, setData] = useState([]);

    async function getData(pageNumber = 1){
        const response = fetch('https://mac-softins.com/api/minerales')
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
            Cotizacion de Minerales
        </h1>

        <table class="table table-striped">  
            <thead class="thead-dark">  
                <tr>  
                    <th scope="col">Mineral</th>  
                    <th scope="col">Unidad</th>  
                    <th scope="col">Cotizacion</th>  
                    {/* <th scope="col">Fallecidos</th>   */}
                </tr>  
            </thead>  
            {
                data.map((data, i) => (
                    <tbody key={i}>  
                        <tr>  
                            <th scope="row">{data.mineral}</th>  
                            <td>{data.unidad}</td>  
                            <td>{data.cotizacion_alta}</td>
                        </tr>  
                    </tbody>
                ))
            }  
        </table>
        </>  
    );

}


export default App;

if (document.getElementById('card_minerals')) {
    ReactDOM.render( <App /> , document.getElementById('card_minerals'));
}

