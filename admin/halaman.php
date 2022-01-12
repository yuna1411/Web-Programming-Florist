 <?php include("my_header.php")?>       
        <h1>Admin Pages</h1>
        <p>
            <a href="halaman_input.php">
                <input type="button" class="btn btn-primary" value="Add New Page"/>
            </a>
        </p>
        <table class="table table-stripped">
            <thead>
                <tr>
                    <th class="col-1">#</th>
                    <th>Title</th>
                    <th>Sub Title</th>
                    <th>Content</th>
                    <th class="col-2">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Lorem ipsum dolor sit. </td>
                    <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</td>
                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum necessitatibus dignissimos ullam mollitia, quos eaque unde ipsa illo adipisci explicabo.</td>
                    <td>
                        <span class="badge bg-warning text-dark">Edit</span>
                        <span class="badge bg-danger">Delete</span>
                    </td>
                </tr>
            </tbody>
        </table>
        <?php include("my_footer.php")?> 
    