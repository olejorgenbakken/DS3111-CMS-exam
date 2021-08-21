# Et magasin om møtet mellom teknologi, kultur og makt

Dette er en prosjekteksamen i emnet DS3111 – CMS (Content Management Systems). Her er det lagd et wordpresstema og en plugin. Under kan du lese endelig leveranserapport (deler som ikke er relevant lenger – innlogging og administrering – er utelatt).

## Innhold

- Oppgave
- Problemområde
- Konsept
  - User stories
  - Prototype
- Endringer i Wordpress installasjon
- Temavalg
- Plugins
- Produksjon av tekst og bilde
  - Tekst
  - Bilder
  - Oppdatering av innhold
- Universell utforming
  - Grafikk
  - Grid og headlines
  - Validering av siden
- Gjennomgang av PHP filene

## Oppgave

## Problemområde

I Norge i dag er det svært lite fokus på hvordan teknologien vi omgås med påvirker samfunnet vi lever i. Vi har noen få nettsteder, som Tek.no (eid av Schibsted), NRK Beta og til dels E24, hvor de første to er rettet mot forbrukere, og E24 mot bedrifter og finanssektoren. Det er vanskelig å vite om det er høna eller egget som er problemet her, altså, er det for lite etterspørsel eller er det for lite produksjon av journalistikk som fokuserer på teknologi i møte med makt og kultur. Det er heller ikke gjort mye undersøkelser utenfor de interne gruppene i disse publikasjonene på dette, så det er vanskelig å finne informasjon om det for «oss andre». I denne oppgaven vil jeg ta utgangspunkt i at det er et ønske om mer journalistikk om dette krysningspunktet.

## Konsept

Folket trenger et sted å komme til for informasjon om hvordan nasjonale og internasjonale bedrifter jobber mot dem, både på godt og vondt. I Norge er det en mangel på dette stedet, og denne journalistikken. Derfor ønsker jeg å utvikle et konsept på hvordan dette stedet kunne sett ut. Det vil være et magasin med fokus på tekst- og podkastproduksjon. For magasinet vil denne nettsiden fungere som en «one stop shop» for alt innhold som lages, muligheten til å melde seg på nyhetsbrev, kommentere saker, arrangementer de holder, i tillegg vil det være all den informasjonen man forventer å finne om en bedrift på deres nettsted; kontaktinformasjon, personvernserklæringer og så videre.

### User stories

| Brukergruppe                 | Mål                                                            | Grunn                                                                  |
| ---------------------------- | -------------------------------------------------------------- | ---------------------------------------------------------------------- |
| Som teknologistudent vil jeg | Følge med på teknologi                                         | For å være oppdatert til arbeidslivet og studiene.                     |
| Som bedrift ønsker vi        | Å fortelle om vår nye tjeneste                                 | For å få flere brukere                                                 |
| Som politiker ønsker jeg     | Å vite om de skjulte måtene bedrifter kommer seg unna skatt på | For å regulere mer effektivt                                           |
| Som leser vil jeg            | Høre på flere teknologipodkaster                               | For å få flere innspill på teknologiens konsekvenser på hverdagen vår. |
| Som bedrift ønsker vi        | Å komme på arrangementer                                       | For å fortelle flere om våre erfaringer med en teknologi.              |

### Prototype

Å starte fra bunnen med et tema er en stor oppgave, men fører ofte til en dypere forståelse av hva som skjer i bakgrunnen (i den grad man kan forstå hva som skjer i et CMS). I tillegg gjør det at man unngår å måtte lete seg fram i andres kode, noe som var ønskelig fra min side.

Målgruppen er veldig bred, noe som legger en del føringer for løsningens utseende. For eksempel må man ta hensyn til alle nivåer av teknisk forståelse, skjermstørrelser, språkkunnskaper, synshemmelser og så videre. Det blir derfor viktig å holde alle mulige utfordringer brukere kan ha i møter med teknologi i mente gjennom utviklingen fra start.
Figur 4: Sakssiden i prototypefasen
Figur 4: Sakssiden i prototypefasen
Som tidligere nevnt er målgruppen så bred at det ble naturlig å velge en enkel utforming. Det negative med dette er at det fort kan ende i et relativt kjedelig design, og måten dette er forsøkt løst på er ved bruk av store grafiske elementer, som fargede bakgrunner og bilder. I tillegg er skriften relativt stor for å skape litt spenning i designet.

