<?php

return [
    'enable' => true,
    'salt' => getenv('APP_KEY') ?: 'base64:dVdulDThU9cYbK7O5Y1cbENnYgToXBQ090GP05CkKZk=', //盐值，默认使用APP_KEY
    'min_hash_length' => 8, //加密字符串的最小长度
    'alphabet' => getenv('HASH_ID_ALPHABET') ?: 'Fi1yqx4mk3Bda7DfMCjWoOSUHYTRKhuszl2cg5pXLe6AwEGn8NvJ9VtZr0IQbP'
];