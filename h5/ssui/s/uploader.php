<?php include "header.php"?>

<header class='demos-header'>
      <h1 class="demos-title">Uploader</h1>
    </header>

    <div class="weui-cells weui-cells_form">
      <div class="weui-cell">
        <div class="weui-cell__bd">
          <div class="weui-uploader">
            <div class="weui-uploader__hd">
              <p class="weui-uploader__title">图片上传</p>
              <div class="weui-uploader__info">0/2</div>
            </div>
            <div class="weui-uploader__bd">
              <ul class="weui-uploader__files" id="uploaderFiles">
                <li class="weui-uploader__file" style="background-image:url(./images/pic_160.png)"></li>
                <li class="weui-uploader__file" style="background-image:url(./images/pic_160.png)"></li>
                <li class="weui-uploader__file" style="background-image:url(./images/pic_160.png)"></li>
                <li class="weui-uploader__file weui-uploader__file_status" style="background-image:url(./images/pic_160.png)">
                  <div class="weui-uploader__file-content">
                    <i class="weui-icon-warn"></i>
                  </div>
                </li>
                <li class="weui-uploader__file weui-uploader__file_status" style="background-image:url(./images/pic_160.png)">
                  <div class="weui-uploader__file-content">50%</div>
                </li>
              </ul>
              <div class="weui-uploader__input-box">
                <input id="uploaderInput" class="weui-uploader__input" type="file" accept="image/*" multiple="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php include "footer.php"?>
