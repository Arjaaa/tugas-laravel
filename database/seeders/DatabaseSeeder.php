<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;
use App\Models\Guardian;
use App\Models\Classroom;
use App\Models\Subject;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Guardian::factory()->count(50)->create();
        //Student::factory()->count(50)->create();
        //Classroom::factory()->count(50)->create();
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
             'password' => bcrypt('password'),
        ]);

        Classroom::factory(4)
        ->hasStudents(5) // Setiap kelas memiliki 10 siswa
        ->create();
        
        Subject::factory(5)
        ->hasTeachers() 
        ->create();
    }
}
