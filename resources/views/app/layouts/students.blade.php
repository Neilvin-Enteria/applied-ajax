<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">

</head>
<body>
    
    @include('app.students.modals.create')

    <script src="{{asset('js/app.js')}}"></script>

    <script>
        $(function() {

            $("#addStudentForm").submit(function(e) {
            e.preventDefault();
            e.stopPropagation();
            const fd = new FormData(this);

            $.ajax({
                url: '{{ route('registerStudent') }}',
                method: 'post',
                data: fd,
                cache: false,
                contentType: false,
                processData: false,
                dataType: 'json',
                success: function(response) {
                    if (response.status == 200) {
                    Swal.fire(
                        'Added!',
                        'Student Added',
                        'success'
                    )}
            });
            });
        });
    </script>

</body>
</html>