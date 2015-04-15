<?php header("Content-type: text/html; charset=utf-8"); ?>
<script src="http://libs.baidu.com/jquery/1.4.4/jquery.min.js"></script>
<script src="1.js"></script>
<?php
/*
echo '<script src="http://libs.baidu.com/json/json2/json2.js"></script>';
*/
?>
<script type="text/javascript">

$("document").ready(function() {
userSKU();
csvSKU()
userAlias();
$('#getSkuProps').click(function(){changeSKU()});
});


//$.find("textarea").each(function() { $(this).text($(this).val()); });


function changeSKU(){
	
		var arr = new Array();
		$('#sss table').each(function(index, element) {
			$(this).find('input').each(function(index, element) {
				arr.push($(this).val());
            });
        });
		console.log(arr);
		var nowstr = $('#skuProps').text();
		
		nowstr = ';' + nowstr;
		console.log(nowstr);
		
		var nowarr = nowstr.split('::');
		console.log(nowarr);
		
		

		/*
		var mystring = "sharejs.com,google.com,baidu.com_weibo.com_haotu.net";
		var myarray  = mystring.split(/[,_]/);
		console.log(myarray);
		*/
		
		
//		var catestr = '';
//		var aliasstr = '';
//		$('#colortable td').find('input:odd').each(function(index, element) {
//            //if($(this).attr('title')!=''){
//					var title = $(this).attr('title');
//					var value = $(this).attr('value');
//					//console.log(title+'-'+value);
//					if(title!=value){
//						var cv = $(this).prev().attr('value');
//						aliasstr += DM_color+':'+cv+':'+value+';';
//						catestr += DM_color+':'+cv+';';
//					}
//			//}
//        });
//		//console.log(zhong);
//		$('#propAlias').text(aliasstr);
//		$('#cateProps').text(catestr);
}

function changeAlias(){
		var catestr = '';
		var aliasstr = '';
		$('#colortable td').find('input:odd').each(function(index, element) {
            //if($(this).attr('title')!=''){
					var title = $(this).attr('title');
					var value = $(this).attr('value');
					//console.log(title+'-'+value);
					if(title!=value){
						var cv = $(this).prev().attr('value');
						aliasstr += DM_color+':'+cv+':'+value+';';
						catestr += DM_color+':'+cv+';';
					}
			//}
        });
		//console.log(zhong);
		$('#propAlias').text(aliasstr);
		$('#cateProps').text(catestr);
}

function userAlias(){
//$("input[name='s[]']").each(function(n,e){$(this).click(function() {changeAlias();});});	
$('#colortable td').find('input:odd').blur(function(){changeAlias();});
}

function csvSKU(){
$("input[name='s[]']").each(function(n,e){
    $(this).click(function() {	//点击尺寸
	//console.log(DM_color_name);
        var isChecked = $(this).attr("checked");
		var divid = 'd' + n;
		if (isChecked == true) {	//增加的时候 读取 数量价格 颜色
			var qian = "<div id='"+divid+"'>";
			var hou = "</div>";			
			//尺寸   sizevalue
			var sv =  $(this).attr("value");
			//价格	sizeprice
			var sp = $(this).next().children('input').eq(0).attr("value");			
			//数量	sizenum
			var sn = $(this).next().children('input').eq(1).attr("value");
			
			var zhong = '';
			$("input[name='c[]']").each(function(n,e) {
				var isChecked = $(this).attr("checked");
				if (isChecked == true) {
					//var cv = $(this).next().attr("value");
					var cv = $(this).attr("value");	//颜色	colorvalue
					//console.log(sp+':'+sn+'::'+DM_size+':'+sv+';'+DM_color+':'+cv+';');
					zhong += sp+':'+sn+'::'+DM_size+':'+sv+';'+DM_color+':'+cv+';';			
				}

			});
			putstr = qian + zhong + hou;
			console.log(putstr);
			$('#ssss').append(putstr);
		}
		else
		{
			$('#'+divid).remove();			
		}
	//console.log($('#ssss').text());
	$('#skuProps').text($('#ssss').text());//这里可能有text val的bug
    });
});	
	
}

