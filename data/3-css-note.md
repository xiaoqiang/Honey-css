# 注释规范

## css注释规范

### css文件注释
    /**
     *name: base.css;
     *function: reset,base css,tools;
     *creator: xiaoqiang;
     *modify: none;
     *update-time: 2011-07-11;
     **/

### css模块注释
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
    <!--B mod-test-->
    <div class="mod-test">
        <div class="inh-test-f12"></div>
    </div>
    <!--E mod-test-->