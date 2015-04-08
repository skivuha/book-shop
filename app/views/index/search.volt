{{ stylesheet_link("css/index/index.css") }}     

    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
   <div id='container' class='cp-clear'> 
   <div class='row'>
   
   <div class="col-md-2">
       
            <p align='center' class='name-filters'>Filters</p>
            <p id='lang-filter' class='it-filter'>Languages  <b class="caret"></b></p>
             <ul id='lang-filter-ul'>
                  {% for language in languages %}
                    <li> {{ link_to ('index/languagesList/idLanguage='~language.getIdLanguage(),  language.getName()) }}</li>

                  {% else %}
                      <h2>There're no one language! </h2>
                  {% endfor %}
            </ul>
            <p id='author-filter' class='it-filter'>Authors <b class="caret"></b></p>
             <ul id='author-filter-ul' style="display:none">
                {% for author in authors %}
                    <li>  {{ link_to ('index/authorsList/idAuthor='~author.getIdAuthors(),  author.getName()) }} </li>

                    {% else %}
                    <h2>There're no one authors! </h2>
                {% endfor %}
            </ul>
        </div>
        
       <div class="col-md-10">
        
         <div class='row'>
    {% for pageCurrent in pages.items %}       
                 <div id='book-div' class="col-md-4">

                 <div class='img-book'>
                 {{ link_to('index/detail/'~pageCurrent.getIdbook()~'/searchPage='~pages.current, image(imagePath~ pageCurrent.getIdbook()~".jpg", "alt": "Picture was removed", "title": pageCurrent.getName())) }}                 
                 </div>
                 
                    <div class='description'>
                           <p><b><i>{{ pageCurrent.getName() }}</b></i> </p>
                           <p class='price'>${{ pageCurrent.getPrice() }} </p>
                       </div>
                       <div class='form-div'>
                           {{ form('order/add/'~pageCurrent.getIdbook(), 'method': 'post') }}
                                {{ submit_button('Add to cart', '') }}
                           {{ end_form() }}
                       </div>
                     </div>
                       {% if loop.index is divisibleby(3) %}
                            </div>
                            <div class='row'>
                       {% endif%}
              
                
    {% endfor %}
    </div>
                <div class="col-md-3">
                 <a href="./book-shop"><span class='glyphicon glyphicon-fast-backward'></span></a>
                <a href="./book-shop/index/search/?page={{ pages.before}}"><span class='glyphicon glyphicon-step-backward'></a>
                </div>
                <div class="col-md-6">
                    <ul class='pages'>
                             <?php 
                             for ($i = 1; $i <= $pages->total_pages; $i++){

                                if ( $pages->current == $i)
                                {
                                    echo "<p class='current-page'>$i</p>";
                                }
                                else
                                {
                                    echo "<li> <a href='./book-shop/index/search/?page=$i'>$i</a></li>";
                                }   
                             }?>
                    </ul>
                 </div>
                  <div id='last-pages' class="col-md-3">
                    <a href="./book-shop/index/search/?page={{ pages.next}}"><span class='glyphicon glyphicon-step-forward'></span></a>
                    <a href="./book-shop/index/search/?page={{ pages.last}}"><span class='glyphicon glyphicon-fast-forward'></span></a>
                 </div>
        </div>
     </div> 
     </div>
  </div>
   
   




 
{{ javascript_include("js/index/index.js") }}




