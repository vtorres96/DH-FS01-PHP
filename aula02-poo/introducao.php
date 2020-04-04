
O conteúdo da aula de hoje será: Classe abstrata, Herança de classe, método construtor, visibilidade dos atributos

Teremos o conteúdo da aula02 de POO dividido em teoria e prática de maneira que:

Resumo teórico de toda a parada hahaha
iremos criar uma classe de equipamento, que terá os métodos liga e desliga (por exemplo) para que ela sirva como uma classe pai genérica. Assim iremos criar uma classe aspirador de pó (por exemplo) que será a que irá herdar os comportamentos da classe pai, logo o aspirador de pó poderá ser ligado e desligado... 

Então na primeira parte da aula iremos entender esses conceitos e depois iremos aplicá-los na prática. De modo que realmente a gente consiga aplicar e ir mais maduro para que na volta do intervalo (2ª parte da aula) possamos fazer algo mais complexo e com mais métodos)


O que é classe abstrata ?
classe modelo para outras classes, que no caso serão as classes
filhas. 

Qual a vantagem de uma classe abstrata ?
Nela podemos criar métodos que irão servir para as classes que a herdam, ou seja, 
podemos pensar que teremos métodos genéricos que podem ser utilizados por outras classes.

Um exemplo que podemos imaginar seria... 
notebook, televisão, mouse sem fio, celular são equipamentos, logo, todos estes equipamentos poderiam realmente herdar uma classe abstrata que seria a classe Equipamentos. 
E podemos pensar também de modo simplificado, que teremos métodos génericos para que
todas essas classes possam utilizar, como ligar() e desligar().


RECAPITULANDO CLASSE ABSTRATA

Classe Abstrata define propriedades e métodos a serem herdados por classes que a estendem (é como se fosse um contrato - a classe que estende deve ter a abstrata como um modelo - e deve declarar todos os métodos e propriedades da classe abstrata).

É impossível instanciar um objeto a partir da classe abstrata - só é possível instanciar um objeto de uma classe que estende uma classe abstrata.


Por que usar classes abstratas?

Imagine um portal que exige cadastro. Temos a classe abstrata UsuarioCadastrado.

Mas há diferentes planos. TODO usuário precisa de um plano. Mas cada plano tem suas especificidades.

Então podemos ter a classe Premium, Basic, Free... todas elas estendem UsuarioCadastrado.

Mas o método acessos() será diferente entre cada tipo de usuário:

usuário Premium tem acesso a tudo;
$usuario = new Premium();

usuário Basic tem um acesso mais restrito.
$usuario = new Basic();

usuário Free tem um acesso beeeem restrito.
$usuario = new Free();



Uma das vantagens de POO é o encapsulamento (que confere segurança ao nosso projeto, pois nós protegemos algumas REGRAS DE NEGÓCIO através das keywords de visibilidade.

Exemplo: Caixa Eletrônico.

Conseguimos inserir o cartão, digitar a senha e sacar o dinheiro.
Mas não temos acesso à conta que o caixa faz, como ele conta as notas, etc...


MÉTODO CONSTRUTOR:

declaramos com public function __construct( ) {

   // definição de propriedades e métodos

}

Tudo o que estiver declarado dentro do método construtor será executado assim que o objeto for instanciado, instantaneamente.


SOBRE VISIBILIDADE


Orelhão (telefone público) é PUBLIC, pois todos podem acessar.

Telefone Fixo é PROTECTED, pois apenas quem está na casa ou escritório tem acesso.

E o Celular é PRIVATE, pois apenas nós mesmos acessamos ele.


