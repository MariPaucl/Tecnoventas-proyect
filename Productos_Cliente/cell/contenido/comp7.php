<div style="width:50%; float:left">
            <?php
            $com = $_POST ['televisor'];
            if ($com == "Televisor Exclusiv 55 El55f2usm Uhd Smart 4k")
            echo  include("televisor/Exclusiv_55.php");
            elseif ($com == "Smart TV Exclusiv EL32F2SM LED HD 32 100V/240V")
            echo include("televisor/exclusiv.php");
            elseif ($com == "Smart TV LG AI ThinQ 32LM637BPSB LED Full HD 32 100V/240V")
            echo include("televisor/LG_Ai.php");
            elseif ($com == "Smart TV LG AI ThinQ OLED48C1PSA 4K 48 100V/240V")
            echo include("televisor/Lg_oled.php");
            elseif ($com == "Smart TV Samsung Series 4 UN32T4300AKXZL LED HD 32 100V/240V")
            echo include("televisor/Samsung_Series4.php");
            elseif ($com == "Smart TV Samsung UN60AU8000GXZD LED 4K 60 100V/240V")
            echo include("televisor/Samsung_Un60.php");
            else 
            echo include("televisor/Smart_TV.php");
            ?>
            </div>