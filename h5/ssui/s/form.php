<?php include "header.php" ?>


    <header class='demos-header'>
      <h1 class="demos-title">表单</h1>
    </header>
    <div class="weui-cells__title">单选列表项</div>
    <div class="weui-cells weui-cells_radio">
      <label class="weui-cell weui-check__label" for="x11">
        <div class="weui-cell__bd">
          <p>cell standard</p>
        </div>
        <div class="weui-cell__ft">
          <input type="radio" class="weui-check" name="radio1" id="x11">
          <span class="weui-icon-checked"></span>
        </div>
      </label>
      <label class="weui-cell weui-check__label" for="x12">

        <div class="weui-cell__bd">
          <p>cell standard</p>
        </div>
        <div class="weui-cell__ft">
          <input type="radio" name="radio1" class="weui-check" id="x12" checked="checked">
          <span class="weui-icon-checked"></span>
        </div>
      </label>
      <a href="javascript:void(0);" class="weui-cell weui-cell_link">
        <div class="weui-cell__bd">添加更多</div>
      </a>
    </div>
    <div class="weui-cells__title">复选列表项</div>
    <div class="weui-cells weui-cells_checkbox">
      <label class="weui-cell weui-check__label" for="s11">
        <div class="weui-cell__hd">
          <input type="checkbox" class="weui-check" name="checkbox1" id="s11" checked="checked">
          <i class="weui-icon-checked"></i>
        </div>
        <div class="weui-cell__bd">
          <p>standard is dealt for u.</p>
        </div>
      </label>
      <label class="weui-cell weui-check__label" for="s12">
        <div class="weui-cell__hd">
          <input type="checkbox" name="checkbox1" class="weui-check" id="s12">
          <i class="weui-icon-checked"></i>
        </div>
        <div class="weui-cell__bd">
          <p>standard is dealicient for u.</p>
        </div>
      </label>
      <a href="javascript:void(0);" class="weui-cell weui-cell_link">
        <div class="weui-cell__bd">添加更多</div>
      </a>
    </div>

    <div class="weui-cells__title">表单</div>
    <div class="weui-cells weui-cells_form">
      <div class="weui-cell">
        <div class="weui-cell__hd"><label class="weui-label">qq</label></div>
        <div class="weui-cell__bd">
          <input class="weui-input" type="number" pattern="[0-9]*" placeholder="请输入qq号">
        </div>
      </div>
      <div class="weui-cell weui-cell_vcode">
        <div class="weui-cell__hd">
          <label class="weui-label">手机号</label>
        </div>
        <div class="weui-cell__bd">
          <input class="weui-input" type="tel" placeholder="请输入手机号">
        </div>
        <div class="weui-cell__ft">
          <button class="weui-vcode-btn">获取验证码</button>
        </div>
      </div>
      <div class="weui-cell">
        <div class="weui-cell__hd"><label for="" class="weui-label">日期</label></div>
        <div class="weui-cell__bd">
          <input class="weui-input" type="date" value="">
        </div>
      </div>
      <div class="weui-cell">
        <div class="weui-cell__hd"><label for="" class="weui-label">时间</label></div>
        <div class="weui-cell__bd">
          <input class="weui-input" type="datetime-local" value="" placeholder="">
        </div>
      </div>
      <div class="weui-cell weui-cell_vcode">
        <div class="weui-cell__hd"><label class="weui-label">验证码</label></div>
        <div class="weui-cell__bd">
          <input class="weui-input" type="number" placeholder="请输入验证码">
        </div>
        <div class="weui-cell__ft">
          <img class="weui-vcode-img" src="./images/vcode.jpg">
        </div>
      </div>
    </div>
    <div class="weui-cells__tips">底部说明文字底部说明文字</div>

    <div class="weui-cells__title">表单报错</div>
    <div class="weui-cells weui-cells_form">
      <div class="weui-cell weui-cell_warn">
        <div class="weui-cell__hd"><label for="" class="weui-label">卡号</label></div>
        <div class="weui-cell__bd">
          <input class="weui-input" type="number" pattern="[0-9]*" value="weui input error" placeholder="请输入卡号">
        </div>
        <div class="weui-cell__ft">
          <i class="weui-icon-warn"></i>
        </div>
      </div>
    </div>


    <div class="weui-cells__title">开关</div>
    <div class="weui-cells weui-cells_form">
      <div class="weui-cell weui-cell_switch">
        <div class="weui-cell__bd">标题文字</div>
        <div class="weui-cell__ft">
          <input class="weui-switch" type="checkbox">
        </div>
      </div>
      <div class="weui-cell weui-cell_switch">
        <div class="weui-cell__bd">兼容IE Edge的版本</div>
        <div class="weui-cell__ft">
          <label for="switchCP" class="weui-switch-cp">
            <input id="switchCP" class="weui-switch-cp__input" type="checkbox" checked="checked">
            <div class="weui-switch-cp__box"></div>
          </label>
        </div>
      </div>
    </div>

    <div class="weui-cells__title">文本框</div>
    <div class="weui-cells">
      <div class="weui-cell">
        <div class="weui-cell__bd">
          <input class="weui-input" type="text" placeholder="请输入文本">
        </div>
      </div>
    </div>

    <div class="weui-cells__title">文本域</div>
    <div class="weui-cells weui-cells_form">
      <div class="weui-cell">
        <div class="weui-cell__bd">
          <textarea class="weui-textarea" placeholder="请输入文本" rows="3"></textarea>
          <div class="weui-textarea-counter"><span>0</span>/200</div>
        </div>
      </div>
    </div>

    <div class="weui-cells__title">选择</div>
    <div class="weui-cells">

      <div class="weui-cell weui-cell_select weui-cell_select-before">
        <div class="weui-cell__hd">
          <select class="weui-select" name="select2">
            <option value="1">+86</option>
            <option value="2">+80</option>
            <option value="3">+84</option>
            <option value="4">+87</option>
          </select>
        </div>
        <div class="weui-cell__bd">
          <input class="weui-input" type="number" pattern="[0-9]*" placeholder="请输入号码">
        </div>
      </div>
    </div>
    <div class="weui-cells__title">选择</div>
    <div class="weui-cells">
      <div class="weui-cell weui-cell_select">
        <div class="weui-cell__bd">
          <select class="weui-select" name="select1">
            <option selected="" value="1">微信号</option>
            <option value="2">QQ号</option>
            <option value="3">Email</option>
          </select>
        </div>
      </div>
      <div class="weui-cell weui-cell_select weui-cell_select-after">
        <div class="weui-cell__hd">
          <label for="" class="weui-label">国家/地区</label>
        </div>
        <div class="weui-cell__bd">
          <select class="weui-select" name="select2">
            <option value="1">中国</option>
            <option value="2">美国</option>
            <option value="3">英国</option>
          </select>
        </div>
      </div>
    </div>

    <label for="weuiAgree" class="weui-agree">
      <input id="weuiAgree" type="checkbox" class="weui-agree__checkbox">
      <span class="weui-agree__text">
        阅读并同意<a href="javascript:void(0);">《相关条款》</a>
      </span>
    </label>

    <div class="weui-btn-area">
      <a class="weui-btn weui-btn_primary" href="javascript:" id="showTooltips">确定</a>
    </div>



    <script>
      $("#showTooltips").click(function() {
        var tel = $('#tel').val();
        var code = $('#code').val();
        if(!tel || !/1[3|4|5|7|8]\d{9}/.test(tel)) $.toptip('请输入手机号');
        else if(!code || !/\d{6}/.test(code)) $.toptip('请输入六位手机验证码');
        else $.toptip('提交成功', 'success');
      });
    </script>
<?php include "footer.php"?>
