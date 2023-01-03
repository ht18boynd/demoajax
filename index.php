<html xmlns="http://www.w3.org/1999/xhtml">
    <head><title></title></head>
    <body>
        <div style="max-width:50%">
        <h2>PhP live Search</h2><input type="text" name="livesearch" id="livesearch" placeholder="Search..." />
        
        </div>
        <div id="searchresult">


        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $("#livesearch ").keyup(function () {
                    // tao bien dau` vao de search
                    var input = $(this).val();
                    //alert (input); test de kiem tra dau vao da duoc dua len server chua
                    if (input != "") {
                        $.ajax({
                            url: "livesearch.php",
                            method: "POST",
                            data: { input: input },
                            success: function (data) {
                                $("#searchresult").html(data);
                                  $("#searchresult").css("display", "block");
                            }
                        })
                    } else {
                        $("#searchresult").css("display", "none");
                    }
                })


            })


        </script>

    
       
        
       
    </body>
</html>