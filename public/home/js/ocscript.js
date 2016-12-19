/*******下来菜单****************/
var DDSPEED = 1;
var DDTIMER = 1;

// main function to handle the mouse events //
function ddMenu(id,d){
  var h = document.getElementById(id + '-ddheader');
  var c = document.getElementById(id + '-ddcontent');
  document.getElementById(id + '-heradera').style.color='#fff'; 
  clearInterval(c.timer);
  if(d == 1){
    clearTimeout(h.timer);
    if(c.maxh && c.maxh <= c.offsetHeight){return}
    else if(!c.maxh){
	  
      c.style.display = 'block';
      c.style.height = 'auto';
      c.maxh = c.offsetHeight;
      c.style.height = '0px';
    }
    c.timer = setInterval(function(){ddSlide(c,1)},DDTIMER);
  }else{
	h.className='';

	document.getElementById(id + '-heradera').style.color='#fff'; 

    h.timer = setTimeout(function(){ddCollapse(c)},50);
  }
}

// collapse the menu //
function ddCollapse(c){
  c.timer = setInterval(function(){ddSlide(c,-1)},DDTIMER);
}

// cancel the collapse if a user rolls over the dropdown //
function cancelHide(id){
  var h = document.getElementById(id + '-ddheader');
  var c = document.getElementById(id + '-ddcontent');
  clearTimeout(h.timer);
  clearInterval(c.timer);
  if(c.offsetHeight < c.maxh){
    c.timer = setInterval(function(){ddSlide(c,1)},DDTIMER);
  }
  if(h.className!='lianjie'){
  	h.className='lianjie';
	document.getElementById(id + '-heradera').style.color='#fff';
  }
}

// incrementally expand/contract the dropdown and change the opacity //
function ddSlide(c,d){
  var currh = c.offsetHeight;
  var dist;
  if(d == 1){
    dist = (Math.round((c.maxh - currh) / DDSPEED));
  }else{
    dist = (Math.round(currh / DDSPEED));
  }
  if(dist <= 1 && d == 1){
    dist = 1;
  }
  c.style.height = currh + (dist * d) + 'px';
  c.style.opacity = currh / c.maxh;
  c.style.filter = 'alpha(opacity=' + (currh * 100 / c.maxh) + ')';
  if((currh < 2 && d != 1) || (currh > (c.maxh - 2) && d == 1)){
    clearInterval(c.timer);
  }
}





/****鼠标移上显示购物车****/
function showDiv(){
//divSeat();
   document.getElementById('forumlist_menudiv').style.display = "block";//显示div
}
function hideDiv(){
      //divSeat();
   document.getElementById('forumlist_menudiv').style.display = "none";//隐藏div
}

function divSeat(){
     var pos = getElementPos(document.getElementById("ECS_CARTINFO"));
    document.getElementById("forumlist_menudiv").style.left   = pos[0]+1+"px";  
     document.getElementById("forumlist_menudiv").style.top   = pos[1]+23+"px";   
}
function getElementPos(obj)  
{  
    var left = 0;  
    var top = 0;  

    if(obj.x)  
    {  
        left= obj.x;  
        top = obj.y;  
    }else if(obj.offsetParent)  
    {     
        while(obj.offsetParent)  
        {         
            left += obj.offsetLeft;  
            top += obj.offsetTop;  
            obj = obj.offsetParent;  
        }   
    }  

    return [left,top];//作为一个数组返回
}


/* 导航删除购物车中的商品 */
function dropHeadFlowNum(goods_id) {
	Ajax.call('flow.php?step=delete_goods', 'id=' + goods_id, delFromCartResponse, 'POST', 'HTML');
	document.getElementById("HeadgoodsItem_"+goods_id).innerHTML = '';
}

function delFromCartResponse(result){
	document.getElementById("ECS_CARTINFO").innerHTML = result;
	//修改top购物车的数量
	$('#cartTopGoodsNumber').html($("#cartGoodsNumber").html());
}
