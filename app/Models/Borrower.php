<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Borrower extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'book_id',
        'borrow_at',
        'due_at',
        'fine_id'
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'borrowers';

    /**
     * Get the fine associated with the borrower.
     */
    public function fine() {
        return $this->hasOne(Fine::class);
    }
}
