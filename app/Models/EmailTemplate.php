<?php

namespace App\Models;

use App\Models\Ticket;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EmailTemplate extends Model
{
    use HasFactory;
    protected $table = 'email_templates';
    protected $fillable = [
        'id',
        'name',
        'details',
        'slug',
        'html',
    ];
    
    public function tickets(){
        return $this->hasMany(Ticket::class);
    }

}
