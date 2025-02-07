<?php
// 自定义日志测试
error_log("Test error log entry", 3, "D:/XAMPP/php/logs/php_error_log.txt");

// 触发一个 PHP 错误
trigger_error("Test PHP error", E_USER_NOTICE);

// 检查是否能够写入默认的错误日志文件
error_log("This is a default error log entry.");

// 提示测试完成
echo "日志测试代码已运行，请检查日志文件内容！";
?>
