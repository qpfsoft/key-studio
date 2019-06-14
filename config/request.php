<?php
return [
    // HTTPS代理标识
    'https_agent_name'  => '',
    // IP代理获取标识
    'http_agent_ip'     => 'HTTP_X_REAL_IP',
    // 全局默认过滤方法, 逗号分隔
    'default_filter'    => '',
    // 根域名, 例`quiun.com.cn`|`zone.quiun.com` , 当使用二级域名作为根域名时需配置
    'url_domain_root'   => '',
    // URL伪静态后缀, {false:'禁止伪静态访问'}
    'url_html_suffix'   => 'html',
    // 开启请求缓存
    'request_cache'     => false,
    // 请求缓存的有效期
    'request_cache_expire'  => null,
    // 请求缓存的排除规则
    'request_cache_except'  => [],
];