import axios from 'axios';
import React, {useState, useEffect} from 'react'
import ReactDOM from 'react-dom';
import Pagination from 'react-js-pagination';
import { Card } from 'semantic-ui-react';
import CategoryApi from '../api/NewsApi'
import TestApi from '../api/TestApi'

function App({data_id}) {
    const [data, setData] = useState([])
    const [section, setSection] = useState([])

    const renderNews = () => {
        return(
            <>
                {data.map((index, key) => {
                    return(
                        <Card key={key}>
                        <div class="col-lg-4" style={{marginTop: "40px"}}>
                            <div class="media contact-info">
                                <span class="contact-info__icon"><i class="ti-home"></i></span>
                                <div class="media-body">
                                <h3>{index.unidad}</h3>
                                <p>---</p>
                                </div>
                            </div>
                            <div class="media contact-info">
                                <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                                <div class="media-body">
                                <h3><a href={"tel:".concat(index.telefono)}>{index.telefono}</a></h3>
                                <p>Disponible</p>
                                </div>
                            </div>
                            <div class="media contact-info">
                                <span class="contact-info__icon"><i class="ti-user"></i></span>
                                <div class="media-body">
                                <h3><a href="mailto:support@colorlib.com">{index.persona}</a></h3>
                                <p>Responsable</p>  
                                </div>
                            </div>
                        </div>
                        </Card>
                    )
                })}
            </>                   
        )
    }

    async function getData(pageNumber = 1){
        const response = fetch(CategoryApi.concat('carpeta'))
        // const response = fetch(TestApi.concat('carpeta'))
        .then(res => res.json())
        .then(
            (response) => {
                // console.log("AA")
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
                    <h4>Contactos</h4>
                </div>           
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="blog_left_sidebar">
                    {data != null && renderNews()}
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog_right_sidebar">
                    <aside class="single_sidebar_widget search_widget">
                        <form action="#">
                          <div class="form-group">
                            <div class="input-group mb-3">
                              <input type="text" class="form-control" placeholder="Search Keyword" />
                              <div class="input-group-append">
                                <button class="btn" type="button"><i class="ti-search"></i></button>
                              </div>
                            </div>
                          </div>
                          <button class="button rounded-0 primary-bg text-white w-100" type="submit">Search</button>
                        </form>
                    </aside>

                    <aside class="single_sidebar_widget post_category_widget">
                      <h4 class="widget_title">Category</h4>
                      <ul class="list cat-list">
                          <li>
                              <a href="#" class="d-flex">
                                  <p>Resaurant food</p>
                                  <p>(37)</p>
                              </a>
                          </li>
                          <li>
                              <a href="#" class="d-flex">
                                  <p>Travel news</p>
                                  <p>(10)</p>
                              </a>
                          </li>
                          <li>
                              <a href="#" class="d-flex">
                                  <p>Modern technology</p>
                                  <p>(03)</p>
                              </a>
                          </li>
                          <li>
                              <a href="#" class="d-flex">
                                  <p>Product</p>
                                  <p>(11)</p>
                              </a>
                          </li>
                          <li>
                              <a href="#" class="d-flex">
                                  <p>Inspiration</p>
                                  <p>21</p>
                              </a>
                          </li>
                          <li>
                              <a href="#" class="d-flex">
                                  <p>Health Care (21)</p>
                                  <p>09</p>
                              </a>
                          </li>
                      </ul>
                    </aside>

                    <aside class="single_sidebar_widget popular_post_widget">
                        <h3 class="widget_title">Recent Post</h3>
                        <div class="media post_item">
                            <img src="img/blog/popular-post/post1.jpg" alt="post" />
                            <div class="media-body">
                                <a href="single-blog.html">
                                    <h3>From life was you fish...</h3>
                                </a>
                                <p>January 12, 2019</p>
                            </div>
                        </div>
                        <div class="media post_item">
                            <img src="img/blog/popular-post/post2.jpg" alt="post" />                              
                            <div class="media-body">
                                <a href="single-blog.html">
                                    <h3>The Amazing Hubble</h3>
                                </a>
                                <p>02 Hours ago</p>
                            </div>
                        </div>
                        <div class="media post_item">
                            <img src="img/blog/popular-post/post3.jpg" alt="post" />                              
                            <div class="media-body">
                                <a href="single-blog.html">
                                    <h3>Astronomy Or Astrology</h3>
                                </a>
                                <p>03 Hours ago</p>
                            </div>
                        </div>
                        <div class="media post_item">
                            <img src="img/blog/popular-post/post4.jpg" alt="post" />
                            <div class="media-body">
                                <a href="single-blog.html">
                                    <h3>Asteroids telescope</h3>
                                </a>
                                <p>01 Hours ago</p>
                            </div>
                        </div>
                    </aside>
                    <aside class="single_sidebar_widget tag_cloud_widget">
                        <h4 class="widget_title">Tag Clouds</h4>
                        <ul class="list">
                            <li>
                                <a href="#">project</a>
                            </li>
                            <li>
                                <a href="#">love</a>
                            </li>
                            <li>
                                <a href="#">technology</a>
                            </li>
                            <li>
                                <a href="#">travel</a>
                            </li>
                            <li>
                                <a href="#">restaurant</a>
                            </li>
                            <li>
                                <a href="#">life style</a>
                            </li>
                            <li>
                                <a href="#">design</a>
                            </li>
                            <li>
                                <a href="#">illustration</a>
                            </li>
                        </ul>
                    </aside>


                    <aside class="single_sidebar_widget instagram_feeds">
                      <h4 class="widget_title">Instagram Feeds</h4>
                      <ul class="instagram_row flex-wrap">
                          <li>
                              <a href="#">
                                <img class="img-fluid" src="img/instagram/widget-i1.png" alt="" />
                              </a>
                          </li>
                          <li>
                              <a href="#">
                                <img class="img-fluid" src="img/instagram/widget-i2.png" alt="" />
                              </a>
                          </li>
                          <li>
                              <a href="#">
                                <img class="img-fluid" src="img/instagram/widget-i3.png" alt="" />
                              </a>
                          </li>
                          <li>
                              <a href="#">
                                <img class="img-fluid" src="img/instagram/widget-i4.png" alt="" />
                              </a>
                          </li>
                          <li>
                              <a href="#">
                                <img class="img-fluid" src="img/instagram/widget-i5.png" alt="" />
                              </a>
                          </li>
                          <li>
                              <a href="#">
                                <img class="img-fluid" src="img/instagram/widget-i6.png" alt="" />
                              </a>
                          </li>
                      </ul>
                    </aside>


                    <aside class="single_sidebar_widget newsletter_widget">
                      <h4 class="widget_title">Newsletter</h4>

                      <form action="#">
                        <div class="form-group">
                          <input type="email" class="form-control" placeholder="Enter email" required />
                        </div>
                        <button class="button rounded-0 primary-bg text-white w-100" type="submit">Subscribe</button>
                      </form>
                    </aside>
                </div>
            </div>
        </div>
    </>
    );
}

export default App;

if (document.getElementById('contact_index')) {
    const element =  document.getElementById('contact_index');

    const props = Object.assign({}, element.dataset);

    ReactDOM.render( <App data_id={props}/> , element);
}

