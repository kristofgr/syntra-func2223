<?php
?>
<html>

<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <style>
    .gradient-custom-2 {
      background: #7e40f6;
      background: -webkit-linear-gradient(to right,
          rgba(126, 64, 246, 1),
          rgba(80, 139, 252, 1));
      background: linear-gradient(to right,
          rgba(126, 64, 246, 1),
          rgba(80, 139, 252, 1));
    }

    .mask-custom {
      background: rgba(24, 24, 16, 0.2);
      border-radius: 2em 2em 0 0;
      backdrop-filter: blur(25px);
      background-clip: padding-box;
      box-shadow: 10px 10px 10px rgba(46, 54, 68, 0.03);
    }

    .mask-custom-2 {
      background: rgba(255, 255, 255, 0.5);
      border-radius: 0 0 2em 2em;
    }
  </style>
</head>

<body>

  <section class="vh-100 gradient-custom-2">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-12 col-xl-10">

          <div class="card mask-custom">
            <div class="card-body p-4 text-white">

              <div class="text-center pt-3 pb-2">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-todo-list/check1.webp" alt="Check" width="60">
                <h2 class="my-4">Task List</h2>
              </div>

              <table class="table text-white mb-0">
                <thead>
                  <tr>
                    <th scope="col">Taak</th>
                    <th scope="col">Datum</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>

                  <tr class="fw-normal">
                    <td class="align-middle">
                      <span>naam van de taak</span>
                    </td>
                    <td class="align-middle">
                      <span>19 Dec, 10u00</span>
                    </td>
                    <td class="align-middle">
                      <button type="button" class="btn btn-warning">Mark as done</button>
                    </td>
                  </tr>

                </tbody>
              </table>


            </div>
          </div>


          <div class="card mask-custom mask-custom-2">
            <div class="card-body p-4 text-white">
              <div class="text-center pt-3 pb-2">
                <form method="post" action="index.php">
                  <div class="mb-3">
                    <input type="text" class="form-control" id="newtask" name="newtask" value="" placeholder="Add new task">
                  </div>
                </form>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

</body>

</html>