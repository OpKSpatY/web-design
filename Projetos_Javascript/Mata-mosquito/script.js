var altura = window.innerHeight
var largura = window.innerWidth
var vidas = 1
var tempo = 15
var criaTempoMosca = 1500
var nivel = window.location.search.replace("?","")
if(nivel === "normal"){
    criaTempoMosca = 1500
}
else if (nivel === "dificil"){
    criaTempoMosca = 1000
}
else {
    criaTempoMosca = 750
}

function boardSize(){
    altura = window.innerHeight
    largura = window.innerWidth
    console.log(altura, largura)
}

boardSize()

var cronometro = setInterval(function(){

    tempo -= 1

    if (tempo < 0){
        clearInterval(cronometro)
        clearInterval(criaMosca)
        window.location.href = "vitoria.html"
    }
    else{
        document.getElementById("cronometro").innerHTML = tempo
    }
}, 1000)

function randomPosition(){

    // Remover mosquito
    if (document.getElementById("mosquito")){
        document.getElementById("mosquito").remove()
        if (vidas > 3){
            window.location.href = 'game_over.html'
            
        }
        else{
            document.getElementById("v"+vidas).src = "imagens/coracao_vazio.png"
            vidas ++
    
        }    

    }
    

    var posY = Math.floor(Math.random() * altura) - 90
    var posX = Math.floor(Math.random() * largura) - 90
    console.log(posX, posY)

    posX = posX < 0 ? 0 : posX // Uso de operador ternário
    posY = posY < 0 ? 0 : posY // Uso de operador ternário

    // Criar elemento IMG

    var mosquito = document.createElement('img')
    mosquito.src = 'imagens/mosquito.png'
    mosquito.className = randomValue() + " " + randomSide()
    mosquito.style.left = posX + 'px'
    mosquito.style.top = posY + 'px'
    mosquito.style.position = 'absolute'
    mosquito.id = "mosquito"
    mosquito.onclick = function() {
        this.remove()
    }

    document.body.appendChild(mosquito)


}

function randomValue(){
    var randvalue = Math.floor(Math.random() * 3)
    switch(randvalue){
        case 0:
            return "mosquito1"
        case 1:
            return "mosquito2"
        case 2:
            return "mosquito3"

    }

}

function randomSide(){
    var randside = Math.floor(Math.random() * 2)
    switch(randside){
        case 0:
            return "ladoA"
        case 1:
            return "ladoB"
    }
}
