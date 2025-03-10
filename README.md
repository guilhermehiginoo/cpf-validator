# Validador de CPF em PHP

Este é um script PHP que valida um número de CPF. 
O script realiza a verificação da autenticidade do CPF, garantindo que os 11 dígitos fornecidos estão corretos com base nos dois dígitos verificadores.

## Objetivo

O objetivo deste script é garantir que o CPF informado esteja correto, utilizando a lógica dos dois dígitos verificadores que são calculados a partir dos 9 primeiros dígitos do CPF.

## Lógica do Código

1. **Remoção de caracteres não numéricos**:  
   O código começa removendo os caracteres não numéricos, como pontos (`.`) e hífens (`-`), para trabalhar apenas com os números do CPF.

2. **Verificação do tamanho do CPF**:  
   A seguir, o código verifica se o número do CPF tem exatamente 11 caracteres. Se o CPF tiver um número diferente de 11 dígitos, ele é considerado inválido.

3. **Cálculo do primeiro dígito verificador**:  
   O primeiro dígito verificador é calculado com base nos 9 primeiros dígitos do CPF, utilizando um multiplicador de 10 até 2. O cálculo da soma desses valores é feito, e o resto da divisão por 11 é usado para determinar o primeiro dígito verificador. Se o resto for menor que 2, o primeiro dígito será 0, caso contrário, o dígito será 11 menos o resto.

4. **Cálculo do segundo dígito verificador**:  
   O segundo dígito verificador é calculado considerando os 9 primeiros dígitos do CPF e o primeiro dígito verificador encontrado no passo anterior. A lógica é semelhante ao cálculo do primeiro dígito, mas com um multiplicador de 11 até 2. O resultado da soma é utilizado para calcular o segundo dígito verificador.

5. **Validação do CPF**:  
   O CPF é validado comparando os dois dígitos calculados com os dois últimos dígitos fornecidos. Se os dígitos não coincidirem, o CPF é considerado inválido.

## Como Usar

1. O script define um número de CPF em formato padrão, com pontos e hífen (ex: `111.222.333-44`).
2. A partir do CPF fornecido, o script faz a remoção de caracteres não numéricos e calcula os dois dígitos verificadores.
3. O código exibe uma mensagem indicando se o CPF é válido ou inválido.

## Exemplo de Saída

- **Entrada**: `111.222.333-44`
- **Saída**:  
  `Esse é o número do CPF inicial: 111.222.333-44`  
  `CPF após tratamento: 11122233344`  
  `Agora, vamos checar se o CPF é válido`  
  `CPF Inválido`  
  `Se fosse válido, os dois últimos dígitos deveriam ser: XXYY`

Ou, se o CPF for válido:  
  `CPF Válido`

## Conclusão

Este script pode ser utilizado para validar números de CPF de maneira simples e rápida. É uma ferramenta útil para verificar a autenticidade de documentos em sistemas que exigem a validação de CPF.

## Licença

Este código está disponível para uso livre. Sinta-se à vontade para modificá-lo e utilizá-lo conforme necessário.
