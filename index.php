<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width= device-width,initial-scale=1">
    <meta charset="utf-8">
    <title>รักพันธุ์กร | ICTSILPAKORN 2017</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap-theme.min.css">
    <script src="vendor/twbs/bootstrap/dist/js/jquery.min.js"></script>
    <script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Css -->
    <link rel="stylesheet" href="stylesheets/css/style_seat.css">
    <!-- js script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript">

      $(document).ready(function() {
        $("#ticket_1").css("display", "block");
        $("#btn_ticket_1").click(function() {
          $("#ticket_1").css("display", "block");
          $("#ticket_2").css("display", "none");
          $("#ticket_3").css("display", "none");
          $("#ticket_4").css("display", "none");
        });
        $("#btn_ticket_2").click(function() {
          $("#ticket_1").css("display", "none");
          $("#ticket_2").css("display", "block");
          $("#ticket_3").css("display", "none");
          $("#ticket_4").css("display", "none");
        });
        $("#btn_ticket_3").click(function() {
          $("#ticket_1").css("display", "none");
          $("#ticket_2").css("display", "none");
          $("#ticket_3").css("display", "block");
          $("#ticket_4").css("display", "none");
        });
        $("#btn_ticket_4").click(function() {
          $("#ticket_1").css("display", "none");
          $("#ticket_2").css("display", "none");
          $("#ticket_3").css("display", "none");
          $("#ticket_4").css("display", "block");
        });
      });
    </script>
  </head>
  <body>
    <button id="btn_ticket_1" class="btn btn-primary" type="button" name="button">ticket 1</button>
    <button id="btn_ticket_2" class="btn btn-primary" type="button" name="button">ticket 2</button>
    <button id="btn_ticket_3" class="btn btn-primary" type="button" name="button">ticket 3</button>
    <button id="btn_ticket_4" class="btn btn-primary" type="button" name="button">ticket 4</button>

    <section class="container-fluid">
      <?php include("ticket_1.php"); ?>
      <?php include("ticket_2.php"); ?>
      <?php include("ticket_3.php"); ?>
      <?php include("ticket_4.php"); ?>
    </section> <!-- container-fluid -->

  </body>
</html>
