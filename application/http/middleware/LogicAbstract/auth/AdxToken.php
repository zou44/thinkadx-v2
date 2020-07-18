<?php
/* =============================================================================#
# Author: 奔跑猪
# Date: 2020-07-15 07:36:09
# LastEditors: 奔跑猪
# LastEditTime: 2020-07-17 08:27:37
# Descripttion: token抽象类
#============================================================================= */
namespace app\http\middleware\LogicAbstract\auth;

abstract class AdxToken extends Base {
    
    // 缓存配置
    abstract static public function getStorageConfig();

    // oauth模型
    abstract static public function getOauthModel();

    // oauth模型的用户ID字段
    abstract static public function getOauthUserPk();
    
}