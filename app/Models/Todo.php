<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Todo extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'task',
        'description',
        'status',
        'priority',
        'due_date',
        'category_id',
        'tags'
    ];

    public function user() : BelongsTo {
        return $this->belongsTo(User::class);
    }


    public function scopeFilter(Builder $query, array $types): void 
    {

        $query->when(
            $types['tags'] ?? false, 
            fn ($query,  $tags) =>
                $query->where('title', 'like', '%'.$tags.'%')
        )->when(
            $types['status'] ?? false,
            fn($query, $status) =>
                $query->whereHas(
                        'status', 
                        fn($query) => 
                            $query->where('status', $status)
                        )
        )->when(
            $types['due_date'] ?? false,
            fn($query, $due_date) => 
                $query->whereHas(
                    'due_date', 
                    fn($query)=>
                        $query->where('due_date', $due_date)
            )
        )->when(
            $types['priority'] ?? false,
            fn($query, $priority) => 
                $query->whereHas(
                    'priority', 
                    fn($query)=>
                        $query->where('priority', $priority)
            )
        );


    }
}
