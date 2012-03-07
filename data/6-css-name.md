# 命名规范

## css命名规范

###css主模块文件名{name}.less
* 按照项目规模和开发人数制订主模块
* 基础模块，高度通用

###模块样式名.mod-{modName}
* 模块基类封装
* 抽象模块共有属性，高度通用

###继承样式名.inh-{modName}-{funcName}
* 继承modName可继承样式，
* 结构上表现为.mod-{modName}的子元素

###多态样式名.pol-{modName}-{funcName}
* 添加个性化属性
* 结构上表现为.mod-{modName}的同元素的多个样式

###代码示例
    [css]：
    .mod-test { //基类
        display:block;
    }
        .inh-test-f12 { //继承子类
            font-size: 12px;
        }
    .pol-test-red { //多态类red
        color: red;
    }
    .pol-test-blue { //多态类blue
        color: blue;
    }
    [html]:
    <!--B 继承实现-->
    <div class="mod-test">
        <div class="inh-test-f12"></div>
    </div>
    <!--E 继承实现-->
    
    <!--B 多态实现-->
    <div class="mod-test pol-test-red"></div>    
    <div class="mod-test pol-test-blue"></div>
    <!--E 多态实现-->