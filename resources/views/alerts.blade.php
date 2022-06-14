@if (session('success'))
    <script type="text/javascript">
        $(document).ready(function() {
            Swal.fire({
                position: "center",
                icon: 'success',
                title: "{{ session('success') }}",
                showConfirmButton: true,
                timer: 6000
            })
        });
    </script>
@endif


@if (session('success2'))
    <script type="text/javascript">
        $(document).ready(function() {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-right',
                iconColor: 'white',
                customClass: {
                    popup: 'colored-toast'
                },
                showConfirmButton: false,
                timer: 1500,
                timerProgressBar: true
            })
            await Toast.fire({
                icon: 'success',
                title: 'Success'
            })
        });
    </script>
@endif


@if (session('error'))
    <script type="text/javascript">
        $(document).ready(function() {
            Swal.fire({
                position: "center",
                icon: 'error',
                type: "error",
                title: "{{ session('error') }}",
                showConfirmButton: true,
                timer: 6000,
            })
        });
    </script>
@endif
