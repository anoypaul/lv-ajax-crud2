<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    

    <div class="container">
        <div class="mt-3 mb-3">
            <h6 class="text-center">Multiple Relational Dropdown Crud Using AJAX</h6>
        </div>

        <div class="row">
            <div class="col-9">
                <div class="p-1 border">
                    <div class="card-header">
                        <h6 class="text-center">This is Information Table</h6>
                    </div>
                    {{-- <hr> --}}
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
                            {{-- @foreach ($student as $value)
                                <tr>
                                    <th>
                                        <a href="{{url('/edit/'.$value->students_id)}}">Edit</a>
                                        <a href="{{url('/delete/'.$value->students_id)}}">Delete</a>
                                    </th>
                                    <th>{{$value->students_id}}</th>
                                    <td>{{$value->students_name}}</td>
                                    <td>{{$value->students_class}}</td>
                                    <td>{{$value->students_email}}</td>
                                </tr>
                            @endforeach --}}
                        </tbody>
                      </table>
                </div>
            </div>
            <div class="col-3">
                <div class="">
                    <div class="card">
                        <div class="card-header">
                          <span id="addInfo">Add New Information</span>
                          <span id="updateInfo">Update Information</span>
                        </div>
                        <div class="card-body">
                            {{-- <form action="{{url('/create')}}" method="POST">
                            @csrf --}}
                            <div class="form-group">
                            <label for="Name">Enter Customer Name *</label>
                            <input type="text" class="form-control" id="customers_name" placeholder="Enter Name" >
                            </div>
                            <div class="form-group">
                            <label for="Email">Enter Email*</label>
                            <input type="email" class="form-control" id="customers_email" placeholder="Enter Email">
                            </div>
                            <div class="form-group">
                            <label for="Number">Enter Contact Number *</label>
                            <input type="number" class="form-control" id="customers_phone" placeholder="Enter Number">
                            </div>
                            <div class="form-group">
                                <label for="Country">Enter Country</label><br>
                                <select name="country" id="country" style="width: 100%">
                                    <option value="">Select Country</option>
                                    @foreach ($country as $value)
                                        <option value="{{$value->countries_id}}">{{$value->countries_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                            <label for="state">Enter State</label><br>
                                <select name="state" id="state" style="width: 100%">
                                    <option value="">Select state</option>
                                </select>
                            </div>
                            <div class="form-group">
                            <label for="City">Enter City</label><br>
                                <select name="city" id="city" style="width: 100%">
                                    <option value="">Select city</option>
                                </select>
                            </div>
                            <input type="hidden" id="customers_id">
                            <button type="submit" class="btn btn-primary" id="addButton" onclick="addData()">Submit</button>
                            <button type="submit" class="btn btn-primary" id="UpdateButton" onclick="updateData()">Update</button>
                            {{-- </form> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.19/dist/sweetalert2.all.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <script>

        $.ajaxSetup({
          headers:{
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        })
        $("#addInfo").show();
        $("#addButton").show();
        $("#updateInfo").hide();
        $("#UpdateButton").hide();


        function clearData(){
            let customers_name = $('#customers_name').val("");
            let customers_email = $('#customers_email').val("");
            let customers_phone = $('#customers_phone').val("");
            let customer_details_country = $('#country').val("");
            let customer_details_state = $('#state').val("");
            let customer_details_city = $('#city').val("");
        }


        $(document).ready(function(){
            $('#country').change(function(){
                let country = jQuery(this).val();
                jQuery('#city').html('<option value="">Select state</option>');
                jQuery.ajax({
                    url: '/getState',
                    type: 'post',
                    data: 'country='+country+'&_token={{ csrf_token() }}',
                    success: function(result){
                        jQuery('#state').html(result);
                    }
                })
            })
        })

        $(document).ready(function(){
            $('#state').change(function(){
                let state = jQuery(this).val();
                jQuery.ajax({
                    url: '/getCity',
                    type: 'post',
                    data: 'state='+state+'&_token={{ csrf_token() }}',
                    success: function(result){
                        jQuery('#city').html(result);
                    }
                })
            })
        })

        // $(document).ready(function(){
            function addData(){
                let customers_name = $('#customers_name').val();
                let customers_email = $('#customers_email').val();
                let customers_phone = $('#customers_phone').val();
                let customer_details_country = $('#country').val();
                let customer_details_state = $('#state').val();
                let customer_details_city = $('#city').val();
                $.ajax({
                    type: "post",
                    dataType: "json",
                    url: "{{url('/createAj')}}",
                    data: {customers_name:customers_name, customers_email:customers_email, customers_phone:customers_phone, customer_details_country:customer_details_country, customer_details_state:customer_details_state, customer_details_city:customer_details_city},
                    success: function(response){
                        allData();
                        clearData();
                        
                        const Msg = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            icon: 'success',
                            showConfirmButton: false,
                            timer: 2000
                        })
                        Msg.fire({
                            type: 'success',
                            title: 'Data Insert Successfully',
                        })

                    }
                });
            }
        // })

        function allData(){
            $.ajax({
                type:"get",
                dataType: "json",
                url: "{{url('/readAj')}}",
                success: function(response){
                    let data = "";
                    $.each(response, function(key, value){
                        // console.log(value);
                        data = data + "<tr>"
                            data = data + "<td>"
                                data = data + "<button class='btn btn-primary mr-2' onclick='editData("+ value.customers_id +")'>Edit</button>"
                                data = data + "<button class='btn btn-danger' onclick='deleteData("+ value.customers_id +")'>Delete</button>"
                            data = data + "</td>"
                            data = data + "<td>"+ value.customers_id + "</td>"
                            data = data + "<td>"+ value.customers_name + "</td>"
                            data = data + "<td>"+ value.customers_email + "</td>"
                            data = data + "<td>"+ value.customers_phone + "</td>"
                            data = data + "<td>"+ value.countries_name + "</td>"
                            data = data + "<td>"+ value.states_name + "</td>"
                            data = data + "<td>"+ value.cities_name + "</td>"
                        data = data + "</tr>"
                    });
                    $("tbody").html(data);
                }
            })
        }
        allData();

        function editData(customers_id){
            $.ajax({
                type: "GET",
                dataType: "json",
                url: "/editAj/"+customers_id,
                success: function(response){

                    $("#addInfo").hide();
                    $("#addButton").hide();
                    $("#updateInfo").show();
                    $("#UpdateButton").show();
                    

                    $('#customers_id').val(response.customers_id);
                    $('#customers_name').val(response.customers_name);
                    $('#customers_email').val(response.customers_email);
                    $('#customers_phone').val(response.customers_phone);
                    $('#country').val(response.customer_details_country);
                    $('#state').val(response.customer_details_state);
                    $('#city').val(response.customer_details_city);
                    console.log(response);
                }
            })
        }

        function deleteData(customers_id){
            $.ajax({
                type: "GET",
                url: "/deleteAj/"+customers_id,
                success: function(response){
                    allData();
                }
            })
        }


        function updateData(){
            
                let customers_id = $('#customers_id').val();
                let customers_name = $('#customers_name').val();
                let customers_email = $('#customers_email').val();
                let customers_phone = $('#customers_phone').val();
                let customer_details_country = $('#country').val();
                let customer_details_state = $('#state').val();
                let customer_details_city = $('#city').val();
                $.ajax({
                    type: "post",
                    dataType: "json",
                    url: "/updateAj/"+customers_id,
                    data: {customers_name:customers_name, customers_email:customers_email, customers_phone:customers_phone, customer_details_country:customer_details_country, customer_details_state:customer_details_state, customer_details_city:customer_details_city},
                    success: function(response){
                        allData();
                        clearData();
                        $("#addInfo").show();
                        $("#addButton").show();
                        $("#updateInfo").hide();
                        $("#UpdateButton").hide();
                        console.log("successfully Update Successfully");
                    }
                });
            }


    </script>


  </body>
</html>