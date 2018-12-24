<?php
    function makepwd($ucid, $countrycode) {
        $pwd = $ucid . " " .  chr(ord($countrycode[0])+3) . chr(ord($countrycode[1])-3) . (date('m') + date('d')) . ' ' . (date('H')*2);
        return $pwd;
    }
?>
