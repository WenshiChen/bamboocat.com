

    <div class="container" id="all">
    <!-- MAIN SLIDER -->            
         <div class="search-left-side col-md-3">
            <div class="breadcrumb-area">
                <ol class="breadcrumb">
                     <li><a href="<?=base_url()."post"?>">文章首頁</a></li>
                    <li>文章類別</li>
                </ol>
            </div>
            
            <ul class="nav">
            <li><a href="<?=base_url()."post"?>">所有文章</a></li>
            <?foreach($postclass as $item):?>
                <li><a href="<?=base_url()."post/".$item['postclassid']?>"><?=$item['postclassname']?></a></li>
                <?endforeach;?>
             
            </ul>
   <!--          <ul class="nav">
                <li class="nav-title">TOP 5</li>
                <li><a href="news.html">TOP文</a></li>
                <li><a href="news.html">TOP文</a></li>
                <li><a href="news.html">TOP文</a></li>
                <li><a href="news.html">TOP文</a></li>
                <li><a href="news.html">TOP文</a></li>
            </ul> -->
        </div>

        
        <div class="news col-md-9 col-xs-12">
              <?=$post['post_text'];?>
              <div class="fb-comments" data-href="<?=base_url()."post/".$post['post_id'];?>" data-numposts="5" data-width="100%"></div>
            
            </div>


        </div>


        </div>
        <hr>
    </div>

        
   

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/zh_TW/sdk.js#xfbml=1&version=v2.10&appId=119810032064208";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</html>