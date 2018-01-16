<?php

session_start();

echo 'Bonjour '.$_COOKIE['pseudo'].' !<br />Localisation : '.$_COOKIE['pays'];