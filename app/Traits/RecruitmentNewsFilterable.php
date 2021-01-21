<?php

namespace App\Traits;
use Illuminate\Support\Str;

/**
 * Filterable Traits for filter
 */
trait RecruitmentNewsFilterable {
    public function scopeFilter($query, $param)
    {
        $q = null;
        foreach ($param as $field => $value) {
            $method = 'filter' . Str::studly($field);

            if ($value != '') {
                if (method_exists($this, $method)) {
                    $query = $this->{$method}($query, $value);
                } else {
                    $q = $field;
                    if (!empty($this->filterable) && is_array($this->filterable)) {
                        if (in_array($field, $this->filterable)) {
                            $query->where($this->table . '.' . $field, 'LIKE', '%' .$value. '%');
                        } elseif (key_exists($field, $this->filterable)) {
                            $query->where($this->table . '.' 
                                . $this->filterable[$field], 'LIKE', '%' .$value. '%');
                        }
                    }
                }
            }
        }
        return $query->paginate(10);
    }

    public function filterTitle($query, $value) {
        return $query->where('title', 'like', '%'.$value.'%');
    }

    public function filterContent($query, $value) {
        return $query->where('content', 'like', '%'.$value.'%');
    }

    public function filterCity($query, $value) {
        return $query->where('city', 'like', '%'.$value.'%');
    }

    public function filterWorkType($query, $value) {
        return $query->where('work_type', 'like', '%'.$value.'%');
    }
}
?>