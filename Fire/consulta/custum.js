var button = document.getElementById("action-btn");

button.addEventListener("click" , function(){

    var nome = document.getElementById("nome");

    if(nome.style.display === "none"){
      nome.style.display = "block";
    }else{
        nome.style.display = "none";
    }
 });

 button.addEventListener("click" , function(){
   
    var usuario = document.getElementById("usuario");

    if(usuario.style.display === "none"){
        usuario.style.display = "block";
    }else{
        usuario.style.display = "none";
    }
 });
 
 button.addEventListener("click" , function(){
   
    var email = document.getElementById("email");

    if(email.style.display === "none"){
        email.style.display = "block";
    }else{
        email.style.display = "none";
    }
 });
 button.addEventListener("click" , function(){
   
    var senha = document.getElementById("senha");

    if(senha.style.display === "none"){
        senha.style.display = "block";
    }else{
        senha.style.display = "none";
    }
 });
 button.addEventListener("click" , function(){
   
    var data = document.getElementById("data");

    if(data.style.display === "none"){
        data.style.display = "block";
    }else{
        data.style.display = "none";
    }
 });
 button.addEventListener("click" , function(){
   
    var telefone = document.getElementById("telefone");

    if(telefone.style.display === "none"){
        telefone.style.display = "block";
    }else{
        telefone.style.display = "none";
    }
 });
 button.addEventListener("click" , function(){
   
    var cpf = document.getElementById("cpf");

    if(cpf.style.display === "none"){
        cpf.style.display = "block";
    }else{
        cpf.style.display = "none";
    }
 });
 button.addEventListener("click" , function(){
   
    var cep = document.getElementById("cep");

    if(cep.style.display === "none"){
        cep.style.display = "block";
    }else{
        cep.style.display = "none";
    }
 });
 button.addEventListener("click" , function(){
   
    var numeroSeguranca = document.getElementById("numeroSeguranca");

    if(numeroSeguranca.style.display === "none"){
        numeroSeguranca.style.display = "block";
    }else{
        numeroSeguranca.style.display = "none";
    }
 });
 button.addEventListener("click" , function(){
   
    var alergia = document.getElementById("alergia");

    if(alergia.style.display === "none"){
        alergia.style.display = "block";
    }else{
        alergia.style.display = "none";
    }
 });
 button.addEventListener("click" , function(){
   
    var sangue = document.getElementById("sangue");

    if(sangue.style.display === "none"){
        sangue.style.display = "block";
    }else{
        sangue.style.display = "none";
    }
 });
 button.addEventListener("click" , function(){
   
    var pcd = document.getElementById("pcd");

    if(pcd.style.display === "none"){
        pcd.style.display = "block";
    }else{
        pcd.style.display = "none";
    }
 });
 button.addEventListener("click" , function(){
   
    var deficiencia = document.getElementById("deficiencia");

    if(deficiencia.style.display === "none"){
        deficiencia.style.display = "block";
    }else{
        deficiencia.style.display = "none";
    }
 });


 /*-------Validar campos do editar---------*/


function is_cpf (c) {

    if((c = c.replace(/[^\d]/g,"")).length != 11)
      return false
    
    if (c == "00000000000")
      return false;
    
    var r;
    var s = 0;
    
    for (i=1; i<=9; i++)
      s = s + parseInt(c[i-1]) * (11 - i);
    
    r = (s * 10) % 11;
    
    if ((r == 10) || (r == 11))
      r = 0;
    
    if (r != parseInt(c[9]))
      return false;
    
    s = 0;
    
    for (i = 1; i <= 10; i++)
      s = s + parseInt(c[i-1]) * (12 - i);
    
    r = (s * 10) % 11;
    
    if ((r == 10) || (r == 11))
      r = 0;
    
    if (r != parseInt(c[10]))
      return false;
    
    return true;
    }
    
    
    function fMasc(objeto,mascara) {
    obj=objeto
    masc=mascara
    setTimeout("fMascEx()",1)
    }
    
    function fMascEx() {
    obj.value=masc(obj.value)
    }
    
    function mCPF(cpf){
    cpf=cpf.replace(/\D/g,"")
    cpf=cpf.replace(/(\d{3})(\d)/,"$1.$2")
    cpf=cpf.replace(/(\d{3})(\d)/,"$1.$2")
    cpf=cpf.replace(/(\d{3})(\d{1,2})$/,"$1-$2")
    return cpf
    }
    
    cpfCheck = function (el) {
      document.getElementById('cpfResponse').innerHTML = is_cpf(el.value)? '<span style="color:green">válido</span>' : '<span style="color:red">inválido</span>';
      if(el.value=='') document.getElementById('cpfResponse').innerHTML = '';
      /*--------------------------------------------------------------------------------------------------------------*/
    }

    /*-----telefone------ */


 
    function mascaraTelefone(event) {
        let tecla = event.key;
        let telefone = event.target.value.replace(/\D+/g, "");

        if (/^[0-9]$/i.test(tecla)) {
            telefone = telefone + tecla;
            let tamanho = telefone.length;

            if (tamanho >= 12) {
                return false;
            }
            
            if (tamanho > 10) {
                telefone = telefone.replace(/^(\d\d)(\d{5})(\d{4}).*/, "($1) $2-$3");
            } else if (tamanho > 5) {
                telefone = telefone.replace(/^(\d\d)(\d{4})(\d{0,4}).*/, "($1) $2-$3");
            } else if (tamanho > 2) {
                telefone = telefone.replace(/^(\d\d)(\d{0,5})/, "($1) $2");
            } else {
                telefone = telefone.replace(/^(\d*)/, "($1");
            }

            event.target.value = telefone;
        }

        if (!["Backspace", "Delete"].includes(tecla)) {
            return false;
        }
    }


    /*----cep---*/

    /*function mCEP(cep){
      cep=cep.replace(/\D/g,"")
      cep=cep.replace(/^(\d{2})(\d)/,"$1.$2")
      cep=cep.replace(/\.(\d{3})(\d)/,".$1-$2")
      return cep
    }*/

 
    const handleZipCode = (event) => {
      let input = event.target
      input.value = zipCodeMask(input.value)
    }
    
    const zipCodeMask = (value) => {
      if (!value) return ""
      value = value.replace(/\D/g,'')
      value = value.replace(/(\d{5})(\d)/,'$1-$2')
      return value
    }


    

