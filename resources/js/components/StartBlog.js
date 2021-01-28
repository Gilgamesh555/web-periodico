import React, {useState, useEffect} from 'react'
import ReactDOM from 'react-dom';
import CategoryApi from '../api/NewsApi'

function App() {
    const [news, setNews] = useState([]);
    const [id, setId] = useState([]);
    const flag = 1;

    useEffect( () => {
        getDataFromApi();
    }, [])

    function getDataFromApi(){
        fetch('http://siadsis.uatf.edu.bo/api/noticias')
        .then(res => res.json())
        .then(
            (response) => {
                setNews(response.slice(response.length - 4, response.length))
            },
            (error) => {
                console.log(error)
            }
        )
    }

    function getIdFromApi(flag){
        fetch('http://siadsis.uatf.edu.bo/api/cat/'.concat(flag))
        .then(res => res.json())
        .then(
            (response) => {
                // console.log(response)
                setNews(response.slice(response.length - 4, response.length))
            },
            (error) => {
                console.log(error)
            }
        )
    }

    if(!news[0])
    {
        return <div>Gaa</div>
    }
    return(	
        <>
            <div class="row justify-content-center" >
                <div class="col-lg-12">
                    <div class="area-heading">
                        <h4>Ultimas Noticias</h4>
                        {/* <p>Life firmament under them evening make after called dont saying likeness<br> isn't wherein also forth she'd air two without</p> */}
                    </div>           
                </div>
            </div>

            <div class="row">
                <div class="col-lg-8 col-md-6 ">
                    <div class="single-blog full_image">
                        <div class="thumb">
                            <img class="img-fluid w-100" src={news[0].imagen} alt="" style={{height: 470}}/>
                        </div>
                        <div class="single-blog-content">
                            <p class="tag">{news[0].interes[0].nombre}</p>
                            <p class="date">{news[0].fecha}</p>
                            <h4>
                                <a href={"/noti/".concat(news[0].id)}>{news[0].resumen}</a>
                            </h4>
                            <div class="meta-bottom d-flex">
                                <p class="likes"><i class="ti-comments"></i> 02 Comments</p>
                                <p><i class="ti-heart"></i> 15 </p>
                            </div>

                        </div>

                    </div>

                </div>


                <div class="col-lg-4 col-md-6 ">
                    <div class="single-blog">
                        <div class="thumb">
                            <img class="img-fluid w-100" src={news[1].imagen} alt="" style={{height: 230}}/>
                        </div>
                        <div class="single-blog-content">
                            <p class="tag">{news[1].interes[0].nombre}</p>
                            <p class="date">{news[1].fecha}</p>
                            <h4>
                                <a href={"/noti/".concat(news[1].id)}>{news[1].resumen}</a>
                            </h4>
                            <div class="meta-bottom d-flex">
                                <p class="likes"><i class="ti-comments"></i> 02 Comments</p>
                                <p><i class="ti-heart"></i> 15 </p>
                            </div>

                        </div>
                        </div>

                </div>

                <div class="col-lg-4 col-md-6 ">
                    <div class="single-blog">
                        <div class="thumb">
                            <img class="img-fluid w-100" src={news[2].imagen} alt="" style={{height: 230}}/>
                        </div>
                        <div class="single-blog-content">
                            <p class="tag">{news[2].interes[0].nombre}</p>
                            <p class="date">{news[2].fecha}</p>
                            <h4>
                                <a href={"/noti/".concat(news[2].id)}>{news[2].resumen}</a>
                            </h4>
                            <div class="meta-bottom d-flex">
                                <p class="likes"><i class="ti-comments"></i> 02 Comments</p>
                                <p><i class="ti-heart"></i> 15 </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 col-md-6">
                    <div class="single-blog full_image">
                        <div class="thumb">
                            <img class="img-fluid w-100" src={news[3].imagen} alt="" style={{height: 470}}/>
                        </div>
                        <div class="single-blog-content">
                            <p class="tag">{news[3].interes[0].nombre}</p>
                            <p class="date">{news[3].fecha}</p>
                            <h4>
                                <a href={"/noti/".concat(news[3].id)}>{news[3].resumen}</a>
                            </h4>
                            <div class="meta-bottom d-flex">
                                <p class="likes"><i class="ti-comments"></i> 02 Comments</p>
                                <p><i class="ti-heart"></i>15</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </>
    );
}

export default App;

if (document.getElementById('start_blog_area')) {
    ReactDOM.render( <App /> , document.getElementById('start_blog_area'));
}

