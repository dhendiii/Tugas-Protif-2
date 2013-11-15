<?php

require_once '../../restler/restler.php';


$r = new Restler();
$r->setSupportedFormats('JsonFormat', 'XmlFormat');
$r->addAPIClass('protif');
$r->handle();

