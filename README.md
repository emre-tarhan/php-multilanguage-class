Çeviri dosyalarınızın barınacağı dizinin altına çevirileri örnek kullanımda olduğu gibi ```json``` formatında ekledikten sonra tek yapmanız gereken header kısmınıza (her sayfada yer alacağını düşünerek) ```Language.php``` ve ```Language.js``` dosyalarını çağırmak ve birkaç basit ayarı örnektekiyle benzer şekilde yapmak.

```index.php:3``` ve ```Language.js:10,34``` satırlarında dosya yollarını projenize uygun şekilde belirtmelisiniz.  

Kodları incelediğinizde göreceğiniz üzere sayfa ilk açıldığında (mantıken herhangi bir dil seçili olmayacağı için) kullanıcının local dili seçili olarak geliyor  -aslında dili cookiye'ye kaydedip refresh atıyor ve seçili cookie'den çağırıyor 😅- . Eğer kullanıcının dili sizin dil dosyalarınız arasında bulunmuyorsa ```Language.js:28``` de default olarak Ingilizce belirttim. Değiştirmekte özgürsünüz.
