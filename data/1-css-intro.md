# Honey-css , let's do it!

![honey](http://xydudu.com/honey.png)

## 关于项目名
 
Honey(蜂蜜；宝贝；甜蜜)借用潋哥的命名，我们的css框架也基于此 by xiaoqiang.org

## Honey-css设计理念
* 快乐工作，早点回家陪老婆
* 模块化，低耦合，高复用
* 向前向后兼容
* 渐进增强
        
## 文件目录 

    css/
        base.less 基础样式，包括reset，字体，颜色，边距，css3，工具类等
        global.less 全局通用样式，包括header, footer等  
        mod/ 模块文件夹，存放用到的模块文件， 如：login.less, dialog.less 等
        plugin/ 插件文件夹，存放外部插件样式
        page/ 单样式页面，如有需求@import "base.less";
    image/
        base/ 基础样式对应的背景图
        data/ 全站前景图，临时数据存放目录 
        icon/ icon图标
        mod/ 样式模块对应的子文件夹，每个模块单独一个文件夹存放背景图，如：mod/login/, mod/dialog/等
        plugin/ 插件背景图文件夹，同上
    html/
        mod/ 大模块文件，html代码片段
        page/ 交付给后端/js开发工程师的成品，由模块中的代码片段组装而成。