Forsiden er en enkel side med struktur satt med grid, brutt opp av seksjoner med «mest leste» saker fra ulike kategorier. Headeren og footeren er like enkel, det vil heller ikke være noen dropdown elementer i løsningen, da det ikke er et så stort system at det vil sees på som nødvendig.

## Endringer i Wordpress installasjon

| Setting    | Endring               | Beskrivelse                                                                                                                                                  |
| ---------- | --------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| General    | Site Title            | Endret til egenvalgt tittel                                                                                                                                  |
|            | Tagline               | Endret til egenvalgt tagline                                                                                                                                 |
|            | New User Default Role | Endret til «contributor» fordi det i løsningen vil være flere journalister som bare trenger tilgang til å kunne skrive artikler mens «desken» publisher dem. |
|            | Date Format           | Endret til d.m.Y (dag.måned.årstall), siden dette er norsk format.                                                                                           |
|            | Time Format           | Endret til norsk standard.                                                                                                                                   |
|            | Week Start On         | Endret til mandag.                                                                                                                                           |
| Writing    | Default Post Category | Definerte «teknologi» som standardkategori.                                                                                                                  |
| Permalinks | Custom Structure      | Endret til kategori/år/måned-og-tall/tittel/ for å kunne definere egen post format for cover-stories.                                                        |
| Privacy    |                       | Her er det ikke gjort noen endringer da det ikke er tenkt at denne løsningen skal brukes av noen utenfor skolen.                                             |

## Temavalg

Som nevnt tidligere er løsningen lagd fra bunnen, mye etter et ønske om å kunne lære Wordpress på et dypere nivå enn bare hvordan man stilsetter de ulike elementene som er på siden. Jeg vil lære å bruke funksjonene og metodene som var tilgjengelige samt å lage mer modelær kode. Når det er sagt ble underscores brukt en del for å hente de nødvendige filene for at Wordpress skulle fungere som tenkt.

Navigasjonen på temaet som er utviklet har som tidligere nevnt ikke noen undermenyer, mest for å unngå en mer avansert interaksjonsmåte der det ikke er nødvendig. Bildene og fontene på siden er relativt store, som nevnt tidligere, for å skape et litt mer visuelt uttrykk uten å gjøre det for komplisert. Dette er også grunnen til at det er brukt en del animerte gifer i løsningen. Særlig i saker med visualiseringer av endring i design på nettsider og apper (her siktes det spesielt til saken om youtubes nye design) er dette en effektiv måte å skape litt mer liv i fremvisningen.

Siden er ikke utviklet mobile first, i hovedsak fordi prototypene ble utviklet med desktop som utgangspunkt, men den er gjort mobilvennlig gjennom ulike mobile query breakpoints. Løsningen er som nevnt tidligere lansert og er testet gjennomgående på en iPhone med Safari, og virker til å fungere likt på de mest brukte nettleserne.

Den største negative effekten av å velge å lage temaet selv er alle blindsonene man har som enkeltperson. Det ble derfor viktigere å teste veldig regelmessig på ulike enheter, og mennesker for å se om alt fungerte som tenkt. Dette kommer det mer om under punktet om universell utforming.

## Plugins

Her er en liste over alle plugins som er med i løsningen, hvorfor de er med, og hvor de er med.

