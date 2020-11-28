    <h4><a href="<?php echo site_url('pages/show'); ?>">Records Inserted Till now</a></h4>
    
    <form  method="POST" action="pages/insert" enctype="multipart/form-data">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" placeholder="title" required>
            
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" class="form-control" name="description" placeholder="description" required>
        </div>
        <div class="form-group">
            <label for="body">Body</label>
             <!-- <textarea rows="4" id="body" name="body" class="from-control" cols="50" placeholder="write something ..."></textarea>  -->
            <input style="font-size:20px;" name="body" placeholder="write something.." class="form-control" type="text"/>


        </div>
        <div class="form-group">
            <label for="img">Select image:</label>
            <input type="file" id="img" class="form-control" name="img" accept="image/*">
        </div>
        <input type="submit" name="insert" value="Insert" class="btn btn-primary" />
    </form>
</div>

