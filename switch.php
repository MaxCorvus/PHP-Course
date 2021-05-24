<?php
$num = 4;
switch ($num) {
    case 1:
        echo "Winter";
        break;
        case 2:
            echo "Spring";
            break;
            case 3:
                echo "Summer";
                break;
                case 4:
                    echo "Autumn";
                    break;
}
echo "<br>";
$beer = "Baltika";
switch ($beer) {
    case "Hoegaarden":
    case  "Guiness":
        echo "Good choice!";
        break;
        case "Baltika": 
            case "Pennoe":
            echo "Don't do that";
            break;
}