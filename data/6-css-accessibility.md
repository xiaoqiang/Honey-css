# 可访问性和无障碍访问

* 了解[网站508规范](http://www.access-board.gov/sec508/guide/1194.22.htm)
* 使用了JS页面应该考虑用户关闭JS的情况，用noscript提示
* 正确的焦点顺序，或者使用tabindex修复
* 文字的title，图片的alt，适配读屏软件
* 适当使用一字换图的手法text-indent: -2000px;overflow: hidden;width: value;
* 当元素背景是深色的时候，比如#000，我们通常会选择一种比较浅的颜色来做为文本的颜色，比如#fff，为了避免网速缓慢导致CSS已经 加载，而图片仍未加载完成或图片服务器挂掉时文本不可见，请尽量使用加上CSS定义的背景颜色，如：background:#e8edef url(path/to/image) no-repeat 0 0;
* 根据浏览器的支持程度，可以适当考虑语言输入