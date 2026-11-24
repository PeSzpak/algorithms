# Algorithms (PHP)

Exercícios de lógica de programação resolvidos em PHP, rodando no terminal: estrutura sequencial, condicional, repetição (`for`, `while`, `do-while`) e arrays.

## Exemplo em execução

Cada programa pergunta os valores no terminal e imprime o resultado. Equação do 2º grau (`x² - 3x + 2`), com o que foi digitado depois de cada pergunta:

```text
$ php conditional-estructure/02-baskara.php
Coeficiente a: 1
Coeficiente b: -3
Coeficiente c: 2
X1 = 2.0000
X2 = 1.0000
```

## Como rodar

Pré-requisito: PHP 8 no terminal (a entrada usa `readline()` e `fgets(STDIN)`, então não roda no navegador).

```bash
php sequential-estructure/01-terreno.php
```

Para testar sem digitar, mande a entrada por pipe, uma linha por pergunta:

```bash
printf '1\n-3\n2\n' | php conditional-estructure/02-baskara.php
```

## Exercícios

| Pasta | Arquivos | O que treina |
|---|---|---|
| `sequential-estructure/` | `01-terreno` (área e preço), `02-retangulo` (área, perímetro, diagonal), `03-idade` (média de duas idades), `04-soma`, `05-troco`, `06-circulo`, `07-pagamento` (horas x valor), `08-consumo` (km/l), `09-medidas` (áreas de quadrado, triângulo e trapézio), `10-duracao` (segundos para h:m:s) | entrada, cálculo e saída formatada com `number_format` |
| `conditional-estructure/` | `01-notas` (aprovação), `02-baskara`, `03-menor-de-tres`, `04-operadora` (franquia de minutos), `05-troco-verificado`, `06-glicose` (classificação), `07-dardo` (maior distância), `08-temperatura` (vazio) | `if` / `elseif` / `else` |
| `loop-structure/for/` | `01-tabuada` (com `do-while` para repetir), `02-soma-impares`, `03-sequencia-impares`, `04-dentro-fora` (intervalo 10 a 20), `05-par-impar`, `06-mediaPonderada`, `07-divisao`, `08-fatorial` (até 15), `09-experiencias` (relatório de cobaias com `switch`) | contador, acumulador, `for`, `switch` |
| `loop-structure/while/` | `01-crescente`, `02-mediaIdades` (para com idade negativa), `03-senhaFixa`, `04-quadrante`, `05-validacao-de-nota`, `06-combustivel`, `07-pares-consecutivos` e `07.2` (mesmo problema com um `while` interno) | repetição com condição de parada |
| `arrays/` | `01-array` (maior valor e a posição dele, a partir de uma linha com números separados por espaço) | `explode`, percorrer array |

A pasta `.idea/` é a configuração do PhpStorm e não é necessária para rodar.

## Limitações conhecidas

Encontradas rodando os programas (24/11/2026); o código não foi alterado:

- `sequential-estructure/02-retangulo.php`: o perímetro usa `2 * (base * altura)`; o certo é `2 * (base + altura)`. Base 3 e altura 4 dão 24 em vez de 14.
- `sequential-estructure/06-circulo.php`: a área é calculada como `raio * pi()`; falta elevar o raio ao quadrado. Raio 2 dá 6,28 em vez de 12,57.
- `sequential-estructure/07-pagamento.php`: o valor sai duas vezes colado (`R$40004000.00` para 25 x 160), porque a string imprime `$pagamento` e depois o `number_format`.
- `conditional-estructure/02-baskara.php`: com `a = 0` dá `DivisionByZeroError`.
- `sequential-estructure/08-consumo.php` com combustível 0 e `loop-structure/for/09-experiencias.php` sem nenhuma cobaia válida também dividem por zero.
- `conditional-estructure/03-menor-de-tres.php` e `07-dardo.php` usam `&` (bit a bit) em vez de `&&`. Funciona com booleanos, mas em empate o resultado cai sempre no terceiro valor.
- `conditional-estructure/08-temperatura.php` está vazio.
