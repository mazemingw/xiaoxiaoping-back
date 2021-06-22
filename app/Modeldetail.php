<?php 
namespace App;
use Illuminate\Database\Eloquent\Model;
class Modeldetail extends Model{
	protected $table = "modeldetail";
	public $timestamps = false;
	public $fillable = [
		'fieldname',
		'cname',
		'type',
		'length',
		'defaultvalue',
		'kvalue',
		'constraints',
		'modelsid'
	];
	function kvalueExplode($kvalue){
		return explode('@',$kvalue);
	}
}