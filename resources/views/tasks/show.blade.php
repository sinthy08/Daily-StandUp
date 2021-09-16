<!doctype html>
<html lang="en">
<head>
    <title>DS | Show Task</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/style.css">

</head>
<body>
<a
    href="{{action([\App\Http\Controllers\TasksController::class, 'export'])}}"
    class="btn btn-dark style-add"
>
    Download </a>
<a href="/createtask" class="btn btn-dark btn-align">New Entry</a>

{{--    <form method="POST" action="logout">--}}
{{--        @csrf--}}
{{--        <input type="submit" class="btn btn-dark btn-align">Log out</a>--}}
{{--        <button type="submit" class="btn btn-dark btn-align">--}}
{{--                    Logout--}}
{{--        </button>--}}
{{--    </form>--}}

{{--    </div>--}}
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center" style="margin-top: -70px;">
                    <h2 class="heading-section">Daily Standup</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-wrap">
                        <table class="table">
                            <thead class="thead-dark">
                            <tr>
                                <th>ID no.</th>
                                <th>Date</th>
                                <th>User Name</th>
                                <th>Task Name</th>
                                <th>Yesterday Tasks</th>
                                <th>To Do</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($tasks as $task)
                                <tr class="alert" role="alert">
                                    <th scope="row">{{$task->id}}</th>
                                    <td>{{$task->created_at}}</td>
                                    <td>{{$task->member_name}}</td>
                                    <td>{{$task->name}}</td>
                                    <td>{{$task->yesterday}}</td>
                                    <td>{{$task->todo}}</td>
    {{--                                <td>--}}
    {{--                                    <a href="#" class="close" data-dismiss="alert" aria-label="Close">--}}
    {{--                                        <span aria-hidden="true"><i class="fa fa-close"></i></span>--}}
    {{--                                    </a>--}}
    {{--                                </td>--}}
                                    <td></td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
{{--</div>--}}
<script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/maintable.js"></script>

</body>
</html>
<style>
    .btn-align {
        align-items: right;
        margin-left: 90%;
        margin-top: -37px;
        float: right;
        margin-right: 10px;
    }
    .welcome {
        margin-left: 80%;
    }
    .style-add {
        margin-left: 92%;
        margin-top: 10px;
        float: right;
        margin-right: 10%;
    }
</style>

