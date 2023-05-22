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



//FORM USER
const levelUser = document.querySelector('#level');   
const nomeUser    = document.querySelector('#nome');
const contaUser     = document.querySelector('#conta');
const senhUser        = document.querySelector('#senha');
const confirmsenhUser   = document.querySelector('#confirm-senha');
const form                = document.querySelector('#form');

const contactoUser          = document.querySelector('#contacto');
const dataNascimentoUser      = document.querySelector('#dataNascimento');
const generoUser                = document.querySelector('#genero');
const areaFormacaoUser            = document.querySelector('#areaFormacao');
const grauAcademicoUser             = document.querySelector('#grauAcademico');
const cursoLecionarUser               = document.querySelector('#cursoLecionar');
const discLecionarUser                  = document.querySelector('#discLecionar');
const disponibilidadeUser                 = document.querySelector('#disponibilidade');


const checaLevel = () => {
    let valid = false;
    const level = levelUser.value.trim();
    if(!isRequired(level)){
        mostraErro(levelUser, 'O campo nao pode estar vazio, escolha um nivel do funcionario');
    }else{
        mostraSucesso(levelUser);
        valid=true;
    }
    return valid;
}
const checaNome     = () => {
    let valid = false;
    const min = 5,
        max = 30;

    const nome = nomeUser.value.trim();

    if (!isRequired(nome)) {
        mostraErro(nomeUser, 'O campo nome completo nao pode estar vazio.');
    } else if (!isBetween(nome.length, min, max)) {
        mostraErro(nomeUser, `O nome deve ter entre ${min} a ${max} caracteres.`)
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
const checaSenha            = () => {
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
const checaConfirmSenha         = () => {
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
const senhaSegura                  = (senha) => {
    const re = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})");
    return re.test(senha);
};//
const checaContacto                   = () => {
    let valid = false;
    const contacto = contactoUser.value.trim();
    if(!isRequired(contacto)){
        mostraErro(contactoUser, 'O campo nao pode ficar vazio');
    }else{
        mostraSucesso(contactoUser);
        valid=true
    }
    return valid
}
const checadataNascimento                 = () => {
    let valid = false;
    const dataNascimento = dataNascimentoUser.value.trim();
    if(!isRequired(dataNascimento)){
        mostraErro(dataNascimentoUser, 'O campo nao deve estar vazio');
    }else{
        mostraSucesso(dataNascimentoUser);
        valid=true
    }
    return valid
}
const checaGenero                             = () => {
    let valid= false;
    const genero = generoUser.value.trim();
    if(!isRequired(genero)){
        mostraSucesso(generoUser, 'Selecione o genero do funcionario')
    }else{
        mostraSucesso(generoUser);
        valid = true;
    }
    return valid;
}
const checaareaFormacao                           = () => {
    let valid = false;
    const areaFormacao = areaFormacaoUser.value.trim();
    if(!isRequired(areaFormacao)){
        mostraErro(areaFormacaoUser, 'O campo nao deve ficar vazio');
    }else{
        mostraSucesso(areaFormacaoUser);
        valid=true;
    }
    return valid;
}
const checagrauAcademico                             = () => {
    let valid = false;
    const grauAcademico = grauAcademicoUser.value.trim();
    if(!isRequired(grauAcademico)){
        mostraErro(grauAcademicoUser, 'Selecione o grau academico do funcionario');
    }else{
        mostraSucesso(grauAcademicoUser);
        valid = true;
    }
    return valid;
}
const checacursoLecionar                                = () => {
    let valid = false;
    const cursoLecionar = cursoLecionarUser.value.trim();
    if(!isRequired(cursoLecionar)){
        mostraErro(cursoLecionarUser, 'Selecione o curso que vai lecionar');
    }else{
        mostraSucesso(cursoLecionarUser);
        valid =true;
    }
    return valid;
}
const checadiscLecionar                                    = () => {
    let valid = false;
    const discLecionar = discLecionarUser.value.trim();
    if(!isRequired(discLecionar)){
        mostraErro(discLecionarUser, 'Selecione a disciplina que vai lecionar');
    }else{
        mostraSucesso(discLecionarUser);
        valid = true;
    }
    return valid;
}
const checadisponibilidade                                     = () => {
    let valid = false;
    const disponibilidade = disponibilidadeUser.value.trim();
    if(!isRequired(disponibilidade)){
        mostraErro(disponibilidadeUser, 'Selecione o regime que o funcionario trabalha')
    }else{
        mostraSucesso(disponibilidadeUser);
        valid = true;
    }
    return valid;
}



form.addEventListener('submit', function (e) {
    // prevevir que o form envie sem dados
    e.preventDefault();
    // validar campos
    let isnomeValid = checaNome(),
        apelidoValid  = checaConta(),
        islevelvalida   = checaLevel(),
        issenhaValid      = checaSenha(),
        isConfirmsenhaValid = checaConfirmSenha(),//
        iscontactoUservalid    = checaContacto(),
        isdataNascimentoValid    = checadataNascimento(),
        isgeneroValid              = checaGenero(),
        isgrauAcademicoUserValid     =  checagrauAcademico(),
        iscursoLecionarUserValid       = checacursoLecionar(),
        isdiscLecionarUserValid          = checadiscLecionar(),
        isdisponibilidadeUserValid         = checadisponibilidade(),
        isareaFormacaoUserValid              = checaareaFormacao();


    let isFormValid = 
        isnomeValid  &&
        apelidoValid   &&
        issenhaValid     &&
        islevelvalida      &&
        isConfirmsenhaValid  &&//
        iscontactoUservalid    &&
        isdataNascimentoValid    &&
        isgeneroValid              &&
        isgrauAcademicoUserValid     &&
        iscursoLecionarUserValid       &&
        isdiscLecionarUserValid          &&
        isdisponibilidadeUserValid         &&
        isareaFormacaoUserValid
    ;

    // submite ao server se o form for valido
    if (isFormValid) {

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
        case 'contacto':
            checaContacto();
            break;
        case 'dataNascimento':
            checadataNascimento();
            break;   
        case 'genero':
            checaGenero();
            break;
        case 'areaFormacao':
            checaareaFormacao();
            break; 
        case 'grauAcademico':
            checagrauAcademico();
            break; 
        case 'cursoLecionar':
            checacursoLecionar();
            break; 
        case 'discLecionar':
            checadiscLecionar();
            break;  
        case 'disponibilidade':
            checadisponibilidade();
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

