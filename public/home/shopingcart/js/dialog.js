/*
 ==对话框弹出插件==
 author: ksc(http://blog.geekli.cn)
 lastupdate: 2014.05.12
 
 @param option={'text':'消息内容','title':'弹出框标题','time':'显示时间'}
 @param msg="消息内容";//其它参数默认
 popMsg(msg|option);
 
 ajax_form(url,id,width,title)
*/

var __DIALOG_WRAPPER__ = {};
var is_ie6=($.browser.msie && $.browser.version=='6.0');
/* IE6有个Bug，如果不给定对话框的宽度的话，在IE6下，对话框将以100%宽度显示 */
var DialogManager = {
    'create'        :function(id){
        var d = {};//bug(__DIALOG_WRAPPER__);
        if (!__DIALOG_WRAPPER__[id]){
            d = new Dialog(id);
            __DIALOG_WRAPPER__[id] = d;
        }
        else{
            d = DialogManager.get(id);
        }
        return d;
    },
    'get'           :function(id){
        return __DIALOG_WRAPPER__[id];
    },
    'close'         :function(id){
        if (__DIALOG_WRAPPER__[id].close()){
             __DIALOG_WRAPPER__[id] = null; // ! nh -
        }

    },
    'onClose'       :function (){
        return true;
    },
    /* 加载对话框样式 */
    'loadStyle'     :function(){
        //var _dialog_js_path = $('#dialog_js').attr('src');
        //var _path    = _dialog_js_path.split('/');
        //var _dialog_css = _path.slice(0, _path.length - 1).join('/') + '/dialog.css';
        var _dialog_css ='/js/dialog/dialog.css';
        $('head').append('<link href="' + _dialog_css + '" rel="stylesheet" type="text/css" />');
    }
};
var ScreenLocker = {
    'style'     : {
        'position'          : 'absolute',
        'top'               : '0px',
        'left'              : '0px',
        'backgroundColor'   : '#000',
		'width'				: '100%',
        'opacity'           : 0.5,
        'zIndex'            : 999
    },
    'masker'    : null,
    'lock'      : function(zIndex){
	//alert($(document).width()+':'+$(document).height());
		
        if (this.masker !== null && 1)
        {	
            this.masker.height($(document).height());
			 
            return true;
        }

        this.masker = $('<div></div>');

		/* IE6 Hack */
        if ($.browser.msie)
        {
            $('select').css('visibility', 'hidden');
        }
   

        /* 样式 */
        this.masker.css(this.style);

        if (zIndex)
        {
            this.masker.css('zIndex', zIndex);
        }

        /* 整个文档的宽高 */
       this.masker.height($(document).height());

        $(document.body).append(this.masker);
    },
    'unlock'    : function(){
        if (this.masker === null)
        {
            return true;
        }
        this.masker.remove();
        this.masker = null;

        /* IE6 Hack */
        if ($.browser.msie)
        {
            $('select').css('visibility', 'visible');
        }
    }
};

