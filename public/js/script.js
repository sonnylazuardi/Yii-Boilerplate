(function($){
   $(function(){
       $('a[data-popup]').each(function(){
           console.log('AAA');
           var t = $(this);
           t.bind('click', function(e){
               e.preventDefault();
               var url = t.attr('href');
               var w = t.data('width') || 900;
               var h = t.data('height') || 600;
               window.open(url, "Popupfenster", "width="
                   + w + ",height=" + h + ",resizable=yes");
           });
       });
   });
}(jQuery));
