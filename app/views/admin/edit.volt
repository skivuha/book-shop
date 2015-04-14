{{ stylesheet_link("css/admin/edit.css") }}
<div id='body-container'>

  <form action='./book-shop/admin/edit' method='post'>
        <input type='hidden' value='{{ book.getIdBook() }}' name='idBook'>
        <label for="name">Name:</label></br>
        <input id='name' type='text' value='{{ book.getName() }}' name='name'></br>
        
         <label for="description">Description:</label></br>
         <textarea rows="10" cols="45" id='description' name='description'>{{ book.getDescription() }}</textarea></br>   
         
         <label for="price">Price:</label></br>
        <input id='price' type='text' value='{{ book.getPrice() }}' name='price'></br>
        
        <label for="author">Author:</label></br>
        <select id='author' name='authorId'>
        {% for author in authors %}
            {% if (  author.getIdAuthors() == idAuthor) %}
                <option value="{{ author.getIdAuthors() }}" selected>{{ author.getName() }}</option>
            {% else %}
                 <option value="{{ author.getIdAuthors() }}" >{{ author.getName() }}</option>
            {% endif %}
        {% endfor %}
        </select></br>
        
         <label for="language">Language:</label></br>
         <select id='language' name='languageId'>
        {% for language in languages %}
         {% if (  language.getIdLanguage() == idLanguage) %}
                <option value="{{ language.getIdLanguage() }}" selected>{{ language.getName() }}</option>
            {% else %}
                 <option value="{{ language.getIdLanguage() }}">{{ language.getName() }}</option>
            {% endif %}
           
        {% endfor %}
        </select>
        
        <div class='buttons-div'>
            <a href='./book-shop/admin/index'><input type='button' value='Back' class="btn btn-primary"></a>&nbsp;&nbsp;&nbsp;
            <input type='submit' value='Save'>
        </div>
        
    </form>
   
   
</div>
