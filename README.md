# shopping-php
购物网
## 说明
1.基于thinkphp5.1.37
2.git没有提交的文件有/vender、/config/database.php,需要手动上传
3.如果是nginx参考5.1手册，如果nginx配置低的话，要把nginx的url重写规则配置一下，apache自选
```
location /shopping-php/public/ {
if (!-e $request_filename){
   rewrite  ^/shopping-php/public/(.*)$  /shopping-php/public/index.php?s=/$1  last;
 }
}
```
