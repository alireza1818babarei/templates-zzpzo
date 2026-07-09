(function () {
    var styleId = 'zz-template-16-sidebar-top-fix';

    if (document.getElementById(styleId)) {
        return;
    }

    var css = [
        '@media (min-width: 992px) {',
        '  .tm-main-row { align-items: stretch; }',
        '  #tmSideBar.sidebar { align-items: flex-start; justify-content: flex-start; min-height: 100vh; height: auto; }',
        '  #tmSideBar .inner { width: 100%; align-self: flex-start; position: sticky; top: 60px; }',
        '}',
        '@media (max-width: 991px) {',
        '  #tmSideBar .inner { position: static; width: 100%; }',
        '}'
    ].join('\n');

    var style = document.createElement('style');
    style.id = styleId;
    style.appendChild(document.createTextNode(css));
    document.head.appendChild(style);
})();

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
