function fatorialRecursivo(n) {
  if (n === 0 || n === 1) {
    return 1;
  }
  return n * fatorialRecursivo(n - 1);
}

function inserirValorHTML() {
    const valor = document.getElementById("valor").value
    const resultado = fatorialRecursivo(Number(valor))
    const resultadoHTML = document.getElementById("resultado")

    resultadoHTML.innerText = resultado
}

document.getElementById("submit").addEventListener("click", inserirValorHTML)
