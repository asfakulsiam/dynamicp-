<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>padma111222</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <?php wp_head();?>
</head>

<body>
    <header class="container-fluid slider">
        <div class="row">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <?php 
                        $x=0;
                        while(have_posts()){the_post();
                        $x++;
                    ?>
                    <div class="carousel-item <?= ($x==1)? 'active':''?>">
                            <?php the_post_thumbnail();?>
                    </div>
                    <?php }?>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </header>

    <!-- logo -->

    

    <section class="logo container-fluid">
        <div class="row">
            <div class="col-sm-6 logoLeft pt-2">
                <?php the_custom_logo();?>
            </div>
            <div class="col-sm-6 logoRight pt-2">
                <?php dynamic_sidebar('bdlogo')?>
            </div>
        </div>
    </section>
    

    
    <!-- menu part end -->

    <!-- navbar part -->
<section class="container_fluid menu">
        <div class="container nemu_1 navbar-expand">
            <?php wp_nav_menu( array(
                'theme_location' => 'TM',
                'menu_class' => 'navbar-nav',
             ))?>
        </div>

    </section>