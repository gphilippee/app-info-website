<html>
<head>
    <link rel="stylesheet" type="text/css" href="vues/<?php echo $css ?>.css">
    <link rel="stylesheet" type="text/css" href="vues/header/CSSheader.css">
    <link rel="stylesheet" type="text/css" href="vues/accueil/CSSnav.css">
    <meta charset="utf-8">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $(function () {
            $("#dialog").dialog();
        });
    </script>
    <title><?php echo $title; ?></title>
</head>
<body>
<header>
    <img class="logo" src="pictures/logo-reduit.png" alt="logo" height="44px">
    <label id="burger" for="switch">&#9776;</label>
    <input type="checkbox" id="switch">
    <nav id="navheader" role="navigation">
        <ul>
            <li><a class="MenuP" href="#" onclick='document.getElementById("FORMfaq").submit()'><?php echo _FAQH; ?></a></li>
            <li><a class="MenuP" href="index.php"><?php echo _ACCUEIL; ?></a></li>
            <li><a class="MenuP" href="#" onclick='document.getElementById("FORMprofil").submit()'><?php echo _MON_PROFIL; ?></a></li>
            <li><a class="MenuP" href="#" onclick='document.getElementById("FORMconnexion").submit()'><?php echo $_SESSION['connecter']; ?></a></li>
            <li><a class="MenuP" href="#" onclick='document.getElementById("FORMlangue").submit()'><img class="drapeau" src=<?php echo $drapeau; ?>
                    height="30" width="auto" alt="drapeau"></a></li>
        </ul>
    </nav>
    <form id="FORMfaq" action="index.php" method="post">
        <input type="hidden" name="cible" value="utilisateurs"/>
        <input type="hidden" name="fonction" value="faq"/>
    </form>
    <form id="FORMprofil" action="index.php" method="post">
        <input type="hidden" name="cible" value="utilisateurs"/>
        <input type="hidden" name="fonction" value="profil"/>
    </form>
    <form id="FORMconnexion" action="index.php" method="post">
        <input type="hidden" name="cible" value="utilisateurs"/>
        <input type="hidden" name="fonction" value="connexion"/>
    </form>
    <form id="FORMlangue" action="index.php" method="post">
        <input type="hidden" name="cible" value="utilisateurs"/>
        <input type="hidden" name="fonction" value="langue"/>
    </form>
</header>
<?php if ($alerte) { ?>
    <?php echo '<div id="dialog" title="Information">
    <p>' . $alerte . '</p>
</div>';
} ?>

