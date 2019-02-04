import React, {Component} from 'react';
import './style.css';

export default class Search extends Component {
    render(){
        return(
            <section className="form search_box">
                <input type="text" placeholder="Поиск..."/>
                <button>Найти</button>
            </section>
        )
    }
}

// 3 работодателя
// 2 пользователя
// 2-2-10

// Запросы:
// Вход
// Регистрация
// Добавление вакансии
// Удаление
// Изменение
// Отклик
// Удаление из отклика
