<?php
/**
 * Front Page Template — Verasol 1:1 Rebuild
 * @package HelloBiz
 */
get_header();
?>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/front-page-styles.css" />

<!-- 1. USP BAR -->
<div class="usp-bar">
    <div class="container">
        <ul class="usp-list">
            <li class="usp-item"><svg viewBox="0 0 24 24">
                    <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" />
                </svg> Ontzorgen van A tot Z</li>
            <li class="usp-item"><svg viewBox="0 0 24 24">
                    <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" />
                </svg> 25 Jaar Ervaring</li>
            <li class="usp-item"><svg viewBox="0 0 24 24">
                    <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" />
                </svg> Eigen Productie</li>
        </ul>
    </div>
</div>

<!-- 2. HERO -->
<div class="hero-section">
    <img src="<?php echo home_url('/wp-content/uploads/2026/02/Palacegarden-Hero-Home.jpeg'); ?>"
        alt="Palace Garden Veranda" class="hero-bg">
    <div class="hero-overlay"></div>
    <div class="hero-promo">
        <div class="promo-label">Gratis upgrade!</div>
        <div class="promo-value">€1.000,-</div>
        <div class="promo-sub">bij elke bestelling</div>
    </div>
    <div class="container hero-content-wrap">
        <div class="hero-text">
            <h1>Jouw Palacegarden <strong>veranda</strong>, het fijnste plekje <strong>thuis</strong></h1>
            <a href="/contact/" class="btn-hero">Bekijk Actie</a>
        </div>
    </div>
</div>

<!-- 3. INTRO 2-COL -->
<div class="intro-section">
    <div class="container">
        <div class="intro-grid">
            <div class="intro-left">
                <h2><strong>Duizenden gingen je voor.</strong><br>Al 25 jaar lang.</h2>
                <p>Een fijne plek om te eten, te ontspannen of samen te zijn. Zónder dat het weer alles voor je bepaalt?
                    Dat kan. Met een veranda van Palacegarden zit je altijd goed. Schaduw in de zomer, beschutting in de
                    herfst.</p>
                <p>Jouw veranda past zich moeiteloos aan, aan het seizoen én aan jouw leven. Daarom voelt een aluminium
                    veranda al snel als het fijnste plekje van je huis. Je creëert extra leefruimte, direct grenzend aan
                    je woning, waar binnen en buiten naadloos in elkaar overgaan.</p>
            </div>
            <div class="intro-right">
                <p>Wil jij ook meer genieten in elk seizoen en heel veel gezellige momenten beleven met elkaar? Kies dan
                    voor een Palacegarden veranda.</p>
                <ul class="magazine-list">
                    <li><svg viewBox="0 0 24 24">
                            <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" />
                        </svg> Extra sterke profielen</li>
                    <li><svg viewBox="0 0 24 24">
                            <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" />
                        </svg> Maatwerk altijd gratis</li>
                    <li><svg viewBox="0 0 24 24">
                            <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" />
                        </svg> Voor elk huis een oplossing</li>
                    <li><svg viewBox="0 0 24 24">
                            <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" />
                        </svg> Plaatsen door onze eigen vakmensen</li>
                    <li><svg viewBox="0 0 24 24">
                            <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" />
                        </svg> Snelle levering door heel Nederland</li>
                    <li><svg viewBox="0 0 24 24">
                            <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" />
                        </svg> Duurzaam en makkelijk in onderhoud</li>
                    <li><svg viewBox="0 0 24 24">
                            <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" />
                        </svg> Altijd vaste aanspreekpunt</li>
                </ul>
                <p style="font-weight:600; margin-top:20px;">Benieuwd naar de prijs? Vraag vrijblijvend een offerte aan!
                </p>
                <div class="intro-buttons" style="justify-content:flex-start;">
                    <a href="/contact/" class="btn">Prijsindicatie Aanvragen</a>
                    <a href="/contact/" class="btn btn-outline">Plan Adviesgesprek</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- 4. USP IMAGE WITH TAGS -->
<div class="usp-image-section">
    <img src="https://www.verasol.nl/media/1zjdj12k/verasol-cube-veranda-2.jpg?mode=crop&width=1920&height=600&quality=80"
        alt="Veranda in winter">
    <div class="usp-tags">
        <div class="usp-tag">Altijd droog en beschut</div>
        <div class="usp-tag">Meer ruimte voor iedereen</div>
        <div class="usp-tag">Gezellig buitengevoel, maar toch warm</div>
    </div>
