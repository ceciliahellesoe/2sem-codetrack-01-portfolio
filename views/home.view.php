<?php
/** @var \App\Template $this */
/** @var string|null $success */
/** @var array<string, array<string>> $errors */

$this->extend('layout');
?>

<?php $this->start('title', 'Welcome') ?>

<section class="hero section-padding">
    <div class="container">
        <h1>Cecilia Vorsholt Hellesøe<span class="accent">Multimediedesigner Studerende</span></h1>
        <p class="tagline"> Jeg skaber kreative, moderne og bruger-venlige online løsninger med fokus på kvalitet.</p>
        <a href="/contact" class="button">Kontakt mig</a>
    </div>
</section>

<section class="intro section-padding">
    <div class="container">
        <div class="intro-content">
            <div class="intro-text">
                <h2 class="section-heading">Om mig</h2>
                <p>Jeg er en passioneret webudvikler med en særlig interesse for brugervenligt design og ren kode.
                    Gennem mine projekter stræber jeg efter at skabe løsninger, der ikke blot fungerer godt,
                    men også gør en reel forskel for brugerne.
                    Med sans for detaljer og et engagement i at følge med de nyeste webteknologier,
                    bringer jeg idéer til live gennem elegant og effektiv kode.

            </div>
            <div class="intro-image">
                <img src="images/cecilia1.jpg" alt="Headshot of Abigail looking happy" class="profile-image">
            </div>
        </div>
    </div>
</section>

<section class="quick-links section-padding">
    <div class="container">
        <h2 class="section-heading">Opdag mere</h2>
        <div class="links-grid">
            <a href="/projects" class="link-card">
                <h3>Projekter</h3>
                <p>Se eksempler på mine forskellige projekter</p>
            </a>
            <a href="/about" class="link-card">
                <h3>Om mig</h3>
                <p>Opdag mere om min baggrund og færdigheder</p>
            </a>
            <a href="/contact" class="link-card">
                <h3>Kontakt</h3>
                <p>Lad os snakke om jeres næste projekt!</p>
            </a>
        </div>
    </div>
</section>
