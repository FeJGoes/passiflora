import React from 'react';
import { Component } from 'react'
import {HeaderComponent} from '../components/header/header'

class LoginPage extends Component {
    render() {
        return (
                <form>
                    <label>
                        <span>*</span> Email
                        <input type="email" required/>
                    </label>
                    <label>
                        <span>*</span> Senha
                        <input type="password" required/>
                    </label>
                    <button type="submit">Entrar</button>
                </form>
        );
    }
}

export default LoginPage;

