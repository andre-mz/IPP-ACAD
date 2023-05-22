//TEST VALIDACAO JS. V.1

const isRequired    = value => value === '' ? false : true;
const isBetween     = (length, min, max) => length < min || length > max ? false : true;
const mostraErro    = (input, message) => {
    // pega o form-field element
    const formField = input.parentElement;
    // adiciona class de erro
    formField.classList.remove('success');
    formField.classList.add('error');

    // mostra a mensagem de erro
    const error       = formField.querySelector('small');
    error.textContent = message;
};
const mostraSucesso = (input) => {
    // pega o form-field element
    const formField = input.parentElement;

    // remove a classe de erro
    formField.classList.remove('error');
    formField.classList.add('success');

    // esconde as mensagens de erro
    const error = formField.querySelector('small');
    error.textContent = '';
}
//REMOVE O ERRO
const debounce      = (fn, delay = 500) => {
    let timeoutId;
    return (...args) => {
        if (timeoutId) {
            clearTimeout(timeoutId);
        }
        timeoutId = setTimeout(() => {
            fn.apply(null, args)
        }, delay);
    };
};

//FORM ALUNO
const nomeAlun                 = document.querySelector('#nomeAluno');
const generoAluno              = document.querySelector('#genero');
const naturalidadeAluno        = document.querySelector('#naturalidade');
const provinciaNascimentoAluno = document.querySelector('#provinciaNascimento');
const distritoNascimentoAluno  = document.querySelector('#distritoNascimento');
const bairroAluno              = document.querySelector('#bairro');
const nomePaiAluno             = document.querySelector('#nomePai');
const nomeMaeAluno             = document.querySelector('#nomeMae');
const tipoDocumentoAluno       = document.querySelector('#tipoDocumento');
const numeroDocumentoAluno     = document.querySelector('#numeroDocumento');
const formAluno                = document.querySelector('#formAluno')

const checaNomeAluno          = () =>{
    let valid = false;
    const nomeAluno = nomeAlun.value.trim();
    if(!isRequired(nomeAluno)){
        mostraErro(nomeAlun, 'Campo vazio');
    }else{
        mostraSucesso(nomeAlun);
        valid = true;
    }
    return valid;
}
const checaGenero             = () => {
    let valid = false;
    const genero = generoAluno.value.trim();
    if(!isRequired(genero)){
        mostraErro(generoAluno, 'Selecione o genero do aluno');
    }else{
        mostraSucesso(generoAluno);
        valid = true;
    }
    return valid;
}
const checaNaturalidade       = () => {
    let valid =false;
    const naturalidade = naturalidadeAluno.value.trim();
    if(!isRequired(naturalidade)){
        mostraErro(naturalidadeAluno, 'Campo nao pode estar vazio')
    }else{
        mostraSucesso(naturalidadeAluno)
        valid=true
    }
    return valid
}
const checaPovinciaNascimento = () => {
    let valid =false;
    const provinciaNascimento = provinciaNascimentoAluno.value.trim();
    if(!isRequired(provinciaNascimento)){
        mostraErro(provinciaNascimentoAluno, 'Campo nao pode estar vazio');
    }else{
        mostraSucesso(provinciaNascimentoAluno);
        valid=true;
    }
    return valid
}
const checaDistritoNascimento = () => {
    let valid =false;
    const distritoNascimento = distritoNascimentoAluno.value.trim();
    if(!isRequired(distritoNascimento)){
        mostraErro(distritoNascimentoAluno, 'Campo nao pode estar vazio')
    }else{
        mostraSucesso(distritoNascimentoAluno)
        valid=true
    }
    return valid;
}
const checaBairro             = () => {
    let valid = false;
    const bairro = bairroAluno.value.trim();
    if(!isRequired(bairro)){
        mostraErro(bairroAluno, 'Campo nao pode estar vazio');
    }else{
        mostraSucesso(bairroAluno);
        valid = true;
    }
    return valid

}
const checaNomePai            = () => {
    let valid = false;
    const nomePai = nomePaiAluno.value.trim();
    if(!isRequired(nomePai)){
        mostraErro(nomePaiAluno, 'Campo nao pode estar vazio');
    }else{
        mostraSucesso(nomePaiAluno);
        valid =true;
    }
    return valid;
}
const checaNomeMae            = () => {
    let valid = false;
    const nomeMae = nomeMaeAluno.value.trim();
    if(!isRequired(nomeMae)){
        mostraErro(nomeMaeAluno, 'Campo nao pode estar vazio');
    }else{
        mostraSucesso(nomeMaeAluno);
        valid = true;
    }
    return valid;
}
const checaTipoDocumento      = () => {
    let valid = false;
    const tipoDocumento = tipoDocumentoAluno.value.trim();
    if(!isRequired(tipoDocumento)){
        mostraErro(tipoDocumentoAluno, 'Selecione o tipo de documento');
    }else{
        mostraSucesso(tipoDocumentoAluno);
        valid = true;
    }
    return valid;
}
const checaNumeroDocumento    = () => {
    let valid = false;
    const numeroDocumento = numeroDocumentoAluno.value.trim();
    if(!isRequired(numeroDocumento)){
        mostraErro(numeroDocumentoAluno, 'Campo nao pode estar vazio');
    }else if(!numeroDocumentoSeguro(numeroDocumento)){
        mostraErro(numeroDocumentoAluno, 'O numero de documento deve conter nu minimo 1 letra Maiscula')
    }
    else{
        mostraSucesso(numeroDocumentoAluno);
        valid = true
    }
    return valid;
}
const numeroDocumentoSeguro   = (numeroDocumento) => {
    const re = new RegExp("^(?=.*[A-Z])(?=.*[0-9])(?=.{8,})");
    return re.test(numeroDocumento);
};


