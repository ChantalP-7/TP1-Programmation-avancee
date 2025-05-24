<?php
   header('content-type: text/css');
?>

@import url('https://fonts.googleapis.com/css2?family=Flamenco&family=Overlock&display=swap');

* {
    margin: 0;
    padding: 0;
}


.white > th {
    color: white;
}

.formel {
    font-family: Tahoma;
    font-weigth: 400px;
}

header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: rgb(1, 47, 107);
    padding: 20px;
}

header h1 {
    font-weight: 400;
}

.hero {
    min-height: 550px;
    background-image: url('./image/burger.jpg');
    background-size: cover;
    background-position: center;
    margin-bottom: 50px;
}

main { 
    min-height: 100vh;
}


footer {
    background-color: rgb(1, 47, 107);
    color: white;   
    text-align: center;
    padding-top: 3px;
    padding-bottom: 3px;
    align-itemps: center;
}

footer > h3 {
    color: white;
    font-weight: 400;
    font-size: 20px;
}

nav {
    
}

nav ul {
    display: flex;
    flex-direction : row;
    alig-items: center;
    gap: 20px;
    color: white;
    list-style: none;
}

nav a {
    text-decoration: none;
    color: inherit;
    font-size: 18px;
    font-weight: 400;
}

nav a:hover {
    text-decoration: underline;
}

.titre {
    color: white;
}

.div-un-article {
    display: block;
    margin: auto;
    justify-content: center;
    max-width: 1000px;
    margin-bottom: 60px;    
}

.div-un-article h3 {
    background-color: tomato;
    border-radius: 3px 3px 0px 0px;
    padding: 8px;
    font-size: 24px;
    font-weight: 400;
    text-align: center;
    margin-top: 60px;
}

.div-un-article p {
    font-size: 18px;
    line-height: 1.4em;
    padding-left: 10px;
    padding-right: 10px;
    text-align: justify;
    margin-top: 10px;
}

h1 {
    font-family: Flamenco;
    font-weight: 700;
    font-size: 40px;    
}

h2 {
    font-family: Overlock;
    font-size: 22px;
}

h3 {
    width: 
    font-family: Flamenco;
    font-weight: 400;
    margin-top: 20px;
    font-size: 28px;
    margin-bottom: 40px;
}

p, input, select, textarea, th, td, h4, a {
    font-family: Overlock;
    font-weigth: 400px;
}

p, input, select, textarea  {
    font-size: 22px;
}

main, header {
    text-align: center;
    gap: 20px;
}

.grille {
    overflow-x:auto;
    margin: 50px auto 60px auto;
    padding: 20px;
    max-width: 1000px;
}

.main {
    padding: 20px;
    text-align: left;
    line-height: 1.5rem;
}

.tiers {
    width: 20%
}

form {
    border: solid 1px rgba(44, 44, 44, 0.76);
    border-radius: 15px;
    background-color: white;
    display: block;
    padding: 30px;
    margin: 50px auto;
    max-width : 600px;
    font-size: 20px;
}


label {
    display: block;
    margin-top: 10px;
    margin-bottom: 10px;
    font-size: 20px;
    color:rgb(44, 44, 44)
}


.text-area {
    width: 100%;
    color: black;
}

select, input
{
    border: solid 1px rgb(1, 47, 107);
    color:rgb(44, 44, 44);
    font-size: 18px;
    padding: 10px;
    border-radius: 5px;
    output: none;
    display: block;;
}

option {
    color: black;
}


input
{
    padding: 15px;
    font-size: 22px;
    border-radius: 3px;
}

textarea {
    border: solid 1pxrgb(1, 47, 107);
    border-radius: 5px;
    padding: 10px;
}

input[type="submit"] {
    margin-top: 50px;  
    font-size: 16px;  
    &:hover {
    border: transparent;
    background-color: tomato;
    cursor: pointer;
    }
}


button {
    border: none;
}


output {
    border: none;
}

::placeholder, textarea {
    font-size: 20px;
}

.bouton 
{   
    font-size: 20px;
    padding: 10px 20px;
    max-width: 200px;
    border-radius: 25px;
    display: block;
    background-color: rgb(1, 47, 107);
    color: white;
    margin: 50px auto 20px auto;
    text-decoration: none;
    text-align: center;
    &:hover {
    background-color: tomato;
    }
}


.center {
    text-align: center;
}


.verte {
    color: green;
}

table {
    margin-left: auto;
    margin-right: auto;
}

th {
    background-color: rgb(170, 170, 170);
    font-size: 24px;
    font-weight: 600;
}

td {
    font-size: 20px;
}

th, td {
    border: dotted 1px rgb(170, 170, 170);
    border-radius: 5px;
    gap: 10px;
    padding: 10px;
}

.bleu {
    color: blue;
}

.tomato {
    background-color: tomato;
}

td.bleu:hover {
    cursor: pointer;
    text-decoration: underline;
}

span {
    font-family: Flamenco;
    font-size: 26px ;
    font-weight: 500;
}

hr {
    max-width: 50%;
    border: dashed 0,5px grey;
    margin: 50px auto 20px auto;
}

.no-border {
    border: none;
}

.tiny-form {
    max-width: 280px;
    padding: 0;
}

.trois-boutons {
    display: flex;
    align-items: center;
    gap: 20px;
}