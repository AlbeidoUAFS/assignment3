<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CSCE 20303 | Add Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar bg-body-tertiary mb-5">
        <div class="container">
            <a class="navbar-brand" href="#">
            <img src="images/logo.png" height="40%" width="40%" alt="UAFS">
            </a>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Delete</h5>
                        <p class="card-text">Do you wish to delete the user with contactID: <?php echo $contactID ?> .</p>
                        <form action="contactDeleteController.php" method="POST">      
                             <input type="hidden" name="contactID" value="<?php echo $contactID; ?>">                           
                            <button type="submit" name = "action" value = "delete" class="btn btn-primary">Delete</button>
                        </form>
                        <br>
                        <form action="contactDeleteController.php" method="POST">    
                                        
                            <button type="submit" name= "action" value = "cancel" class="btn btn-danger">Cancel</button>
                        </form>
                    </div>
                </div>      
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>
