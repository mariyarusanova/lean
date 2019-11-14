<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Знакомство с PHP</title>
</head>
<body>
  <table border="1" rules="none"><tr>
  

 <?
 $operators=['+','-','*','/'];
  for ($i=1; $i<35; $i++){
    echo '<tr>';
    for ($j=1; $j<5;$j++){
     $operator = $operators[rand(0,3)];
    $num1=rand(1,20); $num2=rand(1,20);
    if ($operator=='/' and $num1%$num2!=0){
    --$j;
    continue;
    }
    else
    if ($operator=='-' and $num1-$num2<0){
     --$j;
    continue;
    } 
    else
    if ($operator=='*' and $num1*$num2>100){
        --$j;
    continue;
    } 
    
    
    echo "<td align='right'>$num1$operator$num2=___</td>";
 }
    echo '</tr>';
 }
 ?>
   </tr>
  </table>
</body>
</html>
