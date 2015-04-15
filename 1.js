var json = {"itemprops_get_response":{"item_props":{"item_prop":[{"multi":true,"must":false,"name":"适用床尺寸","pid":5569827,"prop_values":{"prop_value":[{"name":"1.0m（3.3英尺）床","vid":55481260},{"name":"1.2m（4英尺）床","vid":55481261},{"name":"1.35m（4.5英尺）床","vid":55481262},{"name":"1.5m（5英尺）床","vid":55481263},{"name":"1.8m（6英尺）床","vid":55481264},{"name":"2.0m（6.6英尺）床","vid":55481265},{"name":"2.2m（7英尺）床","vid":89027723},{"name":"2.5m（8英尺）床","vid":89027775},{"name":"2.8m（9英尺）床","vid":89027830},{"name":"其它","vid":10122}]}},{"multi":true,"must":false,"name":"颜色分类","pid":1627207,"prop_values":{"prop_value":[{"name":"军绿色","vid":3232483},{"name":"天蓝色","vid":3232484},{"name":"巧克力色","vid":3232481},{"name":"桔色","vid":90554},{"name":"浅灰色","vid":28332},{"name":"浅绿色","vid":30156},{"name":"浅黄色","vid":60092},{"name":"深卡其布色","vid":3232482},{"name":"深灰色","vid":3232478},{"name":"深紫色","vid":3232479},{"name":"深蓝色","vid":28340},{"name":"白色","vid":28320},{"name":"粉红色","vid":3232480},{"name":"紫罗兰","vid":80882},{"name":"紫色","vid":28329},{"name":"红色","vid":28326},{"name":"绿色","vid":28335},{"name":"花色","vid":130164},{"name":"蓝色","vid":28338},{"name":"褐色","vid":132069},{"name":"透明","vid":107121},{"name":"酒红色","vid":28327},{"name":"黄色","vid":28324},{"name":"黑色","vid":28341}]}}]}}};

//var DM_item_size = json.itemprops_get_response.item_props.item_prop[0];
//var DM_item_color = json.itemprops_get_response.item_props.item_prop[1];
//var DM_size = DM_item_size.pid;
//var DM_color = DM_item_color.pid;
//console.log(DM_size);
//console.log(DM_color);
//console.log(DM_item_size.prop_values.prop_value[0].name);
//console.log(DM_item_size.prop_values.prop_value[0].vid);

var DM_item_size = json.itemprops_get_response.item_props.item_prop[0];
var DM_item_color = json.itemprops_get_response.item_props.item_prop[1];

var DM_color			= DM_item_color.pid;	//颜色编码
var DM_color_name		= new Array();
	DM_color_name		= json2array(DM_item_color.prop_values,'name');
var DM_color_vid		= new Array();
	DM_color_vid		= json2array(DM_item_color.prop_values,'vid');
	
	
var DM_size				= DM_item_size.pid;	//尺寸编码
var DM_size_name		= new Array();
	DM_size_name		= json2array(DM_item_size.prop_values,'name');
var DM_size_vid			= new Array();	
	DM_size_vid			= json2array(DM_item_size.prop_values,'vid');
	
//console.log(DM_color_name);


function json2array(o) {
    var arr = new Array();
    for (var i in o.prop_value) {
        arr.push([o.prop_value[i].name, o.prop_value[i].vid]);
    }
    return arr;
}

function json2array(o, prop) {
    var arr = new Array();
    for (var i in o.prop_value) {
        if (prop == 'name') {
            arr.push(o.prop_value[i].name);
        }
        else {
            arr.push(o.prop_value[i].vid);
        }
    }
    return arr;
}