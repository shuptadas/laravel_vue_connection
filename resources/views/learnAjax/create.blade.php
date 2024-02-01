<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="container" id="mainPage">
        <div class="row justify-content-center m-4">
            <div class="col-md-6">
                <form id='ajaxForm' onsubmit="return false;">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" >
                    </div>
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" class="form-control" id="username" name="username" >
                    </div>
                    <div class="form-group">
                        <label for="age">Age:</label>
                        <input type="text" class="form-control" id="age" name="age" >
                    </div>

                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-success btn-block" id='submitBtn'>Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    $(document).ready(function(){

        // $.ajaxSetup({
        //     headers: {
        //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //     }
        // });

        // alert('ok');
        $('#submitBtn').html('Save');
        // var form = $('ajaxForm')[0];
        $('#submitBtn').click(function(){
            // var formData = new FormData(form);
            // var formData = $('#ajaxForm').serialize();
            // console.log(formData)



        // //     // console.log('clicked');
            var name = $('#name').val();
            var username = $('#username').val();
            var age = $('#age').val();
            // console.log(name)

            $.ajax({
                url: '{{ route("store")}}',
                method: 'POST',
                data: {
                    name: name, username: username, age:age
                },
                success: function(response){
                    console.log(response)
                },
                error: function(error){
                    console.log(error)
                }
            });



        });

        // $("#submitBtn").submit(function(e){
        //     // e.preventdefault();

        //     var name = $("#name").val();
        //     var username = $("#username").val();

        //     var age = $("#age").val();

        //         $.ajax({
        //         url: '{{ route("store")}}',
        //         method: 'POST',
        //         data: {
        //             name: name, username: username, age:age
        //         },
        //         success: function(response){
        //             console.log(response)
        //         },
        //         error: function(error){
        //             console.log(error)
        //         }
        //     });
        // })

        });
</script>
</body>
</html>