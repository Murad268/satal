<?php
   session_start();
   require_once('./vendor/mysql.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/style.css">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Bebas+Neue&family=Exo+2:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Mukta:wght@200;300;400;500;600;700;800&family=Open+Sans:wght@300;400;500;600;700;800&family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Raleway:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&family=Rubik+Burned&family=Russo+One&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
   <title>Document</title>
</head>
<body>
   <header class="header">  
         <div class="nav">
               <div class="container">
                  <div class="navbar__wrapper">
                  <div class="nav__left">
                  <div class="nav__left__link"><a href="">Turbo.az</a></div>
                  <div class="nav__left__link"><a href="">Bina.az</a></div>
                  <div class="nav__left__link"><a href="">Boss.az</a></div>
               </div>
               <div class="nav_right">
                  <div class="nav_right__link">
                     <a href="">0556719508</a>
                  </div>
                  <div class="nav_right__link">
                     <a href="">Yardim</a>
                  </div>
                  <div class="nav_right__link icon_nav">
                     <div class="hearth">♥</div>
                     <a href="">Seçilmişlər</a>
                  </div>
                  <div class="nav_right__link icon_nav">
                     <?php 
                          if(isset($_SESSION['user']) == null) {
                           echo "<div class=\"icon\"><img src=\"./assets/icons/images.png\" alt=\"\"></div>";
                           echo "<a href=\"in.php\">Giriş</a>";
                         } else {
                           $avatar = $_SESSION['user']['avatar'];
                           echo "<div class=\"icon\"><img src=\"$avatar\" alt=\"\"></div>";
                           echo " <a href=\"vendor/logout.php\">Çıxış</a>";
                         }
                     ?>
                    
                  </div>
               </div>
            </div>
         </div>
     </div>
      <div class="navbar__section">
         <div class="container">
            <div class="navbar__section__wrapper">
               <div class="logolink"><a href="">TAP.AZ</a></div>
               <div>
                  <div outline="none" class="dropdown">
                  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                     Kataloq
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                     <li><a class="dropdown-item" href="#">Action</a></li>
                     <li><a class="dropdown-item" href="#">Another action</a></li>
                     <li><a class="dropdown-item" href="#">Something else here</a></li>
                  </ul>
                  </div>
               </div>
               <div>
               <form class="search__form" action="">
                  <input type="search" name="" id="" placeholder="Əşya və ya xidmət axtarışı">
                  <select name="" id="">
                     <option>Şəhər</option>
                     <option value="">Bakı</option>
                     <option value="">Gəncə</option>
                     <option value="">Sumqayıt</option>
                  </select>
                  <div class="search__button">
                     <button>Tap</button>
                  </div>
               </form>
            </div>
               <div class="catalog__button"><button><i class="fa fa-plus" aria-hidden="true"></i> Yeni elan</button></div>
            </div>
         </div>
      </div>
   </header>
   <section class="catalog">
     <div class="container">
         <div class="catalog__wrapper">
            <div class="catalog__item">
               <div class="catalog__item__icon">
                  <img src="./assets/images/house.png" alt="">
               </div>
               <div class="catalog__item__title">
                  Ev və bağ üçün
               </div>
            </div>
            <div class="catalog__item">
               <div class="catalog__item__icon">
               <img src="./assets/images/traffic.png" alt="">
               </div>
               <div class="catalog__item__title">
                  Nəqliyyat
               </div>
            </div>
            <div class="catalog__item">
               <div class="catalog__item__icon">
               <img src="./assets/images/device.png" alt="">
               </div>
               <div class="catalog__item__title">
                  Elektronika
               </div>
            </div>
            <div class="catalog__item">
               <div class="catalog__item__icon">
               <img src="./assets/images/building-11520.png" alt="">
               </div>
               <div class="catalog__item__title">
                  Daşınmaz əmlak
               </div>
            </div>
            <div class="catalog__item">
               <div class="catalog__item__icon">
               <img src="./assets/images/businesss.png" alt="">
               </div>
               <div class="catalog__item__title">
                  Xidmətlər və biznes
               </div>
            </div>
            <div class="catalog__item">
               <div class="catalog__item__icon">
                  <img src="./assets/images/hobbies.png" alt="">
               </div>
               <div class="catalog__item__title">
                  Hobbi və asudə
               </div>
            </div>
            <div class="catalog__item">
               <div class="catalog__item__icon">
               <img src="./assets/images/child.png" alt="">
               </div>
               <div class="catalog__item__title">
                  Uşaq aləmi
               </div>
            </div>
            <div class="catalog__item">
               <div class="catalog__item__icon">
                  <img src="./assets/images/pet.png" alt="">
               </div>
               <div class="catalog__item__title">
                  Heyvanlar
               </div>
            </div>
            <div class="catalog__item">
               <div class="catalog__item__icon">
                  <img src="./assets/images/job.png" alt="">
               </div>
               <div class="catalog__item__title">
                  İş elanları
               </div>
            </div>
         </div>
         <div class="catalog__links">
            <div class="catalog__links__main"><a href="">Bütün elanlar</a></div>
            <div class="catalog__links__wrapper">
               <div class="catalog__link"><a href="">Mebellər</a></div>
               <div class="catalog__link"><a href="">Qab-qacaq və məktəb ləvazimatları</a></div>
               <div class="catalog__link"><a href="">Xalçalar və aksesuarlar</a></div>
               <div class="catalog__link"><a href="">Bitkilər</a></div>
               <div class="catalog__link"><a href="">Təmir və tikinti</a></div>
               <div class="catalog__link"><a href="">Dekor və interyer</a></div>
               <div class="catalog__link"><a href="">Ev və bağ üçün işıqlandırma</a></div>
               <div class="catalog__link"><a href="">Ərzaq</a></div>
               <div class="catalog__link"><a href="">Məişət texnikası</a></div>
               <div class="catalog__link"><a href="">Bağ və bostan</a></div>
               <div class="catalog__link"><a href="">Ev tesktili</a></div>
            </div>
         </div>
         <div class="catalog__links">
            <div class="catalog__links__main"><a href="">Bütün elanlar</a></div>
            <div class="catalog__links__wrapper">
               <div class="catalog__link"><a href="">Ehtiyat hissələri və aksesuarlar</a></div>
               <div class="catalog__link"><a href="">Avtobuslar və xüsusi texnika</a></div>
               <div class="catalog__link"><a href="">Avtomobillər</a></div>
               <div class="catalog__link"><a href="">Aqrotexnika</a></div>
               <div class="catalog__link"><a href="">Motoskiletlər və mopedlər</a></div>
               <div class="catalog__link"><a href="">Su nəqliyyatı</a></div>
            </div>
         </div>

         <div class="catalog__links">
            <div class="catalog__links__main"><a href="">Bütün elanlar</a></div>
            <div class="catalog__links__wrapper">
               <div class="catalog__link"><a href="">Telefonlar</a></div>
               <div class="catalog__link"><a href="">Komponentlər və monitorlar</a></div>
               <div class="catalog__link"><a href="">Televizorlar və aksesuarlar</a></div>
               <div class="catalog__link"><a href="">Ofis avadanlığı və istehlak</a></div>
               <div class="catalog__link"><a href="">Planşet və elektron kitablar</a></div>
               <div class="catalog__link"><a href="">Kompüter aksesuarları</a></div>
               <div class="catalog__link"><a href="">Oyunlar pultlar və proqramlar</a></div>
               <div class="catalog__link"><a href="">Nömrələr və simkartlar</a></div>
               <div class="catalog__link"><a href="">Foto texnika</a></div>
               <div class="catalog__link"><a href="">Notbuklar və netbuklar</a></div>
               <div class="catalog__link"><a href="">Audio və video</a></div>
               <div class="catalog__link"><a href="">Masaüstü kompüterlər</a></div>
               <div class="catalog__link"><a href="">Smart saat və qolbaqlar</a></div>
            </div>
         </div>

         <div class="catalog__links">
            <div class="catalog__links__main"><a href="">Bütün elanlar</a></div>
            <div class="catalog__links__wrapper">
               <div class="catalog__link"><a href="">Mənzillər</a></div>
               <div class="catalog__link"><a href="">Obyektlər və ofislər</a></div>
               <div class="catalog__link"><a href="">Villalarç bağ evləri</a></div>
               <div class="catalog__link"><a href="">Qarajlar</a></div>
               <div class="catalog__link"><a href="">Torpaq</a></div>
               <div class="catalog__link"><a href="">Xaricdə əmlak</a></div>
            </div>
         </div>

         <div class="catalog__links">
            <div class="catalog__links__main"><a href="">Bütün elanlar</a></div>
            <div class="catalog__links__wrapper">
               <div class="catalog__link"><a href="">Biznes üçün avadanlıq</a></div>
               <div class="catalog__link"><a href="">Nəqliyyat və logistika</a></div>
               <div class="catalog__link"><a href="">Reklam, dizayn və poliqrafiya</a></div>
               <div class="catalog__link"><a href="">Mebel yığılması və təmiri</a></div>
               <div class="catalog__link"><a href="">Avadanlıqların quraşdırılması</a></div>
               <div class="catalog__link"><a href="">Gözəllik, sağlamlıq</a></div>
               <div class="catalog__link"><a href="">Mühasibat xidmətləri</a></div>
               <div class="catalog__link"><a href="">Hüquq xidmətləri</a></div>
               <div class="catalog__link"><a href="">Təmir və tikinti</a></div>
               <div class="catalog__link"><a href="">Texnika təmiri</a></div>
               <div class="catalog__link"><a href="">İT, internet, telekom</a></div>
               <div class="catalog__link"><a href="">Avadanlığın icarəsi</a></div>
               <div class="catalog__link"><a href="">Təmizlik</a></div>
               <div class="catalog__link"><a href="">Foto və video çəkiliş xidmətləri</a></div>
               <div class="catalog__link"><a href="">Tibbi xidmətlər</a></div>
               <div class="catalog__link"><a href="">Təhlükəsizlik sistemlərinin qurulması</a></div>
               <div class="catalog__link"><a href="">Təlim, hazırlıq kursları</a></div>
               <div class="catalog__link"><a href="">Digər</a></div>
               <div class="catalog__link"><a href="">Avtoservis və diaqnostika</a></div>
               <div class="catalog__link"><a href="">Qidalanma, keyterinq</a></div>
               <div class="catalog__link"><a href="">Musiqi, əyləncə və tədbirlər</a></div>
               <div class="catalog__link"><a href="">Dayələ, baxıcılar</a></div>
               <div class="catalog__link"><a href="">Sığorta xidmətləri</a></div>
            </div>
         </div>

         <div class="catalog__links">
            <div class="catalog__links__main"><a href="">Bütün elanlar</a></div>
            <div class="catalog__links__wrapper">
               <div class="catalog__link"><a href="">İdman və asudə</a></div>
               <div class="catalog__link"><a href="">Kolleksiya</a></div>
               <div class="catalog__link"><a href="">Tanışlıq</a></div>
               <div class="catalog__link"><a href="">Velosipedlər</a></div>
               <div class="catalog__link"><a href="">Kitab və jurnallar</a></div>
               <div class="catalog__link"><a href="">Biletlər və səyahət</a></div>
               <div class="catalog__link"><a href="">Musiqi alətləri</a></div>
               <div class="catalog__link"><a href="">Ovçuluq və balıqçılıq</a></div>
            </div>
         </div>

         <div class="catalog__links">
            <div class="catalog__links__main"><a href="">Bütün elanlar</a></div>
            <div class="catalog__links__wrapper">
               <div class="catalog__link"><a href="">Məktəblilər üçün</a></div>
               <div class="catalog__link"><a href="">Oyuncaqları</a></div>
               <div class="catalog__link"><a href="">Uşaq avtomobilləri</a></div>
               <div class="catalog__link"><a href="">Avtomobil oturacaqları</a></div>
               <div class="catalog__link"><a href="">Yürütəclər</a></div>
               <div class="catalog__link"><a href="">Uşaq geyimi</a></div>
               <div class="catalog__link"><a href="">Uşaq arabaları</a></div>
               <div class="catalog__link"><a href="">Digər</a></div>
               <div class="catalog__link"><a href="">Uşaq daşıyıcıları</a></div>
               <div class="catalog__link"><a href="">Manejlər</a></div>
               <div class="catalog__link"><a href="">Uşaq çarpayıları və beşiklər</a></div>
               <div class="catalog__link"><a href="">Uşaq mebeli</a></div>
               <div class="catalog__link"><a href="">Qidalanma üçün uşaq oturacaqları</a></div>
               <div class="catalog__link"><a href="">Uşaq çsürüşkınləri və oyun meydançaları</a></div>
               <div class="catalog__link"><a href="">Uşaq qidası</a></div>
            </div>
         </div>

         <div class="catalog__links">
            <div class="catalog__links__main"><a href="">Bütün elanlar</a></div>
            <div class="catalog__links__wrapper">
               <div class="catalog__link"><a href="">Quşlar</a></div>
               <div class="catalog__link"><a href="">Akvarium və balıqlar</a></div>
               <div class="catalog__link"><a href="">Dovşanlar(</a></div>
               <div class="catalog__link"><a href="">Gəmiricilər</a></div>
               <div class="catalog__link"><a href="">İtlər</a></div>
               <div class="catalog__link"><a href="">Pişiklər</a></div>
               <div class="catalog__link"><a href="">Atlar</a></div>
               <div class="catalog__link"><a href="">Heyvanlar üçün məhsullar</a></div>
               <div class="catalog__link"><a href="">K/t heyvanları</a></div>
               <div class="catalog__link"><a href="">Digər heyvanlar</a></div>
            </div>
         </div>

         <div class="catalog__links">
            <div class="catalog__links__main"><a href="">Bütün elanlar</a></div>
            <div class="catalog__links__wrapper">
               <div class="catalog__link"><a href="">Vakansiyalar</a></div>
               <div class="catalog__link"><a href="">İş axtarıram</a></div>
            </div>
         </div>
     </div>
   </section>


   <section class="announcements">
      <div class="container">
        
         <div class="announcements__vip">
         <h4 class="announcements__mainTitle">VIP ELANLAR</h4>
            <div class="announcements__wrapper">
               <?php
                  $goodFetch = $dbh->prepare("SELECT * FROM announcement__list WHERE status = :status");
                  $goodFetch->execute(array(
                     "status" => "vip"
                  ));
                  while($goodFetchs=$goodFetch->fetch(PDO::FETCH_ASSOC)) { 
                     $d = new DateTime($goodFetchs["date"]);
                     ?> 
                     <div class="announcements__item">
                        <img src="<?='assets/goodImgs/'.$goodFetchs["img"]?>" alt="">
                        <div class="add__favorites"><i class="fa-regular  fa-heart" aria-hidden="true"></i></div>
                        <?php
                           if($goodFetchs["isShop"] == "yes") {
                              echo "<div class=\"isShop\">Mağaza</div>";
                           } else {
                              echo null;
                           }
                        ?>
                        
                        <div class="status"><i style="color: orange" class="fa-solid fa-crown"></i></div>
                        <div class="announcements__item__body">
                           <div class="announcements__item__price"><?=$goodFetchs["price"]?> azn</div>
                           <div class="announcements__item__title"><?=$goodFetchs["title"]?></div>
                           <div class="announcements__item__footer">
                              <div class="announcements__item__city"><?=$goodFetchs["city"]?></div>
                              <div class="announcements__item__date"><?=$d->format('d-F-Y')?></div>
                           </div>
                        </div>
                     </div>
                   <?php }
               ?> 
            </div>
         </div>
         <div class="announcements__premium">
            <h4 class="announcements__mainTitle">PREMİUM ELANLAR</h4>
            <div class="announcements__wrapper">
               <?php
                  $goodFetch = $dbh->prepare("SELECT * FROM announcement__list WHERE status = :status");
                  $goodFetch->execute(array(
                     "status" => "premium"
                  ));
                  while($goodFetchs=$goodFetch->fetch(PDO::FETCH_ASSOC)) { 
                     $d = new DateTime($goodFetchs["date"]);
                     ?> 
                     <div class="announcements__item">
                        <img src="<?='assets/goodImgs/'.$goodFetchs["img"]?>" alt="">
                        <div class="add__favorites"><i class="fa-regular  fa-heart" aria-hidden="true"></i></div>
                        <?php
                           if($goodFetchs["isShop"] == "yes") {
                              echo "<div class=\"isShop\">Mağaza</div>";
                           } else {
                              echo null;
                           }
                        ?>
                        <div class="status"><i style="color: red" class="fa-solid fa-hand-holding-heart"></i></div>
                        <div class="announcements__item__body">
                           <div class="announcements__item__price"><?=$goodFetchs["price"]?> azn</div>
                           <div class="announcements__item__title"><?=$goodFetchs["title"]?></div>
                           <div class="announcements__item__footer">
                              <div class="announcements__item__city"><?=$goodFetchs["city"]?></div>
                              <div class="announcements__item__date"><?=$d->format('d-F-Y')?></div>
                           </div>
                        </div>
                     </div>
                   <?php }
               ?> 
            </div>
         </div>
         <div class="announcements__simple">
         <h4 class="announcements__mainTitle">ELANLAR</h4>
            <div class="announcements__wrapper">
               <?php
                  $goodFetch = $dbh->prepare("SELECT * FROM announcement__list WHERE status = :status");
                  $goodFetch->execute(array(
                     "status" => "simple"
                  ));
                  while($goodFetchs=$goodFetch->fetch(PDO::FETCH_ASSOC)) { 
                     $d = new DateTime($goodFetchs["date"]);
                     ?> 
                     <div class="announcements__item">
                        <img src="<?='assets/goodImgs/'.$goodFetchs["img"]?>" alt="">
                        <div class="add__favorites"><i class="fa-regular  fa-heart" aria-hidden="true"></i></div>
                        <?php
                           if($goodFetchs["isShop"] == "yes") {
                              echo "<div class=\"isShop\">Mağaza</div>";
                           } else {
                              echo null;
                           }
                        ?>
                        <div class="status">Vip</div>
                        <div class="announcements__item__body">
                           <div class="announcements__item__price"><?=$goodFetchs["price"]?> azn</div>
                           <div class="announcements__item__title"><?=$goodFetchs["title"]?></div>
                           <div class="announcements__item__footer">
                              <div class="announcements__item__city"><?=$goodFetchs["city"]?></div>
                              <div class="announcements__item__date"><?=$d->format('d-F-Y')?></div>
                           </div>
                        </div>
                     </div>
                   <?php }
               ?> 
            </div>
         </div>
      </div>
   </section>
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
   <script src="./js/script.js"></script>
</body>
</html>