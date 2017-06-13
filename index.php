

          <?php
          include('header.php');
          $host = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

          if($host == "dotigear.com/")
          {
           ?>
        <div class="owl-carousel owl-loaded owl-nav-dots-inner" data-options='{"items":1,"loop":true,"autoplay":true,"autoplayTimeout":5000}'>
            <div class="owl-item">
                <div class="slider-item" style="background-color:#3D3D3D;">
                    <div class="container">
                        <div class="slider-item-inner">
                            <div class="slider-item-caption-left slider-item-caption-white">
                                <h3 class="slider-item-caption-title" style="position: relative;top: -85px;">SHIRTS AS UNIQUE AS YOU ARE</h3>
                            </div>
                            <img class="slider-item-img-right" src="img/banner1.png" alt="Image Alternative text" title="Image Title" style="top: 46%; width: 34%;" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-item">
                <div class="slider-item" style="background-color:#3c763d;">
                    <div class="container">
                        <div class="slider-item-inner">
                            <div class="slider-item-caption-right slider-item-caption-white">
                              <h3 class="slider-item-caption-title" style="position: relative;top: -85px;">SHIRTS AS UNIQUE AS YOU ARE</h3>

                            </div>
                            <img class="slider-item-img-left" src="img/banner2.png" alt="Image Alternative text" title="Image Title" style="transform:translateY(-50%) rotate(14deg); width: 37%;" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-item">
                <div class="slider-item" style="background-color:#93282B;">
                    <div class="container">
                        <div class="slider-item-inner">
                            <div class="slider-item-caption-left slider-item-caption-white">
                              <h3 class="slider-item-caption-title" style="position: relative;top: -85px;">SHIRTS AS UNIQUE AS YOU ARE</h3>

                            </div>
                            <img class="slider-item-img-right" src="img/banner3.png" alt="Image Alternative text" title="Image Title" style="width: 37%" />
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="gap"></div>

<!-- Mullti Search -->


        <div class="container">
          <div class="row">&#13;
          			<div class="col-md-9">&#13;
          				<div class="row">&#13;


          					<div class="col-sm-6">&#13;
          						<div class="pet_search search_panel">&#13;
          							<span class="headlineStyle text-center">Love your pet?</span>&#13;
          							<form method="get">&#13;
          									<div class="input-group col-md-8 col-md-offset-2">&#13;
          										<!-- <input type="hidden" name="cId" value="62"/> -->
                              <input required="true" type="text" name="pet" class="form-control" placeholder="What's your favorite pet?"/>
                              <span class="input-group-btn">&#13;
          											<button  class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-search"/></button>&#13;
          										</span>&#13;
          									</div>&#13;
          							</form>&#13;
          						</div>&#13;
          						<br/></div>&#13;


          					<div class="col-sm-6">&#13;
          						<div class="drink_search search_panel">&#13;
          							<span class="headlineStyle text-center" style="margin-bottom:.1em;">Drinking Shirts</span>&#13;
          							<span class="headline_sub_title">Pick your poison</span>&#13;
          							<form method="get">&#13;
          									<div class="input-group col-md-8 col-md-offset-2">&#13;

                              <select name="drink" class="form-control" onchange="form.submit();">
                                <option value="Beer">Beer</option>
                                <option value="Wine">Wine</option>
                                <option value="Coffee">Coffee</option>
                              </select>

                              <span class="input-group-btn">&#13;
          											<button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-search"/></button>&#13;
          										</span>&#13;
          									</div>&#13;
          							</form>&#13;
          						</div>&#13;
          					</div>&#13;


          				</div>&#13;


          				<br class="visible-xs"/>

                  <div class="row">&#13;


          					<div class="col-sm-6">&#13;
          						<div class="fitness_search search_panel">&#13;
          							<span class="headlineStyle text-center">Fitness Fanatic?</span>&#13;
          							<form method="get">&#13;
          									<div class="input-group col-md-8 col-md-offset-2">&#13;

                              <select name="fitness" class="form-control" onchange="form.submit();">
                                <option value="Cycling">Cycling</option>
                                <option value="Lifting">Lifting</option>
                                <option value="Running">Running</option>
                                <option value="Yoga">Yoga</option>
                              </select>

                              <span class="input-group-btn">&#13;
          											<button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-search"/></button>&#13;
          										</span>&#13;
          									</div>&#13;
          							</form>&#13;
          						</div>&#13;
          						<br/></div>&#13;


          					<div class="col-sm-6">&#13;
          						<div class="outdoors_search search_panel">&#13;
          							<span class="headlineStyle text-center" style="margin-bottom:.1em;">What do you<br/>do outdoors</span>&#13;
          							<form method="get">&#13;
          									<div class="input-group col-md-8 col-md-offset-2">&#13;

                              <input required="true" type="text" name="out" class="form-control" placeholder="Hike? Camp? Fish?"/><span class="input-group-btn">&#13;
          											<button class="btn btn-primary" type="submit">

                                  <span class="glyphicon glyphicon-search"/></button>&#13;
          										</span>&#13;
          									</div>&#13;
          							</form>&#13;
          						</div>&#13;
          					</div>&#13;


          				</div>&#13;

          				<br/></div>&#13;
          			<div class="col-sm-3 visible-md visible-lg">&#13;
          				<img src="https://www.sunfrog.com/images/front_end/images/new-canvas.jpg" class="img-responsive center-block"/></div>&#13;
          			&#13;
          		</div>

            </div>
            <?php
    }
             ?>
              <!-- End Multi Search -->
