<!doctype html>
<html lang="en">
<head>
    <title>Create Task</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/style.css">

</head>
<body>
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
                <h2 class="heading-section">Daily Standup</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="table-wrap">

                    <div id="date" style="text-align: right"></div>
                    <form method="POST" action="task_submit">
                        @csrf
                        <table class="table">
                            <thead class="thead-dark">
                            <tr>
                                <th>Member Name</th>
                                <th>Task Name</th>
                                <th>Yesterday Tasks</th>
                                <th>To Do</th>
                            </tr>
                            </thead>

                            <tbody>
                            <tr class="alert" role="alert">
                                <td>
                                    <div class="input-group">
                                        <input
                                            class="input--style-4"
                                            type="text"
                                            name="member_name"
                                            id="member_name"
                                            placeholder="Member Name"
                                        >
                                    </div>
                                </td>
                                <td>
                                    <div class="input-group">
                                        <input
                                            class="input--style-4"
                                            type="text"
                                            name="name"
                                            id="name"
                                            placeholder="Task Name"
                                        >
                                    </div>
                                </td>
                                <td>
                                    <div class="input-group">
                                        <input
                                            class="input--style-4"
                                            type="text"
                                            name="yesterday"
                                            id="yesterday"
                                            placeholder="Yesterday Tasks">
                                    </div>
                                </td>
                                <td>
                                    <div class="input-group">
                                        <input
                                            class="input--style-4"
                                            type="text"
                                            name="todo"
                                            id="todo"
                                            placeholder="To Do">
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                            <tfoot>
                            <tr class="alert" role="alert">
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <button type="submit" class="btn btn-dark" style="margin-left: 100px;">
                                        Submit
                                    </button>
                                </td>
                            </tr>
                            </tfoot>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/maintable.js"></script>
<script>
    n =  new Date();
    y = n.getFullYear();
    m = n.getMonth() + 1;
    d = n.getDate();
    document.getElementById("date").innerHTML = m + "/" + d + "/" + y;
</script>
</body>
</html>





