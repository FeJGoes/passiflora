import React from 'react'
import { BrowserRouter, Route, Redirect } from 'react-router-dom'
import LoginPage from './pages/LoginPage'
import DashboardPage from './pages/DashboardPage'

function Routes() {
  return (
    <BrowserRouter>
      <Route path="/" exact component={LoginPage} />
      <Route path="/login" component={LoginPage} />
      <Route path="/dashboard" component={DashboardPage} />
    </BrowserRouter>
  )
}

export default Routes;
