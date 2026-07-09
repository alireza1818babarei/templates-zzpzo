
(function($){
    $(function(){
        $('body').addClass('loaded');
        $('#tmMainNavToggle').on('click', function(){
            $('#tmSideBar').toggleClass('show');
        });
        $('#tmMainNav a').on('click', function(){
            $('#tmSideBar').removeClass('show');
        });
    });
})(jQuery);
