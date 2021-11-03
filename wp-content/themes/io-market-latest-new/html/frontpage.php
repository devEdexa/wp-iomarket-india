<?php
/**
 * Template Name: Frontpage html Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage io-market
 * @since io-market 1.0
 */
 get_header(); ?>

<section class="banner-section">
    <div class="banner-section-main position-relative">
        <img class="banner-image position-absolute h-100"
            src="<?php echo get_template_directory_uri(); ?>/assets/images/home-banner.jpg" alt="banner">
        <div class="banner-text py-3 w-100 position-absolute">
            <div class="container">
                <h1 class="lightgray-color display-4 font-black z-index2 position-relative mb-xl-4 mb-md-3 mb-2">IO
                    MARKET
                    DIGITALISIERT
                    <span class="d-block green-color">IHRE
                        RECHNUNG</span>
                </h1>
                <p class="banner-discription black-color fs-5 font-semibold z-index2 position-relative">Wir
                    digitalisieren und
                    automatisieren Ihre
                    Prozesse von der
                    Bestellung bis zur Rechnung.
                </p>
            </div>
        </div>
    </div>
</section>
<section class="iomarket-section about-section">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-md-6 mb-md-0 mb-3">
                <div class="about-content">
                    <div class="section-title display-5 green-color font-black mb-md-4 mb-3">ABOUT IO-MARKET
                    </div>
                    <p class="section-discription fs-6 darkgray-color mb-xl-4 mb-3">We are a leading software
                        manufacturer and
                        service provider in the field of digitization of e-business processes.
                    </p>
                    <div class="list-title fs-3 lightgray-color font-black text-uppercase mb-3">We offer</div>
                    <ul class="iomarket-arrow-listing fs-6 darkgray-color">
                        <li>Innovative solutions</li>
                        <li>Scalable modules that adapt to your requirements</li>
                        <li>Seamless integration, thanks to the cloud solution</li>
                        <li>Out of paper. Connect with customers and suppliers via our EDI network</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-5">
                <img class="about-image"
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/about-infographics.svg"
                    alt="about">
            </div>
        </div>
    </div>
