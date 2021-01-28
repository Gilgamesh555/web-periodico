import React, {Component} from 'react';
import ReactDOM from 'react-dom';
import axios from 'axios'

// const http = axios.post('http://localhost/appwebper/public/login')
// .then((value) => {})

// class Login extends Component() {
//     constructor() {
//       super();
//       this.state = {
//         email: '',
//         password: '',
//       };
      // this.handleChange = this.handleChange.bind(this);
      // this.handleSubmit = this.handleSubmit.bind(this);
//     }
//
//     handleChange(event) {
//       this.setState({value: event.target.value});
//     }
//     handleSubmit(event) {
//       alert('A name was submitted: ' + this.state.value);
//       event.preventDefault();
//     }
//     render(){
//       return(
//         <form>
//            <label>
//              Name:
//              <input type="text" value={this.state.email} onChange={this.handleChange}/>
//            </label>
//            <input type="submit" value="Submit" />
//          </form>
//         <p {...console.log("dfsdf")}>dfsd</p>
//       );
//     }
//   }

class Login extends Component {
  constructor(props) {
    super(props);
    this.state = {
      email: '',
      password: '',
    };
    this.handleChange = this.handleChange.bind(this);
    this.handleSubmit = this.handleSubmit.bind(this);
  }
  handleChange(event) {
    this.setState({email: event.target.value});
  }
  handleSubmit(event) {
    axios.post('https://app.mac-softins.com/api/login', {email: this.state.email}).then((response) => {console.log(response)})
    alert('A name was submitted: ' + this.state.email);
    event.preventDefault();
  }
  render() {
    return(
      <form  onSubmit={this.handleSubmit}>
         <label>
           Name:
           <input type="text" onChange={this.handleChange}/>
           <input type="submit" value="Submit"/>
         </label>
       </form>
    )
  }
}

export default Login;

if (document.getElementById('Login')) {
    ReactDOM.render( <Login /> , document.getElementById('Login'));
}
