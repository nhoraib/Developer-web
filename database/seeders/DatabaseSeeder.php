<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Devolp;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       User::factory(5)->create();

       Devolp::create([

      'title' => 'Laravel Senior Developer', 
      'name' => 'Nouf, javascript',
      'Position' => 'Junior Corp',
      'email' => 'email1@email.com',
      'about' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima 
      et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum 
      quaerat consequatur! Expedita ab consectetur tenetur delensiti?'

       ]);
       Devolp::create([

        'title' => 'Laravel Senior Developer', 
        'name' => 'Nuha, javascript',
        'Position' => 'Senior Corp',
        'email' => 'email2@email.com',
        'about' => 'LOOOO ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima 
        et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum 
        quaerat consequatur! Expedita ab consectetur tenetur delensiti?'
  
         ]);

        //User::factory()->create([
        //    'name' => 'Test User',
        //   'email' => 'test@example.com',
       // ]);
    }
}
