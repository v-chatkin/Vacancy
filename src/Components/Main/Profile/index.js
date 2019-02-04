import React, {Component} from 'react';

export default class Profile extends Component {
    render(){
        return(
            <section className="form info_profile">
                <h3>Информация о работодателе</h3>
                <h4>Ваша информация</h4>
                <div className="form_box">
                    <p className="title_form">ФИО:</p>
                    <p>Васенькин Николай Егорович</p>
                </div>
                <div className="form_box">
                    <p className="title_form">Компания:</p>
                    <p>ОАО "АЛО"</p>
                </div>
                <div className="form_box">
                    <p className="title_form">Должность:</p>
                    <p>Человек обыкновенный</p>
                </div>
                <div className="form_box">
                    <p className="title_form">Почта:</p>
                    <p>test@mail.ru</p>
                </div>
            </section>
        )
    }
}