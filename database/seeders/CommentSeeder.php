<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comment;


class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    Comment::factory(5)->create(); // Crea 5 comentarios
}
}
