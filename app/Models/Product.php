<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function up(): void
    {
    Schema::create('products', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->text('description');
    $table->decimal('price', 8, 2);
    $table->integer('quantity');
    $table->timestamps();
    });
    }

    public function down(): void
    {
    Schema::dropIfExists('products');
    }
}
