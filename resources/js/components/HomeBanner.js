import React, {useState, useEffect} from 'react'
import ReactDOM from 'react-dom';
import CategoryApi from '../api/NewsApi'

function App() {
    const [showModal, setShowModal] = useState(false)

    const openModal = () => {
        setShowModal(prev => !prev)
        return(
            console.log("AZ")
        )
    }

    return(	
        <>
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-6 col-xl-5 offset-xl-7">
                        <div class="banner_content">
                            <h3>Periodico<br/>Digital UATF</h3>
                            <p>Pagina Web cuya finalidad es la de brindar informacion sobre la coyuntura actual de la Universidad y la Sociedad</p>
                            {/* <a class="banner_btn" href="#" onClick={openModal}>
                                    Suscribete!!<i class="ti-arrow-right"></i>
                            </a> */}
                            <button type="button" class="banner_btn" data-toggle="modal" data-target="#staticBackdrop">
                            Suscribete!!<i class="ti-arrow-right"></i>
                            </button>
                            {/* <Modal 
                                showModal={showModal}
                                setShowModal={setShowModal}
                            /> */}
                        </div>
                    </div>

                </div>
            </div>
        </>
    );
}


export default App;

if (document.getElementById('home_banner_area')) {
    ReactDOM.render( <App /> , document.getElementById('home_banner_area'));
}
    
