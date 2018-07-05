var ismmh = window.ismmh || {};

ismmh.initLoadAnimation = function () {

    jQuery.fn.extend({
        ismmhAnimateCss: function (animationName, callback) {
            var animationEnd = (function (el) {
                var animations = {
                    animation: 'animationend',
                    OAnimation: 'oAnimationEnd',
                    MozAnimation: 'mozAnimationEnd',
                    WebkitAnimation: 'webkitAnimationEnd',
                };

                for (var t in animations) {
                    if (el.style[t] !== undefined) {
                        return animations[t];
                    }
                }
            })(document.createElement('div'));

            this.addClass('animated ' + animationName).one(animationEnd, function () {
                jQuery(this).removeClass('animated ' + animationName);

                if (typeof callback === 'function') callback();
            });

            return this;
        },
    });

    ismmh.initLoadAnimation.animate = function (links, index) {
        if (index < (links.length - 1)) {
            links[index].ismmhAnimateCss('bounce', function () {
                ismmh.initLoadAnimation.animate(links, index + 1);
            });
        }
    };

    var header = jQuery(".ism-mobile-header.is-animated");

    if (header.length) {

        var links = [];

        header.find("a").each(function () {
            links.push(jQuery(this));
        });

        ismmh.initLoadAnimation.animate(links, 0);
    }
};

jQuery(function () {
    ismmh.initLoadAnimation();
});