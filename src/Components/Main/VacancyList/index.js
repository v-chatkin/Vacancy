import React, {Component} from 'react';

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
            <div>
                {vacancy_list.map((vac, index) => {
                    return(
                        <section className="card" key={index}>
                            <article className="left_card">
                                <div className="title_card">
                                    <h2>{vac.name}</h2>
                                    <div className="line"/>
                                    <i>{vac.education}</i>
                                </div>
                                <div className="description">
                                    <b>Описание:</b>{vac.description}
                                </div>
                                {show_more &&
                                    <div>
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
                                    </div>
                                }
                            </article>
                            <article className="right_card">
                                <div className="title_card">
                                    <h2>{vac.price}</h2>
                                    <div className="line"/>
                                    <i>{vac.experience}</i>
                                </div>
                                <button className="more"
                                        onClick={() => this.setState({show_more: !show_more})}
                                >
                                    {show_more ? "Свернуть" : "Подробнее"}
                                </button>
                            </article>
                        </section>
                    )
                })}
            </div>

        )
    }
}