import React, {Component} from 'react';
import './style.css';

const vacancy_list = [
    {
        id: 5,
        name: "Название Вакансии",
        price: "З/П",
        education: "Образование",
        experience: "Опыт работы",
        description: "Описание",
        schedule: "Сутки через 2-е",
        duties: "Помогать маме на кухне",
        conditions: "В целом не плохие, стои только захотеть",
        requirements: "Быть хорошим человеком"
    },
    {
        id: "",
        name: "",
        type: "",
        password: "",
        email: "",
        worK: "",
        prof: "",
        array_vacancy: "",
    },
];

export default class VacancyList extends Component {

    constructor(props){
        super(props);
        this.state = {
            show_more: false,
        }
    }

    render(){
        const {show_more} = this.state;
        return(
            <div className="vacancy_list">
                {vacancy_list.map((vac, index) => {
                    return(
                        <section className="card" key={index}>
                            <article className="left_card">
                                <div className="title_card">
                                    <h2>{vac.name}</h2>
                                    <div className="line"/>
                                    <i>{vac.education}</i>
                                </div>
                                <div className="card_info">
                                    <b>Описание:</b>{vac.description}
                                </div>
                                <div className="card_info">
                                    <b>График:</b>{vac.schedule}
                                </div>
                                <div className="card_info">
                                    <b>Обязанности:</b>{vac.duties}
                                </div>
                                <div className="card_info">
                                    <b>Условия:</b>{vac.conditions}
                                </div>
                                <div className="card_info">
                                    <b>Требования:</b>{vac.requirements}
                                </div>
                            </article>
                            <article className="right_card">
                                <div className="title_card">
                                    <h2>{vac.price}</h2>
                                    <div className="line"/>
                                    <i>{vac.experience}</i>
                                </div>
                                <div>

                                <button className='settings_btn'>Изменить</button>
                                <button className='settings_btn'>Изменить</button>
                                <button className='settings_btn'>Изменить</button>
                                </div>

                            </article>
                        </section>
                    )
                })}
                <div className="panel_vacancy">
                    <button className="active">1</button>
                    <button>2</button>
                    <button>3</button>
                </div>
            </div>

        )
    }
}