/*myscript.js*/
$(document).ready(function(){
    $("#loadbutton").click(function(){
        $.ajax({
            url: "dados.txt",
            success: function(result){
                $("#results").html(result);
            }
        });
    });
})
/*---*/