import { startCase } from 'lodash'
import React from 'react'
import { Redirect, Route, withRouter} from 'react-router-dom'
import App from '../components/ModalLogin'


let state_of_state = localStorage['appState']


if(!state_of_state){
    let appState = {
        isLoggedIn: false,
        user: {}
    }
    localStorage['appState'] = JSON.stringify(appState)
}

let state = localStorage['appState']
let AppState = JSON.parse(state)


const Auth = {
    isLoggedIn: AppState.isLoggedIn,
    user: AppState
}

function authMod() {
    state = JSON.parse(localStorage["appState"])
    Auth.isLoggedIn = state.isLoggedIn
    Auth.user = state
    console.log(Auth.isLoggedIn)
}

const PrivateRoute = ({
    component: Component, path, ...props
}) => (
    authMod(),
    <Route path={path} {...props} render={() => (
        Auth.isLoggedIn ? (<Component {...props}
            />) 
            : (<Redirect to={{pathname: '/nocausa', 
        state:{
            prevLocation : path,
            error: 'Debes logearte primero!',
        }
    }} />)
    )}/>
)

export default withRouter(PrivateRoute);