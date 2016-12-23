var search_logo={
	"HSTYLE女装"	:"http://s.handu.com/themes/handuyishe/images/header_2014/sub_logo/hstyle.png",
	"Soneed女装"	:"http://s.handu.com/themes/handuyishe/images/header_2014/sub_logo/soneed.png",
	"AMH男装"		:"http://s.handu.com/themes/handuyishe/images/header_2014/sub_logo/amh.png",
	"Minizaru童装"	:"http://s.handu.com/themes/handuyishe/images/header_2014/sub_logo/mini.png",
	"NanaDay娜娜日记":"http://s.handu.com/themes/handuyishe/images/header_2014/sub_logo/nanaday.png",
	"Forqueens范奎恩":"http://s.handu.com/themes/handuyishe/images/header_2014/sub_logo/forqueen.png",
	"Dequanna迪葵纳":"http://s.handu.com/themes/handuyishe/images/header_2014/sub_logo/hanyunyixiang.png",
	"白鹿语"        :"http://s.handu.com/themes/handuyishe/images/header_2014/sub_logo/bly.png",
	"nibbuns女装"	:"http://s.handu.com/themes/handuyishe/images/header_2014/sub_logo/nibbuns.png",
	"樱桃小镇"		:"http://s.handu.com/themes/handuyishe/images/header_2014/sub_logo/ytxz.png",
	"劳拉的誓约"	:"http://s.handu.com/themes/handuyishe/images/header_2014/sub_logo/laolashiyue.png",
	"R•Maker暗码"	:"http://s.handu.com/themes/handuyishe/images/header_2014/sub_logo/anma.png",
	"HoneyPig蜜糖猪":"http://s.handu.com/themes/handuyishe/images/header_2014/sub_logo/hp.png",
	"SOULINE素缕"	:"http://s.handu.com/themes/handuyishe/images/header_2014/sub_logo/sulv.png",
	"zigu自古"		:"http://s.handu.com/themes/handuyishe/images/header_2014/sub_logo/zigu.png",
	"Garbha果芽"	:"http://s.handu.com/themes/handuyishe/images/header_2014/sub_logo/guoya.png",
	"哲初"	:"http://s.handu.com/themes/handuyishe/images/header_2014/sub_logo/zc.png",
	"池希"	:"http://s.handu.com/themes/handuyishe/images/header_2014/sub_logo/cx.png",
	"基易"	:"http://s.handu.com/themes/handuyishe/images/header_2014/sub_logo/jiyi.png",
	"猫猫包袋"	:"http://s.handu.com/themes/handuyishe/images/header_2014/sub_logo/mm.png",
	"步乐斯"	:"http://s.handu.com/themes/handuyishe/images/header_2014/sub_logo/bls.png",
}
function getsearchlogo(name){
    if(search_logo[name]!=undefined){
    	var $lo = "<span style='width:70px;height:25px;position:absolute;'><img src='"+search_logo[name]+"' width='70' height='25' style='display:block;'/></span>";
      	document.write($lo);
    }
}