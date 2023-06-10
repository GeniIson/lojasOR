<?php



// Função para obter os dados da tabela
function getChartData() {
    global $con;

    $dataInicial =mysqli_real_escape_string($con, $_POST['data_inicial']);
    $dataFinal =mysqli_real_escape_string($con, $_POST['data_Finall']);
    $sql233 = "SELECT * FROM lancamentos WHERE data_pagamento BETWEEN '$dataInicial' AND '$dataFinal'";
    //    ORDER BY data_pagamento  ASC "; 


       
    $result  = mysqli_query($con, $sql233);
   
  

    $data = array(
        'labels' => array(),
        'newData1' => array(),
        'newData2' => array()
    );

    if ($result->num_rows > 0) {

        $total=0;
        while ($row = $result->fetch_assoc()) {


            $tipo = $row['tipo'];
          $data_pagamento= $row['data_pagamento'];

          $data_pagamento_dados = explode("-",  $data_pagamento);
$dia=$data_pagamento_dados[2];
$mes=$data_pagamento_dados[1];
$ano=$data_pagamento_dados[0];

   

            if($tipo !='desconto'){

                $data['labels'][] = $dia.'/'.$mes;

                if($tipo =='receita'){

          
            $data['newData1'][] = $row['valor']; // Substitua "valor" pelo nome correto da coluna
            $t=$row['valor'];

            $total=$total+$t;

            $data['newData2'][] =  $total ;//$row['valor']; // Substitua "outra_coluna" pelo nome correto da coluna
        }
        if($tipo =='despesa'){

           
            $data['newData1'][] = $row['valor']*(-1); // Substitua "valor" pelo nome correto da coluna
            $t=$row['valor']*(-1);

            $total=$total+$t;

            $data['newData2'][] =  $total ;//$row['valor']; // Substitua "outra_coluna" pelo nome correto da coluna
        }
        }
    }}

    return $data;
}

// Obter os dados do gráfico
$data = getChartData();

// Converta os dados em formato JSON
$jsonLabels = json_encode($data['labels']);
$jsonData1 = json_encode($data['newData1']);
$jsonData2 = json_encode($data['newData2']);
?>


    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <canvas id="myChart"></canvas>

    <script>
        const ctx = document.getElementById('myChart');

        const data = {
            labels: <?php echo $jsonLabels; ?>,
            datasets: [
                {
                    data: <?php echo $jsonData1; ?>,
                    lineTension: 0,
                    backgroundColor: 'transparent',
                    borderColor: '#007bff',
                    borderWidth: 4,
                    pointBackgroundColor: '0'
                },
                {
                    data: <?php echo $jsonData2; ?>,
                    lineTension: 0,
                    backgroundColor: 'transparent',
                    borderColor: '0',
                    borderWidth: 6,
                    pointBackgroundColor: '0'
                }
            ]
        };

        const myChart = new Chart(ctx, {
            type: 'line',
            data: data
        });
    </script>