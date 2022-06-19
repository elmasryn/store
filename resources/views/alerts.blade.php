@if (session('success'))
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
                timer: 4000,
                timerProgressBar: true,
                showCloseButton: true,
            })
            Toast.fire({
                icon: 'success',
                title: "{{ session('success') }}",
            })

        });
    </script>
@endif


@if (session('success2'))
    <script type="text/javascript">
        $(document).ready(function() {
            Swal.fire({
                position: "center",
                icon: 'success',
                title: "{{ session('success2') }}",
                showConfirmButton: true,
                timer: 4000
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
                timer: 4000,
            })
        });
    </script>
@endif
