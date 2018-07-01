<?php
/*
Template Name: Services
*/
get_header('multiimage');
?>
<section class="services_page">
    <div class="container">
    <div class="breadcrumbs">
            <ul class="list-inline list-unstyled">
                <li><a href="#">Home</a></li>
                <li><a href="#">Who we are</a></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="article_img"><img src="http://localhost:8080/stormguard/wp-content/themes/stormguard/stormguard/img/windows_man.png" alt="#"></div>
            </div>
            <div class="col-md-6">
                <p class="article_heading">Windows</p>
                <p class="article_content">
                The right windows can make your home – helping frame your home’s overall look and determine your level of energy efficiency. Our no-obligation damage inspection will determine if your windows are damaged or leaky and in need of replacement.
                Our team of professionals handles and installs quality products from America’s most trusted window and glass companies, such as Simonton Windows. Offering a lifetime manufacturer’s warranty, Simonton Windows are available in a variety of styles and sizes, and are made from the highest quality materials available today, including Low Emissivity (Low E) and Argon gas.
                Whether you choose windows that are wood or vinyl, single or double hung, our Storm Guard team will install your new or replacement windows right the first time. You can always count on quality construction, premium aesthetics, and energy efficiency, all with the finish options and hardware you need for your application.
                </p>
            </div>
        </div>
        <div class="offerings_block offerings_block--bordered">
        <div class="row">
            <div class="col-md-12 text-center">
                <p class="main_heading">View Our Other Services</p>
                <p class="main_description">From home upgrades to storm restoration, Storm Guard offers<br />
                a range of services to help you with your home.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 offer-block text-center">
                <span class="offering_icon"><img src="http://localhost:8080/stormguard/wp-content/themes/stormguard/stormguard/img/icon-1.png" alt=""></span>
                <p class="offering_title">Roofing</p>
                <p class="offering-description">Your roof protects your home and family. Turn to a professional when it needs replacement – turn to Storm Guard.</p>
            </div>
            <div class="col-md-4 offer-block text-center">
                <span class="offering_icon"><img src="http://localhost:8080/stormguard/wp-content/themes/stormguard/stormguard/img/icon-2.png" alt=""></span>
                <p class="offering_title">Gutters</p>
                <p class="offering-description">Gutters don’t just handle rain – they also 
                    catch leaves, twigs, snow and, depending on 
                    where you live, ice.</p>
            </div>
            <div class="col-md-4 offer-block text-center">
                <span class="offering_icon"><img src="http://localhost:8080/stormguard/wp-content/themes/stormguard/stormguard/img/icon-3.png" alt=""></span>
                <p class="offering_title">Siding</p>
                <p class="offering-description">We specialize in residential siding installation and commit ourselves to providing the highest quality siding products to our customers.</p>
            </div>
</div>
            <div class="row" style="margin-top: 30px;">
            <div class="col-md-4 offer-block text-center">
                <span class="offering_icon"><img src="http://localhost:8080/stormguard/wp-content/themes/stormguard/stormguard/img/icon-4.png" alt=""></span>
                <p class="offering_title">Paint</p>
                <p class="offering-description">Painting is the important “finishing touch” on a job well done. Storm Guard’s team of professional painting experts provides a variety of painting services.</p>
            </div>
            <div class="col-md-4 offer-block text-center">
                <span class="offering_icon"><img src="http://localhost:8080/stormguard/wp-content/themes/stormguard/stormguard/img/icon-6.png" alt=""></span>
                <p class="offering_title">Emergency Tarping</p>
                <p class="offering-description">Storm Guard offers emergency tarping services that have helped give homeowners the peace of mind they need until their damage is fully restored.</p>
            </div>
    </div>
</div>
</section>
<!-- Get Started Section -->
<?php get_template_part( 'template-parts/content', 'getstarted' ); ?>

<?php get_template_part( 'template-parts/content', 'franchise' ); ?>
<script>
    $('.franchise-wrapper').css('margin-top', '20px');
</script>




<?php get_footer('second')?>