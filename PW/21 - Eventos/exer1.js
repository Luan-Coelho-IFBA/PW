function validacao(e) {
  e.preventDefault();

  var nome = document.getElementById("nome");
  var email = document.getElementById("email");
  var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  var cidade = document.getElementById("cidade");
  var estado = document.getElementById("estado");
  var mensagem = document.getElementById("mensagem");

  if (nome.value.trim() === "") {
    alert("Nome não preenchido");
    nome.focus();
    return;
  }

  if (!emailRegex.test(email.value.trim())) {
    alert("Email inválido");
    nome.focus();
    return;
  }

  if (cidade.value.trim() === "") {
    alert("Cidade não preenchida");
    nome.focus();
    return;
  }

  if (estado.value === "") {
    alert("Estado não preenchido");
    nome.focus();
    return;
  }

  if (mensagem.value.trim() === "") {
    alert("Mensagem não preenchida");
    nome.focus();
    return;
  }
}
