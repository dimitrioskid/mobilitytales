jQuery(document).ready(function($) {
    // Form autocomplete = off
    $('form').attr('autocomplete', 'off');

    // Adding Bootstrap class to all images
    $("img").addClass("img-fluid");

    // Counter function
    $('.counter').counterUp({
        delay: 50,
        time: 2000
    });

    // // Menu item "exchanges" to not be translated
    // $(".menu-item-19").addClass("notranslate");

    //Displaying button Top
    var scroll_pos = 0;
    $(document).scroll(function() {
        scroll_pos = $(this).scrollTop();
        if (scroll_pos > 550) {
            $("#myBtn").removeClass("d-none");
    
        } else {
            $("#myBtn").addClass("d-none");
        }
    });


    // Display: none/block on specific width - Header Image
    if($(window).width() < 769)
    {
        $(".header-container").addClass("d-none");
    } else {
        $(".headerBG").addClass("d-none");
    }
    
});

//Scroll To The Top Function
function topFunction() {
    document.documentElement.scrollTop = 0;
};


// Header image on hover function
(function() {

    let magic = document.querySelector('.magic');
    let magicWHalf = magic.offsetWidth / 2;
  
    document.body.addEventListener('mousemove',function(e){
      magic.style.left = e.pageX - magicWHalf+'px';
      magic.style.top = e.pageY - magicWHalf+'px';
    });
  
    document.body.addEventListener('mouseout',function(e){
      //magic.style.left = 'calc(50% - 10rem)';
      //magic.style.top = 'calc(50% - 10rem)';
    });
  
  })();


