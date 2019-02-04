import React, {Component} from 'react';
import './style.css';

export default class SignIn extends Component {

    render(){
        return(
            <main className="sign_in_container">
                <section className="form sign_in">
                    <h3>Вход</h3>
                    <h4>Введите почту и пароль</h4>
                    <input type="text" placeholder="Почта"/>
                    <input type="password" placeholder="Пароль"/>
                    <button>Войти</button>
                </section>
            </main>

        )
    }
};

