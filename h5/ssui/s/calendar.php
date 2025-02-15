<?php include "header.php" ?>


    <header class='demos-header'>
      <h1 class="demos-title">Calendar</h1>
    </header>

    
    <div class="weui-cells weui-cells_form">
      <div class="weui-cell">
        <div class="weui-cell__hd"><label for="date" class="weui-label">日期</label></div>
        <div class="weui-cell__bd">
          <input class="weui-input" id="date" type="text">
        </div>
      </div>
      <div class="weui-cell">
        <div class="weui-cell__hd"><label for="date2" class="weui-label">中文</label></div>
        <div class="weui-cell__bd">
          <input class="weui-input" id="date2" type="text" value="">
        </div>
      </div>
      <div class="weui-cell">
        <div class="weui-cell__hd"><label for="date-multiple" class="weui-label">多选</label></div>
        <div class="weui-cell__bd">
          <input class="weui-input" id="date-multiple" type="text" value="">
        </div>
      </div>
    </div>

    <div class="demos-header">
      <h2 class="demos-second-title">内联日历</h2>
    </div>

    <div class="weui-cells weui-cells_form">
      <div class="weui-cell">
        <div class="weui-cell__hd"><label for="date3" class="weui-label">日期</label></div>
        <div class="weui-cell__bd">
          <input class="weui-input" id="date3" type="text">
        </div>
      </div>
    </div>
    <div id="inline-calendar"></div>



    <script>
      $("#date").calendar({
        onChange: function (p, values, displayValues) {
          console.log(values, displayValues);
        }
      });
      $("#date2").calendar({
        value: ['2016-12-12'],
        dateFormat: 'yyyy年mm月dd日'  // 自定义格式的时候，不能通过 input 的value属性赋值 '2016年12月12日' 来定义初始值，这样会导致无法解析初始值而报错。只能通过js中设置 value 的形式来赋值，并且需要按标准形式赋值（yyyy-mm-dd 或者时间戳)
      });
      $("#date-multiple").calendar({
        multiple: true,
        onChange: function (p, values, displayValues) {
          console.log(values, displayValues);
        }
      });
      $("#date3").calendar({
        container: "#inline-calendar"
      });
    </script>
<?php include "footer.php"?>