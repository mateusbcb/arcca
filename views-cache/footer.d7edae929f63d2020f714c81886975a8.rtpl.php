<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- Footer copyright-->
<div class="footer_copy">
    <div class="container">
        <div class="column one">
            <a id="back_to_top" href="#" class="button button_left button_js"><span class="button_icon"><i class="icon-up-open-big"></i></span></a>
            <div class="copyright">
                &copy; 2017 BeWebmaster - BeTheme. Muffin group - HTML by <a target="_blank" rel="nofollow" href="http://bit.ly/1M6lijQ">BeantownThemes</a>
            </div>
            <!--Social info area-->
            <ul class="social"></ul>
        </div>
    </div>
</div>
</footer>
</div>

<!-- JS -->
<script src="/res/site/js/jquery-2.1.4.min.js"></script>

<script src="/res/site/js/mfn.menu.js"></script>
<script src="/res/site/js/jquery.plugins.js"></script>
<script src="/res/site/js/jquery.jplayer.min.js"></script>
<script src="/res/site/js/animations/animations.js"></script>
<script src="/res/site/js/scripts.js"></script>

<script src="/res/site/plugins/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script src="/res/site/plugins/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script src="/res/site/plugins/rs-plugin/js/extensions/revolution.extension.video.min.js"></script>
<script src="/res/site/plugins/rs-plugin/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="/res/site/plugins/rs-plugin/js/extensions/revolution.extension.actions.min.js"></script>
<script src="/res/site/plugins/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="/res/site/plugins/rs-plugin/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="/res/site/plugins/rs-plugin/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="/res/site/plugins/rs-plugin/js/extensions/revolution.extension.migration.min.js"></script>
<script src="/res/site/plugins/rs-plugin/js/extensions/revolution.extension.parallax.min.js"></script>

<script>
var tpj = jQuery;
tpj.noConflict();
var revapi1;
tpj(document).ready(function() {
if (tpj("#rev_slider_1_2").revolution == undefined) {
    revslider_showDoubleJqueryError("#rev_slider_1_2");
} else {
    revapi1 = tpj("#rev_slider_1_2").show().revolution({
        sliderType: "standard",
        sliderLayout: "fullwidth",
        dottedOverlay: "none",
        delay: 9000,
        navigation: {
            keyboardNavigation: "off",
            keyboard_direction: "horizontal",
            mouseScrollNavigation: "off",
            onHoverStop: "off",
            touch: {
                touchenabled: "on",
                swipe_threshold: 0.7,
                swipe_min_touches: 1,
                swipe_direction: "horizontal",
                drag_block_vertical: false
            }
        },
        gridwidth: 1180,
        gridheight: 815,
        lazyType: "none",
        shadow: 0,
        spinner: "spinner3",
        stopLoop: "off",
        stopAfterLoops: -1,
        stopAtSlide: -1,
        shuffle: "off",
        autoHeight: "off",
        disableProgressBar: "on",
        hideThumbsOnMobile: "off",
        hideSliderAtLimit: 0,
        hideCaptionAtLimit: 0,
        hideAllCaptionAtLilmit: 0,
        startWithSlide: 0,
        debugMode: false,
        fallbacks: {
            simplifyAll: "off",
            nextSlideOnWindowFocus: "off",
            disableFocusListener: "off",
        }
    });
}
});
</script>

<script>
jQuery(window).load(function() {
var retina = window.devicePixelRatio > 1 ? true : false;
if (retina) {
    var retinaEl = jQuery("#logo img");
    var retinaLogoW = retinaEl.width();
    var retinaLogoH = retinaEl.height();
    retinaEl.attr("src", "/res/site/content/webmaster/images/retina-webmaster.png").width(retinaLogoW).height(retinaLogoH)
}
});
</script>

</body>

</html>