<div style="width:50%; float:left">

            <?php
            $com = $_POST ['celular'];
            if ($com == "Motorola G20")
            echo  include("concel/con_G20.html");
            elseif ($com == "Motorola G30")
            echo include("concel/con_G30.htm");
            elseif ($com == "Realme 6")
            echo include("concel/con_realme.html");
            elseif ($com == "Xiaomi Redmi 9T")
            echo include("concel/con_redmi.html");
            elseif ($com == "Samsung Galaxy A32")
            echo include("concel/con_galaxy_A32.html");
            elseif ($com == "Samsung Galaxy S20")
            echo include("concel/con_galaxy_S20.html");
            elseif ($com == "Samsung Galaxy A12")
            echo include("concel/con_samsung.html");
            elseif ($com == "Xiaomi Poco X3")
            echo include("concel/con_Xioami.html");
            else 
            echo include("concel/con_pocophone.html");
            ?>
            </div>