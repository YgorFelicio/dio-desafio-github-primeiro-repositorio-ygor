/**
 * Funções
 */

function validar1(){
	
	let nome = formulario.txtNome.value;
	let email = formulario.txtEmail.value;
	let cpf = formulario.txtCPF.value;
	let endereco = formulario.txtEndereco.value;
	let cep = formulario.txtCEP.value;
	let tel = formulario.txtTel.value;
	let senha = formulario.txtSenha.value;
	let senha2 = formulario.txtSenha2.value;
	
	if(nome.length == ""){
		alert('Preencha o campo Nome');
		formulario.txtNome.focus();
		return false;
	}else if(nome.length <= 10){
		alert('Informe Nome e Sobrenome corretamente');
		formulario.txtNome.focus();
		return false;
	}else if(email.length == ""){
		alert('Preencha o campo E-mail');
		formulario.txtEmail.focus();
		return false;
	}else if(email.length <= 15){
		alert('Informe um E-mail válido');
		formulario.txtEmail.focus();
		return false;
	}else if(cpf.length == ""){
		alert('Preencha o campo CPF');
		formulario.txtCPF.focus();
		return false;
	}else if(cpf.length <= 13){
		alert('Informe um CPF válido');
		formulario.txtCPF.focus();
		return false;
	}else if(endereco.length == ""){
		alert('Preencha o campo Endereço');
		formulario.txtEndereco.focus();
		return false;
	}else if(cep.length == ""){
		alert('Preencha o campo CEP');
		formulario.txtCEP.focus();
		return false;
	}else if(cep.length <= 9){
		alert('Informe um CEP válido');
		formulario.txtCEP.focus();
		return false;
	}else if(tel.length == ""){
		alert('Preencha o campo Telefone');
		formulario.txtTel.focus();
		return false;
	}else if(tel.length <= 14){
		alert('Informe um telefone válido');
		formulario.txtTel.focus();
		return false;
	}else if(senha.length == ""){
		alert('Preencha o campo Senha');
		formulario.txtSenha.focus();
		return false;
	}else if(senha.length <= 7){
		alert('A senha deve conter no mínimo 8 caracteres');
		formulario.txtSenha.focus();
		return false;
	}else if(senha2.length == ""){
		alert('Confirme a Senha');
		formulario.txtSenha2.focus();
		return false;
	}else{
		if(senha != senha2){
			alert('As senhas informadas não são iguais');
			formulario.txtSenha.value = "";
			formulario.txtSenha2.value = "";
			formulario.txtSenha.focus();
			return false;
		}else{
			alert('Cadastro realizado com sucesso!');
			return true;
		}
	}
}

function validar2(){
	
	let email = formulario.txtEmail.value;
	let senha = formulario.txtSenha.value;
	
	if(email.length == ""){
		alert('Preencha o campo E-mail');
		formulario.txtEmail.focus();
		return false;
	}else if(email.length <= 15){
		alert('Informe um E-mail válido');
		formulario.txtEmail.focus();
		return false;
	}else if(senha.length == ""){
		alert('Preencha o campo Senha');
		formulario.txtSenha.focus();
		return false;
	}else if(senha.length <= 7){
		alert('A senha deve conter no mínimo 8 caracteres');
		formulario.txtSenha.focus();
		return false;
	}else{
		return true;
	}
}

function validar3(){
	
	let RS = formulario.txtRS.value;
	let email = formulario.txtEmail.value;
	let cnpj = formulario.txtCNPJ.value;
	let endereco = formulario.txtEndereco.value;
	let cep = formulario.txtCEP.value;
	let tel = formulario.txtTel.value;
	let senha = formulario.txtSenha.value;
	let senha2 = formulario.txtSenha2.value;
	
	if(RS.length == ""){
		alert('Preencha o campo Razão Social');
		formulario.txtRS.focus();
		return false;
	}else if(RS.length <= 10){
		alert('Informe uma Razão Social válida');
		formulario.txtRS.focus();
		return false;
	}else if(email.length == ""){
		alert('Preencha o campo E-mail');
		formulario.txtEmail.focus();
		return false;
	}else if(email.length <= 15){
		alert('Informe um E-mail válido');
		formulario.txtEmail.focus();
		return false;
	}else if(cnpj.length == ""){
		alert('Preencha o campo CNPJ');
		formulario.txtCNPJ.focus();
		return false;
	}else if(cnpj.length <= 17){
		alert('Informe um CNPJ válido');
		formulario.txtCNPJ.focus();
		return false;
	}else if(endereco.length == ""){
		alert('Preencha o campo Endereço');
		formulario.txtEndereco.focus();
		return false;
	}else if(cep.length == ""){
		alert('Preencha o campo CEP');
		formulario.txtCEP.focus();
		return false;
	}else if(cep.length <= 9){
		alert('Informe um CEP válido');
		formulario.txtCEP.focus();
		return false;
	}else if(tel.length == ""){
		alert('Preencha o campo Telefone');
		formulario.txtTel.focus();
		return false;
	}else if(tel.length <= 13){
		alert('Informe um telefone válido');
		formulario.txtTel.focus();
		return false;
	}else if(senha.length == ""){
		alert('Preencha o campo Senha');
		formulario.txtSenha.focus();
		return false;
	}else if(senha.length <= 7){
		alert('A senha deve conter no mínimo 8 caracteres');
		formulario.txtSenha.focus();
		return false;
	}else if(senha2.length == ""){
		alert('Confirme a Senha');
		formulario.txtSenha2.focus();
		return false;
	}else{
		if(senha != senha2){
			alert('As senhas informadas não são iguais');
			formulario.txtSenha.value = "";
			formulario.txtSenha2.value = "";
			formulario.txtSenha.focus();
			return false;
		}else{
			alert('Cadastro realizado com sucesso!');
			return true;
		}
	}
}

