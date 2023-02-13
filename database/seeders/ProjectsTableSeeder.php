<?php

namespace Database\Seeders;
use Faker\Generator as Faker;
use App\Models\Level;
use App\Models\Project;
use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for ($i = 0; $i < 12; $i++) {

            $newProject = new Project();

            $newProject->title = 'project_' . $i;
            $newProject->description = $faker->paragraph();

            $newProject->github_link = "https://github.com/KellerMarika";
            $newProject->cover_img = '/projects/' . $i . '.png';
            $newProject->completed = $faker->numberBetween(0, 1);
            $newProject->type_id = $faker->numberBetween(1, 3);
            $newProject->level_id = $faker->numberBetween(1, 3);
            $newProject->save();
        }
    }
        /*  vale la pena fare un controllo se tanto devo avere sott'occhio la tabella per riferirmi alla riga corretta della tabella?______________
        $types = Type::all();
        $Levels = Level::all(); */
/* 
        $projects = [

            [
                'title' => 'project_1',
                'description' => 'descrizione',

                'github_link' => "https://github.com/KellerMarika",
                'cover_img' => '/projects/1.jpg',
                'completed' => true,
                'type_id' => '2',
                'level_id' => '3',
            ],

            [
                'title' => 'project_2',
                'description' => 'descrizione',

                'github_link' => "https://github.com/KellerMarika",
                'cover_img' => '/projects/1.jpg',
                'completed' => true,
                'type_id' => '2',
                'level_id' => '3',
            ],

            [
                'title' => 'project_3',
                'description' => 'descrizione',

                'github_link' => "https://github.com/KellerMarika",
                'cover_img' => '/projects/1.jpg',
                'completed' => true,
                'type_id' => '2',
                'level_id' => '3',
            ],

            [
                'title' => 'project_4',
                'description' => 'descrizione',

                'github_link' => "https://github.com/KellerMarika",
                'cover_img' => '/projects/1.jpg',
                'completed' => true,
                'type_id' => '2',
                'level_id' => '3',
            ],

            [
                'title' => 'project_5',
                'description' => 'descrizione',

                'github_link' => "https://github.com/KellerMarika",
                'cover_img' => '/projects/1.jpg',
                'completed' => true,
                'type_id' => '2',
                'level_id' => '3',
            ],

            [
                'title' => 'project_6',
                'description' => 'descrizione',

                'github_link' => "https://github.com/KellerMarika",
                'cover_img' => '/projects/1.jpg',
                'completed' => true,
                'type_id' => '2',
                'level_id' => '3',
            ],

            [
                'title' => 'project_7',
                'description' => 'descrizione',

                'github_link' => "https://github.com/KellerMarika",
                'cover_img' => '/projects/1.jpg',
                'completed' => true,
                'type_id' => '2',
                'level_id' => '3',
            ],

            [
                'title' => 'project_8',
                'description' => 'descrizione',

                'github_link' => "https://github.com/KellerMarika",
                'cover_img' => '/projects/1.jpg',
                'completed' => true,
                'type_id' => '2',
                'level_id' => '3',
            ],

            [
                'title' => 'project_9',
                'description' => 'descrizione',

                'github_link' => "https://github.com/KellerMarika",
                'cover_img' => '/projects/1.jpg',
                'completed' => true,
                'type_id' => '2',
                'level_id' => '3',
            ],

            [
                'title' => 'project_10',
                'description' => 'descrizione',

                'github_link' => "https://github.com/KellerMarika",
                'cover_img' => '/projects/1.jpg',
                'completed' => true,
                'type_id' => '2',
                'level_id' => '3',
            ],

            [
                'title' => 'project_11',
                'description' => 'descrizione',

                'github_link' => "https://github.com/KellerMarika",
                'cover_img' => '/projects/1.jpg',
                'completed' => true,
                'type_id' => '2',
                'level_id' => '3',
            ],

            [
                'title' => 'project_12',
                'description' => 'descrizione',

                'github_link' => "https://github.com/KellerMarika",
                'cover_img' => '/projects/1.jpg',
                'completed' => true,
                'type_id' => '2',
                'level_id' => '3',
            ],
        ];

        foreach ($projects as $project) {
            $newProject = new Project();
            $newProject->fill($project);


            $newProject->save();
        } 
    } */
}