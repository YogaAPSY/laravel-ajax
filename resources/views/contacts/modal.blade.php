<!-- The Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" data-backdrop="false">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Form Add Client</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="alert alert-danger print-error-msg" style="display:none">
                    <ul></ul>
                </div>
                <form action="#" method="post" id="addForm">

                    <div class="form-group">
                        <label for="">Name :</label>
                        <input type="text" name="name" id="name" class="form-control" required autocomplete="off">

                    </div>
                    <div class="form-group">
                        <label for="">City :</label>
                        <input type="text" name="city" id="city" class="form-control" required autocomplete="off">

                    </div>
                    <div class="form-group">
                        <label for="">Address :</label>
                        <textarea name="address" id="address" class="form-control" required autocomplete="off"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="">Phone Office :</label>
                        <input type="number" name="phone_office" class="form-control" id="phone_office" required autocomplete="off">

                    </div>

                    <div class="form-group">
                        <label for="">Phone Mobile :</label>
                        <input type="number" name="phone_mobile" class="form-control" id="phone_mobile" required autocomplete="off">
                    </div>

                    <div class="form-group">
                        <label for="">Pic :</label>
                        <input type="text" name="pic" id="pic" class="form-control" required autocomplete="off">
                    </div>

                    <div class="form-group">
                        <label for="">Section :</label>
                        <input type="text" name="section" id="section" class="form-control" required autocomplete="off">
                    </div>


                    <div class="form-group">
                        <label for="">Email :</label>
                        <input type="email" name="email" id="email" class="form-control" required autocomplete="off">
                    </div>


                    <div class="form-group">
                        <label for="">Retail :</label>
                        <select name="retail" id="retail" class="form-control js-example-basic-single">
                            <!-- <option value="" selected disabled>--Pilih Retail--</option> -->
                            <option value="retail">Retail</option>
                            <option value="corporate">Corporate</option>
                        </select>
                        <p style="color:red">Ini implementasi select2, tapi tampilan jadi berantakan.</p>
                    </div>


                    <div class="form-group">
                        <label for="">Status :</label>
                        <select name="active" id="active" class="form-control">
                            <option value="" selected disabled>--Pilih Status--</option>
                            <option value="active">Active</option>
                            <option value="deactive">Deactive</option>
                        </select>
                    </div>

                    <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button class="btn btn-info" name="submit" id="addContact" type="submit">Simpan</button>
            </div>

            </form>

        </div>
    </div>
</div>

<!-- The Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" data-backdrop="false">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Form Edit Client</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="alert alert-danger print-error-msg" style="display:none">
                    <ul></ul>
                </div>
                <form action="#" method="post" id="editForm">

                    <div class="form-group">
                        <label for="">Name :</label>
                        <input type="text" name="editname" id="editname" class="form-control" required autocomplete="off">

                    </div>
                    <div class="form-group">
                        <label for="">City :</label>
                        <input type="text" name="editcity" id="editcity" class="form-control" required autocomplete="off">

                    </div>
                    <div class="form-group">
                        <label for="">Address :</label>
                        <textarea name="editaddress" id="editaddress" class="form-control" required autocomplete="off"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="">Phone Office :</label>
                        <input type="number" name="editphone_office" class="form-control" id="editphone_office" required autocomplete="off">

                    </div>

                    <div class="form-group">
                        <label for="">Phone Mobile :</label>
                        <input type="number" name="editphone_mobile" class="form-control" id="editphone_mobile" required autocomplete="off">
                    </div>

                    <div class="form-group">
                        <label for="">Pic :</label>
                        <input type="text" name="editpic" id="editpic" class="form-control" required autocomplete="off">
                    </div>

                    <div class="form-group">
                        <label for="">Section :</label>
                        <input type="text" name="editsection" id="editsection" class="form-control" required autocomplete="off">
                    </div>


                    <div class="form-group">
                        <label for="">Email :</label>
                        <input type="email" name="editemail" id="editemail" class="form-control" required autocomplete="off">
                    </div>


                    <div class="form-group">
                        <label for="">Section :</label>
                        <select name="editretail" id="editretail" class="form-control">
                            <option value="" selected disabled>--Pilih Retail--</option>
                            <option value="retail">Retail</option>
                            <option value="corporate">Corporate</option>
                        </select>
                    </div>


                    <div class="form-group">
                        <label for="">Section :</label>
                        <select name="editactive" id="editactive" class="form-control">
                            <option value="" selected disabled>--Pilih Status--</option>
                            <option value="active">Active</option>
                            <option value="deactive">Deactive</option>
                        </select>
                    </div>
                    <!-- <input type="hidden" name="_method" id="method" value="patch"> -->
                    <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                    <input type="hidden" name="id" id="id">
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button class="btn btn-info" name="submit" id="editContact" type="submit">Simpan</button>
            </div>

            </form>

        </div>
    </div>
</div>


<!-- The Modal -->
<div class="modal fade showModal" id="showModal" tabindex="-1" role="dialog" data-backdrop="false">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Detail Client</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <h4>Name : <span id="nama1"></span></h4>
                <h4>City : <span id="city1"></span></h4>
                <h4>Address : <span id="address1"></span></h4>
                <h4>Phone Office : <span id="phone_office1"></span></h4>
                <h4>Phone Mobile : <span id="phone_mobile1"></span></h4>
                <h4>Pic : <span id="pic1"></span></h4>
                <h4>Section : <span id="section1"></span></h4>
                <h4>Email : <span id="email1"></span></h4>
                <h4>Retail : <span id="retail1"></span></h4>
                <h4>Active : <span id="active1"></span></h4>
                <h4>Created_at : <span id="created_at1"></span></h4>

            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="deleteModal">
    <div class="modal-dialog">
        <div class="modal-content modal-delete bg-danger">
            <div class="modal-header">
                <h4 class="modal-title">Danger Modal</h4>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>

                </button>
            </div>

            <div class="modal-body">

                <form action="#" method="post" id="deleteForm">
                    <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">

                    <input type="hidden" name="deleteId" id="deleteId">
                    <p>One fine body&hellip;</p>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-outline-light" data-dismiss="modal" id="cancelDelete">Close</button>
                <button type="submit" id="deleteContact" class="btn btn-outline-light">Delete</button>
            </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
