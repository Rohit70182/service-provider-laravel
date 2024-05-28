<?php

namespace Modules\Seo\Entities;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Redirect extends Model
{
    protected $table = 'seo_redirect';

    const STATE_NEW = 0;

    const STATE_ACTIVE = 1;

    const STATE_DELETED = 2;

    public $appends = ['state'];

    public function getStateAttribute()
    {
        switch ($this->state_id) {
            case self::STATE_NEW:
                return "New";
                break;
            case self::STATE_ACTIVE:
                return "Active";
                break;
            case self::STATE_DELETED:
                return "Deleted";
                break;
            default:
                return "Not Define";
        }
    }

    public function get_created_by()
    {
        return $this->belongsTo(User::class, 'created_by_id', 'id');
    }
}
