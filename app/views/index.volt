<!DOCTYPE html>
<html>
	<head>    
        <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Dosis' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
        
      <!--  <base href='http://192.168.0.15/~user3/'>
	    <script type="text/javascript" src="/~user3/book-shop/js/jquery/jquery-2.1.3.js"></script>        
        <script type="text/javascript" src="/~user3/book-shop/js/bootstrap/bootstrap.js"></script>       
        <link rel="stylesheet" href="/~user3/book-shop/css/bootstrap/bootstrap.css" type="text/css" />     
        <link rel="stylesheet" href="/~user3/book-shop/css/bootstrap/bootstrap-responsive.min.css" type="text/css" />
        <link rel="stylesheet" href="/~user3/book-shop/css/bootstrap/bootstrap-theme.css" type="text/css" />
        <script type="text/javascript" src="/~user3/book-shop/js/index/index.js"></script>-->        
        
       <base href='http://localhost/'>
	    <script type="text/javascript" src="/book-shop/js/jquery/jquery-2.1.3.js"></script>        
        <script type="text/javascript" src="/book-shop/js/bootstrap/bootstrap.js"></script>       
        <link rel="stylesheet" href="book-shop/css/bootstrap/bootstrap.css" type="text/css" />       
        <link rel="stylesheet" href="book-shop/css/bootstrap/bootstrap-responsive.min.css" type="text/css" />
        <link rel="stylesheet" href="book-shop/css/bootstrap/bootstrap-theme.css" type="text/css" />
        <script type="text/javascript" src="book-shop/js/index/index.js"></script>
        
		<title>Book-shop</title>
	</head>
	<body>
    {{ stylesheet_link("css/index/header.css") }}
    
    <nav class="navbar navbar-default navbar-fixed-top">
<div id='main-header-container' >
    <div class="img-container" class='cp-clear'>
        <div class='img-books'>
       
         {{ link_to ('', image("img/header/books.jpg", "alt": "Picture was removed", "title": "Home" ))}} 
          </div>
          <div class='cart'>   
                <div class='lang-div'>              
                    <select>
                        <option value='en' {{ selectedEn }}>English</option>
                        <option value='ru' {{ selectedRu }}>Русский</option>
                    </select>
                </div>
                <div class='cart-link'>
                    <p>{{ t._("welcome")}}</p>
                    <p><span class='glyphicon glyphicon-shopping-cart'>  </span> {{ t._("cart")  }} :<a href='./book-shop/order/cart'>({{ total }}) {{ t._("item")}} - ${{ summary }} </a></p>
                 </div>
                 
            </div>
         <div class='logo'>
            {{ link_to ('', image("img/header/name.png", "alt": "Picture was removed", "title": "Home" ))}} 
         </div>     
         
    </div>
    <div class='link-container'>
        <div class='ul-s'>
            <ul>
                 <span class='glyphicon glyphicon-home'><span><li><a href='./book-shop/'> {{ t._("home")}} </a></li>
                 {% if sessionOn is empty  %}
                   <span class='glyphicon glyphicon-log-in'><span><li><a href='./book-shop/account/login'> {{ t._("sign in")}} </a></li>
                {% else %}
                     <span class='glyphicon glyphicon-book'><span><li> <a href='./book-shop/account/orderlist'> {{ t._("history")}}</a></li>
                    <span class='glyphicon glyphicon-log-out'><span><li> {{ t._("hello")}}, {{ nameUser }} [<a href='./book-shop/account/logout'> {{ t._("sign out")}}</a> ]</li>
                {% endif %}

            </ul>
            </div>
    </div>
 
    
</div>
</nav>

		{{ content() }}
	</body>
</html>
