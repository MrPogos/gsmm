<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
     integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
     <link href="css/style.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" type="text/css" href="cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
 
  <script src="js/jquery-3.5.1.js"></script>

  <script type="text/javascript" src="js/textareadown.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
      $("#producent").change(function(){
        var aid = $("#producent").val();
        $.ajax({
          type: 'post',
          url: 'producent.php',
          data: 'aid=' + aid
        }).done(function(models){
          console.log(models);
          models = JSON.parse(models);
          $('#models').empty();
          models.forEach(function(model){
            $('#models').append('<option>' + model.Nazwa + '</option>')
          })

       $('#models').append( '<option value="other">Inny model<textarea id="innymodel"></textarea></option>')
        })
      })
    })
  </script>

   

   <style type="text/css">
    



    </style>
    </head>
    <body background="jpg/tekstura__texture__tlo__grafika_173_ciemne__czarne__drewno.jpg">
        <?php
          require_once 'nav.php';
        ?>
        <div class="container"></div>
            <div class="col-1"></div>
 

            <div class="pracowniknav col-sm-9 col-md-6 col-lg-8 col-xl-10 bg-secondary text-white" >
              <?php
                      if (isset($_GET['page']))
                      {
                        $allowed_pages = array("pracownicy", "magazyn","serwis","nowyprzedmiot","nowywyswietlacz", "zbitki","pracownik","nowypracownik","przedmiot_z_magazynu");
                          $page = filter_var($_GET['page'], FILTER_SANITIZE_STRING);     
                          
                          
                          if (!empty($page))
                          {
                           
                              if (!in_array($page, $allowed_pages))
                              {
                                echo "Taka strona nie istnieje";
                              }
                              else
                              {
                                  if (is_file($page.".php")){
                                      include($page.".php");
                                  }
                                  else 
                                      echo "Taka stronsssa nie istnieje";
                              }
                          }
                    }
                      else  
                         include("index.php");
              
                      ?>

            </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  <script type="text/javascript" src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript">
  $(document).ready( function () {
    $('#magazyn').DataTable();
} );
</script>




  <script src = "js/fstdropdown.js"> </script>
<link rel = "stylesheet" href = "css/fstdropdown.css">
  <script type="text/javascript"></script>
  
        </body>
</html>