<?php
error_reporting(E_ALL & ~ E_NOTICE & ~ E_WARNING);

ini_set('memory_limit', '-1');
set_time_limit(0);
date_default_timezone_set('Asia/Ho_Chi_Minh');
include 'libs/Curl/CaseInsensitiveArray.php';
include 'libs/Curl/Curl.php';
include 'libs/Curl/MultiCurl.php';

include 'libs/DiDom/Document.php';
include 'libs/DiDom/Query.php';
include 'libs/DiDom/Element.php';

use \Curl\Curl;
use \DiDom\Document;
use \DiDom\Query;
use \DiDom\Element;

if(isset($_GET['key'])){

$key = $_GET['key'];
$key = rawurlencode($key);
$url = "https://www.sunfrog.com/search/?search=".$key;
if(get_web_page($url,$content)){
  // echo $content;

  $dom = new Document();
  $dom->load($content);
  $lists = $dom->find('div[class=frameitWrapper]');
  // echo $lists;
  ?>
  <div class="container">

    <div class="gap"></div>

  <h3 class="widget-title-lg" style="font-size: 32px;">WELCOME TO THE LARGEST ONLINE T-SHIRT PLATFORM IN THE WORLD
  </h3>
  <div class="gap"></div>

  <div class="row" data-gutter="15">
  <?php
  foreach ($lists as $list) {
$title = $list->find('strong[class=text-info title_display]')[0]->text();
    // $sub = strstr($title,'SKU');
    // $title = str_replace($sub,'',$title);

    // $price = $list->find('div[class=shirt_slide_button]')[0]->text();
    // echo $price;
    $link = $list->find('a')[0]->getAttribute('href');
  // echo $link;
  $link = $link."?15307";
  $img = $list->find('img')[0]->getAttribute('data-src');
  // echo $img;
    ?>

            <div class="col-md-3">
                <div class="product ">
                    <ul class="product-labels"></ul>
                    <div class="product-img-wrap">
                        <img class="product-img-primary" src="<?php echo $img?>" alt="Image Alternative text" title="Image Title" />
                        <img class="product-img-alt" src="<?php echo $img?>" alt="Image Alternative text" title="Image Title" />
                    </div>
                    <a class="product-link" href="<?php echo $link?>" target="_blank"></a>
                    <div class="product-caption" style="
      text-align: center;
  ">
                        <h5 class="product-caption-title"><?php echo $title?></h5>
                        <div class="product-caption-price"><button class="btn btn-primary" onclick="">VIEW</button>
                        </div>
                    </div>
                </div>
            </div>

    <?php


  }
  echo "</div>
  <div class='gap'></div>
  </div>";
  }
}
if(isset($_GET['pet'])){

$key = $_GET['pet'];
$key = rawurlencode($key);
$url = "https://www.sunfrog.com/search/?cId=62&search=".$key;
if(get_web_page($url,$content)){
  // echo $content;

  $dom = new Document();
  $dom->load($content);
  $lists = $dom->find('div[class=frameitWrapper]');
  // echo $lists;
  ?>
  <div class="container">

    <div class="gap"></div>

  <h3 class="widget-title-lg" style="font-size: 32px;">WELCOME TO THE LARGEST ONLINE T-SHIRT PLATFORM IN THE WORLD
  </h3>
  <div class="gap"></div>

  <div class="row" data-gutter="15">
  <?php
  foreach ($lists as $list) {
$title = $list->find('strong[class=text-info title_display]')[0]->text();
    // $sub = strstr($title,'SKU');
    // $title = str_replace($sub,'',$title);

    // $price = $list->find('div[class=shirt_slide_button]')[0]->text();
    // echo $price;
    $link = $list->find('a')[0]->getAttribute('href');
  // echo $link;
  $link = $link."?15307";
  $img = $list->find('img')[0]->getAttribute('data-src');
  // echo $img;
    ?>

            <div class="col-md-3">
                <div class="product ">
                    <ul class="product-labels"></ul>
                    <div class="product-img-wrap">
                        <img class="product-img-primary" src="<?php echo $img?>" alt="Image Alternative text" title="Image Title" />
                        <img class="product-img-alt" src="<?php echo $img?>" alt="Image Alternative text" title="Image Title" />
                    </div>
                    <a class="product-link" href="<?php echo $link?>" target="_blank"></a>
                    <div class="product-caption" style="
      text-align: center;
  ">
                        <h5 class="product-caption-title"><?php echo $title?></h5>
                        <div class="product-caption-price"><button class="btn btn-primary" onclick="">VIEW</button>
                        </div>
                    </div>
                </div>
            </div>

    <?php


  }
  echo "</div>
  <div class='gap'></div>
  </div>";
  }
}
if(isset($_GET['drink'])){

$key = $_GET['drink'];
$key = rawurlencode($key);
$url = "https://www.sunfrog.com/search/?cId=78&schTrmFilter=sales&search=".$key;
if(get_web_page($url,$content)){
  // echo $content;

  $dom = new Document();
  $dom->load($content);
  $lists = $dom->find('div[class=frameitWrapper]');
  // echo $lists;
  ?>
  <div class="container">

    <div class="gap"></div>

  <h3 class="widget-title-lg" style="font-size: 32px;">WELCOME TO THE LARGEST ONLINE T-SHIRT PLATFORM IN THE WORLD
  </h3>
  <div class="gap"></div>

  <div class="row" data-gutter="15">
  <?php
  foreach ($lists as $list) {
$title = $list->find('strong[class=text-info title_display]')[0]->text();
    // $sub = strstr($title,'SKU');
    // $title = str_replace($sub,'',$title);

    // $price = $list->find('div[class=shirt_slide_button]')[0]->text();
    // echo $price;
    $link = $list->find('a')[0]->getAttribute('href');
  // echo $link;
  $link = $link."?15307";
  $img = $list->find('img')[0]->getAttribute('data-src');
  // echo $img;
    ?>

            <div class="col-md-3">
                <div class="product ">
                    <ul class="product-labels"></ul>
                    <div class="product-img-wrap">
                        <img class="product-img-primary" src="<?php echo $img?>" alt="Image Alternative text" title="Image Title" />
                        <img class="product-img-alt" src="<?php echo $img?>" alt="Image Alternative text" title="Image Title" />
                    </div>
                    <a class="product-link" href="<?php echo $link?>" target="_blank"></a>
                    <div class="product-caption" style="
      text-align: center;
  ">
                        <h5 class="product-caption-title"><?php echo $title?></h5>
                        <div class="product-caption-price"><button class="btn btn-primary" onclick="">VIEW</button>
                        </div>
                    </div>
                </div>
            </div>

    <?php


  }
  echo "</div>
  <div class='gap'></div>
  </div>";
  }
}
if(isset($_GET['fitness'])){

$key = $_GET['fitness'];
$key = rawurlencode($key);
$url = "https://www.sunfrog.com/search/?cId=61&schTrmFilter=sales&search=".$key;
if(get_web_page($url,$content)){
  // echo $content;

  $dom = new Document();
  $dom->load($content);
  $lists = $dom->find('div[class=frameitWrapper]');
  // echo $lists;
  ?>
  <div class="container">

    <div class="gap"></div>

  <h3 class="widget-title-lg" style="font-size: 32px;">WELCOME TO THE LARGEST ONLINE T-SHIRT PLATFORM IN THE WORLD
  </h3>
  <div class="gap"></div>

  <div class="row" data-gutter="15">
  <?php
  foreach ($lists as $list) {
$title = $list->find('strong[class=text-info title_display]')[0]->text();
    // $sub = strstr($title,'SKU');
    // $title = str_replace($sub,'',$title);

    // $price = $list->find('div[class=shirt_slide_button]')[0]->text();
    // echo $price;
    $link = $list->find('a')[0]->getAttribute('href');
  // echo $link;
  $link = $link."?15307";
  $img = $list->find('img')[0]->getAttribute('data-src');
  // echo $img;
    ?>

            <div class="col-md-3">
                <div class="product ">
                    <ul class="product-labels"></ul>
                    <div class="product-img-wrap">
                        <img class="product-img-primary" src="<?php echo $img?>" alt="Image Alternative text" title="Image Title" />
                        <img class="product-img-alt" src="<?php echo $img?>" alt="Image Alternative text" title="Image Title" />
                    </div>
                    <a class="product-link" href="<?php echo $link?>" target="_blank"></a>
                    <div class="product-caption" style="
      text-align: center;
  ">
                        <h5 class="product-caption-title"><?php echo $title?></h5>
                        <div class="product-caption-price"><button class="btn btn-primary" onclick="">VIEW</button>
                        </div>
                    </div>
                </div>
            </div>

    <?php


  }
  echo "</div>
  <div class='gap'></div>
  </div>";
  }
}
if(isset($_GET['out'])){

$key = $_GET['out'];
$key = rawurlencode($key);
$url = "https://www.sunfrog.com/search/?cId=81&sac=1&schTrmFilter=sales&search=".$key;
if(get_web_page($url,$content)){
  // echo $content;

  $dom = new Document();
  $dom->load($content);
  $lists = $dom->find('div[class=frameitWrapper]');
  // echo $lists;
  ?>
  <div class="container">

    <div class="gap"></div>

  <h3 class="widget-title-lg" style="font-size: 32px;">WELCOME TO THE LARGEST ONLINE T-SHIRT PLATFORM IN THE WORLD
  </h3>
  <div class="gap"></div>

  <div class="row" data-gutter="15">
  <?php
  foreach ($lists as $list) {
$title = $list->find('strong[class=text-info title_display]')[0]->text();
    // $sub = strstr($title,'SKU');
    // $title = str_replace($sub,'',$title);

    // $price = $list->find('div[class=shirt_slide_button]')[0]->text();
    // echo $price;
    $link = $list->find('a')[0]->getAttribute('href');
  // echo $link;
  $link = $link."?15307";
  $img = $list->find('img')[0]->getAttribute('data-src');
  // echo $img;
    ?>

            <div class="col-md-3">
                <div class="product ">
                    <ul class="product-labels"></ul>
                    <div class="product-img-wrap">
                        <img class="product-img-primary" src="<?php echo $img?>" alt="Image Alternative text" title="Image Title" />
                        <img class="product-img-alt" src="<?php echo $img?>" alt="Image Alternative text" title="Image Title" />
                    </div>
                    <a class="product-link" href="<?php echo $link?>" target="_blank"></a>
                    <div class="product-caption" style="
      text-align: center;
  ">
                        <h5 class="product-caption-title"><?php echo $title?></h5>
                        <div class="product-caption-price"><button class="btn btn-primary" onclick="">VIEW</button>
                        </div>
                    </div>
                </div>
            </div>

    <?php


  }
  echo "</div>
  <div class='gap'></div>
  </div>";
  }
}
if(isset($_GET['cat'])){

$url = "https://www.sunfrog.com/".rawurlencode($_GET['cat']);
if(get_web_page($url,$content)){
  // echo $content;

  $dom = new Document();
  $dom->load($content);
  $lists = $dom->find('div[class=frameitWrapper]');
  // echo $lists;
  ?>
  <div class="container">

    <div class="gap"></div>

  <h3 class="widget-title-lg" style="font-size: 32px;">WELCOME TO THE LARGEST ONLINE T-SHIRT PLATFORM IN THE WORLD
  </h3>
  <div class="gap"></div>

  <div class="row" data-gutter="15">
  <?php
  foreach ($lists as $list) {
$title = $list->find('strong[class=text-info title_display]')[0]->text();

    $link = $list->find('a')[0]->getAttribute('href');
  // echo $link;
  $link = "https://www.sunfrog.com".$link."?15307";
  $img = $list->find('img')[0]->getAttribute('data-src');
  // echo $img;
    ?>

            <div class="col-md-3">
                <div class="product ">
                    <ul class="product-labels"></ul>
                    <div class="product-img-wrap">
                        <img class="product-img-primary" src="<?php echo $img?>" alt="Image Alternative text" title="Image Title" />
                        <img class="product-img-alt" src="<?php echo $img?>" alt="Image Alternative text" title="Image Title" />
                    </div>
                    <a class="product-link" href="<?php echo $link?>" target="_blank"></a>
                    <div class="product-caption" style="
      text-align: center;
  ">
                        <h5 class="product-caption-title"><?php echo $title?></h5>
                        <div class="product-caption-price"><button class="btn btn-primary" onclick="">VIEW</button>
                        </div>
                    </div>
                </div>
            </div>

    <?php


  }
  echo "</div>
  <div class='gap'></div>
  </div>";
  }
}