function userSKU(){
$("input[name='s[]']").each(function(n,e){
    $(this).click(function() {
        var isChecked = $(this).attr("checked");
		var divid = 't' + n;
		if (isChecked == true) {
			var qian = "<table id='"+divid+"'>";
			var hou = "</table>";
			var zhong = "";
			var num = 1;
			var sv = $(this).attr("value");		//尺寸   sizevalue
			sv =  $(this).parent().text().replace('价格数量','');	//新添加的过滤
			//$(this).next() 指的是 <span>价格<input value="80"/>数量<input value="100"/></span>
			var sp = $(this).next().attr("value");	//价格	sizeprice
			sp = $(this).next().children('input').eq(0).attr("value");
			sp = '<input type="text" value="'+sp+'" />';			
			var sn = $(this).next().next().attr("value");	//数量	sizenum
			sn = $(this).next().children('input').eq(1).attr("value");
			sn = '<input type="text" value="'+sn+'" />';			
			$("input[name='c[]']").each(function(e) {
				var isChecked = $(this).attr("checked");
				if (isChecked == true) {
					//var cv = $(this).attr("value");
					var cv = $(this).next().attr("value");	//颜色	colorvalue
					if (num == 1) {
						zhong += '<td>' + cv + '</td>'+'<td>' + sp + '</td>'+'<td>' + sn + '</td>'+'</tr>';
					}
					else
					{
						zhong += '<tr><td>' + cv + '</td>'+'<td>' + sp + '</td>'+'<td>' + sn + '</td>'+'</tr>';
					}
					num++;
				}
			});
			zhong = '<tr><td rowspan="' + num + '">' + sv + '</td>' + zhong;
			putstr = qian + zhong + hou;
			console.log(putstr);
			$('#sss').append(putstr);
		}
		else
		{
			$('#'+divid).remove();
		}
    });
});	
	
}

</script>
<style type="text/css">
.hide{/*display:none; visibility:hidden;*/}
input[type="text"]{ width:300px; height:30px; line-height:30px;}
p { font-size:12px; margin:0 auto;}
h1 { text-align:center;}
.goods{width:1200px; height:600px; overflow:auto;}
.goods table{width:800px;border-bottom:1px dashed black;}
.goods table td{width:200px;}
.goods input[type="text"]{ width:60px; height:30px; line-height:30px;}
#pricetable span{ float:right;font-size:12px;_margin-top:-20px;}
#pricetable span input{width:40px;}
</style>

