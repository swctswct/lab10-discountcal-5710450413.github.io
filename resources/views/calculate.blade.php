<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
      <link href="{{asset('css/bulma.css')}}" rel="stylesheet">
      <link href="{{asset('css/mystyle.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/tab.css">
    <title></title>
  </head>
  <body style="background:url(/img/bg1.jpg);">
    <nav class="level">


      <p class="level-item has-text-centered">
        <a class="link is-info" style="font-weight: bold; font-size:35px">
          <img src="/img/Purse-128.png"  height="60" width="60"> Discount Calculator  </a>
      </p>


    </nav>

    <div class=" columns is-mobile " >
      <div class="box column is-4 is-offset-4"  style="font-weight:bold ; font-size: 37px;" >
        <!-- <p style="text-align:center">  <img src="img/1492475694_compose.png" ></p> -->
         <!-- <p class="has-text-centered"></p> -->

         <div class="content">
           <form action="calculate" method="post">

       <div class="field">
         <label class="label"></br>Full price (Baht)</label>

           <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
           <input type="text" name="name" value="" class="input" placeholder="Price">

         <label class="label">Discount (%)</label>

           <input type="text" name="name2" value="" class="input" placeholder="0-100%">

   <div class="title" style="color:#dc143c;">Amount save : {{{ $discount or '' }}}  </div>
   <div class="title">Discount price :{{{ $result or '' }}}   </div>
   <div class="has-text-centered">
   <input class="button is-medium is-primary" type="submit" value="Calculate">
   </div>
    </div>
</form>
 </div>
 </div>
</div>
    <!-- <div class="container">
  <div class="title">Hello {{{ $discount or '' }}}  </div>
  <div class="title">Hello {{{ $result or '' }}}  </div>
  <div class="content">
    <form action="register" method="post">
      <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
      <input type="text" name="name" value="">
      <input type="text" name="name2" value="">
      <input type="submit" value="Submit">
    </form>
  </div>
</div> -->
  </body>
</html>
