<!-- Footer Section -->
<section id="footer">
    <div class="row">
        <div class="col-lg-4 order-first">
            <div class="row">
                <div class="col">
                    <img src="<?= BASE_URL; ?>/assets/icon/Logo Microconn.svg" alt="" width="142px" height="40px" />
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <p class="text-footer">
                        Microconn is your partner to concept, design and execute every
                        bright idea about digital needs. We collaborate passion and
                        ambition become a real solution.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mid-footer col-sm-pull-4 ">
            <div class="row">
                <div class="col-lg-6 col-6">
                    <div class="title-footer text-left ms-lg-4">Company</div>
                    <div class="sub-title-footer ms-lg-4">
                        <a href="">
                            <p class="text-left">Home</p>
                        </a>
                        <a href="">
                            <p class="text-left">Service</p>
                        </a>
                        <a href="">
                            <p class="text-left">Work</p>
                        </a>
                        <a href="">
                            <p class="text-left">About Us</p>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-6">
                    <div class="title-footer text-left ms-lg-4">Contact</div>
                    <div class="sub-title-footer ms-lg-4">
                        <a href="">
                            <p class="text-left">Instagram</p>
                        </a>
                        <a href="">
                            <p class="text-left">Mail</p>
                        </a>
                        <a href="">
                            <p class="text-left">Dribble</p>
                        </a>
                        <a href="">
                            <p class="text-left">Behance</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 order-first order-lg-last">
            <div class="row">
                <div class="col">
                    <div class="title-footer text-left right-side">
                        Have a question in mind ? Let us help you
                    </div>
                </div>
            </div>
            <div class="row d-flex">
                <div class="col">
                    <div class="input-field">
                        <form action="<?= BASE_URL; ?>/email/sendEmail" method="POST">
                            <input type="email" name="email" placeholder="Your email address" autocomplete="off" style="height: auto; color: #fff;" />
                            <button type="submit" class="button-footer">
                                <img src="<?= BASE_URL; ?>/assets/icon/send.svg" alt="" />
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col">
            <div class="line-break"></div>
        </div>
    </div>
    <div class="row copy-right">
        <div class="col">
            <p class="text-copyright">© 2022 Microconn. All rights reserved</p>
        </div>
    </div>
</section>
<!-- End Of Footer Section -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script src="<?= BASE_URL; ?>/assets/js/script.js"></script>
</body>
</html>