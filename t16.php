<!-- Switch Case -->
<?php

$weekday = 1;

switch ($weekday)
 {
    case 1:
        echo 'Monday';
        break;

        case 2:
            echo 'Tuesday';
            break;

            case 3:
                echo 'Wednesday';
                break;

                case 4:
                    echo 'Thursday';
                    break;

                    case 5:
                        echo 'Friday';
                        break;

                        case 6:
                            echo 'Saturday';
                            break;

                            case 7:
                                echo 'Sunday';
                                break;
    
    default:
    echo 'You enter wrong number for weekday';
    break;
}
?>