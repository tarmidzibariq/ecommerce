<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'slug', 'image'
    ];

    /**
     * products
     *
     * @return void
     */
    public function products()
    {
        return $this->hasMany(Product::class);
    }

    // accessors
    // dimana di dalamnya kita akan melakukan return atau mengembalikan ke dalam folder storage/categories/. Jadi jika kita memanggil attribute image makan akan otomatis menghasilkan output seperti berikut ini : domain.com/storage/categories/nama_file_image.png

    // jika kita tidak menggunakan fitur Accessor, maka hasilnya akan seperti berikut ini : nama_file_image.png

    public function getImageAttribute($image)
    {
        return asset('storage/categories/' . $image);
    }
}
