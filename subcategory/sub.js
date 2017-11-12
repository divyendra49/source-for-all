


$(document).ready(function () {
    toggleFields(); 
    $("#category1 , #category2").change(function () {
        toggleFields();
    });
   });

function toggleFields() {
    
    if ($("#category1").val() == 1)
        {
            $("#Permission1").show();
             $("#Permission5").hide();
            if ($("#category2").val() == 1)
            {
            $("#Permission6").hide();
            
            $("#Permission3").hide();
            $("#Permission2").show();
            $("#Permission4").show();
            }
            else if ($("#category2").val() == 2)
            {
              $("#Permission6").hide();
            
            $("#Permission2").hide();
            $("#Permission3").show();
            $("#Permission4").show();
            }
            else if ($("#category2").val() == 3)
            {
              
            $("#Permission2").hide();
            $("#Permission3").hide();
            $("#Permission6").show();
            $("#Permission4").show();
            }

            else 
            {
              $("#Permission6").hide();
            $("#Permission2").hide();
            $("#Permission3").hide();
            $("#Permission4").hide();
            }
        }
       else if ($("#category1").val() == 2)
       {

       $("#Permission1").hide();

       $("#Permission2").hide();
       $("#Permission3").hide();

       $("#Permission5").show();
       $("#Permission4").show();
       }
       else if ($("#category1").val() == 3)
       {

       $("#Permission2").hide();
       $("#Permission3").hide();
       $("#Permission5").hide();
       $("#Permission4").show();
       }
       else if ($("#category1").val() == 4)
       {
       
       $("#Permission2").hide();
       $("#Permission3").hide();
       $("#Permission5").hide();
       $("#Permission4").show();
       }
    	 else if ($("#category1").val() == 5)
       {
       
       $("#Permission2").hide();
       $("#Permission3").hide();
       $("#Permission5").hide();
       $("#Permission4").show();
       }
        else if ($("#category1").val() == 6)
       {
       $("#Permission2").hide();
       $("#Permission3").hide();
       $("#Permission5").hide();
       $("#Permission4").show();
       }
    
    
    else
      {
      $("#Permission1").hide();
       $("#Permission2").hide();
       $("#Permission3").hide();
       $("#Permission4").hide();
       $("#Permission5").hide();
       $("#Permission6").hide();
       
		}
}
