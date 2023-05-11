# jz-webman-hashids
https://github.com/jiaxincui/hashid 的迁移版，去除了中间件

依赖于hashids/hashids

只适用于正整数加密。

## 安装
```sh
composer require jiaxincui/hashid
```

## 配置
1. 配置文件目录:config/plugin/jizhi/webman-hashids/app.php。
2. 在.env文件添加配置项`HASH_ID_ALPHABET=your-key`。
* **为了Hash成更安全的字符串，请手动重新生成`HASH_ID_ALPHABET`，为0-9a-zA-Z共62个字符随机排序，字符不可重复，长度为16-62，可使用以下方法生成**
```php
echo str_shuffle('0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ');
```
## 简单使用
包含两个辅助方法`id_encode()`和`id_decode()`。
在项目的任何地方均可使用这两个函数对ID进行加密或解密。