<?php
    //APP ROOT
    require_once "config/config.php";

    //AutoLoad The Core Libraries";
    spl_autoload_register(function ($className) {
        require "libraries/" . $className . ".php";
    });