<?php

require_once '../source/class/class_core.php';//����ģ��㶮��

$discuz = & discuz_core::instance();//����ģ��㶮��

$discuz->cachelist = $cachelist;//����ģ��㶮��

$discuz->init();//����ģ��㶮��

?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="gb2312">

  <title>��ȫ�ĸ�����վ</title>
  <meta name="keywords" content="��ȫ,��ȫ�ĸ�����վ,��ȫ�ĸ�����ҳ,��ȫ�Ĳ���,leiquan,leiquan.me,leiquan.website">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="description" content="��ӭ������ȫ�ĸ�����վ���������ҵļ������͡�����Сʫ��������ġ�����ʼ��Լ��ҷ������Ƭ����Դ��">

  <link rel="stylesheet" href="css/style.css">


</head>

<body>


  <nav></nav>

  <div class="container">

    <div class='title' >��ӭ����һĶ���ֵ���̳</div>

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
       , ��ϲ��ɹ�ע��һĶ���ֵأ�
    </div>

    <div class="brand small">
      ��Ŀǰ�Ļ�Ա�ȼ���
      <span>��ũ��·</span>
    </div>

    <div class="now">�����ڿ��ԣ�</div>

    <div class="box">

      <div class="item">
        <a class="button" href='http://leiquan.me/home.php?mod=spacecp&ac=avatar'>����ͷ��</a>
        <div class="txt">�ϴ����Ի���ͷ���10����</div>
      </div>

      <div class="item">
        <a class="button" href='http://leiquan.me/forum.php?mod=forumdisplay&fid=2'>���ֱ���</a>
        <div class="txt">��ȥ����Ҵ���к���</div>
      </div>

      <div class="item">
        <a class="button" href='https://www.takethegre.com/cn/gateway/scoreselect/'>GRE���߱���</a>
        <div class="txt">���̽���GRE����</div>
      </div>

      <div class="item">
        <a class="button" href='http://leiquan.me/home.php?mod=space&uid=2'>��������</a>
        <div class="txt">��̳����</div>
      </div>

    </div>

    <div class="box-left">
      <div class="head">�Ȱ�</div>
      <div class="line"><a href='http://www.1point3acres.com/bbs/forum.php?mod=guide'>������ѧ</a></div>
      <div class="line"><a href='http://www.1point3acres.com/bbs/forum.php?mod=guide'>������ѧ</a></div>
      <div class="line"><a href='http://www.1point3acres.com/bbs/forum.php?mod=guide'>������ѧ</a></div>
      <div class="line"><a href='http://www.1point3acres.com/bbs/forum.php?mod=guide'>������ѧ</a></div>
      <div class="bottom"></div>

      <div class="head">������</div>
      <div class="line"><a href='http://www.1point3acres.com/bbs/forum.php?mod=guide'>������ѧ</a></div>
      <div class="line"><a href='http://www.1point3acres.com/bbs/forum.php?mod=guide'>������ѧ</a></div>
      <div class="line"><a href='http://www.1point3acres.com/bbs/forum.php?mod=guide'>������ѧ</a></div>
      <div class="line"><a href='http://www.1point3acres.com/bbs/forum.php?mod=guide'>������ѧ</a></div>
      <div class="bottom"></div>


    </div>


  </div>

</body>
</html>
