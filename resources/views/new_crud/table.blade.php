<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    

    <div class="container">
        <div class="mt-2">
        </div>
        <div class="mb-2">
            <h6 class="text-center">This is Crud</h6>
        </div>

        <div class="row">
            <div class="col-9">
                <div class="p-3 border">
                    <h6 class="text-center">This is Information Table</h6>
                    <hr>
                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th scope="col">Action</th>
                            <th scope="col">id</th>
                            <th scope="col">Customer Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">number</th>
                            <th scope="col">country</th>
                            <th scope="col">state</th>
                            <th scope="col">city</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $value)
                                <tr>
                                    <th>
                                        <a href="">Edit</a>
                                        <a href="">Delete</a>
                                    </th>
                                    <th>{{$value->customers_id}}</th>
                                    <th>{{$value->customers_name}}</th>
                                    <td>{{$value->customers_email}}</td>
                                    <td>{{$value->customers_phone}}</td>
                                    <td>{{$value->countries_name}}</td>
                                    <td>{{$value->states_name}}</td>
                                    <td>{{$value->cities_name}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



  </body>
</html>