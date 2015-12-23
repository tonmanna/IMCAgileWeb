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

        <!-- Bootstrap core CSS -->
          <link href="./Resource/bootstrap.min.css" rel="stylesheet">
          <link href="./Resource/bootstrap-toggle.min.css" rel="stylesheet">

          <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
          <link href="../Resource/ie10-viewport-bug-workaround.css" rel="stylesheet">

          <!-- Custom styles for this template -->
          <link href="./Resource/starter-template.css" rel="stylesheet">

          <script src="./Resource/ie-emulation-modes-warning.js"></script>
          <style type="text/css"></style>

          <script src="./Resource/jquery.min.js"></script>
          <script src="./Resource/bootstrap-toggle.min.js"></script>
          <script>
            window.jQuery || document.write('<script src="../../Resource/js/vendor/jquery.min.js"><\/script>')
          </script>
          <script src="./Resource/bootstrap.min.js"></script>
          <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
          <script src="./Resource/ie10-viewport-bug-workaround.js"></script>



    </head>
    <body>
        <form class="form-inline" action="getparkingfree.php" method="POST">
          <div class="form-group">
            <label class="sr-only" for="exampleInputAmount">ทะเบียน</label>
            <div class="input-group">
              <div class="input-group-addon">$</div>
              <input type="text" class="form-control" id="car_id" placeholder="หมายเลขทะเบียนรถ">
            </div>
          </div>
          <button type="submit" class="btn btn-primary">คำนวนราคา</button>
        </form>

    </body>
</html>