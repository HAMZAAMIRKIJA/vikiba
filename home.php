

<!-- <html lang="en" data-bs-theme="dark"> -->
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

</body>
</html> -->



</body>
</html>
<body>
    <section>
        <?php
        include("./navbar.php");
        ?>
    </section>
    <link rel="stylesheet" href="mystyle.css">
    <section>
        <div style="display:flex">
            <div style="width: 15%;">
                <?php
                include("./side_bar.php")
                ?>
            </div>
            <div style="width: 85%;">
                <?php
                $page = $_GET['page'];
                if ($page == "in.php" || $page == "con.php")
                    echo "file does not exit";
                else {
                    if ($page == "user") {
                        include("user.php");
                       
                        
                    }
                        if ($page == "mikopo") {
                            include("mikopo.php");
                        }
                        if ($page == "hisa") {
                            include("hisa.php");
                        }
                        if ($page == "marejesho") {
                            include("marejesho.php");
                        }

                    }
                
                ?>
            </div>
        </div>



    </section>
</body>