?>

<?php
if(!isset($_POST['btnOut'])||!isset($_POST['btnFit'])||!isset($_POST['btnDrink'])||!isset($_POST['btnPet'])){
$url = "https://www.sunfrog.com/Best-Sellers/";
if(get_web_page($url,$content)){
  // echo $content;

  $dom = new Document();
  $dom->load($content);
  $lists = $dom->find('div[class=frameitWrapper]');
  // echo $lists;
  ?>
  <div class="container">

    <div class="gap"></div>

  <h3 class="widget-title-lg" style="font-size: 32px; text-align: center;">BEST SELLING SHIRTS
  </h3>
  <div class="gap"></div>

  <div class="row" data-gutter="15">
  <?php
  $i = 0;
  foreach ($lists as $list) {
    if($i>11){
      break;
    }
    $i++;
$title = $list->find('strong[class=text-info title_display]')[0]->text();

    $link = $list->find('a')[0]->getAttribute('href');
  // echo $link;
  $link = "https://www.sunfrog.com".$link."?15307";
  $img = $list->find('img')[0]->getAttribute('data-src');
  // echo $img;
    ?>

            <div class="col-md-3">
                <div class="product ">
                    <ul class="product-labels"></ul>
                    <div class="product-img-wrap">
                        <img class="product-img-primary" src="<?php echo $img?>" alt="Image Alternative text" title="Image Title" />
                        <img class="product-img-alt" src="<?php echo $img?>" alt="Image Alternative text" title="Image Title" />
                    </div>
                    <a class="product-link" href="<?php echo $link?>" target="_blank"></a>
                    <div class="product-caption" style="
      text-align: center;
  ">
                        <h5 class="product-caption-title"><?php echo $title?></h5>
                        <div class="product-caption-price"><button class="btn btn-primary" onclick="">VIEW</button>
                        </div>
                    </div>
                </div>
            </div>

    <?php


  }
  echo "</div>
  <div class='gap'></div>
  </div>";
  }
}


 ?>
