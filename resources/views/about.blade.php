<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Games</title>
</head>
<body>
 
<table border="1">
    <tr>
        <th>Game</th>
        <th>Publisher</th>
        <th>Release Date</th>
    </tr>
    <?php for($i = 0; $i < count($games); $i++) : ?>
    <tr>
        <td><?= $games[$i]?></td>
        <td><?= $publishers[$i]?></td>
        <td><?= $releasedates[$i]?></td>
    </tr>
    <?php endfor ?>
</table>
 
</body>
</html>