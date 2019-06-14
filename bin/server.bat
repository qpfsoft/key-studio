@echo off
@chcp 65001
echo -------------------------------------------------------------
echo  QPF for Web Server 控制台
@echo.
echo  @copyright Copyright (c) 2016-2019 QPF
echo -------------------------------------------------------------
@echo 注意: 需要将`php`命令添加到环境变量
cmd /k php -S localhost:8080 -t ./../web index.php