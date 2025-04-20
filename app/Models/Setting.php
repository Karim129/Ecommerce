<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = ['settings'];

    protected $casts = [
        'settings' => 'array',
    ];

    public function getSettings()
    {
        return $this->settings;
    }

    public function getSupportTicketsCount()
    {
        return isset($this->settings['support_tickets']) ? count($this->settings['support_tickets']) : 0;
    }
}
