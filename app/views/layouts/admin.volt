{{ stylesheet_link("css/admin/header.css") }}
 
<div id='filter-header' class='cp-clear'>
    <div class='option-panel'>
        <ul>
            <li><a href='./book-shop/admin/index'>Main Panel</a></li><li><a href='./book-shop/admin/getOrders'>Orders</a></li><li><a href='./book-shop/admin/getUsers'>Users</a></li>
        </ul>
    </div>
    <div class='add-div'>
         <a href='./book-shop/admin/add'><input type='button' value='Add a book' class="btn btn-info"></a>
    </div>
    </div>
    
      <div id='container'>     
            {{ content() }}
      </div>

{{ javascript_include("js/admin/header.js") }}