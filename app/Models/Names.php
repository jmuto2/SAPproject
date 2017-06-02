<?php
/**
 * Created by PhpStorm.
 * User: mutowpb
 * Date: 5/31/2017
 * Time: 7:58 PM
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Names extends Model
{
  protected $primaryKey = 'id';
  protected $fillable = array('first_name', 'last_name');
  public $timestamps  = false ;

}