function validar4(){
	
	let usuario = formulario.txtUsuario.value;
	let senha = formulario.txtSenha.value;
	
	if(usuario.length == ""){
		alert('Informe um Usuário');
		formulario.txtEmail.focus();
		return false;
	}else if(email.length <= 15){
		alert('Informe um Usuário válido');
		formulario.txtEmail.focus();
		return false;
	}else if(senha.length == ""){
		alert('Informe a Senha');
		formulario.txtSenha.focus();
		return false;
	}else if(senha.length <= 7){
		alert('A senha deve conter no mínimo 8 caracteres');
		formulario.txtSenha.focus();
		return false;
	}else{
		return true;
	}
}

function Opcao(){
	
	var opcao = parseInt(formulario.rdOpcao.value);
	var item = document.getElementById("item");
	var item2 = document.getElementById("item2");
	var item3 = document.getElementById("item3");
	
	if(opcao==1){
		item.style.visibility='visible';
		item2.style.visibility='hidden';
		item3.style.visibility='visible';
		formulario.txtCNPJ.value = "";
	}else if(opcao==2){
		item.style.visibility='hidden';
		item2.style.visibility='visible';
		item3.style.visibility='visible';
		formulario.txtCPF.value = "";
	}
	
}

function Validar(){
	
	var opcao = parseInt(formulario.rdOpcao.value);
	var CPF = formulario.txtCPF.value;
	var CNPJ = formulario.txtCNPJ.value;
		
	if(CPF.length == "" && CNPJ.length == ""){
		
		alert("Informe um CPF ou CNPJ.");
		return false;
	}else{
		if(opcao==1){
			window.location.href = "verifica_usu.php?cpf=" + formulario.txtCPF.value;
		}else if(opcao==2){
			window.location.href = "verifica_emp.php?cnpj=" + formulario.txtCNPJ.value;
		}
		return true;
	}
	
}

function validaritens(){
	
	var box1 = formulario.box1;
	var box2 = formulario.box2;
	var box3 = formulario.box3;
	var box4 = formulario.box4;
	
	var num1 = formulario.num1.value;
	var num2 = formulario.num2.value;
	var num3 = formulario.num3.value;
	var num4 = formulario.num4.value;
	
	var total = formulario.pontos.value;
		
	if(!box1.checked && !box2.checked && !box3.checked && !box4.checked){
		
		alert("Selecione ao menos 1 item !");
		return false;
		
	}else{
		if(box1.checked){
			var multi1 = 2*num1;
			total = parseFloat(total) + parseFloat(multi1);
		}
		
		if(box2.checked){
			var multi2 = 1.25*num2;
			total = parseFloat(total) + parseFloat(multi2);
		}
		
		if(box3.checked){
			var multi3 = 1*num3;
			total = parseFloat(total) + parseFloat(multi3);
		}
		
		if(box4.checked){
			var multi4 = 1.75*num4;
			total = parseFloat(total) + parseFloat(multi4);
		}
		
		formulario.pontos.value = parseFloat(total).toFixed(2);
		return true;
	}
	
}

function validarpontos(){
	
	var total = parseFloat(formulario.pontos.value);
	var menos = parseFloat(formulario.num4.value);
	var opcao = parseInt(formulario.rdDesc.value);
	var des = 0;
	
	if(opcao!=1&&opcao!=2&&opcao!=3&&opcao!=4){
		
		alert("Selecione 1 item !");
		
		return false;
		
	}else if(menos>total){
		
		if(total>300){
			alert("Os pontos devem ser menor ou igual a 300");
		}else if(total>=250&&total<300){
			alert("Os pontos devem ser menor ou igual a 250");
		}else if(total>=200&&total<250){
			alert("Os pontos devem ser menor ou igual a 200");
		}else if(total>=150&&total<200){
			alert("Os pontos devem ser menor ou igual a 150");
		}else if(total>=100&&total<150){
			alert("Os pontos devem ser menor ou igual a 100");
		}else if(total>=50&&total<100){
			alert("Os pontos devem ser menor ou igual a 50");
		}
		
		return false;
		
	}else if(menos>300){
		
		alert("Os pontos devem ser menor ou igual a 300");
		
		return false;
		
	}else if(menos!=50&&menos!=100&&menos!=150&&menos!=200&&menos!=250&&menos!=300){
		
		alert("Número de pontos inválidos, intervalo de 50 em 50 pontos !");
		
		return false;
		
	}else{
		
		total = total - menos;
		
		if(menos<=300){
			desc = parseInt(menos)/10;
		}
		
		if(opcao==1){
			alert("A sua próxima conta de Água terá " + desc + "% de desconto");
		}else if(opcao==2){
			alert("A sua próxima conta de Energia terá " + desc + "% de desconto");
		}else if(opcao==3){
			alert("O seu IPVA terá " + desc + "% de desconto");
		}else if(opcao==4){
			alert("O seu IPTU terá " + desc + "% de desconto");
		}
		formulario.pontos.value = parseFloat(total).toFixed(2);
		return true;
	}
	
}

