<?php

use yii\db\Migration;

class m170326_150729_create_kategorie extends Migration
{
  public function safeUp()
  {
    $this->createTable('kategorie', [
      'id' => $this->primaryKey(),
      'description' => $this->string(),
      'field2' => $this->string(),
      'field3' => $this->string(),
    ],'CHARACTER SET utf8');

    //1
    $this->insert('kategorie', [
      'description' => 'In Office Bleaching',
    ],'CHARACTER SET utf8');

    //2
    $this->insert('kategorie', [
      'description' => 'Home Bleaching',
    ],'CHARACTER SET utf8');

    //3
    $this->insert('kategorie', [
      'description' => 'Zahnspange',
    ],'CHARACTER SET utf8');

    //4
    $this->insert('kategorie', [
      'description' => 'Zahnschmuck',
    ],'CHARACTER SET utf8');

    //5
    $this->insert('kategorie', [
      'description' => 'Zahnästhetik',
    ],'CHARACTER SET utf8');

  }

  public function safeDown()
  {
    $this->dropTable('kategorie');
  }


}
