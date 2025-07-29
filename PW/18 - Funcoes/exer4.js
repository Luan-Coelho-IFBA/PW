function multiplicarLista(n, a) {
    return n.map(t => t * a)
}

function MostrarValor() {
    const array = [1, 2, 3, 4, 5, 8, 4, 3]
    const resultado = multiplicarLista(array, 2)

    console.log(resultado)
}

MostrarValor()
