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
<body class = 'bg-dark'>

    <!-- [ ENTRANCE FORM ] -->
    <section class="entrance full-size flex-center flex-column fixed" id = 'app'>
        <a href="index.php">
            <h1 class="title title-light">
                EcoGuard.
                <span>Entrance</span>
            </h1>
        </a>
        <form action="" class = 'form-wide form-dark centered'>

            <input type="text" 
                    name = 'email'
                    placeholder="Email ..."
                    autocomplete="off"
                    v-model = 'email'
                    @input = 'checkEntranceForm()'
            >
            <input type="password" 
                    name = 'password'
                    placeholder="Password ..."
                    autocomplete="off"
                    v-model = 'password'
                    @input = 'checkEntranceForm()'
            >
            
    
            <input type="submit" value = 'ENTER' :enabled = 'entrance_form_submit'>
    
        </form>

        <a href="reg.php" class = 'sign-up'>Sign up</a>
    </section>
    
</body>
</html>