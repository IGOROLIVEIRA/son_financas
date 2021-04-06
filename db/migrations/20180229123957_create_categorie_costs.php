<?php

use Phinx\Migration\AbstractMigration;

class CreateCategorieCosts extends AbstractMigration
{

    public function up(){ //criar tabelas novas
      $this->table('category_costs')
          ->addColumn('name','string')
          ->addColumn('created_at', 'datetime')
          ->addColumn('updated_at','datetime')
          ->save();
    }
    public function down(){ //disfaser o que up fez
       $this->dropTable('category_costs');
    }
}
