<html>
    <?php
        include("header.php");
    ?>

    <body>
        <h1>Welcome to a basic site</h1>
        <?php
            $toggleParagraphs = false;

            if($toggleParagraphs) {
                echo "<p>Currently I'm displaying this paragraph</p>";
            }else {
                echo "<p>Now I'm displaying a different one</p>";
            }

            for ($i=0;$i<10;$i++) {
                if($i % 2 == 0){
                    echo "<div style=\"width:100px;height:100px;border:1px solid #000; display: inline-block; margin: 5px; background-color: white;\"></div>";
                }else {
                    echo "<div style=\"width:100px;height:100px;border:1px solid #000; display: inline-block; margin: 5px; background-color: black;\"></div>";
                }
              }  

        ?>
</body>
</html>