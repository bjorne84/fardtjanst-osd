<?php $page = 'contact';
include('includes/header.php');
?>
<main class="maxWidth" id="main">
    <div class="mainWrapper">
        <section class="mainHeader">
            <h1 tabindex="0">Kontakta oss</h1>
            <div class="phoneAndAdressWrapper">
                <article>
                    <div class="topBookingArticleWrapper">
                        <div class="imgTopBooking">
                            <img src="images/Phone_orange_midsize.svg" alt="Icon föreställande telefon">
                        </div>
                        <div class="bottomDiv">
                            <h2 class="h2-dark">Telefonnummer</h2>
                        </div>
                    </div>
                    <div class="ulWrapp">
                        <ul class="contact-ul">
                            <li class="dashed-li">
                                <div class="leftPhoneDiv">
                                    <p>Boka färdtjänst:</p>
                                </div>
                                <div class="rightPhoneDiv">
                                    <p>063-14 15 80</p>
                                </div>
                            </li>
                            <li class="dashed-li">
                                <div class="sandBox centerDiv openSand">
                                    <p id="openHours"><b>Öppettider:</b></p><br>
                                    <ul class="open-ul" aria-labelledby="openHours mon-sat sunday">
                                        <li id="mon-sat">
                                            <div class="leftSpaceBet">
                                                <p>Måndag - lördag klockan:</p>
                                            </div>
                                            <div class="rightSpaceBet">
                                                <p><b>08:30-22:00</b></p><br>
                                            </div>
                                        </li>
                                        <li id="sunday">
                                            <div class="leftSpaceBet">
                                                <p>Söndag/helgdag klockan:</p>
                                            </div>

                                            <div class="rightSpaceBet">
                                                <p><b> 10:00-22:00</b></p>
                                            </div>
                                        </li>
                            </li>
                        </ul>

                    </div>

                    </li>
                    <li class="dashed-li">
                        <div class="leftPhoneDiv">
                            <p>Frågor om räkningar:</p>
                        </div>
                        <div class="rightPhoneDiv">
                            <p>063-19 90 18</p>
                        </div>
                    </li>
                    <li class="dashed-li red-li">
                        <div class="leftPhoneDiv">
                            <p><b>Boka sjukresor:</b></p>
                        </div>
                        <div class="rightPhoneDiv">
                            <p>0771-82 00 83</p>
                        </div>
                    </li>
                    <li class="dashed-li">
                        <div class="leftPhoneDiv">
                            <p>Östersunds kommun:</p>
                        </div>
                        <div class="rightPhoneDiv">
                            <p>063-14 30 00</p>
                        </div>
                    </li>
                    </ul>
            </div>
            </article>
            <article>
                <div class="topBookingArticleWrapper">
                    <div class="imgTopBooking">
                        <img src="images/Messages_orange_midsize.svg" alt="Icon föreställande brev">
                    </div>
                    <div class="bottomDiv">
                        <h2 class="h2-dark">E-post och address</h2>
                    </div>
                </div>
                <div class="ulWrapp">
                    <ul class="contact-ul">
                        <li class="dashed-li">
                            <div class="divBox">
                                <p><b>Postadress:</b></p>
                                <div class="sandBox centerDiv openSand">
                                    <p id="openHours">JämtTaxi AB</p>
                                    <p id="openHours">Storsjöstråket 19</p>
                                    <p id="openHours">831 34 Östersund</p><br>
                                </div>
                            </div>
                        </li>
                        <li class="dashed-li">
                            <div class="leftPhoneDiv">
                                <p>E-post:</p>
                            </div>
                            <div class="rightPhoneDiv">
                                <a m></a>
                                <p><a href="mailto:info@fardtjanst-ostersund.se">info@fardtjanst-ostersund.se</a></p>
                            </div>
                        </li>
                    </ul>
                </div>
    </div>
    </article>

    <article>
        <form class="mainForms contactForm" aria-labelledby="kontakt">
            <fieldset class="fieldAddress fieldSetting">
                <div class="topBookingArticleWrapper">
                    <div class="imgTopBooking">
                        <img src="images/person_orange_midsize.svg" alt="Icon föreställande gubbe">
                    </div>
                    <div class="bottomDiv">
                        <legend class="showLegend">
                            <h2 id="kontakt" class="h2-dark">Kontaktformulär</h2>
                        </legend>
                    </div>
                </div>
                <div class="labelInputDiv">
                    <label class="h2Label" for="inputMsg">Meddelande:</label>
                    <textarea class="inputFieldsIconWrapper" id="inputMsg" name="inputMsg"
                        placeholder="Skriv ditt meddelande här..." style="height:200px"></textarea>
                </div>
                <div class="labelInputDiv">
                    <label for="inputFirstName">Förnamn:</label>
                    <input class="inputFieldsIconWrapper" id="inputFirstName" name="inputFirstName" type="text">
                </div>
                <div class="labelInputDiv">
                    <label for="inputLastName">Efternamn:</label>
                    <input class="inputFieldsIconWrapper" id="inputLastName" name="inputLastName" type="text">
                </div>
                <div class="labelInputDiv">
                    <label for="inputEmail">E-post:</label>
                    <input class="inputFieldsIconWrapper" id="inputEmail" name="inputEmail" type="email">
                </div>
                <div class="labelInputDiv">
                    <label for="inputPersNr">Personnummer: (10 siffror )</label>
                    <input class="inputFieldsIconWrapper" id="inputPersNr" name="inputPersNr" type="text"
                        placeholder="ååmmddxxxx">
                </div>
                <div class="labelInputDiv">
                    <label for="inputPhoneNr">Telefonnummer</label>
                    <input class="inputFieldsIconWrapper" id="inputPhoneNr" name="inputPhoneNr" type="tel">
                </div>
                <h4 id="contactWay" tabindex="0" aria-labelledby="contactWay">Hur vill du bli kontaktad?</h4>
                <div class="checkBoxWrapper">
                    <label class="labelContainer h2Label h3Label">E-post
                        <input type="radio" checked="checked" name="radioBoxTravelType" />
                        <span class="checkmark"></span>
                    </label>
                    <label class="labelContainer h2Label h3Label">Telefon
                        <input type="radio" name="radioBoxTravelType" />
                        <span class="checkmark"></span>
                    </label>
                </div>
                <div class="contactBtnsWrapper">
                    <button type="reset" class="standardBtn greyBtn">
                        Rensa formulär
                    </button>
                    <button type="submit" class="standardBtn smallAccentBtn">
                        Skicka meddelande
                    </button>
                </div>




            </fieldset>
        </form>
    </article>
    </section>
    </div>

</main>
<?php
include('includes/footer.php');
?>