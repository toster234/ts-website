<?php

use Wruczek\TSWebsite\Utils\TemplateUtils;
use Wruczek\TSWebsite\Utils\Utils;

require_once __DIR__ . "/../private/php/load.php";

TemplateUtils::i()->renderTemplate("admin", [
    "currentPage" => $page,
]);
