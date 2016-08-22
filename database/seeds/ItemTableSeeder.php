<?php

use Illuminate\Database\Seeder;
use App\Models\Item;

class ItemTableSeeder extends Seeder {
  public function run() {
    $i = 0;
    do {
      Item::create(['task' => $i . '-item', 'completed' => false]);
      $i++;
    } while ($i <= 10);
  }
}
