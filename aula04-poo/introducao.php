Interface

As interfaces auxiliam na definição das classes, são formadas pela declaração de um ou mais métodos,
no qual estes métodos obrigatoriamente não possuem corpo / instruções devido serem métodos que implicitamente
são abstratos, e como sabemos, métodos abstratos não podem possuir corpo / instruções, ou seja, são apenas métodos vazios,
para servirem de exemplo no momento em que uma classe passar a assinar um contrato com a interface específica.

Assim como na herança de classes efetuamos extends para herdar os métodos e atributos de uma super classe (classe pai)
Na interface também conseguimos efetuar meio que uma herança de classes, que é a implementação, utilizando a palavra implements.

Exemplo de herança de classe:
    Podemos ter uma super classe (classe pai) Animal, e um classe AnimalMarinho que irá extender os métodos e atributos
    da classe Animal, em código ficaria desta forma:

    abstract class Animal {

    }

    class AnimalMarinho extends Animal {

    }

Exemplo de implementação de interface:
    Podemos ter uma interface PlacaControladora, e uma classe ControleRemoto que irá implementar os métodos da interface.
    Em código ficaria desta forma:

    interface PlacaControladora {
        function sadsad();
    }

    class ControleRemoto implements PlacaControladora {

    }

Mas, com tanta similaridade, vamos as diferença entres Classe Abstrata e Interface:

Interface
   - Seus métodos são implicitamente Públicos e Abstratos (Não podem conter corpo / instruções).
   - Não há como fazer uma instância de uma Interface e nem como criar um método construtor. 
   - Existem linguages de programação que não suportam Heranças Múltiplas, as Interfaces são usadas para implementá-las.

Classe Abstrata
    - É um tipo especial de classe que não há como criar instâncias dela.
    - É usada apenas para servir de modelo para outras classes, ou seja apenas, ser herdada, funciona como uma super classe.

Quando estamos trabalhando com Classe Abstrata temos a liberdade de definir se um método será abstrato ou não, portanto, os métodos
que não forem abstract podem ter corpo / instruções.
Já, quando estamos utilizando uma interface o método já tem implicito que será abstrato portanto, não poderá ter corpo / instruções nunca.
