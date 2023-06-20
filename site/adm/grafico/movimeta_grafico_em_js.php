<?php
///cores para as linhas do grafico
$cor_total='0';
$cor_cap='#007bff';
$cor_apa='green';
$cor_gasto='red';
$cor_mate='#4d0080';


// Função para obter os dados da tabela
function getChartData() {
    global $con;

    $dataInicial ='2023-06-1';//mysqli_real_escape_string($con, $_POST['data_inicial']);
    $dataFinal ='2024-06-11';//mysqli_real_escape_string($con, $_POST['data_Finall']);

    
    $sql233 = "SELECT * FROM movimentacao_financeir WHERE data BETWEEN '$dataInicial' AND '$dataFinal'";
    //    ORDER BY data_pagamento  ASC "; 


       
    $result  = mysqli_query($con, $sql233);
   
  

    $data = array(
        'labels' => array(),
        'newData0' => array(),
        'newData1' => array(),
        'newData2' => array(),
        'newData3' => array(),
        'newData4' => array()
    );

    if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {


            
          $data_pagamento= $row['data'];

          $data_pagamento_dados = explode("-",  $data_pagamento);
$dia=$data_pagamento_dados[2];
$mes=$data_pagamento_dados[1];
$ano=$data_pagamento_dados[0];

   


                $data['labels'][] = $dia.'/'.$mes;

             

          

            $data['newData1'][] = $row['capital_valor']; // Substitua "valor" pelo nome correto da coluna
            $data['newData2'][] = $row['aparelho_valo'];//$row['valor']; // Substitua "outra_coluna" pelo nome correto da coluna
            $data['newData3'][] = $row['material_valo'];
            $data['newData4'][] = $row['gastos_valor'];

            $data['newData0'][] = $row['material_valo']+ $row['aparelho_valo'] +$row['capital_valor'];
    }}

    return $data;
}

// Obter os dados do gráfico
$data = getChartData();

// Converta os dados em formato JSON
$jsonLabels = json_encode($data['labels']);
$jsonData0 = json_encode($data['newData0']);
$jsonData1 = json_encode($data['newData1']);
$jsonData2 = json_encode($data['newData2']);
$jsonData3 = json_encode($data['newData3']);
$jsonData4 = json_encode($data['newData4']);
?>


    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <canvas id="myChart"></canvas>

    <script>
        const ctx = document.getElementById('myChart');

        const data = {
            labels: <?php echo $jsonLabels; ?>,
            datasets: [
                {
                    data: <?php echo $jsonData0; ?>,
                    lineTension: 0,
                    backgroundColor: '<?= $cor_total?>',
                    borderColor: '<?=$cor_total?>',
                    borderWidth: 4,
                    pointBackgroundColor: '0'
                },
                {
                    data: <?php echo $jsonData1; ?>,
                    lineTension: 0,
                    backgroundColor: 'transparent',
                    borderColor: '<?= $cor_cap?>',
                    borderWidth: 4,
                    pointBackgroundColor: '0'
                },
                {
                    data: <?php echo $jsonData2; ?>,
                    lineTension: 0,
                    backgroundColor: 'transparent',
                    borderColor:'<?=$cor_apa?>',
                    borderWidth: 4,
                    pointBackgroundColor: '0'
                },
                {
                    data: <?php echo $jsonData3; ?>,
                    lineTension: 0,
                    backgroundColor: 'transparent',
                    borderColor:'<?=$cor_mate?>',
                    borderWidth: 4,
                    pointBackgroundColor: '0'
                },
                {
                    data: <?php echo $jsonData4; ?>,
                    lineTension: 0,
                    backgroundColor: 'transparent',
                    borderColor:'<?=$cor_gasto?>',
                    borderWidth: 3,
                    pointBackgroundColor: '0'
                }]
        };
        const myChart = new Chart(ctx, {
    type: 'line',
    data: data,
    options: {
      plugins: {
        legend: {
          display: false
        },
        tooltip: {
          boxPadding: 3
        }
      }
    }
});


    </script>