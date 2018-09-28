<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Insert title here</title>
</head>
<body>
<table>
    <tr>
        <th colspan="9"><h1>九九乘法表</h1></th>
    </tr>
    <?php
    for ($i = 1; $i < 10; $i ++) {
        if ($i % 2 == 0) {
            echo "<tr>";
        } else {
            echo "<tr style='background:#eee'>";
        }
        for ($j = 1; $j <= $i; $j ++) {
            echo '<td>' . $j . '×' . $i . '＝' . $i * $j . '</td>';
        }
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>