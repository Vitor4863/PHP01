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


    