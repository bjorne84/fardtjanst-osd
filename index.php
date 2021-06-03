<?php $page = 'home';
include('includes/header.php');
?>
<main class="maxWidth" id="main">
    <div class="mainWrapper">
        <section class="mainHeader">
            <h1 id="boka" tabindex="0">Boka resa</h1>

            <nav id="typeOfTrip" role="navigation" aria-label="Secondary menu">
                <p id="sec-nav-text">
                    Är det en enskild eller en återkommande resa du vill boka?
                </p>
                <ul class="ulTypeOfTrip" aria-labelledby="sec-nav-text">
                    <li>
                        <button class="bookBtn bookBtnActive">Enskild resa</button>
                    </li>
                    <li>
                        <button class="bookBtn bookBtnNonActive">
                            Återkommande resa
                        </button>
                    </li>
                </ul>
            </nav>
        </section>
        <form class="mainForms" aria-labelledby="boka">
            <fieldset class="fieldAddress fieldSetting">
                <legend>Välj adress att åka till och från</legend>
                <div class="addressContainer">
                    <div class="addressWrapper">
                        <label class="h2Label" for="addressTo">
                            Vart vill du åka?
                        </label>
                        <br />
                        <div class="inputFieldsIconWrapper">
                            <input type="text" id="addressTo" placeholder="Till adress..." />
                            <div class="inputIconWrapper">
                                <img src="images/Places.svg" alt="Ikon som illustrerar plats" />
                            </div>
                        </div>
                    </div>
                    <div class="addressWrapper">
                        <label class="h2Label" for="addressPickupinput">
                            Vart vill du resa från?
                        </label>
                        <br />
                        <div class="inputFieldsIconWrapper">
                            <input type="text" id="addressPickupinput" placeholder="Från adress..." />
                            <div class="inputIconWrapper">
                                <img src="images/Places.svg" alt="Ikon som illustrerar plats" />
                            </div>
                        </div>
                    </div>
                </div>
            </fieldset>
            <div class="mapImgWrapper">
                <img src="images/karta.png" alt="Bild på karta att välja vart du vill resa till och från" />
            </div>
            <fieldset class="fieldSetting fieldSetting2">
                <legend>Enkel eller tur-och-retur resa?</legend>

                <div class="checkBoxWrapper">
                    <label class="labelContainer h2Label h3Label">Enkel resa (30 kr)
                        <input type="radio" checked="checked" name="radioBoxTravelType" />
                        <span class="checkmark"></span>
                    </label>
                    <label class="labelContainer h2Label h3Label">Tur-och-retur (60 kr)
                        <input type="radio" name="radioBoxTravelType" />
                        <span class="checkmark"></span>
                    </label>
                </div>
            </fieldset>
            <div class="lineDiv"></div>
            <div class="bigScreenDubbelRows">
                <div class="rowLeftIndex">
                    <fieldset class="fieldSetting maxField" aria-labelledby="legendWhen" tabindex="0">
                        <legend id="legendWhen" class="showLegend">
                            När vill du vara framme?
                        </legend>
                        <div class="dateWrapper">
                            <div class="dateBoxWrapper">
                                <label id="labelToday" class="labelContainer dateLabel h2Label h3Label">
                                    Idag
                                    <input type="radio" checked="checked" name="radio" />
                                    <span class="checkmark radioStyle"></span>
                                </label>
                                <label class="labelContainer dateLabel h2Label h3Label">Imorgon
                                    <input type="radio" name="radio" />
                                    <span class="checkmark radioStyle"></span>
                                </label>
                                <label class="labelContainer dateLabel h2Label h3Label">Välj datum
                                    <input type="radio" name="radio" />
                                    <span class="checkmark radioStyle"></span>
                                </label>
                            </div>
                            <div class="dateInWrapper">
                                <label for="inDate">År / Månad / År</label>
                                <div class="inputFieldsIconWrapper">
                                    <input class="inputSettings" type="date" id="inDate" name="inDate" role="dialog" />
                                    <img src="images/Calendar.svg" alt="Ikon föreställande kalender" />
                                </div>
                            </div>
                            <label class="h3Label" for="timeIn">Klockan:</label>
                            <input class="inputTime" type="time" value="16:32:55" id="timeIn" name="timeIn" min="00:00"
                                max="23:59" required />
                        </div>
                    </fieldset>

                    <div class="takeTimeWrapper" tabindex="0" role="contentinfo"
                        aria-labelledby="pWhen klockanText timeWhen">
                        <p id="pWhen">Resan beräknas ta 27 minuter, hämtar dig</p>
                        <div class="klockanWrapp">
                            <span id="klockanText">KL:</span>
                            <div class="klBackground">
                                <span id="timeWhen">20:52</span>
                            </div>
                        </div>
                    </div>
                    <div class="taxainfo" tabindex="0" aria-labelledby="ptaxiInfo">
                        <p id="ptaxiInfo">
                            Idag söndag gäller färdtjänsttaxa (priser för färdtjänst)
                            mellan kl 08:00 - 24:00.
                        </p>
                        <a class="underLineLink" href="#">Läs mer..</a>
                    </div>
                    <h2 class="aterkommandeLink">
                        <a href="#">Boka återkommande resa...</a>
                    </h2>
                </div>
                <div class="lineDiv"></div>
                <div class="rowRightIndex">
                    <fieldset class="fieldSetting" aria-labelledby="legendCompany" tabindex="0">
                        <legend id="legendCompany" class="showLegend">
                            Skall någon följa med på resan?
                        </legend>
                        <div class="checkBoxWrapper padding-top">
                            <label class="labelContainer labelProcent h2Label h3Label">Ledsagare
                                <input type="checkbox" />
                                <span class="checkmark"></span>
                            </label>
                            <label class="labelContainer labelProcent h2Label h3Label">Medresenär (+30kr)
                                <input type="checkbox" />
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </fieldset>
                    <div class="lineDiv"></div>
                    <fieldset class="fieldSetting" aria-labelledby="legendHelp" tabindex="0">
                        <legend id="legendHelp" class="showLegend">
                            Tar du med dig något hjälpmedel?
                        </legend>
                        <div class="checkBoxWrapper padding-top">
                            <label class="labelContainer labelProcent h2Label h3Label">Rullstol
                                <input type="checkbox" />
                                <span class="checkmark"></span>
                            </label>
                            <label class="labelContainer labelProcent h2Label h3Label">Permobil
                                <input type="checkbox" />
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </fieldset>
                    <div class="lineDiv"></div>
                    <fieldset class="fieldSetting fieldSetting2 workTravelField" aria-labelledby="legendTypeOfTravel"
                        tabindex="0">
                        <legend id="legendTypeOfTravel" class="showLegend">
                            Är det en resa till och från arbete, dagverksamhet eller
                            studier?
                        </legend>

                        <div class="checkBoxWrapper">
                            <label class="labelContainer h2Label h3Label">Nej
                                <input type="radio" checked="checked" name="radioWork" />
                                <span class="checkmark radioStyle"></span>
                            </label>
                            <label class="labelContainer h2Label h3Label">Ja
                                <input type="radio" name="radioWork" />
                                <span class="checkmark radioStyle"></span>
                            </label>
                        </div>
                    </fieldset>
                    <div class="lineDiv"></div>
                    <div class="flexWidht">
                        <div class="checkOutWrapper" tabindex="0"
                            aria-labelledby="sum somInkr travelLeft numberTravelLeft">
                            <div class="flexCheckout"></div>
                            <div class="checkOutFlex priceWrapper">
                                <span id="sum" class="spanOne">Kostnad:</span><span id="somInkr" class="spanTwo">30
                                    kr</span>
                            </div>
                            <div class="checkOutFlex travelsLeftWrapper">
                                <span id="travelLeft">Resor till färdjänsttaxa kvar i decemeber:</span><span
                                    id="numberTravelLeft">15 av (26 st)</span>
                            </div>
                        </div>
                    </div>
                    <div class="bookWrapper">
                        <a class="underLineLink" href="#återkommande">Boka återkommande resa</a>
                        <button type="submit" class="standardBtn accentBtn">
                            Boka resa
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="lineDiv"></div>
    <h2><a href="formtest.html">fromtest</a></h2>
</main>
<?php
include('includes/footer.php');
?>