<?php echo $this->tag->stylesheetLink('css/admin/edit.css'); ?>
<div id='body-container'>

  <form action='./book-shop/admin/edit' method='post'>
        <input type='hidden' value='<?php echo $book->getIdBook(); ?>' name='idBook'>
        <label for="name">Name:</label></br>
        <input id='name' type='text' value='<?php echo $book->getName(); ?>' name='name'></br>
        
         <label for="description">Description:</label></br>
         <textarea rows="10" cols="45" id='description' name='description'><?php echo $book->getDescription(); ?></textarea></br>   
         
         <label for="price">Price:</label></br>
        <input id='price' type='text' value='<?php echo $book->getPrice(); ?>' name='price'></br>
        
        <label for="author">Author:</label></br>
        <select id='author' name='authorId'>
        <?php foreach ($authors as $author) { ?>
            <?php if (($author->getIdAuthors() == $idAuthor)) { ?>
                <option value="<?php echo $author->getIdAuthors(); ?>" selected><?php echo $author->getName(); ?></option>
            <?php } else { ?>
                 <option value="<?php echo $author->getIdAuthors(); ?>" ><?php echo $author->getName(); ?></option>
            <?php } ?>
        <?php } ?>
        </select></br>
        
         <label for="language">Language:</label></br>
         <select id='language' name='languageId'>
        <?php foreach ($languages as $language) { ?>
         <?php if (($language->getIdLanguage() == $idLanguage)) { ?>
                <option value="<?php echo $language->getIdLanguage(); ?>" selected><?php echo $language->getName(); ?></option>
            <?php } else { ?>
                 <option value="<?php echo $language->getIdLanguage(); ?>"><?php echo $language->getName(); ?></option>
            <?php } ?>
           
        <?php } ?>
        </select>
        
        <div class='buttons-div'>
            <a href='./book-shop/admin/index'><input type='button' value='Back' class="btn btn-primary"></a>&nbsp;&nbsp;&nbsp;
            <input type='submit' value='Save'>
        </div>
        
    </form>
   
   
</div>
