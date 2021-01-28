import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Api from '../api/NewsApi'
import testapi from '../api/TestApi'
import localapi from '../api/LocalApi'


 
class App extends Component{
  constructor(props){
    super(props)
    this.state = {
      ru: '', 
      name: '',
      f_nac: '',
      email: '',
      password: '',
      password_confirmation: '',
      tipo: 'est',
      errors: [],
      rsp: '',
    }
  }
  render(){
    return(
        <div >
          <form id="contact-form" onSubmit={this.handleSubmit.bind(this)}>
            <div className="form-group">
              <label  htmlFor="exampleInputEmail1">RU:</label>
              <input type="text" class="form-control" value={this.state.ru} onChange={this.onRuChange.bind(this)} />
              {/* <p style={{color:'red'}}>{this.state.errors.email!=null ? (this.state.errors.email[0].indexOf('required') != -1 ? 'El campo RU no puede ser vacio' : 'El RU ya esta registrado') : null}</p> */}
              {<p style={{color: 'red'}}>{this.ruValidation()}</p>}
            </div>
            <div className="form-group">
              <label htmlFor="exampleInputPassword1">Fecha de Nac:</label>
              <input type="date" className="form-control" value={this.state.f_nac} onChange={this.onDateChange.bind(this)} placeholder="Ejemplo: 1997-07-22"/>
              {<p style={{color: 'red'}}>{this.f_nacValidation()}</p>}
            </div>
            <div className="form-group">
              <label htmlFor="exampleInputPassword1">Correo Electronico:</label>
              <input type="email" className="form-control" value={this.state.email} onChange={this.onEmailChange.bind(this)} placeholder="Ejemplo: ejemplo@correo.com"/>
              {<p style={{color: 'red'}}>{this.emailValidation()}</p>}
            </div>
            <div className="form-group">
              <label htmlFor="exampleInputPassword1">Contrasena:</label>
              <input type="password" className="form-control" value={this.state.password} onChange={this.onPasswordChange.bind(this)} placeholder="Minimo 8 caracteres"/>
              {<p style={{color: 'red'}}>{this.passwordValidation()}</p>}
            </div>
            <div className="form-group">
              <label htmlFor="exampleInputPassword1">Confirmar Contrasena:</label>
              <input type="password" className="form-control" value={this.state.password_confirmation} onChange={this.onConfirmPasswordChange.bind(this)} />
            </div>
            <button type="submit" class="btn btn-primary">Ingresar</button>
            {<p style={{color: 'red'}}>{this.univValidation()}</p>}
            {/* <button type="submit" className="btn btn-primary">Ingresar</button> */}
          </form>
        </div>
    )
  }
  onRuChange(event) {
    this.setState({ru: event.target.value})
  }

  onDateChange(event) {
    this.setState({f_nac: event.target.value})
  }
  
  onEmailChange(event) {
    this.setState({email: event.target.value})
  }

  onNameChange(event) {
    this.setState({name: event.target.value})
  }

  onPasswordChange(event) {
    this.setState({password: event.target.value})
  }

  onConfirmPasswordChange(event) {
    this.setState({password_confirmation: event.target.value})
  }


  ruValidation(){
    if(this.state.errors != null){
      if(this.state.errors.ru != null){
        if(this.state.errors.ru[0].indexOf('required') != -1)return 'El campo RU debe ser llenado obligatoriamente'
        if(this.state.errors.ru[0].indexOf('taken') != -1)return 'El RU ya esta registrado'
      }
    }
    return null
  }

  f_nacValidation(){
    if(this.state.errors != null){
      if(this.state.errors.f_nac != null){
        if(this.state.errors.f_nac[0].indexOf('required') != -1)return 'El campo Fecha de Nacimiento debe ser llenado obligatoriamente'
        // if(this.state.errors.f_nac[0].indexOf('taken') != -1)return 'La Fecha de Nacimiento ya esta registrado'
      }
    }
    return null
  }

  emailValidation(){
    if(this.state.errors != null){
      if(this.state.errors.email != null){
        if(this.state.errors.email[0].indexOf('required') != -1)return 'El campo Correo Electronico debe ser llenado obligatoriamente'
        if(this.state.errors.email[0].indexOf('taken') != -1)return 'El Correo Electronico ya esta registrado'
      }
    }
    return null
  }

  passwordValidation(){
    if(this.state.errors != null){
      if(this.state.errors.password != null){
        if(this.state.errors.password[0].indexOf('required') != -1)return 'El campo Contrasena debe ser llenado obligatoriamente'
        if(this.state.errors.password[0].indexOf('least') != -1)return 'La contrasena debe tener al menos 8 caracteres'
        if(this.state.errors.password[0].indexOf('match') != -1)return 'Las contrasenas no coinciden'
      }
    }
    return null
  }

  univValidation(){
    if(this.state.errors != null)return null
    if(this.state.rsp != null){
      if(this.state.rsp === 'no'){
        return 'RU o Fecha de Nacimiento Incorrectos'
      }
    }
    return null
  }

  handleSubmit(e) {
    e.preventDefault()
    // fetch(testapi.concat('valian').concat('/').concat(this.state.ru).concat('/').concat(this.state.password))
    // .then(res => res.json())
    // .then(
    //     (response) => {
    //         if(response === 'si')this.setState({rsp: 'si'})
    //         else this.setState({rsp: 'no'})
    //     },
    //     (error) => {
    //         this.setState({rsp: 'no'})
    //     }
    // )
    fetch(localapi.concat('register'), {
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
        // console.log(response)
        if(response.errors != null){
          this.setState({errors: response.errors});
        }else{
          this.setState({errors: null})
          fetch(testapi.concat('valian').concat('/').concat(this.state.ru).concat('/').concat(this.state.f_nac))
          .then(res => res.json())
          .then(
              (response) => {
                  // console.log(response)
                  if(response === 'si'){
                    this.setState({rsp: 'si'})
                    fetch(testapi.concat('rest_uni').concat('/').concat(this.state.ru))
                    .then(res => res.json())
                    .then(
                        (response) => {
                            // console.log(response)
                            this.setState({name: response.nombres})
                            fetch(localapi.concat('lastregister'), {
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
                              if(response.success != null){
                                // console.log(response)
                                $(".modal").modal("hide");
                                $(".modal-backdrop").remove();
                                alert("Registro Completo!. Revisa tu correo para Verificar tu Cuenta")
                              }
                              else{
                                alert("Error: No se pudo registrar. Contactese con data center")
                              }
                            },
                            (error)=>{
                              console.log(error)
                            }
                            )
                        },
                        (error) => {
                            console.log(error);
                            this.setState({rsp: 'no'})
                        }
                    )         
                  }
                  else{
                    this.setState({rsp: 'no'})
                  } 
              },
              (error) => {
                  console.log(error);
                  this.setState({rsp: 'no'})
              }
          )
        }
    },
      (error)=>{
        console.log(error)
      }
    )
  }
}

export default App;
 
if (document.getElementById('modal_doc')) {
  ReactDOM.render( <App /> , document.getElementById('modal_doc'));
}
 