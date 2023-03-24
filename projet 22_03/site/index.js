/*Actuellement avec le covid, tous les se fera avec cette plateforme pour l'envoie des chapitres des cours. </h3>
 En ce quiconcerne l'envoie des devoirs, vous allez devoir le faire en envoyant des mails à vos professeur. </h3>*/
/*
let b=document.navigation_cours;
let newP = document.createElement('p');
let newTexte=document.createTextNode('Actuellement avec le covid, tous les se fera avec cette plateforme pour envoyer des chapitres des cours. En ce quiconcerne lenvoie des devoirs, vous allez devoir le faire en envoyant des mails à vos professeur. ');
newP.textContent="testt";
b.append(newP,"text insere avec append");
b.appendChild(newTexte);*/

const icon = document.querySelector(".icon");
const search = document.querySelector(".search")
icon.onclick = function(){
    search.classList.toggle('active');
}


