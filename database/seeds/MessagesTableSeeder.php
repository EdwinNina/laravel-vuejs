<?php

use App\Message;
use Illuminate\Database\Seeder;

class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Message::create([
            'from_id' => 1,
            'to_id' => 2,
            'content' => 'hola como estas?'
        ]);

        Message::create([
            'from_id' => 2,
            'to_id' => 1,
            'content' => 'bien gracias y tu?'
        ]);

        Message::create([
            'from_id' => 1,
            'to_id' => 3,
            'content' => 'q onda!!'
        ]);

        Message::create([
            'from_id' => 3,
            'to_id' => 1,
            'content' => 'wasaaaa.....'
        ]);
    }
}
