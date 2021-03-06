import React from 'react';
import ReactDOM from 'react-dom';
import { BrowserRouter as Router } from 'react-router-dom';
import {Route,Routes} from 'react-router';

import {  useState } from 'react';

import Category from "./pages/Category";
import Home from './pages/Home';
import Nav from './components/Nav';
import Login from './pages/Login';
import Register  from './pages/Register';

import Product from './pages/Product';
import Products from './pages/Products';
import Cartpages from './pages/Cartpages';
import CartPay from './pages/CartPay';
import Search from './pages/Search';
import './index.css';
import { RecoilRoot } from 'recoil';
/*
function App(){
    return <h1>Hello World</h1>
}*/
import { Cart } from './context/Cart';


const App =() => {
    const [cart,setCart]= useState([]);

    return <>
        <RecoilRoot>{}

            <Cart.Provider value={{cart,setCart}}>
            <Router>
                <div>
                    <Nav /> 
                </div>
                <Routes>
                    <Route path="/" element={<Home/>}></Route>
                    <Route path="/Login" element ={<Login />}></Route>
                    <Route path="/Register" element={<Register />}></Route>
                    <Route path="/category/:categoriename" element={<Category/>}></Route>
                    <Route path="/products/" element={<Products />}></Route>
                    <Route path="/product/:productId" element={<Product/>}></Route>
                    <Route path="/cart" element={<Cartpages/>}></Route>
                    <Route path="/pay" element={<CartPay />}></Route>
                    <Route path="/search/:texte" element={<Search />}></Route> 
                </Routes>
            </Router>
            </Cart.Provider>
        </RecoilRoot>
        
    </>
}
ReactDOM.render(
    <App />,
    document.getElementById('root')
)