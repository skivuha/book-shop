{{ stylesheet_link("css/admin/edit.css") }}
<div id='body-container'>
        {{ flashSession.output() }}
  <form action='./book-shop/admin/add' method='post' enctype="multipart/form-data">
     
        <label for="name">Name:</label></br>
        <input id='name' type='text' name='name' placeholder='Name' value='{{ saveValue[0] }}'></br>
        
         <label for="description">Description:</label></br>
         <textarea rows="10" cols="45" id='description' name='description' placeholder='Description'>{{ saveValue[1] }}</textarea></br>   
         
         <label for="price">Price:</label></br>
        <input id='price' type='text' name='price' placeholder='Price' value='{{ saveValue[2] }}'></br>
        
        <label for="author">Author:</label></br>
        <select id='author' name='authorId'>
        {% for author in authors %}          
                 <option value="{{ author.getIdAuthors() }}" >{{ author.getName() }}</option>
           
        {% endfor %}
        </select></br>
        
         <label for="language">Language:</label></br>
         <select id='language' name='languageId'>
        {% for language in languages %}       
                 <option value="{{ language.getIdLanguage() }}">{{ language.getName() }}</option>
          
           
        {% endfor %}
        </select></br></br>
        <input type='file' name='picture' accept="image/jpeg,image/png" >
        <div class='buttons-div'>
            <a href='./book-shop/admin/index'><input type='button' value='Back' class="btn btn-primary"></a>&nbsp;&nbsp;&nbsp;
            <input type='submit' value='Add'>
        </div>
        
    </form>
   
   
</div>