//FORM USER
const nomeUser        = document.querySelector('#nome');
const contaUser       = document.querySelector('#conta');
const senhUser        = document.querySelector('#senha');
const confirmsenhUser = document.querySelector('#confirm-senha');
const levelUser       = document.querySelector('#level');
const form            = document.querySelector('#form');
const checaLevel        = () =>{
    let valid = false;
    const level = levelUser.value.trim();
    if(!isRequired(level)){
        mostraErro(levelUser, 'O campo nao pode estar vazio, escolha um nivel de acesso');
    }else{
        mostraSucesso(levelUser);
        valid=true;
    }
    return valid;
}
const checaNome         = () => {
    let valid = false;
    const min = 5,
        max = 30;

    const nome = nomeUser.value.trim();

    if (!isRequired(nome)) {
        mostraErro(nomeUser, 'O campo nome completo nao pode estar vazio.');
    } else if (!isBetween(nome.length, min, max)) {
        mostraErro(nomeUser, `O nome deve ter entr ${min} e ${max} caracteres.`)
    } else {
        mostraSucesso(nomeUser);
        valid = true;
    }
    return valid;
};
const checaConta        = () => {
    let valid = false;
    const conta = contaUser.value.trim();
    if (!isRequired(conta)) {
        mostraErro(contaUser,  'O campo conta nao pode ficar vazioz');
    } else {
        mostraSucesso(contaUser) ;
        valid = true;
    }
    return valid;
};
const checaSenha        = () => {
    let valid = false;
    const senha = senhUser.value.trim();

    if (!isRequired(senha)) {
        mostraErro(senhUser, 'O campo senha nao pode ficar vazio.');
    } else if (!senhaSegura(senha)) {
        mostraErro(senhUser, 'A senha deve ter 8 carateres (1 carater maisculo, 1 carater minusculo, 1 numero, e 1 carater special');
    } else {
        mostraSucesso(senhUser);
        valid = true;
    }

    return valid;
};
const checaConfirmSenha = () => {
    let valid = false;
    // checa confirm senha
    const confirmsenha = confirmsenhUser.value.trim();
    const senha        = senhUser.value.trim();

    if (!isRequired(confirmsenha)) {
        mostraErro(confirmsenhUser, 'Por favor insira a senha novamente');
    } else if (senha !== confirmsenha) {
        mostraErro(confirmsenhUser, 'A senha nao corresponde');
    } else {
        mostraSucesso(confirmsenhUser);
        valid = true;
    }
    return valid;
};
const senhaSegura       = (senha) => {
    const re = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})");
    return re.test(senha);
};



//FORM ENCARREGADO
const nomeEncarregadoAluno            = document.querySelector('#nomeEncarregado');
const profissaoEncarregadoAluno       = document.querySelector('#profissaoEncarregado');
const localTrabalhoEncarregadooAluno  = document.querySelector('#localTrabalhoEncarregado');
const horarioTrabalhoEncarregadoAluno = document.querySelector('#horarioTrabalhoEncarregado');
const contactoEncarregadoAluno        = document.querySelector('#contactoEncarregado');
const residenciaEncarregadoAluno      = document.querySelector('#residenciaEncarregado');
const formEncarregado                 = document.querySelector('#formEncarregado');

