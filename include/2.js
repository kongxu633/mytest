function defChecked(){
		//品牌
		$('#prop_20000 option:last').attr('selected','selected');
		$('#simulate-prop_20000').val('其他');
		$('#prop_20000').removeAttr("style");
		//货号
		$('#prop_13021751 option:last').attr('selected','selected');
		$('#prop_13021751').removeAttr("style");
		//设置Select索引值为1的项选中 $("#select_id ").get(0).selectedIndex=1;  
		//设置Select的Value值为4的项选中 $("#select_id ").val(4);   
		//设置Select的Text值为jQuery的项选中 $("#select_id option[text='jQuery']").attr("selected", true);
		//件数
		$('#prop_31745 option:eq(1)').attr('selected','selected');
		$('#simulate-prop_31745').val('4件');
		$('#prop_31745').removeAttr("style");
		
		//被面材质
		$('#prop_147784191').removeAttr("style");
		//被里材质
		$('#prop_20021').removeAttr("style");
		//图案
		$('#prop_20603').removeAttr("style");
		//款式
		$('#prop_122276315').removeAttr("style");
		//产品等级
		$('#prop_6200039').removeAttr("style");
		//风格
		$('#prop_20608').removeAttr("style");
		//面料支数
		$('#prop_9698958').removeAttr("style");
		//面料密度
		$('#prop_9938993').removeAttr("style");
		//商品条形码
		//印花工艺
		$('#prop_27514393 option:eq(1)').attr('selected','selected');
		$('#simulate-prop_27514393').val('活性印花');
		$('#prop_27514393').removeAttr("style");
		//织造工艺
		$('#prop_27530250').removeAttr("style");		
		
}

function defHidden(){
		//件数
		$('#simulate-prop_31745').css({'display':'none', 'visibility':'hidden'});
		//被面材质
		$('#simulate-prop_147784191').css({'display':'none', 'visibility':'hidden'});
		//被里材质
		$('#simulate-prop_20021').css({'display':'none', 'visibility':'hidden'});
		//图案
		$('#simulate-prop_20603').css({'display':'none', 'visibility':'hidden'});
		//款式
		$('#simulate-prop_122276315').css({'display':'none', 'visibility':'hidden'});
		//产品等级
		$('#simulate-prop_6200039').css({'display':'none', 'visibility':'hidden'});
		//风格
		$('#simulate-prop_20608').css({'display':'none', 'visibility':'hidden'});
		//商品条形码
		//印花工艺
		$('#simulate-prop_27514393').css({'display':'none', 'visibility':'hidden'});
		//织造工艺
		$('#simulate-prop_27530250').css({'display':'none', 'visibility':'hidden'});	
}
	
$(document).ready(function(e) {
	//初始化数值
    defChecked();
	
	defHidden();
	//选择后自动写入
	select2input();
	//为空时判断
	input2select();
	
	//hookSubmit();
});	


function hookSubmit(){
	$("form").submit(function(e){
		e.preventDefault();
		console.log($([id=prop_6253686]).each(function(index, element) {
            return $(this).val();
        }));
	});	
}

function select2input(){
		$("select").change(function() { 
			//获取select 选中的 text : $("#ddlregtype").find("option:selected").text(); 
			//获取select选中的 value: $("#ddlregtype ").val(); 
			//获取select选中的索引: $("#ddlregtype ").get(0).selectedindex;
			inputid = '#simulate-' + $(this).attr('id');
			$(inputid).val( $(this).find("option:selected").text().trim() );
			
		});
}

function input2select(){
		//选择器还需要完善
		$('input').blur(function() {
			inputid = $(this).attr('id');
			if(inputid == 'simulate-prop_20000' || inputid == 'simulate-prop_13021751' || inputid == 'simulate-prop_9698958' || inputid == 'simulate-prop_9938993'){
					//这里需要将select选中默认值
					($(this).val() == '') ? true : true;
			}
		
		});
		
}