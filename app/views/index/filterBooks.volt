{{ stylesheet_link("css/index/filter.css") }}
<div class='filter-header'>
     
       
               {% if languageView is empty  %}
                    <div style='width:40px; float:left;'>
                            {{ link_to ('',  'Back') }}
                    </div>
                    <div class='filter'>
                         <p align='center' class='name-filter'>{{ t._("authors")}}: {{ name }}</p>
                    </div>
                    {% else %}
                     <div style='width:40px; float:left;'>
                            {{ link_to ('',  'Back') }}
                    </div>
                    <div class='filter'>
                        <p align='center'  class='name-filter'>{{ t._("lan")}}: {{ name }}</p>
                    </div>
                 {% endif %}
            
        
    </div>
     
    <div id='container' class='cp-clear'>   
     <div class='row'>
          {% for book in books %}
           <div id='book-div' class="col-md-3">
                 <div class='img-book'>            
                 {{ link_to ('index/detail/'~book.getIdbook()~'/'~id, image(imagePath~ book.getIdbook()~".jpg", "alt": "Picture was removed", "title": book.getName() ))}}
                 </div>
                       <div class='description'>
                           <p><b><i>{{ book.getName() }}</b></i> </p>
                           <p class='price'>{{ book.getPrice() }} $</p>
                       </div>
                       <div class='form-div'>
                           {{ form('index/buy/'~book.getIdbook(), 'method': 'post') }}
                                {{ submit_button('Add to cart', '') }}
                           {{ end_form() }}
                       </div>
                 </div>
                  {% if loop.index is divisibleby(4) %}
                            </div>
                            <div class='row'>
                       {% endif%}
                 {% else %}
                    <h2>There're no one books in magazine! </h2>
            {% endfor %}  
            </div>
    
{{ javascript_include("js/index/filter.js") }}
