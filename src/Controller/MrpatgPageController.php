<?php

namespace Drupal\mrpatg_page\Controller;

use Drupal\Core\Controller\ControllerBase;

class MrpatgPageController extends ControllerBase {

    public function mrpatgPage1() {
        $element = array(
            '#markup' => 'Hello, world',
        );
        return $element;
    }
}