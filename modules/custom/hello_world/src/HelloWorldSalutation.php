<?php
/**
 * Created by PhpStorm.
 * User: Дмитрий
 * Date: 21.01.2018
 * Time: 09:56
 */

namespace Drupal\hello_world;


use Drupal\Core\StringTranslation\StringTranslationTrait;

/**
 * Prepares the salutation to the world.
 */
class HelloWorldSalutation {

  use StringTranslationTrait;

  /**
   * Returns the salutation
   */
  public function getSalutation() {
    $time = new \DateTime();
    $g_time = (int) $time->format('G');
    if ($g_time >= 06 && $g_time < 12) {
      return $this->t('Good morning world');
    }

    if ($g_time >= 12 && $g_time < 18) {
      return $this->t('Good afternoon world');
    }

    if ($g_time >= 18) {
      return $this->t('Good evening world');
    }
  }
}
