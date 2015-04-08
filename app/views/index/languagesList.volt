{{ stylesheet_link("css/index/filter.css") }}

<div class='filter-header'>
<div style='width:40px; float:left;'>
 {{ link_to ('',  'Back') }}
 </div>
    <div class='filter-language'>
        <b>Programming Languages:</b>
    </div>
</div>
<div class='list'>
    <ul>
  {% for language in languages %}
    <li> {{ link_to ('index/languagesList/idLanguage='~language.getIdLanguage(),  language.getName()) }}</li>
  
  {% else %}
      <h2>There're no one language! </h2>
  {% endfor %}
    </ul>
</div>



{{ javascript_include("js/index/filter.js") }}