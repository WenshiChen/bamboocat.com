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
      
        </div>

        
        <div class="news-list col-md-9 col-xs-12">
              <?foreach($posts as $items):?>

                 <div class="news-recommend  col-md-2 col-xs-6"> 
                        <div class="featured-thumbnail" style="background-image: ">
                            <a href="<?=base_url().'post/posttext/'.$items['post_id'];?>" title="<?=$items['post_title'];?>">
                            <img height="200px" src="<? echo base_url();?>assests/img/post/<?php echo $items['post_id'];?>/titleimage.jpg" alt="<?=$items['post_title'];?>" style="display:inline;"></a>
                        
                            <div class="blog-post">
                                <div class="blog-name">

                                    <h3><a href="<?=base_url().'post/posttext/'.$items['post_id'];?>" 
                                    title="<?=$items['post_title'];?>"><?=$items['post_title'];?></a></h3>

                                </div>
                             
                                
                              
                            </div>
                        </div>
                </div>

                <?endforeach;?>
                <div class="news-list col-md-9 col-xs-12">
                <?echo $page_links;?>
            </div> </div>


        </div>
        <hr>
    </div>

        
      