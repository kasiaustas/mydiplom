(function($) {
    $.fn.tiltEffect = function() {
        this.mousemove(function(e) {
            // Cursor position inside the element.
            var x = e.pageX - this.offsetLeft;
            var y = e.pageY - this.offsetTop;

            var width = $(this).width();
            var height = $(this).height();
            var quarterWidth = width / 4;
            var quarterHeight = height / 4;

            if (y < quarterHeight && x > 0 && x < width) {
                setEffect(this, "top");
            } else if (y > quarterHeight*3 && x > 0 && x < width) {
                setEffect(this, "bottom");
            } else if (x > quarterWidth*3 && y > 0 && y < height) {
                setEffect(this, "right");
            } else if (x < quarterWidth && y > 0 && y < height) {
                setEffect(this, "left");
            } else {
                setEffect(this, "center");
            }
        });

        function setEffect(targetElement, effectDirection) {
            var directions = new Array("center", "top", "right", "bottom", "left");

            // Disable all the effect except the right one.
            for (i in directions) {
                if (!(directions[i] == effectDirection)) {
                    $(targetElement).removeClass(directions[i]);
                }
            }

            $(targetElement).addClass(effectDirection);
        }
    }
}(jQuery));/**
 * Created by Kasia on 08.10.2017.
 */
