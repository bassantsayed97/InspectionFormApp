<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InspectionForm extends Model
{
    //
    use SoftDeletes , HasFactory ;

    protected $fillable = [
        'work_order_number',
        'customer_name',
        'production_order',
        'inspection_date',
        'project_name',
        'face_size',
        'neck_size',
        'thickness_out_of_tolerance',
        'angle_out_of_tolerance',
        'joint_gap_out_of_tolerance',
        'deformed',
        'surface_scratches',
        'bad_finish',
        'bad_sealing',
        'bad_paint',
        'qc_notes',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    

}
