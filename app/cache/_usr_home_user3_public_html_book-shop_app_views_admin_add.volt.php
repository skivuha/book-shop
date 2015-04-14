<?php echo $this->tag->stylesheetLink('css/admin/edit.css'); ?>
<div id='body-container'>
        <?php echo $this->flashSession->output(); ?>
  <form action='./book-shop/admin/add' method='post' enctype="multipart/form-data">
     
        <label for="name">Name:</label></br>
        <input id='name' type='text' name='name' placeholder='Name' value='<?php echo $saveValue[0]; ?>'></br>
        
         <label for="description">Description:</label></br>
         <textarea rows="10" cols="45" id='description' name='description' placeholder='Description'><?php echo $saveValue[1]; ?></textarea></br>   
         
         <label for="price">Price:</label></br>
        <input id='price' type='text' name='price' placeholder='Price' value='<?php echo $saveValue[2]; ?>'></br>
        
        <label for="author">Author:</label></br>
        <select id='author' name='authorId'>
        <?php foreach ($authors as $author) { ?>          
                 <option value="<?php echo $author->getIdAuthors(); ?>" ><?php echo $author->getName(); ?></option>
           
        <?php } ?>
        </select></br>
        
         <label for="language">Language:</label></br>
         <select id='language' name='languageId'>
        <?php foreach ($languages as $language) { ?>       
                 <option value="<?php echo $language->getIdLanguage(); ?>"><?php echo $language->getName(); ?></option>
          
           
        <?php } ?>
        </select></br></br>
        <input type='file' name='picture' accept="image/jpeg,image/png" >
        <div class='buttons-div'>
            <a href='./book-shop/admin/index'><input type='button' value='Back' class="btn btn-primary"></a>&nbsp;&nbsp;&nbsp;
            <input type='submit' value='Add'>
        </div>
        
    </form>
   
   
</div>
