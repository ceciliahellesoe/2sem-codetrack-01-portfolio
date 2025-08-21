<?php
/** @var \App\Template $this */
/** @var string|null $success */
/** @var array<string, array<string>> $errors */
/** @var array<string, string> $old */
/** @var \App\Http\Request $request */

$this->extend('layout');
?>

<?php $this->start('title', 'Contact Me') ?>

<section class="page-header">
    <div class="container">
        <h1 class="page-heading">
            Kontakt mig!
        </h1>
        <p class="page-intro">
            Har du et spørgsmål, eller kunne du tænke dig et samarbejde? Du er altid velkommen til at kontakte mig gennem oplysningerne neden for. Ser frem til at høre fra dig!
        </p>
    </div>
</section>

<section class="contact">
    <div class="container">
        <div class="contact-content">
            <div class="contact-info">
                <h2>
                    Kontakt Information
                </h2>
                <p>
                    Om du har et spørgsmål til mit arbejde, gerne vil snakke samarbejde, eller blot sige hej, så er du altid velkommen til at kontakte mig.</p>

                <ul class="contact-details">
                    <li>
                        <strong>
                            Email:
                        </strong>
                        <a href="ceh005@edu.zealand.dk">
                            ceh005@edu.zealand.dk
                        </a>
                    </li>
                    <li>
                        <strong>
                            Telefon:
                        </strong>
                        <a href="tel:+4512345678">
                            +45 12345678</a>
                    </li>
                    <li>
                        <strong>
                            Location:
                        </strong>
                        <span>
                            City, Country
                        </span>
                    </li>
                </ul>

                <blockquote>
                    "Good design is as little design as possible." — Dieter Rams
                    <cite>Design Philosophy</cite>
                </blockquote>
            </div>

            <div class="contact-form">
                <h2>
                    Send a Message
                </h2>

                <form action="/contact" method="post">
                    <input
                        type="hidden"
                        name="_token"
                        value="<?= htmlspecialchars($request->getCsrfToken()) ?>"
                    >

                    <div class="form-group">
                        <label for="name">
                            Your Name
                        </label>
                        <input
                            type="text"
                            id="name"
                            name="name"
                            value="<?= $old['name'] ?? '' ?>"
                            class="<?= !empty($errors['name']) ? 'has-error' : '' ?>"
                            aria-required="true"
                        >
                        <?php if (!empty($errors['name'])): ?>
                            <div class="field-error">
                                <?= htmlspecialchars($errors['name'][0]) ?>
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="form-group">
                        <label for="email">
                            Email Address
                        </label>
                        <input
                            type="email"
                            id="email"
                            name="email"
                            value="<?= $old['email'] ?? '' ?>"
                            class="<?= !empty($errors['email']) ? 'has-error' : '' ?>"
                            aria-required="true"
                        >
                        <?php if (!empty($errors['email'])): ?>
                            <div class="field-error">
                                <?= htmlspecialchars($errors['email'][0]) ?>
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="form-group">
                        <label for="subject">
                            Subject
                        </label>
                        <input
                            type="text"
                            id="subject"
                            name="subject"
                            value="<?= $old['subject'] ?? '' ?>"
                            class="<?= !empty($errors['subject']) ? 'has-error' : '' ?>"
                            aria-required="true"
                        >
                        <?php if (!empty($errors['subject'])): ?>
                            <div class="field-error">
                                <?= htmlspecialchars($errors['subject'][0]) ?>
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="form-group">
                        <label for="message">
                            Your Message
                        </label>
                        <textarea
                            id="message"
                            name="message"
                            rows="5"
                            class="<?= !empty($errors['message']) ? 'has-error' : '' ?>"
                            aria-required="true"
                        ><?=
                            $old['message'] ?? ''
                        ?></textarea>
                        <?php if (!empty($errors['message'])): ?>
                            <div class="field-error">
                                <?= htmlspecialchars($errors['message'][0]) ?>
                            </div>
                        <?php endif; ?>
                    </div>

                    <button
                        type="submit"
                        class="button"
                    >
                        Send Message
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
