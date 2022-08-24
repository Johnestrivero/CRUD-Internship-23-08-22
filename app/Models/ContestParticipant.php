<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContestParticipant extends Model
{
    use HasFactory;

    protected $table = "contes-participant";

    protected $fillable = [
        "name",
        "rank",
        "elo"
    ];

    public $timestamps = false;

}
