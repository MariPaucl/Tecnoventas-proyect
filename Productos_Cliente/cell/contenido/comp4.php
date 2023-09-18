<div style="width:50%; float:right">
           <?php
            $com = $_POST ['consolas2'];
            if ($com == "XBOX")
            echo  include("consolas/XBOX.php");
            elseif ($com == "XBOX 360")
            echo include("consolas/XBOX360.php");
            elseif ($com == "XBOX ONE")
            echo include("consolas/XBOXONE.php");
            elseif ($com == "XBOX SERIES S")
            echo include("consolas/XBOXSERIES.php");
            elseif ($com == "PLAYSTATION 3")
            echo include("consolas/playstation3.php");
            elseif ($com == "PLAYSTATION 4")
            echo include("consolas/playstation4.php");
            elseif ($com == "PLAYSTATION 5")
            echo include("consolas/playstation5.php");
            ?>
            </div>