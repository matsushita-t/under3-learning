<?php
$string = "foo bar";
$list = array("aoki", "seno", "kakizaki", "Supran", "matsushita");
?>

<!DOCTYPE html>
<html lang="ja" data-scribe-reduced-action-queue="true">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>example</title>
    <link rel="stylesheet" href="">
    <script src=""></script>
</head>

<body>

String is <?php echo $string; ?><br />

<table>
    <tbody>
        <?php foreach ($list as $value): ?>
        <tr>
            <td><?php echo $value; ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

</body>
</html>
