<?php
namespace models;

use Illuminate\Database\Eloquent\Model;

class Vacacion extends Model
{
    protected $table = 'vacaciones';
    protected $fillable = ['days_funcionario','razon','observaciones','tipo','date_init','funcionario_id','usuario_id','status_id'];

    public function funcionario()
    {
        return $this->belongsTo(Funcionario::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }

    
}