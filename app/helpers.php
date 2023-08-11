<?php
function setDisabled($nombreRuta){
    return request()->routeIs($nombreRuta) ? 'disabled' : '';
} ?>
