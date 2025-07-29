var massa = prompt("Massa: ")
var altura = prompt("Altura: ")

var imc = massa / (altura * altura)
var classificacao

if (imc < 18) {
    classificacao = "Magreza leve"
} else if (imc >= 18 && imc < 25) {
    classificacao = "Saudável"
} else if (imc >= 25 && imc < 30) {
    classificacao = "Sobrepeso"
} else {
    classificacao = "Obesidade"
}

window.alert(classificacao)