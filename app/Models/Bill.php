<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;

    protected $fillable = ['workspace_id', 'month', 'total_amount'];

    public function workspace()
    {
        return $this->belongsTo(Workspace::class);
    }
}
