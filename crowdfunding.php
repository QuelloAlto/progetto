<?php 
    session_start();
    $title = 'Crowdfunding';

    require_once(__DIR__.'\head.php');
    require_once(__DIR__.'\navbar.php');
    require_once(__DIR__.'\TryConnection.php');
    require_once(__DIR__.'\updateDonations.php');

?>
<script src="js/crowdfunding.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<body>
    <link rel="stylesheet" href="css/crowd.css">
    <h1>Crowdfunding</h1>
    <div class="desc">
        <p>Il crowdfunding è una forma di finanziamento che permette a chiunque di finanziare un progetto, un’idea o un’attività, attraverso piccole donazioni da parte di molti.
            Beyond Space è una StartUp riguardante la costruzione e l’utilizzo di navi spaziali. La nostra missione è quella di rendere il viaggio nello spazio accessibile a tutti.
            Se vuoi saperne di più, <a href="about.php">clicca qui</a>.<br>
            La nostra StartUp è basata su questo concetto di finanziamento da parte degli utenti, che successivamente potranno accedere ad esclusivi benefici
            una durante la campagna. In caso quest'ultima fallisse e non raggiungessimo il budget richiesto, tutte le donazioni già avvenute verranno rimborstate. <br>
            Il nostro obiettivo è quello di raccogliere <strong>1.000.000€</strong> per poter realizzare il nostro progetto. <br>
            E' una cifra importante, lo sappiamo, ma siamo convinti che con il desidero di ogni persona che da piccola ha risposto alla domanda "Cosa vuoi fare da grande?"
            con la risposta "l'astronauta", possiamo raggiungere questo obiettivo, insieme. <br>
            Ogni Tier, o in italiano "Livello", rappresenta una piccola somma di denaro donabile per sostenere il progetto, e ogni tier ha le sue ricompense,
            e nel caso di qualche d'uno, anche un numero limitato di accessi.<br>
            Il Tier 0 è disponibile anche per gli utenti anonimi e non registrati, mentre gli altri Tier sono riservati agli utenti del sito. <br>
        </p>
    </div>
    <br>
    <h1>Tier 0</h1>
    <div class="desc">
        <p>Il Tier 0 è il livello di donazione base. <br>
            Donando meno di 10€ si appartiene a questo tier.<br>
            Il Tier 0 non prevede alcuna ricompensa. <br>
            <strong>Il Tier 0 non ha limiti di accesso.</strong><br>
        </p>
    </div>
    <br>
    <h1>Tier 1</h1>
    <div class="desc">
        <p>Il Tier 1 è il primo livello di donazione. <br>
            Con una donazione di <strong>10€</strong> potrai ricevere un pacchetto di benvenuto, contenente una t-shirt, una maglietta e un gadget. <br>
            Inoltre, potrai accedere ad esclusivi contenuti, come video e foto, riguardanti il progetto. <br>
            <strong>Il Tier 1 non ha limiti di accesso.</strong>
        </p>
    </div>
    <br>
    <h1>Tier 2</h1>
    <div class="desc">
        <p>Il Tier 2 è il secondo livello di donazione. <br>
            Con una donazione di <strong>50€</strong> potrai ricevere tutto quello incluso nei precedenti tier,<br> e in più
            riceverai il diritto esclusivo di chiedere una domanda che verrà risposta dal nostro staff in un video QA rilasciato mensilmente. <br>
            <strong>Il Tier 2 non ha limiti di accesso.</strong>
        </p>
    </div>
    <br>
    <h1>Tier 3</h1>
    <div class="desc">
        <p>Il Tier 3 è il terzo livello di donazione. <br>
            Con una donazione di <strong>100€</strong> potrai ricevere tutto quello incluso nei precedenti tier. <br>
            Inoltre, riceverai un esclusivo poster del nostro staff firmato da ognuno di noi. <br>
            <strong>Il Tier 3 ha un limite di accesso di 2000 persone.</strong>
        </p>
    </div>
    <br>
    <h1>Tier 4</h1>
    <div class="desc">
        <p>Il Tier 4 è il quarto livello di donazione. <br>
            Con una donazione di <strong>500€</strong> potrai ricevere tutto quello incluso nei precedenti tier. <br>
            Inoltre, riceverai un tour guidato in una delle nostre sedi. <br>
            <strong>Il Tier 4 ha un limite di accesso di 1000 persone.</strong>
        </p>
    </div>
    <br>
    <h1>Tier 5</h1>
    <div class="desc">
        <p>Il Tier 5 è il quinto livello di donazione. <br>
            Con una donazione di <strong>1000€</strong> potrai ricevere tutto quello incluso nei precedenti tier. <br>
            Inoltre, avrai la possibilità di parlare un'ora faccia a faccia con uno dei nostri ingegneri. <br>
            <strong>Il Tier 5 ha un limite di accesso di 500 persone.</strong>
        </p>
    </div>
    <br>
    <h1>Tier 6</h1>
    <div class="desc">
        <p>Il Tier 6 è il sesto livello di donazione. <br>
            Con una donazione di <strong>5000€</strong> potrai ricevere tutto quello incluso nei precedenti tier. <br>
            Inoltre, il tuo nome verrà inciso sullo scafo di ogni nostra nave. <br>
            <strong>Il Tier 6 ha un limite di accesso di 100 persone.</strong>
        </p>
    </div>
    <br>
    <h1>Tier 7</h1>
    <div class="desc">
        <p>Il Tier 7 è il settimo livello di donazione. <br>
            Con una donazione di <strong>10000€</strong> potrai ricevere tutto quello incluso nei precedenti tier. <br>
            Inoltre, una delle nostre navi avrà un nome a tua scelta. <br>
            <strong>Il Tier 7 ha un limite di accesso di 50 persone.</strong>
        </p>
    </div>
    <br>
    <h1>Tier 8</h1>
    <div class="desc">
        <p>Il Tier 8 è l'ottavo e ultimo livello di donazione. <br>
            Con una donazione di <strong>50000€</strong> potrai ricevere tutto quello incluso nei precedenti tier. <br>
            Inoltre, avrai un numero illimitato di viaggi per un anno dall'ufficializzazione dei viaggi a qualsiasi destinazione. <br>
            <strong>Il Tier 8 ha un limite di accesso di 10 persone.</strong>
        </p>
    </div>
    <br>
    <div class="desc">
        <h1>Donazioni</h1>
        <button class="tButton" onClick="changeImportValue('10')">10€</button>
        <button class="tButton" onClick="changeImportValue('50')">50€</button>
        <button class="tButton" onClick="changeImportValue('100')">100€</button>
        <button class="tButton" onClick="changeImportValue('500')">500€</button>
        <button class="tButton" onClick="changeImportValue('1000')">1000€</button>
        <button class="tButton" onClick="changeImportValue('5000')">5000€</button>
        <button class="tButton" onClick="changeImportValue('10000')">10000€</button>
        <button class="tButton" onClick="changeImportValue('50000')">50000€</button><br><br>
        <form action="elaborateDonations.php" method="post">
        <input type="number" id="donationInput" name="donationInput" placeholder="Importo" onfocusout="checkImport(this.value)"><br><br>
        <?php if(!isset($_SESSION['logged'])) { ?>
        <input type="checkbox" id="anon" name="anon" value="anon" checked disabled>Resta anonimo (senza ricompense)<br><br>
        <?php } else {?>
        <input type="checkbox" id="anon" name="anon" value="anon">Resta anonimo (senza ricompense)<br><br>
        <?php } ?>
        <input type="submit" value="Dona Ora" class="tButton"><br><br>
        </form>
    </div>
    <br>
    <h1>Milestones</h1>
    <div class="desc">
        <p>Le Milestones sono obiettivi che dobbiamo raggiungere per poter continuare il nostro progetto. <br>
            Ogni donazione contribuisce a raggiungere questi obiettivi. <br>
            Qui sotto si può vedere lo stato attuale delle Milestones e gli obbiettivi già raggiunti/da raggiungere.<br>
            k = "000". Esempio: 10k = 10.000€
        </p>
    </div>

    <div class="stepper-wrapper">
      <div class="stepper-item">
        <div class="step-counter">10k</div>
        <div class="step-name">Primi passi</div>
      </div>
      <div class="stepper-item">
        <div class="step-counter">50k</div>
        <div class="step-name">Nave per Saturno</div>
      </div>
      <div class="stepper-item">
        <div class="step-counter">100k</div>
        <div class="step-name">Seconda sede</div>
      </div>
      <div class="stepper-item">
        <div class="step-counter">500k</div>
        <div class="step-name">Nave per Mercurio</div>
      </div>
      <div class="stepper-item">
        <div class="step-counter">750k</div>
        <div class="step-name">Primi Test</div>
      </div>
      <div class="stepper-item">
        <div class="step-counter">1M</div>
        <div class="step-name">Lancio ufficiale</div>
      </div>
    </div>
    <?php
        echo "<h1>Totale importo donato: " . getTotalDonationAmount() . "€</h1><br>";
        echo '<script type="text/javascript">updateStepper(' . getTotalDonationAmount() . ');</script>';
    ?>
    <table>
        <tr>
            <th>Primi passi</th>
            <th>Nave per Saturno</th>
            <th>Seconda sede</th>
            <th>Nave per Mercurio</th>
            <th>Primi Test</th>
            <th>Lancio ufficiale</th>
        </tr>
        <tr>
            <td>10.000€</td>
            <td>50.000€</td>
            <td>100.000€</td>
            <td>500.000€</td>
            <td>750.000€</td>
            <td>1.000.000€</td>
        </tr>
        <tr>
            <td>I primi passi consistono nel creare una campagna pubblicitaria per la nostra compagnia. Inoltre questo coprirà i costi già sostenuti per la realizzazione dei viaggi vicino alla terra, sulla Luna, e su Marte</td>
            <td>La nave per Saturno è la prima nave che potremo costruire grazie al crowdfunding. Questa nave sarà in grado di raggiungere Saturno in 4 ore. Questa nave sarà in grado di trasportare 100 persone e 100 tonnellate di materiale. Inoltre, il costo include anche la realizzazione dell'initerario e l'assunzione di esperti che vi guideranno nel viaggio.</td>
            <td>La seconda sede è necessaria per poter continuare il nostro progetto. Questa sede verrà fondata negli Stati Uniti, in modo da diventare ufficialmente un'azienda multinazionale.</td>
            <td>La nave per Mercurio è la seconda nave che potremo costruire grazie al crowdfunding. Questa nave sarà in grado di raggiungere Mercurio in  2 ore. Questa nave ha un prezzo più elevato di costruzione a causa dell'inospitabilità del pianeta.</td>
            <td>Questo obiettivo è necessario per poter testare la nostra tecnologia e la nostre nuove navi. Questo ammontare servirà a coprire tutti i costi necessari per garantirvi un'alto standard di sicurezza.</td>
            <td>Questo obiettivo è necessario per poter lanciare ufficialmente il nostro progetto. Consente di creare le navi in serie e di garantire partenze verso lo spazio tutti i giorni!</td>
        </table>