</div>

<!-- 5. PRODUCT CATEGORIES CAROUSEL -->
<div class="categories-section">
    <div class="container">
        <div style="display:flex;justify-content:space-between;align-items:flex-end;margin-bottom:50px;">
            <div class="section-header" style="margin-bottom:0;">
                <div class="label">Veranda's, tuinkamers en zonwering</div>
                <h2>Ontdek ons assortiment</h2>
            </div>
            <div class="nav-arrows">
                <div class="nav-arrow cat-prev"><svg viewBox="0 0 24 24">
                        <path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z" />
                    </svg></div>
                <div class="nav-arrow cat-next"><svg viewBox="0 0 24 24">
                        <path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z" />
                    </svg></div>
            </div>
        </div>
        <div class="swiper catSwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><a href="#" class="cat-slide">
                        <img src="https://www.verasol.nl/media/p43h1o5b/verasol-profiline-veranda-3.jpg?mode=crop&width=600&height=800&quality=80"
                            alt="Veranda's">
                        <div class="cat-slide-overlay"><span class="cat-slide-title">Veranda's</span><span
                                class="cat-slide-btn">Bekijk modellen</span></div>
                    </a></div>
                <div class="swiper-slide"><a href="#" class="cat-slide">
                        <img src="https://www.verasol.nl/media/5w5d5w5b/verasol-glasschuifwand-1.jpg?mode=crop&width=600&height=800&quality=80"
                            alt="Tuinkamers">
                        <div class="cat-slide-overlay"><span class="cat-slide-title">Tuinkamers</span><span
                                class="cat-slide-btn">Bekijk modellen</span></div>
                    </a></div>
                <div class="swiper-slide"><a href="#" class="cat-slide">
                        <img src="https://www.verasol.nl/media/x43d1o5b/verasol-zonwering-bovendak-1.jpg?mode=crop&width=600&height=800&quality=80"
                            alt="Schuifwanden">
                        <div class="cat-slide-overlay"><span class="cat-slide-title">Schuifwanden</span><span
                                class="cat-slide-btn">Bekijk opties</span></div>
                    </a></div>
                <div class="swiper-slide"><a href="#" class="cat-slide">
                        <img src="https://www.verasol.nl/media/vzjdj12k/verasol-greenline-veranda-4.jpg?mode=crop&width=600&height=800&quality=80"
                            alt="Zonwering">
                        <div class="cat-slide-overlay"><span class="cat-slide-title">Zonwering</span><span
                                class="cat-slide-btn">Bekijk collectie</span></div>
                    </a></div>
                <div class="swiper-slide"><a href="#" class="cat-slide">
                        <img src="https://www.verasol.nl/media/2zjdj12k/verasol-greenline-veranda-1.jpg?mode=crop&width=600&height=800&quality=80"
                            alt="Carports">
                        <div class="cat-slide-overlay"><span class="cat-slide-title">Carports</span><span
                                class="cat-slide-btn">Bekijk modellen</span></div>
                    </a></div>
            </div>
        </div>
    </div>
</div>

<!-- 6. MAGAZINE -->
<div class="magazine-section">
    <div class="container">
        <div class="magazine-grid">
            <div class="magazine-content">
                <div class="label">Doe inspiratie op</div>
                <h2>Palace Garden inspiratiemagazine</h2>
                <p>Benieuwd hoe een veranda of tuinkamer er bij u thuis uit kan zien? Blader door ons gratis
                    inspiratiemagazine en ontdek de mogelijkheden.</p>
                <ul class="magazine-list">
                    <li><svg viewBox="0 0 24 24">
                            <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" />
                        </svg> Prachtige projectfoto's</li>
                    <li><svg viewBox="0 0 24 24">
                            <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" />
                        </svg> Tips voor de perfecte inrichting</li>
                    <li><svg viewBox="0 0 24 24">
                            <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" />
                        </svg> Overzicht van alle opties en materialen</li>
                </ul>
                <a href="/contact/" class="btn">Gratis aanvragen</a>
            </div>
            <div class="magazine-img">
                <img src="https://www.verasol.nl/media/4zjdj12k/verasol-highline-veranda-1.jpg?mode=crop&width=700&height=500&quality=80"
                    alt="Inspiratiemagazine">
            </div>
        </div>
    </div>
</div>

