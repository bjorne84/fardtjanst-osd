<?php $page = 'myside';
include('includes/header.php');
?>
<main class="maxWidth">
    <div class="mainWrapper">
        <section class="mainHeader">
            <h1 tabindex="0">Min sida </h1>
            <ul>
                <li>

                    <form class="formType2">
                        <fieldset class="fieldSetting2" aria-labelledby="myInfo" tabindex="0">
                            <legend class="showLegend" id="myInfo">
                                <h2 class="legendh2">Mina uppgifter</h2>
                            </legend>
                            <div class="inputType2Wrapper">
                                <label>Namn:
                                    <input type="text" placeholder="Arne Andersson">
                                </label>
                                <div class="inputBtnType2Wrapper">
                                    <button type="submit" class="btnLinkText">Ändra</button>
                                </div>
                            </div>
                            <div class="inputType2Wrapper">
                                <label>E-post:
                                    <input type="email" placeholder="arne78@gmail.se">
                                </label>
                                <div class="inputBtnType2Wrapper">
                                    <button type="submit" class="btnLinkText">Ändra</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </li>
                <li>
                    <form class="formType2">
                        <fieldset class="fieldSetting2" aria-labelledby="myInfo" tabindex="0">
                            <legend class="showLegend" id="myInfo">
                                <h2 class="legendh2">Adressuppgifter</h2>
                            </legend>
                            <div class="vertLabelWrapper">
                                <label for="street">Gatuadress:
                                </label>
                                <input id="street" type="text" placeholder="Årevägen 34">
                            </div>
                            <div class="vertLabelWrapper">
                                <label for="emailInput">Postnummer:
                                </label>
                                <input id="emailInput" type="email" placeholder="831 56">
                            </div>
                            <div class="vertLabelWrapper">
                                <label for="city">Postort:
                                </label>
                                <input id="city" type="email" placeholder="arne78@gmail.se">
                            </div>
                            <div class="inputBtnType2Wrapper">
                                <button type="submit" class="btnLinkText">Ändra</button>
                            </div>
                            <div class="billingAdressWrapper">
                                <p tabindex="0">Samma faktureringsadress?</p>
                                <div class="billingBoxAdressWrapper">

                                    <label id="yesSameAddress" class="labelContainer dateLabel h2Label h3Label">
                                        Ja
                                        <input type="radio" checked="checked" name="radio" />
                                        <span class="checkmark radioStyle"></span>
                                    </label>
                                    <label class="labelContainer dateLabel h2Label h3Label">Nej
                                        <input type="radio" name="radio" />
                                        <span class="checkmark radioStyle"></span>
                                    </label>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </li>
                <li>
                    <article class="articleSection">
                        <h2 class="legendh2" tabindex="0">Dina fakturor</h2>
                        <ul class="billingUl">
                            <li>
                                <table>
                                    <caption>Faktura april 2021</caption>
                                    <tr>
                                        <th scope="col">Fakturanummer:</th>
                                        <td>124 1564 048</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Avser period:</th>
                                        <td>februari 2021</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Förfallodatum:</th>
                                        <td>2021-05-31</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Belopp:</th>
                                        <td>385 kr</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Betald?</th>
                                        <td class="tdColorRed">Nej</td>
                                    </tr>
                                </table>
                            <li>
                                <table>
                                    <caption>Faktura mars 2021</caption>
                                    <tr>
                                        <th scope="col">Fakturanummer:</th>
                                        <td>125 1546 057</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Avser period:</th>
                                        <td>januari 2021</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Förfallodatum:</th>
                                        <td>2021-04-30</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Belopp:</th>
                                        <td>179 kr</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Betald?</th>
                                        <td class="tdColorGreen">Ja</td>
                                    </tr>
                                </table>
                            </li>
                        </ul>

                    </article>
                </li>
                <li>
                    <article class="greyArticleSection">
                        <h2 class="legendh2" tabindex="0" aria-label="Resor kvar">Resor kvar</h2>
                        <div class="travelWrapper">
                            <div class="travelBoxLeft sandBox">
                                <p tabindex="0">Resor kvar denna månad till färdtjänsttaxa (färdtjänstpris)</p>
                            </div>
                            <div class="travelBoxRight sandBox">
                                <span id="bigNumber" aria-labelledby="bigNumber" class="spanNumber">9</span>
                                <span id="littleNumber" aria-labelledby="littleNumber" class="spanNumber">Av 26
                                    st</span>
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