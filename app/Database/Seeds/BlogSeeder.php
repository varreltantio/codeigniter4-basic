<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class BlogSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'blog_title' => 'leravio',
            'blog_description'    => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry'
        ];

        // Simple Queries
        $this->db->query("INSERT INTO blog (blog_title, blog_description) VALUES(:blog_title:, :blog_description:)", $data);

        // Using Query Builder
        $this->db->table('blog')->insert($data);
    }
}
