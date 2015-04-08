{{ stylesheet_link("css/order/cart.css") }}
<div class="container-table">
{% for item in shopCard %}
    {% if loop.first %}
        <table class="table table-striped">
            <tr>
                <th>N/n</th><th>NameBook</th><th>Count</th><th>Price</th><th ><p align="center">Remove</p></th>
            </tr>
    {% endif %}
    <tr>
        <td>{{ loop.index }}</td>
        <td>{{ item.books.getName() }}</td>
        <td><span class="glyphicon glyphicon-minus"></span><span class="number" name="{{ item.books.getIdBook() }}">  {{ item.shoppingCart.getCount() }}  </span><span class="glyphicon glyphicon-plus"></td>
        <td class='price'>{{ item.shoppingCart.getPrice() }}</td>
        <td align="center"><span class='glyphicon glyphicon-remove' name="{{ item.books.getIdBook() }}" ></span></td>
    </tr>
      {% if loop.last %}
        <tr><td colspan="3" align="right"> <b>Amount: </b></td><td><span id='amount'>{{ summary }}</span></td></tr>
          </table>
      {% endif %}
  
    {% else %}
    <h3 align='center'>There are no one book in ur card</h3>
{% endfor %}
</div>



{{ javascript_include("js/order/cart.js") }}