<!-- 7. QUALITY -->
<div class="quality-section">
    <div class="quality-img">
        <img src="https://www.verasol.nl/media/3zjdj12k/verasol-cube-veranda-1.jpg?mode=crop&width=960&height=1000&quality=80"
            alt="Kwaliteit">
    </div>
    <div class="quality-content">
        <div class="label">Premium materialen</div>
        <h2>Hoe weet je of je écht kwaliteit koopt?</h2>
        <p>Bij Palace Garden gebruiken we uitsluitend hoogwaardig aluminium en veiligheidsglas, getest volgens de
            strengste Europese normen.</p>
        <ul class="check-list">
            <li><svg viewBox="0 0 24 24">
                    <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" />
                </svg> CE-gecertificeerde profielen</li>
            <li><svg viewBox="0 0 24 24">
                    <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" />
                </svg> 10 jaar garantie op coating</li>
            <li><svg viewBox="0 0 24 24">
                    <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" />
                </svg> Statische berekening volgens Eurocode</li>
            <li><svg viewBox="0 0 24 24">
                    <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" />
                </svg> Eigen montageteams mogelijk</li>
        </ul>
        <a href="/about/" class="btn">Meer over onze kwaliteit</a>
    </div>
</div>

<!-- 8. PROJECTS CAROUSEL -->
<div class="projects-section">
    <div class="container">
        <div class="projects-header">
            <div class="left">
                <div class="label">Recente projecten</div>
                <h2>Veranda's en tuinkamers waar<br>iedereen blij van wordt</h2>
            </div>
            <div class="nav-arrows">
                <div class="nav-arrow proj-prev"><svg viewBox="0 0 24 24">
                        <path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z" />
                    </svg></div>
                <div class="nav-arrow proj-next"><svg viewBox="0 0 24 24">
                        <path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z" />
                    </svg></div>
            </div>
        </div>
        <div class="swiper projSwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="proj-slide">
                        <img src="https://www.verasol.nl/media/2zjdj12k/verasol-greenline-veranda-1.jpg?mode=crop&width=600&height=800&quality=80"
                            alt="Project">
                        <div class="proj-slide-overlay">
                            <div class="proj-slide-title">Tennisvereniging Tilburg</div><a href="/galerie/"
                                class="proj-btn">Kijk verder!</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="proj-slide">
                        <img src="https://www.verasol.nl/media/3zjdj12k/verasol-cube-veranda-1.jpg?mode=crop&width=600&height=800&quality=80"
                            alt="Project">
                        <div class="proj-slide-overlay">
                            <div class="proj-slide-title">Vrijstaande Cube tuinkamer</div><a href="/galerie/"
                                class="proj-btn">Kijk verder!</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="proj-slide">
                        <img src="https://www.verasol.nl/media/4zjdj12k/verasol-highline-veranda-1.jpg?mode=crop&width=600&height=800&quality=80"
                            alt="Project">
                        <div class="proj-slide-overlay">
                            <div class="proj-slide-title">Profiline tuinkamer met schuifpui</div><a href="/galerie/"
                                class="proj-btn">Kijk verder!</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="proj-slide">
                        <img src="https://www.verasol.nl/media/5zjdj12k/verasol-greenline-veranda-2.jpg?mode=crop&width=600&height=800&quality=80"
                            alt="Project">
                        <div class="proj-slide-overlay">
                            <div class="proj-slide-title">Profiline veranda met glazen schuifwand</div><a
                                href="/galerie/" class="proj-btn">Kijk verder!</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="proj-slide">
                        <img src="https://www.verasol.nl/media/p43h1o5b/verasol-profiline-veranda-3.jpg?mode=crop&width=600&height=800&quality=80"
                            alt="Project">
                        <div class="proj-slide-overlay">
                            <div class="proj-slide-title">Greenline veranda aan woning</div><a href="/galerie/"
                                class="proj-btn">Kijk verder!</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="proj-slide">
                        <img src="https://www.verasol.nl/media/vzjdj12k/verasol-greenline-veranda-4.jpg?mode=crop&width=600&height=800&quality=80"
                            alt="Project">
                        <div class="proj-slide-overlay">
                            <div class="proj-slide-title">Moderne tuinkamer met schuifdeuren</div><a href="/galerie/"
                                class="proj-btn">Kijk verder!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- 9. FAQ -->
