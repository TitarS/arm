@extends('layouts')

@section('content')


    <!-- Fav-->
    <link rel="shortcut icon" href="../../favicon.ico">

    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto%3A700%2C300">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Raleway%3A400%2C800%2C500">

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="../../assets/vendor/bootstrap/bootstrap.min.css">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="../../assets/vendor/icon-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../assets/vendor/icon-etlinefont/style.css">
    <link rel="stylesheet" href="../../assets/vendor/icon-hs/style.css">
    <link rel="stylesheet" href="../../assets/vendor/icon-line-pro/style.css">

    <link rel="stylesheet" href="../../assets/vendor/animate.css">
    <link rel="stylesheet" href="../../assets/vendor/slick-carousel/slick/slick.css">

    <link rel="stylesheet" href="../../assets/vendor/hs-megamenu/src/hs.megamenu.css">
    <link rel="stylesheet" href="../../assets/vendor/hamburgers/hamburgers.min.css">

    <!-- CSS Unify -->
    <link rel="stylesheet" href="../../assets/css/unify.css">

    <!-- Revolution Slider -->
    <link rel="stylesheet" href="../../assets/vendor/revolution-slider/revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="../../assets/vendor/revolution-slider/revolution/css/settings.css">
    <link rel="stylesheet" href="../../assets/vendor/revolution-slider/revolution/css/layers.css">
    <link rel="stylesheet" href="../../assets/vendor/revolution-slider/revolution/css/navigation.css">


    <div id="rev_slider_41_1_wrapper" class="g-py-150 rev_slider_wrapper fullwidthbanner-container" style="background: #eef0f1; padding: 0; margin: 0 auto;"
         data-alias="food-carousel26"
         data-source="gallery">
        <h1>{{ $currentMenu->title }}</h1>

        <div id="rev_slider_41_1" class="rev_slider fullwidthabanner" style="display: none;"
             data-version="5.4.1">
            <ul>
                <li data-index="rs-145"
                    data-transition="fade"
                    data-slotamount="7"
                    data-hideafterloop="0"
                    data-hideslideonmobile="off"
                    data-easein="default"
                    data-easeout="default"
                    data-masterspeed="300"
                    data-thumb="/assets/img_galery/food1-150x100.jpg"
                    data-rotate="0"
                    data-saveperformance="off"
                    data-title="The Healthy Bowl">
                    <img class="rev-slidebg" src="/assets/img_galery/food1.jpg" alt="Image description"
                         data-bgposition="center center"
                         data-bgfit="contain"
                         data-bgrepeat="no-repeat">

                    <!-- LAYER NR. 1 -->
                    <div id="slide-145-layer-3" class="tp-caption FoodCarousel-Content tp-resizeme" style="z-index: 5; min-width: 420px; max-width: 420px; min-height: 420px; max-height: 420px; white-space: normal;"
                         data-x="center"
                         data-y="center"
                         data-width="['420']"
                         data-height="['420']"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[
                     {"from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","speed":800,"to":"o:1;","delay":"bytrigger","ease":"Power3.easeInOut"},
                     {"delay":"bytrigger","speed":500,"to":"auto:auto;","ease":"nothing"}
                   ]'
                         data-textAlign="['left','left','left','left']"
                         data-paddingtop="[30,30,30,30]"
                         data-paddingright="[30,30,30,30]"
                         data-paddingbottom="[30,30,30,30]"
                         data-paddingleft="[30,30,30,30]"
                         data-lasttriggerstate="reset">
                        <span class="foodcarousel-headline">The Healthy Bowl</span>
                        <br>
                        1 Large Green Bell Pepper
                        <br>
                        1 Small Onion
                        <br>
                        2 Dragon Fruits
                        <br>
                        1 Red Chili
                        <hr class="revslider-hr" style="border-top: 1px solid #292e31;">
                        Chop everything up into small bits and put into a bowl. That was easy huh?
                        <br>
                        Enjoy this special dish brought to you by
                        <a href="#">Slider Revolution</a>
                        .
                    </div>

                    <!-- LAYER NR. 2 -->
                    <div id="slide-145-layer-1" class="tp-caption FoodCarousel-Button rev-btn" style="z-index: 6; white-space: nowrap; text-transform: uppercase; outline: none; box-shadow: none; box-sizing: border-box; -moz-box-sizing: border-box; -webkit-box-sizing: border-box; cursor: pointer;"
                         data-x="center"
                         data-y="bottom"
                         data-voffset="50"
                         data-width="['auto']"
                         data-height="['auto']"
                         data-type="button"
                         data-actions='[
                     {"event":"click","action":"startlayer","layer":"slide-145-layer-3"},
                     {"event":"click","action":"startlayer","layer":"slide-145-layer-5","delay":"200"},
                     {"event":"click","action":"stoplayer","layer":"slide-145-layer-1"}
                   ]'
                         data-responsive_offset="on"
                         data-responsive="off"
                         data-frames='[
                     {"from":"opacity:0;","speed":300,"to":"o:1;","delay":0,"ease":"Power3.easeInOut"},
                     {"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"},
                     {"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255,255,255,1);bg:rgba(41,46,49,1);bw:1px 1px 1px 1px;"}
                   ]'
                         data-textAlign="['left','left','left','left']"
                         data-paddingtop="[15,15,15,15]"
                         data-paddingright="[70,70,70,70]"
                         data-paddingbottom="[15,15,15,15]"
                         data-paddingleft="[50,50,50,50]"
                         data-lasttriggerstate="reset">
                        <i class="pe-7s-note2" style="font-size: 21px; float: left; margin-top: -6px; margin-right: 10px;"></i>
                        View recipe
                    </div>

                    <!-- LAYER NR. 3 -->
                    <div id="slide-145-layer-5" class="tp-caption FoodCarousel-CloseButton rev-btn tp-resizeme" style="z-index: 7; border-color: transparent; outline: none; box-shadow: none; box-sizing: border-box; -moz-box-sizing: border-box; -webkit-box-sizing: border-box; cursor: pointer;"
                         data-x="441"
                         data-y="110"
                         data-width="['auto']"
                         data-height="['auto']"
                         data-type="button"
                         data-actions='[
                     {"event":"click","action":"stoplayer","layer":"slide-145-layer-3"},
                     {"event":"click","action":"stoplayer","layer":"slide-145-layer-5"},
                     {"event":"click","action":"startlayer","layer":"slide-145-layer-1"}
                   ]'
                         data-responsive_offset="on"
                         data-frames='[
                     {"from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","speed":800,"to":"o:1;","delay":"bytrigger","ease":"Power3.easeInOut"},
                     {"delay":"bytrigger","speed":500,"to":"auto:auto;","ease":"nothing"},
                     {"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255,255,255,1);bg:rgba(41,46,49,1);bw:1px 1px 1px 1px;"}
                   ]'
                         data-textAlign="['left','left','left','left']"
                         data-paddingtop="[14,14,14,14]"
                         data-paddingright="[14,14,14,14]"
                         data-paddingbottom="[14,14,14,14]"
                         data-paddingleft="[16,16,16,16]"
                         data-lasttriggerstate="reset">
                        <i class="fa fa-remove"></i>
                    </div>
                </li>
                <li data-index="rs-146"
                    data-transition="fade"
                    data-slotamount="7"
                    data-hideafterloop="0"
                    data-hideslideonmobile="off"
                    data-easein="default"
                    data-easeout="default"
                    data-masterspeed="300"
                    data-thumb="/assets/img_galery/food6-150x100.jpg"
                    data-rotate="0"
                    data-saveperformance="off"
                    data-title="Spicy Chili Soup">
                    <img class="rev-slidebg" src="/assets/img_galery/food6.jpg" alt="Image description"
                         data-bgposition="center center"
                         data-bgfit="contain"
                         data-bgrepeat="no-repeat">

                    <!-- LAYER NR. 4 -->
                    <div id="slide-146-layer-3" class="tp-caption FoodCarousel-Content tp-resizeme" style="z-index: 8; min-width: 420px; max-width: 420px; min-height: 420px; max-height: 420px; white-space: normal;"
                         data-x="center"
                         data-y="center"
                         data-width="['420']"
                         data-height="['420']"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[
                     {"from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","speed":800,"to":"o:1;","delay":"bytrigger","ease":"Power3.easeInOut"},
                     {"delay":"bytrigger","speed":500,"to":"auto:auto;","ease":"nothing"}
                   ]'
                         data-textAlign="['left','left','left','left']"
                         data-paddingtop="[30,30,30,30]"
                         data-paddingright="[30,30,30,30]"
                         data-paddingbottom="[30,30,30,30]"
                         data-paddingleft="[30,30,30,30]"
                         data-lasttriggerstate="reset">
                        <span class="foodcarousel-headline">Spicy Chili Soup</span>
                        <br>
                        2 Pieces of Baguette
                        <br>
                        3 Large Tomatoes
                        <br>
                        1 / 2 Cup of Mixed Herbs
                        <br>
                        1 Red Chili
                        <hr class="revslider-hr" style="border-top: 1px solid #292e31;">
                        Chop everything up into small bits and put into a bowl. That was easy huh?
                        <br>
                        Enjoy this special dish brought to you by
                        <a href="#">Slider Revolution</a>
                        .
                    </div>

                    <!-- LAYER NR. 5 -->
                    <div id="slide-146-layer-1" class="tp-caption FoodCarousel-Button rev-btn" style="z-index: 9; white-space: nowrap; text-transform: uppercase; outline: none; box-shadow: none; box-sizing: border-box; -moz-box-sizing: border-box; -webkit-box-sizing: border-box; cursor: pointer;"
                         data-x="center"
                         data-y="bottom"
                         data-voffset="50"
                         data-width="['auto']"
                         data-height="['auto']"
                         data-type="button"
                         data-actions='[
                     {"event":"click","action":"startlayer","layer":"slide-146-layer-3"},
                     {"event":"click","action":"startlayer","layer":"slide-146-layer-5"},
                     {"event":"click","action":"stoplayer","layer":"slide-146-layer-1"}
                   ]'
                         data-responsive_offset="on"
                         data-responsive="off"
                         data-frames='[
                     {"from":"opacity:0;","speed":300,"to":"o:1;","delay":0,"ease":"Power3.easeInOut"},
                     {"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"},
                     {"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255,255,255,1);bg:rgba(41,46,49,1);bw:1px 1px 1px 1px;"}
                   ]'
                         data-textAlign="['left','left','left','left']"
                         data-paddingtop="[15,15,15,15]"
                         data-paddingright="[70,70,70,70]"
                         data-paddingbottom="[15,15,15,15]"
                         data-paddingleft="[50,50,50,50]"
                         data-lasttriggerstate="reset">
                        <i class="pe-7s-note2" style="font-size: 21px; float: left; margin-top: -6px; margin-right: 10px;"></i>
                        View recipe
                    </div>

                    <!-- LAYER NR. 6 -->
                    <div id="slide-146-layer-5" class="tp-caption FoodCarousel-CloseButton rev-btn tp-resizeme" style="z-index: 10; border-color: transparent; outline: none; box-shadow: none; box-sizing: border-box; -moz-box-sizing: border-box; -webkit-box-sizing: border-box; cursor: pointer;"
                         data-x="441"
                         data-y="110"
                         data-width="['auto']"
                         data-height="['auto']"
                         data-type="button"
                         data-actions='[
                     {"event":"click","action":"stoplayer","layer":"slide-146-layer-3"},
                     {"event":"click","action":"stoplayer","layer":"slide-146-layer-5"},
                     {"event":"click","action":"startlayer","layer":"slide-146-layer-1"}
                   ]'
                         data-responsive_offset="on"
                         data-frames='[
                     {"from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","speed":800,"to":"o:1;","delay":"bytrigger","ease":"Power3.easeInOut"},
                     {"delay":"bytrigger","speed":500,"to":"auto:auto;","ease":"nothing"},
                     {"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255,255,255,1);bg:rgba(41,46,49,1);bw:1px 1px 1px 1px;"}
                   ]'
                         data-textAlign="['left','left','left','left']"
                         data-paddingtop="[14,14,14,14]"
                         data-paddingright="[14,14,14,14]"
                         data-paddingbottom="[14,14,14,14]"
                         data-paddingleft="[16,16,16,16]"
                         data-lasttriggerstate="reset">
                        <i class="fa fa-remove"></i>
                    </div>
                </li>
                <li data-index="rs-147"
                    data-transition="fade"
                    data-slotamount="7"
                    data-hideafterloop="0"
                    data-hideslideonmobile="off"
                    data-easein="default"
                    data-easeout="default"
                    data-masterspeed="300"
                    data-thumb="/assets/img_galery/food3-150x100.jpg"
                    data-rotate="0"
                    data-saveperformance="off"
                    data-title="Classic Bolognese">
                    <img class="rev-slidebg" src="/assets/img_galery/food3.jpg" alt="Image description"
                         data-bgposition="center center"
                         data-bgfit="contain"
                         data-bgrepeat="no-repeat">

                    <!-- LAYER NR. 7 -->
                    <div id="slide-147-layer-3" class="tp-caption FoodCarousel-Content tp-resizeme" style="z-index: 11; min-width: 420px; max-width: 420px; min-height: 420px; max-height: 420px; white-space: normal;"
                         data-x="center"
                         data-y="center"
                         data-width="['420']"
                         data-height="['420']"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[
                     {"from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","speed":800,"to":"o:1;","delay":"bytrigger","ease":"Power3.easeInOut"},
                     {"delay":"bytrigger","speed":500,"to":"auto:auto;","ease":"nothing"}
                   ]'
                         data-textAlign="['left','left','left','left']"
                         data-paddingtop="[30,30,30,30]"
                         data-paddingright="[30,30,30,30]"
                         data-paddingbottom="[30,30,30,30]"
                         data-paddingleft="[30,30,30,30]"
                         data-lasttriggerstate="reset">
                        <span class="foodcarousel-headline">Classic Bolognese</span>
                        <br>
                        250g Spaghettis
                        <br>
                        500g of Mixed Minced Beef
                        <br>
                        3 Large Tomatoes
                        <hr class="revslider-hr" style="border-top: 1px solid #292e31;">
                        Chop everything up into small bits and put into a bowl. That was easy huh?
                        <br>
                        Enjoy this special dish brought to you by
                        <a href="#">Slider Revolution</a>
                        .
                    </div>

                    <!-- LAYER NR. 8 -->
                    <div id="slide-147-layer-1" class="tp-caption FoodCarousel-Button rev-btn" style="z-index: 12; white-space: nowrap; text-transform: uppercase; outline: none; box-shadow: none; box-sizing: border-box; -moz-box-sizing: border-box; -webkit-box-sizing: border-box; cursor: pointer;"
                         data-x="center"
                         data-y="bottom"
                         data-voffset="50"
                         data-width="['auto']"
                         data-height="['auto']"
                         data-type="button"
                         data-actions='[
                     {"event":"click","action":"startlayer","layer":"slide-147-layer-3"},
                     {"event":"click","action":"startlayer","layer":"slide-147-layer-5","delay":"200"},
                     {"event":"click","action":"stoplayer","layer":"slide-147-layer-1"}
                   ]'
                         data-responsive_offset="on"
                         data-responsive="off"
                         data-frames='[
                     {"from":"opacity:0;","speed":300,"to":"o:1;","delay":0,"ease":"Power3.easeInOut"},
                     {"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"},
                     {"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255,255,255,1);bg:rgba(41,46,49,1);bw:1px 1px 1px 1px;"}
                   ]'
                         data-textAlign="['left','left','left','left']"
                         data-paddingtop="[15,15,15,15]"
                         data-paddingright="[70,70,70,70]"
                         data-paddingbottom="[15,15,15,15]"
                         data-paddingleft="[50,50,50,50]"
                         data-lasttriggerstate="reset">
                        <i class="pe-7s-note2" style="font-size: 21px; float: left; margin-top: -6px; margin-right: 10px;"></i>
                        View recipe
                    </div>

                    <!-- LAYER NR. 9 -->
                    <div id="slide-147-layer-5" class="tp-caption FoodCarousel-CloseButton rev-btn tp-resizeme" style="z-index: 13; white-space: nowrap; border-color: transparent; outline: none; box-shadow: none; box-sizing: border-box; -moz-box-sizing: border-box; -webkit-box-sizing: border-box; cursor: pointer;"
                         data-x="441"
                         data-y="110"
                         data-width="['auto']"
                         data-height="['auto']"
                         data-type="button"
                         data-actions='[
                     {"event":"click","action":"stoplayer","layer":"slide-147-layer-3"},
                     {"event":"click","action":"stoplayer","layer":"slide-147-layer-5"},
                     {"event":"click","action":"startlayer","layer":"slide-147-layer-1"}
                   ]'
                         data-responsive_offset="on"
                         data-frames='[
                     {"from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","speed":800,"to":"o:1;","delay":"bytrigger","ease":"Power3.easeInOut"},
                     {"delay":"bytrigger","speed":500,"to":"auto:auto;","ease":"nothing"},
                     {"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255,255,255,1);bg:rgba(41,46,49,1);bw:1px 1px 1px 1px;"}
                   ]'
                         data-textAlign="['left','left','left','left']"
                         data-paddingtop="[14,14,14,14]"
                         data-paddingright="[14,14,14,14]"
                         data-paddingbottom="[14,14,14,14]"
                         data-paddingleft="[16,16,16,16]"
                         data-lasttriggerstate="reset">
                        <i class="fa fa-remove"></i>
                    </div>
                </li>
                <li data-index="rs-148"
                    data-transition="fade"
                    data-slotamount="7"
                    data-hideafterloop="0"
                    data-hideslideonmobile="off"
                    data-easein="default"
                    data-easeout="default"
                    data-masterspeed="300"
                    data-thumb="/assets/img_galery/food2-150x100.jpg"
                    data-rotate="0"
                    data-saveperformance="off"
                    data-title="Cottage Cheese & Chives">
                    <img class="rev-slidebg" src="/assets/img_galery/food2.jpg" alt="Image description"
                         data-bgposition="center center"
                         data-bgfit="contain"
                         data-bgrepeat="no-repeat">

                    <!-- LAYER NR. 10 -->
                    <div id="slide-148-layer-3" class="tp-caption FoodCarousel-Content tp-resizeme" style="z-index: 14; min-width: 420px; max-width: 420px; min-height: 420px; max-height: 420px; white-space: normal;"
                         data-x="center"
                         data-y="center"
                         data-width="['420']"
                         data-height="['420']"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[
                     {"from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","speed":800,"to":"o:1;","delay":"bytrigger","ease":"Power3.easeInOut"},
                     {"delay":"bytrigger","speed":500,"to":"auto:auto;","ease":"nothing"}
                   ]'
                         data-textAlign="['left','left','left','left']"
                         data-paddingtop="[30,30,30,30]"
                         data-paddingright="[30,30,30,30]"
                         data-paddingbottom="[30,30,30,30]"
                         data-paddingleft="[30,30,30,30]"
                         data-lasttriggerstate="reset">
                        <span class="foodcarousel-headline">Cottage Cheese & Chives</span>
                        <br>
                        15g Chives
                        <br>
                        100g Cottage Cheese
                        <br>
                        1 Bun
                        <hr class="revslider-hr" style="border-top: 1px solid #292e31;">
                        Chop everything up into small bits and put into a bowl. That was easy huh?
                        <br>
                        Enjoy this special dish brought to you by
                        <a href="#">Slider Revolution</a>
                        .
                    </div>

                    <!-- LAYER NR. 11 -->
                    <div id="slide-148-layer-1" class="tp-caption FoodCarousel-Button rev-btn" style="z-index: 15; white-space: nowrap; text-transform: uppercase; outline: none; box-shadow: none; box-sizing: border-box; -moz-box-sizing: border-box; -webkit-box-sizing: border-box; cursor: pointer;"
                         data-x="center"
                         data-y="bottom"
                         data-voffset="50"
                         data-width="['auto']"
                         data-height="['auto']"
                         data-type="button"
                         data-actions='[
                     {"event":"click","action":"startlayer","layer":"slide-148-layer-3"},
                     {"event":"click","action":"startlayer","layer":"slide-148-layer-5","delay":"200"},
                     {"event":"click","action":"stoplayer","layer":"slide-148-layer-1"}
                   ]'
                         data-responsive_offset="on"
                         data-responsive="off"
                         data-frames='[
                     {"from":"opacity:0;","speed":300,"to":"o:1;","delay":0,"ease":"Power3.easeInOut"},
                     {"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"},
                     {"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255,255,255,1);bg:rgba(41,46,49,1);bw:1px 1px 1px 1px;"}
                   ]'
                         data-textAlign="['left','left','left','left']"
                         data-paddingtop="[15,15,15,15]"
                         data-paddingright="[70,70,70,70]"
                         data-paddingbottom="[15,15,15,15]"
                         data-paddingleft="[50,50,50,50]"
                         data-lasttriggerstate="reset">
                        <i class="pe-7s-note2" style="font-size: 21px; float: left; margin-top: -6px; margin-right: 10px;"></i>
                        View recipe
                    </div>

                    <!-- LAYER NR. 12 -->
                    <div id="slide-148-layer-5" class="tp-caption FoodCarousel-CloseButton rev-btn tp-resizeme" style="z-index: 16; border-color: transparent; outline: none; box-shadow: none; box-sizing: border-box; -moz-box-sizing: border-box; -webkit-box-sizing: border-box; cursor: pointer;"
                         data-x="441"
                         data-y="110"
                         data-width="['auto']"
                         data-height="['auto']"
                         data-type="button"
                         data-actions='[
                     {"event":"click","action":"stoplayer","layer":"slide-148-layer-3"},
                     {"event":"click","action":"stoplayer","layer":"slide-148-layer-5"},
                     {"event":"click","action":"startlayer","layer":"slide-148-layer-1"}
                   ]'
                         data-responsive_offset="on"
                         data-frames='[
                     {"from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","speed":800,"to":"o:1;","delay":"bytrigger","ease":"Power3.easeInOut"},
                     {"delay":"bytrigger","speed":500,"to":"auto:auto;","ease":"nothing"},
                     {"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255,255,255,1);bg:rgba(41,46,49,1);bw:1px 1px 1px 1px;"}
                   ]'
                         data-textAlign="['left','left','left','left']"
                         data-paddingtop="[14,14,14,14]"
                         data-paddingright="[14,14,14,14]"
                         data-paddingbottom="[14,14,14,14]"
                         data-paddingleft="[16,16,16,16]"
                         data-lasttriggerstate="reset">
                        <i class="fa fa-remove"></i>
                    </div>
                </li>
                <li data-index="rs-149"
                    data-transition="fade"
                    data-slotamount="7"
                    data-hideafterloop="0"
                    data-hideslideonmobile="off"
                    data-easein="default"
                    data-easeout="default"
                    data-masterspeed="300"
                    data-thumb="/assets/img_galeryfood5-150x100.jpg"
                    data-rotate="0"
                    data-saveperformance="off"
                    data-title="Colorful Salad">
                    <img class="rev-slidebg" src="/assets/img_galery/food5.jpg" alt="Image description"
                         data-bgposition="center center"
                         data-bgfit="contain"
                         data-bgrepeat="no-repeat">

                    <!-- LAYER NR. 13 -->
                    <div id="slide-149-layer-3" class="tp-caption FoodCarousel-Content tp-resizeme" style="z-index: 17; min-width: 420px; max-width: 420px; min-height: 420px; max-height: 420px; white-space: normal;"
                         data-x="center"
                         data-y="center"
                         data-width="['420']"
                         data-height="['420']"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[
                     {"from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","speed":800,"to":"o:1;","delay":"bytrigger","ease":"Power3.easeInOut"},
                     {"delay":"bytrigger","speed":500,"to":"auto:auto;","ease":"nothing"}
                   ]'
                         data-textAlign="['left','left','left','left']"
                         data-paddingtop="[30,30,30,30]"
                         data-paddingright="[30,30,30,30]"
                         data-paddingbottom="[30,30,30,30]"
                         data-paddingleft="[30,30,30,30]"
                         data-lasttriggerstate="reset">
                        <span class="foodcarousel-headline">Colorful Salad</span>
                        <br>
                        250g Mixed Salad
                        <br>
                        50g Nuts
                        <br>
                        100g Beetroot
                        <br>
                        Your Favorite Dressing
                        <hr class="revslider-hr" style="border-top: 1px solid #292e31;">
                        Chop everything up into small bits and put into a bowl. That was easy huh?
                        <br>
                        Enjoy this special dish brought to you by
                        <a href="#">Slider Revolution</a>
                        .
                    </div>

                    <!-- LAYER NR. 14 -->
                    <div id="slide-149-layer-1" class="tp-caption FoodCarousel-Button rev-btn" style="z-index: 18; white-space: nowrap; text-transform: uppercase; outline: none; box-shadow: none; box-sizing: border-box; -moz-box-sizing: border-box; -webkit-box-sizing: border-box; cursor: pointer;"
                         data-x="center"
                         data-y="bottom"
                         data-voffset="50"
                         data-width="['auto']"
                         data-height="['auto']"
                         data-type="button"
                         data-actions='[
                     {"event":"click","action":"startlayer","layer":"slide-149-layer-3"},
                     {"event":"click","action":"startlayer","layer":"slide-149-layer-5","delay":"200"},
                     {"event":"click","action":"stoplayer","layer":"slide-149-layer-1"}
                   ]'
                         data-responsive_offset="on"
                         data-responsive="off"
                         data-frames='[
                     {"from":"opacity:0;","speed":300,"to":"o:1;","delay":0,"ease":"Power3.easeInOut"},
                     {"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"},
                     {"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255,255,255,1);bg:rgba(41,46,49,1);bw:1px 1px 1px 1px;"}
                   ]'
                         data-textAlign="['left','left','left','left']"
                         data-paddingtop="[15,15,15,15]"
                         data-paddingright="[70,70,70,70]"
                         data-paddingbottom="[15,15,15,15]"
                         data-paddingleft="[50,50,50,50]"
                         data-lasttriggerstate="reset">
                        <i class="pe-7s-note2" style="font-size: 21px; float: left; margin-top: -6px; margin-right: 10px;"></i>
                        View recipe
                    </div>

                    <!-- LAYER NR. 15 -->
                    <div id="slide-149-layer-5" class="tp-caption FoodCarousel-CloseButton rev-btn tp-resizeme" style="z-index: 19; border-color: transparent; outline: none; box-shadow: none; box-sizing: border-box; -moz-box-sizing: border-box; -webkit-box-sizing: border-box; cursor: pointer;"
                         data-x="441"
                         data-y="110"
                         data-width="['auto']"
                         data-height="['auto']"
                         data-type="button"
                         data-actions='[
                     {"event":"click","action":"stoplayer","layer":"slide-149-layer-3"},
                     {"event":"click","action":"stoplayer","layer":"slide-149-layer-5"},
                     {"event":"click","action":"startlayer","layer":"slide-149-layer-1"}
                   ]'
                         data-responsive_offset="on"
                         data-frames='[
                     {"from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","speed":800,"to":"o:1;","delay":"bytrigger","ease":"Power3.easeInOut"},
                     {"delay":"bytrigger","speed":500,"to":"auto:auto;","ease":"nothing"},
                     {"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255,255,255,1);bg:rgba(41,46,49,1);bw:1px 1px 1px 1px;"}
                   ]'
                         data-textAlign="['left','left','left','left']"
                         data-paddingtop="[14,14,14,14]"
                         data-paddingright="[14,14,14,14]"
                         data-paddingbottom="[14,14,14,14]"
                         data-paddingleft="[16,16,16,16]"
                         data-lasttriggerstate="reset">
                        <i class="fa fa-remove"></i>
                    </div>
                </li>
                <li data-index="rs-150"
                    data-transition="fade"
                    data-slotamount="7"
                    data-hideafterloop="0"
                    data-hideslideonmobile="off"
                    data-easein="default"
                    data-easeout="default"
                    data-masterspeed="300"
                    data-thumb="/assets/img_galeryfood4-150x100.jpg"
                    data-rotate="0"
                    data-saveperformance="off"
                    data-title="Its Just Cornflakes">
                    <img class="rev-slidebg" src="/assets/img_galery/food4.jpg" alt="Image description"
                         data-bgposition="center center"
                         data-bgfit="contain"
                         data-bgrepeat="no-repeat">

                    <!-- LAYER NR. 16 -->
                    <div id="slide-150-layer-3" class="tp-caption FoodCarousel-Content tp-resizeme" style="z-index: 20; min-width: 420px; max-width: 420px; min-height: 420px; max-height: 420px; white-space: normal;"
                         data-x="center"
                         data-y="center"
                         data-width="['420']"
                         data-height="['420']"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[
                     {"from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","speed":800,"to":"o:1;","delay":"bytrigger","ease":"Power3.easeInOut"},
                     {"delay":"bytrigger","speed":500,"to":"auto:auto;","ease":"nothing"}
                   ]'
                         data-textAlign="['left','left','left','left']"
                         data-paddingtop="[30,30,30,30]"
                         data-paddingright="[30,30,30,30]"
                         data-paddingbottom="[30,30,30,30]"
                         data-paddingleft="[30,30,30,30]"
                         data-lasttriggerstate="reset">
                        <span class="foodcarousel-headline">It's Just Cornflakes</span>
                        <br>
                        150ml Milk
                        <br>
                        50g Cornflakes
                        <br>
                        That's it!
                        <hr class="revslider-hr" style="border-top: 1px solid #292e31;">
                        Chop everything up into small bits and put into a bowl. That was easy huh?
                        <br>
                        Enjoy this special dish brought to you by
                        <a href="#">Slider Revolution</a>
                        .
                    </div>

                    <!-- LAYER NR. 17 -->
                    <div id="slide-150-layer-1" class="tp-caption FoodCarousel-Button rev-btn" style="z-index: 21; white-space: nowrap; text-transform: uppercase; outline: none; box-shadow: none; box-sizing: border-box; -moz-box-sizing: border-box; -webkit-box-sizing: border-box; cursor: pointer;"
                         data-x="center"
                         data-y="bottom"
                         data-voffset="50"
                         data-width="['auto']"
                         data-height="['auto']"
                         data-type="button"
                         data-actions='[
                     {"event":"click","action":"startlayer","layer":"slide-150-layer-3"},
                     {"event":"click","action":"startlayer","layer":"slide-150-layer-5","delay":"200"},
                     {"event":"click","action":"stoplayer","layer":"slide-150-layer-1"}
                   ]'
                         data-responsive_offset="on"
                         data-responsive="off"
                         data-frames='[
                     {"from":"opacity:0;","speed":300,"to":"o:1;","delay":0,"ease":"Power3.easeInOut"},
                     {"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"},
                     {"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255,255,255,1);bg:rgba(41,46,49,1);bw:1px 1px 1px 1px;"}
                   ]'
                         data-textAlign="['left','left','left','left']"
                         data-paddingtop="[15,15,15,15]"
                         data-paddingright="[70,70,70,70]"
                         data-paddingbottom="[15,15,15,15]"
                         data-paddingleft="[50,50,50,50]"
                         data-lasttriggerstate="reset">
                        <i class="pe-7s-note2" style="font-size: 21px; float: left; margin-top: -6px; margin-right: 10px;"></i>
                        View recipe
                    </div>

                    <!-- LAYER NR. 18 -->
                    <div id="slide-150-layer-5" class="tp-caption FoodCarousel-CloseButton rev-btn tp-resizeme" style="z-index: 22; border-color: transparent; outline: none; box-shadow: none; box-sizing: border-box; -moz-box-sizing: border-box; -webkit-box-sizing: border-box; cursor: pointer;"
                         data-x="441"
                         data-y="110"
                         data-width="['auto']"
                         data-height="['auto']"
                         data-type="button"
                         data-actions='[
                     {"event":"click","action":"stoplayer","layer":"slide-150-layer-3"},
                     {"event":"click","action":"stoplayer","layer":"slide-150-layer-5"},
                     {"event":"click","action":"startlayer","layer":"slide-150-layer-1"}
                   ]'
                         data-responsive_offset="on"
                         data-frames='[
                     {"from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","speed":800,"to":"o:1;","delay":"bytrigger","ease":"Power3.easeInOut"},
                     {"delay":"bytrigger","speed":500,"to":"auto:auto;","ease":"nothing"},
                     {"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255,255,255,1);bg:rgba(41,46,49,1);bw:1px 1px 1px 1px;"}
                   ]'
                         data-textAlign="['left','left','left','left']"
                         data-paddingtop="[14,14,14,14]"
                         data-paddingright="[14,14,14,14]"
                         data-paddingbottom="[14,14,14,14]"
                         data-paddingleft="[16,16,16,16]"
                         data-lasttriggerstate="reset">
                        <i class="fa fa-remove"></i>
                    </div>
                </li>
                <li data-index="rs-151"
                    data-transition="fade"
                    data-slotamount="7"
                    data-hideafterloop="0"
                    data-hideslideonmobile="off"
                    data-easein="default"
                    data-easeout="default"
                    data-masterspeed="300"
                    data-thumb="/assets/img_galery/muesli-150x100.jpg"
                    data-rotate="0"
                    data-saveperformance="off"
                    data-title="Tasty Muesli">
                    <img class="rev-slidebg" src="/assets/img_galery/muesli.jpg" alt="Image description"
                         data-bgposition="center center"
                         data-bgfit="contain"
                         data-bgrepeat="no-repeat">

                    <!-- LAYER NR. 19 -->
                    <div id="slide-151-layer-3" class="tp-caption FoodCarousel-Content tp-resizeme" style="z-index: 23; min-width: 420px; max-width: 420px; min-height: 420px; max-height: 420px; white-space: normal;"
                         data-x="center"
                         data-y="center"
                         data-width="['420']"
                         data-height="['420']"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[
                     {"from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","speed":800,"to":"o:1;","delay":"bytrigger","ease":"Power3.easeInOut"},
                     {"delay":"bytrigger","speed":500,"to":"auto:auto;","ease":"nothing"}
                   ]'
                         data-textAlign="['left','left','left','left']"
                         data-paddingtop="[30,30,30,30]"
                         data-paddingright="[30,30,30,30]"
                         data-paddingbottom="[30,30,30,30]"
                         data-paddingleft="[30,30,30,30]"
                         data-lasttriggerstate="reset">
                        <span class="foodcarousel-headline">Tasty Muesli</span>
                        <br>
                        150ml Milk
                        <br>
                        50g Granola
                        <br>
                        50g Blueberries
                        <hr class="revslider-hr" style="border-top: 1px solid #292e31;">
                        Chop everything up into small bits and put into a bowl. That was easy huh?
                        <br>
                        Enjoy this special dish brought to you by
                        <a href="#">Slider Revolution</a>
                        .
                    </div>

                    <!-- LAYER NR. 20 -->
                    <div id="slide-151-layer-1" class="tp-caption FoodCarousel-Button rev-btn" style="z-index: 24; white-space: nowrap; text-transform: uppercase; outline: none; box-shadow: none; box-sizing: border-box; -moz-box-sizing: border-box; -webkit-box-sizing: border-box; cursor: pointer;"
                         data-x="center"
                         data-y="bottom"
                         data-voffset="50"
                         data-width="['auto']"
                         data-height="['auto']"
                         data-type="button"
                         data-actions='[
                     {"event":"click","action":"startlayer","layer":"slide-151-layer-3"},
                     {"event":"click","action":"startlayer","layer":"slide-151-layer-5","delay":"200"},
                     {"event":"click","action":"stoplayer","layer":"slide-151-layer-1"}
                   ]'
                         data-responsive_offset="on"
                         data-responsive="off"
                         data-frames='[
                     {"from":"opacity:0;","speed":300,"to":"o:1;","delay":0,"ease":"Power3.easeInOut"},
                     {"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"},
                     {"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255,255,255,1);bg:rgba(41,46,49,1);bw:1px 1px 1px 1px;"}
                   ]'
                         data-textAlign="['left','left','left','left']"
                         data-paddingtop="[15,15,15,15]"
                         data-paddingright="[70,70,70,70]"
                         data-paddingbottom="[15,15,15,15]"
                         data-paddingleft="[50,50,50,50]"
                         data-lasttriggerstate="reset">
                        <i class="pe-7s-note2" style="font-size: 21px; float: left; margin-top: -6px; margin-right: 10px;"></i>
                        View recipe
                    </div>

                    <!-- LAYER NR. 21 -->
                    <div id="slide-151-layer-5" class="tp-caption FoodCarousel-CloseButton rev-btn tp-resizeme" style="z-index: 25; border-color: transparent; outline: none; box-shadow: none; box-sizing: border-box; -moz-box-sizing: border-box; -webkit-box-sizing: border-box; cursor: pointer;"
                         data-x="441"
                         data-y="110"
                         data-width="['auto']"
                         data-height="['auto']"
                         data-type="button"
                         data-actions='[
                     {"event":"click","action":"stoplayer","layer":"slide-151-layer-3"},
                     {"event":"click","action":"stoplayer","layer":"slide-151-layer-5"},
                     {"event":"click","action":"startlayer","layer":"slide-151-layer-1"}
                   ]'
                         data-responsive_offset="on"
                         data-frames='[
                     {"from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","speed":800,"to":"o:1;","delay":"bytrigger","ease":"Power3.easeInOut"},
                     {"delay":"bytrigger","speed":500,"to":"auto:auto;","ease":"nothing"},
                     {"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255,255,255,1);bg:rgba(41,46,49,1);bw:1px 1px 1px 1px;"}
                   ]'
                         data-textAlign="['left','left','left','left']"
                         data-paddingtop="[14,14,14,14]"
                         data-paddingright="[14,14,14,14]"
                         data-paddingbottom="[14,14,14,14]"
                         data-paddingleft="[16,16,16,16]"
                         data-lasttriggerstate="reset">
                        <i class="fa fa-remove"></i>
                    </div>
                </li>
            </ul>

            <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
        </div>
    </div>



    <!-- JS Global Compulsory -->
    <script src="../../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../../assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>
    <script src="../../assets/vendor/jquery.easing/js/jquery.easing.min.js"></script>
    <script src="../../assets/vendor/popper.min.js"></script>
    <script src="../../assets/vendor/bootstrap/bootstrap.min.js"></script>

    <!-- JS Implementing Plugins -->
    <script src="../../assets/vendor/masonry/dist/masonry.pkgd.min.js"></script>
    <script src="../../assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="../../assets/vendor/slick-carousel/slick/slick.js"></script>
    <script src="../../assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>

    <!-- JS Unify -->
    <script src="../../assets/js/hs.core.js"></script>
    <script src="../../assets/js/components/hs.header.js"></script>
    <script src="../../assets/js/helpers/hs.hamburgers.js"></script>
    <script src="../../assets/js/components/hs.scroll-nav.js"></script>
    <script src="../../assets/js/components/hs.carousel.js"></script>

    <!-- JS Revolution Slider -->
    <script src="../../assets/vendor/revolution-slider/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="../../assets/vendor/revolution-slider/revolution/js/jquery.themepunch.revolution.min.js"></script>

    <script src="../../assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="../../assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script src="../../assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="../../assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="../../assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="../../assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="../../assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="../../assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="../../assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.video.min.js"></script>

    <!-- JS Custom -->
    <script src="../../assets/js/custom.js"></script>

    <!-- JS Plugins Init. -->
    <script>
        $(document).on('ready', function () {
            // initialization of carousel
            $.HSCore.components.HSCarousel.init('.js-carousel');

            $('#we-provide').slick('setOption', 'responsive', [{
                breakpoint: 992,
                settings: {
                    slidesToShow: 2
                }
            }, {
                breakpoint: 576,
                settings: {
                    slidesToShow: 1
                }
            }], true);

            // initialization of masonry
            $('.masonry-grid').imagesLoaded().then(function () {
                $('.masonry-grid').masonry({
                    columnWidth: '.masonry-grid-sizer',
                    itemSelector: '.masonry-grid-item',
                    percentPosition: true
                });
            });

            // Header
            $.HSCore.components.HSHeader.init($('#js-header'));
            $.HSCore.helpers.HSHamburgers.init('.hamburger');

            // Initialization of HSMegaMenu plugin
            $('.js-mega-menu').HSMegaMenu({
                event: 'hover',
                pageContainer: $('.container'),
                breakpoint: 991
            });
        });

        var tpj = jQuery;

        var revapi41;
        tpj(document).ready(function () {
            if (tpj('#rev_slider_41_1').revolution == undefined) {
                revslider_showDoubleJqueryError('#rev_slider_41_1');
            } else {
                revapi41 = tpj('#rev_slider_41_1').show().revolution({
                    sliderType: 'carousel',
                    jsFileLocation: 'revolution/js/',
                    sliderLayout: 'fullwidth',
                    dottedOverlay: 'none',
                    delay: 9000,
                    navigation: {
                        keyboardNavigation: 'off',
                        keyboard_direction: 'horizontal',
                        mouseScrollNavigation: 'off',
                        mouseScrollReverse: 'default',
                        onHoverStop: 'off',
                        arrows: {
                            style: 'metis',
                            enable: true,
                            hide_onmobile: true,
                            hide_under: 768,
                            hide_onleave: false,
                            tmp: '',
                            left: {
                                h_align: 'left',
                                v_align: 'center',
                                h_offset: 0,
                                v_offset: 0
                            },
                            right: {
                                h_align: 'right',
                                v_align: 'center',
                                h_offset: 0,
                                v_offset: 0
                            }
                        },
                        thumbnails: {
                            style: 'erinyen',
                            enable: true,
                            width: 150,
                            height: 100,
                            min_width: 150,
                            wrapper_padding: 20,
                            wrapper_color: 'rgba(0,0,0,0.05)',
                            tmp: '<span class="tp-thumb-over"></span>' +
                            '<span class="tp-thumb-image"></span>' +
                            '<span class="tp-thumb-title">{{$currentMenu->title}}</span>' +
                            '<span class="tp-thumb-more"></span>',
                            visibleAmount: 9,
                            hide_onmobile: false,
                            hide_onleave: false,
                            direction: 'horizontal',
                            span: true,
                            position: 'outer-bottom',
                            space: 10,
                            h_align: 'center',
                            v_align: 'bottom',
                            h_offset: 0,
                            v_offset: 0
                        }
                    },
                    carousel: {
                        maxRotation: 65,
                        vary_rotation: 'on',
                        minScale: 55,
                        vary_scale: 'off',
                        horizontal_align: 'center',
                        vertical_align: 'center',
                        fadeout: 'on',
                        vary_fade: 'on',
                        maxVisibleItems: 5,
                        infinity: 'on',
                        space: -150,
                        stretch: 'off',
                        showLayersAllTime: 'off',
                        easing: 'Power3.easeInOut',
                        speed: '800'
                    },
                    visibilityLevels: [1240, 1024, 778, 480],
                    gridwidth: 600,
                    gridheight: 600,
                    lazyType: 'none',
                    shadow: 0,
                    spinner: 'off',
                    stopLoop: 'on',
                    stopAfterLoops: 0,
                    stopAtSlide: 1,
                    shuffle: 'off',
                    autoHeight: 'off',
                    disableProgressBar: 'on',
                    hideThumbsOnMobile: 'off',
                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    debugMode: false,
                    fallbacks: {
                        simplifyAll: 'off',
                        nextSlideOnWindowFocus: 'off',
                        disableFocusListener: false
                    }
                });
            }
        });
    </script>
@endsection