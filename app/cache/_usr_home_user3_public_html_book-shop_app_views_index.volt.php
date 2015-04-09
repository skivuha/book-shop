<!DOCTYPE html>
<html>
	<head>    
        <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Dosis' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
        
        <base href='http://192.168.0.15/~user3/'>
	    <script type="text/javascript" src="/~user3/book-shop/js/jquery/jquery-2.1.3.js"></script>        
        <script type="text/javascript" src="/~user3/book-shop/js/bootstrap/bootstrap.js"></script>       
        <link rel="stylesheet" href="/~user3/book-shop/css/bootstrap/bootstrap.css" type="text/css" />     
        <link rel="stylesheet" href="/~user3/book-shop/css/bootstrap/bootstrap-responsive.min.css" type="text/css" />
        <link rel="stylesheet" href="/~user3/book-shop/css/bootstrap/bootstrap-theme.css" type="text/css" />
        <script type="text/javascript" src="/~user3/book-shop/js/index/index.js"></script>        
        
       <!--<base href='http://localhost/'>
	    <script type="text/javascript" src="/book-shop/js/jquery/jquery-2.1.3.js"></script>        
        <script type="text/javascript" src="/book-shop/js/bootstrap/bootstrap.js"></script>       
        <link rel="stylesheet" href="book-shop/css/bootstrap/bootstrap.css" type="text/css" />       
        <link rel="stylesheet" href="book-shop/css/bootstrap/bootstrap-responsive.min.css" type="text/css" />
        <link rel="stylesheet" href="book-shop/css/bootstrap/bootstrap-theme.css" type="text/css" />
        <script type="text/javascript" src="book-shop/js/index/index.js"></script>-->
        
		<title>Book-shop</title>
	</head>
	<body>
    <?php echo $this->tag->stylesheetLink('css/index/header.css'); ?>
    
    <nav class="navbar navbar-default navbar-fixed-top">
<div id='main-header-container' >
    <div class="img-container" class='cp-clear'>
        <div class='img-books'>
       
         <?php echo $this->tag->linkTo(array('', $this->tag->image(array('img/header/books.jpg', 'alt' => 'Picture was removed', 'title' => 'Home')))); ?> 
          </div>
          <div class='cart'>
                <div>
                    <p>Welcome to our online store!</p>
                    <p><span class='glyphicon glyphicon-shopping-cart'>  </span> My Cart :<a href='./book-shop/order/cart'>(<?php echo $total; ?>) item(-s) - $<?php echo $summary; ?> </a></p>
                 </div>
            </div>
         <div class='logo'>
            <?php echo $this->tag->linkTo(array('', $this->tag->image(array('img/header/name.png', 'alt' => 'Picture was removed', 'title' => 'Home')))); ?> 
         </div>     
         
    </div>
    <div class='link-container'>
        <div class='ul-s'>
            <ul>
                 <span class='glyphicon glyphicon-home'><span><li><a href='./book-shop/'> Home </a></li>
                 <?php if (empty($sessionOn)) { ?>
                   <span class='glyphicon glyphicon-log-in'><span><li><a href='./book-shop/account/login'> Sign in</a></li>
                <?php } else { ?>
                     <span class='glyphicon glyphicon-book'><span><li> <a href='./book-shop/account/orderlist'>History orders</a></li>
                    <span class='glyphicon glyphicon-log-out'><span><li> Hello, <?php echo $nameUser; ?> [<a href='./book-shop/account/logout'>Sign out</a>]</li>
                <?php } ?>

            </ul>
            </div>
    </div>
 
    
</div>
</nav>

		<?php echo $this->getContent(); ?>
	</body>
</html>
