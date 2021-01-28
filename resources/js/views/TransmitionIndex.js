import axios from 'axios';
import React, {useState, useEffect} from 'react'
import ReactDOM from 'react-dom';
import Pagination from 'react-js-pagination';
import CategoryApi from '../api/NewsApi'

function App({data_id}) {
    const [data, setData] = useState([])

    const renderNews = () => {
        return(
            <>
                {data.map((index, key) => {
                    return(
                        <article class="blog_item"  key={key} >
                            <div class="blog_item_img">
                            <a href={"/info/".concat(index.id)}>
                                <img class="card-img rounded-0" src={index.imagen} alt="No existe la imagen" style={{height: 470}}/>
                            </a>
                            </div>
                            
                            <div class="blog_details">
                                <a class="d-inline-block" href={"/info/".concat(index.id)}>
                                    <h2>{index.titulo}</h2>
                                </a>
                                <p>{index.resumen}</p>
                                <ul class="blog-info-link">
                                <li><a href={"/info/".concat(index.id)}>Fecha Pub. {index.fecha_ini}</a></li>
                                </ul>
                            </div>
                        </article>
                    )
                })}
                <nav class="blog-pagination justify-content-center d-flex">
                    <Pagination
                        activePage={data.current_page}
                        totalItemsCount={data.total}
                        itemsCountPerPage={data.per_page}
                        onChange={(pageNumber) => getData(pageNumber)}
                        itemClass="page-item"
                        linkClass="page-link"
                        firstPageText="First"
                        lastPageText="Last"
                    />
                </nav>
            </>                   
        )
    }

    async function getData(){
        const response = fetch(CategoryApi.concat('transmision'))
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
    }

    // async function getCategory(pageNumber = 1){
    //     if(data_id.id === "0"){
    //         setSection([{nombre: 'General'}])
    //     }
    //     else{
    //         const response = fetch(CategoryApi.concat('section'))
    //         .then(res => res.json())
    //         .then(
    //             (response) => {
    //                 // console.log(response)
    //                 setSection(response)
    //             },
    //             (error) => {
    //                 console.log(error)
    //             }
    //         )
    //     }
    // }

    useEffect( () => {
        getData()
        // getCategory()
    }, [])

    if(data[0] == null){
        return <div>GAA</div>
    }

    return(	
    <>
        <div class="row justify-content-center" >
            <div class="col-lg-12">
                <div class="area-heading">
                    <h4>Transmisiones</h4>
                </div>           
            </div>
        </div>

        <div class="d-none d-sm-block mb-5 pb-4">
            {
                data.map((index, key) => {
                    const html = index.cod_envevido.slice(0, 7).concat(" style='width: 100%; height: 100%' ").concat(index.cod_envevido.slice(7))
                    return(
                        <div id="map" style={{height: "480px", marginBottom: "50px"}}>
                            <div dangerouslySetInnerHTML={{ __html: html }} style={{width: '100%', height: '100%'}}/>
                            {/* <iframe style={{height: "480px", marginBottom: "50px"}} width="1280" height="720" src="https://www.youtube.com/embed/d8ekz_CSBVg?list=RDMME1iFc4sZyQg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> */}
                        </div>
                    )
                })
            }
        </div>
        {/* style={{position: 'relative', width: '100%', height: '100%'}} */}

        <div class="row">
            <div class="col-12">
            <h2 class="contact-title">Get in Touch</h2>
            </div>
            <div class="col-lg-8">
            <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" placeholder="Enter Message"></textarea>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                    <input class="form-control" name="name" id="name" type="text" placeholder="Enter your name" />
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                    <input class="form-control" name="email" id="email" type="email" placeholder="Enter email address" />
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                    <input class="form-control" name="subject" id="subject" type="text" placeholder="Enter Subject" />
                    </div>
                </div>
                </div>
                <div class="form-group mt-3">
                <button type="submit" class="button button-contactForm">Send Message</button>
                </div>
            </form>


            </div>

            <div class="col-lg-4">
            <div class="media contact-info">
                <span class="contact-info__icon"><i class="ti-home"></i></span>
                <div class="media-body">
                <h3>Buttonwood, California.</h3>
                <p>Rosemead, CA 91770</p>
                </div>
            </div>
            <div class="media contact-info">
                <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                <div class="media-body">
                <h3><a href="tel:454545654">00 (440) 9865 562</a></h3>
                <p>Mon to Fri 9am to 6pm</p>
                </div>
            </div>
            <div class="media contact-info">
                <span class="contact-info__icon"><i class="ti-email"></i></span>
                <div class="media-body">
                <h3><a href="mailto:support@colorlib.com">support@colorlib.com</a></h3>
                <p>Send us your query anytime!</p>
                </div>
            </div>
            </div>
        </div>
    </>
    );
}

export default App;

if (document.getElementById('transmition_index')) {
    const element =  document.getElementById('transmition_index');

    const props = Object.assign({}, element.dataset);

    ReactDOM.render( <App data_id={props}/> , element);
}

