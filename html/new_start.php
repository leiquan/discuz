<?php

require_once '../source/class/class_core.php';//必须的，你懂的

$discuz = & discuz_core::instance();//必须的，你懂的

$discuz->cachelist = $cachelist;//必须的，你懂的

$discuz->init();//必须的，你懂的

?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="gb2312">

  <title>雷全的个人网站</title>
  <meta name="keywords" content="雷全,雷全的个人网站,雷全的个人主页,雷全的博客,leiquan,leiquan.me,leiquan.website">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="description" content="欢迎访问雷全的个人网站，这里有我的技术博客、打油小诗、随笔杂文、读书笔记以及我分享的照片和资源。">

  <link rel="stylesheet" href="css/style.css">


</head>

<body>


  <nav></nav>

  <div class="container">

    <div class='title' >欢迎加入一亩三分地论坛</div>

    <div class="step">

      <div class="a"></div>
      <div class="a1"></div>
      <div class="a2"></div>

      <div class="b"></div>
      <div class="b1"></div>
      <div class="b2"></div>

      <div class="c"></div>

    </div>

    <div class="brand">
      <?php
      echo $_G['username'];
      ?>
       , 恭喜你成功注册一亩三分地！
    </div>

    <div class="brand small">
      你目前的会员等级是
      <span>新农上路</span>
    </div>

    <div class="now">你现在可以：</div>

    <div class="box">

      <div class="item">
        <a class="button" href='http://leiquan.me/home.php?mod=spacecp&ac=avatar'>设置头像</a>
        <div class="txt">上传个性化的头像得10积分</div>
      </div>

      <div class="item">
        <a class="button" href='http://leiquan.me/forum.php?mod=forumdisplay&fid=2'>新手报道</a>
        <div class="txt">快去跟大家打个招呼吧</div>
      </div>

      <div class="item">
        <a class="button" href='https://www.takethegre.com/cn/gateway/scoreselect/'>GRE在线报名</a>
        <div class="txt">立刻进行GRE报名</div>
      </div>

      <div class="item">
        <a class="button" href='http://leiquan.me/home.php?mod=space&uid=2'>个人中心</a>
        <div class="txt">论坛热帖</div>
      </div>

    </div>

    <div class="box-left">
      <div class="head">热版</div>
      <div class="line"><a href='http://www.1point3acres.com/bbs/forum.php?mod=guide'>美国留学</a></div>
      <div class="line"><a href='http://www.1point3acres.com/bbs/forum.php?mod=guide'>美国留学</a></div>
      <div class="line"><a href='http://www.1point3acres.com/bbs/forum.php?mod=guide'>美国留学</a></div>
      <div class="line"><a href='http://www.1point3acres.com/bbs/forum.php?mod=guide'>美国留学</a></div>
      <div class="bottom"></div>

      <div class="head">美国版</div>
      <div class="line"><a href='http://www.1point3acres.com/bbs/forum.php?mod=guide'>美国留学</a></div>
      <div class="line"><a href='http://www.1point3acres.com/bbs/forum.php?mod=guide'>美国留学</a></div>
      <div class="line"><a href='http://www.1point3acres.com/bbs/forum.php?mod=guide'>美国留学</a></div>
      <div class="line"><a href='http://www.1point3acres.com/bbs/forum.php?mod=guide'>美国留学</a></div>
      <div class="bottom"></div>


    </div>


  </div>

</body>
</html>
