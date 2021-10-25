function validarEmail(email){
    var exclude=/[^@-.w]|^[_@.-]|[._-]{2}|[@.]{2}|(@)[^@]*1/;
    var check=/@[w-]+./;
    var checkend=/.[a-zA-Z]{2,3}$/;
    if(((email.search(exclude) != -1)||(email.search(check)) == -1)||(email.search(checkend) == -1)){
		return false;
	}
    else {
		return true;
	}
}


function formatanome(nome){
	
  var letra, tamanho;
  
  tamanho = nome.length;
  
  for (var i=0; i<tamanho; i++)
  {
  letra = nome.charAt(i);
     if (letra== " ")
        if ((i+1)<tamanho)
    {
       letra = nome.charAt(i+1).toUpperCase();
       nome = nome.substring(0, i+1);
   nome += letra;
       nome += document.getElementById("nome").value.substring(i+2, tamanho);
    }
  }
  
  if (tamanho>0)
  {
     letra = nome.charAt(0).toUpperCase();
     nome = nome.substring(1, tamanho);      
     nome = letra + nome;
  }
  document.getElementById("nome").value = nome;
}


function validarSenha(){
   senha = document.getElementById('senha').value;
   ConfirmarSenha = document.getElementById('ConfirmarSenha').value;

   if(senha != ConfirmarSenha){
      alert("As senhas não conferem, porfavor digite senhas iguais !!")
   }else{
      document.FormFunc.submit();
   }
}


function confirmacaoEdit(){ 
   // retorna true se confirmado, ou false se cancelado
   return confirm('Tem certeza que quer editar esse cadastro?');
}

function confirmacaoDelete(){ 
   // retorna true se confirmado, ou false se cancelado
   return confirm('Tem certeza que quer apagar este cadastro?');
}
 