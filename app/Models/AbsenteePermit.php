<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AbsenteePermit extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @param array $fillable
     */
    protected array $fillable = [
        'user_id',
        'date',
        'from',
        'to',
        'reason',
        'admin_note',
        'status',
        'proof_of_doctor_notes',
    ];

    /**
     * Get the user that owns the AbsenteePermit
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