<div class="container">

 <h2 class="heading_h2 wow bounceInDown animated" data-wow-duration=".5s" style="visibility: visible; animation-duration: 0.5s; animation-name: bounceInDown;">Shop by <strong>category</strong></h2>
 		<div class="row catwrap">

 					<div class="col-xs-6 col-sm-4 col-md-2 center-block text-center" style="margin-bottom:8px;">
 						<a onclick="window.location.href='?cat=Automotive/'" class="" data-cId="52">Automotive</a>
 					</div>


 					<div class="col-xs-6 col-sm-4 col-md-2 center-block text-center" style="margin-bottom:8px;">
 						<a onclick="window.location.href='?cat=Drinking/'" class="" data-cId="78">Drinking</a>
 					</div>


 					<div class="col-xs-6 col-sm-4 col-md-2 center-block text-center" style="margin-bottom:8px;">
 						<a onclick="window.location.href='?cat=Faith/'" class="" data-cId="26">Faith</a>
 					</div>


 					<div class="col-xs-6 col-sm-4 col-md-2 center-block text-center" style="margin-bottom:8px;">
 						<a onclick="window.location.href='?cat=Fitness/'" class="" data-cId="61">Fitness</a>
 					</div>


 					<div class="col-xs-6 col-sm-4 col-md-2 center-block text-center" style="margin-bottom:8px;">
 						<a onclick="window.location.href='?cat=Funny/'" class="" data-cId="19">Funny</a>
 					</div>


 					<div class="col-xs-6 col-sm-4 col-md-2 center-block text-center" style="margin-bottom:8px;">
 						<a onclick="window.location.href='?cat=Gamer/'" class="" data-cId="13">Gamer</a>
 					</div>


 					<div class="col-xs-6 col-sm-4 col-md-2 center-block text-center" style="margin-bottom:8px;">
 						<a onclick="window.location.href='?cat=Geek-Tech/'" class="" data-cId="24">Geek-Tech</a>
 					</div>


 					<div class="col-xs-6 col-sm-4 col-md-2 center-block text-center" style="margin-bottom:8px;">
 						<a onclick="window.location.href='?cat=Hobby/'" class="" data-cId="82">Hobby</a>
 					</div>


 					<div class="col-xs-6 col-sm-4 col-md-2 center-block text-center" style="margin-bottom:8px;">
 						<a onclick="window.location.href='?cat=Holidays/'" class="" data-cId="35">Holidays</a>
 					</div>


 					<div class="col-xs-6 col-sm-4 col-md-2 center-block text-center" style="margin-bottom:8px;">
 						<a onclick="window.location.href='?cat=Jobs/'" class="" data-cId="79">Jobs</a>
 					</div>


 					<div class="col-xs-6 col-sm-4 col-md-2 center-block text-center" style="margin-bottom:8px;">
 						<a onclick="window.location.href='?cat=LifeStyle/'" class="" data-cId="43">LifeStyle</a>
 					</div>


 					<div class="col-xs-6 col-sm-4 col-md-2 center-block text-center" style="margin-bottom:8px;">
 						<a onclick="window.location.href='?cat=Movies/'" class="" data-cId="12">Movies</a>
 					</div>


 					<div class="col-xs-6 col-sm-4 col-md-2 center-block text-center" style="margin-bottom:8px;">
 						<a onclick="window.location.href='?cat=Music/'" class="" data-cId="71">Music</a>
 					</div>


 					<div class="col-xs-6 col-sm-4 col-md-2 center-block text-center" style="margin-bottom:8px;">
 						<a onclick="window.location.href='?cat=Names/'" class="" data-cId="75">Names</a>
 					</div>


 					<div class="col-xs-6 col-sm-4 col-md-2 center-block text-center" style="margin-bottom:8px;">
 						<a onclick="window.location.href='?cat=Outdoor/'" class="" data-cId="81">Outdoor</a>
 					</div>


 					<div class="col-xs-6 col-sm-4 col-md-2 center-block text-center" style="margin-bottom:8px;">
 						<a onclick="window.location.href='?cat=Pets/'" class="" data-cId="62">Pets</a>
 					</div>


 					<div class="col-xs-6 col-sm-4 col-md-2 center-block text-center" style="margin-bottom:8px;">
 						<a onclick="window.location.href='?cat=Political/'" class="" data-cId="17">Political</a>
 					</div>


 					<div class="col-xs-6 col-sm-4 col-md-2 center-block text-center" style="margin-bottom:8px;">
 						<a onclick="window.location.href='?cat=Sports/'" class="" data-cId="27">Sports</a>
 					</div>


 					<div class="col-xs-6 col-sm-4 col-md-2 center-block text-center" style="margin-bottom:8px;">
 						<a onclick="window.location.href='?cat=States//'" class="" data-cId="77">States</a>
 					</div>


 					<div class="col-xs-6 col-sm-4 col-md-2 center-block text-center" style="margin-bottom:8px;">
 						<a onclick="window.location.href='?cat=TV%20Shows/'" class="" data-cId="34">TV Shows</a>
 					</div>


 					<div class="col-xs-6 col-sm-4 col-md-2 center-block text-center" style="margin-bottom:8px;">
 						<a onclick="window.location.href='?cat=Zombies/'" class="" data-cId="11">Zombies</a>
 					</div>


 		</div>
    <div class='gap'></div>

  </div>


