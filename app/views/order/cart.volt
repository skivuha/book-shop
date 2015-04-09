{{ stylesheet_link("css/order/cart.css") }}
<div class='container-body'>
<div class="container-table">
{% for item in shopCard %}
    {% if loop.first %}
        <table class="table table-hover">
            <tr>
                <th>N/n</th><th>NameBook</th><th>Count</th><th>Price</th><th ><p align="center">Remove</p></th>
            </tr>
    {% endif %}
    <tr>
        <td>{{ loop.index }}</td>
        <td>{{ item.books.getName() }}</td>
        <td><span class="glyphicon glyphicon-minus"></span><span class="number" name="{{ item.books.getIdBook() }}">  {{ item.shoppingCart.getCount() }}  </span><span class="glyphicon glyphicon-plus"></td>
        <td class='price'>{{ item.shoppingCart.getPrice() }}</td>
        <td align="center"><span class='glyphicon glyphicon-trash' name="{{ item.books.getIdBook() }}" ></span></td>
    </tr>
      {% if loop.last %}
        <tr><td colspan="2" ></td><td align="left"> <b>Amount: </b><td><span id='amount'>{{ summary }}</span></td><td></td></tr>
         <tr><td colspan="3" align="right"> </td><td>
                <form action='book-shop/order/getorder' method='post'>
                    <input type='submit' value='Order'> 
                </form>
                </td>
                <td></td>
            </tr>
          </table>
          
       
               
          
      {% endif %}
  
    {% else %}
    <h3 align='center'>There are no one book in ur card</h3>
{% endfor %}
</div>
</div>


{{ javascript_include("js/order/cart.js") }}