<p>红色  给用户填写 <input type="text"   value="#FF3366" /></p>
<p>黄色  程序判断 <input type="text"  value="#FFFFCC" /></p>
<p>蓝色  程序员要搞清楚<input type="text"   value="#33CCFF" /></p>
<h1>四件套参数测试 </h1>
<form id="form1" name="form1" method="post" action="post2.php" target="_blank">
  <table width="1200" border="1" align="center">
    <!--<tr>
      <td>appkey</td>
      <td>appkey</td>
      <td><input type="text" name="appkey" id="appkey" value="23129202" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>appsecret</td>
      <td>appsecret</td>
      <td><input name="appsecret" type="text" id="appsecret" value="ebb8d9da454f10ec492fe8ca5871a22f" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>session</td>
      <td>session</td>
      <td><input type="text" name="session" id="session" value="" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr bgcolor="#FF3366">
      <td>title</td>
      <td>宝贝名称</td>
      <td><input type="text" name="title" id="title" value="韩版公主风四件套 诺微花开" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr bgcolor="#FF3366">
      <td>cid</td>
      <td>宝贝类目</td>
      <td><input type="text" name="cid" id="cid" value="50008779" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr bgcolor="#33CCFF">
      <td>seller_cids</td>
      <td>店铺类目</td>
      <td><input type="text" name="seller_cids" id="seller_cids" value="" /></td>
      <td></td>
    </tr>
    <tr>
      <td>stuff_status</td>
      <td>新旧程度</td>
      <td><input type="text" name="stuff_status" id="stuff_status" value="1" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>location_state</td>
      <td>省</td>
      <td><input type="text" name="location_state" id="location_state" value="江苏" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>location_city</td>
      <td>城市</td>
      <td><input type="text" name="location_city" id="location_city" value="南通" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>item_type</td>
      <td>出售方式</td>
      <td><input type="text" name="item_type" id="item_type" value="1" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr bgcolor="#FFFFCC">
      <td>price</td>
      <td>宝贝价格</td>
      <td><input type="text" name="price" id="price" value="180" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr bgcolor="#FFFFCC">
      <td>auction_increment</td>
      <td>加价幅度</td>
      <td><input type="text" name="auction_increment" id="auction_increment" value="0" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr bgcolor="#FFFFCC">
      <td>num</td>
      <td>宝贝数量</td>
      <td><input type="text" name="num" id="num" value="3000" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr bgcolor="#33CCFF">
      <td>valid_thru</td>
      <td>有效期</td>
      <td><input type="text" name="valid_thru" id="valid_thru" value="0"/></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>-->
    
    <tr>
      <td colspan="4">
      
<table width="1200" border="1" id="colortable">

  <tr>
        <td><input type="checkbox" id="c1" name="c[]" value="3232483"/><input title="军绿色" value="军绿色" style="width:60px"/></td>
        <td><input type="checkbox" id="c2" name="c[]" value="3232484"/><input title="天蓝色"  value="天蓝色" style="width:60px"/></td>
        <td><input type="checkbox" id="c3" name="c[]" value="3232481"/><input title="巧克力色"  value="巧克力色" style="width:60px"/></td>
        <td><input type="checkbox" id="c4" name="c[]" value="90554"/><input title="桔色"  value="桔色" style="width:60px"/></td>
        <td><input type="checkbox" id="c5" name="c[]" value="28332"/><input title="浅灰色"  value="浅灰色" style="width:60px"/></td>
        <td><input type="checkbox" id="c6" name="c[]" value="30156"/><input title="浅绿色"  value="浅绿色" style="width:60px"/></td>
        <td><input type="checkbox" id="c7" name="c[]" value="60092"/><input title="浅黄色"  value="浅黄色" style="width:60px"/></td>
        <td><input type="checkbox" id="c8" name="c[]" value="3232482"/><input title="深卡其布色"  value="深卡其布色" style="width:60px"/></td>
        <td><input type="checkbox" id="c9" name="c[]" value="3232478"/><input title="深灰色"  value="深灰色" style="width:60px"/></td>
        <td><input type="checkbox" id="c10" name="c[]" value="3232479"/><input title="深紫色"  value="深紫色" style="width:60px"/></td>
  </tr>
  <tr>          
    	<td><input type="checkbox" id="c11" name="c[]" value="28340"/><input title="深蓝色"  value="深蓝色" style="width:60px"/></td>
        <td><input type="checkbox" id="c12" name="c[]" value="28320"/><input title="白色"  value="白色" style="width:60px"/></td>
        <td><input type="checkbox" id="c13" name="c[]" value="3232480"/><input title="粉红色"  value="粉红色" style="width:60px"/></td>
        <td><input type="checkbox" id="c14" name="c[]" value="80882"/><input title="紫罗兰色"  value="紫罗兰色" style="width:60px"/></td>
        <td><input type="checkbox" id="c15" name="c[]" value="28329"/><input title="紫色"  value="紫色" style="width:60px"/></td>
        <td><input type="checkbox" id="c16" name="c[]" value="28326"/><input title="红色"  value="红色" style="width:60px"/></td>
        <td><input type="checkbox" id="c17" name="c[]" value="28335"/><input title="绿色"  value="绿色" style="width:60px"/></td>
        <td><input type="checkbox" id="c18" name="c[]" value="130164"/><input title="花色"  value="花色" style="width:60px"/></td>
        <td><input type="checkbox" id="c19" name="c[]" value="28338"/><input title="蓝色"  value="蓝色" style="width:60px"/></td>
        <td><input type="checkbox" id="c20" name="c[]" value="132069"/><input title="褐色"  value="褐色" style="width:60px"/></td>
  </tr>
  <tr>  
        <td><input type="checkbox" id="c21" name="c[]" value="107121"/><input title="透明色"  value="透明色" style="width:60px"/></td>
        <td><input type="checkbox" id="c22" name="c[]" value="28327"/><input title="酒红色"  value="酒红色" style="width:60px"/></td>
        <td><input type="checkbox" id="c23" name="c[]" value="28324"/><input title="黄色"  value="黄色" style="width:60px"/></td>
        <td><input type="checkbox" id="c24" name="c[]" value="28341"/><input title="黑色"  value="黑色" style="width:60px"/></td>   
        <!--<td colspan="6">*注: 颜色必须尺寸之前选择 并且选择完不能改变</td>-->                                        
  </tr>
