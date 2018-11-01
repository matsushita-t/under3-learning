# Apacheのセキュリティ設定

##  ServerTokens XX
---
### レスポンスヘッダに載るApacheの情報表示/エラーページのフッタ表示の設定


#### デフォルトはOSになっている

- ServerTokens Prod

    - Server: Apache といったように送ります。

- ServerTokens Major
    - メジャーバージョンのみを送る
    - Server: Apache/2

- ServerTokens Minor

    - マイナーバージョンまで送る
    - Server: Apache/2.0

- ServerTokens Min
    - Server: Apache/2.0.41 といったように送ります。

- ServerTokens OS
    - Server: Apache/2.0.41 (Unix) といったように送ります。

- ServerTokens Full
    - Server: Apache/2.0.41 (Unix) PHP/4.2.2 MyMod/1.2


#### バージョンが判別されると攻撃者への有益な情報になるため「ServerTokens Prod」で設定してバージョンを隠蔽する。


---
## ServerSignature On/Off

#### エラーページのフッタにApacheの情報を返却するかしないか

 - Apache/2.4.6 (CentOS) Server at 192.168.56.10 Port 80

---
## Header unset "X-Powered-By"

####  PHPで動いているページを実行した際にPHPのバージョンが表示される
X-Powered-By: PHP/5.4.16

---
## RequestHeader unset Proxy

#### 脆弱性対策
http://www.jpcert.or.jp/at/2016/at160031.html

---
## クリックジャッキング対策

#### Header append X-Frame-Options SAMEORIGIN

外部ドメインではフレームで呼び出すことを禁止する設定
- DENY
    - フレーム内に表示するのを全面禁止
- SAMEORIGIN
    - 同じドメインのページでフレームに読み込まれた場合だけ許可

参考PDF
https://www.ipa.go.jp/files/000026479.pdf

---
## XSS対策

####  Header set X-XSS-Protection "1; mode=block"

最近のWebブラウザには、クロスサイトスクリプティング（XSS）に対するフィルタ機能が装備されている。
「X-XSS-Protection」はこのフィルタ機能を強制的に有効にするというものです。
通常であればXSSフィルタはデフォルトで有効に設定されているはずですが、
ユーザがこの設定を無効にした場合には、このHTTPヘッダがXSSの防止に役立ちます。

#### Header set X-Content-Type-Options nosniff

Webブラウザのなかには、 Content-Typeではなくファイルの中身を見て、そのファイルの種類を判別しようとする
「Content Sniffing」という機能が実装されているものがある。
これが有効になっていると、ファイルに仕込まれた悪意のあるコードをブラウザが誤って実行してしまう危険性がある。(XSS)
このヘッダー（X-Content-Type-Options: nosniff）がレスポンスに設定されていると、ブラウザはファイル種別の自動判定をしなくなる。

#### Content-Security-Policy: script-src 'self'

とすることで、自分自身のオリジン以外から JavaScriptのソースを読み込もうとするのをブロックできるようになる。
要は、あらかじめ信頼できるオリジンだけからしかファイルなどを読み込めないようにしておくことで、
攻撃者の用意した意図しないスクリプトを読み込んで実行してしまわないようにする。

---
## XST対策

#### TraceEnable Off

今はほぼ対策の必要ない問題だが念の為設定
HTTP 1.1(RFC2616)では、8種類のメソッドが定義されています。
GET、POST、HEAD、PUT、DELETE、OPTIONS、TRACE、CONNECTの5種があります。
このうち、TRACEメソッドは、HTTPリクエストを「オウム返しに」HTTPレスポンスとして返す。
このTRACEメソッドを無効にする設定

テスト
curl -v -X TRACE http://192.168.56.10