<div class="faq-section">
    <div class="container">
        <div class="faq-grid">
            <div class="faq-image">
                <img src="https://www.verasol.nl/media/1zjdj12k/verasol-cube-veranda-2.jpg?mode=crop&width=500&height=600&quality=80"
                    alt="FAQ">
            </div>
            <div class="faq-content">
                <div class="label">Veelgestelde vragen</div>
                <h2>Weet waar je aan toe bent</h2>
                <div class="faq-item">
                    <button class="faq-question">Wat kost een veranda of tuinkamer?<svg viewBox="0 0 24 24">
                            <path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6z" />
                        </svg></button>
                    <div class="faq-answer">
                        <div class="faq-answer-inner">De prijs hangt af van het model, de afmetingen en de gekozen
                            opties. Een basis veranda begint vanaf circa €3.500. Vraag een vrijblijvende prijsindicatie
                            aan voor een prijs op maat.</div>
                    </div>
                </div>
                <div class="faq-item">
                    <button class="faq-question">Heb ik een vergunning nodig?<svg viewBox="0 0 24 24">
                            <path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6z" />
                        </svg></button>
                    <div class="faq-answer">
                        <div class="faq-answer-inner">In veel gevallen is een veranda vergunningsvrij. Dit hangt af van
                            de grootte, de hoogte en de locatie. Wij adviseren u hierover graag.</div>
                    </div>
                </div>
                <div class="faq-item">
                    <button class="faq-question">Hoe lang duurt de levering?<svg viewBox="0 0 24 24">
                            <path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6z" />
                        </svg></button>
                    <div class="faq-answer">
                        <div class="faq-answer-inner">De gemiddelde levertijd is 4 tot 6 weken na goedkeuring van de
                            order. Bij standaardmodellen kan dit sneller.</div>
                    </div>
                </div>
                <div class="faq-item">
                    <button class="faq-question">Kan ik de veranda zelf monteren?<svg viewBox="0 0 24 24">
                            <path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6z" />
                        </svg></button>
                    <div class="faq-answer">
                        <div class="faq-answer-inner">Ja, onze veranda's worden geleverd met een uitgebreide
                            montagehandleiding. U kunt ook kiezen voor montage door onze eigen teams.</div>
                    </div>
                </div>
                <div class="faq-item">
                    <button class="faq-question">Welke garantie bieden jullie?<svg viewBox="0 0 24 24">
                            <path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6z" />
                        </svg></button>
                    <div class="faq-answer">
                        <div class="faq-answer-inner">Wij bieden 10 jaar garantie op de poedercoating en 5 jaar op de
                            constructie. Dit getuigt van ons vertrouwen in de kwaliteit van onze producten.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- 10. SHOWROOM FINDER -->
<div class="showroom-section">
    <div class="container">
        <div class="showroom-inner">
            <span class="showroom-label">Vind een showroom in de buurt</span>
            <div class="showroom-input">
                <input type="text" placeholder="Voer uw postcode in...">
                <button>Zoeken</button>
            </div>
        </div>
    </div>
</div>

<!-- Swiper & FAQ Scripts -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    // Categories Carousel
    new Swiper(".catSwiper", {
        slidesPerView: 1,
        spaceBetween: 20,
        loop: true,
        navigation: { nextEl: ".cat-next", prevEl: ".cat-prev" },
        breakpoints: {
            640: { slidesPerView: 2, spaceBetween: 20 },
            768: { slidesPerView: 3, spaceBetween: 24 },
            1024: { slidesPerView: 3.5, spaceBetween: 24 }
        }
    });

    // Projects Carousel
    new Swiper(".projSwiper", {
        slidesPerView: 1,
        spaceBetween: 20,
        loop: true,
        navigation: { nextEl: ".proj-next", prevEl: ".proj-prev" },
        breakpoints: {
            640: { slidesPerView: 2, spaceBetween: 20 },
            768: { slidesPerView: 3, spaceBetween: 24 },
            1024: { slidesPerView: 3.5, spaceBetween: 24 }
        }
    });

    // FAQ Accordion
    document.querySelectorAll('.faq-question').forEach(btn => {
        btn.addEventListener('click', () => {
            const answer = btn.nextElementSibling;
            const isOpen = btn.classList.contains('active');
            document.querySelectorAll('.faq-question').forEach(b => {
                b.classList.remove('active');
                b.nextElementSibling.style.maxHeight = null;
            });
            if (!isOpen) {
                btn.classList.add('active');
                answer.style.maxHeight = answer.scrollHeight + 'px';
            }
        });
    });
</script>

<?php get_footer(); ?>