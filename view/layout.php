<!DOCTYPE html>
<html lang="et">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NEWSPORTAL</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif" rel="stylesheet">
</head>

<body>

    <!-- Menu -->
    <nav class="one">
        <ul class="topmenu">
            <li><a href="#">Kategooriad<i class="fa fa-angle-down"></i></a>
                <ul class="submenu">
                    <?php
                    Controller::AllCategory();
                    ?>
                </ul>
            </li>
            <li><a href="testError">Info</a></li>
            <li><a href="./">Stardileht</a></li>
        </ul>
    </nav>

    <!-- Content -->
    <section>
        <div class="divBox">
            <?php
            if (isset($content)) {
                echo $content;
            } else {
                echo '<h1>Content is gone!</h1>';
            }
            ?>
        </div>
    </section>

    <!-- Footer -->
    <hr>
    <p style="display:block; text-align:center;">SKTVp20 2021 a. &copy</p>

    <!-- jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

</body>

</html>