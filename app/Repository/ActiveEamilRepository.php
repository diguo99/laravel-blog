<?php

namespace App\Repository;

use App\Model\ActiveEmail;

class ActiveEamilRepository
{
    //
    protected static $activeEmail;
    
    public function __construct(ActiveEmail $activeEmail)
	{
	    self::$activeEmail = $activeEmail;
    }
    
    
    /**
     * @description:增加数据
     * @author wuyanwen(2017年9月21日)
     * @param unknown $data
     */
    public function store($data)
    {
        return self::$activeEmail::create($data);
    }
    
   /**
    * @description:根据email查询记录
    * @author wuyanwen(2017年9月21日)
    * @param unknown $email
    */
    public function getRecordByEmail($email)
    {
        return self::$activeEmail::where('email', '=', $email)->first();
    }
}
