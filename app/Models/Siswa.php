<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Siswa extends Model
{
    use HasFactory;
    protected $table = 'siswa';
    // protected $fillable = [
    //     'nis',
    //     'nama',
    //     'alamat',
    // ];

    protected $guarded = ['id','timestamps'];

    function sekolah() {
        return $this->belongsTo(sekolah::class);
    }
}
