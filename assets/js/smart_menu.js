   
$(document).ready(function () {
 

    $("#pre_acadmics_tit").click(function(){
        
        $("#pre_acadmics").load('pre_titulo.php', { id_pre_acadmics_tit : $("#pre_acadmics_tit").val() } , function(resp) { });
    });

 });

