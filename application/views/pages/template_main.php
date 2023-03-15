<?php
$this->load->view('layout/header');
?>
<style>
    .customcontainer h3 {
    font-size: 34px;
    line-height: 46px;
    width: 100%;
    margin-top: 30px;
    margin-bottom: 0px;
}
</style>
<section class="breadcrumb-area banner-2" data-background="<?php echo base_url(); ?>/assets/theme/images/banner/9.jpg">
    <div class="text-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 v-center">
                    <div class="bread-inner">
                        <div class="bread-menu">

                        </div>
                        <div class="bread-title">
                            <h2> 
                                <?php echo $contentData["title"] ?>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Start About-->
<section class="about-agency pad-tb block-1">
    <div class="container">
        <div class="row customcontainer">

            <?php echo $contentData["content"] ?>
        </div>
  
    </div>
</section>



<?php
$this->load->view('layout/footer');
?>