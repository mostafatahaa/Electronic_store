<?php
if (!defined("DS")) {
    define("DS", DIRECTORY_SEPARATOR);
}

define("APP_PATH", realpath(dirname(__FILE__)));
define("VIEWS_PATH", APP_PATH . DS . "views" . DS);
define("TEMPLATE_PATH", APP_PATH . DS . "template" . DS);

defined("DATABASE_HOST_NAME")       ? null : define("DATABASE_HOST_NAME", "localhost");
defined("DATABASE_USER_NAME")       ? null : define("DATABASE_USER_NAME", "root");
defined("DATABASE_PASSWORD")        ? null : define("DATABASE_PASSWORD", "");
defined("DATABASE_DB_NAME")         ? null : define("DATABASE_DB_NAME", "new_employees");
