
/* @file mqtt.chat.js
 * @date 2016.11.14 16:51:52 
 */
!function(a,b){var c="ntguest",d="xiaoneng123";a.Connection={name:"Connection",debug:!0,client:null,mqttMessageTopic:"",mqttWillTopic:"",chatRouteTopic:"",sessionId:"",_urlExp:/(wss?:)\/\/(.*?):(\d+)\/(\w+)/gi,_ssl:!1,_mqttserver:"",_clientId:"",_protocol:"",_host:"",_port:80,_path:"",_options:"",_conn:!1,_reconnectCount:0,_waitTime:0,_timeout:6,_keepAliveInterval:60,eventCallback:{onConnectSuccess:{},onConnectFailure:{},onResponse:{},onPublish:{}},connect:function(a,b){return this._conn=!0,this.client&&this.client.isConnected()?(this._fireEvent("onConnectSuccess",this.mqttMessageTopic),!0):this._connectMqtt(a,b)},disconnect:function(){this._conn=!1,this.client&&this.client.isConnected()&&this._disconnectMqtt()},publish:function(b,c){var d,e;return this.client&&this.client.isConnected()?b&&"object"==typeof b?(d=a.JSON.toJSONString(b),(c=c||this.chatRouteTopic)?(e=this._mqttMessage(d,c),this.debug&&a.Log(this._clientId+" $.Connection.publish("+d+", "+c+")",2),this.client.send(e)):(this.debug&&a.Log(this._clientId+" publish param topic is null>"+d),!1)):(this.debug&&a.Log(this._clientId+" publish param jsonMessage failure",3),!1):(this.debug&&a.Log(this._clientId+" publish failure, client disconnect",3),!1)},register:function(b,c,d){var e,f=!1;"function"==typeof d?("undefined"==typeof this.eventCallback[c]&&(this.eventCallback[c]={}),a.each(this.eventCallback[c],function(a,c){c!==d&&b!==a||(f=!0)}),f!==!0&&(this.debug&&a.Log(this._clientId+" $.Connection.reqister("+c+")"),this.eventCallback[c][b]=d)):"string"==typeof d&&(e=methodName.split("."),mehtod=a,a.each(e,function(a,b){mehtod=mehtod[b]}),"undefined"==typeof this.eventCallback[key]&&(this.eventCallback[key]={}),a.each(this.eventCallback[c],function(a,c){c!==mehtod&&b!==a||(f=!0)}),f!==!0&&(this.debug&&a.Log(this._clientId+" $.Connection.reqister("+methodName+")"),this.eventCallback[c][b]=mehtod))},unregister:function(b){var c=this;a.each(this.eventCallback,function(d,e){a.each(e,function(a,e){a===b&&delete c.eventCallback[d][a]})})},subscribe:function(b,c){if(!this.client||!this.client.isConnected())return!1;this.debug&&a.Log(this._clientId+" $.Connection.subscribe("+b+")");c=a.extend({qos:1},c),this.client.subscribe(b,c)},unsubscribe:function(b){return this.client&&this.client.isConnected()&&b?(this.debug&&a.Log(this._clientId+" $.Connection.unsubscribe("+b+")"),void this.client.unsubscribe(b)):!1},onConnectionLost:function(b){0!==b.errorCode&&(this.debug&&a.Log(this._clientId+" $.Connection.onConnectionLost() > "+b.errorMessage,3),this._reconnectMqtt())},onPublish:function(b){var c,d;if(!this.client||!this.client.isConnected())return!1;this.debug&&a.Log(this._clientId+" $.Connection.onPublish() > "+b.payloadString,2);try{c=a.JSON.parseJSON(b.payloadString)}catch(e){try{c=JSON.parse(b.payloadString)}catch(f){c={},a.Log("$.Connection.onPublish(): "+f.message,3)}}d=c.method||"","responseServer"===d?this.responseServer.apply(this,Array.prototype.concat.call([b.destinationName],c.params)):d&&this._fireEvent("onPublish",Array.prototype.concat.call([b.destinationName,d],c.params))},responseServer:function(b,c,d,e,f){var g=this;this.subscribe(d,{onSuccess:function(b){this.debug&&a.Log(g._clientId+" $.Connection.subscribe()>"+$JSON.toJSONString(b),2)},onFailure:function(b){this.debug&&a.Log(g._clientId+" $.Connection.subscribe()>"+$JSON.toJSONString(b),3),g._fireEvent("onConnectSuccess",g.mqttMessageTopic)}}),this.subscribe(e),this._fireEvent("onResponse",b,c,d,e,f)},getRegisterMethod:function(){return this.eventCallback},_connectMqtt:function(b,e){var f=this,g=b;if(!this._mqttserver||this._mqttserver!==g){if(g=g||this._mqttserver,!this._format(g))return!1;this.chatRouteTopic="S/ROUTE/"+this._path}if(!this._clientId||this._clientId!==e){if(this._clientId=e||this._clientId,!this._clientId)return!1;this.mqttMessageTopic="C/"+this._clientId,this.mqttWillTopic="S/WILL/"+this._clientId}this._options={userName:c,password:d,useSSL:this._ssl,timeout:this._timeout,keepAliveInterval:this._keepAliveInterval,cleanSession:!1,willMessage:this._mqttMessage("{}"),mqttVersion:4,onSuccess:function(){f._success()},onFailure:function(a){f._failure(a)}},a.browser.supportMqtt?(this.client?this.debug&&a.Log("reconnect mqtt server",2):(this.debug&&a.Log("connect mqtt server",2),this.client=new a.MQTT.Client(this._host,this._port,this._clientId),this.client.onConnectionLost=function(a){f.onConnectionLost(a)},this.client.onMessageArrived=function(a){f.onPublish(a)}),this.client.connect(this._options),this.debug&&this.client.startTrace()):(this.client=a.MQTT.flashSock,this.client.onConnectionLost=function(a){f.onConnectionLost(a)},this.client.onMessageArrived=function(a){f.onPublish(a)},this.client.init(this._host,this._port,this._clientId,this._options))},_reconnectMqtt:function(){if((!this.client||!this.client.isConnected())&&this._conn){var b=this;++this._reconnectCount<=3?this._waitTime=50:this._waitTime=1e3*+"034567890".charAt(Math.ceil(5*Math.random())),this.debug&&a.Log(this._clientId+" wait recontent mqtt:"+this._waitTime,3),this._fireEvent("onConnectFailure",this.mqttMessageTopic),setTimeout(function(){b._connectMqtt(b._mqttserver,b._clientId)},this._waitTime)}},_disconnectMqtt:function(){var a=this._mqttMessage("{}");this.publish(a,this.mqttWillTopic),this.unsubscribe(this.mqttMessageTopic),this.client&&(this.debug&&this.client.stopTrace(),this.client.disconnect(),this.client.clear&&this.client.clear()),this.client=null},_format:function(b){var c,d;return b&&""!==b?(d=a.isObject(b)?a.browser.supportMqtt?"http:"===a.protocol?b.ws?b.ws:b.wss.replace(/^wss:/,"ws:"):b.wss?b.wss:b.ws.replace(/^ws:/,"wss:"):b.tcp:b,c=this._urlExp.exec(d),c&&c.length||(c=d.replace(/(wss?|tcp):\/\//gi,",$1,").replace(/:(\d+)/gi,",$1").replace(/\//gi,",").split(","),c&&c.length||a.Log("url:"+d+", math:"+c,2)),this._protocol=c[1]||"ws:",this._ssl="wss:"===this._protocol,this._host=c[2],this._port=Number(c[3])||(this._ssl?443:80),this._path=c[4]||"mqtt",this._mqttserver=d,!0):!1},_success:function(){this.debug&&a.Log(this._clientId+" $.Connection connect success."),this._reconnectCount=0,this.subscribe(this.mqttMessageTopic),this._fireEvent("onConnectSuccess",this.mqttMessageTopic)},_failure:function(b){this.debug&&a.Log(this._clientId+" $.Connection connect failure."),this._fireEvent("onConnectFailure",this.mqttMessageTopic),this._reconnectMqtt()},_fireEvent:function(){var b=this,c=Array.prototype.slice.call(arguments),d=c[0],e=c.slice(1);a.each(this.eventCallback[d],function(a,c){"onResponse"===d?c.apply(b,e.slice(1)):c.apply(b,e)})},_mqttMessage:function(b,c){var d=new a.MQTT.Message(b);return c=c||this.mqttWillTopic,d.qos=1,d.destinationName=c,d}},a(window).bind("unload",function(){a.Connection.disconnect()})}(nTalk),function(a,b){a.Connection.TChat=a.Class.create(),a.Connection.TChat.prototype={name:"TChat",options:null,data:null,connect:null,debug:!1,login:!1,connected:!1,status:!1,defBody:{bold:!1,italic:!1,color:"000000",fontsize:"14",underline:!1},clientWillTopic:"",serverTopic:"",clientTopic:"",_reconnect_mqtt_count:0,_reconnect_tchat_count:0,_waitReconnectTimeID:null,_roomConnectTimeID:null,_roomConnectTimeout:5e3,roomConnectTimeout:2e3,robotQueue:0,initialize:function(b){this.sendHASH=new a.HASH,this.receiveHASH=new a.HASH,this.completeHASH=new a.HASH,this.data=a.store,this._reconnect_tchat_count=0,this._reconnect_mqtt_count=0,this.options=a.extend({deviceType:a.browser.mobile?3:0,chatType:"0",chatValue:"0"},a.whereGet(b,["siteid","settingid","tchatmqttserver","tchatgoserver","serverurl","machineID","userid","username","sessionid","destid","resourceurl","statictis","htmlsid","connectid","userlevel","disconnecttime","mini","chattype","chatvalue"],["siteId","settingId","tchatmqttserver","tchatgoserver","serverurl","machineID","userId","userName","sessionId","targetId","resourceurl","statictis","htmlSid","connectId","userLevel","disconnectTime","mini","chatType","chatValue"])),(!this.options.machineID||this.options.machineID.length<=10)&&(this.options.machineID=this.data.get("machineid"),(!this.options.machineID||this.options.machineID.length<=10)&&(this.options.machineID=a.base._createScriptPCID())),this.data.set("machineid",this.options.machineID);var c=this.options.tchatmqttserver.toString().split(";");this.options.tchatmqttserver={};for(var d=0;d<c.length;d++)c[d]&&(c[d].indexOf("ws:")>-1?this.options.tchatmqttserver.ws=c[d]:c[d].indexOf("wss:")>-1?this.options.tchatmqttserver.wss=c[d]:c[d].indexOf("tcp")>-1&&(this.options.tchatmqttserver.tcp=c[d]));this.clientId=this.options.connectId,this.options.userId||(this.options.userId=a.base.userIdFix+this.options.machineID.substr(0,21)),this.debug&&a.Log("initialize mqtt chatConnect"),this.status=!0,this.firstConnected=!0,this._initQueue(),this.loginConnect()},loginConnect:function(){var b=this;a.Log("connect tChat",1),this.connect=a.Connection,this.connect.register(this.options.settingId,"onConnectSuccess",function(){b.requestServer()}),this.connect.register(this.options.settingId,"onConnectFailure",function(){b._onAbnormal.apply(b,arguments)}),this.connect.register(this.options.settingId,"onResponse",function(a,c,d,e){b.roomConnect(a,c,d,e)}),this.connect.register(this.options.settingId,"onPublish",function(){b._onCallback.apply(b,arguments)}),this.connect.connect(this.options.tchatmqttserver,b.clientId),this.sessionIdleReplys={},this.sessionIdleReplys[+this.options.disconnectTime]="超时未发送消息，自动断开连接"},requestServer:function(){var a=this;return this.connected?!1:(this.connected=!0,this.connect.publish({method:"requestServer",params:[this.options.userId,this.clientId,this.options.settingId,this.options.targetId,this.options.sessionId]},this.connect.chatRouteTopic),void(this._roomConnectTimeID=setTimeout(function(){a.reconnect()},this._roomConnectTimeout)))},roomConnect:function(b,c,d,e){return this.options.settingId!==e?!1:(a.Log("$.Connection.TChat.roomConnect("+b+", "+c+", "+d+", "+e+")"),this.clientTopic=b,this.clientWillTopic=c,this.serverTopic=d,void this.connect.publish({method:"roomConnect",params:[this.options.userId,"",this.options.sessionId,this.options.targetId,this.options.machineID,this.options.deviceType,this.options.chatType,this.options.chatValue,this.options.userName,this.options.userLevel,this.options.settingId]},this.clientTopic))},stopReroomConnect:function(){clearTimeout(this._roomConnectTimeID),this._roomConnectTimeID=null},startKaliveConnect:function(){var b=this;this.stopKaliveConnect(),this.kaliveTimeId=setInterval(function(){a.Log("nTalk.TChat.kaliveConnect()",1),b.connect.publish({method:"remoteKeepAlive",params:[b.options.clientId,b.options.userId]},b.clientTopic)},6e4)},stopKaliveConnect:function(){clearInterval(this.kaliveTimeId),this.kaliveTimeId=null},reconnect:function(){var b=this;return this.connected=!1,this.connect.unsubscribe(this.clientWillTopic),this.connect.unsubscribe(this.serverTopic),this.connect.unregister(this.options.settingId),++this._reconnect_tchat_count<=3?this._waitTime=500:this._waitTime=1e3*+"034567890".charAt(Math.ceil(5*Math.random())),a.Log("TChat.reconnect(): waitTime:"+this._waitTime),this.status?void(this._waitReconnectTimeID=setTimeout(function(){b.loginConnect()},this._waitTime)):void a.Log("stop reconnect")},disconnect:function(){var a=this;for(var b in this.sessionIdleReplys)this.sessionIdleTimeouts&&this.sessionIdleTimeouts[b]&&clearTimeout(this.sessionIdleTimeouts[b].id);this.status=!1,this.login=!1,this.connected=!1,clearTimeout(this._waitReconnectTimeID),this._waitReconnectTimeID=null,this.stopKaliveConnect(),a.options.clientId&&this.clientTopic&&this.connect.publish({method:"remoteEndConnection",params:[a.options.clientId,a.options.userId]},this.clientTopic),this.connect.unsubscribe(this.clientWillTopic),this.connect.unsubscribe(this.serverTopic),this.connect.unregister(this.options.settingId),this.clientTopic="",this.clientWillTopic="",this.serverTopic=""},sendMessage:function(b){var c,d;b=a.isObject(b)?b:a.JSON.parseJSON(b),b=a.charFilter(b),d=a.whereGet(b,["type","msgid"],["type","msgid"]),b.url&&(d=a.extend(d,a.whereGet(b,["url","emotion","oldfile","size","extension","sourceurl","mp3","length"]))),c={flashuid:b.timerkeyid,msgid:b.msgid,src:b,json:{},xml:""},"object"==typeof b.msg?c.json.msg=a.extend(b.msg,{attributes:d}):(d=a.extend({},d,this.defBody),c.json.msg=a.extend({text:b.msg},{attributes:d})),b.msg.evaluate&&(c.json.msg.evaluate=a.JSON.toJSONString(b.msg.evaluate)),c.xml=a.jsonToxml(c.json),this.sendHASH.add(c.msgid,c),5===b.type||this.robotQueue||this.processSessionIdle(),this.messageQueue.addMessage(c),this.startSend(c)},sendAbnormal:function(b){if(!this.completeHASH.contains(b)){var c=this.sendHASH.items(b),d=a.getTime(),e=a.extend({type:9,msgType:2,timesample:d,msgid:d+"J",userid:"system"},c.src);this._callback("fIM_receiveMessage",[e])}},startSend:function(b){b&&this.login&&(b.timestamp&&b.recount||(b.timestamp=a.getTime(),b.recount=1),this.connect.publish({method:"remoteSendMessage",params:[this.options.userId,this.options.clientId,this.options.sessionId,b.xml,b.flashuid]},this.clientTopic))},_callbackComplete:function(a,b){a&&(this.messageQueue.removeMessage(b),this.completeHASH.add(b,this.sendHASH.items(b)))},verificationMessage:function(){for(var b=this.messageQueue.first(),c=a.getTime(),d=0,e=2;b;){if(5===b.src.type)this.messageQueue.removeMessage(b.msgid);else if(c-b.timestamp>=3e3)if(b.recount>=3)this.sendAbnormal(b.msgid),this.messageQueue.removeMessage(b.msgid);else{if(d>=e){b=this.messageQueue.nextMessage(b.msgid);continue}d++,b.timestamp=c,b.recount++,this.login?this.startSend(b):this.sendAbnormal(b.msgid)}b=this.messageQueue.nextMessage(b.msgid)}},closeTChat:function(){this.disconnect()},setTextStyle:function(a){a&&a.fontsize&&(this.defBody.fontsize=a.fontsize)},predictMessage:function(a){this.connect.publish({method:"onPredictMessage",params:[this.options.sessionId,this.options.userId,a]},this.clientTopic)},LoginResult:function(b,c,d,e,f,g){this.login=b===!0,this.options.result=b===!0?1:0,this.options.clientId=c,this.options.sessionId=e,this.options.soid=f,this.options.time=g;try{this.options.userInfo=a.JSON.parseJSON(d)}catch(h){this.options.userInfo=this.options.userInfo||{}}return this.stopReroomConnect(),this._callback("fIM_tchatFlashReady",[this.options.userId,this.options.machineID]),this.options.result&&(this.firstConnected===!0&&(this.firstConnected=!1,this.processSessionIdle()),this.userInfo={myuid:this.options.userInfo.userid,myuname:this.options.userInfo.username,signature:"",mylogo:this.options.userInfo.usericon||"",sessionid:this.options.sessionId,timesample:this.options.time}),this.options.userInfo&&this.options.userInfo.connectable===!1?void this._callback("fIM_onGetUserInfo",['{"status": 0}']):(this.options.result?(this.startKaliveConnect(),this._reconnect_tchat_count=0,this.flashgourl=this.disconecturl(this.options.tchatgoserver),this._callback("fIM_setTChatGoServer",[this.flashgourl])):(this.reconnect("login relogin"),this.userInfo="",this.stopKaliveConnect()),void this._callback("fIM_ConnectResult",[this.options.result,this.userInfo,""]))},disconecturl:function(b){return b+"?"+a.toURI({from:"TCHAT",cid:this.options.clientId,sitid:this.options.siteId,uid:this.options.userId,ts:a.getTime()})},remoteHistroyMessage:function(){for(var b,c,d,e=this,f=(arguments[0],0),g=[],h={history:1},i=1;i<arguments.length;i++)switch(i%4){case 1:h.timestamp=arguments[i];break;case 2:h.userid=arguments[i];break;case 3:h=a.extend(h,a.whereGet(a.JSON.parseJSON(arguments[i]),["externalname","usericon","nickname","username"],["name","logo","nickname","username"])),h.name=h.name||h.nickname||h.username||"";break;case 0:if(b=arguments[i],null===b||""===b||-1!=b.indexOf("<msgtype"))continue;if(b=b.replace(/<\?xml\s+version=\"1\.0\"\s+encoding=\"utf\-\d+\"\?>/gi,""),b=b.replace(/&(?!amp;)/gi,"&amp;"),c=a.htmlToElement(b)[0],d=c&&3==c.nodeType?{msg:c.textContent}:a.elementToObject(c),"true"==d.xnlink&&d.msg){var j=new RegExp(/\[[0-9]*\].+[\n]/g);d.msg=d.msg.replace("&amp;lt;![CDATA[","").replace("<![CDATA[","").replace("]]>","");var k=d.msg.match(j);if(k&&k.length>0)for(var l=0,m=k.length;m>l;l++){var n=k[l].replace(/[\n]/g,"").replace(/\[[0-9]*\]\s/,"").replace(/[\s]/g,"&nbsp;"),o=k[l].replace(/[\n]/g,"");n="[xnlink]"+o+"[/xnlink]\n",d.msg=d.msg.replace(k[l],n)}}else if(7==d.type&&b){var p=b.replace(/</g,"&lt;").replace(/>/g,"&gt;").match("&lt;content&gt;(.+?)&lt;/content&gt;");p&&p.length>=2&&(d.msg=a.base64.decode(p[1]))}else d.msg=c.textContent||c.text,"string"==typeof d.msg&&(d.msg=d.msg.replace(/&lt;/g,"<"),d.msg=d.msg.replace(/&gt;/g,">"));h=a.extend(h,this.defBody,d),g.push(h),this.sendHASH.contains(h.msgid)&&this._callbackComplete(!0,h.msgid),h={history:1}}a.each(g,function(a,b){setTimeout(function(){e._callback("fIM_receiveMessage",[b])},f),f+=50})},remoteSendMessage:function(b,c,d,e,f){var g,h,i,j;if(e&&!(e.indexOf('type="5"')>-1&&-1===e.indexOf('systype="5"'))){d&&"string"==typeof d&&(d=a.JSON.parseJSON(d),h=a.whereGet(d,["usericon","userid","externalname"],["logo","userid","name"]),h.name=h.name||d.username),e=e.replace(/<\?xml\s+version=\"1\.0\"\s+encoding=\"utf\-\d+\"\?>/gi,""),e=e.replace(/&(?!amp;)/gi,"&amp;");try{j=a.htmlToElement(e)[0],i=j&&3==j.nodeType?{type:1,msg:j.textContent,msgid:f+"x"}:a.elementToObject(j)}catch(k){return void a.Log("remoteSendMessage:"+k.description+"; xmlString:"+e,3)}if("true"==i.xnlink&&i.msg){var l=new RegExp(/\[[0-9]*\].+[\n]/g);i.msg=i.msg.replace("&amp;lt;![CDATA[","").replace("<![CDATA[","").replace("]]>","");var m=i.msg.match(l);if(m&&m.length>0)for(var n=0,o=m.length;o>n;n++){var p=m[n].replace(/[\n]/g,""),q="[xnlink]"+p+"[/xnlink]\n";i.msg=i.msg.replace(m[n],q)}}else if(7==i.type&&e){var r=e.replace(/</g,"&lt;").replace(/>/g,"&gt;").match("&lt;content&gt;(.+?)&lt;/content&gt;");r&&r.length>=2&&(i.msg=a.base64.decode(r[1]))}else i.msg=j.textContent||j.text,"string"==typeof i.msg&&(i.msg=i.msg.replace(/&lt;/g,"<"),i.msg=i.msg.replace(/&gt;/g,">"));g=a.extend({},this.defBody,i,h,{timestamp:b}),this.sendHASH.contains(g.msgid)&&this._callbackComplete(!0,g.msgid),this.sendHASH.contains(g.msgid)||this.receiveHASH.contains(g.msgid)||(this._callback("fIM_receiveMessage",[g]),this.receiveHASH.add(g.msgid,g))}},remoteNotifyUserList:function(b){var c=[];try{c=a.JSON.parseJSON(b)}catch(d){a.Log("remoteNotifyUserList toJSON abnormal",3)}for(var e=0;e<c.length;e++)c[e].userId==this.options.userId&&c.splice(e,1);this._callback("fIM_notifyUserNumbers",[c.length]),this._callback("fIM_notifyUserList",[a.JSON.toJSONString(c)])},remoteSearchWaiter:function(a,b){this._callback("fIM_onGetUserInfo",[b])},remoteNotifyUserInformation:function(a,b){a!=this.options.userId&&this._callback("fIM_onGetUserInfo",[b])},remoteNotifyUserEnter:function(a,b){this.options.targetId=a,this._callback("fIM_notifyUserEnter",[this.options.targetId,b,""])},remoteNotifyUserLeave:function(b){a.Log("tchat.remoteNotifyUserLeave("+b+")",2),this._callback("fIM_notifyUserLeave",[b])},remoteNotifyUserClose:function(a,b){a==this.options.clientId&&(this._callback("fIM_ConnectResult",[5,"",""]),this.disconnect(),this._callback("fIM_ConnectResult",[4,"",""]))},remoteNotifySessionScene:function(a){this._callback("fIM_onNotifySessionSence",[a])},remoteNotifyUserInputing:function(a,b){this._callback("fIM_notifyUserInputing",[b])},remoteRequestEvalute:function(a,b,c){this._callback("fIM_requestEvaluate",[b,c])},processSessionIdle:function(){var b=this;this.sessionIdleTimeouts||(this.sessionIdleTimeouts={}),a.each(this.sessionIdleReplys,function(a,c){b.sessionIdleTimeouts[a]&&clearTimeout(b.sessionIdleTimeouts[a].id),b.sendIdleReply(a)})},clearSessionIdle:function(){var b=this;this.sessionIdleTimeouts||(this.sessionIdleTimeouts={}),a.each(this.sessionIdleReplys,function(a,c){b.sessionIdleTimeouts[a]&&clearTimeout(b.sessionIdleTimeouts[a].id)})},sendIdleReply:function(b){var c=this,d=a.extend(this.sessionIdleTimeouts[b],{start:a.formatDate(),id:setTimeout(function(){var d=0,e=c.sessionIdleReplys[b];delete c.sessionIdleReplys[b],c.sessionIdleTimeouts[b].end=a.formatDate(),a.each(c.sessionIdleReplys,function(a){d++}),a.Log("setTimeout "+b+"s "+c.sessionIdleTimeouts[b].end+", disconnect tchat",1),0===d&&c.connect&&c.options.result&&(c._callback("fIM_ConnectResult",[4,"",e]),c.disconnect())},1e3*b)});this.sessionIdleTimeouts[b]=d},_toArray:function(b,c){var d=[];if(!b)return"error";for(var e=0;e<c.length;e++)d.push(a.isDefined(b[c[e]])?b[c[e]]:"");return d},_handleResponse:function(b,c){this[b]?this[b].apply(this,c):a.Log("The object of the method '"+b+"' does not exist",3)},_callback:function(b,c){if(c.push(this.options.settingId),a.hasOwnProperty(b))try{a[b].apply(this,c)}catch(d){}else a.Log("nTalk."+b+"(...)",2)},_onCallback:function(a){var b,c,d=this;if(a.length)return b=a[0],c=a[1],b===this.clientWillTopic&&"reconnect"===c?(this.reconnect(),!1):b!==this.serverTopic?!1:void("LoginResult"===c?this.LoginResult.apply(d,a.slice(2)):this._handleResponse.call(d,c,a.slice(2)))},_onAbnormal:function(){this.connected=!1,this._reconnect_mqtt_count++,this._reconnect_mqtt_count>3&&(this._callback("fIM_ConnectResult",[2,"","连接服务器超时，请稍后重试！"]),this._reconnect_mqtt_count=0)},_initQueue:function(){var b=this;this.messageQueue=new a.Queue,this.messageQueue.first=function(){return this.queueFront()},this.messageQueue.nextMessage=function(a){if(!this.list.length)return null;if(!a)return this.list[0];for(var b=0;b<this.list.length;b++)if(this.list[b].msgid==a)return this.list[b+1];return null},this.messageQueue.removeMessage=function(a){for(var b=[],c=0;c<this.list.length;c++)this.list[c].msgid==a||b.push(this.list[c]);this.list=b,this.length=b.length},this.messageQueue.addMessage=function(a){for(var b=0;b<this.list.length;b++)if(this.list[b].msgid==a.msgid)return!1;return this.list.push(a),this.length=this.list.length,!0},this.messageQueue.getSendingNum=function(){for(var a=0,b=0;b<this.list.length;b++)this.list[b].status&&a++;return a},this.sendIntervalID=setInterval(function(){b.verificationMessage()},1e3)}}}(nTalk);