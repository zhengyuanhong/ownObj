<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
/**
 *@property string id 自增id
 *@property string user_id 用户id
 *@property string content 内容
 *@property string images 照片内容
 *@property string lng 经度
 *@property string lat 纬度
 *@property string created_at 创建时间
 *@property string updated_at 更新时间
 */
class Posts extends Model
{
    protected $table = 'posts';
}
