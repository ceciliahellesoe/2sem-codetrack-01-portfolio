<?php
/** @var \App\Template $this */
/** @var string|null $success */
/** @var array<string, array<string>> $errors */

$this->extend('layout');
?>

<?php $this->start('title', 'About Me') ?>

<section class="page-header">
    <div class="container">
        <h1 class="page-heading">
            Om mig
        </h1>
        <p class="page-intro">
            Get to know more about my journey, skills, and passion for web development. I'm dedicated to creating elegant solutions to complex problems.
        </p>
    </div>
</section>

<section class="bio">
    <div class="container">
        <div class="about-content">
            <div class="about-text">
                <h2 class="section-heading">Bio</h2>
                <p>
                    hjælp...
                </p>
                <p>
                    please?
                </p>
                <p>
                    No more vandmelon for 100kr. - Billie
                </p>
            </div>

            <div class="about-image">
                <img src="images/bilka2.png" alt="Headshot of Abigail looking suspicious" class="portrait-image">
            </div>
        </div>
    </div>
</section>

<section class="skills section-padding">
    <div class="container">
        <h2 class="section-heading">Skills</h2>
        <div class="skill-items">
            <span class="skill-tag">HTML</span>
            <span class="skill-tag">CSS</span>
            <span class="skill-tag">Webhosting</span>
            <span class="skill-tag">Graphic Design</span>
            <span class="skill-tag">Project Planning</span>
        </div>
    </div>
</section>