var Dialog        = function (id){
    /* 构造函数生成对话框代码，并加入到文档中 */
    this.id = id;
	this.lock=true;
    this.init();
};
Dialog.prototype = {
    /* 唯一标识 */
    'id'            : null,
    /* 文档对象 */
    'dom'           : null,
    'lastPos'       : null,
    'status'        : 'complete',
    'onClose'       : function (){
        return true;
    },
    'tmp'           : {},
    /* 初始化 */
    'init'          : function(){
        this.dom = {'wrapper' : null, 'body':null, 'head':null, 'title':null, 'close_button':null, 'content':null};

        /* 创建外层容器 */
        this.dom.wrapper        = $('<div id="dialog_object_' + this.id + '" did="'+this.id+'" class="dialog_wrapper"></div>').get(0);
	
        /* 创建对话框主体 */
        this.dom.body           = $('<div class="dialog_body"></div>').get(0);

        /* 创建标题栏 */
        this.dom.head           = $('<h3 class="dialog_head"></h3>').get(0);

        /* 创建标题文本 */
        this.dom.title          = $('<span class="dialog_title_icon"></span>').get(0);

        /* 创建关闭按钮 */
        this.dom.close_button   = $('<span class="dialog_close_button">close</span>').get(0);

        /* 创建内容区域 */
        this.dom.content        = $('<div class="dialog_content"></div>').get(0);
		/*border*/
		this.dom.border			=$('<div class="dialog_border" style="" ></div>').get(0);
        /* 组合 */
        $(this.dom.head).append('<div class="dialog_ornament1"></div><div class="dialog_ornament2"></div>').append($('<span class="dialog_title"></span>').append(this.dom.title)).append(this.dom.close_button);
        $(this.dom.body).append(this.dom.head).append(this.dom.content);
        $(this.dom.wrapper).append(this.dom.body).append('<div style="clear:both;display:block;"></div>');
		if(!is_ie6){
			$(this.dom.wrapper).append(this.dom.border);
		}
        /* 初始化样式 */
        $(this.dom.wrapper).css({
            'zIndex'            : 9999,
            'display'           : 'none',
            'position'          : 'absolute'//,
			//'overflow'			: 'hidden'
			
        });
		if(is_ie6){
			//$(this.dom.wrapper).css({'overflow'			: 'hidden'	});
			 $(this.dom.body).css({'border':'4px solid #ccc'});
		}
		$(this.dom.border).css({
			 'left':'-5px',
			 'top': '-5px',
            'zIndex'            : 9990,
            'display'           : 'block',
            'position'          : 'absolute' 
 
        });
        $(this.dom.body).css({
			 'zIndex'   : 9991,
            'position'  :   'relative'
			//'margin'			: '4px' 
        });
        $(this.dom.head).css({
            //'cursor'     : 'move'
        });
        $(this.dom.close_button).css({
            'position'   : 'absolute',
            'text-indent': '-9999px',
            'cursor'     : 'pointer',
            'overflow'   : 'hidden'
        });
        $(this.dom.content).css({
            'margin'     : '0px',
            'padding'    : '0px'
        });

        var self = this;

        /* 初始化组件事件 */
        $(this.dom.close_button).click(function(){
            DialogManager.close(self.id);
        });

        /* 可拖放 */
		if(typeof $().draggable =='function' )
        $(this.dom.wrapper).draggable({
            'handle' : this.dom.head
        });

        /* 放入文档流 */
        $(document.body).append(this.dom.wrapper);
    },

    /* 隐藏 */
    'hide'          : function(){
        $(this.dom.wrapper).hide();
    },

    /* 显示 */
    'show'          : function(pos,lock){
        if (pos){
            this.setPosition(pos);
        }
		/* 是否锁定屏幕 */
		this.lock=(typeof lock !='undefined')?lock:this.lock;
		if (this.lock){
			ScreenLocker.lock(999);
		} 
        /* 显示对话框 */
        $(this.dom.wrapper).show();
    },

    /* 关闭 */
    'close'         : function(){
        if (!this.onClose()){
            return false;
        }
        /* 关闭对话框 */
        $(this.dom.wrapper).remove();
       // $(this.dom.wrapper).hide();

        /* 解锁屏幕 */
		if(this.lock){
			ScreenLocker.unlock();
		}
        return true;
    },

    /* 对话框标题 */
    'setTitle'      : function(title){
        $(this.dom.title).html(title);
		$(this.dom.wrapper).addClass('dialog_has_title');
    },

    /* 改变对话框内容 */
    'setContents'   : function(type, options){
        contents = this.createContents(type, options);
        if (typeof(contents) == 'string' ){
			if(type!='ajax'){//在type==ajax 时 createContents 返回为空 
				$(this.dom.content).html(contents);
			}
        }
        else{
            $(this.dom.content).empty();
            $(this.dom.content).append(contents);
        }
    },

    /* 设置对话框样式 */
    'setStyle'      : function(style){
        if (typeof(style) == 'object'){
            /* 否则为CSS */
            $(this.dom.wrapper).css(style);
			
        }
        else{
            /* 如果是字符串，则认为是样式名 */
            $(this.dom.wrapper).addClass(style);
        }
    },
    'setWidth'      : function(width){
        this.setStyle({'width' : width + 'px'});
		$(this.dom.border).css({'width' : (width+10) + 'px'});
    },
    'setHeight'     : function(height){
        this.setStyle({'height' : height + 'px'});
    },

    /* 生成对话框内容 */
    'createContents'  : function(type, options){
        var _html = '',
            self  = this,
            status= 'complete';
        if (!options){
            /* 如果只有一个参数，则认为其传递的是HTML字符串 */
            this.setStatus(status);
            return type;
        }
        switch(type){
            case 'ajax':
				   /* 先提示正在加载 */
                //_html = this.createContents('loading', {'text' : 'loading...'});//在ie6下出问题 可能与ajax异步相关
				this.showLoading();
                /* 通过Ajax取得HTML，显示到页面上，此过程是异步的 */
                $.get(options, {ajax:1,t1:Math.random()}, function(data){
                    if(data.substr(0,1) == '{' && data.substr(data.length - 1, 1) == '}'){
                        var JSON = eval('(' + data + ')');
                        if(!JSON.done){
                           //self.setContents(JSON.msg);
						   self.setContents('message',{'type':'notice','title':'提示信息','text':JSON.msg});
                           return;
                        }
                    }
					//alert(data);
                    self.setContents(data);
                    /* 使用上次定位重新定位窗口位置 */
                    self.setPosition(self.lastPos);
                });
             
            break;
            /* 以下是内置的几种对话框类型 */
            case 'loading':
                _html = '<div class="dialog_loading"><div class="dialog_loading_text">' + options.text + '</div></div>';
                status = 'loading';
            break;
            case 'message':
                var type = 'notice';
                if (options.type){
                    type = options.type;
                }
                var _message_body = $('<div class="dialog_message_body"></div>');
                var _message_contents = $('<div class="dialog_message_contents dialog_message_' + type + '">' + options.text + '</div>');
                var _buttons_bar = $('<div class="dialog_buttons_bar"></div>');
                switch (type){
                    case 'notice':
                    case 'warning':
                        var button_name = '确认';
                        if (options.button_name){
                            button_name = options.button_name;
                        }
                        var _ok_button = $('<input type="button" class="btn1" value="' + button_name + '" />');
                        $(_ok_button).click(function(){
                            if (options.onclick){
                                if(!options.onclick.call()){
                                    return;
                                }
                            }
                            DialogManager.close(self.id);
                        });
                        $(_buttons_bar).append(_ok_button);
                    break;
                    case 'confirm':
                        var yes_button_name = '确定';
                        var no_button_name = '取消';
                        if (options.yes_button_name){
                            yes_button_name = options.yes_button_name;
                        }
                        if (options.no_button_name){
                            no_button_name = options.no_button_name;
                        }
                        var _yes_button = $('<input type="button" class="btn1" value="' + yes_button_name + '" />');
                        var _no_button = $('<input type="button" class="btn2" value="' + no_button_name + '" />');
                        $(_yes_button).click(function(){
                            if (options.onClickYes)
                            {
                                if (options.onClickYes.call() === false)
                                {
                                    return;
                                }
                            }
                            DialogManager.close(self.id);
                        });
                        $(_no_button).click(function(){
                            if (options.onClickNo)
                            {
                                if (!options.onClickNo.call())
                                {
                                    return;
                                }
                            }
                            DialogManager.close(self.id);
                        });
                        $(_buttons_bar).append(_yes_button).append(_no_button);
                    break;
                }
                _html = $(_message_body).append(_message_contents).append(_buttons_bar);

            break;
        }
        this.setStatus(status);

        return _html;
    },
    /*显示载入对话框*/
	'showLoading'	:	function(){
		var s1= '<div class="dialog_loading"><div class="dialog_loading_text">' +'loading...'+ '</div></div>';
		this.setContents(s1);
	},
	/* 定位 */
    'setPosition'   : function(pos){
        /* 上次定位 */
        this.lastPos = pos;
        if (typeof(pos) == 'string' || pos ==null)
        {	pos=(pos==null)?'center':pos;
            switch(pos){
                case 'center':
                    var left = 0;
                    var top  = 0;
                    var dialog_width    = $(this.dom.wrapper).width();
                    var dialog_height   = $(this.dom.wrapper).height();


                    /* left=滚动条的宽度  + (当前可视区的宽度 - 对话框的宽度 ) / 2 */
                    left = $(window).scrollLeft() + ($(window).width() - dialog_width) / 2;

                    /* top =滚动条的高度  + (当前可视区的高度 - 对话框的高度 ) / 2 */
                    top  = $(window).scrollTop()  + ($(window).height() - dialog_height) / 2;

                    $(this.dom.wrapper).css({left:left + 'px', top:top + 'px'});
                break;
            }
        }
        else
        {
            var _pos = {};
            if (typeof(pos.left) != 'undefined')
            {
                _pos.left = pos.left;
            }
            if (typeof(pos.top)  != 'undefined')
            {
                _pos.top  = pos.top;
            }
            $(this.dom.wrapper).css(_pos);
        }

    },
    /* 设置状态 */
    'setStatus' : function(code){
        this.status = code;
    },
    /* 获取状态 */
    'getStatus' : function(){
        return this.status;
    },
    'disableClose' : function(msg){
        this.tmp['oldOnClose'] = this.onClose;
        this.onClose = function(){
            if(msg)alert(msg);
            return false;
        };
    },
    'enableClose'  : function(){
        this.onClose = this.tmp['oldOnClose'];
        this.tmp['oldOnClose'] = null;
    }
};

