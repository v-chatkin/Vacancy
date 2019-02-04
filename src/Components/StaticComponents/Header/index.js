import React, { Component } from 'react';
import './style.css';

export default class Header extends Component{

    render(){
        return(
            <header>
                <a href="#/" >Logo</a>
                <a href="#/sign_in">Вход</a>
            </header>
        )
    }

}