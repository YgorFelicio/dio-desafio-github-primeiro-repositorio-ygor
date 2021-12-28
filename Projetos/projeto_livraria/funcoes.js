/**
 * Funções
 */

function validar1(){
	
	let nome = formulario.txtNome.value;
	let autor = formulario.txtAutor.value;
	let editora = formulario.txtEditora.value;
	let preco = formulario.txtPreco.value;
	let ano = formulario.txtAno.value;
	let prefacio = formulario.txtPref.value;
	
	if(nome.length == ""){
		alert('Preencha o campo Nome');
		formulario.txtNome.focus();
		return false;
	}else if(autor.length == ""){
		alert('Preencha o campo Autor');
		formulario.txtAutor.focus();
		return false;
	}else if(editora.length == ""){
		alert('Preencha o campo Editora');
		formulario.txtEditora.focus();
		return false;
	}else if(preco.length == ""){
		alert('Preencha o campo Preço');
		formulario.txtPreco.focus();
		return false;
	}else if(ano.length == ""){
		alert('Preencha o campo Ano');
		formulario.txtAno.focus();
		return false;
	}else if(prefacio.length == ""){
		alert('Preencha o campo Prefacio');
		formulario.txtPref.focus();
		return false;
	}else{
		return true;
	}
}

function validar2(){
	
	let nome = formulario2.novoNome.value;
	let autor = formulario2.novoAutor.value;
	let editora = formulario2.novoEditora.value;
	let preco = formulario2.novoPreco.value;
	let ano = formulario2.novoAno.value;
	let prefacio = formulario2.novoPref.value;
	
	if(nome.length == ""){
		alert('Preencha o campo Nome');
		formulario2.novoNome.focus();
		return false;
	}else if(autor.length == ""){
		alert('Preencha o campo Autor');
		formulario2.novoAutor.focus();
		return false;
	}else if(editora.length == ""){
		alert('Preencha o campo Editora');
		formulario2.novoEditora.focus();
		return false;
	}else if(preco.length == ""){
		alert('Preencha o campo Preço');
		formulario2.novoPreco.focus();
		return false;
	}else if(ano.length == ""){
		alert('Preencha o campo Ano');
		formulario2.novoAno.focus();
		return false;
	}else if(prefacio.length == ""){
		alert('Preencha o campo Prefacio');
		formulario2.novoPref.focus();
		return false;
	}else{
		return true;
	}
}

function ValNumPreco(campo) {
	// valida se digitou somente números
	if (window.event) { // internet explorer
		tecla = event.keyCode;
	} else { // mozilla e chrome
		tecla = e.which;
	}	
	//alert(tecla)
	// backspace - 8
	// 0 a 9 - 48 a 57
	// enter - 13
	if (((tecla >= 48) && (tecla <= 57)) || (tecla == 8)|| (tecla == 13))
	{
		return true;
	}
	else {
		
		alert("Informe apenas números neste campo.")
		return false;
	}
}

function confirmar(txtId){
	let resposta = confirm("Confirma a exclusão deste produto ?");
	if(resposta === true){
		alert("Produto excluido com sucesso!")
		window.location.href = "deletar_livro.php?id=" + txtId;
	}
}

//função para formatação de moeda
function moeda(a, e, r, t) {
    let n = ""
      , h = j = 0
      , u = tamanho2 = 0
      , l = ajd2 = ""
      , o = window.Event ? t.which : t.keyCode;
    if (13 == o || 8 == o)
        return !0;
    if (n = String.fromCharCode(o),
    -1 == "0123456789".indexOf(n))
        return !1;
    for (u = a.value.length,
    h = 0; h < u && ("0" == a.value.charAt(h) || a.value.charAt(h) == r); h++)
        ;
    for (l = ""; h < u; h++)
        -1 != "0123456789".indexOf(a.value.charAt(h)) && (l += a.value.charAt(h));
    if (l += n, 0 == (u = l.length) && (a.value = ""),  1 == u && (a.value = "0" + r + "0" + l), 2 == u && (a.value = "0" + r + l), u > 2) {
        for (ajd2 = "",j = 0,h = u - 3; h >= 0; h--) 
		3 == j && (ajd2 += e, j = 0), ajd2 += l.charAt(h), j++;
        for (a.value = "", tamanho2 = ajd2.length, h = tamanho2 - 1; h >= 0; h--)
		a.value += ajd2.charAt(h);
        a.value += r + l.substr(u - 2, u)
    }
    return !1
}