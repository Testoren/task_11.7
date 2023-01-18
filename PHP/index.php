<!DOCTYPE html>
<html lang='ru'>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <link rel="stylesheet" href="style.css">
    <title>PHP!</title>
</head>

<body>
    <?php $arr = [true, false, 1, 0, -1, "1", null, "php"]; $text = ["true", "false", "1", "0", "-1", '"1"', "null", '"php"'];?>
    <!--Таблица истинности--> 
    <h3>Таблица истинности</h3>
    <table>
        <thead>
            <tr>
                <th>
                    <strong>A</strong>
                </th>
                <th>
                    <strong>B</strong>
                </th>
                <th>
                    <strong>!A</strong>
                </th>
                <th>
                    <strong>A || B</strong>
                </th>
                <th>
                    <strong>A && B</strong>
                </th>
                <th>
                    <strong>A xor B</strong>
                </th>
            </tr>
        </thead>
        <tbody>
            <?php 
            for ($a = 0; $a <= 1; $a++) {
                for ($b = 0; $b <= 1; $b++) { ?>
            <tr>
                <td><? echo $a; ?></td>
                <td><? echo $b; ?></td>
                <td><? echo (!$a) ? "true" : "false"; ?></td>
                <td><? echo ($a || $b) ? "true" : "false"; ?></td>
                <td><? echo ($a && $b) ? "true" : "false"; ?></td>
                <td><? echo ($a xor $b) ? "true" : "false"; ?></td>
            </tr>
            <?php    }
            } ?>


        </tbody>
    </table>
    <!--Гибкое сравнение--> 
    <h3>Гибкое сравнение</h3>
    <table>
        <thead>
            <tr>
                <th>
                    <strong></strong>
                </th>
                <th>
                    <strong><?= $text[0];?></strong>
                </th>
                <th>
                    <strong><?= $text[1];?></strong>
                </th>
                <th>
                    <strong><?= $text[2];?></strong>
                </th>
                <th>
                    <strong><?= $text[3];?></strong>
                </th>
                <th>
                    <strong><?= $text[4];?></strong>
                </th>
                <th>
                    <strong><?= $text[5];?></strong>
                </th>
                <th>
                    <strong><?= $text[6];?></strong>
                </th>
                <th>
                    <strong><?= $text[7];?></strong>
                </th>
            </tr>
        </thead>
        <tbody>
            <?php 
            for ($a = 0; $a <= 7; $a++) {
                ?> <tr> <td><strong><?= $text[$a];?> </strong></td> <?
                 ?>
            
                <td><? echo ($arr[$a] == $arr[0]) ? "true" : "false"; ?></td>
                <td><? echo ($arr[$a] == $arr[1]) ? "true" : "false"; ?></td>
                <td><? echo ($arr[$a] == $arr[2]) ? "true" : "false"; ?></td>
                <td><? echo ($arr[$a] == $arr[3]) ? "true" : "false"; ?></td>
                <td><? echo ($arr[$a] == $arr[4]) ? "true" : "false"; ?></td>
                <td><? echo ($arr[$a] == $arr[5]) ? "true" : "false"; ?></td>
                <td><? echo ($arr[$a] == $arr[6]) ? "true" : "false"; ?></td>
                <td><? echo ($arr[$a] == $arr[7]) ? "true" : "false"; ?></td>
            </tr>
            <?php    
            } ?>


        </tbody>
    </table>
    <!--Жесткое сравнение--> 
    <h3>Жесткое сравнение</h3>
    <table>
        <thead>
            <tr>
                <th>
                    <strong></strong>
                </th>
                <th>
                    <strong><?= $text[0];?></strong>
                </th>
                <th>
                    <strong><?= $text[1];?></strong>
                </th>
                <th>
                    <strong><?= $text[2];?></strong>
                </th>
                <th>
                    <strong><?= $text[3];?></strong>
                </th>
                <th>
                    <strong><?= $text[4];?></strong>
                </th>
                <th>
                    <strong><?= $text[5];?></strong>
                </th>
                <th>
                    <strong><?= $text[6];?></strong>
                </th>
                <th>
                    <strong><?= $text[7];?></strong>
                </th>
            </tr>
        </thead>
        <tbody>
            <?php 
            for ($a = 0; $a <= 7; $a++) {
                ?> <tr> <td><strong><?= $text[$a];?> </strong></td><?
                 ?>
            
                <td><? echo ($arr[$a] === $arr[0]) ? "true" : "false"; ?></td>
                <td><? echo ($arr[$a] === $arr[1]) ? "true" : "false"; ?></td>
                <td><? echo ($arr[$a] === $arr[2]) ? "true" : "false"; ?></td>
                <td><? echo ($arr[$a] === $arr[3]) ? "true" : "false"; ?></td>
                <td><? echo ($arr[$a] === $arr[4]) ? "true" : "false"; ?></td>
                <td><? echo ($arr[$a] === $arr[5]) ? "true" : "false"; ?></td>
                <td><? echo ($arr[$a] === $arr[6]) ? "true" : "false"; ?></td>
                <td><? echo ($arr[$a] === $arr[7]) ? "true" : "false"; ?></td>
            </tr>
            <?php    
            } ?>


        </tbody>
    </table>
</body>

</html>