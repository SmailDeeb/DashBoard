
{{-- @section('scripts')
    {{-- <script>
        window.onload = function () {
            $('.delete-admin').on('click', function () {
                console.log($(this).data('admin'));
            });
        }
    </script> --}}
    <script>
        window.onload = function() {
            $(document).on('click', '.admin-confirm-delete', function(e) {
                e.preventDefault();
                // let search_for = $(this).val();
                console.log($(this).data('admin'));
                let adminObj = $(this).data('admin');
                console.log('obj: ', adminObj);

                // $.ajax({
                //     type: 'DELETE',
                //     url: "{{ route('admins.destroy', " + adminObj + ") }}",
                //     data: {
                //         '_token': "{{ csrf_token() }}",
                //         // 'admin': adminObj,
                //     },
                //     beforeSend: function() {
                //         $('#deleteAdmin_' + adminObj.id).html(
                //             '<i class="fa fa-spinner fa-pulse fa-1x fa-fw"></i><span class="sr-only">Loading...</span>'
                //             );
                //         $('#deleteAdmin_' + adminObj.id).prop('disabled', true);
                //         $('#deleteAdmin_' + adminObj.id).css('cursor', 'not-allowed');
                //     },
                //     success: function(data) {
                //         if (data.status == true) {
                //             $('#deleteAdmin_' + adminObj.id).html(
                //                 '<i class="fa fa-trash"></i>'
                //             );
                //             $('#deleteAdmin_' + adminObj.id).prop('disabled', false);
                //             $('#deleteAdmin_' + adminObj.id).css('cursor', 'normal');

                            
                //         }
                //     },
                //     error: function(reject) {
                //         // $.each(response.errors, function (key, val) {
                //         //     $("#" + key + "_error").text(val[0]);
                //         // });
                //         $('#deleteAdmin_' + adminObj.id).html(
                //             '<i class="fa fa-trash"></i>'
                //         );
                //         $('#deleteAdmin_' + adminObj.id).prop('disabled', false);
                //         $('#deleteAdmin_' + adminObj.id).css('cursor', 'normal');
                //     },
                // });
            });
        }
    </script>
@endsection --}}

<div class="form-group mb-3">
    <label for="usernameOrEmail">Username or Email</label>
    <input type="text" class="form-control" id="usernameOrEmail" aria-describedby="emailHelp"
        placeholder="Enter username or email" name="username_or_email" />
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
</div>
<div class="form-group mb-3">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" placeholder="Password" name="password" />
</div>
{{-- <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
</div> --}}
<button type="submit" class="btn btn-primary d-block w-100">Login</button>