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
                     <div class="hearth">???</div>
                     <a href="">Se??ilmi??l??r</a>
                  </div>
                  <div class="nav_right__link icon_nav">
                     <?php 
                          if(isset($_SESSION['user']) == null) {
                           echo "<div class=\"icon\"><img src=\"./assets/icons/images.png\" alt=\"\"></div>";
                           echo "<a href=\"in.php\">Giri??</a>";
                         } else {
                           $avatar = $_SESSION['user']['avatar'];
                           echo "<div class=\"icon\"><img src=\"$avatar\" alt=\"\"></div>";
                           echo " <a href=\"vendor/logout.php\">????x????</a>";
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
                  <input type="search" name="" id="" placeholder="????ya v?? ya xidm??t axtar??????">
                  <select name="" id="">
                     <option>????h??r</option>
                     <option value="">Bak??</option>
                     <option value="">G??nc??</option>
                     <option value="">Sumqay??t</option>
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
                  Ev v?? ba?? ??????n
               </div>
            </div>
            <div class="catalog__item">
               <div class="catalog__item__icon">
               <img src="./assets/images/traffic.png" alt="">
               </div>
               <div class="catalog__item__title">
                  N??qliyyat
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
                  Da????nmaz ??mlak
               </div>
            </div>
            <div class="catalog__item">
               <div class="catalog__item__icon">
               <img src="./assets/images/businesss.png" alt="">
               </div>
               <div class="catalog__item__title">
                  Xidm??tl??r v?? biznes
               </div>
            </div>
            <div class="catalog__item">
               <div class="catalog__item__icon">
                  <img src="./assets/images/hobbies.png" alt="">
               </div>
               <div class="catalog__item__title">
                  Hobbi v?? asud??
               </div>
            </div>
            <div class="catalog__item">
               <div class="catalog__item__icon">
               <img src="./assets/images/child.png" alt="">
               </div>
               <div class="catalog__item__title">
                  U??aq al??mi
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
                  ???? elanlar??
               </div>
            </div>
         </div>
         <div class="catalog__links">
            <div class="catalog__links__main"><a href="">B??t??n elanlar</a></div>
            <div class="catalog__links__wrapper">
               <div class="catalog__link"><a href="">Mebell??r</a></div>
               <div class="catalog__link"><a href="">Qab-qacaq v?? m??kt??b l??vazimatlar??</a></div>
               <div class="catalog__link"><a href="">Xal??alar v?? aksesuarlar</a></div>
               <div class="catalog__link"><a href="">Bitkil??r</a></div>
               <div class="catalog__link"><a href="">T??mir v?? tikinti</a></div>
               <div class="catalog__link"><a href="">Dekor v?? interyer</a></div>
               <div class="catalog__link"><a href="">Ev v?? ba?? ??????n i????qland??rma</a></div>
               <div class="catalog__link"><a href="">??rzaq</a></div>
               <div class="catalog__link"><a href="">M??i????t texnikas??</a></div>
               <div class="catalog__link"><a href="">Ba?? v?? bostan</a></div>
               <div class="catalog__link"><a href="">Ev tesktili</a></div>
            </div>
         </div>
         <div class="catalog__links">
            <div class="catalog__links__main"><a href="">B??t??n elanlar</a></div>
            <div class="catalog__links__wrapper">
               <div class="catalog__link"><a href="">Ehtiyat hiss??l??ri v?? aksesuarlar</a></div>
               <div class="catalog__link"><a href="">Avtobuslar v?? x??susi texnika</a></div>
               <div class="catalog__link"><a href="">Avtomobill??r</a></div>
               <div class="catalog__link"><a href="">Aqrotexnika</a></div>
               <div class="catalog__link"><a href="">Motoskiletl??r v?? mopedl??r</a></div>
               <div class="catalog__link"><a href="">Su n??qliyyat??</a></div>
            </div>
         </div>

         <div class="catalog__links">
            <div class="catalog__links__main"><a href="">B??t??n elanlar</a></div>
            <div class="catalog__links__wrapper">
               <div class="catalog__link"><a href="">Telefonlar</a></div>
               <div class="catalog__link"><a href="">Komponentl??r v?? monitorlar</a></div>
               <div class="catalog__link"><a href="">Televizorlar v?? aksesuarlar</a></div>
               <div class="catalog__link"><a href="">Ofis avadanl?????? v?? istehlak</a></div>
               <div class="catalog__link"><a href="">Plan??et v?? elektron kitablar</a></div>
               <div class="catalog__link"><a href="">Komp??ter aksesuarlar??</a></div>
               <div class="catalog__link"><a href="">Oyunlar pultlar v?? proqramlar</a></div>
               <div class="catalog__link"><a href="">N??mr??l??r v?? simkartlar</a></div>
               <div class="catalog__link"><a href="">Foto texnika</a></div>
               <div class="catalog__link"><a href="">Notbuklar v?? netbuklar</a></div>
               <div class="catalog__link"><a href="">Audio v?? video</a></div>
               <div class="catalog__link"><a href="">Masa??st?? komp??terl??r</a></div>
               <div class="catalog__link"><a href="">Smart saat v?? qolbaqlar</a></div>
            </div>
         </div>

         <div class="catalog__links">
            <div class="catalog__links__main"><a href="">B??t??n elanlar</a></div>
            <div class="catalog__links__wrapper">
               <div class="catalog__link"><a href="">M??nzill??r</a></div>
               <div class="catalog__link"><a href="">Obyektl??r v?? ofisl??r</a></div>
               <div class="catalog__link"><a href="">Villalar?? ba?? evl??ri</a></div>
               <div class="catalog__link"><a href="">Qarajlar</a></div>
               <div class="catalog__link"><a href="">Torpaq</a></div>
               <div class="catalog__link"><a href="">Xaricd?? ??mlak</a></div>
            </div>
         </div>

         <div class="catalog__links">
            <div class="catalog__links__main"><a href="">B??t??n elanlar</a></div>
            <div class="catalog__links__wrapper">
               <div class="catalog__link"><a href="">Biznes ??????n avadanl??q</a></div>
               <div class="catalog__link"><a href="">N??qliyyat v?? logistika</a></div>
               <div class="catalog__link"><a href="">Reklam, dizayn v?? poliqrafiya</a></div>
               <div class="catalog__link"><a href="">Mebel y??????lmas?? v?? t??miri</a></div>
               <div class="catalog__link"><a href="">Avadanl??qlar??n qura??d??r??lmas??</a></div>
               <div class="catalog__link"><a href="">G??z??llik, sa??laml??q</a></div>
               <div class="catalog__link"><a href="">M??hasibat xidm??tl??ri</a></div>
               <div class="catalog__link"><a href="">H??quq xidm??tl??ri</a></div>
               <div class="catalog__link"><a href="">T??mir v?? tikinti</a></div>
               <div class="catalog__link"><a href="">Texnika t??miri</a></div>
               <div class="catalog__link"><a href="">??T, internet, telekom</a></div>
               <div class="catalog__link"><a href="">Avadanl??????n icar??si</a></div>
               <div class="catalog__link"><a href="">T??mizlik</a></div>
               <div class="catalog__link"><a href="">Foto v?? video ????kili?? xidm??tl??ri</a></div>
               <div class="catalog__link"><a href="">Tibbi xidm??tl??r</a></div>
               <div class="catalog__link"><a href="">T??hl??k??sizlik sisteml??rinin qurulmas??</a></div>
               <div class="catalog__link"><a href="">T??lim, haz??rl??q kurslar??</a></div>
               <div class="catalog__link"><a href="">Dig??r</a></div>
               <div class="catalog__link"><a href="">Avtoservis v?? diaqnostika</a></div>
               <div class="catalog__link"><a href="">Qidalanma, keyterinq</a></div>
               <div class="catalog__link"><a href="">Musiqi, ??yl??nc?? v?? t??dbirl??r</a></div>
               <div class="catalog__link"><a href="">Day??l??, bax??c??lar</a></div>
               <div class="catalog__link"><a href="">S????orta xidm??tl??ri</a></div>
            </div>
         </div>

         <div class="catalog__links">
            <div class="catalog__links__main"><a href="">B??t??n elanlar</a></div>
            <div class="catalog__links__wrapper">
               <div class="catalog__link"><a href="">??dman v?? asud??</a></div>
               <div class="catalog__link"><a href="">Kolleksiya</a></div>
               <div class="catalog__link"><a href="">Tan????l??q</a></div>
               <div class="catalog__link"><a href="">Velosipedl??r</a></div>
               <div class="catalog__link"><a href="">Kitab v?? jurnallar</a></div>
               <div class="catalog__link"><a href="">Biletl??r v?? s??yah??t</a></div>
               <div class="catalog__link"><a href="">Musiqi al??tl??ri</a></div>
               <div class="catalog__link"><a href="">Ov??uluq v?? bal??q????l??q</a></div>
            </div>
         </div>

         <div class="catalog__links">
            <div class="catalog__links__main"><a href="">B??t??n elanlar</a></div>
            <div class="catalog__links__wrapper">
               <div class="catalog__link"><a href="">M??kt??blil??r ??????n</a></div>
               <div class="catalog__link"><a href="">Oyuncaqlar??</a></div>
               <div class="catalog__link"><a href="">U??aq avtomobill??ri</a></div>
               <div class="catalog__link"><a href="">Avtomobil oturacaqlar??</a></div>
               <div class="catalog__link"><a href="">Y??r??t??cl??r</a></div>
               <div class="catalog__link"><a href="">U??aq geyimi</a></div>
               <div class="catalog__link"><a href="">U??aq arabalar??</a></div>
               <div class="catalog__link"><a href="">Dig??r</a></div>
               <div class="catalog__link"><a href="">U??aq da????y??c??lar??</a></div>
               <div class="catalog__link"><a href="">Manejl??r</a></div>
               <div class="catalog__link"><a href="">U??aq ??arpay??lar?? v?? be??ikl??r</a></div>
               <div class="catalog__link"><a href="">U??aq mebeli</a></div>
               <div class="catalog__link"><a href="">Qidalanma ??????n u??aq oturacaqlar??</a></div>
               <div class="catalog__link"><a href="">U??aq ??s??r????k??nl??ri v?? oyun meydan??alar??</a></div>
               <div class="catalog__link"><a href="">U??aq qidas??</a></div>
            </div>
         </div>

         <div class="catalog__links">
            <div class="catalog__links__main"><a href="">B??t??n elanlar</a></div>
            <div class="catalog__links__wrapper">
               <div class="catalog__link"><a href="">Qu??lar</a></div>
               <div class="catalog__link"><a href="">Akvarium v?? bal??qlar</a></div>
               <div class="catalog__link"><a href="">Dov??anlar(</a></div>
               <div class="catalog__link"><a href="">G??miricil??r</a></div>
               <div class="catalog__link"><a href="">??tl??r</a></div>
               <div class="catalog__link"><a href="">Pi??ikl??r</a></div>
               <div class="catalog__link"><a href="">Atlar</a></div>
               <div class="catalog__link"><a href="">Heyvanlar ??????n m??hsullar</a></div>
               <div class="catalog__link"><a href="">K/t heyvanlar??</a></div>
               <div class="catalog__link"><a href="">Dig??r heyvanlar</a></div>
            </div>
         </div>

         <div class="catalog__links">
            <div class="catalog__links__main"><a href="">B??t??n elanlar</a></div>
            <div class="catalog__links__wrapper">
               <div class="catalog__link"><a href="">Vakansiyalar</a></div>
               <div class="catalog__link"><a href="">???? axtar??ram</a></div>
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
                              echo "<div class=\"isShop\">Ma??aza</div>";
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
            <h4 class="announcements__mainTitle">PREM??UM ELANLAR</h4>
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
                              echo "<div class=\"isShop\">Ma??aza</div>";
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
                              echo "<div class=\"isShop\">Ma??aza</div>";
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