<?php
/**
 * Created by PhpStorm.
 * User: Dev
 * Date: 6/27/2016
 * Time: 1:48 AM
 */

namespace frontend\models;


class Misc
{
    static public function getAvatar($id, $thumb = null)
    {
        $user = \common\models\User::findOne($id);
        $path = 'uploads/'.$id.'/profile'.$thumb.'.'.$user->ext;

        if(is_file($path))
            return '/'.$path."?=t=".time();

        return null;
    }
}