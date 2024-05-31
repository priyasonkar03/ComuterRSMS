<style>
    .car-cover {
    width: 100%;
    max-width: 10em;
}

.car-item .col-auto {
    max-width: calc(100% - 12em) !important;
}

.car-item:hover {
    transform: translate(0, -4px);
    background: #a5a5a521;
}

.banner-img-holder {
    height: 25vh !important;
    width: 100%;
    overflow: hidden;
}

.banner-img {
    object-fit: scale-down;
    height: 100%;
    width: 100%;
    transition: transform .3s ease-in;
}

.car-item:hover .banner-img {
    transform: scale(1.3);
}

.welcome-content img {
    margin: .5em;
    max-width: 100%;
    height: auto;
}

.callout {
    padding: 1em;
    border: 1px solid #007bff;
    border-radius: .25em;
    background: #ffffff;
    margin-bottom: 1em;
}

@media (max-width: 768px) {
    .banner-img-holder {
        height: 30vh !important;
    }

    .callout h3 {
        font-size: 1.25em;
    }
}

@media (max-width: 576px) {
    .banner-img-holder {
        height: 35vh !important;
    }

    .callout h3 {
        font-size: 1em;
    }
}

</style>
<!-- Welcom content -->
<div class="col-lg-12 py-2">
    <div class="container-fluid">
        <div class="card card-outline card-lightblue shadow rounded-0">
            <div class="card-body rounded-0">
                <div class="container-fluid">
                    <h3 class="text-center">Welcome</h3>
                    <hr>
                    <div class="welcome-content">
                        <?php include("welcome.html") ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- services -->
<div class="col-lg-12 py-2">
    <div class="container-fluid">
        <div class="card card-outline card-lightblue shadow rounded-0">
            <div class="card-body rounded-0">
                <div class="container-fluid">
                    <h3 class="text-center">Our Services</h3>
                    <hr>
                    <div class="container-fluid">
                        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 gx-2 gy-2">
                            <?php 
                                $services = $conn->query("SELECT * FROM `service_list` where delete_flag = 0 order by `service` asc");
                                while($row = $services->fetch_assoc()):
                            ?>
                                <div class="col">
                                    <div class="callout border-primary rounded-0 shadow">
                                        <h3><b><?= $row['service'] ?></b></h3>
                                        <div class="form-group">
                                            <span class="float-right"><i class="fa fa-tags text-muted"></i> <?= number_format($row['cost'],2) ?></span>
                                        </div>
                                        <p class="text-muted"><small><?= str_replace("\n","<br/>",$row['description']) ?></small></p>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                            <?php ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- about us -->
<div class="col-lg-12 py-2">
    <div class="container-fluid">
        <div class="card card-outline card-lightblue shadow rounded-0">
            <div class="card-body rounded-0">
                <div class="container-fluid">
                    <h3 class="text-center">About us</h3>
                    <hr>
                    <div class="row my-5">
                        <div class="col-md-5">
                            <div class="card card-outline card-navy rounded-0 shadow">
                                <div class="card-header">
                                    <h4 class="card-title">Contact</h4>
                                </div>
                                <div class="card-body rounded-0">
                                    <dl>
                                        <dt class="text-muted"><i class="fa fa-envelope"></i> Email</dt>
                                        <dd class="pr-4"><?= $_settings->info('email') ?></dd>
                                        <dt class="text-muted"><i class="fa fa-phone"></i> Contact #</dt>
                                        <dd class="pr-4"><?= $_settings->info('contact') ?></dd>
                                        <dt class="text-muted"><i class="fa fa-map-marked-alt"></i> Location</dt>
                                        <dd class="pr-4"><?= $_settings->info('address') ?></dd>
                                        <div>
                                        <p>Diractors on company<br> 
                                        <b>Mrs. Mo. Rasid</b><br>
                                        <b>Miss. Shilpi Soni</b></p>
                                        </div>        
                                    </dl>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="card rounded-0 card-outline card-navy shadow">
                                <div class="card-body rounded-0">
                                    <!-- for map -->
                                    <div class="container mt-5">
                                        <h1 class="text-center">Our Location</h1>
                                        <div class="row justify-content-center">
                                            <div class="col-md-8">
                                                <div class="embed-responsive embed-responsive-16by9">
                                                    <iframe 
                                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8354345091247!2d144.95373531531692!3d-37.8172099797517!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f11fd81%3A0xf577d8cc11c0e893!2sFederation%20Square!5e0!3m2!1sen!2sau!4v1614008381296!5m2!1sen!2sau" 
                                                        width="600" 
                                                        height="450" 
                                                        style="border:0;" 
                                                        allowfullscreen="" 
                                                        aria-hidden="false" 
                                                        tabindex="0"
                                                        class="embed-responsive-item">
                                                    </iframe>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- for map end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
