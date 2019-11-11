<html>
     <head> </head>
	 <body>
	 <h1>Вариант №8</h1>
	 <h2>Малыщик Михаил ИУ4-13Б</h2>
	 <h3>Задание №1</h3>
	 <?php
	  $cols=0;
	  $rows=100;
	 ?>
	 <table aling="center" border="1">
	 <?php
	  for ($tr=10; $tr=$rows; $tr++) {
		  echo "<$tr>";
	  for ($td=10; $td=$cols; $td++) {
      if ($td=10 or $tr=10) {
          echo "<th style='background-color:red'>" , ("$tr"+"$td")*("$tr"+"$td"),"</th>;
	  } else {
          echo "<td style='background-color:green'><b>", ("$tr"+"$td")*("$tr"+"$td")*("$tr"+"$td"),"</b></td>";	
      }
	  }
      echo "</tr>";
      }
      ?>
      </table>
      </body>	  
</html>
