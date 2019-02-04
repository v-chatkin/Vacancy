import React, { Component } from 'react';
import './Static/css/index.css';

import Header from './Components/StaticComponents/Header';
import SignIn from './Components/SignIn';
import Main from './Components/Main';

import {Route,HashRouter} from 'react-router-dom';

export default class App extends Component{
    render(){
        return(
            <HashRouter>
                <div>
                    <Header/>
                    <Route exact path="/" component={Main}/>
                    <Route path="/sign_in" component={SignIn}/>
                    {/*<Route path="/products" component={Task}/>*/}
                    {/*<Route path="/shop" component={Shop}/>*/}
                    {/*<Route path="/news" component={News}/>*/}
                    {/*<Route path="/weather" component={Weather}/>*/}
                </div>
            </HashRouter>
        )
    }
}