</table>  
 
      </td>
    </tr>
    <tr>
      <td colspan="4">
        <table width="1200" border="1" id="pricetable">
          <tr>
            <td><input type="checkbox" id="s1" name="s[]" value="55481260"/>1.0m<span>价格<input value="80"/>数量<input value="100"/></span></td>
            <td><input type="checkbox" id="s2" name="s[]" value="55481261"/>1.2m<span>价格<input value="80"/>数量<input value="100"/></span></td>
            <td><input type="checkbox" id="s3" name="s[]" value="55481262"/>1.35m<span>价格<input value="80"/>数量<input value="100"/></span></td>
            <td><input type="checkbox" id="s4" name="s[]" value="55481263"/>1.5m<span>价格<input value="80"/>数量<input value="100"/></span></td>
            <td><input type="checkbox" id="s5" name="s[]" value="55481264"/>1.8m<span>价格<input value="80"/>数量<input value="100"/></span></td>
      	  </tr> 
      	  <tr>
            <td><input type="checkbox" id="s6" name="s[]" value="55481265"/>2.0m<span>价格<input value="80"/>数量<input value="100"/></span></td>
            <td><input type="checkbox" id="s7" name="s[]" value="89027723"/>2.2m<span>价格<input value="80"/>数量<input value="100"/></span></td>
            <td><input type="checkbox" id="s8" name="s[]" value="89027775"/>2.5m<span>价格<input value="80"/>数量<input value="100"/></span></td>
            <td><input type="checkbox" id="s9" name="s[]" value="89027830"/>2.8m<span>价格<input value="80"/>数量<input value="100"/></span></td>
            <td><input type="checkbox" id="s10" name="s[]" value="10122"/>其他<span>价格<input value="80"/>数量<input value="100"/></span></td>
      	  </tr> 
        </table>
      </td>
    </tr>
    <tr>
      <td colspan="4">
      	<!--下面放的是整理好的参数-->
        <div id="sss" class="goods"></div>
        <div id="ssss" class="goods hide"></div>     
      </td>
    </tr>
    <tr>
      <td colspan="4">
      	<!--下面放的是整理好的参数-->
        <textarea id="skuProps" name="skuProps" cols="150" rows="10" readonly="readonly"></textarea>
        <input id="getSkuProps" name="getSkuProps" type="button" value="getSkuProps" />
        <textarea id="propAlias" name="propAlias" cols="150" rows="10" readonly="readonly"></textarea>
        <input id="getPropAlias" name="getPropAlias" type="button" value="getPropAlias" />
        <textarea id="cateProps" name="cateProps" cols="150" rows="10" readonly="readonly"></textarea>
        <input id="cateProps" name="cateProps" type="button" value="cateProps" />        
      </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><input name="submit" type="submit" /></td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>
