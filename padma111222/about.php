<?php
/* Template Name: about   */
get_header();?>




    <!-- hero part -->
    <section class="container-fluid">
        <div class="container">
            <div class="row mt-4">
                <?php dynamic_sidebar('heading')?>
            </div>
        </div>
        <div class="row bottomherro">
                <div class="row">
                    <div class="col-sm-4 bottomleft">
                        <div class="line"></div>
                    </div>
                    <div class="col-sm-4 bottommiddle text-center">
                        <h4>Recent Photos</h4>
                        <p>Some latest project pictures</p>
                    </div>
                    <div class="col-sm-4 bottomright">
                        <div class="line"></div>
                    </div>
           </div>
        </div>
    </section>




    <!-- padma image -->


    <section class="container-fluid">
        <div class="container">
            <div class="row bottomphoto">
                <div class="col-lg-3">
                    <div class="card" style="width: 16rem;">
                        <?php dynamic_sidebar('pimg1');?>
                        <div class="card-body">
                            <?php dynamic_sidebar('pbody1');?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card" style="width: 16rem;">
                        <?php dynamic_sidebar('pimg2');?>
                        <div class="card-body">
                            <?php dynamic_sidebar('pbody2');?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card" style="width: 16rem;">
                        <?php dynamic_sidebar('pimg3');?>
                        <div class="card-body">
                            <?php dynamic_sidebar('pbody3');?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card" style="width: 16rem;">
                        <?php dynamic_sidebar('pimg4');?>
                        <div class="card-body">
                            <?php dynamic_sidebar('pbody4');?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- photo part end here  -->
    

<section class="container-fluid mt-5 ">
    <div class="container photo text-center">
        <div class="row topphoto">
            <div class="col-lg-5 line">


            </div>
             
            <div class="col-lg-2">
                <h4>Recent Photos</h4>
                <p>Some latest project pictures</p>

            </div>
            <div class="col-lg-5 line">
        
            </div>
        </div>
    </div>
</section>


<?php get_footer();?>

