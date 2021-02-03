import React, {Component} from 'react';
import {withRouter} from "react-router-dom";
import LoginContainer from '../../components/ModalLogin'


class Login extends Component {
  constructor(props) {
    super(props)
    this.state = {
      redirect: props.location,
    };
  }
  render() {
    return (
      <div className="content">
        <LoginContainer {...this.props}  redirect={this.state.redirect} />   
      </div>
    )
  }
}
export default withRouter(Login)