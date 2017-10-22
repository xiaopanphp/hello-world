function WxShare(conf){
    this.getURLParam = function(name) {
        return decodeURIComponent((new RegExp('[?|&]' + name + '=' + '([^&;]+?)(&|#|;|$)', "ig").exec(location.search) || [, ""])[1].replace(/\+/g, '%20')) || null;
    };
    this.config = {
        appId: conf && conf.appId || '',
        url: conf && conf.url || '',   //接口地址
        data: {    //接口的参数
            code: this.getURLParam('code'),
            state: this.getURLParam('state'),
            url: location.href.split('#')[0],   // zepto 自动编码对location.href进行encodeURIComponent编码
            method: 0
        },
        imgUrl: conf && conf.imgUrl || '',
        title: conf && conf.title || '',
        link: conf && conf.link || '',
        desc: conf && conf.desc || '',
        circleFunction: conf && conf.circleFunction || function() {},
        friendFunction: conf && conf.friendFunction || function() {},
        callback: conf && conf.callback || function(d){}
    };
    this.init();
}
WxShare.prototype.init = function(){  //获取用户信息
    var self = this;
    $.ajax({
        url: self.config.url,
        data: self.config.data,
        dataType: 'jsonp',
        jsonp: 'callback',
        success: function (d) {    // 成功获取到用户信息，然后配置sdk
            self.config.callback(d);   //处理用户信息
            wx.config({
                debug: false,
                appId: self.config.appId, // 必填，公众号的唯一标识
                timestamp: d.timestamp, // 必填，生成签名的时间戳
                nonceStr: d.conststr, // 必填，生成签名的随机串
                signature: d.signature,// 必填，签名，见附录1
                jsApiList: ['onMenuShareTimeline', 'onMenuShareAppMessage', 'onMenuShareQQ', 'onMenuShareWeibo', 'onMenuShareQZone']
            });
            wx.ready(function(){
                wx.onMenuShareTimeline({   //分享到朋友圈
                    title: self.config.title,
                    link: self.config.link,
                    imgUrl: self.config.imgUrl,
                    success: function () {
                        self.config.circleFunction();      // 确认分享
                    },
                    cancel: function () {
                        // 取消分享
                    }
                });
                wx.onMenuShareAppMessage({   //分享给朋友
                    title: self.config.title,
                    link: self.config.link,
                    desc: self.config.desc,
                    imgUrl: self.config.imgUrl,
                    success: function () {
                        self.config.friendFunction();         // 确认分享
                    },
                    cancel: function () {
                        // 取消分享
                    }
                });
                wx.onMenuShareQQ({		//分享到QQ
                	title: self.config.title,
                	desc: self.config.desc,
                	link: self.config.link,
                	imgUrl: self.config.imgUrl,
                    success: function () { 
                    	self.config.circleFunction();
                    },
                    cancel: function () { 
                       
                    }
                });
                wx.onMenuShareWeibo({	//分享到微博
                	title: self.config.title,
                	desc: self.config.desc,
                	link: self.config.link,
                	imgUrl: self.config.imgUrl,
                    success: function () { 
                    	self.config.circleFunction();
                    },
                    cancel: function () { 
                       
                    }
                });
                wx.onMenuShareQZone({	//分享到QQ空间
                	title: self.config.title,
                	desc: self.config.desc,
                	link: self.config.link,
                	imgUrl: self.config.imgUrl,
                    success: function () { 
                    	self.config.circleFunction();
                    },
                    cancel: function () { 
                       
                    }
                });
            });
        },
        error: function (a, b, c) {
            // alert('error');
        }
    });
}