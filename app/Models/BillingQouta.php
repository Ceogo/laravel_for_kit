<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BillingQouta extends Model
{
    use HasFactory;

    protected $fillable = ['workspace_id', 'limit'];

    public function index()
    {
        return $this->belongsTo(Workspace::class);
    }
}
