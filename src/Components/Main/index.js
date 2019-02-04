import React, {Component} from 'react';
import './style.css';

import Profile from './Profile';
import NewVacancy from './NewVacancy';
import Search from './Search';
import VacancyList from './VacancyList';

export default class Main extends Component{
    render(){
        return(
            <main>
                <div className="main_column left_column">
                    <Profile/>
                    <NewVacancy/>
                </div>
                <div className="main_column right_column">
                    <h3 className="title_h3">Мои вакансии</h3>
                    <Search/>
                    <VacancyList/>
                </div>
            </main>
        )
    }
}