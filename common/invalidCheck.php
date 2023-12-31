<?php

if (!defined('init')) { // 直接访问处理程序
    header('Content-Type: text/plain; charset=utf-8');
    if (!file_exists('config.php')) {
        http_response_code(503);
        header('Content-Type: text/plain; charset=utf-8');
        header('Refresh: 5;url=install.php');
        die("HTTP 503 服务不可用！\r\n暂未安装此程序！\r\n将在五秒内跳转到安装程序！");
    }

    http_response_code(403);
    header('Refresh: 3;url=./');
    define('init', true);
    die("HTTP 403 禁止访问！\r\n\r\n禁止直接访问！");
}
if (version_compare(PHP_VERSION, '7.0.0', '<')) {
	http_response_code(503);
	header('Content-Type: text/plain; charset=utf-8');
	header('Refresh: 5;url=https://www.php.net/downloads.php');
	die("HTTP 503 服务不可用！\r\nPHP 版本过低！无法正常运行程序！\r\n请安装 7.0.0 或以上版本的 PHP！\r\n将在五秒内跳转到 PHP 官方下载页面！");
}
if (!(file_exists('./common/functions.php') && file_exists('./common/language.php'))) {
	http_response_code(503);
	header('Content-Type: text/plain; charset=utf-8');
	header('Refresh: 5;url=https://github.com/yuantuo666/baiduwp-php');
	die("HTTP 503 服务不可用！\r\n缺少相关配置和定义文件！无法正常运行程序！\r\n请重新 Clone 项目并进入此页面安装！\r\n将在五秒内跳转到 GitHub 储存库！");
}
if (!file_exists('config.php')) {
    http_response_code(503);
    header('Content-Type: text/plain; charset=utf-8');
    header('Refresh: 5;url=install.php');
    die("HTTP 503 服务不可用！\r\n暂未安装此程序！\r\n将在五秒内跳转到安装程序！");
}
if (!function_exists('curl_init')) {
	http_response_code(503);
	header('Content-Type: text/plain; charset=utf-8');
	die("HTTP 503 服务不可用！\r\n您未安装或未启用 Curl 扩展，此程序无法运行！");
}
