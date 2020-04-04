O que é polimorfismo ? 

É o princípio pelo qual duas ou mais classes derivadas
de uma mesma superclasse (classe pai) podem invocar métodos que têm a mesma identificação
(assinatura) mas comportamentos distintos. Ou seja, podemos pensar em um exemplo relacionado
ao mundo animal. 

No exemplo podemos pensar da seguinte forma:
    Temos uma superclasse (classe pai) Animal e teremos uma classe AnimalMarinho
    que irá herdar os métodos da classe Animal que terá a mesma identificação,
    também teremos uma classe Tubarao que irá herdar métodos da classe AnimalMarinho.
    Poderiamos ter uma classe Polvo ou até mesmo carangueijo que iriam herdar os métodos da classe AnimalMarinho.

O que é sobrecarga de métodos ?

A sobrecarga de métodos nos permite ter a existência de vários métodos de mesmo nome, 
porém com assinaturas levemente diferentes. Ou seja, podemos pensar em um exemplo deste tipo:

No exemplo podemos organizar nosso raciocínio da seguinte forma:
    Passaremos a ter métodos abstratos, ou seja, que irão servir apenas de modelo na superclasse (classe pai)
    para que as classes que herdam dela possam implementar e trabalhar da forma que quiserem com leves alterações.
    
    Pense que a classe Animal terá o método locomover(), porém, cada animal se locomove de uma forma diferente.
    
    Logo a classe AnimalMarinho que herda os métodos da classe Animal, poderá utilizar o método abstrato locomover(),
    para indicar qual a forma que o animal marinho se locomove, que é nadando. Então a gente teria possibilidade de 
    alterar o método locomover somente dentro da classe AnimalMarinho para indicar qual a forma que o animal marinho
    se locomove. 

    Sabemos que todo animal marinho irá se locomover nadando, porém, existem formas diferentes de se locomover
    para um animal marinho, podemos pensar no exemplo da água viva que tem uma forma de se locomover e o do tubarão que tem
    outra forma totalmente diferente. Logo, poderiamos implementar dentro de cada uma destas classes a forma que realmente o
    animal irá se locomover. Ou seja, podemos pensar que o tubarão se locomove rapidamente e a água viva se locomove de forma
    mais lenta em relação ao tubarão.



