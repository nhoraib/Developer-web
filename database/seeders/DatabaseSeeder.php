<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\DevelopM;
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

      // DevelopM:factory(3)->create();

      DevelopM::create([
        
            'name' => 'Nouf Ali ', 
            'email' => 'Noufali@email.com',
            'Position' => 'Junior Devoloper',
            'about' => 'Im programmer interesting of learn deeply laravel , Frontend'
        

       ]);
       DevelopM::create([
        
        'name' => 'Nuha Abdullah', 
           
            
            'email' => 'Nuha@email.com',
            'Position' => 'Senior Devoloper',
            
            'about' => 'Frontend && backend'
    

   ]);
      
   DevelopM::create([
        
    'name' => 'Mona Abdullah', 
       
        
        'email' => 'Mona@email.com',
        'Position' => 'Senior Devoloper',
        
        'about' => 'Frontend && backend'


]);

        //User::factory()->create([
        //    'name' => 'Test User',
        //   'email' => 'test@example.com',
       // ]);
    }
}
