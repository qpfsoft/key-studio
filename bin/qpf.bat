@echo off
rem #当前设置为UTF-8, gbk可执行`chcp 936`
@chcp 65001
echo -------------------------------------------------------------
echo  Windows 平台 QPF 命令行引导脚本.
@echo.
echo  @copyright Copyright (c) 2016-2019 QPF
echo -------------------------------------------------------------
echo 帮助:
echo - 当你看到当前帮助, 表示你可以使用`php qpf`命令!
echo - 命令格式`php qpf build:run opt1` build是命令, run是默认操作可忽略
echo - `:help` 可查看命令的可用操作列表
echo - `:help run` 可查看指定操作的参数依赖
rem # cmd /k qpf --status
cmd /k
