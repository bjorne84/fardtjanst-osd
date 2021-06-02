<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Färdtjänst Östersund - Boka din resa här.</title>
</head>

<body>
    <header>
        <!--Only small blue line form mobile-->
        <div class="mobileTopLine"></div>
        <!-- uses max-width class 1220px-->
        <div class="mainHeaderWrapper">
            <!--Logotype, search-->
            <div class="mainHeaderArea1 maxWidth">
                <div class="logoWrapper">
                    <a href="index.html">
                        <img src="images/fardtjanst-logo.svg" alt="Logotyp Östersunds färdtjänst" />
                    </a>
                </div>
                <div class="searchFieldWrapper">
                    <form class="searchForm">
                        <div class="fieldWrapper">
                            <div class="inputWrapper">
                                <input type="text" id="searchInput" class="inputField" placeholder=" " />
                                <label id="searchInputLabel" for="searchInput" class="inputLabel">Sök på
                                    webbplatsen</label>
                            </div>
                            <button class="searchBtn" aria-label="Sök" aria-expanded="false">
                                <span class="flexSpan">
                                    <img src="images/search_orange.svg" alt="Förstoringsglas till sökknapp" /><span
                                        class="btnText">Sök</span>
                                </span>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="searchAndMenuWrapper">
                    <div class="searchWrapper">
                        <button class="expandSearchBtn" aria-label="Sök" aria-expanded="false">
                            <img src="images/search_orange.svg" alt="Förstoringsglas till sökknapp" /><span
                                class="btnText">Sök</span>
                        </button>
                    </div>
                    <div class="hamburgerWrapper">
                        <button aria-label="Öppna meny" class="hamburgerBtn btnText" aria-expanded="false">
                            <img src="images/HamburgerMenu.svg" alt="Menyknapp, öppna meny" />
                        </button>
                    </div>
                </div>
            </div>
            <div class="navHolder">
                <div class="mobileTopLine"></div>
                <nav role="navigation" aria-label="Primary menu">
                    <div class="closeBtnWrapper">
                        <button aria-label="Stäng meny" onclick="closeFunction()" class="closeBtn BtnText">
                            <img src="images/Close.svg" alt="Ikon för att stänga naviagationen" />
                        </button>
                    </div>
                    <div class="verticalDiv">
                        <ul>
                            <li class="<?php if ($page == 'home') {
                                            echo 'activeLi';
                                        } ?>">
                                <a class="menuText" href="index.php">Boka resa</a>
                            </li>
                            <li class="<?php if ($page == 'mybookings') {
                                            echo 'activeLi';
                                        } ?>">
                                <a class="menuText" href="mina-bokningar.php">Mina bokningar</a>
                            </li>
                            <li class="<?php if ($page == 'mysite') {
                                            echo 'activeLi';
                                        } ?>">
                                <a class="menuText" href="mina-sidor.php">Mina sidor</a>
                            </li>
                            <li class="<?php if ($page == 'information') {
                                            echo 'activeLi';
                                        } ?>">
                                <a class="menuText" href="information.php">Information</a>
                            </li>
                            <li class="<?php if ($page == 'contact') {
                                            echo 'activeLi';
                                        } ?>">
                                <a class="menuText" href="kontakta-oss.php">Kontakta oss</a>
                            </li>
                            <li>
                                <a class="menuText" href="#start">Logga ut</a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="blueLine"></div>
            </div>
            <!-- End mainHeaderWrapper-->
        </div>
        <!-- Full Max width-->
        <div class="topBarContainer">
            <!-- Max width 1220px-->
            <div class="topBar maxWidth">
                <!-- For icons and stuff, only show on screensize 500px and more-->
                <div class="leftHolderTopBar">
                    <div class="topBarLogos">
                        <a href="#" aria-hidden="true" tabindex="-1">
                            <img src="images/ostersunds-kommun-w250.png" alt="Logotyp Östersunds kommun" />
                        </a>
                    </div>
                    <div class="topBarLogos" aria-hidden="true">
                        <a href="#" aria-hidden="true" tabindex="-1">
                            <img src="images/jamttaxi_2.png" alt="Logotyp Jämttaxi AB" />
                        </a>
                    </div>
                </div>
                <div class="rightHolderTopBar">
                    <ul>
                        <li>
                            <div class="phoneDiv" tabindex="1" aria-labelledby="telefonBokning">
                                <span>
                                    <img class="flagga" src="images/Phone.svg" alt="ikon telefon" />
                                </span>
                                <span id="telefonBokning" class="spanInfoBtnText">
                                    Boka via telefon: 063-14 15 80</span>
                            </div>
                        </li>
                        <li>
                            <button class="langDiv" tabindex="1" aria-label="Öppna meny för att välja språk">
                                <span>
                                    <img class="flagga" src="images/sweden-svgrepo-com.svg"
                                        alt="ikon svenska flaggan" />
                                </span>
                                <span class="spanInfoBtnText"> SV </span>
                                <span>
                                    <img class="downArrow" src="images/Down arrow small.svg" alt="ikon nedåtpil" />
                                </span>
                            </button>
                        </li>
                        <li>
                            <button tabindex="1" class="logOutBtn" aria-labelledby="logOut">
                                <img src="images/Profile.svg" alt="Figur föreställande en gubbe" />
                                <span id="logOut" class="spanInfoBtnText">Logga ut!</span>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="extraInfoContainer maxWidth">
            <div class="extraInfoWrapper">
                <div class="warningIconWrapper">
                    <img src="images/varning.svg" alt="Varningsskylt" />
                </div>
                <div tabindex="0" class="infoTextWrapper">
                    <h2>Corona info -</h2>
                    <p>
                        Vi kör endast en resenär åt gången med undantag för de som bor i
                        samma hushåll.
                    </p>
                </div>
            </div>
        </div>
    </header>