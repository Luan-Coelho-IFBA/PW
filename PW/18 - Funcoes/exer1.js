function parOuImpar(n) {
    if (n % 2 == 0) return true

    return false
}

function inserirValorHTML() {
    const valor = document.getElementById("valor").value
    const resultado = parOuImpar(Number(valor))
    const resultadoHTML = document.getElementById("resultado")

    if (resultado) {
        resultadoHTML.innerText = "É par"
    } else {
        resultadoHTML.innerText = "É ímpar"
    }
}

document.getElementById("submit").addEventListener("click", inserirValorHTML)
