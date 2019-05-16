<h2><?= $title ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open_multipart('posts/create'); ?>
  
    <div class="form-group">
      <label>Title</label>
      <input type="text" class="form-control" name="title" placeholder="Add Title">
    </div>
    <div class="form-group">
      <label>Body</label>
      <textarea class="form-control" id="editor1" name="body" placeholder="Add Body" rows="3"></textarea>
    </div>  
    <div class="form-group">
      <label>Category</label>
      <select class="form-control" name="category_id" >
          <?php foreach ($categories as $category): ?>
          <option value="<?php echo $category['id'] ?>"><?php echo $category['name'] ?></option>
          <?php endforeach; ?>
          
      </select>
    </div> 
    <div class="form-group">
      <label>Upload Image</label>
      <input type="file" name="userfile" size="20"/>
    </div> 
    <button type="submit" class="btn btn-primary">Submit</button>
  
  </form>
