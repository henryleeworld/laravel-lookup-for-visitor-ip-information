# Laravel 11 查詢訪客 IP 位址資訊

引入 ip2location 的 ip2location-laravel 套件來擴增查詢訪客 IP 位址資訊。一般而言，IP 位址多半是指出一個裝置所處的城市和州。有時，更不精確的時候，只會給出這個裝置連接到網路的國家或者地區。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產生 Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以經由 `/ip/lookup` 來進行 IP 資訊查找。

----

## 畫面截圖
![](https://i.imgur.com/KukO9vE.png)
> 在網路世界中是用 IP 來辨別一個裝置
