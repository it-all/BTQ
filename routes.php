<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$slim->get('/', 'It_All\BoutiqueCommerce\Controllers\AdminController:index');

