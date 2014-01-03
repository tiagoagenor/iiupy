<?php

require_once('./vqmod/vqmod.php');
VQMod::bootup();

require_once VQMod::modCheck("config.php");
require_once VQMod::modCheck(DIR_SYSTEM . "bootstrap.php");