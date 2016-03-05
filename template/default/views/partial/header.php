<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $this->load->get_var('title') ?></title>
    <meta name="google-site-verification" content="5-fC8EeC_1gqsok3CneADtweHcnmDZWpksaveAPb8Bg"/>
    <meta name="description" content="<?= $this->load->get_var('seo_description') ?>"/>
    <meta name="keywords" content="<?= $this->load->get_var('seo_keyword') ?>"/>
    <link rel="canonical" href="<?= ($this->load->get_var('seo_url')) ? $this->load->get_var('seo_url') : current_url() ?>"/>
    <!--This meta only for Facebook-->
    <meta property="og:image" content="<?= $this->load->get_var('seo_image') ?>"/>
    <meta property="og:url" content="<?= ($this->load->get_var('seo_url')) ? $this->load->get_var('seo_url') : current_url() ?>"/>
    <meta property="og:title" content="<?= $this->load->get_var('title') ?>"/>
    <meta property="og:description" content="<?= $this->load->get_var('seo_description') ?>"/>
    <meta property="og:site_name" content="<?= $this->load->get_var('site_name') ?>"/>
    <meta property="fb:app_id" content="872365952794421">
    <!--End Meta for Facebook-->

    <!--Meta for Twitter-->
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:site" content="<?= $this->load->get_var('site_name') ?>"/>
    <meta name="twitter:title" content="<?= $this->load->get_var('title') ?>"/>
    <meta name="twitter:description" content="<?= $this->load->get_var('seo_description') ?>"/>
    <meta name="twitter:creator" content="@Tâm Điểm">
    <meta name="twitter:image" content="<?= $this->load->get_var('seo_image') ?>"/>

    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="<?= $this->load->get_var('title') ?>"/>
    <meta itemprop="description" content="<?= $this->load->get_var('seo_description') ?>"/>
    <meta itemprop="image" content="<?= $this->load->get_var('seo_image') ?>"/>

    <!-- Bootstrap -->
    <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400,700&subset=latin,vietnamese" rel='stylesheet' type='text/css'>

    <link href="<?= base_url() ?>assets/front/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/front/css/custom.css" rel="stylesheet">

    <!--Slider-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/front/plugin/flexisel/css/style.css">

    <!--TextIllate Effect-->
    <link href="<?= base_url() ?>assets/front/plugin/textillate/assets/animate.css" rel="stylesheet">

    <!--Font Awesome-->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>


    <!--News Ticker-->
    <link href="<?= base_url() ?>assets/front/plugin/jnewsticker/corporate_blue.css" rel="stylesheet" type="text/css"/>
    <script src="<?= base_url() ?>assets/front/plugin/jnewsticker/newsticker.jquery.min.js" type="text/javascript"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript">
        var site_url = '<?=base_url()?>';
        // $(function () {
        //     $("#breakingnews1").BreakingNews({
        //     	title: 'HOT <img src="<?=base_url()?>assets/front/images/jam_new.gif" alt=""/>',
        //     	titlebgcolor: '#ff0000',
        //     	isbold: true,
        //     	timer: 5000,
        //     	effect: 'slide'
        //     });
        // });
        $(document).ready(function () {
            $('#newsticker_demo_scroll').newsticker({
                'style': 'scroll',
                'tickerTitle': '<img src="' + site_url + 'assets/front/plugin/jnewsticker/hotnews.gif" style="width:100%"/>',
                // 'twitter'       : 'Studio164a',
                // 'twitterRequestUrl' : 'http://164a.com/jnewsticker/lib/twitter/fetch.php',
                'twitterCount': 10,
                'excerptLength': 170,
                'pauseOnHover': true,
                'autoStart': true,
                'showControls': true,
                'scrollSpeed': 30
            });
        });


    </script>

</head>
<body>
<div class="block-header">
    <div class="container">
        <div class="row">
            <div class="col-xs-3">
                <a href="<?php echo base_url() ?>"><img src="<?= base_url() ?>assets/front/images/logo.png" class="logo img-responsive"/></a>
            </div>
            <div class="col-xs-9">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="main-nav">
                            <?php echo modules::run('widget/general_main_nav'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="slide text-center">
    <img src="<?= base_url() ?>assets/front/images/slide/1.jpg" alt="" style="width:100%">
</div>
<?php if ($this->router->fetch_class() == 'welcome') : ?>
    <div style="background: #191919">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="slider-feature">
                        <ul id="flexiselDemo3" style="display:none">
                            <?php
                            $this->db->select('alias, title, intro, image, content_type');
                            $this->db->where(array('is_hot' => 1, 'published' => 1));
                            $hots = $this->db->get('resource')->result();
                            ?>
                            <?php if (count($hots)) : ?>
                                <?php foreach ($hots as $row) : ?>
                                    <?php
                                    if ($row->content_type == 'news_item') {
                                        $url = site_url('tin-tuc/' . $row->alias);
                                    } elseif ($row->content_type == 'cate_service') {
                                        $url = site_url('dich-vu/' . $row->alias);
                                    } elseif ($row->content_type == 'product_item') {
                                        $url = site_url('san-pham/' . $row->alias);
                                    }

                                    if ($row->image == '') {
                                        $image = 'http://dummyimage.com/130x70/4d494d/686a82.gif&text=No Image';
                                    } else {
                                        $image = $row->image;
                                    }
                                    ?>
                                    <li><a href="<?= $url ?>" data-toggle="tooltip" title="<?= word_limiter($row->intro, 50) ?>">
                                            <img src="<?= $image ?>"/></a>
                                    </li>
                                <?php endforeach; endif ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif ?>
