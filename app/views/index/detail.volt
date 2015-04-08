{{ stylesheet_link("css/index/detail.css") }}

<div class='container'>
<h3 align='center'>{{ book.getName() }} </h3>
	<p align='center'>{{ image(imagePath~ book.getIdbook()~".jpg", "alt": "Picture was removed", "title": book.getName()) }}</p>
      {% for language in languages %}
            <p align='center'>Programming language: <i>{{ language }}</i></p>
      {% endfor %}
      <p align='center'>Author(-s):
      {% for author in authors %}
        {% if loop.length === 1 %}
            <i>{{ author }}</i>
            {% else %}         
             {% if loop.last %}
                <i>{{ author }}</i>
                 {% else %} 
                   <i>{{ author }},</i>
             {% endif %}
        {% endif %}
      {% endfor %}
      </p>
	<h4 align='center'>{{  book.getPrice() }} $</h4>
	<p align='justify'>{{  book.getDescription() }}</p>
  <div class='footer'>
  {% if secondParam is empty%}
   <a href='../../' ><button class='btn btn-primary'>Back</button></a>
  {% else %} 
      {% if backToLanguage is empty != true %}
            <a href={{ './book-shop/index/languagesList/idLanguage='~secondParam }} ><button class='btn btn-primary'>Back</button></a>
      {% elseif backToSearch is empty != true %}     
            <a href={{ './book-shop/index/search/?page='~secondParam }} ><button class='btn btn-primary'>Back</button></a>
            {% else %}
            <a href={{ './book-shop/index/authorsList/idAuthor='~secondParam }} ><button class='btn btn-primary'>Back</button></a>
      {% endif %}
   
  {% endif %}
       
       {{ form('order/add/'~book.getIdbook(), 'method': 'post') }}
            {{ submit_button('Add to cart', '') }}
        {{ end_form() }}
</div>
</div>

    
{{ javascript_include("js/index/detail.js") }}     
