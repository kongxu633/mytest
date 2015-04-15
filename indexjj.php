<?php header("Content-type: text/html; charset=utf-8"); ?>
<style type="text/css">
#form1 input{ width:400px; height:30px; line-height:30px;}
p { font-size:12px; margin:0 auto;}
h1 { text-align:center;}
</style>
<p>红色  给用户填写 <input type="text"   value="#FF3366" /></p>
<p>黄色  程序判断 <input type="text"  value="#FFFFCC" /></p>
<p>蓝色  程序员要搞清楚<input type="text"   value="#33CCFF" /></p>
<h1>四件套参数测试 </h1>
<form id="form1" name="form1" method="post" action="post2.php">
  <table width="1200" border="1">
    <tr>
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
      <td><input type="text" name="title" id="title" value="伊宁家纺韩版公主风四件套 诺微花开" /></td>
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
    <tr bgcolor="#FFFFCC">
      <td>stuff_status</td>
      <td>新旧程度</td>
      <td><input type="text" name="stuff_status" id="stuff_status" value="1" /></td>
      <td>1全新 3二手</td>
    </tr>
    <tr>
    <tr bgcolor="#FFFFCC">
      <td>location_state</td>
      <td>省</td>
      <td><input type="text" name="location_state" id="location_state" value="江苏" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
    <tr bgcolor="#FFFFCC">
      <td>location_city</td>
      <td>城市</td>
      <td><input type="text" name="location_city" id="location_city" value="南通" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
    <tr bgcolor="#33CCFF">
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
      <td><input type="text" name="valid_thru" id="valid_thru" value="7"/></td>
      <td>都为7</td>
    </tr>
    <tr>
    <tr bgcolor="#FF3366">
      <td>freight_payer</td>
      <td>运费承担</td>
      <td><input name="freight_payer" type="text" id="freight_payer" value="2" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
    <tr bgcolor="#FF3366">
      <td>post_fee</td>
      <td>平邮</td>
      <td><input name="post_fee" type="text" id="post_fee" value="0" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
    <tr bgcolor="#FF3366">
      <td>ems_fee</td>
      <td>EMS</td>
      <td><input name="ems_fee" type="text" id="ems_fee" value="0" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
    <tr bgcolor="#FF3366">
      <td>express_fee</td>
      <td>快递</td>
      <td><input name="express_fee" type="text" id="express_fee" value="0" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
    <tr bgcolor="#FFFFCC">
      <td>has_invoice</td>
      <td>发票</td>
      <td><input name="has_invoice" type="text" id="has_invoice" value="0" /></td>
      <td>1勾选 0不勾选</td>
    </tr>
    <tr>
    <tr bgcolor="#FFFFCC">
      <td>has_warranty</td>
      <td>保修</td>
      <td><input name="has_warranty" type="text" id="has_warranty" value="1" /></td>
      <td>1勾选 0不勾选</td>
    </tr>
    <tr>
  <tr bgcolor="#FF3366">
      <td>approve_status</td>
      <td>放入仓库</td>
      <td><input name="approve_status" type="text" id="approve_status" value="1" /></td>
      <td>1放入仓库 2不放入</td>
    </tr>
    <tr>
    <tr bgcolor="#FF3366">
      <td>has_showcase</td>
      <td>橱窗推荐</td>
      <td><input name="has_showcase" type="text" id="has_showcase" value="0" /></td>
      <td>1勾选 0不勾选</td>
    </tr>
    <tr>
    <tr bgcolor="#FF3366">
      <td>list_time</td>
      <td>开始时间</td>
      <td><input name="list_time" type="text" id="list_time" value="2015/4/6 16:57:15" /></td>
      <td>立刻上架和设定上架时间</td>
    </tr>
    <tr>
    <tr bgcolor="#33CCFF">
      <td>description</td>
      <td>宝贝描述</td>
      <td><textarea name="description" id="description" cols="80" rows="10"><p><img src="http://img3.591wx.com/Uploads/msimage/20150406/20150406165650_47500.jpg"  /><img src="http://img3.591wx.com/Uploads/msimage/20150406/20150406165650_39551.jpg"  /><img src="http://img3.591wx.com/Uploads/msimage/20150406/20150406165651_34532.jpg"  /><img src="http://img3.591wx.com/Uploads/msimage/20150406/20150406165651_36924.jpg"  /><img src="http://img3.591wx.com/Uploads/msimage/20150406/20150406165651_52268.jpg"  /><img src="http://img3.591wx.com/Uploads/msimage/20150406/20150406165651_21663.jpg"  /><img src="http://img3.591wx.com/Uploads/msimage/20150406/20150406165652_43663.jpg"  /><img src="http://img3.591wx.com/Uploads/msimage/20150406/20150406165652_32328.jpg"  /><img src="http://img3.591wx.com/Uploads/msimage/20150406/20150406165652_81281.jpg"  /></p>
      </textarea></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
    <tr bgcolor="#33CCFF">
      <td>cateProps</td>
      <td>宝贝属性</td>
      <td><textarea name="cateProps" id="cateProps" cols="80" rows="10">20000:-1;13021751:-1;31745:3666706;20021:14863995;6253686:3267897;20603:104170033;31317:100346;6200039:4346962;20608:6554818;122216979:182194764;27514393:67792171;27530250:130142;1627207:3232483</textarea></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
    <tr bgcolor="#FF3366">
      <td>postage_id</td>
      <td>运费模板</td>
      <td><input name="postage_id" type="text" id="postage_id" value="539219491" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
    <tr bgcolor="#FFFFCC">
      <td>has_discount</td>
      <td>会员打折</td>
      <td><input name="has_discount" type="text" id="has_discount" value="0" /></td>
      <td><p>0参与打折1不参与打折</p>
      <p>&nbsp;</p></td>
    </tr>
    <tr>
    <tr bgcolor="#999999">

      <td>modified</td>
      <td>修改时间</td>
      <td><input name="modified" type="text" id="modified" value="2015/4/6 16:57:15" /></td>
      <td>修改此csv的时间</td>
    </tr>
    <tr>
    <tr bgcolor="#FFFFCC">
      <td>upload_fail_msg</td>
      <td>上传状态</td>
      <td><input name="upload_fail_msg" type="text" id="upload_fail_msg" value="200" /></td>
      <td>大部分200</td>
    </tr>
    <tr>
    <tr bgcolor="#999999">
      <td>picture_status</td>
      <td>图片状态</td>
      <td><input name="picture_status" type="text" id="picture_status" value="1;1;1;1;1;1;" /></td>
      <td><p>多数都为这个值</p>
      <p>&nbsp;</p></td>
    </tr>
    <tr>
     <tr bgcolor="#999999">
      <td>auction_point</td>
      <td>返点比例</td>
      <td><input name="auction_point" type="text" id="auction_point" value="0" /></td>
      <td>多数都为0</td>
    </tr>
     <tr>
      <td>picture</td>
      <td>新图片</td>
      <td><textarea name="picture" id="picture" cols="80" rows="10">1ae53ca51db48d27a88198a0f5b2958b:1:0:|"";5b7be4e2a58ddeb62b14f0bc21aae761:1:1:|"";188b7b4c56ebbf49c386fc16f55c7106:1:2:|"";833817f81c2b1cd22ad71a1a559c5711:1:3:|"";924a3c98d691c53306135dd01a225125:1:4:|"";cb02def53ad7a706e2ae0ad92a05fa09:2:0:1627207:3232483|"";cb02def53ad7a706e2ae0ad92a05fa09:2:0:1627207:3232483|"";cb02def53ad7a706e2ae0ad92a05fa09:2:0:1627207:3232483|"";</textarea></td>
      <td>&nbsp;</td>
    </tr>
     <tr>
     <tr bgcolor="#999999">
      <td>video</td>
      <td>视频</td>
      <td><input type="text" name="video" id="video" /></td>
      <td>&nbsp;</td>
    </tr>
     <tr>
     <tr bgcolor="#33CCFF">
      <td>skuProps</td>
      <td>销售属性</td>
      <td><textarea name="skuProps" id="skuProps" cols="45" rows="5">180:1000::5569827:55481263;1627207:3232483;180:1000::5569827:55481264;1627207:3232483;195:1000::5569827:55481265;1627207:3232483;</textarea></td>
      <td>&nbsp;</td>
    </tr>
     <tr>
      <td>inputPids</td>
      <td>用户输入ID串</td>
      <td><input name="inputPids" type="text" id="inputPids" value="20000,9698958,124758433,9938993" /></td>
      <td>&nbsp;</td>
    </tr>
     <tr>
     <tr bgcolor="#FF3366">
      <td>inputValues</td>
      <td>用户输入名-值对</td>
      <td><input name="inputValues" type="text" id="inputValues" value="伊宁家纺,60,符合相关国家标准,13372" /></td>
      <td>品牌名称</td>
    </tr>
     <tr>
     <tr bgcolor="#999999">
      <td>outer_id</td>
      <td>商家编码</td>
      <td><input type="text" name="outer_id" id="outer_id" /></td>
      <td>&nbsp;</td>
    </tr>
     <tr>
     <tr bgcolor="#33CCFF">
      <td>propAlias</td>
      <td>销售属性</td>
      <td><input name="propAlias" type="text" id="propAlias" value="1627207:3232483:诺微花开;" /></td>
      <td>&nbsp;</td>
    </tr>
     <tr>
     <tr bgcolor="#999999">
      <td>auto_fill</td>
      <td>代充类型</td>
      <td><input name="auto_fill" type="text" id="auto_fill" value="0" /></td>
      <td>&nbsp;</td>
    </tr>
     <tr>
      <td>num_id</td>
      <td>数字ID</td>
      <td><input name="num_id" type="text" id="num_id" value="0" /></td>
      <td>&nbsp;</td>
    </tr>
     <tr>
      <td>local_cid</td>
      <td>本地ID</td>
      <td><input name="local_cid" type="text" id="local_cid" value="0" /></td>
      <td>&nbsp;</td>
    </tr>
     <tr>
     <tr bgcolor="#FF3366">
      <td>navigation_type</td>
      <td>宝贝分类</td>
      <td><input type="text" name="navigation_type" id="navigation_type" /></td>
      <td>&nbsp;</td>
    </tr>
     <tr>
      <td>user_name</td>
      <td>用户名称</td>
      <td><input type="text" name="user_name" id="user_name" /></td>
      <td>&nbsp;</td>
    </tr>
     <tr>
      <td>syncStatus</td>
      <td>宝贝状态</td>
      <td><input name="syncStatus" type="text" id="syncStatus" value="0" /></td>
      <td>&nbsp;</td>
    </tr>
     <tr>
      <td>is_lighting_consigment</td>
      <td>闪电发货</td>
      <td><input name="is_lighting_consigment" type="text" id="is_lighting_consigment" value="172" /></td>
      <td>&nbsp;</td>
    </tr>
     <tr>
      <td>is_xinpin</td>
      <td>新品</td>
      <td><input name="is_xinpin" type="text" id="is_xinpin" value="1" /></td>
      <td>&nbsp;</td>
    </tr>
     <tr>
     <tr bgcolor="#999999">
      <td>foodparame</td>
      <td>食品专项</td>
      <td><input type="text" name="foodparame" id="foodparame" /></td>
      <td>&nbsp;</td>
    </tr>
     <tr>
     <tr bgcolor="#999999">
      <td>features</td>
      <td>尺码库</td>
      <td><input type="text" name="features" id="features" /></td>
      <td>&nbsp;</td>
    </tr>
     <tr>
     <tr bgcolor="#999999">
      <td>buyareatype</td>
      <td>采购地</td>
      <td><input type="text" name="buyareatype" id="buyareatype" /></td>
      <td>&nbsp;</td>
    </tr>
     <tr>
      <td>global_stock_type</td>
      <td>库存类型</td>
      <td><input name="global_stock_type" type="text" id="global_stock_type" value="5193822" /></td>
      <td>&nbsp;</td>
    </tr>
     <tr>
     <tr bgcolor="#999999">
      <td>global_stock_country</td>
      <td>国家地区</td>
      <td><input type="text" name="global_stock_country" id="global_stock_country" /></td>
      <td>&nbsp;</td>
    </tr>
     <tr>
      <td>sub_stock_type</td>
      <td>库存计数</td>
      <td><input name="sub_stock_type" type="text" id="sub_stock_type" value="2" /></td>
      <td>&nbsp;</td>
    </tr>
     <tr>
     <tr bgcolor="#999999">
      <td>item_size</td>
      <td>物流体积</td>
      <td><input type="text" name="item_size" id="item_size" /></td>
      <td>&nbsp;</td>
    </tr>
     <tr bgcolor="#999999">
      <td>item_weight</td>
      <td>物流重量</td>
      <td><input type="text" name="item_weight" id="item_weight" /></td>
      <td>&nbsp;</td>
    </tr>
     <tr>
      <td>sell_promise</td>
      <td>退换承诺</td>
      <td><input name="sell_promise" type="text" id="sell_promise" value="1" /></td>
      <td>&nbsp;</td>
    </tr>
     <tr>
     <tr bgcolor="#999999">
      <td>custom_design_flag</td>
      <td>定制工具</td>
      <td><input type="text" name="custom_design_flag" id="custom_design_flag" /></td>
      <td>&nbsp;</td>
    </tr>
     <tr>
      <td>wireless_desc</td>
      <td><p>无线详情</p></td>
      <td><input type="text" name="wireless_desc" id="wireless_desc" /></td>
      <td>&nbsp;</td>
    </tr>
     <tr>
     <tr bgcolor="#999999">
      <td>barcode</td>
      <td>商品条形码</td>
      <td><input type="text" name="barcode" id="barcode" /></td>
      <td>&nbsp;</td>
    </tr>
     <tr>
     <tr bgcolor="#999999">
      <td>sku_barcode</td>
      <td>sku条形码</td>
      <td><input type="text" name="sku_barcode" id="sku_barcode" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>newprepay</td>
      <td>7天退货</td>
      <td><input type="text" name="newprepay" id="newprepay" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
    <tr bgcolor="#999999">
      <td>subtitle</td>
      <td>宝贝卖点</td>
      <td><input type="text" name="subtitle" id="subtitle" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
    <tr bgcolor="#999999">
      <td>cpv_memo</td>
      <td>属性值备注</td>
      <td><input type="text" name="cpv_memo" id="cpv_memo" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
    <tr bgcolor="#999999">
      <td>input_custom_cpv</td>
      <td>自定义属性值</td>
      <td><input type="text" name="input_custom_cpv" id="input_custom_cpv" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
    <tr bgcolor="#999999">
      <td>qualification</td>
      <td>商品资质</td>
      <td><input type="text" name="qualification" id="qualification" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
    <tr bgcolor="#999999">
      <td>add_qualification</td>
      <td>增加商品资质</td>
      <td><input type="text" name="add_qualification" id="add_qualification" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
    <tr bgcolor="#999999">
      <td>o2o_bind_service</td>
      <td>关联线下服务</td>
      <td><input type="text" name="textfield" id="o2o_bind_service" /></td>
      <td>&nbsp;</td>
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
      <td>&nbsp;</td>
      <td>&nbsp;</td>
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
      <td>&nbsp;</td>
      <td>&nbsp;</td>
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
      <td>&nbsp;</td>
      <td>&nbsp;</td>
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
      <td>&nbsp;</td>
      <td>&nbsp;</td>
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
      <td></td>
    </tr>
  </table>
</form>
