<!doctype html>
<html>
    <head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script>

    function myCall() {
        var request = $.ajax({
            url: "updatepiadstatus.php",
            type: "POST",            
            dataType: "html"
        });

        request.done(function(msg) {         
        });

        request.fail(function(jqXHR, textStatus) {
            alert( "Request failed: " + textStatus );
        });
    }
</script>
        <meta charset="utf-8" />
        <title>TEST</title>
        <style type="text/css">
            #mybox {
                width: 300px;
                height: 250px;
                border: 1px solid #999;
            }
        </style>
    </head>
    <body>
        <p>หมายเลขทะเบียน</p>
       <form action="getparkingfree.php" method="POST">
            <input type="text" value="" name="" id="car_id">

            <input type="submit" value="Update" name="submit-btn" />
        </form>

    </body>
</html>