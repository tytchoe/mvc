<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Thêm mới Banner
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Forms</a></li>
            <li class="active">General Elements</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Thêm banner</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" method="post" action="">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputTilte">Tiêu đề</label>
                                <input required id="title" name="tilte" type="text" class="form-control"  placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputImage">Chọn ảnh</label>
                                <input id="image" name="image" type="file" id="image">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUrl">Liên kết</label>
                                <input type="text" class="form-control" id="url" name="url" placeholder="">
                            </div>
                            <div class="form-group">
                                <label>Chọn Target</label>
                                <select class="form-control">
                                    <option value="_blank">blank</option>
                                    <option value="_self"></option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Mô tả</label>
                                <textarea name="description" id="editor1" rows="10" cols="80" class="form-control" placeholder=""></textarea>
                            </div>
                            <div class="form-group">
                                <label>Loại</label>
                                <select class="form-control">
                                    <option value="1">Banner trang chủ</option>
                                    <option value="2">Banner trái</option>
                                    <option value="2">Banner phải</option>
                                    <option value="2">Banner trên</option>
                                    <option value="2">Banner dưới</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUrl">Vị trí</label>
                                <input min="0" type="number" class="form-control" id="position" name="position" placeholder="">
                            </div>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Trạng thái
                                </label>
                            </div>
                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
                <!-- /.box -->
            </div>
            <!--/.col (left) -->
            <!-- /.row -->
    </section>
    <!-- /.content -->
</div>