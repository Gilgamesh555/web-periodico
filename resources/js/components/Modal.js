import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Api from '../api/NewsApi'
import testapi from '../api/TestApi'


 
class App extends Component{
  constructor(props){
    super(props)
    this.state = {
      email: 'jotaro@gmail.com',
      rsp: 'null',
    }
  }
  render(){
    return(
        <div className="App">
          <form id="contact-form" onSubmit={this.handleSubmit.bind(this)} >
            <div className="form-group">
              <label htmlFor="name">Correo Electronico</label>
              <input type="text" className="form-control" value={this.state.name} onChange={this.onNameChange.bind(this)} />
              {this.state.rsp !== "null" ? (this.state.rsp === 'correo enviado' ? <p style={{color: 'green'}}>Correo Enviado!!</p> : <p style={{color: 'red'}}>{this.state.rsp === 'ya existe el email' ? "Ya existe el email" : "Correo no Valido"}</p>) : null}
            </div>
            {/* <div className="form-group">
              <label htmlFor="exampleInputEmail1">Email address</label>
              <input type="email" className="form-control" aria-describedby="emailHelp" value={this.state.email} onChange={this.onEmailChange.bind(this)} />
            </div>
            <div className="form-group">
              <label htmlFor="message">Message</label>
              <textarea className="form-control" rows="5" value={this.state.message} onChange={this.onMessageChange.bind(this)} />
            </div> */}
            <button type="submit" className="btn btn-primary">Enviar</button>
          </form>
        </div>
    )
  }
  onNameChange(event) {
    this.setState({email: event.target.value})
  }

  // onEmailChange(event) {
  //   this.setState({email: event.target.value})
  // }

  // onMessageChange(event) {
  //   this.setState({message: event.target.value})
  // }

  handleSubmit(e) {
    // console.log(this.state)
    e.preventDefault()
    let reg = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(reg.test(this.state.email) === false){
      this.setState({rsp: 'correo no valido'})
    }
    else{
      fetch(Api.concat('suscriptor'), {
        mode: 'cors',
        method: "POST",
        body: JSON.stringify(this.state),
        headers: {
          'Accept': 'application/json',
          'Content-Type': 'application/json'
        },
      }).then(
      (response) => (response.json())
        ).then((response)=> {
          if(response === 'ya existe el email'){
            this.setState({rsp: 'ya existe el email'})
          }
          else{
            this.setState({rsp: 'correo enviado'})
          }
        })
    }
  }
}

export default App;

if (document.getElementById('modal')) {
  ReactDOM.render( <App /> , document.getElementById('modal'));
}
 