<?php $page = 'mybookings';
include('includes/header.php');
?>
<button onclick="topFunction()" id="myBtn" title="Go to top">Upp</button>
<main class="maxWidth" id="main">
    <div class="mainWrapper">
        <section class="mainHeader">
            <h1 tabindex="0">Mina bokningar</h1>
            <article class="firstArticle">
                <ul class="typeOfBookingWrapper" aria-label="Visa typ av resa, lista">
                    <li>
                        <button class="bookBtn bookBtnActive">Enskilda resor</button>
                    </li>
                    <li>
                        <button class="bookBtn">Återkommande resor</button>
                    </li>
                    <li>
                        <div class="bottomDiv">
                            <a class="blueLinks" href="index.php">Boka ny resa</a>
                        </div>
                    </li>
                </ul>
            </article>
        </section>
        <section class="mainHeader">
            <ul class="listOfBookings">
                <li>
                    <article tabindex="0" class="bookingArticle">
                        <div class="topBookingArticleWrapper">
                            <div class="imgTopBooking">
                                <img src="images/thecar_orange_midsize.svg" alt="Icon föreställande bil">
                            </div>
                            <div class="bottomDiv">
                                <h2 class="bookingh2">Idag den 6 juni 2021</h2>
                            </div>

                        </div>
                        <div class="bookingAdressWrapper">
                            <h4>Vi hämtar dig på adress:</h4>
                            <div class="bookingSandWrapper">
                                <div class="bookingSandBox sandBox centerDiv">
                                    <p>Storgatan 31</p>
                                    <p>831 47, Östersund</p>
                                </div>
                                <div class="bookingSandBox sandBox">
                                    <span class="bigNumber">13:45</span>
                                </div>
                            </div>
                        </div>
                        <div class="bookingAdressWrapper">
                            <h4>Vi kör dig till:</h4>
                            <div class="bookingSandWrapper">
                                <div class="bookingSandBox sandBox centerDiv">
                                    <p>Brunflovägen 37c</p>
                                    <p>831 48, Östersund</p>
                                </div>
                                <div class="bookingSandBox sandBox">
                                    <span class="bigNumber">14:03</span>
                                </div>
                            </div>
                        </div>
                    </article>
                </li>
                <li>
                    <article tabindex="0" class="bookingArticle">
                        <div class="topBookingArticleWrapper">
                            <div class="imgTopBooking">
                                <img src="images/thecar_orange_midsize.svg" alt="Icon föreställande bil">
                            </div>
                            <div class="bottomDiv">
                                <h2 class="bookingh2">2021-06-10</h2>
                            </div>

                        </div>
                        <div class="bookingAdressWrapper">
                            <h4>Vi hämtar dig på adress:</h4>
                            <div class="bookingSandWrapper">
                                <div class="bookingSandBox sandBox centerDiv">
                                    <p>Prästgatan 4</p>
                                    <p>831 45, Östersund</p>
                                </div>
                                <div class="bookingSandBox sandBox">
                                    <span class="bigNumber">23:05</span>
                                </div>
                            </div>
                        </div>
                        <div class="bookingAdressWrapper">
                            <h4>Vi kör dig till:</h4>
                            <div class="bookingSandWrapper">
                                <div class="bookingSandBox sandBox centerDiv">
                                    <p>Krondikesvägen 67 D</p>
                                    <p>831 47, Östersund</p>
                                </div>
                                <div class="bookingSandBox sandBox">
                                    <span class="bigNumber">23:16</span>
                                </div>
                            </div>
                        </div>
                    </article>
                </li>
            </ul>


        </section>
    </div>
</main>
<?php
include('includes/footer.php');
?>