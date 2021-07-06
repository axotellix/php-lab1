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

    <title>EcoGuard.</title>
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
            <li class="navlink"><a href="index.php">Home</a></li>
            <li class="navlink" active><a href="about.php">About</a></li>
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
                <span>Let`s get acquainted!</span>
            </h1>
            <p class="description">
                Hey, Eco Guardian, welcome on board! <br><br>
                Learn everything you wanna know about <br>us and get ready to save planet!
            </p>
        </div>
    </header>

    <!-- [ MAIN ] -->
    <section class="about-us">
        <h1 class="heading">About us</h1>

        <p class="description-wide">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Autem eaque repellat optio quidem quo eveniet accusantium, non, maxime laudantium esse totam adipisci cupiditate pariatur eum? Repellat facilis consequuntur eos adipisci!
            Hic laborum numquam consequatur suscipit iste distinctio quasi assumenda facilis dicta dolore corrupti voluptate laudantium voluptatum ducimus provident vel nesciunt est, qui dolorem neque doloribus expedita! Minus, vero explicabo. Delectus!
            Rerum repudiandae odio et ex quisquam recusandae, inventore ducimus. 
        </p>
        <p class="description-wide">
            Modi minus iusto corrupti velit quia rem unde natus adipisci aliquid. Dolorum corporis voluptate quos aliquid magni culpa provident corrupti cupiditate.
            Adipisci nam officia impedit quo delectus! Deleniti cupiditate quaerat mollitia autem at accusamus nobis ducimus impedit, eligendi corporis dignissimos odit recusandae quibusdam nisi modi debitis doloremque ab eius, aliquid quasi.
            Explicabo modi repudiandae mollitia ratione. Laborum aliquid incidunt officia excepturi ratione at obcaecati harum, saepe consequuntur minima illum velit? Provident eos eligendi deserunt et accusamus qui adipisci dolor recusandae nesciunt.
        </p>
    </section>

    <section class="join-us">
        <h1 class="title">
            Ready for work?
            <span>Join us!</span>
        </h1>
        <a href="reg.php" class="button">JOIN</a>

    </section>

    
    <footer>
        <p>&copy; EcoGuard. 2021 | All rights reserved</p>
    </footer>

</div>
</body>
</html>