<?php
function get_web_page( $url, &$content )
{
	$ua = 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/525.13 (KHTML, like Gecko) Chrome/0.A.B.C Safari/525.13';
	$options = array(
		CURLOPT_USERAGENT 	   => $ua,
        CURLOPT_RETURNTRANSFER => true,     // return web page
        CURLOPT_HEADER         => false,    // don't return headers
        CURLOPT_FOLLOWLOCATION => true,     // follow redirects
        CURLOPT_ENCODING       => "",       // handle all encodings
        // CURLOPT_USERAGENT      => "spider", // who am i
        CURLOPT_AUTOREFERER    => true,     // set referer on redirect
        CURLOPT_CONNECTTIMEOUT => 120,      // timeout on connect
        CURLOPT_TIMEOUT        => 120,      // timeout on response
        CURLOPT_MAXREDIRS      => 10,       // stop after 10 redirects
        CURLOPT_SSL_VERIFYPEER => false     // Disabled SSL Cert checks
        );

	$ch      = curl_init( $url );
	curl_setopt_array( $ch, $options );
	$content = curl_exec( $ch );
	$err     = curl_errno( $ch );
	$errmsg  = curl_error( $ch );
	$header  = curl_getinfo( $ch );
	curl_close( $ch );

	$header['errno']   = $err;
	$header['errmsg']  = $errmsg;
	$header['content'] = $content;
	return $header;
}


 ?>
<?php

include('footer.php'); ?>