DialogManager.loadStyle();
function popMsg(options){
	var setting={
				'type':'notice',
				'title':'提示信息',
				text:'',
				time:2.5,//显示时间
				'lock':false,//是否锁屏
				'width':300,
				onclosed:function(){}
				};
	if(typeof(options)=='string'){
		setting.text=options;
	}else{
		$.extend(setting, options); 
	}
 
	var d = DialogManager.create('L_popMsg');
 
    d.setTitle(setting.title);
     
	d.setContents('message',setting);
    d.setWidth(setting.width);	 
    d.show('center',false);
	if(setting.time>0){
		setTimeout(function(){
						try{// 用户可能会手动关闭对话
							DialogManager.close('L_popMsg');
						}catch(e){}
						setting.onclosed();
					},
					setting.time*1000);
	}	
}
//弹出确认对话框
function popConfirm(options){
    var d = DialogManager.create('L_confirm_dialog');
    var setting={
				'type':'confirm',
				'title':'',
				text:'',
				'lock':false,//是否锁屏
				'width':300,
				onClickYes:function(){},
				onClickNo:function(){ return true;}
				};
    $.extend(setting, options); 
    if(setting.title!=''){
        d.setTitle(setting.title);
    }
	d.setContents('message',setting);
    d.setWidth(300);
    d.show('center',false);

}
function ajax_form(url,id, width ,title){
    if (!width){
        width = 400;
    }
    var d = DialogManager.create(id);
	if(typeof(title)!=='undefined' &&  title!=''){
		d.setTitle(title);
	}
    d.setContents('ajax', url);
    d.setWidth(width);
    d.show('center',false);

    return d;
}

function popDialogHtml(content,id,width,title){
    var d = DialogManager.create(id);
    if(typeof(title)!=='undefined' &&  title!=''){
		d.setTitle(title);
	}
	d.setContents(content);
    if(!width){
        width=400;
    }
    d.setWidth(width); 
    d.show('center',false);
}