</section>
<section class="iomarket-section solution-section">
    <div class="container">
        <div class="section-title display-5 green-color font-black mb-md-4 mb-3">OUR SOLUTIONS
        </div>
        <div class="section-discription fs-6 darkgray-color mb-xl-4 mb-3">
            <p class="mb-3">Wir bieten unseren Kunden Services an, die komfortabel in ihre bestehenden Prozesse
                eingebunden werden
                können. Die Services werden kundenspezifisch mit entsprechenden Smart Contracts ausgestattet und
                implementiert. Durch unsere mehrjährige
                Erfahrung im Bereich der Business-Applikationen und Implementierung ist ein rascher Mehrwert für Ihr
                Unternehmen garantiert.</p>
            <p class="mb-3">Die nachfolgende Auflistung zeigt die Anwendungsmöglichkeiten unserer Services. Bei
                Interesse freuen wir
                uns, Ihnen detaillierte Informationen zukommen zu lassen.</p>
        </div>
        <div class="d-flex align-items-stretch flex-wrap owl-carousel solution-slider">
            <div class="item px-lg-3 mt-5 mb-lg-4 mb-3">
                <div class="solution-box position-relative h-100 py-xl-5 py-4 px-xl-4 px-3">
                    <div class="icon rounded-circle position-absolute platform"></div>
                    <div class="box-title fs-4 mb-xl-4 mb-3 text-uppercase">E-INVOICING</div>
                    <p class="fs-6 mb-3">Die Authentizität und Integrität einer elektronischen Rechnung kann mittel
                        der EDX-Business
                        Blockchain gewährleistet werden.</p>
                    <ul class="iomarket-listing fs-6 gray-color">
                        <li>Einfacher Datenaustausch mit Geschäftspartner</li>
                        <li>Einfache Archivierung</li>
                        <li>Mehrwertsteuerkonform</li>
                        <li>Automatisieren mit Smart Contracts</li>
                    </ul>
                </div>
            </div>
            <div class="item px-lg-3 mt-5 mb-lg-4 mb-3">
                <div class="solution-box position-relative h-100 py-xl-5 py-4 px-xl-4 px-3">
                    <div class="icon rounded-circle position-absolute service"></div>
                    <div class="box-title fs-4 mb-xl-4 mb-3 text-uppercase">E-LOGISTIKS</div>
                    <p class="fs-6 mb-3">Schaffen Sie Vertrauen und Transparenz in der Logistikkette und
                        automatisieren Sie Ihre Prozesse
                        via der Blockchain</p>
                    <ul class="iomarket-listing fs-6 gray-color">
                        <li>Speichern von Logistikdaten zur Beweisführung und Automatisierung</li>
                        <li>Prozessautomatisierung mit Smart Contracts</li>
                        <li>Austausch von Informationen zwischen Ihren Geschäftspartnern</li>
                    </ul>
                </div>
            </div>
            <div class="item px-lg-3 mt-5 mb-lg-4 mb-3">
                <div class="solution-box position-relative h-100 py-xl-5 py-4 px-xl-4 px-3">
                    <div class="icon rounded-circle position-absolute application"></div>
                    <div class="box-title fs-4 mb-xl-4 mb-3 text-uppercase">E-Procurement</div>
                    <p class="fs-6 mb-3">Speichern von Logistikdaten zur Beweisführung und Automatisierung</p>
                    <ul class="iomarket-listing fs-6 gray-color">
                        <li>Speichern von Logistikdaten zur Beweisführung und Automatisierung</li>
                        <li>Prozessautomatisierung mit Smart Contracts</li>
                        <li>Austausch von Informationen zwischen Ihren Geschäftspartnern</li>
                    </ul>
                </div>
            </div>
            <div class="item px-lg-3 mt-5 mb-lg-4 mb-3">
                <div class="solution-box position-relative h-100 py-xl-5 py-4 px-xl-4 px-3">
                    <div class="icon rounded-circle position-absolute government"></div>
                    <div class="box-title fs-4 mb-xl-4 mb-3 text-uppercase">E-Government</div>
                    <p class="fs-6 mb-3">Gestalten Sie effiziente Verwaltungsabläufe und nutzen Sie das Potenzial der
                        Blockchain
                        Technologie </p>
                    <ul class="iomarket-listing fs-6 gray-color">
                        <li>Register wie z.B. Grundbuch, Geburtsurkunden</li>
                        <li>Beantragung von Kennzeichen, Bewilligungen etc.</li>
                        <li>Smart City</li>
                    </ul>
                </div>
            </div>
            <div class="item px-lg-3 mt-5 mb-lg-4 mb-3">
                <div class="solution-box position-relative h-100 py-xl-5 py-4 px-xl-4 px-3">
                    <div class="icon rounded-circle position-absolute health"></div>
                    <div class="box-title fs-4 mb-xl-4 mb-3 text-uppercase">E-Health</div>
                    <p class="fs-6 mb-3">Blockchain bietet neue innovative Möglichkeiten im Gesundheitswesen für eine
                        Reihe von
                        Anwendungen</p>
                    <ul class="iomarket-listing fs-6 gray-color">
                        <li>Austausch von Patientendaten</li>
                        <li>Krankenakten</li>
                        <li>Medikamentenverschreibung</li>
                        <li>Vernetzung und Interoperabilität zwischen Spitäler, Ärzte und Versicherungen</li>
                    </ul>
                </div>
            </div>
            <div class="item px-lg-3 mt-5 mb-lg-4 mb-3">
                <div class="solution-box position-relative h-100 py-xl-5 py-4 px-xl-4 px-3">
                    <div class="icon rounded-circle position-absolute fintech"></div>
                    <div class="box-title fs-4 mb-xl-4 mb-3 text-uppercase">Fintech</div>
                    <p class="fs-6 mb-3">Die Blockchain Technologie bietet der Finanzindustrie zahlreiche Chancen von
                        neuen
                        Geschäftsmodellen und Effizienzsteigerungen</p>
                    <ul class="iomarket-listing fs-6 gray-color">
                        <li>Einfache Kundenidentifikation</li>
                        <li>Effiziente Authentifizierung</li>
                        <li>Rückverfolgbarkeit und Beweisführung</li>
                        <li>Register</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="iomarket-section costumers-section">
    <div class="container">
        <div class="section-title display-5 green-color font-black mb-md-4 mb-3">SATISFIED COSTUMERS
        </div>
        <div id="costumers-carousel" class="owl-carousel">
            <div class="item justify-content-center d-flex flex-wrap">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/profile-image.png" width="206"
                    height="206" alt="profile" class="w-50 h-auto pb-sm-0 pb-3">
                <div class="text-center p-sm-3 p-0">
                    <div class="title lightgray-color fs-4 font-bold pb-md-4 pb-3">Remo Bianchi<br> CEO Käppeli Bau
                        AG
                    </div>
                    <div class="subtext fs-6 ">“Mit io-market haben wir einen innovativen Partner
                        gefunden, der unsere wichtigsten Anforderungen erfüllen konnte und uns darüber hinaus noch einen
                        möglichst raschen ROI zusicherte.”</div>
                </div>
            </div>
            <div class="item justify-content-center d-flex flex-wrap">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/profile-image.png" width="206"
                    height="206" alt="profile" class="w-50 h-auto pb-sm-0 pb-3">
                <div class="text-center p-sm-3 p-0">
                    <div class="title lightgray-color fs-4 font-bold pb-md-4 pb-3">Remo Bianchi<br> CEO Käppeli Bau
                        AG
                    </div>
                    <div class="subtext fs-6 ">“Mit io-market haben wir einen innovativen Partner
                        gefunden, der unsere wichtigsten Anforderungen erfüllen konnte und uns darüber hinaus noch einen
                        möglichst raschen ROI zusicherte.”</div>
                </div>
            </div>
            <div class="item justify-content-center d-flex flex-wrap">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/profile-image.png" width="206"
                    height="206" alt="profile" class="w-50 h-auto pb-sm-0 pb-3">
                <div class="text-center p-sm-3 p-0">
                    <div class="title lightgray-color fs-4 font-bold pb-md-4 pb-3">Remo Bianchi<br> CEO Käppeli Bau
                        AG
                    </div>
                    <div class="subtext fs-6 ">“Mit io-market haben wir einen innovativen Partner
                        gefunden, der unsere wichtigsten Anforderungen erfüllen konnte und uns darüber hinaus noch einen
                        möglichst raschen ROI zusicherte.”</div>
                </div>
            </div>
            <div class="item justify-content-center d-flex flex-wrap">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/profile-image.png" width="206"
                    height="206" alt="profile" class="w-50 h-auto pb-sm-0 pb-3">
                <div class="text-center p-sm-3 p-0">
                    <div class="title lightgray-color fs-4 font-bold pb-md-4 pb-3">Remo Bianchi<br> CEO Käppeli Bau
                        AG
                    </div>
                    <div class="subtext fs-6 ">“Mit io-market haben wir einen innovativen Partner
                        gefunden, der unsere wichtigsten Anforderungen erfüllen konnte und uns darüber hinaus noch einen
                        möglichst raschen ROI zusicherte.”</div>
                </div>
            </div>
            <div class="item justify-content-center d-flex flex-wrap">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/profile-image.png" width="206"
                    height="206" alt="profile" class="w-50 h-auto pb-sm-0 pb-3">
                <div class="text-center p-sm-3 p-0">
                    <div class="title lightgray-color fs-4 font-bold pb-md-4 pb-3">Remo Bianchi<br> CEO Käppeli Bau
                        AG
                    </div>
                    <div class="subtext fs-6 ">“Mit io-market haben wir einen innovativen Partner
                        gefunden, der unsere wichtigsten Anforderungen erfüllen konnte und uns darüber hinaus noch einen
                        möglichst raschen ROI zusicherte.”</div>
                </div>
            </div>
            <div class="item justify-content-center d-flex flex-wrap">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/profile-image.png" width="206"
                    height="206" alt="profile" class="w-50 h-auto pb-sm-0 pb-3">
                <div class="text-center p-sm-3 p-0">
                    <div class="title lightgray-color fs-4 font-bold pb-md-4 pb-3">Remo Bianchi<br> CEO Käppeli Bau
                        AG
                    </div>
                    <div class="subtext fs-6 ">“Mit io-market haben wir einen innovativen Partner
                        gefunden, der unsere wichtigsten Anforderungen erfüllen konnte und uns darüber hinaus noch einen
                        möglichst raschen ROI zusicherte.”</div>
                </div>
            </div>
            <div class="item justify-content-center d-flex flex-wrap">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/profile-image.png" width="206"
                    height="206" alt="profile" class="w-50 h-auto pb-sm-0 pb-3">
                <div class="text-center p-sm-3 p-0">
                    <div class="title lightgray-color fs-4 font-bold pb-md-4 pb-3">Remo Bianchi<br> CEO Käppeli Bau
                        AG
                    </div>
                    <div class="subtext fs-6 ">“Mit io-market haben wir einen innovativen Partner
                        gefunden, der unsere wichtigsten Anforderungen erfüllen konnte und uns darüber hinaus noch einen
                        möglichst raschen ROI zusicherte.”</div>
                </div>
            </div>
            <div class="item justify-content-center d-flex flex-wrap">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/profile-image.png" width="206"
                    height="206" alt="profile" class="w-50 h-auto pb-sm-0 pb-3">
                <div class="text-center p-sm-3 p-0">
                    <div class="title lightgray-color fs-4 font-bold pb-md-4 pb-3">Remo Bianchi<br> CEO Käppeli Bau
                        AG
                    </div>
                    <div class="subtext fs-6 ">“Mit io-market haben wir einen innovativen Partner
                        gefunden, der unsere wichtigsten Anforderungen erfüllen konnte und uns darüber hinaus noch einen
                        möglichst raschen ROI zusicherte.”</div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="iomarket-section reason-section">
    <div class="container">
        <div class="section-title display-5 green-color font-black mb-md-4 mb-3">THREE REASONS WHY
        </div>
        <div class="row justify-content-between mb-lg-5">
            <div class="col-xl-6 col-lg-6 col-sm-12 col-xs-12 d-flex flex-wrap mb-lg-5 mb-md-4 mb-3">
                <div class="why-head d-flex align-items-center pb-xl-5 pb-xxl-4 pb-lg-3">
                    <span class="why-number font-bold lightgray-color">01</span>
                    <div
                        class="why-titile display-4 font-black green-color ms-sm-3 ps-2 ps-sm-4 ps-3 position-relative">
                        Innovative<br>
                        Heads
                        <span
                            class="position-absolute display-3 lightgray-color text-capitalize font-black">Innovative</span>
                    </div>
                </div>
                <img class="mt-lg-0 mx-auto m-auto why-icon"
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/innovative-heads.svg" width="141"
                    height="129" alt="innovative">
            </div>
            <div class="col-xl-5 col-lg-6 col-sm-12 col-xs-12 mb-md-5 mb-4">
                <div class="title fs-2 font-bold pb-xl-4 pb-3 lightgray-color">We love challenges</div>
                <div class="detail-text fs-4 lh-sm">
                    <p class="mb-xxl-5 mb-xl-4 mb-3">Das Technologieumfeld unterliegt einem ständigen Wandel. Wir von
                        io-market
                        verstehen
                        diesen
                        Wandel als spannende Herausforderung und Chance für die Zukunft.</p>
                    <p class="mb-xxl-5 mb-xl-4 mb-3">Wir setzen auf langfristige Partnerschaften und zufriedene
                        Geschäftspartner. Seit
                        über 20 Jahren
                        entwickeln wir zusammen mit unseren Geschäftspartner massgeschneiderte Lösungen.</p>
                    <a href="#" titile="button"
                        class="iom-arrow-button fs-4 green-bg white-color hover-white-color transiton-03s rounded border-1 green-border text-capitalize position-relative d-inline-block">About
                        us</a>
                </div>
            </div>
        </div>
        <div class="row justify-content-between mb-lg-5">
            <div class="col-xl-6 col-lg-6 col-sm-12 col-xs-12 d-flex flex-wrap order-lg-2 order-1 mb-lg-5 mb-md-4 mb-3">
                <div class="why-head d-flex align-items-center pb-xl-5 pb-xxl-4 pb-lg-3">
                    <span class="why-number font-bold lightgray-color">02</span>
                    <div
                        class="why-titile display-4 font-black green-color ms-sm-3 ps-2 ps-sm-4 ps-3 position-relative">
                        Individual<br>
                        Solutions
                        <span
                            class="position-absolute display-3 lightgray-color text-capitalize font-black">Individual</span>
                    </div>
                </div>
                <img class="mt-lg-0 mx-auto m-auto why-icon"
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/individual-solution.svg"
                    width="141" height="129" alt="individual">
            </div>
            <div class="col-xl-5 col-lg-6 col-sm-12 col-xs-12 order-lg-1 order-2 mb-md-5 mb-4 ">
                <div class="title fs-2 font-bold pb-xl-4 pb-3 lightgray-color">Innovative solutions and services</div>
                <div class="detail-text fs-4 lh-sm">
                    <p class="mb-xxl-5 mb-xl-4 mb-3">Wir bieten unseren Kunden als starkes Technologieunternehmen die
                        neuesten
                        und
                        innovativsten
                        Lösungen zur Optimierung der Supply-Chain.</p>
                    <p class="mb-xxl-5 mb-xl-4 mb-3">Wir bieten unseren Kunden als starkes Technologieunternehmen die
                        neuesten
                        und
                        innovativsten
                        Lösungen zur Optimierung der Supply-Chain.</p>
                    <a href="#" titile="button"
                        class="iom-arrow-button fs-4 green-bg white-color hover-white-color transiton-03s rounded border-1 green-border text-capitalize position-relative d-inline-block">To
                        the Solutions</a>
                </div>
            </div>
        </div>
        <div class="row justify-content-between">
            <div class="col-xl-6 col-lg-6 col-sm-12 col-xs-12 d-flex flex-wrap mb-lg-5 mb-md-4 mb-3">
                <div class="why-head d-flex align-items-center pb-xl-5 pb-xxl-4 pb-lg-3">
                    <span class="why-number font-bold lightgray-color">03</span>
                    <div
                        class="why-titile display-4 font-black green-color ms-sm-3 ps-2 ps-sm-4 ps-3 position-relative">
                        Long term<br>
                        Partnerships
                        <span
                            class="position-absolute display-3 lightgray-color text-capitalize font-black">Partnerships</span>
                    </div>
                </div>
                <img class="mt-lg-0 mx-auto m-auto why-icon"
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/long-term-partnership.svg"
                    width="141" height="129" alt="partnership">
            </div>
            <div class="col-xl-5 col-lg-6 col-sm-12 col-xs-12 mb-lg-5">
                <div class="title fs-2 font-bold pb-xl-4 pb-3 lightgray-color">We love challenges</div>
                <div class="detail-text fs-4 lh-sm">
                    <p class="mb-xxl-5 mb-xl-4 mb-3">Wir setzen auf langfristige Partnerschaften und zufriedene
                        Geschäftspartner. Seit
                        über 20 Jahren
                        entwickeln wir zusammen mit unseren Geschäftspartner massgeschneiderte Lösungen.</p>
                    <p class="mb-xxl-5 mb-xl-4 mb-3">Wir bieten unseren Kunden als starkes Technologieunternehmen die
                        neuesten
                        und
                        innovativsten
                        Lösungen zur Optimierung der Supply-Chain.</p>
                    <a href="#" titile="button"
                        class="iom-arrow-button fs-4 green-bg white-color hover-white-color transiton-03s rounded border-1 green-border text-capitalize position-relative d-inline-block">Our
                        customers</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="iomarket-section news-section">
    <div class="container">
        <div class="section-title display-5 green-color font-black mb-md-4 mb-3">IO-MARKET NEWS
        </div>
        <div id="news-carousel" class="owl-carousel">
            <div class="item border-2 gray-border gray-bg">
                <a href="#" title="" class="text-decoration-none darkgray-color">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/news.jpg" width="419"
                        height="281" alt="news" class="w-100 h-auto">
                    <div class="detail-box">
                        <p class="small  mb-2">April 3, 2019</p>
                        <div class="title lightgray-color fs-4 font-bold pb-sm-4 pb-3">EU launches Blockchain
                            association
                            INATBA</div>
                        <div class="subtext fs-6 ">The word Blockchain is on everyone’s lips: no
                            company that does not talk about it. No investor who has not heard of it. But real detail
                            knowledge is rare..</div>
                    </div>
                </a>
            </div>
            <div class="item border-2 gray-border gray-bg">
                <a href="#" title="" class="text-decoration-none darkgray-color">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/news.jpg" width="419"
                        height="281" alt="news" class="w-100 h-auto">
                    <div class="detail-box">
                        <p class="small  mb-2">April 3, 2019</p>
                        <div class="title lightgray-color fs-4 font-bold pb-sm-4 pb-3">EU launches Blockchain
                            association
                            INATBA</div>
                        <div class="subtext fs-6 ">The word Blockchain is on everyone’s lips: no
                            company that does not talk about it. No investor who has not heard of it. But real detail
                            knowledge is rare..</div>
                    </div>
                </a>
            </div>
            <div class="item border-2 gray-border gray-bg">
                <a href="#" title="" class="text-decoration-none darkgray-color">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/news.jpg" width="419"
                        height="281" alt="news" class="w-100 h-auto">
                    <div class="detail-box">
                        <p class="small  mb-2">April 3, 2019</p>
                        <div class="title lightgray-color fs-4 font-bold pb-sm-4 pb-3">EU launches Blockchain
                            association
                            INATBA</div>
                        <div class="subtext fs-6 ">The word Blockchain is on everyone’s lips: no
                            company that does not talk about it. No investor who has not heard of it. But real detail
                            knowledge is rare..</div>
                    </div>
                </a>
            </div>
            <div class="item border-2 gray-border gray-bg">
                <a href="#" title="" class="text-decoration-none darkgray-color">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/news.jpg" width="419"
                        height="281" alt="news" class="w-100 h-auto">
                    <div class="detail-box">
                        <p class="small  mb-2">April 3, 2019</p>
                        <div class="title lightgray-color fs-4 font-bold pb-sm-4 pb-3">EU launches Blockchain
                            association
                            INATBA</div>
                        <div class="subtext fs-6 ">The word Blockchain is on everyone’s lips: no
                            company that does not talk about it. No investor who has not heard of it. But real detail
                            knowledge is rare..</div>
                    </div>
                </a>
            </div>
            <div class="item border-2 gray-border gray-bg">
                <a href="#" title="" class="text-decoration-none darkgray-color">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/news.jpg" width="419"
                        height="281" alt="news" class="w-100 h-auto">
                    <div class="detail-box">
                        <p class="small  mb-2">April 3, 2019</p>
                        <div class="title lightgray-color fs-4 font-bold pb-sm-4 pb-3">EU launches Blockchain
                            association
                            INATBA</div>
                        <div class="subtext fs-6 ">The word Blockchain is on everyone’s lips: no
                            company that does not talk about it. No investor who has not heard of it. But real detail
                            knowledge is rare..</div>
                    </div>
                </a>
            </div>
            <div class="item border-2 gray-border gray-bg">
                <a href="#" title="" class="text-decoration-none darkgray-color">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/news.jpg" width="419"
                        height="281" alt="news" class="w-100 h-auto">
                    <div class="detail-box">
                        <p class="small  mb-2">April 3, 2019</p>
                        <div class="title lightgray-color fs-4 font-bold pb-sm-4 pb-3">EU launches Blockchain
                            association
                            INATBA</div>
                        <div class="subtext fs-6 ">The word Blockchain is on everyone’s lips: no
                            company that does not talk about it. No investor who has not heard of it. But real detail
                            knowledge is rare..</div>
                    </div>
                </a>
            </div>
            <div class="item border-2 gray-border gray-bg">
                <a href="#" title="" class="text-decoration-none darkgray-color">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/news.jpg" width="419"
                        height="281" alt="news" class="w-100 h-auto">
                    <div class="detail-box">
                        <p class="small  mb-2">April 3, 2019</p>
                        <div class="title lightgray-color fs-4 font-bold pb-sm-4 pb-3">EU launches Blockchain
                            association
                            INATBA</div>
                        <div class="subtext fs-6 ">The word Blockchain is on everyone’s lips: no
                            company that does not talk about it. No investor who has not heard of it. But real detail
                            knowledge is rare..</div>
                    </div>
                </a>
            </div>
            <div class="item border-2 gray-border gray-bg">
                <a href="#" title="" class="text-decoration-none darkgray-color">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/news.jpg" width="419"
                        height="281" alt="news" class="w-100 h-auto">
                    <div class="detail-box">
                        <p class="small ">April 3, 2019</p>
                        <div class="title lightgray-color fs-4 font-bold pb-sm-4 pb-3">EU launches Blockchain
                            association
                            INATBA</div>
                        <div class="subtext fs-6 ">The word Blockchain is on everyone’s lips: no
                            company that does not talk about it. No investor who has not heard of it. But real detail
                            knowledge is rare..</div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<?php get_footer();?>