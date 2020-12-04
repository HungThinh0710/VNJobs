<?php

namespace App\Traits;
use Illuminate\Support\Str;

/**
 * Filterable Traits for filter
 */
trait Filterable {
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
                            $q = "m";
                            $query->where($this->table . '.' . $field, 'LIKE', '%' .$value. '%');
                        } elseif (key_exists($field, $this->filterable)) {
                            $q = "e";
                            $query->where($this->table . '.' 
                                . $this->filterable[$field], 'LIKE', '%' .$value. '%');
                        }
                    }
                }
            }
        }
        return $query->paginate(10);
    }

    /**
     * 
     */
    public function filterOrgName($query, $value) {
        return $query->where('org_name', 'LIKE', '%' . $value . '%');
    }

    public function filterTaxId($query, $value) {
        return $query->where('tax_id', 'LIKE', '%' . $value . '%');
    }

    public function filterPhone($query, $value)
    {
        return $query->where('phones', 'LIKE', '%' . $value . '%');
    }
}

?>