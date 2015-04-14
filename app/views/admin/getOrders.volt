{{ stylesheet_link("css/admin/listOrders.css") }}
<div id='body-container'>
    <div id='border'>

    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
    
   <div class="row" id="row-first">
       
             <div class="col-md-3">N/n</div> <div class="col-md-3">Date</div> <div class="col-md-3">Amount, $</div><div class="col-md-3">Status</div>
        
    </div>

  
       
        {% for order in orders %}
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingOne">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#{{ loop.index }}" aria-expanded="true" aria-controls="collapseOne">
                       <div class="row">
                           
                                <div class="col-md-3">{{ loop.index }} </div><div class="col-md-3">{{ order.getDate() }}</div><div class="col-md-3">{{ order.getSummary() }}</div><div class="col-md-3">
                                 <select class='select-status' name='{{ order.getIdorders() }}'>
                                {% for statusOne in statuses %}   
                                    {% if ( status[order.getIdOrders()] == statusOne.getIdstatus() ) %}
                                        <option selected value='{{ statusOne.getIdstatus() }}' >{{ statusOne.getName() }}</option>
                                    
                                    {% else %}
                                        <option value='{{ statusOne.getIdstatus() }}'>{{ statusOne.getName() }}</option>
                                    {% endif %}
                                {% endfor %}
                                  </select>
                                </div>
                          
                        </div> 
                    </a>
                </h4>
            </div>
        </div>
    <div id="{{ loop.index }}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
            {% for item in itemsOrder[order.getIdOrders()]%}
                {% if loop.first %}
                    <table class="table table-hover">
                        <tr>
                            <th>N/n</th><th>Book</th><th>Count</th><th>Price</th>
                        </tr>        
                {% endif %}
                    <tr>
                        <td>{{ loop.index }}</td><td>{{ item.books.getName() }}</td><td>{{ item.itemsOrder.getCount() }}</td><td>{{ item.itemsOrder.getPrice() }}</td>
                    </tr>
                {% endfor %} 
                    </table>
         </div>
     </div>
        {% endfor %}
    
    
    
      </div>
    </div>
</div>

{{ javascript_include("js/admin/orders.js") }}