<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AbpDatosCategorizacion extends Model
{
      protected $primaryKey = 'idDatosIdea';
	  protected $table = 'abp_datosidea';
    protected $fillable= [
           'fk_idCategorizacionIdeas',
           'Idea'
    ];

   
    public function ListarCategorias()
    {
     // return "hgoa";
     // return $this->hasMany('Estadia\Categorias','idTest');
   }
}
