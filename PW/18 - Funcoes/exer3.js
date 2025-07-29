function maiorLista(n) {
    if (n.length < 1) return

    let maior = n[0]

    for (let index = 0; index < n.length; index++) {
        const element = n[index];
        
        if (element > maior) maior = element
    }

    return maior
}

function inserirValorHTML() {
    const resultado = maiorLista([1, 2, 3, 4, 5, 8, 4, 3])
    const resultadoHTML = document.getElementById("resultado")

    resultadoHTML.innerText = resultado
}

inserirValorHTML()
