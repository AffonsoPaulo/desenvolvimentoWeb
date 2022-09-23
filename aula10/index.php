<?php
const pulaLinha = "<br/>";
date_default_timezone_set('America/Sao_Paulo');
$data = date("d/m/Y H:i:s");
echo "Data e Hora atual: $data".pulaLinha;
echo pulaLinha;

$ts = time();
echo "Timestamp atual: $ts".pulaLinha;
echo pulaLinha;
$dataFixed = date("d/m/Y H:i:s", $ts);
echo "Data e hora fixados pelo timestamp $ts: $dataFixed".pulaLinha;
echo pulaLinha;

echo "Outras opções autoexplicativas para o timestamp:".pulaLinha;
$tsAgora = strtotime("now");
echo "Agora: ".date("l, d/m/Y H:i:s", $tsAgora).pulaLinha;
$tsMaisUmDia = strtotime("+1 day");
echo "Mais um dia: ".date("l, d/m/Y H:i:s", $tsMaisUmDia).pulaLinha;
$tsMaisUmaSemana = strtotime("+1 week");
echo "Mais uma semana: ".date("l, d/m/Y H:i:s", $tsMaisUmaSemana).pulaLinha;
