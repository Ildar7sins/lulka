    function funcBefore() {
      $("#information").text("Waiting...");

    }

    function funcSuccess() {
      $("#information").text("");
      $(".popup_click").show();
      $('#close_window').click(function(){
      $('.popup_click').hide()
    });
    }



    
      $("#done").bind("click", function(){
        $('#myform')[0].reset();
        $.ajax ({
          url: "mail.php",
          type: "GET",
          data: ({name: $("#name").val(), phone: $("#phone").val(),email: $("#email").val()}),
          dataType: "html"
        });
      });





    