const checanomeEncarregado            = () => {
    let valid = false;
    const nomeEncarregado = nomeEncarregadoAluno.value.trim();
    if(!isRequired(nomeEncarregado)){
        mostraErro(nomeEncarregadoAluno, 'Campo nao deve estar vazio');
    }else{
        mostraSucesso(nomeEncarregadoAluno);
        valid = true;
    }
    return valid;
}
const checaprofissaoEncarregado       = () => {
    let valid = false;
    const profissaoEncarregado = profissaoEncarregadoAluno.value.trim();
    if(!isRequired(profissaoEncarregado)){
        mostraErro(profissaoEncarregadoAluno, 'Campo nao deve estar vazio');
    }else{
        mostraSucesso(profissaoEncarregadoAluno);
        valid =true;
    }
    return valid;
}
const checalocalTrabalhoEncarregado   = () => {
    let valid = false;
    const localTrabalhoEncarregado = localTrabalhoEncarregadooAluno.value.trim();
    if(!isRequired(localTrabalhoEncarregado)){
        mostraErro(localTrabalhoEncarregadooAluno, 'Campo nao deve estar vazio');
    }else{
        mostraSucesso(localTrabalhoEncarregadooAluno);
        valid =  true;
    }
    return true;
}
const checahorarioTrabalhoEncarregado = () => {
    let valid = false;
    const horarioTrabalhoEncarregado = horarioTrabalhoEncarregadoAluno.value.trim();
    if(!isRequired(horarioTrabalhoEncarregado)){
        mostraErro(horarioTrabalhoEncarregadoAluno, 'Campo nao deve estar vazio');
    }else{
        mostraSucesso(horarioTrabalhoEncarregadoAluno);
        valid = true;
    }
    return valid;
}
const checaresidenciaEncarregado      = () => {
    let valid = false;
    const residenciaEncarregado = residenciaEncarregadoAluno.value.trim();
    if(!isRequired(residenciaEncarregado)){
        mostraErro(residenciaEncarregadoAluno, 'Campo nao deve estar vazio');
    }else{
        mostraSucesso(residenciaEncarregadoAluno);
        valid = true;
    }
    return valid
}
const checacontactoEncarregado        = () => {
    const min = 9,
          max = 9;
    let valid = false;
    const contactoEncarregado = contactoEncarregadoAluno.value.trim();
    if(!isRequired(contactoEncarregado)){
        mostraErro(contactoEncarregadoAluno, 'Campo nao deve estar vazio');
    }else if (!isBetween(contactoEncarregado.length, min, max)) {
        mostraErro(contactoEncarregadoAluno, `O contacto deve ter ${min} caracteres.`)
    }
    /*else if(!contactoEncarregadoSeguro(contactoEncarregado)){
        mostraErro(contactoEncarregadoAluno, 'Contacto nao deve conter letra')
        }
    */
    else{
        mostraSucesso(contactoEncarregadoAluno);
        valid = true;
    }
    return valid
}
/*const contactoEncarregadoSeguro       = (contactoEncarregado) => {
    const re = new RegExp("^\([1-9]{2}\) (?:[2-8]|9[1-9])[0-9]{3}\-[0-9]{4}$");
    return re.test(contactoEncarregado);
}*/

//FORM TURMA
const nomTurma       = document.querySelector('#nomeTurma');
const classTurma     = document.querySelector('#classeTurma');
const descricTurma   = document.querySelector('#descricaoTurma');
const formTurma      = document.querySelector('#formTurma');

const checanomeTurma      = () =>{
    let valid =false;
    const nomeTurma   = nomTurma.value.trim();
    if(!isRequired(nomeTurma)){
        mostraErro(nomTurma, 'Campo nao pode estar vazio');
    }else{
        mostraSucesso(nomTurma);
        valid = true;
    }
    return valid
}
const checaclasseTurma    = () => {
    let valid = false;
    const classeTurma = classTurma.value.trim();
    if(!isRequired(classeTurma)){
        mostraErro(classTurma, 'Campo nao pode estar vazio');
    }else{
        mostraSucesso(classTurma);
        valid = true;
    }
}
const checadescricaoTurma = () => {
    let valid = false;
    const descricaoTurma = descricTurma.value.trim();
    if(!isRequired(descricaoTurma)){
        mostraErro(descricTurma, 'Campo nao pode estar vazio');
    }else{
        mostraSucesso(descricTurma);
        valid = true;
    }
    return valid;
}

