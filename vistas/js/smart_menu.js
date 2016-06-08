// menu del pregrado   
$(document).ready(function () {
 

    $("#pre_acadmics_tit").click(function(){
        
        $("#pre_acadmics").load('pre_titulo.php', { id_pre_acadmics_tit : $("#pre_acadmics_tit").val() } , function(resp) { });
    });

 });

// menu del postgrado
   
$(document).ready(function () {
 

    $("#post_acadmics_tit").click(function(){
        
        $("#post_acadmics").load('post_titulo.php', { id_post_acadmics_tit : $("#post_acadmics_tit").val() } , function(resp) { });
    });

 });

