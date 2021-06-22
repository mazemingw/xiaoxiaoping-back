<?php 
namespace App;
use Illuminate\Database\Eloquent\Model;
class Models extends Model{
	protected $table = "models";
	public $timestamps = false;
	public $fillable = ['namer','tablename','isimages'];
}