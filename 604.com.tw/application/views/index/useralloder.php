 <div class="container" id="all">
    <!-- MAIN SLIDER -->
        <div class="member-center col-md-12 col-xs-12">              
            <div class="page-title col-md-12 col-xs-12">會員中心</div>

            <div class="member-content col-md-12 col-xs-12"> 
                <div class="search-left-side col-md-3">

         

                    <ul class="nav">
                        <li><a href="member.html">會員資料</a></li>
                        <li><a href="order.html">消費紀錄</a></li>
                        <li><a href="password.html">密碼修改</a></li>
                    </ul>
                </div>

            
                <div class="member col-md-9 col-xs-12">
                    <h3>訂單</h3>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr class="active">
                                    <th class="text-center">編號</th>
                                    <th class="text-center">金額</th>
                                    <th class="text-center" colspan="2">建立時間</th>
                                    <th class="text-center" colspan="2">完成時間</th>
                                    <th class="text-center">訂單狀態</th>
                                    <th class="text-center">運輸狀態</th>
                                </tr>
                            </thead>
                           
                          
                            <tbody>

                                       <? foreach ($data as $item) {?>

                               
                                    <td class="text-center">

<? echo "<a href='".site_url('order/'.$item['ord_createid'])."'>".$item['ord_createid']."</a>"?>

                                    </td>
                                    <td class="text-center">$ <? echo   $item['ord_total'];?> </td>
                                    <td class="text-center" colspan="2"><? echo     
                                    $item['ord_created_at'] ;?></td>
                                    <td class="text-center" colspan="2"></td>

                                    <?$ord_type='待出貨';
                                    $typeid=$item['ord_type'];
                                    if( $typeid==0)
                                    {
                                        $ord_type='待出貨';
                                    }elseif( $typeid==1){
                                        $ord_type='已出貨';
                                    }
                                    elseif( $typeid==2){
                                        $ord_type='完成';
                                    }
                                    elseif( $typeid==3){
                                        $ord_type='取消';
                                    }


                                    ?>

                                    <?
                                    $ord_shipped_id=$item['ord_shipped_id'];
                                     if(strpos($ord_shipped_id,'OK_no:')!==false){
                                    $ord_shipped_id=substr($item['ord_shipped_id'], 6);?>
                                    
                               


                                   
                                    <td class="text-center"><?=$ord_type;?></td>  
                                    <td class="text-center"><? echo "<a href=http://www.twpost.com.tw/post/post_course.php?postno=".$ord_shipped_id.">".$ord_createid_API_nowType[$item['ord_createid']];?></a>

                                    </td> 
                                     <? } else{?>
                                     <td class="text-center"><?=$ord_type;?></td>  
                                    <td class="text-center">待出貨</td>
                                     <?}?>
                                </tr>
 <?}?>
                                                             </tbody>
                    
                        </table>
                         <?echo $page_links?>
                    </div>
                </div>
            </div> 

            </div>
        </div>


        
        <hr>
    </div>

        
         