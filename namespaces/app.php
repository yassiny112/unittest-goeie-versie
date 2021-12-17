<?php
namespace App;
include("project.php");
use Project\Table as projectTable;

class Table {
  public static function get() {
    echo "App.table.get()";
  }
}

projectTable::get();
