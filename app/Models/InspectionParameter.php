<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InspectionParameter extends Model
{
    use HasFactory , SoftDeletes;

    protected $fillable = [
        'inspection_form_id',
        's_no',
        'inspection_parameter',
        'check_type',
        'accepted',
        'rejected',
        'qc_noted',
    ];

    public function inspectionForm()
    {
        return $this->belongsTo(InspectionForm::class);
    }
}
