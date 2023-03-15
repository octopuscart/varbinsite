<?php
$this->load->view('layout/header');
?>
<!-- Slider -->
<!--KODE SAB BANNER WRAP START-->
<div class="kode_sab_banner_wrap them_overlay ">
    <!--CONTAINER START-->
    <div class="container">
        <div class="sab_banner_text">
            <h2><?php echo $contentData["title"] ?></h2>
            <ul class="breadcrumbs">
                <li><a href="#"><i class="fa fa-home"></i></a></li>
                <li><strong><?php echo $contentData["uri"] ?></strong></li>
            </ul>
        </div>
    </div>
    <!--CONTAINER END-->
</div>
<!--KODE SAB BANNER WRAP END-->

<!--KODE EVENT WRAP START-->
<div class="kode_event_wrap ">
    <!--CONTAINER START-->
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <!--KODE BLOG DETAIL ROW START-->
                <div class="kode_blog_detail_row maincontenttemplate">
                    <div class="kode_blog_detail_des">
                        <?php echo $contentData["content"] ?>
                    </div>

                </div>
            </DIV>
            <div class="col-md-4">
                <!--SIDEBAR WIDGET START-->
                <div class=" maincontenttemplate">

                    <?php
                    foreach ($metaData as $ckey => $cvalue) {
                        ?>
                        <?php
                        if ($ckey) {
                            ?>
                            <div class="row splitpostdata">

                            </div>
                            <?php
                        }
                        ?>
                        <!--KODE COMING EVENT START-->
                        <div class=" margin">
                            <h3 class="sidebar_title"><?php echo $cvalue["title"]; ?></h3>
                            <div class="">
                                <div>
                                    <div class="kode_coming_fig">
                                        <?php echo $cvalue["content"]; ?>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!--KODE COMING EVENT END-->
                        <?php
                    }
                    ?>
                </div>
                <!--SIDEBAR WIDGET END-->
            </div>
        </div>
    </div>
    <!--CONTAINER END-->
</div>
<!--KODE EVENT WRAP END-->



<?php
$this->load->view('layout/footer');
?>