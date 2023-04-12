<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- Font Awesome cdn-link -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- Aangepaste CSS-bestand-link -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<!-- Over ons-sectie -->
<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/ruilen.png" alt="">
      </div>

      <div class="content">
         <h3>Ruilen of retourneren?</h3>
         <p>Vanaf het moment dat jij je bestelling in huis hebt krijg je 60 dagen de tijd om te retourneren. Je kan gratis retourneren in één van onze Csport winkels. Je mag je artikel(en) ook retourneren per post, maar de verzendkosten zijn voor eigen rekening. Klik hier voor de dichtstbijzijnde Aktiesport winkel.
Je kunt gratis retourneren in onze Csport winkels. Voor retourneren per post betaal je alleen de verzendkosten, die zijn namelijk voor eigen rekening.</p>
         <a href="contact.php" class="btn">Mail ons</a>
      </div>

   </div>

</section>

<!-- Diversiteit-sectie -->
<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/Milieu.png" alt="">
      </div>

      <div class="content">
         <h3>Vragen over milieu DIVERSITEIT</h3>
         <p>Bij Csport is diversiteit eigenlijk heel gewoon maar daardoor o zo belangrijk. En daar zijn we trots op. Diversiteit betekent voor ons: aandacht hebben voor alles waar wij van elkaar in verschillen en dit accepteren en respecteren. Wij spreken ons uit tegen elke vorm van ongewenst gedrag. Je kunt namelijk pas echt jezelf zijn en optimaal je talenten benutten wanneer je in een veilige omgeving bent en met respect behandeld wordt, ongeacht de verschillen. Dit is de basis van onze samenwerking en het succes van Csport!

Binnen de organisatie hebben we de culture club. Deze groep teamleden uit verschillende lagen vanuit de organisatie (winkel & kantoor) zorgt er voor dat we ons constant bewust zijn van, en laat ons kennis maken met verschillende culturen, achtergronden en overtuigingen om zo de kennis en het begrip onder alle teamleden te verbreden. Tevens organiseren zij (online)events om zo de teamgeest te vegroten en de brug tussen a

</section>

<section class="reviews">
   
   <h1 class="heading">Beoordelingen van onze klanten</h1>

   <div class="swiper reviews-slider">

   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <img src="images/pic-1.png" alt="">
         <p>Een woord Perfect!
            Makkelijk om een bestelling te plaatsen. Mijn nike schoenen waren snel binnen. Met enige regelmaat bestel ik hier mijn schoen, nooit problemen gehad. Ook retour sturen van schoenen, geen probleem.
             Enkel lof over deze webshop en merk is geweldig. De negatieve review hier verbazen mij en kan me daar zeker niet in vinden.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Hans lizen</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-2.png" alt="">
         <p>Buiten de bots om doet Nike het goed.
            Het is te merken dat ze bezig zijn om meer schoenen beschikbaar te stellen voor de klant. Helaas hebben ze nog geen oplossing voor alle bots.
             De quality controle is wel wat achteruit gegaan. Vandaag 2 paar ontvangen waarvan 1 paar flinke lijm resten heeft.
              Verzending is vrijwel altijd binnen een dag!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Alia cantona</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-3.png" alt="">
         <p>1e keer wat besteld via Csport, wist niet wat ik moest verwachten na negatieve reviews te lezen dacht ik ff als dat maar goed gaat. Maaar het ging heel goed. Ik kon het pakket van begin tot het eind volgen heb op vrijdag besteld en op dinsdag lagen de schoenen klaar om op te pikken op het dhl punt. Dus ik zou het nu zo weer doen. De schoenen zijn gecontroleerd en zien er netjes uit, goed Verpakt ook. Aanrader.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Lionel messi</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-4.png" alt="">
         <p>De website heeft duidelijk technische problemen, omdat ik telkens word omgeleid naar de Amerikaanse website. Verder verliep het bestelproces goed en heb ik mijn bestelling snel in huis gekregen. Ook de retour werd netjes en vlot afgehandeld.
             Het contact met de klantenservice over de chat verloopt soms wat moeizaam, vanwege het wat vreemde taalgebruik van de chatmedewerkers.
              Al met al oké ervaring.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Georgina rodríguez</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-5.png" alt="">
         <p>Dear Nike,
             I am a happy customer 😄. Sinds (2014) via the Nike app
              Klantenservice goed bereikbaar
               Geld refund snel terug
                Vaak leuke kleding te koop
                 Mag ook gezegd worden. Ik heb wel goede ervaringen met Nike 
                    En de 20% korting op sale! Ik hoop dat jullie daar nooit mee stoppen 🙌🏾✨🍀✨</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Kylian Mbappé</h3>
      </div>

   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>



</section>

<section class="reviews">
   
   <h1 class="heading">Wie zijn wij?</h1>

   <div class="swiper reviews-slider">

   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <img src="images/Ali.jpg" alt="">
         <p>Hallo mijn naam is Ali Shwani ik ben 16 jaar en zit op het techniekcollegerotterdam waar ik de opleiding Software developer doe. In mijn opleiding leer ik over verschillende talen over progammeren die gaan over HTML CSS JAVASCRIPT PHP en MYSQL. Dit opleiding duurt ook 3 jaar waar je in het eerste jaar veel gaat leren en het 2e jaar op stage gaat en het laatste jaar afrond met een examen. Mijn carrièredoel is om mijn MBO diploma te halen en dan verder studeren in het HBO over Cybersecurity.</p>
         <h3>Ali Shwani</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/Danyelabi.png" alt="">
         <p>Danyel is een enthousiaste 17-jarige student die momenteel de opleiding tot Software Developer volgt bij het Techniek College Rotterdam. Hij heeft altijd al een grote interesse gehad in computers en technologie en wil deze passie graag omzetten in een bloeiende carrière in de softwareontwikkeling.
</p>
         <h3>Danyel Buyukasik</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/Akram.jpeg" alt="">
         <p>Akram is een jonge man van 17 jaar oud, die momenteel de opleiding tot Software Developer volgt bij het Techniek College Rotterdam. Als toekomstig softwareontwikkelaar is hij gepassioneerd door alles wat te maken heeft met programmeren en computerwetenschappen.</p>
         <h3>Akram Daidoune</h3>
      </div>

   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
        slidesPerView:1,
      },
      768: {
        slidesPerView: 2,
      },
      991: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>