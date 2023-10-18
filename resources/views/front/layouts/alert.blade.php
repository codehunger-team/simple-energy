@if ($message = Session::get('success'))
    <script>
        Swal.fire({
            title: 'Success!',
            text: '{{ $message }}',
            icon: 'success',
            timer: 3000,
        });
    </script>
@endif

@if ($message = Session::get('error'))
    <script>
        Swal.fire({
            title: 'Error!',
            text: '{{ $message }}',
            icon: 'error',
        });
    </script>
@endif