function Solicita(){
	
	var confirma;
	var solicita = document.getElementById("solicita");
	var troca = document.getElementById("Troca");
	
	confirma = confirm("Confirma a solicitação da coleta ?");
	
	if(confirma==true){
		alert("O caminhão da coleta irá até sua casa !");
		solicita.style.visibility='visible';
		troca.style.visibility='hidden';
	}
	
}

function Solicita2(){
	
	var confirma;
	var solicita = document.getElementById("solicita");
	var troca = document.getElementById("Troca");
	
	confirma = confirm("Confirma a solicitação da coleta ?");
	
	if(confirma==true){
		alert("O caminhão da coleta irá até sua empresa !");
		solicita.style.visibility='visible';
		troca.style.visibility='hidden';
	}
	
}

function Troca(){
	
	var troca = document.getElementById("Troca");
	var solicita = document.getElementById("solicita");
	var total = parseFloat(formulario.pontos.value);
	
	if(total<50){
		alert("Você não possui pontos suficientes para trocar !");
		return false;
	}else{
		if(total>=300){
			formulario.num4.max = parseInt(300);
		}else if(total>=250&&total<300){
			formulario.num4.max = parseInt(250);
		}else if(total>=200&&total<250){
			formulario.num4.max = parseInt(200);
		}else if(total>=150&&total<200){
			formulario.num4.max = parseInt(150);
		}else if(total>=100&&total<200){
			formulario.num4.max = parseInt(100);
		}else if(total>=50&&total<100){
			formulario.num4.max = parseInt(50);
		}
		troca.style.visibility='visible';
		return true;
	}
}

function voltar(){
	
	var item = document.getElementById("item");
	var item3 = document.getElementById("item3");
	var libera = document.getElementById("libera");
	
	item.style.visibility='hidden';
	item3.style.visibility='hidden';
	libera.style.visibility='visible';
	
}

function ValCPF(campo) {
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
		var valorCampo = campo.value;
		// Faz a mascara para o campo
		if (valorCampo.length == 3) {
			campo.value = valorCampo + ".";
		} else if (valorCampo.length == 7) {
			campo.value = valorCampo + ".";
		} else if (valorCampo.length == 11) {
			campo.value = valorCampo + "-";
		}
		return true;
	}
	else {
		
		alert("Informe apenas números neste campo.")
		return false;
	}
}

function ValCNPJ(campo) {
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
		var valorCampo = campo.value;
		// Faz a mascara para o campo
		if (valorCampo.length == 2) {
			campo.value = valorCampo + ".";
		} else if (valorCampo.length == 6) {
			campo.value = valorCampo + ".";
		} else if (valorCampo.length == 10) {
			campo.value = valorCampo + "/";
		}else if (valorCampo.length == 15) {
			campo.value = valorCampo + "-";
		}
		return true;
	}
	else {
		
		alert("Informe apenas números neste campo.")
		return false;
	}
}

function ValTel(campo) {
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
		var valorCampo = campo.value;
		// Faz a mascara para o campo
		if (valorCampo.length == 2) {
			campo.value = "(" + valorCampo + ") ";
		} else if (valorCampo.length == 10) {
			campo.value = valorCampo + "-";
		}
		return true;
	}
	else {
		
		alert("Informe apenas números neste campo.")
		return false;
	}
}

function ValTel2(campo) {
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
		var valorCampo = campo.value;
		// Faz a mascara para o campo
		if (valorCampo.length == 2) {
			campo.value = "(" + valorCampo + ") ";
		} else if (valorCampo.length == 9) {
			campo.value = valorCampo + "-";
		}
		return true;
	}
	else {
		
		alert("Informe apenas números neste campo.")
		return false;
	}
}

function ValCEP(campo) {
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
		var valorCampo = campo.value;
		// Faz a mascara para o campo
		if (valorCampo.length == 2) {
			campo.value = valorCampo + ".";
		} else if (valorCampo.length == 6) {
			campo.value = valorCampo + "-";
		}	
		return true;
	}
	else {
		
		alert("Informe apenas números neste campo.")
		return false;
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

function mostrarSenha()
{
    var tipo = document.getElementById("txtSenha");
    var tipo2 = document.getElementById("txtSenha2");
    
    if(tipo.type == "password")
    {
    	
        tipo.type = "text";
        tipo2.type = "text";
        
    }else if(tipo.type == "text"){
    	
    	tipo.type = "password";
    	tipo2.type = "password";
    	
    }
}

function aviso(){
	alert("E-mail ou senha inválido");
}