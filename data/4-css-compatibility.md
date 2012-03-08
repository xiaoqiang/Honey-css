# 兼容性

##兼容性原则

* 无论什么时候，都不要使用expression
* 尽量避免使用IE滤镜
* 合理布局，了解盒模型，浮动，定位等原理
* 浮动都必须关闭/清除
* 了解hasLayout，触发hasLayout减少hack
* 代码测试：IE6+/win, Firefox 3.6/win/mac, Chrome(latest stable)/win/mac, Safari 5/mac
* [Alice一些解决方案](https://github.com/alipay/Alice/tree/master/solutions)

##通用Hack规则
    .all-IE{ property: value\9; }
    :root .IE-9{ property: value\0/; }
    .gte-IE-8{ property: value\0; }
    .lte-IE-7{ *property: value; }
    .IE-7{ +property: value; }
    .IE-6{ _property: value; }
    .not-IE{ property//: value; }
    @-moz-document url-prefix() { .firefox{property: value; } }
    @media all and (-webkit-min-device-pixel-ratio: 0) { .webkit{property: value; } }
    @media all and (-webkit-min-device-pixel-ratio: 10000),not all and (-webkit-min-device-pixel-ratio: 0) { .opera{ property: value; } }
    @media screen and (max-device-width: 480px) { .iphone-or-mobile-s-webkit{ property: value; } }
    
##更优雅的做法
    .selector .child{property: value;} //for ie-6
    .selector > .child{property: value;} //except ie-6
    
    .selector{
        property: value !important; //except ie-6
        property: value; //for ie-6
    }