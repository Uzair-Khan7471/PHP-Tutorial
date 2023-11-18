<!-- Else If Statement -->

<?php
$percentage = 98;
if ($percentage >= 80 && $percentage <= 100) {
    echo 'You Are In Merit';
}
elseif ($percentage >= 60 && $percentage < 80)  {
    echo 'You Are In 1st Divison';
}
elseif ($percentage >= 45 && $percentage < 60) {
    echo 'You Are In 2st Divison';
}
elseif ($percentage >= 33 && $percentage < 45) {
    echo 'You Are In 3st Divison';
}
elseif ($percentage < 33) {
    echo 'You are Fail';
}
else {
  echo 'Please Enter Valid Percentage';
}
?>
