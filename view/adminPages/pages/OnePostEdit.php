<?php
$postM = new \Models\post();
$postData = $postM->getById($data["postId"]);
?>

<div class="content-wrapper adminBlogCont">
    <!-- Main content -->
    <section class="content col-12">
        <div class="row">
            <div class="col-md-12 file-input">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Logo</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="/file-upload"
                              class="dropzone"
                              id="my-awesome-dropzone"
                              parallelUploads = 1>
                            <input type="button" name = "confirm" value="submit changes"">
                            <label class="custom-file-upload">
                                <input type="file" id="inputName" class = "file-input-input" accept="image/png, image/gif, image/jpeg" class="form-control">
                                Upload new logo
                            </label>
                            Upload new logo
                        </form>
                        <script src="/assets/js/dropZone.js"></script>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <div class="col-md-6">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">General</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputName">Title</label>
                            <input type="text" id="inputName" class="form-control" value="<?=$postData["title"] ?>">
                        </div>
                        <div class="form-group">
                            <label for="inputDescription">Slogan</label>
                            <textarea id="inputDescription" class="form-control" rows="4"><?= $postData["slogan"]?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="inputClientCompany">Categories</label>
                            <div class="categories">
                                <div class="postId hidden"><?= $postData["id"] ?></div>
                                <div class="categories-active-categories">
                                <?php
                                $catM = new \Models\categories();
                                $catsData = $catM->getCategoryByPostId($postData["id"]);
                                foreach ($catsData as $key => $value)
                                {
                                    ?>
                                <button class="category-elem"><?= $value->category ?></button>
                                <?}
                                ?>
                                </div>
                                <button class="addNewCategoryBtn"> + </button>
                                <select class="categories-select hidden">

                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputProjectLeader">Tags</label>
                            <div class="tags">
                                <div class="tags-active-tags">
                                    <?php
                                    $tagM = new \Models\tags();
                                    $tagsData = $tagM->getByPostId($postData["id"]);
                                    foreach ($tagsData as $key => $value)
                                    {
                                        ?>
                                        <button class="tag-elem"><?= $value->tag ?></button>
                                    <?}
                                    ?>
                                </div>
                                <button class="addNewTagBtn">+</button>
                                <select class="tags-select hidden">

                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <div class="col-md-6">
                <div class="card card-secondary">
                    <div class="card-header">
                        <h3 class="card-title">Content</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <textarea id="summernote" class="main-content"> <?= $postData["content"] ?></textarea>
                        </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
                <div class="card card-info">

                <!-- /.card -->
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <a href="#" class="btn btn-secondary">Cancel</a>
                <input type="submit" value="Save Changes" class="btn btn-success float-right">
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<script src="/assets/js/blogComments.js"></script>
<script src="/assets/js/blogPost.js"></script>
<script src="/assets/js/postEdit.js"></script>

