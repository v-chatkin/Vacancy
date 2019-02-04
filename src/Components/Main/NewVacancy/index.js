import React, {Component} from 'react';

export default class NewVacancy extends Component {
    render(){
        return(
            <section className="form">
                <h3>Создать вакансию</h3>
                <h4>Введите все данные</h4>
                <input type="text" placeholder="Наименование вакансии"/>
                <input type="text" placeholder="Опыт работы"/>
                <input type="text" placeholder="Образование"/>
                <input type="text" placeholder="Заработная плата"/>
                <input type="text" placeholder="График"/>
                <input type="text" placeholder="Обязанности"/>
                <input type="text" placeholder="Условия"/>
                <input type="text" placeholder="Требования"/>
                <input type="text" placeholder="Комментарии"/>
                <button>Создать</button>
            </section>
        )
    }
}