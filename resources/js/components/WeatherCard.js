import React, {useState, useEffect, Component} from 'react'
import ReactDOM from 'react-dom';
import CategoryApi from '../api/NewsApi'
import '../../extra-styles/weather.css'

class App extends Component {
    constructor(props){
        super(props)
        this.state = {
            latitude: 0,
            longitude: 0,
            forecast: [],
            error: '',
        }
    }

    componentDidMount() {
        // Get the device lotacion
        this.getLocation();
    }

    getLocation() {
        // Get the current position of the device
        navigator.geolocation.getCurrentPosition( 
          (position) => {
                this.setState(
                    (prevState) => ({
                        latitude: position.coords.latitude,
                        longitude: position.coords.longitude
                    }), () => { this.getWeather(); }
                )
            },
            (error) => this.setState({ forecast: error.message }),
            {timeout: 20000, maximumAge: 1000}
        ) 
   }

   getWeather() {
       //Construct the API url
       let url =  'https://api.openweathermap.org/data/2.5/weather?lat=' + this.state.latitude + '&lon=' +this.state.longitude + '&units=metric&appid=e1749ff40f9a5a3b52a2b5f6123f7843'

       // Call the API, and set the state of the weather forecast
    //   ForecastAPI.get('weather?lat=' + this.state.latitude + '&lon=' +this.state.longitude + '&units=metric&appid=e1749ff40f9a5a3b52a2b5f6123f7843')
    //   .then(res => {
    //     this.setState((prevState, props) => ({
    //       forecast: res.data
    //     }));
    //   })
    //   .catch(function(error){
    //       console.log(error)
    //   })


      fetch(url)
      .then(response => response.json())
      .then(data => {
        //   console.log(data)
        this.setState((prevState, props) => ({
          forecast: data
        }));
      })
    }
    render() {
        let time;
        
        // Create a new date from the passed date time
        var date = new Date()
        
        // Hours part from the timestamp
        var hours = date.getHours()
        //Minutes part from the timestamp
        var minutes = "0" + date.getMinutes()

        time = hours + ':' + minutes.substr(-2)
        if(this.state.forecast.main == null){
            return(
                <div>
                    Cargando...  
                </div>
            )
        }
        return(	
            <>
            <h1 style={{textAlign: 'center', color: 'black'}}> 
                El clima
            </h1>
            <div class="row justify-content-center" style={{marginTop: 20}}>
                <div class="col-12 col-md-6 col-sm-12 col-xs-12">
                    <div class="card p-4">
                        <div class="d-flex">
                            <h6 class="flex-grow-1">{this.state.forecast.name}</h6>
                            <h6>{time}</h6>
                        </div>
                        <div class="d-flex flex-column temp mt-5 mb-3">
                            <h1 class="mb-0 font-weight-bold" id="heading"> {Math.round(this.state.forecast.main.temp * 10) / 10}&#8451; </h1> <span class="small grey">{this.state.forecast.weather[0].description}</span>
                        </div>
                        <div class="d-flex">
                            <div class="temp-details flex-grow-1">
                                <p class="my-1"> <img src="https://i.imgur.com/B9kqOzp.png" height="17px"/> <span>{this.state.forecast.wind.speed} km/h</span> </p>
                                <p class="my-1"> <i class="fa fa-tint mr-2" aria-hidden="true"></i> <span> {this.state.forecast.main.humidity}% </span> </p>
                                {/* <p class="my-1"> <img src="https://i.imgur.com/wGSJ8C5.png" height="17px" /> <span> 0.2h </span> </p> */}
                            </div>
                            <div> <img src={"https://openweathermap.org/img/w/" +
                                    this.state.forecast.weather[0].icon + ".png"} width="100px"/> </div>
                        </div>
                    </div>
                </div>
            </div>
            </>
        )
    }
}


export default App;

if (document.getElementById('weather_card')) {
    ReactDOM.render( <App /> , document.getElementById('weather_card'));
}

