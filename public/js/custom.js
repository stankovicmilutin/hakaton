
$(function() {
    $(document).ready(function() {
       if ($('.finansije-strana').length)
           $('.finansije-menu').css('height', 'auto');
       
       if ($('.ispiti-strana').length)
           $('.ispiti-menu').css('height', 'auto');
       
       $(".invoice").click(function(e){
        e.preventDefault(); 

        var id = $(this).attr("inv-id");

        $("#m" + id).show();
        console.log(id);
     });
    });
    
    
})


