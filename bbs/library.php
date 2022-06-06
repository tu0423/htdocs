<?php
/* htmlspecialcharasを短くする*/
function h($value) {
    return htmlspecialchars($value, ENT_QUOTES);
}
?>