const anoLectiv         = document.querySelector('#anoLectivo');
const escolaAnt         = document.querySelector('#escolaAnterior');
const classeAnt         = document.querySelector('#classeAnterior');
const turmaAnt          = document.querySelector('#turmaAnterior');
const numeroAnt         = document.querySelector('#numeroAnterior');
const nomeEmergenc      = document.querySelector('#nomeEmergencia');
const grauParentesc     = document.querySelector('#grauParentesco');
const contactoEmergenc  = document.querySelector('#contactoEmergencia');
const situacaoPedagogic = document.querySelector('#situacaoPedagogica');
const valorMatricul     = document.querySelector('#valorMatricula');
const formMatricula     = document.querySelector('#formMatricula');

const checaanoLectivo         = () => {
    let valid = false;
    const anoLectivo = anoLectiv.value.trim();
    if(!isRequired(anoLectivo)){
        mostraErro(anoLectiv, 'campo nao pode estar vazio');
    }else{
        mostraSucesso(anoLectiv);
        valid = true;
    }
    return valid;
}
const checaescolaAnterior     = () => {
    let valid = false;
    const escolaAnterior = escolaAnt.value.trim();
    if(!isRequired(escolaAnterior)){
        mostraErro(escolaAnt, 'Campo nao deve estar vazio');
    }else{
        mostraSucesso(escolaAnt);
        valid = true;
    }
    return valid;
}
const checaclasseAnterior     = () => {
    let valid = false;
    const classeAnterior = classeAnt.value.trim();
    if(!isRequired(classeAnterior)){
        mostraErro(classeAnt, 'Campo nao deve estar vazio');
    }else{
        mostraSucesso(classeAnt);
        valid = true;
    }
    return valid;
}
const checaturmaAnterior      = () => {
    let valid = false;
    const turmaAnterior = turmaAnt.value.trim();
    if(!isRequired(turmaAnterior)){
        mostraErro(turmaAnt, 'Campo nao deve estar vazio');
    }else{
        mostraSucesso(turmaAnt);
        valid = true;
    }
    return valid;
}
const checanumeroAnterior     = () => {
    let valid = false;
    const numeroAnterior = numeroAnt.value.trim();
    if(!isRequired(numeroAnterior)){
        mostraErro(numeroAnt, 'Campo nao deve estar vazio');
    }else{
        mostraSucesso(numeroAnt);
        valid = true;
    }
    return valid;
}
const checanomeEmergencia     = () => {
    let valid = false;
    const nomeEmergencia = nomeEmergenc.value.trim();
    if(!isRequired(nomeEmergencia)){
        mostraErro(nomeEmergenc, 'Campo nao deve estar vazio');
    }else{
        mostraSucesso(nomeEmergenc);
        valid = true;
    }
    return valid;
}
const checagrauParentesco     = () => {
    let valid = false;
    const grauParentesco = grauParentesc.value.trim();
    if(!isRequired(grauParentesco)){
        mostraErro(grauParentesc, 'Campo nao deve estar vazio');
    }else{
        mostraSucesso(grauParentesc);
        valid = true;
    }
    return valid;
}
const checacontactoEmergencia = () => {
    let valid = false;
    const contactoEmergencia = contactoEmergenc.value.trim();
    if(!isRequired(contactoEmergencia)){
        mostraErro(contactoEmergenc, 'Campo nao deve estar vazio');
    }else{
        mostraSucesso(contactoEmergenc);
        valid = true;
    }
    return valid;
}
const checasituacaoPedagogica = () => {
    let valid = false;
    const situacaoPedagogica = situacaoPedagogic.value.trim();
    if(!isRequired(situacaoPedagogica)){
        mostraErro(situacaoPedagogic, 'Campo nao deve estar vazio');
    }else{
        mostraSucesso(situacaoPedagogic);
        valid = true;
    }
    return valid;
}
const checavalorMatricula     = () => {
    let valid = false;
    const valorMatricula = valorMatricul.value.trim();
    if(!isRequired(valorMatricula)){
        mostraErro(valorMatricul, 'Campo nao deve estar vazio');
    }else{
        mostraSucesso(valorMatricul);
        valid = true;
    }
    return valid;
}

