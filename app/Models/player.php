<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class player extends Model
{
    use HasFactory;
    protected $fillable=[
        'firstName',
        'lastName',
        'email',
        'userName',
        'password',
        'nationality',
        'companyId',
        'walletId'
    ];

    public function walletRelation()
    {
        return $this->belongsTo(wallet::class,'walletId');
    }
}
