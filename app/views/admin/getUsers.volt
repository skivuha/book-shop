<div class='content-container'>
  
    </select>
    {% for user in users%}
        {% if loop.first %}
            <table class="table table-hover">
                <tr>
                    <th>N/n</th><th>Name</th><th>Discount</th>
                </tr>
        {% endif %}
            <tr>
                <td>{{ loop.index }}</td><td>{{ user.getLogin() }}</td>                
                <td>        
                      
                        <select class='select-discount' name='{{ user.getIdUser() }}'>
                         {% for discount in discounts %}
                             {% if loop.first %}
                                 <option value='null'>Null</option>
                             {% endif %}
                         {% if ( user.getDiscountIdDiscount() == discount.getIddiscount() ) %}
                            <option value='{{ discount.getIddiscount() }}' selected>{{ discount.getValue() }}% </option>                           
                                {% else %}
                                 <option value='{{ discount.getIddiscount() }}'>{{ discount.getValue() }}% </option>     
                            {% endif %}                           
                         {% endfor %}
                           
                        </select>
                    
                </td>             
               
            </tr>
            {% else %}
            <h2>There're no one users in market!</h2>
    {% endfor %}
</div>

{{ javascript_include("js/admin/users.js") }}