/* globals Chart:false 



const ctx = document.getElementById('myChart'): Isso obtém uma referência para o elemento HTML com o ID "myChart", que será o local onde o gráfico será renderizado. Esse elemento deve ser um elemento canvas.

const myChart = new Chart(ctx, { ... }): Aqui, estamos criando uma nova instância da classe Chart, fornecendo o contexto (ctx) do elemento canvas e um objeto de opções para configurar o gráfico.

type: 'line': Define o tipo de gráfico como uma linha.

labels: Define os rótulos (labels) para o eixo X do gráfico, representando os dias da semana.

datasets: Define os conjuntos de dados para o gráfico. Neste caso, temos apenas um conjunto de dados, que é um array numérico representando os valores do gráfico para cada dia da semana.

lineTension: 10: Isso define a tensão da linha do gráfico. Um valor maior para a tensão da linha deixará a linha mais curva, enquanto um valor menor a deixará mais reta.

backgroundColor, borderColor, borderWidth, pointBackgroundColor: Essas propriedades definem as cores e as configurações visuais da linha do gráfico.

plugins: Aqui, estamos configurando os plugins do gráfico. No caso, definimos a propriedade legend para display: false, para não exibir a legenda, e a propriedade tooltip para boxPadding: 3, para adicionar um preenchimento à caixa de dica exibida ao passar o mouse sobre o gráfico.

Por fim, () após a função indica que a função é imediatamente invocada, ou seja, é executada assim que o código é lido.

Essa função cria um gráfico de linha simples usando Chart.js, com os dias da semana no eixo X e valores numéricos no eixo Y. Os valores exatos dos dados do gráfico não estão presentes no código fornecido, exceto pelo primeiro valor que é referenciado como "test".


*/

(() => {
  'use strict';

  // Obtenha uma referência para o elemento canvas
  const ctx = document.getElementById('myChart');

  // Defina a função para atualizar o gráfico
  function updateChart() {
    // Obtenha os novos valores do gráfico para as duas linhas
    const newData1 = [
      4000,
      200,
      300,
      400,
      500,
      600,
      700
    ];
    const newData2 = [
      500,
      400,
      300,
      200,
      100,
      200,
      300
    ];

    // Atualize os dados do gráfico para as duas linhas
    myChart.data.datasets[0].data = newData1;
    myChart.data.datasets[1].data = newData2;

    // Redesenhe o gráfico
    myChart.update();
  }

  // Crie o gráfico inicialmente com duas linhas
  const myChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: [
        'Segunda',
        'Terça',
        'Quarta',
        'Quinta',
        'Sexta',
        'Sábado',
        'Domingo'
      ],
      datasets: [
        {
          data: [
            0,
            0,
            0,
            0,
            0,
            0,
            0
          ],
          lineTension: 0,
          backgroundColor: 'transparent',
          borderColor: '#007bff',
          borderWidth: 4,
          pointBackgroundColor: '0'
        },
        {
          data: [
            0,
            0,
            0,
            0,
            0,
            0,
            0
          ],
          lineTension: 0,
          backgroundColor: 'transparent',
          borderColor: '0',
          borderWidth: 6,
          pointBackgroundColor: '0'
        }
      ]
    },
    options: {
      plugins: {
        legend: {
          display: false
        },
        tooltip: {
          boxPadding: 3,
        }
      }
    }
  });

  // Chame a função updateChart quando houver uma mudança nos valores
  // Por exemplo, você pode chamar essa função em resposta a um evento de clique ou quando receber novos dados de uma API
  // Aqui, estou apenas chamando a função após 1 segundo como um exemplo
  setTimeout(() => {
    updateChart();
  }, 1000);

})();
