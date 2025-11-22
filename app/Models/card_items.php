PHP

<?php

use App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class card_items extends Model
{
    use HasFactory;
    protected $table = 'card_items';
    
    protected $fillable = [
        'user_id',
        'product_id',
        'quantity',
        'total_price',
    ];

    
}