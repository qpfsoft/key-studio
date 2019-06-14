<?php
/**
 * 全局路由定义文件, 可定义所有域名分组的路由规则!
 * 
 * # 生成路由解析加速缓存
 * ```
 * php qpf fast:route
 * ```
 */
use qpf\facade\Route;


Route::any('test', 'index/test/index');

Route::get('news/item-<type>-<page>', 'index/news/item')->pattern(['page' => '\d+', 'type' => '\w+']);

Route::get('item-<type>-<page>', 'index/news/item')->pattern(['page' => '\d+']);

Route::domain('api', function (){
    Route::get('test', 'index/test/index');
});

