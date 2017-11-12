$(document).ready(function(){
        $("#show1").hide();
        $("#show2").hide();

        $("#show3").hide();
        $("#show4").hide();
        $("#show5").hide();
        $("#show6").hide();
});

$(document).ready(function(){
    $("#modal__trigger").click(function(){
        $("#per1").hide();
    });
       $("#modal__trigger1").click(function(){
       location.reload();
    });
    
});
$(document).ready(function(){
    $("#learn1").click(function(){
        $("#show1").show();
        $("#show2").hide();
        $("#show3").hide();
        $("#show4").hide();
        $("#show5").hide();
        $("#show6").hide();
    });
       $("#learn2").click(function(){
           $("#show1").hide();
        $("#show2").show();
        $("#show3").hide();
        $("#show4").hide();
        $("#show5").hide();
        $("#show6").hide();
    });
    
       $("#learn3").click(function(){
           $("#show1").hide();
        $("#show2").hide();
        $("#show3").show();
        $("#show4").hide();
        $("#show5").hide();
        $("#show6").hide();
    });
    
       $("#learn4").click(function(){
           $("#show1").hide();
        $("#show2").hide();
        $("#show3").hide();
        $("#show4").show();
        $("#show5").hide();
        $("#show6").hide();
    });
    
       $("#learn5").click(function(){
           $("#show1").hide();
        $("#show2").hide();
        $("#show3").hide();
        $("#show4").hide();
        $("#show5").show();
        $("#show6").hide();
    });
    
       $("#learn6").click(function(){
           $("#show1").hide();
        $("#show2").hide();
        $("#show3").hide();
        $("#show4").hide();
        $("#show5").hide();
        $("#show6").show();
    });
    
});
