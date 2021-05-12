<?php

namespace App;

use App\Post;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
<<<<<<< HEAD
    protected $fillable = ['title', 'body'];
    
    public function getPaginateByLimit(int $limit_count = 5)
    {
        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
=======
    public function getByLimit(int $limit_count = 10)
    {
        return $this->orderBy('updated_at', 'DESC')->limit($limit_count)->get();
>>>>>>> master
    }
    public function getPaginateByLimit(int $limit_count = 10)
    {
        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
}
