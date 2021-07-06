<?php

    $title = 'EcoGuard.';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link rel = "stylesheet" href = "styles/css/Normalize.css">
    <link rel="stylesheet" href="styles/css/styles.css">

    <script src="https://unpkg.com/vue@next"></script>
    <script src = 'scripts/app.js' defer></script>

    <link rel = "shortcut icon" href = "imgs/favicon.ico">

    <title><?= $title; ?></title>
</head>
<body>
<div id = 'app'>

    <!-- [ MODAL ] -->
    <div id="modal"  @click = 'hideModal()' :class = 'modal_open ? "open" : "hidden"'>Nothing here yet.</div>


    <!-- [ NAVBAR ] -->
    <nav>
        
        <button class = 'menu' @click = 'openModal()'>
            <svg class="icon">
                <use xlink:href="imgs/icons.svg#ico-menu"></use>
            </svg>
        </button>

        <ul>
            <li class="navlink" active>
                <a
                    <?
                        $name = 'Home';
                        $link = 'index.php';
                        $current_page = true;
                    ?>

                    href = '<?= $link; ?>'
                    class = '<? echo $current_page ? "selected" : ""; ?>'
                >
                <?= $name; ?> 
                </a>
            </li>
            <li class="navlink"><a href="about.php">About</a></li>
            <li class="navlink"><a href="contacts.php">Contacts</a></li>
        </ul>

        <a href="enter.php">
            <button class = 'enter'>
                <svg class="icon">
                    <use xlink:href="imgs/icons.svg#ico-enter"></use>
                </svg>
                enter
            </button>
        </a>

    </nav>

    <!-- [ HEADER ] -->
    <header>
        <div class="header-back">
            <svg class="picture">
                <use xlink:href="imgs/imgs.svg#nature-back"></use>
            </svg>
        </div>

        <div class="header-form">
            <h1 class = 'header-title'>
                EcoGuard.
                <span>Join EcoGuard team:</span>
            </h1>
            <form action="" class = 'form-light'>
                <input type="text" name = 'name'  placeholder="Name ..."  autocomplete="off" v-model = 'name'  @input = 'checkBaseForm()'>
                <input type="text" name = 'email' placeholder="Email ..." autocomplete="off" v-model = 'email' @input = 'checkBaseForm()'>

                <input type="submit" value = 'JOIN' :enabled = 'base_form_submit'>
            </form>
        </div>
    </header>

    <!-- [ MAIN ] -->
    <section class="how-it-works">
        <h1 class="heading">How it works?</h1>

        <ul>
            <li class="card">
                <div class="card-img">
                    <svg class="picture">
                        <use xlink:href="imgs/imgs.svg#join-us"></use>
                    </svg>
                </div>
                <h3 class="card-heading">Join us</h3>
                <p class="card-text">Join us & get some seeds.</p>
                <span class="card-number">01</span>
            </li>
            <li class="card">
                <div class="card-img">
                    <svg class="picture">
                        <use xlink:href="imgs/imgs.svg#plant"></use>
                    </svg>
                </div>
                <h3 class="card-heading">Plant seeds</h3>
                <p class="card-text">Plant those seeds wherever you want.</p>
                <span class="card-number">02</span>
            </li>
            <li class="card">
                <div class="card-img">
                    <svg class="picture">
                        <use xlink:href="imgs/imgs.svg#discount"></use>
                    </svg>
                </div>
                <h3 class="card-heading">Get discount</h3>
                <p class="card-text">Get your discount card and increase your cashback with every tree planted.</p>
                <span class="card-number">03</span>
            </li>
        </ul>
    </section>

    <section class="discount-system bg-dark">
        <h1 class="heading">Discount system</h1>
        <p class="description single-line-dark">
            See how you can boost your discount card!
        </p>
        <table class="table-light" 
                t-caption = "The more you plant - the more you save!">
            
            <?php

                $row = <<< ROW
                <tr>
                    <td>1 - 5 seeds</td>
                    <td>2%</td>
                </tr>
                ROW;

            ?>

            <?= $row; ?>
            <tr>
                <td><?= '21 - 50 seeds' ?></td>
                <td><?= '7%' ?></td>
            </tr>
            <tr>
                <td>51 - 100 seeds</td>
                <td>10%</td>
            </tr>
            <tr>
                <td>> 100 seeds</td>
                <td>15% [+ VIP status]</td>
            </tr>
        </table>
    </section>

    <section class="gallery">
        <h1 class="heading">Our trees</h1>
        <ul class="gallery">
            <li class="gallery-item">
                <!-- <img src="imgs/gallery/tree-1.jpg" alt="tree"> -->
                <? echo '<img src="imgs/gallery/tree-'.(date('s') % 2 + 1).'.jpg" alt="tree">'; ?>
            </li>
            <li class="gallery-item">
                <img src="imgs/gallery/tree-2.jpg" alt="tree">
            </li>
            <li class="gallery-item">
                <img src="imgs/gallery/tree-3.jpg" alt="tree">
            </li>
            <li class="gallery-item">
                <img src="imgs/gallery/tree-4.jpg" alt="tree">
            </li>
            <li class="gallery-item">
                <img src="imgs/gallery/tree-5.jpg" alt="tree">
            </li>
            <li class="gallery-item">
                <img src="imgs/gallery/tree-6.jpg" alt="tree">
            </li>
            <li class="gallery-item">
                <img src="imgs/gallery/tree-7.jpg" alt="tree">
            </li>
            <li class="gallery-item">
                <img src="imgs/gallery/tree-8.jpg" alt="tree">
            </li>
        </ul>
    </section>

    <footer>
        <p>
            <? date_default_timezone_set("UTC"); ?>
            <?= 
            'Сформировано ' . date('d'). '.' . date('m'). '.' . date('Y') .
            ' в ' . ( date('H') + 3 ) . ':' . date('i') . ':' . date('s')
            ?>
        </p>
    </footer>

</div>
</body>
</html>