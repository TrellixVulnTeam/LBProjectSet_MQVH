<?php include "header.php"?>


    <header class='demos-header'>
      <h1 class="demos-title">Badge</h1>
    </header>

    <div class="weui-cells__title">新消息提示跟摘要信息后，统一在列表右侧</div>
    <div class="weui-cells">
      <div class="weui-cell weui-cell_access">
        <div class="weui-cell__bd">单行列表</div>
        <div class="weui-cell__ft" style="font-size: 0">
          <span style="vertical-align:middle; font-size: 17px;">详细信息</span>
          <span class="weui-badge weui-badge_dot" style="margin-left: 5px;margin-right: 5px;"></span>
        </div>
      </div>
    </div>

    <div class="weui-cells__title">未读数红点跟在主题信息后，统一在列表左侧</div>
    <div class="weui-cells">
      <div class="weui-cell">
        <div class="weui-cell__hd" style="position: relative;margin-right: 10px;">
          <img src="images/pic_160.png" style="width: 50px;display: block">
          <span class="weui-badge" style="position: absolute;top: -.4em;right: -.4em;">8</span>
        </div>
        <div class="weui-cell__bd">
          <p>联系人名称</p>
          <p style="font-size: 13px;color: #888888;">摘要信息</p>
        </div>
      </div>
      <div class="weui-cell weui-cell_access">
        <div class="weui-cell__bd">
          <span style="vertical-align: middle">单行列表</span>
          <span class="weui-badge" style="margin-left: 5px;">8</span>
        </div>
        <div class="weui-cell__ft"></div>
      </div>
      <div class="weui-cell weui-cell_access">
        <div class="weui-cell__bd">
          <span style="vertical-align: middle">单行列表</span>
          <span class="weui-badge" style="margin-left: 5px;">8</span>
        </div>
        <div class="weui-cell__ft">详细信息</div>
      </div>
      <div class="weui-cell weui-cell_access">
        <div class="weui-cell__bd">
          <span style="vertical-align: middle">单行列表</span>
          <span class="weui-badge" style="margin-left: 5px;">New</span>
        </div>
        <div class="weui-cell__ft"></div>
      </div>
    </div>
<?php include "footer.php"?>