//FORM INFORMACAO
const infoAluno      = document.querySelector('#informacaoAluno');
const motivAluno     = document.querySelector('#motivoAluno');
const defAluno       = document.querySelector('#deficienciaAluno');
const formInformacao = document.querySelector('#formInformacao');

const checainformacaoAluno  = () =>{
    let valid =false;
    const informacaoAluno = infoAluno.value.trim();
    if(!isRequired(informacaoAluno)){
        mostraErro(infoAluno, 'Campo nao pode estar vazio');
    }else{
        mostraSucesso(infoAluno);
        valid = true;
    }
    return valid
}
const checamotivoAluno      = () => {
    let valid = false;
    const motivoAluno = motivAluno.value.trim();
    if(!isRequired(motivoAluno)){
        mostraErro(motivAluno, 'Campo nao pode estar vazio');
    }else{
        mostraSucesso(motivAluno);
        valid = true;
    }
}
const checadeficienciaAluno = () => {
    let valid = false;
    const deficienciaAluno = defAluno.value.trim();
    if(!isRequired(deficienciaAluno)){
        mostraErro(defAluno, 'Campo nao pode estar vazio');
    }else{
        mostraSucesso(defAluno);
        valid = true;
    }
    return valid;
}


//FORM AUTORIZADO
const nomeAuto              = document.querySelector('#nomeAutorizado');
const contactoAuto          = document.querySelector('#contactoAutorizado');
const tipoDocumentoAuto     = document.querySelector('#tipoDocumentoAutorizado');
const numeroDocumentoAuto   = document.querySelector('#numeroDocumentoAutorizado');
const validadeDocumentoAuto = document.querySelector('#validadeDocumentoAutorizado');
const formAutorizado        = document.querySelector('#formAutorizado');

const checanomeAutorizado = () => {
    let valid = false;
    const nomeAutorizado = nomeAuto.value.trim();
    if(!isRequired(nomeAutorizado)){
        mostraErro(nomeAuto, 'Campo nao deve estar vazio');
    }else{
        mostraSucesso(nomeAuto);
        valid = true;
    }
    return valid;
}
const checacontactoAutorizado = () => {
    let valid = false;
    const contactoAutorizado = contactoAuto.value.trim();
    if(!isRequired(contactoAutorizado)){
        mostraErro(contactoAuto, 'Campo nao deve estar vazio');
    }else{
        mostraSucesso(contactoAuto);
        valid = true;
    }
    return valid
}
const checatipoDocumentoAutorizado = () => {
    let valid = false;
    const tipoDocumentoAutorizado = tipoDocumentoAuto.value.trim();
    if(!isRequired(tipoDocumentoAutorizado)){
        mostraErro(tipoDocumentoAuto, 'Selecione um documento');
    }else{
        mostraSucesso(tipoDocumentoAuto)
        valid = true;
    }
    return valid;
}
const checanumeroDocumentoAutorizado = () => {
    let valid = false;
    const numeroDocumentoAutorizado = numeroDocumentoAuto.value.trim();
    if(!isRequired(numeroDocumentoAutorizado)){
        mostraErro(numeroDocumentoAuto, 'Campo nao deve estar vazio')
    }else{
        mostraSucesso(numeroDocumentoAuto);
        valid = true;
    }
    return valid;
}
const checavalidadeDocumentoAuto = () => {
    let valid = false;
    const validadeDocumentoAutorizado = validadeDocumentoAuto.value.trim();
    if(!isRequired(validadeDocumentoAutorizado)){
        mostraErro(validadeDocumentoAuto, 'Campo nao deve estar vazio');
    }else{
        mostraSucesso(validadeDocumentoAuto);
        valid = true;
    }
    return valid;
}



