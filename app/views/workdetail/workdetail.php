<!-- Hero Workpage Detail -->
<section id="hero-image">
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="title-housing-management-mobile-app">
                        <?= $data['title-section'] ?>
                    </div>
                </div>
                <div id="faciliate-the-management">
                    Facilitate the management of residential housing for the occurrence of a good system so that management can be done well and in direct control.
                </div>
                <div class="col-12 col-lg-6">
                    <img src="<?= BASE_URL; ?>/assets/img/Mask group.svg" alt="" width="548" height="773" class="img-fluid">
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Hero Workpage Detail -->

<!-- Background And Client -->
<section id="background-and-client">
    <div class="container">
        <div class="row">
            <div class="background-app col-lg-6">
                <div class="background-title">
                    Background
                </div>
                <div class="background-subtitle">
                    <?= $data['background-subtitle']; ?>
                </div>
            </div>
            <div class="client-app offset-lg-1 col-lg-4">
                <div class="title-on-sub-client">Client</div>
                <div class="sutitle-on-sub-client"><?= $data['client']; ?></div>
                <hr>
                <div class="title-on-sub-client">Dicipline</div>
                <div class="sutitle-on-sub-client"><?= $data['dicipline']; ?></div>
                <hr>
                <div class="title-on-sub-client">Product Designer</div>
                <div class="sutitle-on-sub-client"><?= $data['product-designer']; ?></div>
                <hr>
                <div class="title-on-sub-client"><?= $data['engineer-type']; ?></div>
                <div class="sutitle-on-sub-client"><?= $data['engineer']; ?></div>
                <hr>
                <span class="share-socmed">
                    <span class="share">Share : </span>
                    <a href="http://">
                        <img alt="instagram.svg" src="<?= BASE_URL; ?>/assets/img/instagram.svg" class="icon-socmed">
                    </a>
                    <a href="http://">
                        <img alt="facebook.svg" src="<?= BASE_URL; ?>/assets/img/facebook.svg" class="icon-socmed">
                    </a>
                    <a href="http://">
                        <img alt="twitter.svg" src="<?= BASE_URL; ?>/assets/img/twitter.svg" class="icon-socmed">
                    </a>
                </span>
            </div>
        </div>
    </div>
</section>
<!-- End Background And Client -->


<!-- The Process -->
<section id="the-process">
    <div class="container">
        <div class="row text-center">
            <div class="col title-the-process">The Process</div>
        </div>
        <div class="row">
            <div class="col-lg-6 explain-process">
                <div class="subtitle-the-process">1- Understanding</div>
                <div class="text-the-process text-left"><?= $data['understanding-value']; ?>
                </div>
            </div>
            <div class="col-lg-6 explain-process">
                <div class="subtitle-the-process">2- Research</div>
                <div class="text-the-process text-left">
                    <?= $data['research-value']; ?>
                </div>
            </div>
        </div>
        <div class="row row-text">
            <div class="col-lg-6 explain-process">
                <div class="subtitle-the-process">3- Wireframing</div>
                <div class="text-the-process text-left">
                    <?= $data['wireframing-value']; ?>
                </div>
            </div>
            <div class="col-lg-6 explain-process">
                <div class="subtitle-the-process">4- Visual Design</div>
                <div class="text-the-process text-left">
                    <?= $data['visual-design-value']; ?>
                </div>
            </div>
        </div>
        <div class="row row-text">
            <div class="col-lg-6 explain-process">
                <div class="subtitle-the-process">5- Development</div>
                <div class="text-the-process text-left">
                    <?= $data['development-value']; ?>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="subtitle-the-process">6- Test & Deployment</div>
                <div class="text-the-process text-left">
                    <?= $data['test-deployment-value']; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End The Process -->

<!-- Section The Result -->
<section id="the-results">
    <div class="container text-lg-center">
        <div class="row">
            <div class="col title-results text-center">The Results</div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <img src="<?= $data['image-typography']; ?>" alt="" class="img-fluid">
            </div>
            <div class="col-lg-6 spacer-result">
                <img src="<?= $data['image-colors-guide']; ?>" alt="" class="img-fluid">
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-4 spacer-result">
                <img src="<?= $data['image-project-1']; ?>" alt="" class="img-fluid" style="object-fit: fill;">
            </div>
            <div class="col-lg-4 spacer-result">
                <img src="<?= $data['image-project-2']; ?>" alt="" class="" style="object-fit: fill;">
            </div>
            <div class="col-lg-4 spacer-result">
                <img src="<?= $data['image-project-3']; ?>" alt="" class="" style="object-fit: fill;">
            </div>
        </div>
    </div>
