jQuery(document).ready(function ($) {

    var jssor_options = {
        $AutoPlay: 1,
        $LazyLoading: 2,
        $ArrowNavigatorOptions: {
            $Class: $JssorArrowNavigator$
        }
    };

    var jssor_slider = new $JssorSlider$("jssor", jssor_options);

    /*#region responsive code begin*/

    var MAX_WIDTH = 1920;

    function ScaleSlider() {
        var containerElement = jssor_slider.$Elmt.parentNode;
        var containerWidth = containerElement.clientWidth;

        if (containerWidth) {

            var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

            jssor_slider.$ScaleWidth(expectedWidth);
        }
        else {
            window.setTimeout(ScaleSlider, 30);
        }
    }

    ScaleSlider();

    $(window).bind("load", ScaleSlider);
    $(window).bind("resize", ScaleSlider);
    $(window).bind("orientationchange", ScaleSlider);
    /*#endregion responsive code end*/
});