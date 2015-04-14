{{ stylesheet_link("css/admin/books.css") }}

<div id='body-container'>
   
        {{ flashSession.output() }}
     <table class="table table-striped">
        <tr>
            <th>N/n</th><th>Boon Name</th><th>Edit</th><th>Remove</th>
        </tr>
         {% for book in books%}
            <tr>
                <td>{{ loop.index }}</td>
                <td>{{ book.getName() }}</td>
                <td><a href='./book-shop/admin/edit/{{ book.getIdBook() }}'><span class='glyphicon glyphicon-edit'></span></a></td>
                 <td><a href='./book-shop/admin/removeBook/{{ book.getIdBook() }}'><span class='glyphicon glyphicon-remove' onclick="return confirm('Are you sure that u want to remove this book?');"></span></a></td>
            </tr>

         {% endfor %}
     </table>
</div>

{{ javascript_include("js/admin/books.js") }}