A base da aula de hoje irá se decorrer em cima da parte introdutória do módulo de PHP Orientado a Objetos.
Onde iremos abordar os conceitos: Classes, atributos, métodos, objetos .

Em programação orientada a objetos temos um paradigma a ser implementado.

Teremos que que nos desprender das raízes do PHP Estruturado.

Representa coisas do mundo real através de objetos.

notebook no mundo real e na programação orientada a objetos ele virá um Objeto Notebook.

---- Classes ----

MUNDO REAL      |   MUNDO ORIENTADO A OBJETOS
                |
celular         |   classes Celular
ps4             |   classes VideoGame
mouse           |   classes Mouse
mesa            |   classes Mesa
tv              |   classes TV
mochila         |   classes Mochila
gato            |   classes Gato
impressora      |   classes Impressora
caneta          |   classes Caneta
caderno         |   classes Caderno

no código um objeto é representado através de uma classe, e devemos pensar sempre antes de criar um objeto novo,
ou seja, uma classe nova. Pois, devemos se atentar em criar classes genéricas (que sirvam para mais de um objeto).

Podemos pegar o exemplo do objeto celular, no código a gente teria uma classe Celular.

---- Atributos ----

Agora podemos pensar em uma forma de modelar essas classes. Conseguimos modelar melhor
uma classe quando aplicamos características que aquele objeto do mundo real possui, por 
exemplo, no caso do celular quais são as características dele ?

Podemos ter como características de todo celular: cor, tamanho, tela, camera, modelo, marca.

Portanto podemos ter um objeto celular que será representado através de uma classe, e, 
está classe ela possuirá alguns atributos (características genéricas que se aplicariam para qualquer objeto,
no caso do celular, para qualquer celular)

Exercícios com a turma. 
No mundo real teremos que representar consoles de video game na orientação a objetos.
Lembre-se que estes objetos (classes) possuem características (atributos).

No mundo orientado a objetos, como ficaria a representação disso ?

Classe Video Game e está classe possuiria alguns atributos como: modelo, marca, peso, cor.


---- Objetos ----

Objeto é tudo que podemos instanciar de uma classe. Ou seja, quando temos a classe celular, podemos instanciar 
um objeto específico, por exemplo, um objeto que seria motorola g7, outro que seria iphone X, outro que seria
lg k12, e assim por diante. 

Já no caso de video game podemos pensar em objetos relacionados a essa classe como: Nintendo Switch, Playstation 4,
Xbox ONE, e assim por diante.

Lembrando que cada objeto será algo que foi criado a partir de um classe, para que o objeto celular exista devemos
ter uma classe Celular, e o mesmo vale para o video game, para os objetos video game existirem precisaremos ter uma
classe que será VideoGame. E com base nessas classes iremos instanciar novos objetos.

---- Métodos ----

Métodos são funções que alguma classe possui ou até mesmo pode executar, no caso de uma classe celular, podemos
pensar nas principais funções de um celular que são: efetuar ligacao e enviarSMS.

Logo os principais métodos de uma classe Celular seriam: efetuar ligação e enviar SMS.

Podemos pensar no formato de que se algo tem alguma utilidade, essa utilidade se torna um método (que antes a gente
conhecia como funções), que será uma função de uma determinada classe.

Vamos pensar juntos em alguns métodos de uma classe VideoGame, ou seja, algumas funções utilitárias de um video game
na vida real. 

No caso podemos criar métodos como: ligarVideoGame, desligarVideoGame, iniciarJogo, etc...


