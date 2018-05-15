<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<table class="table table-striped">
    <tr><td>股票id</td><td>股票名称</td><td>股票代码</td><td>最近交易价格</td><td>交易次数</td></tr>
    <?php
        foreach($lists as $list) {
            echo "<tr><td>".$list->id."</td><td>".$list->name."</td><td>".$list->s_code."</td><td>".$list->price."</td><td>".$list->times."</td></tr>";
        }
    ?>
</table>
</body>
</html>