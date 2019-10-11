<div class="container">
  <div class="row mt-3">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h2>Form Edit Data Blog</h2>
        </div>
        <div class="card-body">
        <?php if(validation_errors()): ?>
          <div class="alert alert-danger" role="alert">
            <?= validation_errors() ?>
          </div>
        <?php endif; ?>
          <form action="" method="post">
          <input type="hidden" name="id" value="<?= $blog['id'] ;?>">
            <h1>ID</h1>
            <h1><?= $blog['id'] ?></h1>
            <div class="form-group">
              <label for="title">TITLE</label>
              <input type="text" class="form-control" id="title" name="title" value="<?= $blog['title'] ;?>">
            </div>
              <label for="desc">DESC</label>
            <div class="form-group">
              <textarea name="desc" id="desc" cols="149" rows="10"><?= $blog['desc'] ?></textarea>
            </div>
            <div class="form-group">
              <label for="date">DATE</label>
              <input type="date" class="form-control" id="date" name="date" value="<?= $blog['date'] ;?>">
            </div>
            <div class="form-group">
              <label for="author">AUTHOR</label>
              <input type="text" class="form-control" id="author" name="author" value="<?= $blog['author'] ;?>">
            </div>
            <div class="form-group">
              <label for="view">VIEW</label>
              <input type="number" class="form-control" id="view" name="view" value="<?= $blog['view'] ;?>">
            </div>
            <button type="submit" name="submit" class="btn btn-success float-right">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>