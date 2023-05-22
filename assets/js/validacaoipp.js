//VALIDACAO JS
const isRequired    = value => value === '' ? false : true;
const isBetween     = (length, min, max) => length < min || length > max ? false : true;
const mostraErro    = (input, message)   => {
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

//form add aluno
const fullName = document.querySelector('#fullname');
const nomePai    = document.querySelector('#nome_pai');
const Idade        = document.querySelector('#idade');
const Nacionalidade  = document.querySelector('#nacionalidade');
const Naturalidade     = document.querySelector('#naturalidade');
const Morada             = document.querySelector('#morada');
const tipo_Documento       = document.querySelector('#tipo_documento');
const nr_Documento           = document.querySelector('#nr_documento');
const Curso                    = document.querySelector('#curso');
const ano_Frequentar             = document.querySelector('#ano_frequentar');
const contato_Pessoal              = document.querySelector('contato_pessoal');
const contato_Emergencia             = document.querySelector('#contato_emergencia');
const turmaAluno                       = document.querySelector('#turma');
const periodoAluno                       = document.querySelector('#periodo');
const formAluno                            = document.querySelector('#formAluno')

const checaTurma             = () => {
    let valid = false;
    const turma = turmaAluno.value.trim();
    if(!isRequired(turma)){
        mostraErro(turmaAluno, 'Insira a turma do estudante');
    }else{
        mostraSucesso(turmaAluno);
        valid =true;
    }
    return  valid;
}
const checaPeriodo           = () => {
    let valid =false;
    const periodo = periodoAluno.valid.trim();
    if(!isRequired(periodo)){
        mostraErro(periodoAluno, 'Selecione o periodo a frequentar');
    }else{
        mostraSucesso(periodoAluno);
        valid = true;
    }
    return valid;
}
const checaFullname          = () => {
    const min = 10;
    let valid = false;
    const fullname = fullName.value.trim();
    if(!isRequired(fullname)){
        mostraErro(fullName, 'O campo nao deve ficar vazio');
    }else if(!isBetween(fullname.length, min)){
        mostraErro(fullName, `O campo deve ter entre ${min} caracteres no minimo.`)
    }else{
        mostraSucesso(fullName);
        valid = true;
    }
    return valid;
}
const checaNomepai           = () => {
    let valid = false;
    const nome_pai = nomePai.value.trim();
    if(!isRequired(nome_pai)){
        mostraErro(nomePai, 'O campo nao deve ficar vazio')
    }else{
        mostraSucesso(nomePai);
        valid = true;
    }
    return valid;
}
const checaIdade             = () => {
    let valid   = false;
    const idade = Idade.value.trim();
    if(!isRequired(idade)){
        mostraErro(Idade, 'O campo nao deve ficar vazio');
    }else{
        mostraSucesso(Idade);
        valid = true;
    }
    return valid;
}
const checaNacionalidade     = () => {
    let valid = false;
    const nacionalidade = Nacionalidade.value.trim();
    if(!isRequired(nacionalidade)){
        mostraErro(Nacionalidade, 'O campo nao deve ficar vazio');
    }else{
        mostraSucesso(Nacionalidade);
        valid = true;
    }
    return valid;
}
const chacaNaturalidade      = () => {
    let valid = false;
    const naturalidade = Naturalidade.value.trim();
    if(!isRequired(naturalidade)){
        mostraErro(Naturalidade, 'O campo nao deve ficar vazio')
    }else{
        mostraSucesso(Naturalidade);
        valid = true;
    }
    return valid;
}
const checaMorada            = () => {
    let valid = false;
    const morada = Morada.value.trim();
    if(!isRequired(morada)){
        mostraErro(Morada, 'O campo nao deve ficar vazio')
    }else{
        mostraSucesso(Morada);
        valid = true;
    }
    return valid;
}
const checaTipodocumento     = () => {
    let valid = false;
    const tipo_documento = tipo_Documento.value.trim();
    if(!isRequired(tipo_documento)){
        mostraErro(tipo_Documento, 'O campo nao deve ficar vazio')
    }else{
        mostraSucesso(tipo_Documento);
        valid = true;
    }
    return valid;
}
const checaNrdocumento       = () => {
    let valid = false;
    const nr_documento = nr_Documento.value.trim();
    if(!isRequired(nr_documento)){
        mostraErro(nr_Documento, 'O campo nao deve ficar vazio');
    }else{
        mostraSucesso(nr_Documento);
        valid = true;
    }
    return valid;
}
const checaCurso             = () => {
    let valid = false;
    const curso = Curso.value.trim();
    if(!isRequired(curso)){
        mostraErro(Curso, 'O campo nao deve ficar vazio')
    }else{
        mostraSucesso(Curso);
        valid = true;
    }
    return valid;
}
const checaAnofrequentar     = () => {
    let valid = false;
    const ano_frequentar = ano_Frequentar.value.trim();
    if(!isRequired(ano_frequentar)){
        mostraErro(ano_Frequentar, 'O campo nao deve ficar vazio')
    }else{
        mostraSucesso(ano_Frequentar);
        valid = true;
    }
    return valid;
}
const checaContatopessoal    = () => {
    let valid = false;
    const min = 9;
          max = 9;
    const contato_pessoal = contato_Pessoal.value.trim();
    if(!isRequired(contato_pessoal)){
        mostraErro(contato_Pessoal, 'O campo nao deve estar vazio');
    }else if(!isBetween(contato_pessoal.length, min, max)){
        mostraErro(contato_Pessoal, 'deve conter somente 9 caracteres e devem ser numericos');
    }else{
        mostraSucesso(contato_Pessoal);
        valid = true;
    }
    return valid;
}
const checaContatoemergencia = () => {
    let valid = false;
    const min =9;
          max =9;
    const contato_emergencia = contato_Emergencia.value.trim();
    if(!isRequired(contato_emergencia)){
        mostraErro(contato_Emergencia, 'O campo nao deve estar vazio');
    }else if(!isBetween(contato_emergencia.length, min, max)){
        mostraErro(contato_Emergencia, 'deve conter somente 9 caracteres e devem ser numericos');
    }else{
        mostraSucesso(contato_Emergencia);
        valid = true;
    }
    return valid;
}

formAluno.addEventListener('submit', function(e){
    e.preventDefault();
    let fullname           = checaFullname(),
        nomepai            = checaNomepai(),
        idade              = checaIdade(),
        turma              = checaTurma(),
        periodo            = checaPeriodo(),
        nacionalidade      = checaNacionalidade(),
        naturalidade       = chacaNaturalidade(),
        morada             = checaMorada(),
        tipo_documento     = checaTipodocumento(),
        nr_documento       = checaNrdocumento(),
        curso              = checaCurso(),
        ano_frequentar     = checaAnofrequentar(),
        contato_pessoal    = checaContatopessoal(),
        contato_emergencia = checaContatoemergencia();

    let formAluno       = 
        fullname        &&
        nomepai         &&
        idade           &&
        turma           &&
        nacionalidade   &&
        periodo         &&
        naturalidade    &&
        morada          &&
        tipo_documento  &&
        nr_documento    &&
        curso           &&
        ano_frequentar  &&
        contato_pessoal &&
        contato_emergencia;

    if(formAluno){}
});
formAluno.addEventListener('input', debounce(function (e){
    switch(e.target.id){
        case 'fullname'          :checaFullname();break;
        case 'nome_pai'          :checaNomepai();break;
        case 'idade'             :checaIdade();break;
        case 'turma'             :checaTurma();break;
        case 'periodo'           :checaPeriodo();break;
        case 'nacionalidade'     :checaNacionalidade();break;
        case 'naturalidade'      :chacaNaturalidade();break;
        case 'morada'            :checaMorada();break;
        case 'tipo_documento'    :checaTipodocumento();break;
        case 'nr_documento'      :checaNrdocumento();break;
        case 'curso'             :checaCurso();break;
        case 'ano_frequentar'    :checaAnofrequentar();break;
        case 'contato_pessoal'   :checaContatopessoal();break;
        case 'contato_emergencia':checaContatoemergencia();break;

    }
}));
 