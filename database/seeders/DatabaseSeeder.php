<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('specialites')->insert([
            
            'nom' =>'Dentist',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')  
        ]);
        DB::table('specialites')->insert([
            
            'nom' =>'Généraliste',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')  
        ]);
        DB::table('specialites')->insert([
            
            'nom' =>'Anesthésiologie',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')  
        ]);
        DB::table('specialites')->insert([
           
            'nom' =>'Cardiologie',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')  
        ]);
        DB::table('specialites')->insert([
          
            'nom' =>'Dermatologie',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')  
        ]);
        DB::table('specialites')->insert([
           
            'nom' =>'Endocrinologie',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')  
        ]);
        DB::table('specialites')->insert([
        
            'nom' =>'Gastro-entérologie',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')  
        ]);
        DB::table('specialites')->insert([
            
            'nom' =>'Génétique',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')  
        ]);
        DB::table('specialites')->insert([
           
            'nom' =>'Gériatrie',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')  
        ]);
        DB::table('specialites')->insert([
            
            'nom' =>'Hématologie',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')  
        ]);
        DB::table('specialites')->insert([
          
            'nom' =>'Néphrologie',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')  
        ]);
        DB::table('specialites')->insert([
        
            'nom' =>'Neurologie',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')  
        ]);
        DB::table('specialites')->insert([
      
            'nom' =>'Pédiatrie',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')  
        ]);
        DB::table('specialites')->insert([
         
            'nom' =>'Physiatrie',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')  
        ]);
         DB::table('specialites')->insert([
                  'nom' =>'Rhumatologie',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')  
        ]); 
        DB::table('specialites')->insert([
         
            'nom' =>'Psychiatrie',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')  
        ]);
         DB::table('specialites')->insert([
          
            'nom' =>'Pneumologie',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')  
        ]); 
        DB::table('specialites')->insert([
            
            'nom' =>'Oncologie médicale',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')  
        ]);

    }
}
