# 注释规范

## css注释规范

### css文件注释
    [css]
    
    /**
     * @name: 样式文件名;
     * @function: 功能介绍;
     * @require: 依赖的样式;
     * @author: 作者;
     **/

### css模块注释
    [css]
    
    /* B mod-test */
    .mod-test { //基类
        display:block;
    }
        .inh-test-f12 { //继承子类
            font-size: 12px;
        }
    /* E mod-test */

## html注释规范

### html模块注释
    [html]
    
    <!--B mod-test-->
    <div class="mod-test">
        <div class="inh-test-f12"></div>
    </div>
    <!--E mod-test-->