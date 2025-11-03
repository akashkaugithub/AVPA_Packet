<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrivacyPolicyTermsCondition extends Model
{
    use HasFactory;

    protected $table = 'privacy_policy_terms_conditions';

    protected $fillable = [
        'privacy_policy',
        'terms_condition',
    ];
}
