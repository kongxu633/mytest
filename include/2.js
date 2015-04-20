$(document).ready(function(e) {
	//初始化数值
    defChecked();
	
	defHidden();
	specialHidden();
	//选择后自动写入
	select2input();
	//为空时判断
	input2select();
	
	//hookSubmit();
	$('#getCateProps').click(function(){
		$("#cateProps").empty();
		$("#inputPids").empty();
		$('[name^=cp_]').each(function(index, element) {
            $("#cateProps").append($(this).val()+';');
        });
		$("#inputValues").append($('#J_MainForm').serialize());
		x=$('#J_MainForm').serializeArray();
		$.each(x, function(i, field){
			if(field.value != ''){
				$("#inputPids").append(field.value + ';');
			}
		});
	});
});	

function defChecked(){
		//品牌
		$('#prop_20000 option:last').attr('selected','selected');
		$('#prop_20000').removeAttr("style");
		//货号
		$('#prop_13021751 option:last').attr('selected','selected');
		$('#prop_13021751').removeAttr("style");
		//设置Select索引值为1的项选中 $("#select_id ").get(0).selectedIndex=1;  
		//设置Select的Value值为4的项选中 $("#select_id ").val(4);   
		//设置Select的Text值为jQuery的项选中 $("#select_id option[text='jQuery']").attr("selected", true);
		//件数
		$('#prop_31745 option:eq(1)').attr('selected','selected');
		$('#simulate-prop_31745').val($('#prop_31745').find("option:selected").text().trim());
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
		$('#prop_6200039 option:eq(1)').attr('selected','selected');
		$('#simulate-prop_6200039').val($('#prop_6200039').find("option:selected").text().trim());
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
		$('#simulate-prop_27514393').val($('#prop_27514393').find("option:selected").text().trim());
		$('#prop_27514393').removeAttr("style");
		//织造工艺
		$('#prop_27530250').removeAttr("style");		
		
}

function defHidden(){
		$('[id^=simulate-prop_]').each(function(index, element) {
            //console.log($(this).attr('id')+'  ---  '+$(this).val());
			$(this).css({'display':'none', 'visibility':'hidden'});
        });
}

function specialHidden(){
			//商品条形码
			$('#spu_2814443').css({'display':'none', 'visibility':'hidden'});
			//货号
			$('#ariaby-prop_13021751').parent().css({'display':'none', 'visibility':'hidden'});
}


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
			$(inputid).val( $(this).find("option:selected:not(.J_other)").text().trim() );
			$(inputid).val() == '' ? $(inputid).css({'display':'', 'visibility':''}).show().focus() : $(inputid).css({'display':'none', 'visibility':'hidden'}) ;			
			/*
			inputtext = $(this).find("option:selected").hasClass('J_other') ? '' : $(this).find("option:selected").text().trim();
			inputtext == '' ? $(inputid).attr('visibility','show').show().focus() : $(inputid).val( inputtext );
			*/
			/*
			$(inputid).val( $(this).find("option:selected:not(.J_other)").text().trim() );
			$(inputid).val() == '' ? $(inputid).css({'display':'', 'visibility':''}).show().focus() : $(inputid).css({'display':'none', 'visibility':'hidden'}) ;
			*/
			//选中棉的二级分类
			if($(this).val() == '20021:105255'){selectCotton($(this));}
		});
}

function selectCotton(e){
	//alert(e.val());
}


function input2select(){
		//选择器还需要完善
		$('input').blur(function() {
			inputid = $(this).attr('id');
			if(inputid == 'simulate-prop_20000' || inputid == 'simulate-prop_13021751' || inputid == 'simulate-prop_9698958' || inputid == 'simulate-prop_9938993'){
					//这里需要将select选中默认值 不等于空的时候需要把select重置到其他
					($(this).val() == '') ? true : true;
			}
		
		});
		
}