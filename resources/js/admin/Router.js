import React from 'react'
import { BrowserRouter, Link, Route, Switch } from 'react-router-dom'
import PrivateRoute from './PrivateRoute'

import Dashboard from './views/Dashboard'
import Login from './views/Login'

const Main = () => {
    <Switch>
        <Route path="/yoloko" component={Dashboard}/>
        {/* <Route path="/yoloko" component={Dashboard}/> */}
        <Route path="/login" component={Login} />
    </Switch>
}

export default Main