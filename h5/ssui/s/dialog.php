<?php include "header.php"?>


    <header class='demos-header'>
      <h1 class="demos-title">对话框</h1>
    </header>

    <div class='demos-content-padded'>
      <a href="javascript:;" id='show-alert' class="weui-btn weui-btn_primary">显示 Alert</a>
      <a href="javascript:;" id='show-confirm' class="weui-btn weui-btn_primary">显示 Confirm</a>
      <a href="javascript:;" id='show-prompt' class="weui-btn weui-btn_primary">显示 Prompt</a>
      <a href="javascript:;" id='show-login' class="weui-btn weui-btn_primary">显示登录弹窗</a>
      <a href="javascript:;" id='show-custom' class="weui-btn weui-btn_primary">显示自定义对话框</a>
    </div>


    <script>
      $(document).on("click", "#show-alert", function() {
        $.alert("AlphaGo 就是天网的前身，人类要完蛋了！", "警告！");
      });
      $(document).on("click", "#show-confirm", function() {
        $.confirm("您确定要删除文件<<毛泽东语录>>吗?", "确认删除?", function() {
          $.toast("文件已经删除!");
        }, function() {
          //取消操作
        });
      });
      $(document).on("click", "#show-prompt", function() {
        $.prompt({
          text: "名字不能超过6个字符，不得出现不和谐文字",
          title: "输入姓名",
          onOK: function(text) {
            $.alert("您的名字是:"+text, "角色设定成功");
          },
          onCancel: function() {
            console.log("取消了");
          },
          input: 'Mr Noone'
        });
      });
      $(document).on("click", "#show-custom", function() {
        $.modal({
          title: "Hello",
          text: "我是自定义的modal",
          buttons: [
            { text: "支付宝", onClick: function(){ $.alert("你选择了支付宝"); } },
            { text: "微信支付", onClick: function(){ $.alert("你选择了微信支付"); } },
            { text: "取消", className: "default"},
          ]
        });
      });
      $(document).on('click', '#show-login', function() {
        $.login({
          title: '登录',
          text: '请输入用户名和密码',
          onOK: function (username, password) {
            console.log(username, password);
            $.toast('登录成功!');
          },
          onCancel: function () {
            $.toast('取消登录!', 'cancel');
          }
        });
      });
    </script>
<?php include "footer.php"?>
