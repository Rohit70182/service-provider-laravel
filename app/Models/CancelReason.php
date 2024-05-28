<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CancelReason extends Model
{
    use HasFactory;
    
    protected $table = 'cancel_reasons';
    
    const STATE_ACTIVE = 0;
    const STATE_INACTIVE = 1;
}

