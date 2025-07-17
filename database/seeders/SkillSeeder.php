<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Skill::factory()->create([
            'name' => 'MongoDB',
            'type' => 'Database',
            'is_active' => true,
        ]);

        Skill::factory()->create([
            'name' => 'Redis',
            'type' => 'Database',
            'is_active' => true,
        ]);

        Skill::factory()->create([
            'name' => 'PostgreSQL',
            'type' => 'Database',
            'is_active' => true,
        ]);

        Skill::factory()->create([
            'name' => 'JavaScript',
            'type' => 'Programming Language',
            'is_active' => true,
        ]);

        Skill::factory()->create([
            'name' => 'TypeScript',
            'type' => 'Programming Language',
            'is_active' => true,
        ]);

        Skill::factory()->create([
            'name' => 'PHP',
            'type' => 'Programming Language',
            'is_active' => true,
        ]);

        Skill::factory()->create([
            'name' => 'Go',
            'type' => 'Programming Language',
            'is_active' => true,
        ]);

        Skill::factory()->create([
            'name' => 'Python',
            'type' => 'Programming Language',
            'is_active' => true,
        ]);

        Skill::factory()->create([
            'name' => 'Java',
            'type' => 'Programming Language',
            'is_active' => true,
        ]);

        Skill::factory()->create([
            'name' => 'C++',
            'type' => 'Programming Language',
            'is_active' => true,
        ]);

        Skill::factory()->create([
            'name' => 'Dart',
            'type' => 'Programming Language',
            'is_active' => true,
        ]);

        Skill::factory()->create([
            'name' => 'Solidity',
            'type' => 'Programming Language',
            'is_active' => true,
        ]);

        Skill::factory()->create([
            'name' => 'Docker',
            'type' => 'DevOps',
            'is_active' => true,
        ]);

        Skill::factory()->create([
            'name' => 'Flutter',
            'type' => 'Framework',
            'is_active' => true,
        ]);

        Skill::factory()->create([
            'name' => 'Node.js',
            'type' => 'Runtime',
            'is_active' => true,
        ]);

        Skill::factory()->create([
            'name' => 'Express.js',
            'type' => 'Framework',
            'is_active' => true,
        ]);

        Skill::factory()->create([
            'name' => 'NestJS',
            'type' => 'Framework',
            'is_active' => true,
        ]);

        Skill::factory()->create([
            'name' => 'Next.js',
            'type' => 'Framework',
            'is_active' => true,
        ]);

        Skill::factory()->create([
            'name' => 'Laravel',
            'type' => 'Framework',
            'is_active' => true,
        ]);

        Skill::factory()->create([
            'name' => 'Hardhat',
            'type' => 'Tool',
            'is_active' => true,
        ]);

        Skill::factory()->create([
            'name' => 'TensorFlow',
            'type' => 'Library',
            'is_active' => true,
        ]);

        Skill::factory()->create([
            'name' => 'Django',
            'type' => 'Framework',
            'is_active' => true,
        ]);

        Skill::factory()->create([
            'name' => 'Flask',
            'type' => 'Framework',
            'is_active' => true,
        ]);
    }

    public function getDescription(): string
    {
        return 'Seed the skills table with predefined skills.';
    }
}
