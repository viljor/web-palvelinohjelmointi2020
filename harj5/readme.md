Kuvat molempien tehtävien todisteiksi: https://imgur.com/a/CRujEC4

## Laravel Asennus (Tehtävä 1)

### XAMPP 

Xampp palvelimelle Laravelin asennus ei tuottanut ongelmia ja sain asennuksen toimimaan ensimmäisellä yrityksellä.
![](https://i.imgur.com/8FJEQq3.png)
![](https://i.imgur.com/hgbnfNF.png)


### Ubuntu 18.04

Olen käyttänyt toistaiseksi kurssilla LAMP palvelinta DigitalOcean palvelusta, mutta palvelimella on vain 1GB RAM muistia, joka aiheutti ensimmäisen ongelman asennuksessa, kun yritin tehdä sitä kyseiselle palvelimelle. Yritin lisätä palvelimelle swapfilen helpottaakseen ongelmaa, mutta tämä ei auttanut ja errorista en päässyt yli.

Siirryin tämän jälkeen ehdotettuun Virtualbox ympäristöön ja latasin ensiksi Ubuntu 18.04 LTS server version, mutta installer kaatui koko ajan kesken asennuksen. Yritin antaa virtuaalikoneelle lisää prosessoriytimiä ja RAM muistia ja jopa videomuistia, mutta installer jatkoi kaatumista, joten kokeilin Desktop version asennusta, mutta sekään ei suostunut menemään läpi asennusprosessista. Yritin myös nopeasti asentaa Ubuntu 20.04 version, mutta sekään ei onnistunut. Yritin myös löytää netistä valmiiksi asennetun vdi tiedoston, mutta en saanut sitäkään toimimaan.

Viimeiseksi kokeilin luoda uuden droplet palvelimen ja asentaa siihen PHP:n, Apachen, Composerin ja MySQL:n ja käyttää sitä Laravelin asentamiseen ja onnistuin saamaan 2gb swapfilen avulla saamaan Laravel projektin luonnin menemään läpi, mutta sitten projekti rupesi antamaan erroreita

![](https://i.imgur.com/FQ2xK07.png)

```
    [Wed Jul 01 13:54:38.507911 2020] [php7:warn] [pid 11236] [client 81.197.159.199:58937] PHP Warning:  require(/var/www/proju/public/../vendor/autoload.php): failed to open stream: No such file or directory in /var/www/proju/public/index.php on line 24
    [Wed Jul 01 13:54:38.507965 2020] [php7:error] [pid 11236] [client 81.197.159.199:58937] PHP Fatal error:  require(): Failed opening required '/var/www/proju/public/../vendor/autoload.php' (include_path='.:/usr/share/php') in /var/www/proju/public/index.php on line 24
```

Onnistuin selvittämään errorien lähteeksi `composer install` komennon puuttumisen, joten ajoin sitä läpi itsekseen ja selvisi, että PHP extensionit php-zip, php-mbstring ja php-xml tarvittiin jonka jälkeen sain vihdoin Laravelin asennettua palvelimelle.

![](https://i.imgur.com/XcREr1J.png)

![](https://i.imgur.com/ra5rIVo.png)
Vaadittu näkymä

Default Laravel-app on nähtävissä osoitteessa: http://134.122.81.12 
Omaleiska view on nähtävissä: http://134.122.81.12/omalaravel

## Tehtävä 2

En kohdannut minkään testien aikana ongelmia, minulla kesti hetki tajuta, että viimeisen testin /child route piti lisätä erikseen web.php tiedostoon, koska tätä ei ohjeessa mainittu, mutta älysin tämänkin melko pian,

![](https://i.imgur.com/L1cWMUL.png)
![](https://i.imgur.com/XFViOxm.png)
![](https://i.imgur.com/3qYUbSj.png)
![](https://i.imgur.com/vl3oFgT.png)
![](https://i.imgur.com/x3CS28u.png)
![](https://i.imgur.com/u3IFt4a.png)
![](https://i.imgur.com/q7DDv3n.png)
![](https://i.imgur.com/f3tzB4G.png)
