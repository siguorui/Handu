
/* @file mqtt31.js
 * @date 2016.11.14 16:51:52 
 */
"undefined"==typeof nTalk&&(nTalk={}),nTalk.MQTT=function(a){function b(a,b){var c=b,d=a[b],f=d>>4,g=d&=15;b+=1;var h,j=0,l=1;do{if(b==a.length)return[null,c];h=a[b++],j+=(127&h)*l,l*=128}while(0!==(128&h));var m=b+j;if(m>a.length)return[null,c];var n=new s(f);switch(f){case k.CONNACK:var o=a[b++];1&o&&(n.sessionPresent=!0),n.returnCode=a[b++];break;case k.PUBLISH:var p=g>>1&3,q=e(a,b);b+=2;var r=i(a,b,q);b+=q,p>0&&(n.messageIdentifier=e(a,b),b+=2);var t=new nTalk.MQTT.Message(a.subarray(b,m));1==(1&g)&&(t.retained=!0),8==(8&g)&&(t.duplicate=!0),t.qos=p,t.destinationName=r,n.payloadMessage=t;break;case k.PUBACK:case k.PUBREC:case k.PUBREL:case k.PUBCOMP:case k.UNSUBACK:n.messageIdentifier=e(a,b);break;case k.SUBACK:n.messageIdentifier=e(a,b),b+=2,n.returnCode=a.subarray(b,m)}return[n,m]}function c(a,b,c){return b[c++]=a>>8,b[c++]=a%256,c}function d(a,b,d,e){return e=c(b,d,e),h(a,d,e),e+b}function e(a,b){return 256*a[b]+a[b+1]}function f(a){var b=new Array(1),c=0;do{var d=a%128;a>>=7,a>0&&(d|=128),b[c++]=d}while(a>0&&4>c);return b}function g(a){for(var b=0,c=0;c<a.length;c++){var d=a.charCodeAt(c);d>2047?(d>=55296&&56319>=d&&(c++,b++),b+=3):d>127?b+=2:b++}return b}function h(a,b,c){for(var d=c,e=0;e<a.length;e++){var f=a.charCodeAt(e);if(f>=55296&&56319>=f){var g=a.charCodeAt(++e);if(isNaN(g))throw new Error(p(n.MALFORMED_UNICODE,[f,g]));f=(f-55296<<10)+(g-56320)+65536}127>=f?b[d++]=f:2047>=f?(b[d++]=f>>6&31|192,b[d++]=63&f|128):65535>=f?(b[d++]=f>>12&15|224,b[d++]=f>>6&63|128,b[d++]=63&f|128):(b[d++]=f>>18&7|240,b[d++]=f>>12&63|128,b[d++]=f>>6&63|128,b[d++]=63&f|128)}return b}function i(a,b,c){for(var d,e="",f=b;b+c>f;){var g=a[f++];if(128>g)d=g;else{var h=a[f++]-128;if(0>h)throw new Error(p(n.MALFORMED_UTF,[g.toString(16),h.toString(16),""]));if(224>g)d=64*(g-192)+h;else{var i=a[f++]-128;if(0>i)throw new Error(p(n.MALFORMED_UTF,[g.toString(16),h.toString(16),i.toString(16)]));if(240>g)d=4096*(g-224)+64*h+i;else{var j=a[f++]-128;if(0>j)throw new Error(p(n.MALFORMED_UTF,[g.toString(16),h.toString(16),i.toString(16),j.toString(16)]));if(!(248>g))throw new Error(p(n.MALFORMED_UTF,[g.toString(16),h.toString(16),i.toString(16),j.toString(16)]));d=262144*(g-240)+4096*h+64*i+j}}}d>65535&&(d-=65536,e+=String.fromCharCode(55296+(d>>10)),d=56320+(1023&d)),e+=String.fromCharCode(d)}return e}var j="@VERSION@",k={CONNECT:1,CONNACK:2,PUBLISH:3,PUBACK:4,PUBREC:5,PUBREL:6,PUBCOMP:7,SUBSCRIBE:8,SUBACK:9,UNSUBSCRIBE:10,UNSUBACK:11,PINGREQ:12,PINGRESP:13,DISCONNECT:14},l=function(a,b){var c,d;for(c in a)if(a.hasOwnProperty(c)){if(!b.hasOwnProperty(c)){var e="Unknown property, "+c+". Valid properties are:";for(d in b)b.hasOwnProperty(d)&&(e=e+" "+d);throw new Error(e)}if(typeof a[c]!==b[c])throw new Error(p(n.INVALID_TYPE,[typeof a[c],c]))}},m=function(a,b){return function(){return a.apply(b,arguments)}},n={OK:{code:0,text:"AMQJSC0000I OK."},CONNECT_TIMEOUT:{code:1,text:"AMQJSC0001E Connect timed out."},SUBSCRIBE_TIMEOUT:{code:2,text:"AMQJS0002E Subscribe timed out."},UNSUBSCRIBE_TIMEOUT:{code:3,text:"AMQJS0003E Unsubscribe timed out."},PING_TIMEOUT:{code:4,text:"AMQJS0004E Ping timed out."},INTERNAL_ERROR:{code:5,text:"AMQJS0005E Internal error. Error Message: {0}, Stack trace: {1}"},CONNACK_RETURNCODE:{code:6,text:"AMQJS0006E Bad Connack return code:{0} {1}."},SOCKET_ERROR:{code:7,text:"AMQJS0007E Socket error:{0}."},SOCKET_CLOSE:{code:8,text:"AMQJS0008I Socket closed."},MALFORMED_UTF:{code:9,text:"AMQJS0009E Malformed UTF data:{0} {1} {2}."},UNSUPPORTED:{code:10,text:"AMQJS0010E {0} is not supported by this browser."},INVALID_STATE:{code:11,text:"AMQJS0011E Invalid state {0}."},INVALID_TYPE:{code:12,text:"AMQJS0012E Invalid type {0} for {1}."},INVALID_ARGUMENT:{code:13,text:"AMQJS0013E Invalid argument {0} for {1}."},UNSUPPORTED_OPERATION:{code:14,text:"AMQJS0014E Unsupported operation."},INVALID_STORED_DATA:{code:15,text:"AMQJS0015E Invalid data in local storage key={0} value={1}."},INVALID_MQTT_MESSAGE_TYPE:{code:16,text:"AMQJS0016E Invalid MQTT message type {0}."},MALFORMED_UNICODE:{code:17,text:"AMQJS0017E Malformed Unicode string:{0} {1}."}},o={0:"Connection Accepted",1:"Connection Refused: unacceptable protocol version",2:"Connection Refused: identifier rejected",3:"Connection Refused: server unavailable",4:"Connection Refused: bad user name or password",5:"Connection Refused: not authorized"},p=function(a,b){var c=a.text;if(b)for(var d,e,f=0;f<b.length;f++)if(d="{"+f+"}",e=c.indexOf(d),e>0){var g=c.substring(0,e),h=c.substring(e+d.length);c=g+b[f]+h}return c},q=[0,6,77,81,73,115,100,112,3],r=[0,4,77,81,84,84,4],s=function(a,b){this.type=a;for(var c in b)b.hasOwnProperty(c)&&(this[c]=b[c])};s.prototype.encode=function(){var a,b,e=(15&this.type)<<4,h=0,i=[],j=0;switch(void 0!==this.messageIdentifier&&(h+=2),this.type){case k.CONNECT:switch(this.mqttVersion){case 3:h+=q.length+3;break;case 4:h+=r.length+3}h+=g(this.clientId)+2,void 0!==this.willMessage&&(h+=g(this.willMessage.destinationName)+2,b=this.willMessage.payloadBytes,b instanceof Uint8Array||(b=new Uint8Array(l)),h+=b.byteLength+2),void 0!==this.userName&&(h+=g(this.userName)+2),void 0!==this.password&&(h+=g(this.password)+2);break;case k.SUBSCRIBE:for(e|=2,a=0;a<this.topics.length;a++)i[a]=g(this.topics[a]),h+=i[a]+2;h+=this.requestedQos.length;break;case k.UNSUBSCRIBE:for(e|=2,a=0;a<this.topics.length;a++)i[a]=g(this.topics[a]),h+=i[a]+2;break;case k.PUBREL:e|=2;break;case k.PUBLISH:this.payloadMessage.duplicate&&(e|=8),e=e|=this.payloadMessage.qos<<1,this.payloadMessage.retained&&(e|=1),j=g(this.payloadMessage.destinationName),h+=j+2;var l=this.payloadMessage.payloadBytes;h+=l.byteLength,l instanceof ArrayBuffer?l=new Uint8Array(l):l instanceof Uint8Array||(l=new Uint8Array(l.buffer));break;case k.DISCONNECT:}var m=f(h),n=m.length+1,o=new ArrayBuffer(h+n),p=new Uint8Array(o);if(p[0]=e,p.set(m,1),this.type==k.PUBLISH)n=d(this.payloadMessage.destinationName,j,p,n);else if(this.type==k.CONNECT){switch(this.mqttVersion){case 3:p.set(q,n),n+=q.length;break;case 4:p.set(r,n),n+=r.length}var s=0;this.cleanSession&&(s=2),void 0!==this.willMessage&&(s|=4,s|=this.willMessage.qos<<3,this.willMessage.retained&&(s|=32)),void 0!==this.userName&&(s|=128),void 0!==this.password&&(s|=64),p[n++]=s,n=c(this.keepAliveInterval,p,n)}switch(void 0!==this.messageIdentifier&&(n=c(this.messageIdentifier,p,n)),this.type){case k.CONNECT:n=d(this.clientId,g(this.clientId),p,n),void 0!==this.willMessage&&(n=d(this.willMessage.destinationName,g(this.willMessage.destinationName),p,n),n=c(b.byteLength,p,n),p.set(b,n),n+=b.byteLength),void 0!==this.userName&&(n=d(this.userName,g(this.userName),p,n)),void 0!==this.password&&(n=d(this.password,g(this.password),p,n));break;case k.PUBLISH:p.set(l,n);break;case k.SUBSCRIBE:for(a=0;a<this.topics.length;a++)n=d(this.topics[a],i[a],p,n),p[n++]=this.requestedQos[a];break;case k.UNSUBSCRIBE:for(a=0;a<this.topics.length;a++)n=d(this.topics[a],i[a],p,n)}return o};var t=function(a,b,c){this._client=a,this._window=b,this._keepAliveInterval=1e3*c,this.isReset=!1;var d=new s(k.PINGREQ).encode(),e=function(a){return function(){return f.apply(a)}},f=function(){this.isReset?(this.isReset=!1,this._client._trace("Pinger.doPing","send PINGREQ"),this._client.socket.send(d),this.timeout=this._window.setTimeout(e(this),this._keepAliveInterval)):(this._client._trace("Pinger.doPing","Timed out"),this._client._disconnected(n.PING_TIMEOUT.code,p(n.PING_TIMEOUT)))};this.reset=function(){this.isReset=!0,this._window.clearTimeout(this.timeout),this._keepAliveInterval>0&&(this.timeout=setTimeout(e(this),this._keepAliveInterval))},this.cancel=function(){this._window.clearTimeout(this.timeout)}},u=function(a,b,c,d,e){this._window=b,c||(c=30);var f=function(a,b,c){return function(){return a.apply(b,c)}};this.timeout=setTimeout(f(d,a,e),1e3*c),this.cancel=function(){this._window.clearTimeout(this.timeout)}},v=function(b,c,d,e,f){if(!("WebSocket"in a&&null!==a.WebSocket))throw new Error(p(n.UNSUPPORTED,["WebSocket"]));if(!("localStorage"in a&&null!==a.localStorage))throw new Error(p(n.UNSUPPORTED,["localStorage"]));if(!("ArrayBuffer"in a&&null!==a.ArrayBuffer))throw new Error(p(n.UNSUPPORTED,["ArrayBuffer"]));this._trace("nTalk.MQTT.Client",b,c,d,e,f),this.host=c,this.port=d,this.path=e,this.uri=b,this.clientId=f,this._localKey=c+":"+d+("/mqtt"!=e?":"+e:"")+":"+f+":",this._msg_queue=[],this._sentMessages={},this._receivedMessages={},this._notify_msg_sent={},this._message_identifier=1,this._sequence=0;for(var g in localStorage)0!==g.indexOf("Sent:"+this._localKey)&&0!==g.indexOf("Received:"+this._localKey)||this.restore(g)};v.prototype.host="",v.prototype.port=0,v.prototype.path="",v.prototype.uri="",v.prototype.clientId="",v.prototype.socket=null,v.prototype.connected=!1,v.prototype.maxMessageIdentifier=65536,v.prototype.connectOptions={},v.prototype.hostIndex=0,v.prototype.onConnectionLost=function(){},v.prototype.onMessageDelivered=function(){},v.prototype.onMessageArrived=function(){},v.prototype.traceFunction=function(){},v.prototype._msg_queue=null,v.prototype._connectTimeout=null,v.prototype.sendPinger=null,v.prototype.receivePinger=null,v.prototype.receiveBuffer=null,v.prototype._traceBuffer=null,v.prototype._MAX_TRACE_ENTRIES=100,v.prototype.connect=function(a){var b=this._traceMask(a,"password");if(this._trace("Client.connect",b,this.socket,this.connected),this.connected)throw new Error(p(n.INVALID_STATE,["already connected"]));if(this.socket)throw new Error(p(n.INVALID_STATE,["already connected"]));this.connectOptions=a,a.uris?(this.hostIndex=0,this._doConnect(a.uris[0])):this._doConnect(this.uri)},v.prototype.subscribe=function(a,b){if(this._trace("Client.subscribe",a,b),!this.connected)throw new Error(p(n.INVALID_STATE,["not connected"]));var c=new s(k.SUBSCRIBE);c.topics=[a],void 0!==b.qos?c.requestedQos=[b.qos]:c.requestedQos=[0],b.onSuccess&&(c.onSuccess=function(a){b.onSuccess({invocationContext:b.invocationContext,grantedQos:a})}),b.onFailure&&(c.onFailure=function(a){b.onFailure({invocationContext:b.invocationContext,errorCode:a})}),b.timeout&&(c.timeOut=new u(this,window,b.timeout,b.onFailure,[{invocationContext:b.invocationContext,errorCode:n.SUBSCRIBE_TIMEOUT.code,errorMessage:p(n.SUBSCRIBE_TIMEOUT)}])),this._requires_ack(c),this._schedule_message(c)},v.prototype.unsubscribe=function(a,b){if(this._trace("Client.unsubscribe",a,b),!this.connected)throw new Error(p(n.INVALID_STATE,["not connected"]));var c=new s(k.UNSUBSCRIBE);c.topics=[a],b.onSuccess&&(c.callback=function(){b.onSuccess({invocationContext:b.invocationContext})}),b.timeout&&(c.timeOut=new u(this,window,b.timeout,b.onFailure,[{invocationContext:b.invocationContext,errorCode:n.UNSUBSCRIBE_TIMEOUT.code,errorMessage:p(n.UNSUBSCRIBE_TIMEOUT)}])),this._requires_ack(c),this._schedule_message(c)},v.prototype.send=function(a){if(this._trace("Client.send",a),!this.connected)throw new Error(p(n.INVALID_STATE,["not connected"]));wireMessage=new s(k.PUBLISH),wireMessage.payloadMessage=a,a.qos>0?this._requires_ack(wireMessage):this.onMessageDelivered&&(this._notify_msg_sent[wireMessage]=this.onMessageDelivered(wireMessage.payloadMessage)),this._schedule_message(wireMessage)},v.prototype.disconnect=function(){if(this._trace("Client.disconnect"),!this.socket)throw new Error(p(n.INVALID_STATE,["not connecting or connected"]));wireMessage=new s(k.DISCONNECT),this._notify_msg_sent[wireMessage]=m(this._disconnected,this),this._schedule_message(wireMessage)},v.prototype.getTraceLog=function(){var a;if(null!==this._traceBuffer){this._trace("Client.getTraceLog",new Date),this._trace("Client.getTraceLog in flight messages",this._sentMessages.length);for(a in this._sentMessages)this._trace("_sentMessages ",a,this._sentMessages[a]);for(a in this._receivedMessages)this._trace("_receivedMessages ",a,this._receivedMessages[a]);return this._traceBuffer}},v.prototype.startTrace=function(){null===this._traceBuffer&&(this._traceBuffer=[]),this._trace("Client.startTrace",new Date,j)},v.prototype.stopTrace=function(){delete this._traceBuffer},v.prototype._doConnect=function(a){if(this.connectOptions.useSSL){var b=a.split(":");b[0]="wss",a=b.join(":")}this.connected=!1;try{this.connectOptions.mqttVersion<4?this.socket=new WebSocket(a,["mqttv3.1"]):this.socket=new WebSocket(a,["mqtt"])}catch(c){}this.socket.binaryType="arraybuffer",this.socket.onopen=m(this._on_socket_open,this),this.socket.onmessage=m(this._on_socket_message,this),this.socket.onerror=m(this._on_socket_error,this),this.socket.onclose=m(this._on_socket_close,this),this.sendPinger=new t(this,window,this.connectOptions.keepAliveInterval),this.receivePinger=new t(this,window,this.connectOptions.keepAliveInterval),this._connectTimeout=new u(this,window,this.connectOptions.timeout,this._disconnected,[n.CONNECT_TIMEOUT.code,p(n.CONNECT_TIMEOUT)])},v.prototype._schedule_message=function(a){this._msg_queue.push(a),this.connected&&this._process_queue()},v.prototype.store=function(a,b){var c={type:b.type,messageIdentifier:b.messageIdentifier,version:1};switch(b.type){case k.PUBLISH:b.pubRecReceived&&(c.pubRecReceived=!0),c.payloadMessage={};for(var d="",e=b.payloadMessage.payloadBytes,f=0;f<e.length;f++)e[f]<=15?d=d+"0"+e[f].toString(16):d+=e[f].toString(16);c.payloadMessage.payloadHex=d,c.payloadMessage.qos=b.payloadMessage.qos,c.payloadMessage.destinationName=b.payloadMessage.destinationName,b.payloadMessage.duplicate&&(c.payloadMessage.duplicate=!0),b.payloadMessage.retained&&(c.payloadMessage.retained=!0),0===a.indexOf("Sent:")&&(void 0===b.sequence&&(b.sequence=++this._sequence),c.sequence=b.sequence);break;default:throw Error(p(n.INVALID_STORED_DATA,[key,c]))}localStorage.setItem(a+this._localKey+b.messageIdentifier,JSON.stringify(c))},v.prototype.clear=function(){for(var a in localStorage)0!==a.indexOf("Sent:"+this._localKey)&&0!==a.indexOf("Received:"+this._localKey)||localStorage.removeItem(a)},v.prototype.restore=function(a){var b=localStorage.getItem(a),c=JSON.parse(b),d=new s(c.type,c);switch(c.type){case k.PUBLISH:for(var e=c.payloadMessage.payloadHex,f=new ArrayBuffer(e.length/2),g=new Uint8Array(f),h=0;e.length>=2;){var i=parseInt(e.substring(0,2),16);e=e.substring(2,e.length),g[h++]=i}var j=new nTalk.MQTT.Message(g);j.qos=c.payloadMessage.qos,j.destinationName=c.payloadMessage.destinationName,c.payloadMessage.duplicate&&(j.duplicate=!0),c.payloadMessage.retained&&(j.retained=!0),d.payloadMessage=j;break;default:throw Error(p(n.INVALID_STORED_DATA,[a,b]))}0===a.indexOf("Sent:"+this._localKey)?(d.payloadMessage.duplicate=!0,this._sentMessages[d.messageIdentifier]=d):0===a.indexOf("Received:"+this._localKey)&&(this._receivedMessages[d.messageIdentifier]=d)},v.prototype._process_queue=function(){for(var a=null,b=this._msg_queue.reverse();a=b.pop();)this._socket_send(a),this._notify_msg_sent[a]&&(this._notify_msg_sent[a](),delete this._notify_msg_sent[a])},v.prototype._requires_ack=function(a){var b=Object.keys(this._sentMessages).length;if(b>this.maxMessageIdentifier)throw Error("Too many messages:"+b);for(;void 0!==this._sentMessages[this._message_identifier];)this._message_identifier++;a.messageIdentifier=this._message_identifier,this._sentMessages[a.messageIdentifier]=a,a.type===k.PUBLISH&&this.store("Sent:",a),this._message_identifier===this.maxMessageIdentifier&&(this._message_identifier=1)},v.prototype._on_socket_open=function(){var a=new s(k.CONNECT,this.connectOptions);a.clientId=this.clientId,this._socket_send(a)},v.prototype._on_socket_message=function(a){this._trace("Client._on_socket_message",a.data),this.receivePinger.reset();for(var b=this._deframeMessages(a.data),c=0;c<b.length;c+=1)this._handleMessage(b[c])},v.prototype._deframeMessages=function(a){var c=[],d=0,e=new Uint8Array(a);if(this.receiveBuffer){var f=new Uint8Array(this.receiveBuffer.length+e.length);f.set(this.receiveBuffer),f.set(e,this.receiveBuffer.length),e=f,delete this.receiveBuffer}try{for(;d<e.length;){var g=b(e,d),h=g[0];if(d=g[1],null===h)break;c.push(h)}d<e.length&&(this.receiveBuffer=e.subarray(d))}catch(i){return void this._disconnected(n.INTERNAL_ERROR.code,p(n.INTERNAL_ERROR,[i.message,i.stack.toString()]))}return c},v.prototype._handleMessage=function(a){var b,c,d,e;this._trace("Client._handleMessage",a);try{switch(a.type){case k.CONNACK:if(this._connectTimeout.cancel(),this.connectOptions.cleanSession){for(b in this._sentMessages)c=this._sentMessages[b],localStorage.removeItem("Sent:"+this._localKey+c.messageIdentifier);this._sentMessages={};for(b in this._receivedMessages)d=this._receivedMessages[b],localStorage.removeItem("Received:"+this._localKey+d.messageIdentifier);this._receivedMessages={}}if(0!==a.returnCode){this._disconnected(n.CONNACK_RETURNCODE.code,p(n.CONNACK_RETURNCODE,[a.returnCode,o[a.returnCode]]));break}this.connected=!0,this.connectOptions.uris&&(this.hostIndex=this.connectOptions.uris.length);var f=[];for(var g in this._sentMessages)this._sentMessages.hasOwnProperty(g)&&f.push(this._sentMessages[g]);f=f.sort(function(a,b){return a.sequence-b.sequence});for(var h=0,i=f.length;i>h;h++)c=f[h],c.type==k.PUBLISH&&c.pubRecReceived?(e=new s(k.PUBREL,{messageIdentifier:c.messageIdentifier}),this._schedule_message(e)):this._schedule_message(c);this.connectOptions.onSuccess&&this.connectOptions.onSuccess({invocationContext:this.connectOptions.invocationContext}),this._process_queue();break;case k.PUBLISH:this._receivePublish(a);break;case k.PUBACK:c=this._sentMessages[a.messageIdentifier],c&&(delete this._sentMessages[a.messageIdentifier],localStorage.removeItem("Sent:"+this._localKey+a.messageIdentifier),this.onMessageDelivered&&this.onMessageDelivered(c.payloadMessage));break;case k.PUBREC:c=this._sentMessages[a.messageIdentifier],c&&(c.pubRecReceived=!0,e=new s(k.PUBREL,{messageIdentifier:a.messageIdentifier}),this.store("Sent:",c),this._schedule_message(e));break;case k.PUBREL:d=this._receivedMessages[a.messageIdentifier],localStorage.removeItem("Received:"+this._localKey+a.messageIdentifier),d&&(this._receiveMessage(d),delete this._receivedMessages[a.messageIdentifier]);var j=new s(k.PUBCOMP,{messageIdentifier:a.messageIdentifier});this._schedule_message(j);break;case k.PUBCOMP:c=this._sentMessages[a.messageIdentifier],delete this._sentMessages[a.messageIdentifier],localStorage.removeItem("Sent:"+this._localKey+a.messageIdentifier),this.onMessageDelivered&&this.onMessageDelivered(c.payloadMessage);break;case k.SUBACK:c=this._sentMessages[a.messageIdentifier],c&&(c.timeOut&&c.timeOut.cancel(),a.returnCode.indexOf=Array.prototype.indexOf,a.returnCode.indexOf&&-1!==a.returnCode.indexOf(128)?c.onFailure&&c.onFailure(a.returnCode):c.onSuccess&&c.onSuccess(a.returnCode),delete this._sentMessages[a.messageIdentifier]);break;case k.UNSUBACK:c=this._sentMessages[a.messageIdentifier],c&&(c.timeOut&&c.timeOut.cancel(),c.callback&&c.callback(),delete this._sentMessages[a.messageIdentifier]);break;case k.PINGRESP:this.sendPinger.reset();break;case k.DISCONNECT:this._disconnected(n.INVALID_MQTT_MESSAGE_TYPE.code,p(n.INVALID_MQTT_MESSAGE_TYPE,[a.type]));break;default:this._disconnected(n.INVALID_MQTT_MESSAGE_TYPE.code,p(n.INVALID_MQTT_MESSAGE_TYPE,[a.type]))}}catch(l){return void this._disconnected(n.INTERNAL_ERROR.code,p(n.INTERNAL_ERROR,[l.message,l.stack.toString()]))}},v.prototype._on_socket_error=function(a){this._disconnected(n.SOCKET_ERROR.code,p(n.SOCKET_ERROR,[a.data]))},v.prototype._on_socket_close=function(){this._disconnected(n.SOCKET_CLOSE.code,p(n.SOCKET_CLOSE))},v.prototype._socket_send=function(a){if(1==a.type){var b=this._traceMask(a,"password");this._trace("Client._socket_send",b)}else this._trace("Client._socket_send",a);try{this.socket.send(a.encode())}catch(c){this._on_socket_error(c)}this.sendPinger.reset()},v.prototype._receivePublish=function(a){switch(a.payloadMessage.qos){case"undefined":case 0:this._receiveMessage(a);break;case 1:var b=new s(k.PUBACK,{messageIdentifier:a.messageIdentifier});this._schedule_message(b),this._receiveMessage(a);break;case 2:this._receivedMessages[a.messageIdentifier]=a,this.store("Received:",a);var c=new s(k.PUBREC,{messageIdentifier:a.messageIdentifier});this._schedule_message(c);break;default:throw Error("Invaild qos="+wireMmessage.payloadMessage.qos)}},v.prototype._receiveMessage=function(a){this.onMessageArrived&&this.onMessageArrived(a.payloadMessage)},v.prototype._disconnected=function(a,b){this._trace("Client._disconnected",a,b),this.sendPinger.cancel(),this.receivePinger.cancel(),this._connectTimeout&&this._connectTimeout.cancel(),this._msg_queue=[],this._notify_msg_sent={},this.socket&&(this.socket.onopen=null,this.socket.onmessage=null,this.socket.onerror=null,this.socket.onclose=null,1===this.socket.readyState&&this.socket.close(),delete this.socket),this.connectOptions.uris&&this.hostIndex<this.connectOptions.uris.length-1?(this.hostIndex++,this._doConnect(this.connectOptions.uris[this.hostIndex])):(void 0===a&&(a=n.OK.code,b=p(n.OK)),this.connected?(this.connected=!1,this.onConnectionLost&&this.onConnectionLost({errorCode:a,errorMessage:b})):4===this.connectOptions.mqttVersion&&this.connectOptions.mqttVersionExplicit===!1?(this._trace("Failed to connect V4, dropping back to V3"),this.connectOptions.mqttVersion=3,this.connectOptions.uris?(this.hostIndex=0,this._doConnect(this.connectOptions.uris[0])):this._doConnect(this.uri)):this.connectOptions.onFailure&&this.connectOptions.onFailure({invocationContext:this.connectOptions.invocationContext,errorCode:a,errorMessage:b}))},v.prototype._trace=function(){var a,b=arguments;if(this.traceFunction){for(a in b)"undefined"!=typeof b[a]&&(b[a]=JSON.stringify(b[a]));var c=Array.prototype.slice.call(b).join("");this.traceFunction({severity:"Debug",message:c})}if(null!==this._traceBuffer)for(a=0,max=b.length;a<max;a++)this._traceBuffer.length==this._MAX_TRACE_ENTRIES&&this._traceBuffer.shift(),0===a?this._traceBuffer.push(b[a]):"undefined"==typeof b[a]?this._traceBuffer.push(b[a]):this._traceBuffer.push("  "+JSON.stringify(b[a]))},v.prototype._traceMask=function(a,b){var c={};for(var d in a)a.hasOwnProperty(d)&&(d==b?c[d]="******":c[d]=a[d]);return c};var w=function(a,b,c,d){var e;if("string"!=typeof a)throw new Error(p(n.INVALID_TYPE,[typeof a,"host"]));if(2==arguments.length){d=b,e=a;var f=e.match(/^(wss?):\/\/((\[(.+)\])|([^\/]+?))(:(\d+))?(\/.*)$/);if(!f)throw new Error(p(n.INVALID_ARGUMENT,[a,"host"]));a=f[4]||f[2],b=parseInt(f[7]),c=f[8]}else{if(3==arguments.length&&(d=c,c="/mqtt"),"number"!=typeof b||0>b)throw new Error(p(n.INVALID_TYPE,[typeof b,"port"]));if("string"!=typeof c)throw new Error(p(n.INVALID_TYPE,[typeof c,"path"]));var g=-1!=a.indexOf(":")&&"["!=a.slice(0,1)&&"]"!=a.slice(-1);e="ws://"+(g?"["+a+"]":a)+":"+b+c}for(var h=0,i=0;i<d.length;i++){var j=d.charCodeAt(i);j>=55296&&56319>=j&&i++,h++}if("string"!=typeof d||h>65535)throw new Error(p(n.INVALID_ARGUMENT,[d,"clientId"]));var k=new v(e,a,b,c,d);this._getHost=function(){return a},this._setHost=function(){throw new Error(p(n.UNSUPPORTED_OPERATION))},this._getPort=function(){return b},this._setPort=function(){throw new Error(p(n.UNSUPPORTED_OPERATION))},this._getPath=function(){return c},this._setPath=function(){throw new Error(p(n.UNSUPPORTED_OPERATION))},this._getURI=function(){return e},this._setURI=function(){throw new Error(p(n.UNSUPPORTED_OPERATION))},this._getClientId=function(){return k.clientId},this._setClientId=function(){throw new Error(p(n.UNSUPPORTED_OPERATION))},this._getOnConnectionLost=function(){return k.onConnectionLost},this._setOnConnectionLost=function(a){if("function"!=typeof a)throw new Error(p(n.INVALID_TYPE,[typeof a,"onConnectionLost"]));k.onConnectionLost=a},this._getOnMessageDelivered=function(){return k.onMessageDelivered},this._setOnMessageDelivered=function(a){if("function"!=typeof a)throw new Error(p(n.INVALID_TYPE,[typeof a,"onMessageDelivered"]));k.onMessageDelivered=a},this._getOnMessageArrived=function(){return k.onMessageArrived},this._setOnMessageArrived=function(a){if("function"!=typeof a)throw new Error(p(n.INVALID_TYPE,[typeof a,"onMessageArrived"]));k.onMessageArrived=a},this._getTrace=function(){return k.traceFunction},this._setTrace=function(a){if("function"!=typeof a)throw new Error(p(n.INVALID_TYPE,[typeof a,"onTrace"]));k.traceFunction=a},this.connect=function(a){var b;if(a=a||{},l(a,{timeout:"number",userName:"string",password:"string",willMessage:"object",keepAliveInterval:"number",cleanSession:"boolean",useSSL:"boolean",invocationContext:"object",onSuccess:"function",onFailure:"function",hosts:"object",ports:"object",mqttVersion:"number"}),void 0===a.keepAliveInterval&&(a.keepAliveInterval=60),a.mqttVersion>4||a.mqttVersion<3)throw new Error(p(n.INVALID_ARGUMENT,[a.mqttVersion,"connectOptions.mqttVersion"]));if(void 0===a.mqttVersion?(a.mqttVersionExplicit=!1,a.mqttVersion=4):a.mqttVersionExplicit=!0,void 0===a.password&&void 0!==a.userName)throw new Error(p(n.INVALID_ARGUMENT,[a.password,"connectOptions.password"]));if(a.willMessage){if(!(a.willMessage instanceof x))throw new Error(p(n.INVALID_TYPE,[a.willMessage,"connectOptions.willMessage"]));if(a.willMessage.stringPayload="","undefined"==typeof a.willMessage.destinationName)throw new Error(p(n.INVALID_TYPE,[typeof a.willMessage.destinationName,"connectOptions.willMessage.destinationName"]))}if("undefined"==typeof a.cleanSession&&(a.cleanSession=!0),a.hosts){if(!(a.hosts instanceof Array))throw new Error(p(n.INVALID_ARGUMENT,[a.hosts,"connectOptions.hosts"]));if(a.hosts.length<1)throw new Error(p(n.INVALID_ARGUMENT,[a.hosts,"connectOptions.hosts"]));var d=!1;for(b=0;b<a.hosts.length;b++){if("string"!=typeof a.hosts[b])throw new Error(p(n.INVALID_TYPE,[typeof a.hosts[b],"connectOptions.hosts["+b+"]"]));if(/^(wss?):\/\/((\[(.+)\])|([^\/]+?))(:(\d+))?(\/.*)$/.test(a.hosts[b])){if(0===b)d=!0;else if(!d)throw new Error(p(n.INVALID_ARGUMENT,[a.hosts[b],"connectOptions.hosts["+b+"]"]))}else if(d)throw new Error(p(n.INVALID_ARGUMENT,[a.hosts[b],"connectOptions.hosts["+b+"]"]))}if(d)a.uris=a.hosts;else{if(!a.ports)throw new Error(p(n.INVALID_ARGUMENT,[a.ports,"connectOptions.ports"]));if(!(a.ports instanceof Array))throw new Error(p(n.INVALID_ARGUMENT,[a.ports,"connectOptions.ports"]));if(a.hosts.length!=a.ports.length)throw new Error(p(n.INVALID_ARGUMENT,[a.ports,"connectOptions.ports"]));for(a.uris=[],b=0;b<a.hosts.length;b++){if("number"!=typeof a.ports[b]||a.ports[b]<0)throw new Error(p(n.INVALID_TYPE,[typeof a.ports[b],"connectOptions.ports["+b+"]"]));var f=a.hosts[b],g=a.ports[b],h=-1!=f.indexOf(":");e="ws://"+(h?"["+f+"]":f)+":"+g+c,a.uris.push(e)}}}k.connect(a)},this.subscribe=function(a,b){if("string"!=typeof a)throw new Error("Invalid argument:"+a);if(b=b||{},l(b,{qos:"number",invocationContext:"object",onSuccess:"function",onFailure:"function",timeout:"number"}),b.timeout&&!b.onFailure)throw new Error("subscribeOptions.timeout specified with no onFailure callback.");if("undefined"!=typeof b.qos&&0!==b.qos&&1!==b.qos&&2!==b.qos)throw new Error(p(n.INVALID_ARGUMENT,[b.qos,"subscribeOptions.qos"]));k.subscribe(a,b)},this.unsubscribe=function(a,b){if("string"!=typeof a)throw new Error("Invalid argument:"+a);if(b=b||{},l(b,{invocationContext:"object",onSuccess:"function",onFailure:"function",timeout:"number"}),b.timeout&&!b.onFailure)throw new Error("unsubscribeOptions.timeout specified with no onFailure callback.");k.unsubscribe(a,b)},this.send=function(a,b,c,d){var e;if(0===arguments.length)throw new Error("Invalid argument.length");if(1==arguments.length){if(!(a instanceof x)&&"string"!=typeof a)throw new Error("Invalid argument:"+typeof a);if(e=a,"undefined"==typeof e.destinationName)throw new Error(p(n.INVALID_ARGUMENT,[e.destinationName,"Message.destinationName"]));k.send(e)}else e=new x(b),e.destinationName=a,arguments.length>=3&&(e.qos=c),arguments.length>=4&&(e.retained=d),k.send(e)},this.disconnect=function(){k.disconnect()},this.getTraceLog=function(){return k.getTraceLog()},this.startTrace=function(){k.startTrace()},this.stopTrace=function(){k.stopTrace()},this.isConnected=function(){return k.connected}};w.prototype={get host(){return this._getHost()},set host(a){this._setHost(a)},get port(){return this._getPort()},set port(a){this._setPort(a)},get path(){return this._getPath()},set path(a){this._setPath(a)},get clientId(){return this._getClientId()},set clientId(a){this._setClientId(a)},get onConnectionLost(){return this._getOnConnectionLost()},set onConnectionLost(a){this._setOnConnectionLost(a)},get onMessageDelivered(){return this._getOnMessageDelivered()},set onMessageDelivered(a){this._setOnMessageDelivered(a)},get onMessageArrived(){return this._getOnMessageArrived()},set onMessageArrived(a){this._setOnMessageArrived(a)},get trace(){return this._getTrace()},set trace(a){this._setTrace(a)}};var x=function(a){this.payloadString=void 0,this.payloadBytes=void 0,this.destinationName=void 0,this.qos=0,this.retained=!1,this.duplicate=!1;var b;if(!("string"==typeof a||a instanceof ArrayBuffer||a instanceof Int8Array||a instanceof Uint8Array||a instanceof Int16Array||a instanceof Uint16Array||a instanceof Int32Array||a instanceof Uint32Array||a instanceof Float32Array||a instanceof Float64Array))throw p(n.INVALID_ARGUMENT,[a,"newPayload"]);b=a,this.payloadString="string"==typeof b?b:i(b,0,b.length);var c,d;"string"==typeof b?(c=new ArrayBuffer(g(b)),d=new Uint8Array(c),h(b,d,0),this.payloadBytes=d):this.payloadBytes=b};return x.prototype={setDestinationName:function(a){if("string"!=typeof a)throw new Error(p(n.INVALID_ARGUMENT,[a,"newDestinationName"]));this.destinationName=a},setQos:function(a){if(0!==a&&1!==a&&2!==a)throw new Error("Invalid argument:"+a);qos=a},setRetained:function(a){if("boolean"!=typeof a)throw new Error(p(n.INVALID_ARGUMENT,[a,"newRetained"]));this.retained=a},setDuplicate:function(a){this.duplicate=a}},{Client:w,Message:x}}(window);