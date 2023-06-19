<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="src/img/sad.png">
    <title>Sad</title>
</head>

<body>
    <?php include "components/navbar.php"; ?>
    <div class="container center">
        <h4>Only Sad Reactions</h4>

        <div class="row">
            <?php include "components/card.php"; ?>
        </div>
    </div>
    <!--  Scripts-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <!-- <?php include "components/footer.php"; ?> -->

</body>

</html>