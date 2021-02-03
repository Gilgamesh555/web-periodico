
import React, {Component} from 'react';
import ReactDOM from 'react-dom';
import {BrowserRouter, Link, Route, Switch} from 'react-router-dom';
import Main from './Router'
import Dashboard from './views/Dashboard'
import PrivateRoute from './PrivateRoute'
import Login from './views/Login'

class Index extends Component{
    render(){
        return(
            <BrowserRouter>
                <Switch>
                    <PrivateRoute path="/yopublico" component={Dashboard}/>
                    <Route path="/loginpub" component={Login} />
                </Switch>
            </BrowserRouter>
        )
    }
}

if (document.getElementById('pub_index')) {
    ReactDOM.render( <Index /> , document.getElementById('pub_index'));
}