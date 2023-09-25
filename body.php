<body>
    <div class="container">
        <?php
        require_once('menu.php');
        switch ($menuItem) {
            case 'fooldal':
                require_once('fooldal.php');
                break;
            case 'kapcsolat':
                require_once('kapcsolat.php');
                break;
            case 'keszitette':
                require_once('keszitette.php');
                break;
            case 'audi':
                require_once('audi.php');
                break;
            case 'bmw':
                require_once('bmw.php');
                break;
            case 'fiat':
                require_once('fiat.php');
                break;
            case 'merci':
                require_once('merci.php');
                break;
            case 'supra':
                require_once('supra');
                break;
        }
        ?>
    </div>
    
<div class="row">
    <div class="col-lg-4 col-mb-4 col-12">
        <img src="képek/audi.jpg" class="card-img-top" alt="Ez egy audi">
        <div class="card-body">
            <h5 class="card-title">AUDI X6</h5>
            <p class="card-text">Az Audi Q5 Sportback TFSI e modellben a belsőégésű motor teljesítménye az elektromos motor erejével találkozik. A kupékat idéző tetővonal jellemezte prémium SUV-modell egyszerre kínál dinamikus menetteljesítményeket és tisztán elektromos üzemmódjában helyi szinten károsanyag-kibocsátás nélküli közlekedést.</p>
            <p class="card-text"><small class="text-muted">Utolsó frissítés 1 órája</small></p>
            <a  href="webaruhaz.php?menuItem=audi" class="btn btn-primary"><small>Részletek</small></a>
        </div>
    </div>
    <div class="col-lg-4 col-mb-4 col-12">
        <img src="képek/bmw.jpg" class="card-img-top" alt="Ez egy bmw">
        <div class="card-body">
            <h5 class="card-title">BMW M3 e46</h5>
            <p class="card-text">Elég gyors ívet írt le az M3 története, ha felidézzük a ’86-ban piacra került E30-at és az E46 közötti időt, szűk 15 év. Ma mégis sokan azt mondják, hogy az E46 volt az utolsó igazi M3-as. Mégis miért? Mert valahogy tökéletesen sikerült benne megtartani azt, amiért még szeretni lehetett az autózást, de már befigyeltek a kényelmi szempontok is, épp csak olyan mértékben, hogy ne tompítsák le a klasszikus élményt, amit az E36 M3-tól örökölni tudott az E46.</p>
            <p class="card-text"><small class="text-muted">Utolsó frissítés 1 órája</small></p>
            <a  href="bmw.php?menuItem=bmw" class="btn btn-primary"><small>Részletek</small></a>
            </div>
    </div>
    <div class="col-lg-4 col-mb-4 col-12">
        <img src="képek/fiat.jpeg" class="card-img-top" alt="Ez egy fiat">
        <div class="card-body">
            <h5 class="card-title">FIAT 500</h5>
            <p class="card-text">Ha egyszer nekem is régi klasszikust kellene feltámasztani, valahogy úgy fognék a rajzoláshoz, mint Roberto Giolito. Sikerült ugyanis átemelnie a kedves rajzfilm-egérarcot, ami jellemezte a régi 500-ast. Úgy tartotta meg annak stílusjegyeit, hogy közben jóval pufókabb, modernebb, a mostani igényekhez közelítő újat alkotott.</p>
            <p class="card-text"><small class="text-muted">Utolsó frissítés 1 órája</small></p>
            <a  href="fiat.php?menuItem=fiat" class="btn btn-primary"><small>Részletek</small></a>
        </div>
    </div>
    <div class="col-lg-4 col-mb-4 col-12">
        <img src="képek/mercedes.jpg" class="card-img-top" alt="Ez egy merci">
        <div class="card-body">
            <h5 class="card-title">MERCEDES-BENZ G500</h5>
            <p class="card-text">A G-osztály belseje már alapfelszereltségként is számos kiemelkedő elemet kínál; ilyen például a szélesképernyős műszerfal és a hangulatvilágítás. Választhat az külön rendelhető EXCLUSIVE Line belső tér vagy a SUPERIOR Line belső tér közül is, amelyek lehetővé teszik, hogy az üléseket, a kárpitozást és az egyéb felszereltségi jellemzőket saját kívánságai szerint kombinálja.</p>
            <p class="card-text"><small class="text-muted">Utolsó frissítés 1 órája</small></p>
            <a  href="merci.php?menuItem=merci" class="btn btn-primary"><small>Részletek</small></a>
        </div>
    </div>
    <div class="col-lg-4 col-mb-4 col-12">
        <img src="képek/supra.jpg" class="card-img-top" alt="Ez egy supra">
        <div class="card-body">
            <h5 class="card-title">NISSAN TOYOTA SUPRA </h5>
            <p class="card-text">A Toyota Supra 2019-es megjelenése óta kapott hideget és meleget: sokan éljenezték, hogy milyen kiváló sportautó, ám még többen károgtak azon, hogy egy BMW. A nemrég piacra ért négyhengeres motorral csak messzebb került a névadó ősöktől, cserébe ez most a sportautó piac titkos tippje: ennyi pénzért ekkora tudást nem nagyon ad más.</p>
            <p class="card-text"><small class="text-muted">Utolsó frissítés 1 órája</small></p>
            <a href="supra.php?menuItem=supra" class="btn btn-primary"><small>Részletek</small></a> 
        </div>
    </div>
</div>











    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    
</body>
</html>