form.addEventListener('submit', function (e) {
    // prevevir que o form envie sem dados
    e.preventDefault();

    // validar campos
    let isnomeValid   = checaNome(),
        apelidoValid  = checaConta(),
        islevelvalida = checaLevel(),
        issenhaValid  = checaSenha(),
        isConfirmsenhaValid = checaConfirmSenha();

    let isFormValid = 
        isnomeValid   &&
        apelidoValid  &&
        issenhaValid  &&
        islevelvalida &&
        isConfirmsenhaValid;

    // submite ao server se o form for valido
    if (isFormValid) {

    }
});
formAluno.addEventListener('submit', function (e){
    e.preventDefault();
    let nomeAlunoValid           = checaNomeAluno(),
        generoValid              = checaGenero(),
        naturalidadeValid        = checaNaturalidade(),
        provinciaNascimentoValid = checaPovinciaNascimento(),
        distritoNascimentoValid  = checaDistritoNascimento(),
        bairroValid              = checaBairro(),
        nomePaiValid             = checaNomePai(),
        nomeMaeValid             = checaNomeMae(),
        tipoDocumentoAlunoValid  = checaTipoDocumento(),
        numeroDocumentoValid     = checaNumeroDocumento();
        
    let isFormAlunoValid =
        nomeAlunoValid           &&
        generoValid              &&
        naturalidadeValid        &&
        provinciaNascimentoValid &&
        distritoNascimentoValid  &&
        bairroValid              &&
        nomePaiValid             &&
        nomeMaeValid             &&
        tipoDocumentoAlunoValid  &&
        numeroDocumentoValid;
    
    if(isFormAlunoValid){

    }

});
formEncarregado.addEventListener('submit', function (e){
    e.preventDefault();

    let nomeEncarregadoAluno       = checanomeEncarregado(),
        profissaoEncarregado       = checaprofissaoEncarregado(),
        localTrabalhoEncarregado   = checalocalTrabalhoEncarregado(),
        horarioTrabalhoEncarregado = checahorarioTrabalhoEncarregado(),
        contactoEncarregado        = checacontactoEncarregado(),
        residenciaEncarregado      = checaresidenciaEncarregado();

    let isFormEncarregado =
        nomeEncarregadoAluno       &&
        profissaoEncarregado       &&
        localTrabalhoEncarregado   &&
        horarioTrabalhoEncarregado &&
        contactoEncarregado        && 
        residenciaEncarregado;

    if(isFormEncarregado){

    }
});
formTurma.addEventListener('submit', function(e){
    e.preventDefault();
    let nomeTurmaValid      = checanomeTurma(),
        classeTurmavalid    = checaclasseTurma(),
        descricaoTurmaValid = checadescricaoTurma();

    let isformTurma = 
        nomeTurmaValid   &&
        classeTurmavalid &&
        descricaoTurmaValid;

    if(isformTurma){

    }

});
formMatricula.addEventListener('submit', function (e){
    e.preventDefault();
    let anoLectivoValid         = checaanoLectivo(),
        escolaAnteriorValid     = checaescolaAnterior(),
        classeAnteriorValid     = checaclasseAnterior(),
        turmaAnteriorValid      = checaturmaAnterior(),
        numeroAnteriorValid     = checanumeroAnterior(),
        nomeEmergenciaValid     = checanomeEmergencia(),
        grauParentescoValid     = checagrauParentesco(),
        contactoEmergenciaValid = checacontactoEmergencia(),
        situacaoPedagogicaValid = checasituacaoPedagogica(),
        valorMatriculaValid     = checavalorMatricula();
        
    let isFormMatriculaValid    =
        anoLectivoValid         &&
        escolaAnteriorValid     &&
        classeAnteriorValid     &&
        turmaAnteriorValid      &&
        numeroAnteriorValid     &&
        nomeEmergenciaValid     &&
        grauParentescoValid     &&
        contactoEmergenciaValid &&
        situacaoPedagogicaValid &&
        valorMatriculaValid;
    
    if(isFormMatriculaValid){

    }

});
formInformacao.addEventListener('submit', function(e){
    e.preventDefault();
    let informacaoAlunoValid  = checainformacaoAluno(),
        motivoAlunoValid      = checamotivoAluno(),
        deficienciaAlunoValid = checadeficienciaAluno();

    let isformInformacaoValid = 
        informacaoAlunoValid  &&
        motivoAlunoValid      &&
        deficienciaAlunoValid;

    if(isformInformacaoValid){
    }
});
formAutorizado.addEventListener('submit', function(e){
    e.preventDefault();
    let nomeAutorizadoValid              = checanomeAutorizado(),
        contactoAutorizadoValid          = checacontactoAutorizado(),
        tipoDocumentoAutorizadoValid     = checatipoDocumentoAutorizado();
        numeroDocumentoAutorizadoValid   = checanumeroDocumentoAutorizado();
        validadeDocumentoAutorizadoValid = checavalidadeDocumentoAuto();

    let isformAutorizadoValid          = 
        nomeAutorizadoValid            &&
        contactoAutorizadoValid        &&
        tipoDocumentoAutorizadoValid   &&
        numeroDocumentoAutorizadoValid &&
        validadeDocumentoAutorizadoValid;

    if(isformAutorizadoValid){
    }

});




