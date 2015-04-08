{{ stylesheet_link("css/index/filter.css") }}
<div class='filter-header'>
<div style='width:40px; float:left;'>
 {{ link_to ('',  'Back') }}
 </div>
<div class='filter'>

    <b>Authors List:</b>
    </div>
</div>
<div class='list'>
    <ul>
  {% for author in authors %}
    <li>  {{ link_to ('index/authorsList/idAuthor='~author.getIdAuthors(),  author.getName()) }} </li>
  
  {% else %}
      <h2>There're no one authors! </h2>
  {% endfor %}
    </ul>
</div>



{{ javascript_include("js/index/filter.js") }}