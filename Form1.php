<?php
 	$TheFile = "data.txt";  //имя файла с базой данных
	$WhoWrite = "hum";      //запись инициируется человеком
	$Date = date("Y-m-d H:i:s");   //считываем дату и время с сервера
//прочитаем файл данных
 	$Open = fopen ($TheFile, "r"); //открываем файл для чтения
 	if ($Open) {
		//если успешно, то 
 		$Data = file ($TheFile);   //читаем данные из файла
		if (count($Data) > 0) {
 		for ($n = 0; $n < count($Data); $n++) {
 			$GetLine = explode("\t", $Data[$n]);
 		}
		}
 		fclose ($Open);

//вывод на экран поседних 10 строк и информации об общем числе строк в файле
 		$k=0;
 		$nstr = 10;
		for ($n = 0; $n < count($Data); $n++) {
			$m = count($Data) - $n - 1;
 			$GLOBALSGetLine = explode("\t", $Data[$m]);
			
			$array[0][$k]=(integer)$GLOBALSGetLine[2];
			$array[1][$k]=(integer)$GLOBALSGetLine[3];
			$array[2][$k]=(integer)$GLOBALSGetLine[4];
			$array[3][$k]=(integer)$GLOBALSGetLine[5];
	
			
				$k=$k+1;
			$nstr--;
 			if ($nstr == 0)
			{ break;  }
 		}}
?>

</BODY>
</HTML>

<script src="jquery.min.js" type="text/javascript"></script>
<script src="highcharts.js" type="text/javascript"></script>
<!-- - -->

<!-- - -->
<script type="text/javascript">


var mas = [];

var a=new Array ( 
  new Array (0,0,0), new Array (0,0,0), new Array (0,0,0), new Array (0,0,0), new Array (0,0,0),
  new Array (0,0,0), new Array (0,0,0), new Array (0,0,0), new Array (0,0,0), new Array (0,0,0),
  new Array (0,0,0), new Array (0,0,0), new Array (0,0,0), new Array (0,0,0), new Array (0,0,0),
  new Array (0,0,0), new Array (0,0,0), new Array (0,0,0), new Array (0,0,0), new Array (0,0,0),
  new Array (0,0,0), new Array (0,0,0), new Array (0,0,0), new Array (0,0,0), new Array (0,0,0)
 
 );
var op=0;

     a[0][op] =Number ('<?php echo $array[0][0];?>');
     a[1][op] =Number ('<?php echo $array[1][0];?>');
     a[2][op] =Number ('<?php echo $array[2][0];?>');
     a[3][op] =Number ('<?php echo $array[3][0];?>');
op+=1
     a[0][op] =Number ('<?php echo $array[0][1];?>');
     a[1][op] =Number ('<?php echo $array[1][1];?>');
     a[2][op] =Number ('<?php echo $array[2][1];?>');
     a[3][op] =Number ('<?php echo $array[3][1];?>');
op+=1
     a[0][op] =Number ('<?php echo $array[0][2];?>');
     a[1][op] =Number ('<?php echo $array[1][2];?>');
     a[2][op] =Number ('<?php echo $array[2][2];?>');
     a[3][op] =Number ('<?php echo $array[3][2];?>');
op+=1
     a[0][op] =Number ('<?php echo $array[0][3];?>');
     a[1][op] =Number ('<?php echo $array[1][3];?>');
     a[2][op] =Number ('<?php echo $array[2][3];?>');
     a[3][op] =Number ('<?php echo $array[3][3];?>');
op+=1
     a[0][op] =Number ('<?php echo $array[0][4];?>');
     a[1][op] =Number ('<?php echo $array[1][4];?>');
     a[2][op] =Number ('<?php echo $array[2][4];?>');
     a[3][op] =Number ('<?php echo $array[3][4];?>');
op+=1
     a[0][op] =Number ('<?php echo $array[0][5];?>');
     a[1][op] =Number ('<?php echo $array[1][5];?>');
     a[2][op] =Number ('<?php echo $array[2][5];?>');
     a[3][op] =Number ('<?php echo $array[3][5];?>'); 
op+=1
     a[0][op] =Number ('<?php echo $array[0][6];?>');
     a[1][op] =Number ('<?php echo $array[1][6];?>');
     a[2][op] =Number ('<?php echo $array[2][6];?>');
     a[3][op] =Number ('<?php echo $array[3][6];?>');
op+=1
     a[0][op] =Number ('<?php echo $array[0][7];?>');
     a[1][op] =Number ('<?php echo $array[1][7];?>');
     a[2][op] =Number ('<?php echo $array[2][7];?>');
     a[3][op] =Number ('<?php echo $array[3][7];?>');     
op+=1
     a[0][op] =Number ('<?php echo $array[0][8];?>');
     a[1][op] =Number ('<?php echo $array[1][8];?>');
     a[2][op] =Number ('<?php echo $array[2][8];?>');
     a[3][op] =Number ('<?php echo $array[3][8];?>');     
op+=1
     a[0][op] =Number ('<?php echo $array[0][9];?>');
     a[1][op] =Number ('<?php echo $array[1][9];?>');
     a[2][op] =Number ('<?php echo $array[2][9];?>');
     a[3][op] =Number ('<?php echo $array[3][9];?>');     


var f=19;
var dat1 = [a[0][0] , a[0][1], a[0][2], a[0][3], a[0][4], a[0][5], a[0][6], a[0][7], a[0][8], a[0][9]]
var dat2 = [a[1][0] , a[1][1], a[1][2], a[1][3], a[1][4], a[1][5], a[1][6], a[1][7], a[1][8], a[1][9]]
var dat3 = [a[2][0] , a[2][1], a[2][2], a[2][3], a[2][4], a[2][5], a[2][6], a[2][7], a[2][8], a[2][9]]
var dat4 = [a[3][0] , a[3][1], a[3][2], a[3][3], a[3][4], a[3][5], a[3][6], a[3][7], a[3][8], a[3][9]]
var dat5 = [f]
var dat6 = [72, 71.5, 106.4, 19.2, 14.0, 176.0, 15.6, 148.5, 216.4, 194.1, 95.6, 4.4]
var dat7 = [72, 71.5, 106.4, 19.2, 14.0, 176.0, 15.6, 148.5, 216.4, 194.1, 95.6, 4.4]
 
$(document).ready(function(){
var  chart1 = new Highcharts.Chart({
    title: {
        text: 'Информационные графики'
    },
    yAxis: {
        title: {
            text: 'Единицы'
        },
        
    },
    tooltip: {
        split: true,
        valueSuffix: ' millions'
    },
    chart: {renderTo: 'container1'},
series: [/*{name: 'Температура',data: dat1},{name: 'Влажность',data: dat2},{name: 'Свет',data: dat3},{name: 'Почва',data: dat4},*/{name: 'Свет формула',data: dat5},{name: 'Почва формула',data: dat6}]
 
});}); 
 
 

function ab(){ var f=document.as.name4.value;
header ('Location: ajax.php');}
//function ab(){$("#ab").bind("mouseup",function container1(){})}





</script>


<script>
var a = "<?php echo $var ?>";
</script>





<?php
$f='non';
require_once('Form11.html');
?>

