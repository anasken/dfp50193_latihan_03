<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 03</title>
</head>

<body>
    <h1>Asas PHP</h1>

    <?php echo '<h2>hello</2>'; 
    $nama = 'Anas';
    $hadir = false;
    $umur = 20;
    $nokp = '010324-05-0119';

    ?> 
    <h2>
        <?php
        $bandar = 'Nilai';
        $baru = 'Bandar: ';
        for($x = 0; $x < strlen($bandar); $x++){
            $baru .= $bandar[$x]. ' ';
        }
        echo $baru;
        ?>
    </2>
</body>

</html>