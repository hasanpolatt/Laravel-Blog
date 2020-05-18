# AyzaCRM
> Versiyon Kontrol Sistemi.







## Kullanım

Git clone ile projeyi cihazımıza alalım :

```sh
git clone url
```
New branch oluşturarak projeye kendimizi dahil edelim.
```sh
git checkout -b [branchname] 
```
New branch(Phpstorm)
```sh
VCS -> Git -> Branches -> New Branch 
```
## 

## .gitignore

Gitignore file ile projeyi daha verimli hale getirmek için gereksiz olan dosyaları yoksayarız.Projemizde yok sayılan dosyalar:

+ node_modules
+ vendor

Projenin çalışabilmesi için [npm](https://nodejs.org/en/download/) ve [composer](https://getcomposer.org/download/) yüklü olmalıdır.
```sh
'npm install' ile package.json file okunup gerekli node paketleri yüklenir.
```
```sh
'composer install' ile vendor içerisindeki dosyalarımız yüklenir.
```
##

> Proje geliştirilirken commit göndermek için.
>>  VCS -> Git -> Commit File
> > > İlgili commitimizi gönderip Branch'e pushluyoruz.
> > > > Commitler Branche  pushlandıktan sonra Merge Request oluşturuyoruz.
> > > > Diğer kullanıcılar masterdan güncellema almak zorundadırlar.Habersiz bir güncelleme oluşursa öncelikle phpstorm bizlere uyarı verir.Güncelleme aldıktan sonra push işlemi gerçekleştirilir.



 



