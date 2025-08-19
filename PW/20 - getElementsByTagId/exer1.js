const todasAsListas = document.getElementsByTagName("ul");
const segundaLista = todasAsListas[1].children;

console.log(segundaLista);

document.writeln("Itens da segunda lista <br /><br />");

for (let index = 0; index < segundaLista.length; index++) {
  document.writeln(segundaLista[index].innerHTML);
  document.writeln("<br />");
}
