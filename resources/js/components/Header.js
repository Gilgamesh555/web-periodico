import React, {useState, useEffect} from 'react'
import ReactDOM from 'react-dom';
import CategoryApi from '../api/NewsApi'

function App() {
    const [data, setData] = useState([]);
    const [section, setSection] = useState([]);

    useEffect( () => {
        getDataFromApi();
    }, [])

    function getDataFromApi(){
        fetch('http://siadsis.uatf.edu.bo/api/category')
        .then(res => res.json())
        .then(
            (response) => {
                setData(response)
            },
            (error) => {
                console.log(error)
            }
        )
        fetch('http://siadsis.uatf.edu.bo/api/section')
        .then(res => res.json())
        .then(
            (response) => {
                setSection(response)
            },
            (error) => {
                console.log(error)
            }
        )
    }

    return(	
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            {/* <!-- Brand and toggle get grouped for better mobile display --> */}
            <a class="navbar-brand logo_h" href="index.html"><img src="/img/logo.png" width="50px" height="50px" /></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            {/* <!-- Collect the nav links, forms, and other content for toggling --> */}
            <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                <ul class="nav navbar-nav menu_nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="/">Inicio</a></li>

                    <li class="nav-item submenu dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Nuestra Universidad</a>
                        <ul class="dropdown-menu">
                            {/* <li class="nav-item"><a class="nav-link" href="">Inf. Cientfica</a></li> */}
                            <li class="nav-item"><a class="nav-link" href="/transmition">Transmisiones</a></li>
                            <li class="nav-item"><a class="nav-link" href="/contacts">Agenda</a></li>
                            <li class="nav-item"><a class="nav-link" href="/tvu">Canal Universitario</a></li>
                            {/* <li class="nav-item"><a class="nav-link" href="">Comunicados</a></li> */}
                            <li class="nav-item"><a class="nav-link" href="/info">Informacion Univ.</a></li>
                            <li class="nav-item"><a class="nav-link" href="contact.html">Contactanos</a></li>
                        </ul>
                    </li>
                    <li class="nav-item submenu dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categorias</a>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a class="nav-link" href="/category/0">General</a></li>
                            {
                                data.map((index, key) => (
                                    <li class="nav-item" key={key}><a class="nav-link" href={"/category/".concat(index.id)}>{index.nombre}</a></li>
                                ))
                            }
                        </ul>
                    </li>
                    <li class="nav-item submenu dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Anuncios</a>
                        <ul class="dropdown-submenu">
                            <li class="nav-item"><a class="nav-link" href="/anuncio/0">General</a></li>
                            {
                                section.map((index, key) => (
                                    <li class="nav-item" key={key}><a class="nav-link" href={"/anuncio/".concat(index.id)}>{index.nombre}</a></li>        
                                ))
                            }
                        </ul>
                    </li>
                    <li class="nav-item submenu dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Yo Publico!!</a>
                        <ul class="dropdown-submenu">
                            {/* <button type="button" class="banner_btn" data-toggle="modal" data-target="#staticBackdrop">
                            Suscribete!!<i class="ti-arrow-right"></i>
                            </button> */}
                            <li class="nav-item"><a class="nav-link" data-toggle="modal" data-target="#staticBackdropEst" href="">Registro Estudiante</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="modal" data-target="#staticBackdropDoc" href="">Registro Docente</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="modal" data-target="#staticBackdropDoc" href="">Registro Tercero</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="modal" data-target="#staticBackdropDoc" href="">Iniciar Sesion</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="/transmition">Transmisiones</a></li>
                </ul>
            </div>
            {/* <div class="right-button">
                <ul>
                    <li class="shop-icon"><a href="#"><i class="ti-shopping-cart-full"></i><span>0</span></a></li>
                    <li><a class="sign_up" href="">Suscribete</a></li>
                </ul>
            </div> */}
        </div>
    </nav>
    );
}

export default App;

if (document.getElementById('main_menu')) {
    ReactDOM.render( <App /> , document.getElementById('main_menu'));
}

