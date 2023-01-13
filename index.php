<?php 
    session_start();
    $title = 'Home'; 

    require_once(__DIR__.'\head.php');
    require_once(__DIR__.'\navbar.php'); 
?>
<link rel="stylesheet" href="css/style.css">
<script src="js/indexScript.js"></script>
<body>
    <div class="page-container">
        <div class="content-wrap">
            <h1>IL TUO VIAGGIO COMINCIA QUI!</h1><br>
            <h2>Clicca su uno dei pianeti per saperne di più</h2>
            <div class="row">
                <div class="column">
                    <img onclick='planetClick("earth")' src="img/earth.gif" alt="terra">
                </div>
                <div class="column">
                    <img onclick='planetClick("moon")' src="img/moon.png" alt="luna">
                </div>
                <div class="column">
                    <img onclick='planetClick("mars")' src="img/planet.gif" alt="marte">
                </div>
            </div>



            <div class="earthContainer">
                <div id="earthText" class="earthP">
                    <img class="im1" src="img/shuttleEarth.jpg" alt="Shuttle che si allontana dalla terra">
                    <img class="im2" src="img/spaceshipEarth.jpg" alt="Spazio nave che si allontana dalla terra">
                    <p>La Terra, il nostro pianeta. La Terra è da dove tutto è cominciato, dove abbiamo costruito la nostra azienda
                        e dove abbiamo fatto i primi passi verso lo spazio. I viaggi vicino alla Terra sono tra i più richiesti, 
                        e sono perfetti per chi vuole fare un primo viaggio spaziale. Il viaggio vicino la Terra dura circa 90 minuti,
                        esclusi i tempi di imbarco e sbarco. Il viaggio è sicuro e confortevole, e può essere scelto un'itenerario personalizzato. 
                        Il costo stimato del viaggio è di 2500€ per persona, escluse consumazioni
                        all'interno della navetta. L'età minima per partecipare è di 18 anni e quella massima è di 65 anni. L'altezza
                        del passeggero dev'essere compresa tra 1.20m e 2.00m, il peso tra 40kg e 120kg.
                    </p>
                    <br>
                </div>
                
                <div id="earthMaps" class="earthA">
                    <h1>AEREOPORTI DI PARTENZA</h1>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d18349.218185703612!2d12.233104587114763!3d41.7960059039386!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1325f0793898141f%3A0xafe513b4e358316f!2sAeroporto%20internazionale%20Leonardo%20da%20Vinci!5e0!3m2!1sit!2sit!4v1671725875109!5m2!1sit!2sit" 
                        width="400" height="300" 
                        style="border:0; border-radius: 15px;"" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3882.5752548624546!2d11.076286927225272!3d49.497574934790975!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47a1fd7875cb0627%3A0x72cafc6bb89cfa2f!2sAeroporto%20di%20Norimberga!5e0!3m2!1sit!2sit!4v1671726482994!5m2!1sit!2sit" 
                        width="400" height="300" style="border:0; border-radius: 15px;" 
                        allowfullscreen="" loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3102.7247497205617!2d-77.4610288282597!3d38.953116113986106!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b64740174eb057%3A0x8e01cb201080601d!2sAeroporto%20internazionale%20di%20Washington-Dulles!5e0!3m2!1sit!2sit!4v1671726576719!5m2!1sit!2sit" 
                        width="400" height="300" 
                        style="border:0; border-radius: 15px;" allowfullscreen="" 
                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

            <div class="moonContainer">
                <div id="moonText" class="moonP">
                    <img class="im1" src="shuttleMoon.jpg" alt="Shuttle che si allontana dalla terra">
                    <img class="im2" src="spaceshipMoon.jpg" alt="Spazio nave che si allontana dalla terra">
                    <p>La Luna, il nostro satellite. La Luna è il luogo più vicino alla Terra, e per questo motivo è il luogo più
                        frequentato dai nostri viaggiatori. Il viaggio sulla Luna dura circa 3 ore e mezza, divise in mezz'ora per l'arrivo, 
                        2 ore e mezza di visita, e mezz'ora per il ritorno, esclusi i tempi di imbarco e sbarco.
                        Il costo stimato del viaggio è di 4000€ per persona, escluse consumazioni
                        all'interno della navetta. L'età minima per partecipare è di 21 anni e quella massima è di 60 anni. L'altezza
                        del passeggero dev'essere compresa tra 1.30m e 2.00m, il peso tra 50kg e 110kg.
                    </p>
                    <br>
                </div>

                <div id="moonMaps" class="moonA">
                    <h1>AEREOPORTI DI PARTENZA</h1>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2790.033541183556!2d8.7255307!3d45.6300625!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478661757c84a7b7%3A0xa3f10a57a0c77efe!2sAeroporto%20di%20Milano-Malpensa!5e0!3m2!1sit!2sit!4v1671799914209!5m2!1sit!2sit" 
                        width="400" height="300" style="border:0; border-radius: 15px;" 
                        allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2617.132123554465!2d2.5509442999999994!3d49.0080713!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e63e038e4ccf5b%3A0x42be0982f5ba62c!2sAeroporto%20di%20Parigi%20Charles%20de%20Gaulle!5e0!3m2!1sit!2sit!4v1671799965691!5m2!1sit!2sit" 
                            width="400" height="300" style="border:0; border-radius: 15px;" 
                            allowfullscreen="" loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3349.9379382657808!2d-97.0403352!3d32.8998091!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864c2a660d222aa7%3A0x73323f5e067d201c!2sAeroporto%20Internazionale%20di%20Dallas-Fort%20Worth!5e0!3m2!1sit!2sit!4v1671800013453!5m2!1sit!2sit" 
                                width="400" height="300" style="border:0; border-radius: 15px;" 
                                allowfullscreen="" loading="lazy" 
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

            <div class="marsContainer">
                <div id="marsText" class="marsP">
                    <img class="im1" src="shuttleMars.jpg" alt="Shuttle che si allontana dalla terra">
                    <img class="im2" src="spaceshipMars.jpg" alt="Spazio nave che si allontana dalla terra">
                    <p>Marte, il nostro vicino pianeta rosso. Marte è stato il primo pianeta esplorato dagli umani.
                        Il viaggio su Marte dura circa 9 ore e mezza, divise in 90 minuti per l'arrivo, 
                        6 ore 30 minuti di visita, e 90 minuti per il ritorno, esclusi i tempi di imbarco e sbarco.
                        Il costo stimato del viaggio è di 12000€ per persona, escluse consumazioni
                        all'interno della navetta. L'età minima per partecipare è di 25 anni e quella massima è di 52 anni. L'altezza
                        del passeggero dev'essere compresa tra 1.60m e 1.85m, il peso tra 70kg e 100kg.
                    </p>
                    <br>
                </div>
                                
                <div id="marsMaps" class ="marsA">
                    <h1>AEREOPORTI DI PARTENZA</h1>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2849.9631310355053!2d8.842424551914739!3d44.41340227900005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12d34098cb78e025%3A0x831fb5cb5f619b49!2sAeroporto%20di%20Genova%20%22Cristoforo%20Colombo%22!5e0!3m2!1sit!2sit!4v1671811795879!5m2!1sit!2sit" 
                        width="400" height="300" style="border:0; border-radius: 15px;"
                        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9941.414924790239!2d-0.47118279823109765!3d51.470021087263824!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48767234cdc56de9%3A0x8fe7535543f64167!2sAeroporto%20di%20Londra-Heathrow!5e0!3m2!1sit!2sit!4v1671811861401!5m2!1sit!2sit"
                            width="400" height="300" style="border:0; border-radius: 15px;" 
                            allowfullscreen="" loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1750.1798391212917!2d-22.63038024765588!3d63.98148688344001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4929fdfce2ab799f%3A0x27f88d0a15c328cd!2sAeroporto%20Internazionale%20di%20Keflav%C3%ADk!5e0!3m2!1sit!2sit!4v1671811928369!5m2!1sit!2sit" 
                                width="400" height="300" style="border:0;" 
                                allowfullscreen="" loading="lazy" 
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

            <div id="buttonJoin" class="buttonJoin">
                    <div class="center">
                        <button class="join" onClick="window.open('./registration.php')">Unisciti ora!</button>
                    </div> 
            </div>
            
        </div>
        <?php //require_once(__DIR__.'/footer.html'); ?>
    </div>
</body>