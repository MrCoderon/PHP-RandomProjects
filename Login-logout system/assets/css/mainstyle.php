<?php 
header("Content-type: text/css");
?>

body {
  background-color: rgba(11, 11, 44, 1);
}

* {
  font-family: arial, helvetica;
  text-decoration: none;
}

a {
  color: white;
}

input {
outline: none;
font-size: 1em;
color: white;
}

input[type=text], input[type=password] {
height: 1.4em;
font-size: 1.2em;
text-shadow: 1px 3px 6px black;
letter-spacing: 0.06em;
}

::-webkit-input-placeholder {
  color: white;
  text-shadow: 1px 3px 6px black;
}
::-moz-input-placeholder {
  color: white;
  text-shadow: 1px 3px 6px black;
}
::-ms-input-placeholder {
  color: white;
  text-shadow: 1px 3px 6px black;
}
:-moz-input-placeholder {
  color: white;
  text-shadow: 1px 3px 6px black;
}

.form, .form2 {
  height: 370px;
  width: 15em;
  margin: 5em auto;
  display: flex;
  flex-direction: column;
  padding: 0em 4em 4em 4em;
  border-radius: 10px;
  box-shadow: 0px 0px 80px -18px black;
  justify-content: space-around;
  position: relative;
  overflow: hidden;
}

.form::after, .form2::after {
  content: "";
  background:url(../img/turtle.jpg);
  background-size: 160% 100%;
  background-repeat: no-repeat;
  background-position: 100% 100%;
  height: 100%;
  width: 100%;
  position: absolute;
  z-index: -3;
  top: 0;
  left: 0;
}

.form::before, .form2::before {
  content: "";
  background-color: rgba(0, 0, 0, 0.5);
  height: 100%;
  width: 100%;
  position: absolute;
  top: 0;
  z-index: -2;
  left: 0;
}

.form h1, .form2 h1 {
  text-align: center;
  font-weight: 100;
  width: 100%;
  color: white;
  text-shadow: 1px 3px 6px black;
}

.first {
  height: 2.5em;
  border: 2px solid white;
  background-color: transparent;
  border-top: 0;
  border-right: 0;
  border-left: 0;
}

.last {
  height: 2.5em;
  border: 2px solid white;
  border-top: 0;
  border-right: 0;
  border-left: 0;
  background-color: transparent;
}

.user {
  height: 2.5em;
  border: 2px solid white;
  border-top: 0;
  border-right: 0;
  border-left: 0;
  background-color: transparent;
}

.pass {
  height: 2.5em;
  border: 2px solid white;
  border-top: 0;
  border-right: 0;
  border-left: 0;
  background-color: transparent;
}

.button {
  height: 3em;
  border-radius: 5px;
  border: 0;
  color: white;
  background-color: rgba(11, 11, 44, 1);
  cursor: pointer;
  box-shadow: 1px 1px 20px 0px black;
  transition: 0.3s ease;
}

.button:hover {
  background-color: rgba(11, 11, 24, 1); 
}

.signup, .login {
width: 4.8em;
font-size: 14px;
position: absolute;
right: 0;
bottom: 0;
margin: 0em 1em 1em 0em;
overflow: hidden;
border-bottom: 1px solid white;
transition: 0.1s ease;
}

.signup:hover, .login:hover {
  border-color: grey;
}

.login {
width: 3.5em;
}

.signup a, .login a {
  display: block;
  height: 100%;
  width: 100%;
  position:relative;
  padding: 0.4em;
  transition: 0.1s ease;
}

.signup a:hover, .login a:hover {
  color: grey;
}

.main {
color: white;
font-size: 6em;
display:flex;
flex-direction: row;
justify-content: center;
}

.loginstatus {
  color: white;
  font-size: 2em;
  z-index: 100;
  text-align: center;
  top: -2em;
  position: relative;
}

@keyframes spin {
0% {
transform: rotate(0deg);
}
100% {
transform: rotate(360deg);
}
}

.loader {
border: 16px solid transparent;
border-top: 16px solid white;
border-radius: 50%;
width: 120px;
height: 120px;
animation: spin 1s linear infinite;
margin: 0 auto;
}

.loginloader {
position: relative;
top: -5em;
width: 40px;
height: 40px;
}