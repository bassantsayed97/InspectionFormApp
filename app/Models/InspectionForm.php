<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InspectionForm extends Model
{
    //
    use SoftDeletes , HasFactory ;
    protected $table = 'inspection_forms';

    protected $fillable = [
        'work_order_no',
        'customer_name',
        'production_order',
        'date',
        'project',
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

    public function inspectionParameters()
    {
        return $this->hasMany(InspectionParameter::class);
    }



}
