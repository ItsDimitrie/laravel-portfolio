<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    /**
     * @param $new_result
     * @return void
     */
    public function addResult($new_result)
    {
        if ($new_result > $this->best_grade)
        {
            $this->best_grade = $new_result;

            $this->save();

            $model = $this->fresh();
            if ($model->best_grade >= $model->lowest_passing_grade)
            {
                $model->passed_at = now();
            }
            else
            {
                $model->passed_at = null;
            }

            $model->save();
        }
        else
        {
            return;
        }
    }
}
