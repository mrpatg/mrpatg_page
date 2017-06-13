<?php

namespace Drupal\mrpatg_page\Controller;

use Drupal\Core\Controller\ControllerBase;

class MrpatgPageController extends ControllerBase {

    public function mrpatgPage1() {

        $values = [
        'type' => 'page'
        ];
        $nodes = \Drupal::entityTypeManager()->getListBuilder('node')->getStorage()->loadByProperties($values);
        
        $list = array();

        foreach ($nodes AS $node){
            $list[] = $node->get('title')->value;
        }

        $content = [
        '#theme' => 'item_list',
        '#list_type' => 'ul',
        '#title' => 'Page list',
        '#items' => $list,
        '#attributes' => ['class' => 'mrpatg_page1_list'],
        '#wrapper_attributes' => ['class' => 'container'],
        ]; 
        return $content;
    }
}