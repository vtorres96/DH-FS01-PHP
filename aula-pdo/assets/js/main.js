// setTimeout e uma funcao que trata algo e oferece alguns segundos de espera
// para depois efetuar o processo que desejamos tratar. Podemos pensar nela como
// um sleep.
setTimeout(function(){
    // capturando a div que  contenha a classe alert-success no front-end
    let mensagemDeSucesso = document.querySelector('.alert-success')

    // removendo a div de classe alert-success
    if(mensagemDeSucesso){
        mensagemDeSucesso.remove()
    }

}, 5000)