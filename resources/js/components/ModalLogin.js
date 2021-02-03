import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Api from '../api/NewsApi'
import testapi from '../api/TestApi'
import localapi  from '../api/LocalApi'
import {Link, Redirect, withRouter} from 'react-router-dom'
import '../../extra-styles/loginpub.css'
import { toPlainObject } from 'lodash';

class App extends Component{
  constructor(props){
    super(props)
    this.state = {
      email: '',
      rsp: null,
      password: '',
    }
  }
  render(){
    return(
      <>
      <div class="sidenav">
         <div class="login-main-text">
            <h2>UATF Yo Publico!!<br/> Inicio de Sesion</h2>
            <p>Universidad Autonoma Tomas Frias</p>
         </div>
      </div>
      <div class="main">
         <div class="col-md-6 col-sm-12">
            <div class="login-form">
            <form id="contact-form" onSubmit={this.handleSubmit.bind(this)} >
              <div className="form-group">
                <label htmlFor="name">Correo Electronico</label>
                <input type="text" className="form-control" value={this.state.name} onChange={this.onNameChange.bind(this)} />
                {/* {this.state.rsp !== "null" ? (this.state.rsp === 'correo enviado' ? <p style={{color: 'green'}}>Correo Enviado!!</p> : <p style={{color: 'red'}}>{this.state.rsp === 'ya existe el email' ? "Ya existe el email" : "Correo no Valido"}</p>) : null} */}
              </div>
              <div className="form-group">
                <label htmlFor="exampleInputPassword1">Contrasena:</label>
                <input type="password" className="form-control" value={this.state.password} onChange={this.onPasswordChange.bind(this)} placeholder="****"/>
                {/* {<p style={{color: 'red'}}>{this.passwordValidation()}</p>} */}
              </div>
              <button type="submit" className="btn btn-black">Enviar</button>
            </form>
            </div>
         </div>
      </div>
      </>
        // <div className="App">
        //   <form id="contact-form" onSubmit={this.handleSubmit.bind(this)} >
        //     <div className="form-group">
        //       <label htmlFor="name">Correo Electronico</label>
        //       <input type="text" className="form-control" value={this.state.name} onChange={this.onNameChange.bind(this)} />
        //       {/* {this.state.rsp !== "null" ? (this.state.rsp === 'correo enviado' ? <p style={{color: 'green'}}>Correo Enviado!!</p> : <p style={{color: 'red'}}>{this.state.rsp === 'ya existe el email' ? "Ya existe el email" : "Correo no Valido"}</p>) : null} */}
        //     </div>
        //     <div className="form-group">
        //       <label htmlFor="exampleInputPassword1">Contrasena:</label>
        //       <input type="password" className="form-control" value={this.state.password} onChange={this.onPasswordChange.bind(this)} placeholder="****"/>
        //       {/* {<p style={{color: 'red'}}>{this.passwordValidation()}</p>} */}
        //     </div>
        //     <button type="submit" className="btn btn-primary">Enviar</button>
        //   </form>
        // </div>
    )
  }
  onNameChange(event) {
    this.setState({email: event.target.value})
  }

  onPasswordChange(event) {
      this.setState({password: event.target.value})
  }

  // onEmailChange(event) {
  //   this.setState({email: event.target.value})
  // }

  // onMessageChange(event) {
  //   this.setState({message: event.target.value})
  // }

  handleSubmit(e) {
    e.preventDefault();
    fetch(localapi.concat('login'), {
        mode: 'cors',
        method: "POST",
        body: JSON.stringify(this.state),
        headers: {
          'Accept': 'application/json',
          'Content-Type': 'application/json'
        },
      })
      .then((response) => (response.json()))
      .then((response)=> {
        console.log(response)
        if(response.success){
          var appState = {
            isLoggedIn: true,
            user: {email: this.state.email, password: this.state.password, access_token: response.access_token, date_token: response.expires_at}
          };  
           
          const closeSession = () => {
            appState.isLoggedIn = false;
            localStorage["appState"] = JSON.stringify(appState);
            alert('Session Cerrada, vuelve a Iniciar Sesion')
            this.props.history.push('/loginpub')
            clearInterval(SessionInterval);
          }
        
          var SessionInterval = setInterval(function(){ closeSession() }, 3600000)
          localStorage["appState"] = JSON.stringify(appState);
          this.props.history.push('/yopublico')
        } 
        else{
          alert('Datos Incorrectos')
        }   
    })
  }
}

export default App;

if (document.getElementById('modal_login')) {
  ReactDOM.render( <App /> , document.getElementById('modal_login'));
}
 