form.addEventListener('input', debounce(function (e) {
    switch (e.target.id) {
        case 'nome':
            checaNome();
            break;
        case 'level':
            checaLevel();
            break;
        case 'conta':
            checaConta();
            break;
        case 'senha':
            checaSenha();
            break;
        case 'confirm-senha':
            checaConfirmSenha();
            break;
    }
}));
formAluno.addEventListener('input', debounce(function (e){
    switch (e.target.id) {
        case 'nomeAluno':
            checaNomeAluno();
            break;
        case 'genero':
            checaGenero();
            break;
        case 'naturalidade':
            checaNaturalidade();
            break;
        case 'provinciaNascimento':
            checaPovinciaNascimento();
            break;
        case 'distritoNascimento':
            checaDistritoNascimento();
            break;
        case 'bairro':
            checaBairro();
            breake;
        case 'nomePai':
            checaNomePai();
           break;
        case 'nomeMae':
            checaNomeMae();
            break;
        case 'tipoDocumento':
            checaTipoDocumento();
            break;
        case 'numeroDocumento':
            checaNumeroDocumento();
            break;
    }
}));
formEncarregado.addEventListener('input', debounce(function (e){
    switch (e.target.id) {
        case 'profissaoEncarregado':
            checanomeEncarregado();
            break;
        case 'profissaoEncarregado':
            checaprofissaoEncarregado();
            break;
       case 'localTrabalhoEncarregado':
            checalocalTrabalhoEncarregado();
            break;
        case 'horarioTrabalhoEncarregado':
            checahorarioTrabalhoEncarregado();
            break;
        case 'contactoEncarregado':
            checacontactoEncarregado();
            break;
        case 'residenciaEncarregado':
            checaresidenciaEncarregado();
            break;
    }
}));
formTurma.addEventListener('input', debounce(function (e){
    switch (e.target.id) {
        case 'nomeTurma':
            checanomeTurma();
            break;
        case 'classeTurma':
            checaclasseTurma();
            break;
        case 'descricaoTurma':
            checadescricaoTurma();
            break;        

    }
}));
formMatricula.addEventListener('input', debounce(function (e){
    switch (e.target.id) {
        case 'anoLectivo':
            checaanoLectivo();
            break;
        case 'escolaAnterior':
            checaescolaAnterior();
            break;
        case 'classeAnterior':
            checaclasseAnterior();
            break;
        case 'turmaAnterior':
            checaturmaAnterior();
            break;
        case 'numeroAnterior':
            checanumeroAnterior();
            break;
        case 'nomeEmergencia':
            checanomeEmergencia();
            breake;
        case 'grauParentesco':
            checagrauParentesco();
           break;
        case 'contactoEmergencia':
            checacontactoEmergencia();
            break;
        case 'situacaoPedagogica':
            checasituacaoPedagogica();
            break;
        case 'valorMatricula':
            checavalorMatricula();
            break;
    }
}));
formInformacao.addEventListener('input', debounce(function (e){
    switch (e.target.id) {
        case 'informacaoAluno':
            checainformacaoAluno();
            break;
        case 'motivoAluno':
            checamotivoAluno();
            break;
        case 'deficienciaAluno':
            checadeficienciaAluno();
            break;        

    }
}));
formAutorizado.addEventListener('input', debounce(function (e){
    switch (e.target.id) {
        case 'nomeAutorizado':
            checanomeAutorizado();
            break;
        case 'contactoAutorizado':
            checacontactoAutorizado();
            break;
        case 'tipoDocumentoAutorizado':
            checatipoDocumentoAutorizado();
            break;
        case 'numeroDocumentoAutorizado':
            checanumeroDocumentoAutorizado();
            break;        
        case 'validadeDocumentoAutorizado':
            checavalidadeDocumentoAuto();
            break;
    }
}));

$('.datepicker').datepicker();