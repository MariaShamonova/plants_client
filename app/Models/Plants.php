<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Orchid\Filters\Filterable;
use App\Filters\QueryFilter;

class Plants extends Model
{
    use HasFactory;

    protected $fillable = ['id','articul','title', 'price', 'description', 'image'];

    /**
     * Name of columns to which http sorting can be applied
     *
     * @var array
     */
    protected $allowedSorts = [
        'title',
        'price',
        
    ];

    protected $allowedFilters = [
        'title',
        'articul',
        'price',
        'description',
       
    ];
    
    /**
     * @param Builder $builder
     * @param QueryFilter $filter
     */
    public function scopeFilter(Builder $builder, QueryFilter $filter)
    {
       
        $filter->apply($builder);
    }
 
}