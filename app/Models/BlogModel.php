<?php

namespace App\Models;

use CodeIgniter\Model;

class BlogModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'blog';
    protected $primaryKey       = 'blog_id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    // protected $returnType       = \App\Entities\Blog::class;
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['blog_title', 'blog_description'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'blog_title'       => 'required|min_length[5]|max_length[100]',
        'blog_description' => 'required|min_length[5]|max_length[1000]',
    ];
    protected $validationMessages   = [
        'blog_title'       => [
            'required' => 'Blog title is required',
            'min_length' => 'Blog title must be at least 5 characters long',
            'max_length' => 'Blog title cannot be more than 100 characters long',
        ],
        'blog_description' => [
            'required' => 'Blog description is required',
            'min_length' => 'Blog description must be at least 5 characters long',
            'max_length' => 'Blog description cannot be more than 1000 characters long',
        ],
    ];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = ['callBeforeFind'];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    protected function callBeforeFind(array $data)
    {
        print("Running method before find");

        return $data;
    }
}
