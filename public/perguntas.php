<?php

$perguntas  = array(
    '1' => array( // chave única
        'pergunta' => 'Não é um modificador de privacidade em JAVA',
        'alternativas' => array(
            '1' => 'Protected',
            '2' => 'Procedure',
            '3' => 'Private',
            '4' => 'Public',
        ),
        'resposta' => '2',
        'dificuldade' => '1', // 1 facil, 2 medio, 3 dificil // 
    ),
    '2' => array(
        'pergunta' => 'Estrutura de dados que armazena uma coleção de elementos de tal forma que cada elemento possa ser identificado por, pelo menos, um índice ou uma chave',
        'alternativas' => array(
            '1' => 'Array',
            '2' => 'Tupla',
            '3' => 'POO',
            '4' => 'Procedure',
        ),
        'resposta' => '1',
        'dificuldade' => '1',
    ),
    '3' => array(
        'pergunta' => 'Qual do conceito de programação orientada a objetos que permite a criação de métodos com a mesma assinatura, porém com implementações diferentes?',
        'alternativas' => array(
            '1' => 'Encapsulamento',
            '2' => 'Herança',
            '3' => 'Polimorfismo',
            '4' => 'Interface',
        ),
        'resposta' => '3',
        'dificuldade' => '1',
    ),
    '4' => array(
        'pergunta' => 'Na programação orientada a objetos, pode-se definir classes sem instanciar objetos. Nestas situações, essas classes são conhecidas como',
        'alternativas' => array(
            '1' => 'Hierárquicas',
            '2' => 'Protegidas',
            '3' => 'Privadas',
            '4' => 'Abstratas',
        ),
        'resposta' => '4',
        'dificuldade' => '1',
    ),
    '5' => array(
        'pergunta' => 'Como se denomina a capacidade de ocultar dados dentro de modelos, permitindo que somente operações especializadas ou dedicadas manipulem dados ocultos?',
        'alternativas' => array(
            '1' => 'Encapsulamento',
            '2' => 'Modularização',
            '3' => 'Modificação',
            '4' => 'Classes',
        ),
        'resposta' => '1',
        'dificuldade' => '1',
    ),
    '6' => array(
        'pergunta' => 'A descrição acima está relacionada ao parâmetro da OO denominado:',
        'alternativas' => array(
            '1' => 'Reusabilidade',
            '2' => 'Modularidade',
            '3' => 'Herança',
            '4' => 'Polimorfismo',
        ),
        'resposta' => '3',
        'dificuldade' => '2',
    ),
    '7' => array(
        'pergunta' => 'A relação entre a classe "Soma" e a classe "OperacaoMatematica" é de',
        'alternativas' => array(
            '1' => 'Composição',
            '2' => 'Recursividade',
            '3' => 'Herança',
            '4' => 'Polimorfismo',
        ),
        'resposta' => '3',
        'dificuldade' => '2',
    ),
    '8' => array(
        'pergunta' => 'Considerando o conceito de Herança Múltipla na programação orientada a objetos:',
        'alternativas' => array(
            '1' => 'Permite um objeto comportar-se de forma múltipla.',
            '2' => 'É implementada em Algol, C++, Java e Python.',
            '3' => 'Corresponde, em Java, à classe Multiple Object.',
            '4' => 'Permite que uma subclasse herde de duas ou + superclasses.',
        ),
        'resposta' => '4',
        'dificuldade' => '2',
    ),
	'9' => array(
        'pergunta' => 'No que tange ao uso de serviços da API REST, a arquitetura JWT é um modelo utilizado para',
        'alternativas' => array(
            '1' => 'Conectar a uma fonte de dados remota.',
            '2' => 'Autenticar e validar o acesso ao serviço via token.',
            '3' => 'Realizar envio de dados através de arquivos JSON.',
            '4' => 'Sincronizar as informações entre cliente e servidor.',
        ),
        'resposta' => '2',
        'dificuldade' => '2',
    ),
    '10' => array(
        'pergunta' => 'São Métodos do protocolo HTTP usados em um CRUD',
        'alternativas' => array(
            '1' => 'GET, POST, PUT, DELETE',
            '2' => 'GET, POST, UPDATE, DELETE',
            '3' => 'GET, HEAD, POST, TRACE',
            '4' => 'CONNECT, POST, PUT, REMOVE',
        ),
        'resposta' => '1',
        'dificuldade' => '2',
    ),
    '11' => array(
        'pergunta' => 'MeshSmooth, Bump Map, Flat Shading são, respectivamente, tipos de:',
        'alternativas' => array(
            '1' => 'Modificador, Textura, Método de Renderização.',
            '2' => 'Modificador, Método de Renderização, Textura',
            '3' => 'Textura, Modificador, Método de Renderização.',
            '4' => 'Textura, Método de Renderização, Modificador',
        ),
        'resposta' => '1',
        'dificuldade' => '3',
    ),
    '12' => array(
        'pergunta' => 'Sobre a técnica conhecida como Z-buffer é correto aﬁrmar que:',
        'alternativas' => array(
            '1' => 'É possível realizar o cômputo das variáveis envolvidas de forma incremental.',
            '2' => 'É uma técnica muito comum de detecção de colisão.',
            '3' => 'Suas dimensões são independentes das dimensões do frame buffer',
            '4' => 'Nenhuma das alternativas acima está correta',
        ),
        'resposta' => '1',
        'dificuldade' => '3',
    ),
	'12' => array(
	    'pergunta' => 'No que diz respeito a geração de imagens por RayTracing, qual das aﬁrmações a seguir NÂO é verdadeira?',
	    'alternativas' => array(
	        '1' => 'Pode ser facilmente paralelizado',
	        '2' => 'O número de raios lançados independe do número de objetos da cena.',
	        '3' => 'Em algumas variações, o cálculo das sombras é feito a parte',
	        '4' => 'Nenhuma das alternativas acima está correta',
	    ),
	    'resposta' => '2',
	    'dificuldade' => '3',
    ),
    '13' => array(
    'pergunta' => 'Sobre a técnica de Computação Gráfica "Cohen-Sutherland", qual a sua função?',
	    'alternativas' => array(
	        '1' => 'Iluminação',
	        '2' => 'Remoção de superfícies ocultas',
	        '3' => 'Aproximação de curvas',
	        '4' => 'Recorte',
	    ),
	    'resposta' => '4',
	    'dificuldade' => '3',
    ),
    '14' => array(
    'pergunta' => 'Qual a complexidade de um algoritmo de ordenação "Merge Sort',
	    'alternativas' => array(
	        '1' => 'O(logn)',
	        '2' => 'O(nlogn)',
	        '3' => 'O(n²)',
	        '4' => 'O(n³)',
	    ),
	    'resposta' => '2',
	    'dificuldade' => '3',
    ),
    '15' => array(
    'pergunta' => 'Encontra a saída para uma instância de entrada de um problema chamando a si mesmo para resolver instâncias menores deste mesmo problema:',
	    'alternativas' => array(
	        '1' => 'Algoritmo de combinação',
	        '2' => 'Algoritmo de divisão e conquista',
	        '3' => 'Algoritmo recursivo',
	        '4' => 'Algoritmo de ordenação',
	    ),
	    'resposta' => '3',
	    'dificuldade' => '3',
    ),
    '16' => array(
    'pergunta' => 'Possuem três etapas em cada nível de recursão:',
	    'alternativas' => array(
	        '1' => 'Algoritmo de combinação',
	        '2' => 'Algoritmo de divisão e conquista',
	        '3' => 'Algoritmo recursivo',
	        '4' => 'Algoritmo de ordenação',
	    ),
	    'resposta' => '2',
	    'dificuldade' => '3',
    ),
    '17' => array(
    'pergunta' => 'O menor número possível de arestas em um grafo conexo com n vértices é:',
	    'alternativas' => array(
	        '1' => '1',
	        '2' => 'n/2',
	        '3' => 'n-1',
	        '4' => 'n',
	    ),
	    'resposta' => '3',
	    'dificuldade' => '4',
    ),
    '18' => array(
    'pergunta' => 'Filtro da mediana é Indicado para:',
	    'alternativas' => array(
	        '1' => 'Detectar bordas em imagens',
	        '2' => 'Atenuar ruído com preservação de bordas.',
	        '3' => 'Detectar formas específicas em imagens.',
	        '4' => 'Detectar tonalidades específicas em uma imagem.',
	    ),
	    'resposta' => '2',
	    'dificuldade' => '4',
    ),
    '19' => array(
    'pergunta' => 'Quais destes algoritmos de ordenação têm a classe de complexidade assintótica, no pior caso, em O(nlogn)?',
	    'alternativas' => array(
	        '1' => 'QuickSort, MergeSort, e HeapSort',
	        '2' => 'QuickSort e SelectionSort',
	        '3' => 'MergeSort e HeapSort',
	        '4' => 'QuickSort e BubbleSort',
	    ),
	    'resposta' => '3',
	    'dificuldade' => '4',
    ),
    '20' => array(
    'pergunta' => 'Os convidados presentes num jantar tomam chá ou café. 13 bebem café, 10 bebem chá e 4 bebem chá e café. Quantas pessoas tem nesse jantar?',
	    'alternativas' => array(
	        '1' => '19',
	        '2' => '27',
	        '3' => '23',
	        '4' => '15',
	    ),
	    'resposta' => '1',
	    'dificuldade' => '4',
    ),
    '20' => array(
    'pergunta' => 'Na computação, algoritimo é:',
	    'alternativas' => array(
	        '1' => 'Conjunto das regras e procedimentos lógicos perfeitamente definidos que levam à solução de um problema em um número finito de etapas.',
	        '2' => 'Conjunto das regras e procedimentos não definidos que levam à solução de um problema em um número finito de etapas.',
	        '3' => 'Conjunto das regras e procedimentos lógicos definidos que levam à solução de um problema em um número infinito de etapas.',
	        '4' => 'Nenhuma das alternativas',
	    ),
	    'resposta' => '1',
	    'dificuldade' => '4',
    ),
    '21' => array(
    'pergunta' => 'Na programação, variável é:',
	    'alternativas' => array(
	        '1' => 'O resultado de uma expressão aritmética.',
	        '2' => 'Uma posição de memória identificada.',
	        '3' => 'Uma palavra especial utilizada pela linguagem para identificar suas instruções de controle',
	        '4' => 'Nenhuma das alternativas',
	    ),
	    'resposta' => '2',
	    'dificuldade' => '1',
    ),
    '22' => array(
    'pergunta' => 'Considerando a=5, b=7, c=3 e d=9,  (a != 3 || b < 10 || c == 5) é:',
	    'alternativas' => array(
	        '1' => 'Verdadeiro',
	        '2' => 'Falso',
	        '3' => '-1',
	        '4' => 'Nenhuma das alternativas',
	    ),
	    'resposta' => '1',
	    'dificuldade' => '3',
    ),
    '23' => array(
    'pergunta' => 'Uma rede conectada à Internet possui a máscara de sub-rede 255.255.255.0. Qual o número máximo de computadores que a rede suporta?',
	    'alternativas' => array(
	        '1' => '253',
	        '2' => '254',
	        '3' => '255',
	        '4' => '65.534',
	    ),
	    'resposta' => '3',
	    'dificuldade' => '3',
    ),
    '24' => array(
    'pergunta' => 'Em relação às características do protocolo TCP é correto afirmar:',
	    'alternativas' => array(
	        '1' => 'Confirma as mensagens que já foram entregues',
	        '2' => 'É opcional que ele faça controle de congestionamento.',
	        '3' => 'Entrega as mensagens fora de ordem',
	        '4' => 'É half-duplex',
	    ),
	    'resposta' => '1',
	    'dificuldade' => '3',
    ),
    '25' => array(
    'pergunta' => 'Em relação à comandos em linguagens de programação é correto afirmar:',
	    'alternativas' => array(
	        '1' => 'Expressões aritméticas tem resultados numéricos, inteiros ou fracionários',
	        '2' => 'Expressões lógicas tem resultados verdadeiro, falso e nulo',
	        '3' => 'Declaração de variável associa um nome a um valor que, não pode ser alterado durante a execução.',
	        '4' => 'Nenhuma das alternativas',
	    ),
	    'resposta' => '1',
	    'dificuldade' => '3',
    ),
    '26' => array(
    'pergunta' => 'Na UML o diagrama de atividade é composto pelos diagramas de',
	    'alternativas' => array(
	        '1' => 'Servidores e objetos ativos',
	        '2' => 'Estado e de sequência.',
	        '3' => 'Atividades',
	        '4' => 'Brainstorm',
	    ),
	    'resposta' => '2',
	    'dificuldade' => '3',
    ),
    '27' => array(
    'pergunta' => 'Característica da qualidade que permite a fácil determinação dos antecedentes e conseqüências de todos os requisitos é a:',
	    'alternativas' => array(
	        '1' => 'Manutenção corretiva',
	        '2' => 'Precisão',
	        '3' => 'Consistência',
	        '4' => 'Rastreabilidade',
	    ),
	    'resposta' => '4',
	    'dificuldade' => '3',
    ),
    '28' => array(
    'pergunta' => 'Os componentes de uma biblioteca de software, no modelo orientado a objetos, correspondem a:',
	    'alternativas' => array(
	        '1' => 'Classes.',
	        '2' => 'Objetos',
	        '3' => 'Mensagem',
	        '4' => 'Métodos',
	    ),
	    'resposta' => '2',
	    'dificuldade' => '3',
    ),
    '29' => array(
    'pergunta' => 'NÃO é função do Kernel de um sistema operacional:',
	    'alternativas' => array(
	        '1' => 'Lançamentos na contabilidade da empresa.',
	        '2' => 'Suporte a redes locais e distribuída',
	        '3' => 'Gerência do sistema de arquivo',
	        '4' => 'Gerência dos dispositivos de E/S',
	    ),
	    'resposta' => '1',
	    'dificuldade' => '3',
    ),
    '30' => array(
    'pergunta' => 'Qual é o máximo endereçamento de memória possível do sistema operacional de 32 bits:',
	    'alternativas' => array(
	        '1' => '1Tbytes.',
	        '2' => '2Gbytes',
	        '3' => '3Gbytes',
	        '4' => '4Gbytes',
	    ),
	    'resposta' => '4',
	    'dificuldade' => '3',
    ),


);

echo json_encode($perguntas);