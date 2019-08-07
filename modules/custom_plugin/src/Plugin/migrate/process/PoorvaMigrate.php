<?php

namespace Drupal\custom_plugin\Plugin\migrate\process;

use Drupal\migrate\MigrateExecutableInterface;
use Drupal\migrate\ProcessPluginBase;
use Drupal\migrate\Row;

/**
 * Create plugin to convert the true to 1 and false to 0
 *
 * @MigrateProcessPlugin(
 *   id = "srijan_plugin"
 * )
 */
class PoorvaMigrate extends ProcessPluginBase {

  /**
   * {@inheritdoc}
   */
  public function transform($value, MigrateExecutableInterface $migrate_executable, Row $row, $destination_property) {
    if($value == 'true'){
      return 1;
    }else{
      return 0;
    }
    
    //return $value;
  }




}
