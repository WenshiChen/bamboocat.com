<h2>訂單列表</h2>
<a href="<?=base_url()?>admin">首頁</a><br>

<table class="table  .table-hover" >
<tr>
    <th>
    編號
    </th>
    <th>
    使用者
    </th>
    <th>
    金額
    </th>
    <th>
    日期
    </th>
    <th>
    訂單狀態
    </th>
    <th>
    運送狀態
    </th>

</tr>

<?$index=0;?>
<?foreach($allorder as $ods){?>
<tr>
    <td><a href="orderdetal/<?=$ods['ord_createid']?>"><?=$ods['ord_createid']?></a></td>
     <td><?=$ods['ord_user_id']?></td>
      <td><?=$ods['ord_total']?></td>
       <td><?=$ods['ord_created_at']?></td>
        <td><?=$ods['ord_type']?></td>
         <td><?=$ord_createid_API_nowType[$ods['ord_createid']]?></td>


 </tr>
<?$index++;}?>
</table>