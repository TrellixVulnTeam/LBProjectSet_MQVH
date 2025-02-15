<?php include "header.php" ?>

    <header class='demos-header'>
      <h1 class="demos-title">Popup</h1>
    </header>

    <div class='demos-content-padded'>
      <a href="javascript:;" class="weui-btn weui-btn_primary open-popup" data-target="#full">显示全屏(默认)Popup</a>
      <a href="javascript:;" class="weui-btn weui-btn_primary open-popup" data-target="#half">显示底部的Popup</a>
    </div>

    <div id="full" class='weui-popup__container'>
      <div class="weui-popup__overlay"></div>
      <div class="weui-popup__modal">
        <header class='demos-header'>
          <h2 class="demos-second-title">关于 jQuery WeUI</h2>
          <p class="demos-sub-title">By 言川 @2016/03/30</p>
        </header>
        <article class="weui-article">
          <h1>大标题</h1>
          <section>
            <h2 class="title">章标题</h2>
            <section>
              <h3>1.1 节标题</h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat.
              </p>
              <p>
                <img src="./images/pic_article.png" alt="">
                <img src="./images/pic_article.png" alt="">
              </p>
            </section>
            <section>
              <h3>1.2 节标题</h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
            </section>
          </section>
        </article>
        <a href="javascript:;" class="weui-btn weui-btn_primary close-popup">关闭</a>
      </div>
    </div>

    <div id="half" class='weui-popup__container popup-bottom'>
      <div class="weui-popup__overlay"></div>
      <div class="weui-popup__modal">
        <div class="toolbar">
          <div class="toolbar-inner">
            <a href="javascript:;" class="picker-button close-popup">关闭</a>
            <h1 class="title">标题</h1>
          </div>
        </div>
        <div class="modal-content">
          <div class="weui-grids">
            <a href="javascript:;" class="weui-grid js_grid" data-id="dialog">
              <div class="weui-grid__icon">
                <img src="images/icon_nav_dialog.png" alt="">
              </div>
              <p class="weui-grid__label">
                发布
              </p>
            </a>
            <a href="javascript:;" class="weui-grid js_grid" data-id="progress">
              <div class="weui-grid__icon">
                <img src="images/icon_nav_progress.png" alt="">
              </div>
              <p class="weui-grid__label">
                编辑
              </p>
            </a>
            <a href="javascript:;" class="weui-grid js_grid" data-id="msg">
              <div class="weui-grid__icon">
                <img src="images/icon_nav_msg.png" alt="">
              </div>
              <p class="weui-grid__label">
                保存
              </p>
            </a>
            <a href="javascript:;" class="weui-grid js_grid" data-id="dialog">
              <div class="weui-grid__icon">
                <img src="images/icon_nav_dialog.png" alt="">
              </div>
              <p class="weui-grid__label">
                发布
              </p>
            </a>
            <a href="javascript:;" class="weui-grid js_grid" data-id="progress">
              <div class="weui-grid__icon">
                <img src="images/icon_nav_progress.png" alt="">
              </div>
              <p class="weui-grid__label">
                编辑
              </p>
            </a>
            <a href="javascript:;" class="weui-grid js_grid" data-id="msg">
              <div class="weui-grid__icon">
                <img src="images/icon_nav_msg.png" alt="">
              </div>
              <p class="weui-grid__label">
                保存
              </p>
            </a>
          </div>
        </div>
      </div>
    </div>


    <script>
      $(document).on("open", ".weui-popup-modal", function() {
        console.log("open popup");
      }).on("close", ".weui-popup-modal", function() {
        console.log("close popup");
      });
    </script>

<?php include "footer.php"?>