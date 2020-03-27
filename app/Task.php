<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Task
 *
 * @package App
 * @property string $title
 * @property string $description
 * @property string $status
 * @property string $assigned_to
*/
class Task extends Model
{
    use SoftDeletes;

    protected $fillable = ['title', 'description', 'status_id', 'assigned_to_id'];
    protected $hidden = [];



    /**
     * Set to null if empty
     * @param $input
     */
    public function setStatusIdAttribute($input)
    {
        $this->attributes['status_id'] = $input ? $input : null;
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setAssignedToIdAttribute($input)
    {
        $this->attributes['assigned_to_id'] = $input ? $input : null;
    }

    public function status()
    {
        return $this->belongsTo(TaskStatus::class, 'status_id');
    }

    public function assigned_to()
    {
        return $this->belongsTo(User::class, 'assigned_to_id');
    }

}
