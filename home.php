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
                    }
                
                ?>
            </div>
        </div>



    </section>
</body>