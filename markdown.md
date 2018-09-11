

# Install server


[Docker]https://docs.docker.com/docker-for-mac/install/

Pull image
docker pull centos:centos7

ii)Start server
docker run -it -d --name centos7 centos:centos7

iii)Login server
docker exec -ti centos7 bash



# 見出し1
## 見出し2
### 見出し3
#### 見出し4
##### 見出し5
###### 見出し6

*italic*
**bold**

---

[Google先生](https://www.google.co.jp/)

~~取り消し線~~


- リスト1
    - ネスト リスト1_1
        - ネスト リスト1_1_1
        - ネスト リスト1_1_2
    - ネスト リスト1_2
- リスト2
- リスト3


1. 番号付きリスト1
    1. 番号付きリスト1_1
    1. 番号付きリスト1_2
1. 番号付きリスト2
1. 番号付きリスト3

~~~ruby
　class Hoge
　  def hoge
　    print 'hoge'
　  end
　end
　~~~

|header1|header2|header3|
|:--|--:|:--:|
|align left|align right|align center|
|a|b|c|

> お世話になります。xxxです。
>
> ご連絡いただいた、バグの件ですが、仕様です。
