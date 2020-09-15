@Push('js')

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.28.4/dist/sweetalert2.all.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

<script>
    $(document).on("click", "#detailModal", function() {
        console.log("asdasdasdasddas")
        var name = $(this).data('name');
        var city = $(this).data('city');
        var address = $(this).data('address');
        var phone_office = $(this).data('phone_office');
        var phone_mobile = $(this).data('phone_mobile');
        var pic = $(this).data('pic');
        var section = $(this).data('section');
        var email = $(this).data('email');
        var retail = $(this).data('retail');
        var active = $(this).data('active');
        var created_at = $(this).data('created_at');

        var myid = $(this).data('id');

        $(".modal-body #nama1").text(name);
        $(".modal-body #city1").text(city);
        $(".modal-body #address1").text(address);
        $(".modal-body #phone_office1").text(phone_office);
        $(".modal-body #phone_mobile1").text(phone_mobile);
        $(".modal-body #pic1").text(pic);
        $(".modal-body #section1").text(section);
        $(".modal-body #email1").text(email);
        $(".modal-body #retail1").text(retail);
        $(".modal-body #active1").text(active);
        $(".modal-body #created_at1").text(created_at);
        $('#showModal').modal('show');
    });

    $(document).on("click", "#editBtn", function() {

        var name = $(this).data('name');
        var city = $(this).data('city');
        var address = $(this).data('address');
        var phone_office = $(this).data('phone_office');
        var phone_mobile = $(this).data('phone_mobile');
        var pic = $(this).data('pic');
        var section = $(this).data('section');
        var email = $(this).data('email');
        var retail = $(this).data('retail');
        var active = $(this).data('active');
        var created_at = $(this).data('created_at');

        var myid = $(this).data('id');

        // console.log(email);

        $(".modal-body #editname").val(name);
        $(".modal-body #editcity").val(city);
        $(".modal-body #editaddress").val(address);
        $(".modal-body #editphone_office").val(phone_office);
        $(".modal-body #editphone_mobile").val(phone_mobile);
        $(".modal-body #editpic").val(pic);
        $(".modal-body #editsection").val(section);
        $(".modal-body #editemail").val(email);
        $(".modal-body #editretail").val(retail);
        $(".modal-body #editactive").val(active);
        $(".modal-body #editcreated_at").val(created_at);

        $(".modal-body #id").val(myid);
        $('#editModal').modal('show');
    });


    $(document).on("click", "#deleteBtn", function() {

        var myid = $(this).data('id');
        console.log(myid)
        $(".modal-body #deleteId").val(myid);
        $('#deleteModal').modal('show');
    });



    $(function() {
        $('#users-table').DataTable({

            processing: true,
            serverSide: true,

            ajax: '{{ route("contact.index") }}',
            columns: [{
                    data: 'id',
                    name: 'no'
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'city',
                    name: 'city'
                },
                {
                    data: 'phone_office',
                    name: 'phone_office',

                },

                {
                    data: 'section',
                    name: 'section'
                },
                {
                    data: 'email',
                    name: 'email',

                },
                {
                    data: 'created_at',
                    name: 'created_at'
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false
                },
            ]
        });
    })




    $(function() {
        $('#addForm').on('submit', function(e) {
            e.preventDefault();
            var name = $('input[name=name]').val();
            var gender = $('input[name=gender]').val();
            var phone = $('input[name=phone]').val();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: 'POST',
                url: '{{ route("contact.store")}}',
                // dataType: JSON,
                data: $('#addForm').serialize(),

                success: function(response) {
                    if (response.success) {

                        console.log(response)
                        $('#body-table').prepend("<tr>" +
                            "<td>" + response.data.id + "</td>" +
                            "<td>" + response.data.name + "</td>" +
                            "<td>" + response.data.city + "</td>" +
                            "<td>" + response.data.phone_office + "</td>" +
                            "<td>" + response.data.section + "</td>" +
                            "<td>" + response.data.email + "</td>" +
                            "<td>" + response.data.created_at + "</td>" +
                            "<td><form onsubmit='return confirm('Delete this contact permanently?')' action='{{route('contact.destroy', [" + response.data.id + "])}} method='POST'>" +
                            "<button type='button' class='btn btn-success btn-sm' data-id='" + response.data.id + "' data-name='" + response.data.name + "' data-city='" + response.data.city + "' data-phone_office='" + response.data.phone_office + "' data-phone_mobile='" + response.data.phone_mobile + "' data-pic='" + response.data.pic + "' data-section='" + response.data.section + "' data-email='" + response.data.email + "' data-retail='" + response.data.retail + "' data-active='" + response.data.active + "' data-created_at='" + response.data.created_at + "' id='detailModal'> <i class='fas fa-eye'> </i></button>&nbsp" +
                            "<button type='button' class='btn btn-info btn-sm' data-id='" + response.data.id + "' data-name='" + response.data.name + "' data-city='" + response.data.city + "' data-phone_office='" + response.data.phone_office + "' data-phone_mobile='" + response.data.phone_mobile + "' data-pic='" + response.data.pic + "' data-section='" + response.data.section + "' data-email='" + response.data.email + "' data-retail='" + response.data.retail + "' data-active='" + response.data.active + "' data-created_at='" + response.data.created_at + "' id='editBtn'> <i class='fas fa-edit'> </i></button>&nbsp" +
                            "<button type='button' class='btn btn-danger btn-sm'  data-id='" + response.data.id + "' id='deleteBtn'> <i class='fas fa-trash'> </i></button> </form>" +
                            "</td>" +
                            "</tr>"
                        );
                        // alert("Berhasil")



                        swal({
                            title: "BERHASIL !!!",
                            text: "Berhasil input",
                            showConfirmButton: true,
                            type: 'success'
                        });

                        $('#myModal').modal('hide');
                        // $(document.body).removeClass('modal-open');
                        // $('.modal-backdrop').hide();

                    } else {

                        console.log(response.data)
                        $(".print-error-msg").find("ul").html('');
                        $(".print-error-msg").css('display', 'block');
                        $.each(response.data, function(key, value) {
                            $(".print-error-msg").find("ul").append('<li>' + value + '</li>');
                        });
                        swal({
                            title: "GAGAL !!!",
                            text: "Ada inputan yang salah",
                            showConfirmButton: true,
                            type: 'error'
                        });

                    }

                },
                error: function(error) {
                    console.log(error.data)
                    swal({
                        title: "GAGAL !!!",
                        text: error,
                        showConfirmButton: true,
                        type: 'error'
                    });
                }

            })


            $("#myModal").on('hide.bs.modal', function(event) {
                $('#name').val('');
                $('#city').val('');
                $('#address').val('');
                $('#phone_office').val('');
                $('#phone_mobile').val('');
                $('#pic').val('');
                $('#section').val('');
                $('#email').val('');
                $('#retail').val('');
                $('#active').val('');
                $(".print-error-msg").find("ul").html('');
                $(".print-error-msg").css('display', 'none');

            });

            // $('#myModal').modal('hide');
            // $('body').addClass('modal-open');
            // $('#myModal').appendTo("body").modal('show');

        });

    });

    $(function() {
        $('#editForm').on('submit', function(e) {
            e.preventDefault();
            var name = $('input[name=editname]').val();
            var gender = $('input[name=editgender]').val();
            var phone = $('input[name=editphone]').val();
            // var cloned = $('.modal-backdrop').clone();
            var id = $('input[name=id]').val();
            url = "contact/" + id;

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: 'PATCH',
                url: url,
                // dataType: JSON,
                data: $('#editForm').serialize(),
                success: function(response) {

                    if (response.success) {
                        console.log(response.data)

                        $('#users-table').DataTable().ajax.reload();
                        swal({
                            title: "BERHASIL !!!",
                            text: "Berhasil diedit",
                            showConfirmButton: true,
                            type: 'success'
                        });

                        $('#editModal').modal('hide');
                        // $(document.body).removeClass('modal-open');
                        // $('.modal-backdrop').hide();
                    } else {

                        console.log(response.data)
                        $(".print-error-msg").find("ul").html('');
                        $(".print-error-msg").css('display', 'block');
                        $.each(response.data, function(key, value) {
                            $(".print-error-msg").find("ul").append('<li>' + value + '</li>');
                        });
                        swal({
                            title: "GAGAL !!!",
                            text: "Ada inputan yang salah",
                            showConfirmButton: true,
                            type: 'error'
                        });

                    }

                },
                error: function(error) {
                    console.log(error)
                    swal({
                        title: "GAGAL !!!",
                        text: error,
                        showConfirmButton: true,
                        type: 'error'
                    });
                }

            })
            $("#editModal").on('hide.bs.modal', function(event) {

                $(".print-error-msg").find("ul").html('');
                $(".print-error-msg").css('display', 'none');

            });

        });

    });

    $("#deleteForm").submit(function(e) {
        e.preventDefault();
        var id = $('input[name=deleteId]').val();
        console.log(id)
        var method = $('input[name=_method]').val();
        var token = $("meta[name='csrf-token']").attr("content");
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: "contact/" + id,
            type: 'delete',
            data: $('#deleteForm').serialize(),
            beforeSend: function() {
                $('#deleteContact').html('<div class="d-flex align-items-center">' +
                    '<strong>Proses Hapus, Jangan Tutup Halaman Ini!!!</strong>' +
                    '<div class="spinner-border ml-auto" role="status" aria-hidden="true"></div>' +
                    '</div>');
                $('#cancelDelete').attr('disabled', true);
            },
            success: function() {
                console.log("ADsasd");
                $("#delete-form").trigger('reset');
                $('#cancelDelete').trigger('click');
                $('#cancelDelete').removeAttr('disabled');
                $('.modal-delete').removeClass("bg-danger").addClass("bg-success");
                $('#deleteContact').attr("disabled", true).html('<div class="d-flex align-items-center">' +
                    '<strong>Proses Hapus, Berhasil <i class="fa fa-check-circle"></i> </strong>' +
                    '<div class="spinner-border ml-auto" role="status" aria-hidden="true"></div>' +
                    '</div>');

            },
            error: function() {
                console.log(error)
                swal({
                    title: "GAGAL !!!",
                    text: error,
                    showConfirmButton: true,
                    type: 'error'
                });
            }
        });

        $("#deleteModal").on('hide.bs.modal', function(event) {
            swal({
                title: "BERHASIL !!!",
                text: "Data id = " + id + " Berhasil dihapus",
                showConfirmButton: true,
                type: 'success'
            });
            $('#users-table').DataTable().ajax.reload();

            $('.modal-delete').removeClass("bg-success").addClass("bg-danger");
            $('#deleteContact').removeAttr("disabled").text("Delete");
            $('.d-flex').remove();
            $('.spinner').remove();
        });


    });
</script>

<script>
    $('#retail').select2({
        dropdownParent: $('#myModal')
    });
    $(document).ready(function() {
        $('.js-example-basic-single').select2();
    });
</script>


@endpush
