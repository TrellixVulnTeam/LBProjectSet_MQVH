<?php include "header.php" ?>

    <header class='demos-header'>
      <h1 class="demos-title">Picker</h1>
    </header>

    
    <div class="weui-cells weui-cells_form">
      <div class="weui-cell">
        <div class="weui-cell__hd"><label for="name" class="weui-label">称呼</label></div>
        <div class="weui-cell__bd">
          <input class="weui-input" id="name" type="text" value="">
        </div>
      </div>
      <div class="weui-cell">
        <div class="weui-cell__hd"><label for="date" class="weui-label">手机</label></div>
        <div class="weui-cell__bd">
          <input class="weui-input" id="mobile" type="text" value="">
        </div>
      </div>
    </div>

    <div class="weui-cells weui-cells_form">
      <div class="weui-cell">
        <div class="weui-cell__hd"><label for="inline" class="weui-label">内联显示</label></div>
        <div class="weui-cell__bd">
          <input class="weui-input" id="inline" type="text" value="">
        </div>
      </div>
    </div>
    <div id="picker-container"></div>


    <script>
      $("#mobile").picker({
        title: "请选择您的手机",
        cols: [
          {
            textAlign: 'center',
            values: ['iPhone 4', 'iPhone 4S', 'iPhone 5', 'iPhone 5S', 'iPhone 6', 'iPhone 6 Plus', 'iPad 2', 'iPad Retina', 'iPad Air', 'iPad mini', 'iPad mini 2', 'iPad mini 3']
          }
        ],
        onChange: function(p, v, dv) {
          console.log(p, v, dv);
        },
        onClose: function(p, v, d) {
          console.log("close");
        }
      });
      $("#name").picker({
        title: "怎么称呼您？",
        cols: [
          {
            textAlign: 'center',
            values: ['Mr', 'Ms']
          },
          {
            textAlign: 'center',
            values: ['Amy', 'Bob', 'Cat', 'Dog', 'Ella', 'Fox', 'Google']
          }
        ]
      });

      $("#inline").picker({
        container: '#picker-container',
        cols: [
          {
            textAlign: 'center',
            values: ['iPhone 4', 'iPhone 4S', 'iPhone 5', 'iPhone 5S', 'iPhone 6', 'iPhone 6 Plus', 'iPad 2', 'iPad Retina', 'iPad Air', 'iPad mini', 'iPad mini 2', 'iPad mini 3']
          }
        ],
        onChange: function(p, v, dv) {
          console.log(p, v, dv);
        },
        onClose: function(p, v, d) {
          console.log("close");
        }
      });
    </script>
<?php include "footer.php"?>
