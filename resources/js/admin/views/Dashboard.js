import React, {Component} from 'react'
import ReactDOM from 'react-dom'
import {BrowserRouter, Link, Route, Switch} from 'react-router-dom'

class Index extends Component{
    constructor(props){
        super(props)
        this.state ={
            isLoggedIn: false,
            user: {}
        }
    }

    componentWillMount(){
        let state = localStorage["appState"]
        if(state){
            let appState = JSON.parse(state)
            this.setState({isLoggedIn: appState.isLoggedIn, user:appState.user})
        }
    }

    checkUser(){
        let date = new Date()
        if(Date.parse(this.state.user.date_token)<date){
            this.setState({isLoggedIn: false})
            localStorage["appState"] = JSON.stringify(this.state);
        }
    }

    render(){
        return(
            <div>
                {this.checkUser()}
                <p>HOLA MUNDO</p>
            </div>
        )
    }
}
export default Index;