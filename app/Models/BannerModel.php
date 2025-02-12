<?php

namespace App\Models;

use CodeIgniter\Model;

class BannerModel extends Model
{
    protected $table      = 'homepage_banner_grids'; // The table name
    protected $primaryKey = 'id'; // The primary key for the table

    // Allowed fields for mass assignment
    protected $allowedFields = ['link', 'text', 'image'];

    // Automatically manage timestamps
    protected $useTimestamps = true;

    // Validation rules (optional but useful)
    protected $validationRules = [
        'link' => 'required|valid_url',
        'text' => 'required',
        // 'image' => 'required',
    ];

    // Custom validation messages (optional)
    protected $validationMessages = [
        'link' => [
            'required' => 'Link is required.',
            'valid_url' => 'Please provide a valid URL.',
        ],
        'text' => [
            'required' => 'Text is required.',
        ],
        // 'image' => [
        //     'uploaded' => 'Please upload an image.',
        //     'is_image' => 'Uploaded file must be an image.',
        //     'max_size' => 'The image size is too large. Max allowed size is 2MB.',
        // ],
    ];
}
?>