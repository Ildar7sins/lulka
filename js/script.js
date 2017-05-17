function funcBefore() {
      $("#information").text("Waiting...");

    }

    function funcSuccess() {
      $("#information").text("");
     
    }



    
      $("#done").bind("click", function(){
        $.ajax ({
          url: "mail",
          type: "GET",
          data: ({name: $("#name").val(), phone: $("#phone").val(),email: $("#email").val(),text: $("#text").val()}),
          dataType: "html",
          beforeSend: funcBefore,
          success: funcSuccess
        });
        $('#myform')[0].reset();
      });