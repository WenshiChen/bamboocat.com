<?$u=base_url()."esun"?>

 請稍後!  正在前往刷卡頁面...
<form  id="form1" action="https://acq.esunbank.com.tw/ACQTrans/esuncard/txnf014s" method="post">

                                        <textarea style="display:none;" name="data">{"ONO":"<?=$order['ord_createid']?>","U":"<?=$u?>","MID":"8080537837","TA":"<?=$order['ord_total']?>","TID":"EC000001"}</textarea>
                                       
                                        <?



                                          $datf= "{\"ONO\":\"".$order['ord_createid']."\",\"U\":\"".$u."\",\"MID\":\"8080537837\",\"TA\":\"".$order['ord_total']."\",\"TID\":\"EC000001\"}K2YCRGSXK6JOPQRG1NPXY7OIQRTJJLVU";


                                      

                                      
          
                                         $mac=hash('SHA256',$datf);
                                      

                                        ?>
                                         <input type="hidden" name="mac"
                                     value="<?=$mac?>">
                                      <input type="hidden" name="ksn" value="1">

                                     

                                     </form><script type="text/javascript">form1.submit();
</script>