| Navn                    | Informasjon                                      | Beskrivelse                                                                                                                                                                                                                                                                                                                     |
| ----------------------- | ------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| Cover Stories           | Selvlagd _Versjon: 1.0_                          | Legger til en seksjon i dashboardet som heter «Cover Stories», som er custom post types. Når man aktiverer denne pluginen endres også forsiden av løsningen til å sette det seneste innlegget øverst.                                                                                                                           |
| WordPress Popular Posts | Laget av Hector Cabrera _Versjon_: 5.0.1\_       | Denne pluginen legger til viewer tracking på poster, som gjør at man kan legge til «topp besøkte» poster. Den er veldig fleksibel, og gir også mulighet til å vise mest kommenterte, mest besøkte fra kategorier osv. Den er brukt på forsiden («mest lest»), og i innleggene for å foreslå videre lesing av relaterte innlegg. |
| Featured Image from URL | Laget av Marcel Jacques Machado _Versjon: 2.7.0_ | Løsningen som skal leveres har ikke mulighet til å bruke media-funksjonen til Wordpress, så denne pluginen gjør det mulig å unngå å bruke den for å sette featured images ved å gjøre det med URL istedenfor. Den er dermed brukt gjennomgående i oppgaven, på alle poster.                                                     |
| All-in-One WP Migration | Laget av ServMask _Versjon: 7.9_                 | Pluginen ble brukt for å flytte Wordpress fra lokalt miljø over på serveren til 000webhost.com.                                                                                                                                                                                                                                 |

_«Wordpress Popular Posts» endte opp med å bli brukt en del utenfor den tenkte use-casen. For eksempel da arkivsiden skulle utvikles ble det enklere å ta i bruk den for å hente alle innlegg som er i systemet enn å hente dem gjennom den tradisjonelle loopen. Problemet med denne løsningen er at siden den har et veldig spesifikt bruksområde er den ikke så åpen for endringer._

## Produksjon av tekst og bilde

All teksten er hentet fra enten NRKBeta.no eller Tek.no, og det har ikke blitt gjort noen endringer på innholdet fra de er hentet annet enn når linker ble ødelagt eller lignende. Felles for alle bildene er at de er hentet med hjelp av URLer, noe som betyr at de eksisterer bare så lenge hostene velger å ha dem på samme sted i serveren. Dette er selvfølgelig ikke optimalt i en reell løsning, men det er en god erstatning for Wordpress innebygde media bibliotek for å holde serverstørrelsen nede.

### Tekst

Sakene hentet fra NRKBeta hadde som regel mer innhold, både av tekst og bilder enn sakene fra Tek, noe som gjorde at de ofte egnet seg som langlesingssaker (cover stories). Noen av sakene hadde bilder som ikke var veldig fortellende eller reflekterende i henhold til teksten, men dette er ikke endret på av hensyn til tid og ressurser som var tilgjengelig i denne oppgaven.

Sakene hentet fra Tek har en tendens til å være mer salgsrettet, eller i det minste mer forbrukerrettet, enn motparten, noe som gjorde at de som regel var kortere, og dermed ble vanlige innlegg.

### Bilder

Bildene i sakene er hentet fra deres originale utgiver, altså er for eksempel bildene i NRK-saker hentet fra NRK de tilhører. De mer dekorative bildene (headerbildet på langlesingssaker, bakgrunnen til «mest leste» seksjoner) er hentet enten fra Wired.com eller Theverge.com. Grunnen til dette er at de hadde store biblioteker at illustrasjoner, og enklere bilder som egnet seg som grafiske elementer. Dette fører naturligvis til at man er mer åpen for angrep, man har mindre (ingen) kontroll over bildene, i tillegg til at det på den lanserte løsningen virker som om bildene fungerer som en flaskehals. Altså bruker den veldig lang tid på å laste ned bildene. Mer om konsekvensene av dette i neste del.

### Oppdatering av innhold

Som nevnt er bruken av pluginen «Wordpress Popular Posts» ukonvensjonell, og gir lite rom for oppdatering av innholdet fra noen andre enn den som sitter med koden. Dette er ikke ønskelig, og ville blitt gjort annerledes i en reell situasjon. Annet enn det er det meste gjort fra front-enden inne i Wordpress hva gjelder innhold, og burde være greit å endre fra hvem som helst med tilgang på den.

## Universell utforming

7.1 Grafikk
Bildene som er brukt i denne løsningen er som nevnt hentet fra kilder utenfor Wordpressinstallasjonen, og fungerer tilsynelatende som en flaskehals, særlig på mobil er det enkelte ganger veldig lang ventetid. Dette resulterer i at man ser teksten ganske dårlig, noe som selvfølgelig ikke er ønskelig. Når det er sagt er alle bildene lagd med alt tekst.

