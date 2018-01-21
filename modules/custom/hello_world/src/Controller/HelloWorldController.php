<?php
/**
 * Created by PhpStorm.
 * User: Дмитрий
 * Date: 20.01.2018
 * Time: 17:35
 */

namespace Drupal\hello_world\Controller;


use Drupal\Core\Controller\ControllerBase;
use Drupal\hello_world\HelloWorldSalutation;
use Symfony\Component\DependencyInjection\ContainerInterface;

class HelloWorldController extends ControllerBase {

  /**
   * @var \Drupal\hello_world\HelloWorldSalutation
   */
  protected $salutation;

  /**
   * HelloWorldController constructor.
   *
   * @param \Drupal\hello_world\HelloWorldSalutation $salutation
   */
  public function __construct(HelloWorldSalutation $salutation) {
    $this->salutation = $salutation;
  }

  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('hello_world.salutation')
    );
  }

  function HelloWorld() {
    return [
      '#markup' => $this->salutation->getSalutation(),
    ];
  }
}
