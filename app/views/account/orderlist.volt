{{ stylesheet_link("css/index/orderlist.css") }}

<div id='body-container'>

    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
    
    <table border=1>
        <tr>
            <th>N/n</th><th>Date</th><th>Amount</th><th>Status</th>
        </tr>
    </table>

  
       
        {% for order in orders %}
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingOne">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#{{ loop.index }}" aria-expanded="true" aria-controls="collapseOne">
                        <table border='1'>
                            <tr>  
                                <td>{{ loop.index }} </td><td>{{ order.getDate() }}</td><td>{{ order.getSummary() }}</td><td>{{ status[order.getIdOrders()] }}</td>
                            </tr>
                        </table> 
                    </a>
                </h4>
            </div>
        </div>
    <div id="{{ loop.index }}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
            {% for item in itemsOrder[order.getIdOrders()]%}
                {% if loop.first %}
                    <table border='1'>
                        <tr>
                            <th>N/n</th><th>Book</th><th>Count</th><th>Price</th>
                        </tr>        
                {% endif %}
                    <tr>
                        <td>{{ loop.index }}</td><td>{{ item.getBooksIdBook() }}</td><td>{{ item.getCount() }}</td><td>{{ item.getPrice() }}</td>
                    </tr>
                {% endfor %} 
                    </table>
         </div>
     </div>
        {% endfor %}
    
    
    
    
    </div>
</div>

{{ javascript_include("js/index/orderlist.js") }}
