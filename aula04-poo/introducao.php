Interface

As interfaces auxiliam na definição das classes, são formadas pela declaração de um ou mais métodos,
no qual estes métodos obrigatoriamente não possuem corpo / instruções, ou seja, são apenas métodos vazios,
para servirem de exemplo no momento em que uma classe passa a assinar um contrato com a interface específica.

Assim como na herança de classes efetuamos extends para herdar os métodos e atributos de uma super classe (classe pai)
Na interface também conseguimos efetuar meio que uma herança nas classes, que é a implementação, utilizando a palavra implements.

Exemplo de herança de classe:
    Podemos ter uma super classe (classe pai) Animal, e um classe AnimalMarinho que irá extender os métodos e atributos
    da classe Animal, em código ficaria desta forma:

    abstract class Animal {

    }

    class AnimalMarinho extends Animal {

    }

Exemplo de implementação de classe:
    Podemos ter uma interface PlacaControladora, e uma classe ControleRemoto que irá implementar os métodos da interface.
    Em código ficaria desta forma:

    interface PlacaControladora {
        function sadsad();
    }

    class ControleRemoto implements PlacaControladora {

    }

Mas, com tanta similaridade, vamos a diferença entre Classe Abstrata e Interface:

Interface
   - Seus métodos são implicitamente Públicos e Abstratos.
   - Não há como fazer uma instância de uma Interface e nem como criar um Construtor. 
   - Existem linguages de programação que não suportam Heranças Múltiplas, as Interfaces são usadas para implementá-las.

Classe Abstrata
    - É um tipo especial de classe que não há como criar instâncias dela.
    - É usada apenas para servir de modelo para outras classes, ou seja apenas, ser herdada, funciona como uma super classe.