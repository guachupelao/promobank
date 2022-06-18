<?php
namespace models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table = 'status';
    protected $fillable = ['nombre'];

    public function reservas()
    {
        return $this->hasMany(Reserva::class);
    }

    public function vacaciones()
    {
        return $this->hasMany(Vacacion::class);
    }
}
