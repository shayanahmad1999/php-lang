<?php 

require './lang.php';

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Languages</title>
</head>

<body>
    <style>
        body {
            font-family: Tahoma;
        }

        header {
            display: flex;
            padding: 10px;
            justify-content: center;
            align-items: center;
        }

        header div {
            padding: 10px;
        }

        .dropdown {
            position: relative;
        }

        .dropdown-content {
            position: absolute;
            margin-top: 10px;
            background-color: white;
            border: solid thin #aaa;
            padding: 10px;
        }

        .hide {
            display: none;
        }

        section {
            padding: 10px;
            max-width: 600px;
            margin: auto;
        }
    </style>
    <header>
        <div><a href="#"><?= __('Home')?></a></div>
        <div><a href="#"><?= __('About us')?></a></div>
        <div><a href="#"><?= __('contact us')?></a></div>
        <div><a href="#"><?= __('Login')?></a></div>
        <div><a href="#"><?= __('Signup')?></a></div>
        <div><a href="#"><?= __('Logout')?></a></div>
        <div class="dropdown">
            <a href="#"><?= __('Hi')?>, Shayan</a>
            <div class="dropdown-content hide">
                <div><a href="#"><?= __('Profile')?></a></div>
                <div><a href="#"><?= __('Setting')?></a></div>
                <div><a href="#"><?= __('Logout')?></a></div>
            </div>
        </div>
        <div class="dropdown">
            <a href="#"><?= __('Languages')?></a>
            <div class="dropdown-content hide">
                <div><a href="./index.php?lang=en">English</a></div>
                <div><a href="./index.php?lang=fr">Français</a></div>
                <div><a href="./index.php?lang=es">Española</a></div>
                <div><a href="./index.php?lang=zh">中国人</a></div>
            </div>
        </div>
    </header>
    <section>
        <?= __("Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.")?>
    </section>

    <script>
        let dropdowns = document.querySelectorAll('.dropdown');
        for (let i = 0; i < dropdowns.length; i++) {
            dropdowns[i].addEventListener('click', function (e) { 
                for (var x = 0; x < dropdowns.length; x++) {
                    dropdowns[x].querySelector('.dropdown-content').classList.add('hide')
                }
                e.currentTarget.querySelector('.dropdown-content').classList.toggle('hide');
             });
        }
    </script>

</body>

</html>