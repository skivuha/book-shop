{{ stylesheet_link("css/order/getorder.css") }}

<div class='container-body'>
<div class='container'>
    <p> Your order amount is: {{ totalSum }} </p>
    {% if discountValue is empty == false%}
        <p>Your discount: {{ discountValue }} %</p>
        <p>Your order amount after discount is: {{ finalAmount }}</p>
    {% endif %}
    <fieldset>
        <legend>Choose your payment system:</legend>
        <form action='./book-shop/order/grats' method='post'>
        {% for system in payment%}
            <input type="radio" name="group1" value="{{ system.getIdPayment() }}"> {{ system.getName() }}<br>
        {% endfor %}
        <p>
            <a href='./book-shop/order/cart'><input type='button' value="Cancel" class='btn btn-primary'></a>&nbsp;&nbsp;&nbsp;
            <input id='buy' type='submit' value='Buy' >
         </p>
        </form>
        </fieldset>
</div>
</div>

{{ javascript_include("js/order/getorder.js") }}
