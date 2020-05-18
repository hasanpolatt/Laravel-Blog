# CRM
CRM Uygulaması Ayzasoft

## Kullanım

Terminal kullananlar git clone ile projeyi cihazımıza almak için :

```sh
git clone url
```
Phpstorm kullananlar :
```sh
VCS->Get From Version Control
```

Terminalden yeni branch oluşturmak için :
```sh
git checkout -b [branchname] 
```
Phpstorm üzeriden yeni branch oluşturmak için :
```sh
VCS -> Git -> Branches -> New Branch 
```
Tüm proje dosyalarını versiyonlamak için :
```sh
git add . veya phpstormdan kök dizine tıklayıp kısayol(CTRL+ALT+A) veya sağ tıklayıp git add..
```
## 

## .gitignore

Projeyi daha verimli hale getirmek için herkes tarafından aynı dizinlerde barınan(paket dosya dizinleri,ide bilgisini barındıran dosya, veritabanı dosyaları ..) gibi dosyalar .gitignore eklenir.Projemizde yok sayılan dosyalar:

+ node_modules
+ vendor

Projenin tüm dosyaları,paketleriyle çalışabilmesi için [npm](https://nodejs.org/en/download/) ve [composer](https://getcomposer.org/download/) yüklü olmalıdır.
```sh
'npm install' ile package.json file okunup gerekli node paketleri yüklenir.
```
```sh
'npm' is not recognized as an internal or external command,
operable program or batch file.
```
Hatası alıyosanız kullandığınız ide'yi veya terminali npmi kurtuduktan sonra yeniden başlatın.
```sh
'composer install' ile vendor içerisindeki dosyalarımız yüklenir.
```


> Proje geliştirilirken commit göndermek için.
>>  VCS -> Git -> Commit File
> > > İlgili commitimizi gönderip Branch'e pushluyoruz.
> > > > Commitler Branche  pushlandıktan sonra Merge Request oluşturuyoruz.
> > > > Diğer kullanıcılar masterdan güncellema almak zorundadırlar.Habersiz bir güncelleme oluşursa öncelikle phpstorm bizlere uyarı verir.Güncelleme aldıktan sonra push işlemi gerçekleştirilir.
> > > > > Yapacağımız her commitin sonuna ismimizi yazalım böylece proje incelendiğinde en son kimin projede nereye müdahele ettiği,nerede çalıştığı rahat bir şekilde anlaşılır.

Vendora yeni bir paket yüklenmesi dahilinde hangi paketin yüklendiği
```sh
composer require paketismi
```
committe belirtilmeli ve ``` composer update ``` yapılmalıdır.
##

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



 