### Grid og headlines

Løsningens forside baserer seg på gridsystemet definert i stilarket, noe som ble gjort for at man kunne definere hvilken «rad» seksjonene med «mest lest» innhold skulle komme. Dette har en uforutsett konsekvens hvor man tabber annerledes enn forventet. Man går nemlig gjennom alle elementene som er lagt til gjennom den vanlige loopen, for så å gå gjennom de seksjonene. Her burde man endre på dette for å ikke bryte med leserens forventinger.

### Validering av siden

Det er gjennomført en del tester av ulike verktøy, her er noen resultater, og forklaringer på hvorfor scoren er som den er.

| Test                                   | Score                    | Forklaring                                                                                                                                                                                                                                                                                                  |
| -------------------------------------- | ------------------------ | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| The W3C CSS Validation Service         | **35 feil** 38 advarsler | Alle feilene er knyttet til bruken av css attributer definert med var(--text-color) eller var(--primary-color). Det er også en feil knyttet til font-weight: 440, som ikke er en font-weight man kan bruke, men dette er definert av Wordpress selv. Alle advarslene går på bruken av user agent prefikser. |
| Nu Html Checker                        | 7 feil                   | Alt er relatert til bilders src attribute. Det er også en feil i definisjonen til linken til google fonts.                                                                                                                                                                                                  |
| WAVE Web Accessibility Evaluation Tool | 5 kontrastfeil           | Kontrastfeilene går på kontrasten mellom tekst og bakgrunnsgrafikk. I tre av tilfellene er det usikkert på hva som er feil, da testing mellom de faktiske fargene viser AAA oppnåelse i følge WCAG.                                                                                                         |

## Gjennomgang av PHP filene

Alle sidene med funksjoner som er egenlagd eller endret på en måte som ikke er helt standard er kommentert med så mye forklaring som nødvendig for å kunne skjønne hva som skjer. Når det er sagt, her er en gjennomgang av alle filene, og hva de gjør (alfabetisk rekkefølge).

| Side                     | Forklaring                                                                                                                                                                                                  |
| ------------------------ | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| 404.php                  | Siden som brukes for hver gang man ender opp på en side som ikke eksisterer. Her er det bare en melding som forteller at det ikke er noe innhold å vise, og så et tilfelle av pluginen med most read posts. |
| Archive.php              | Arkivet med alle postene.                                                                                                                                                                                   |
| Category-cover-story.php | Kategorisiden for alle cover stories, denne eksisterer fordi den er viktig. Det skulle helst vært en fallback for alle andre kategorier også men den ble det ikke tid til å sette opp.                      |
| Footer.php               | Footer med meny.                                                                                                                                                                                            |
| Functions.php            | Alle funksjonene som legges til i postene. I tillegg til Opengraph. Den har bare mulighet til å hente innhold fra poster og cover stories.                                                                  |
| Header.php               | Header med meny.                                                                                                                                                                                            |
| Index.php                | Hovedsiden med innholdet fra siden.                                                                                                                                                                         |
| Page.php                 | Siden til podkaster og nyhetsbrev.                                                                                                                                                                          |
| Single-coverstory.php    | Custom post template for alle cover stories.                                                                                                                                                                |
| Single.php               | Vanlig post template.                                                                                                                                                                                       |

## Ferdigstilt løsning

I denne oppgaven har jeg valgt å ferdigstille løsningen og lansere den istedenfor å lage en YouTube video hvor jeg viser hvordan en bruker ville brukt siden da jeg hadde tid til å gjøre det, og mener dette er en bedre måte å vise det på.

### Fra konsept til løsning – Hva mangler?

I konseptet og i brukerhistoriene mine har det blitt definert brukere som vil komme på arrangementer. Dette er ikke inkludert i den ferdige løsningen på grunn av at tiden måtte bli brukt på å faktisk få levert en ferdig løsning. Dette er synd, men heldigvis ikke det aller viktigste i konseptet.
