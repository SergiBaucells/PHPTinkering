// Moustache
// NPM -> Forma moderada -> Eina inclosa
// npm install moustache

// Per guardar
function versioAnterior() {
    console.log('Hey!')
// Wiki Moustache

// Variable preexistent
// document es la pàgina HTML que s'està executant
    document.getElementById('template') //Busca al document HTML l'identificador template
// Xibato -> console.log(document.getElementById('template'))

    var template = document.getElementById('template')
// console.log(template)
    template.innerHTML = 'Hola Jordi'
}

// window representa la finestra del navegador
// Funció anònima no l'es cridarem mai perque l'ha crida el navegador al carregar
window.onload = function () {
    //versioAnterior()
    // Moustache
    var template = document.getElementById('plantilla').innerHTML

    //Parse o Render -> Utilitza llenguatje JSON
    var  resultat = Mustache.render(template,
        {name : 'Carmen'});
    console.log(resultat);

    var resultat = document.getElementById('resultat')

    template.innerHTML = resultat
}