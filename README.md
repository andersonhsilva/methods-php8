# Métodos Elaborados em PHP para Uso Diário

Este é um projeto totalmente *Open Source*. Para utilizá-lo, copiá-lo e modificá-lo você não paga absolutamente nada. No entanto, para manter o projeto de forma adequada, aceitamos sugestões e contribuições de códigos para realização de testes e identificação de possíveis falhas e bugs.

O projeto está atualizado para o PHP 8.2 Utilize sempre a última versão do PHP.

## Instalação e Configuração

1. Execute o comando abaixo na raiz do seu projeto pelo terminal de comandos:

    ```bash
    composer require andersonhsilva/metodos-php
    ```

2. Para que a chamada dos métodos fique disponível globalmente em todo o projeto Laravel:

    2.1. Edite o arquivo `config/app.php`.

    2.2. Adicione no final do array `'aliases' => []` o seguinte:

    ```php
    'Methods' => Andersonhsilva\MethodsPhp\Methods::class,
    ```

## Relação de Métodos e Funções Disponíveis

- Converte um valor monetário para float, removendo símbolos de moeda e formatação comuns. [doubleBase...](./src/Methods.php#L28)
- Adiciona zeros à esquerda de um valor até atingir o comprimento especificado. [padLeftWithZeroes...](./src/Methods.php#L60)
- Formata um valor numérico para exibição com duas casas decimais. [showDouble...](./src/Methods.php#L92)
- Formata um valor numérico como um inteiro, removendo as casas decimais, mas preservando o valor numérico total. [showDoubleAsInt...](./src/Methods.php#L121)
- Converte um valor inteiro para um formato decimal, assumindo que os últimos dois dígitos representam os centavos. [showIntAsDouble...](./src/Methods.php#L146)
- Aplica uma máscara a uma string. [maskString...](./src/Methods.php#L170)
- Formata uma data ou hora usando a máscara especificada. [maskDate...](./src/Methods.php#L211)
- Converte uma data do formato brasileiro (dd/mm/yyyy) para o formato de banco de dados (yyyy-mm-dd). [convertDateToDbFormat...](./src/Methods.php#L232)
- Adiciona um período a uma data informada e retorna a nova data no formato yyyy-mm-dd. [addPeriodToDate...](./src/Methods.php#L255)
- Retorna o último dia do mês para um período dado no formato yyyy-mm. [lastDayOfMonth...](./src/Methods.php#L280)
- Arredonda um número para cima até o número de casas decimais especificado. [RoundUp...](./src/Methods.php#L307)
- Arredonda um número para baixo até o número de casas decimais especificado. [roundDown...](./src/Methods.php#L334)
- Remove todos os caracteres não numéricos de uma string. [onlyNumber...](./src/Methods.php#L366)
- Remove todos os caracteres que não sejam letras ou números de uma string. [onlyLettersAndNumbers...](./src/Methods.php#L394)
- Retorna apenas o primeiro nome de uma string. [onlyFirstName...](./src/Methods.php#L422)
- Retorna o primeiro e o segundo nome de uma string. [onlyFirstAndSecondName...](./src/Methods.php#L449)
- Verifica se uma palavra está contida em uma frase. [contains...](./src/Methods.php#L492)
- Remove caracteres especiais de uma string, mantendo apenas letras, números e alguns caracteres acentuados. [cleanStringChars...](./src/Methods.php#L519)
- Gera as letras iniciais a partir de um nome para exibir em um ícone de avatar. [getInitialsForAvatar...](./src/Methods.php#L546)
- Valida se um campo está vazio. [validateEmpty...](./src/Methods.php#L624)
- Valida se o CPF é válido (lança um erro ou pode chamar a função diretamente). [validateCpf...](./src/Methods.php#L650)
- Valida se o CNPJ é válido (lança um erro ou pode chamar a função diretamente). [validateCnpj...](./src/Methods.php#L677)
- Valida se o CPF ou CNPJ é válido (lança um erro ou pode chamar a função diretamente). [validateCpfCnpj...](./src/Methods.php#L705)
- Valida se o e-mail é válido (lança um erro ou pode chamar a função diretamente). [validateEmail...](./src/Methods.php#L744)
- Retorna a URL atual. [currentUrl...](./src/Methods.php#L769)
- Retorna uma saudação de acordo com o horário atual. [greeting...](./src/Methods.php#L791)
- Adiciona o nono dígito ao número de celular, se necessário. [addNinthDigit...](./src/Methods.php#L821)
- Calcula a diferença em anos entre duas datas. [differenceInYears...](./src/Methods.php#L871)
- Calcula a diferença em meses entre duas datas. [differenceInMonths...](./src/Methods.php#L911)
- Calcula a diferença em dias entre duas datas. [differenceInDays...](./src/Methods.php#L955)
- Gera uma lista de valores de parcelas variáveis. [generateVariation...](./src/Methods.php#L994)
- Aplica uma máscara a um valor de string. [mask...](./src/Methods.php#L1052)
- Função auxiliar para validar um CPF. [isCpfValid...](./src/Methods.php#L1091)
- Função auxiliar para validar um endereço de e-mail. [isEmailValid...](./src/Methods.php#1168)
- Função auxiliar para validar um número de CNPJ. [isCnpjValid...](./src/Methods.php#1205)
- Redimensiona uma imagem mantendo a proporção e gera uma miniatura (thumbnail). [image_thumbnail...](./src/Methods.php#1275)
- Converte uma cor hexadecimal para o formato RGB. [convertHexToRgb...](./src/Methods.php#1327)
- Converte uma cor no formato RGB para hexadecimal. [convertRgbToHex...](./src/Methods.php#1376)
- Sanitiza uma string, removendo caracteres especiais e substituindo por equivalentes. [sanitizeString...](./src/Methods.php#1400)
- Retorna a data atual por extenso no formato brasileiro. [getFullDateInBrazilianFormat...](./src/Methods.php#1426)
- Converte um valor numérico para sua representação monetária por extenso em português. [numberInWords...](./src/Methods.php#L1463)

## Contato

**Autor:** Anderson Henrique
**Contribuições:** Edinaldo Santhiago / KKaique Bezerra

**E-mail:** [anderson.h.silva@gmail.com](mailto:anderson.h.silva@gmail.com)

**Data da última atualização:** 9 de setembro de 2024
