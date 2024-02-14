<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $fillable =[
        'category_name',
    ];
}

// public function render()
// {
//     // Retrieve categories
//     $categories = Category::all();

//     // Check if categories are not null
//     if ($categories) {
//         // Pass categories to the view
//         return view('livewire.user-post', ['category' => $categories]);
//     }

//     // If categories are null, handle appropriately (e.g., return an empty array)
//     return view('livewire.user-post', ['category' => []]);
// }