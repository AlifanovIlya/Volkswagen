<?php
// Выводим HTML-заголовки:
echo '<html>';
echo '<head>';
echo '<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">';
echo '<title>Test Form PHP.SU</title>';
echo '</head>';
echo '<body>';
if (isset($_POST['opinion']))
{
echo '<p>Был выбран независимый переключатель со следующим значением: ';
if ($_POST['opinion']==="yes") echo "<b>Отлично</b>";
if ($_POST['opinion']==="no") echo "<b>Среднее</b>";
if ($_POST['opinion']==="yes") echo "<b>Плохо</b>";
echo '</p>';
}
else echo '<p>Ни один из независимых переключателей не был выбран</p>';
echo '</body>';
echo '</html>';
?>