</section>
<!-- End Section The Result -->

<!-- Section detail app -->
<section id="easy-decision">
    <div class="container">
        <div class="row container-detail-app">
            <div class="col-lg-6 left-side-detail-app order-last order-lg-first">
                <div class="title-detail-app">
                    Easy Decision
                </div>
                <div class="detail-app">
                    <b>Background:</b>
                    <span class="content-detail-app">
                        We want to make the process of monitoring workers in working on residents ' complaints easy and fast.
                    </span>
                </div>
                <div class="detail-app">
                    <b>Solution:</b>
                    <span class="content-detail-app">
                        We created a dashboard on the home page that provides graphical information of how many reports are coming in, worked on and not worked on.
                        So that management can quickly make decisions if there are problems coming.
                    </span>
                </div>
            </div>
            <div class="col-lg-6 order-first order-lg-last">
                <div class="background-detail-app text-center">
                    <img src="<?= BASE_URL; ?>/assets/img/image-easy-decision-bgm-app.svg" alt="" class="mt-5 mb-5 img-fluid">
                </div>
            </div>
        </div>

        <div class="row container-detail-app">
            <div class="col-lg-6">
                <div class="background-detail-app text-center">
                    <img src="<?= BASE_URL; ?>/assets/img/Mask group.png" alt="" class="img-fluid" width="640" height="auto">
                </div>
            </div>
            <div class="col-lg-6 left-side-detail-app">
                <div class="title-detail-app">
                    Explore Incoming Reports
                </div>
                <div class="detail-app">
                    <b>Background:</b>
                    <span class="content-detail-app">
                        We want field workers to be easy to confirm every incoming report process from citizens. <br>
                        In each of its stages such as incoming reports, reports done and finished reports.
                    </span>
                </div>
                <div class="detail-app">
                    <b>Solution:</b>
                    <span class="content-detail-app">
                        We display report information from residents clearly by displaying Report Photos, report locations, report titles, report times. <br><br>
                        In addition, in the top navigation the user can see the reports that are being processed and the reports that have already been completed.
                    </span>
                </div>
            </div>
        </div>

        <div class="row container-detail-app">
            <div class="col-lg-6 left-side-detail-app order-last order-lg-first">
                <div class="title-detail-app">
                    Employee performance and
                    attendance control
                </div>
                <div class="detail-app">
                    <b>Background:</b>
                    <span class="content-detail-app">
                        We want to assess the performance of workers quickly and clearly.
                    </span>
                </div>
                <div class="detail-app">
                    <b>Solution:</b>
                    <span class="content-detail-app">
                        With the attendance feature, management can monitor employees who enter per day and the data will be visible on the dashboard on the home page. <br><br>

                        This attendance feature is also supported by the location upload feature, fingerprint feature and face scan feature.
                    </span>
                </div>
            </div>

            <div class="col-lg-6 order-first order-lg-last">
                <div class="background-detail-app text-center">
                    <img src="<?= BASE_URL; ?>/assets/img/Group 48.png" alt="" class="img-fluid" width="640" height="auto">
                </div>
            </div>

        </div>

        <div class="row container-detail-app">
            <div class="col-lg-6">
                <div class="background-detail-app text-center">
                    <img src="<?= BASE_URL; ?>/assets/img/Mask group (1).png" alt="" class="img-fluid" width="640" height="auto">
                </div>
            </div>
            <div class="col-lg-6 left-side-detail-app">
                <div class="title-detail-app">
                    Easy Registration
                </div>
                <div class="detail-app">
                    <b>Background:</b>
                    <span class="content-detail-app">
                        We want to make it easy for users to register easily, quickly and safely.
                    </span>
                </div>
                <div class="detail-app">
                    <b>Solution:</b>
                    <span class="content-detail-app">
                        Because this is an application that is specifically for residents. <br>
                        so we make registration using home unit number and will get verification number via email,sms and also whatsapp to facilitate users.
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End section detail app -->


