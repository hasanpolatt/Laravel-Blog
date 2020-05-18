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
```sh
Proje dosyalarını git add . ile versiyon sistemine ekleyelim.git pull origin master
```
## 

## .gitignore

.gitignore file ile projeyi daha verimli hale getirmek için gereksiz olan dosyaları yoks ayarız.Projemizde yok sayılan dosyalar:

+ node_modules
+ vendor

Projenin tüm dosyaları,paketleriyle çalışabilmesi için [npm](https://nodejs.org/en/download/) ve [composer](https://getcomposer.org/download/) yüklü olmalıdır.
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
> > > > > Yapacağımız her commitin sonuna ismimizi yazalım böylece proje incelendiğinde en son kimin projede nereye müdahele ettiği,nerede çalıştığı rahat bir şekilde anlaşılır.

## Temel git komutları

| Komut | Tanım |
| ------ | ----------- |
| git init   | İlgili dizine .git dosyasını oluşturur.Bu dosya bizim .git ayarlarımızın saklandığı dosyadır. |
| git status | Çalıştığımız projede son yapılan değişiklikler listelenir.|
| git add | Dizindeki belirtilen dosyaların versiyonlanmasını sağlar git add . ile dizindeki tüm dosyalar versiyonlanır. |
| git commit -m     | Commit mesajı. |
| git checkout -b 'isim' | Branch ismi kontrol eder uygun ise aktif branch olarak seçilir.|
| git remote add origin 'https:...' | Origin'e adresteki sunucuyla bağlantıyı tanımlar. |
| git remote -v | Tanımlı olan remote'ler gösterilir.|
| git remote remove 'remotename' | İlgili remote kaldırılır. |
| git pull origin 'branchname' | Branch isimine tanımlı origindeki projeyi çeker. |
| git branch -a | Projede yer alan branchleri listeler.|
| git push -u origin branchname | Origine tanımlı git reposuna branchname adındaki branch ile push işlemi gerçekleştirir.|



 



