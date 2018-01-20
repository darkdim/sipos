<?php
/**
 * Created by PhpStorm.
 * User: Дмитрий
 * Date: 20.01.2018
 * Time: 17:35
 */

namespace Drupal\hello_world\Controller;


use Drupal\Core\Controller\ControllerBase;

class HelloWorldController extends ControllerBase {

  function HelloWorld() {
    return [
      '#markup' => $this->t('Hell in a world'),
    ];
  }
}