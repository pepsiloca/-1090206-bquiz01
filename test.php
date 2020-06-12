<style>

table{
    border-collapse: collapse;
}

table td{
    border:1px solid black;
    padding:5px 10px;
}


</style>



<?php

$array=[
    'header'=>['網站標題','替代文字','顯示','刪除','操作'],
    'rows'=>[
        ['img/01B02.jpg','BBBB','radio','checkbox','button'],
        ['img/01B03.jpg','CCCC','radio','checkbox','button'],
        ['img/01B04.jpg','DDDD','radio','checkbox','button'],
    ],
];



function makeTable($array){
    echo "<table>";
    echo "<tr>";
    foreach($array['hrader'] as $header){
        echo "<td>$header</td>";
    }
    echo "</tr>";

    foreach($array['rows'] as $row){
        echo "<tr>";
        foreach($row as $col){
            echo "<td>$col</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

makeTable($array);


?>