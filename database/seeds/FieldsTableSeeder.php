<?php

use Illuminate\Database\Seeder;
use App\Field;

class FieldsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fields = [
            'smart tv',
            'WIFI',
            '4K',
            'OLED',
        ];

        foreach ($fields as $field) {
            $new_field = new Field();

            $new_field->name = $field;

            $new_field->save();
        }
    }
}
