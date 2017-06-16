<?php

namespace Drupal\mrpatg_block\Plugin\Block;


class mrpatgBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return array(
      '#markup' => $this->t('Hello, World!'),
    );
  }

}