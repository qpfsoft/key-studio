<?php
// ╭───────────────────────────────────────────────────────────┐
// │ QPF Framework [Key Studio]
// │-----------------------------------------------------------│
// │ Copyright (c) 2016-2019 quiun.com All rights reserved.
// │-----------------------------------------------------------│
// │ Author: qiun <qiun@163.com>
// ╰───────────────────────────────────────────────────────────┘

// [ PHP-Web ]
if (PHP_SAPI == 'cli-server') {
    $url  = parse_url($_SERVER['REQUEST_URI']);
    if (is_file(__DIR__ . $url['path'])) {
        // 请求web目录资源直接返回
        return false;
    }
}

/* if (PHP_SAPI == 'fpm-fcgi') {
    $url  = parse_url($_SERVER['REQUEST_URI']);
    if (is_file(__DIR__ . $url['path'])) {
        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $mime = finfo_file($finfo, __DIR__ . $url['path']);
        finfo_close($finfo);
        header('Content-Type: ' . $mime);
        // 请求web目录资源直接返回
        echo file_get_contents(__DIR__ . $url['path']);
        return false;
    }
} */



// [ QPF ]
require __DIR__ . '/../vendor/qpfsoft/qpf-core/src/bootstrap.php';

QPF::app()->init();

//QPF::app()->install->listen();

QPF::app()->web->run();



//echor(QPF::$app->lang->translate('qpf', 'qpf_hello'));

//echor(QPF::trace());
//echor(QPF::$app);
//echor($_SERVER);
