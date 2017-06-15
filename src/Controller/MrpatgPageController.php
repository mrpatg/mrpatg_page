<?php

namespace Drupal\mrpatg_page\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\node\Entity\Node;

class MrpatgPageController extends ControllerBase
{

    public function mrpatgPage1()
    {
 
        $db = \Drupal::database();
        $query = $db->select('node', 'n');
        $query->fields('n');

        $pager = $query->extend('Drupal\Core\Database\Query\PagerSelectExtender')
                        ->limit(3);
        $result = $pager->execute()->fetchAll();

        $rows = array();

        foreach ($result as $row) {
            $title = Node::load($row->nid)->title->value;
        
            $rows[] = array('data' => array(
            'name' => $title,
              ));
        }
 
        $build['config_table'] = array(
        '#theme' => item_list,
        '#items' => $rows,
        );

        $build['pager'] = array(
        '#type' => 'pager'
        );
 
        return $build;
    }
}
