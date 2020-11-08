<?php
$this->load->view('layout/header');
?>

<!--Start 404 Error-->
<section class="error bg-gradient pad-tb">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center mt50 mb50">
                <div class="layer-div">
                    <div class="error-block">
                        <h1>Page not Found</h1>
              
                        <div class="images mt20">
                            <img src="<?php echo base_url(); ?>assets/theme/images/shape/error-page.png" alt="error page" class="img-fluid"/>
                        </div>
                        <a href="<?php echo site_url("/");?>" class="btn-outline">Back to Home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End 404 Error-->
<?php
$this->load->view('layout/footer');
?>