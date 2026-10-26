 <!-- REQUIRED SCRIPTS FOR BOOTSTRAP 4 & JQUERY -->
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
 <script src="https://assets.codepen.io/16327/SplitText3-beta.min.js?b=43"></script>
 <!-- Hover + Click Fallback Script for Desktop & Mobile -->
 <script>
$(document).ready(function() {
    var $dropdown = $(".mega-dropdown");
    var $menu = $dropdown.find(".mega-menu");
    var hideTimer;
    var HIDE_DELAY = 250; // ms grace period — tune if needed

    function openMenu() {
        clearTimeout(hideTimer);
        if ($(window).width() >= 992) {
            $dropdown.addClass("show");
        }
    }

    function closeMenu() {
        hideTimer = setTimeout(function() {
            $dropdown.removeClass("show");
        }, HIDE_DELAY);
    }

    $dropdown.on("mouseenter", openMenu).on("mouseleave", closeMenu);
    $menu.on("mouseenter", openMenu).on("mouseleave", closeMenu);

    $dropdown.find("> a.dropdown-toggle").on("click", function(e) {
        if ($(window).width() >= 992) {
            e.preventDefault();
        }
    });
});
 </script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
 <script src="public/js/script.js"></script>