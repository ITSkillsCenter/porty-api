<form class="form-horizontal" method="post" action="/services">
    @CSRF


    <div class="card-body">
        <div class="form-group row">

            <label for="inputEmail3" class="col-sm-2 col-form-label">Title</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="title" id="inputEmail3" placeholder="type title">

            </div>
            <label for="inputEmail3" class="col-sm-2 col-form-label">Description</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="description" id="inputEmail3" placeholder="author's name">

            </div>

        </div>


    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        <button type="submit" class="btn btn-info">Add Blog</button>
        <button type="submit" class="btn btn-default float-right"><a href="/dashboard">Cancel</a></button>
    </div>
    <!-- /.card-footer -->
</form>
