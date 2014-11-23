$(".invoice").click(function(e){
   e.preventDefault(); 
   
   var id = $(this).attr("inv-id");
   
   $("#m" + id).show();
   console.log(id);
});