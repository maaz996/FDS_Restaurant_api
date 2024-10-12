@include('layouts.header')
<div class="wrapper">

  <!-- Navbar -->
 
  <!-- /.navbar -->
  <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
        <link rel="stylesheet" href="style.css" />
        <link
            rel="stylesheet"
            href="https://fonts.googleapis.com/icon?family=Material+Icons"
        />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        />
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
            crossorigin="anonymous"
        />
        <style>
            .logo img {
                width: 60px; /* Adjust the width as needed */
                height: auto; /* Maintain aspect ratio */
                margin-right: 10px;
            }

            .logo {
                width: 89px;
                height: 61px;
                display: flex;
                flex-wrap: nowrap;
                padding: 1px;
            }

            .header-container {
                display: flex;
                align-items: center;
                justify-content: center;
                text-align: center;
                padding: 29px;
                background-color: white;
                color: #000000;
                border-radius: 8px 8px 0 0;
                border-bottom: 1px solid #bfbfbf;
                flex-direction: row;
            }

            .header-container h2 {
                margin: 0;
            }

            @media (max-width: 768px) {
    .table-container {
        width: 90%; /* Make the table wider on smaller screens */
    }
}

@media (min-width: 1200px) {
    .table-container {
        width: 50%; /* Adjust the width for larger screens */
    }
}
        </style>
    </head>
    <body>
        <div class="header-container">
            <h2 style="text-wrap: nowrap">All Categories</h2>
        </div>

        

        <div class="table-container" style="width: 60%; margin: 0 auto;"> 
        <table class="table table-striped">
  <thead>
      <tr>
          <th>#</th>
          <th>Name</th>
          <th>Restaurant No</th>
          <th>Created At</th>
          <th></th>
      </tr>
  </thead>
  <tbody>
      @foreach($category as $data)
      <tr>
          <td>{{$data->id}}</td>
          <td>{{$data->name}}</td>
          <td>{{$data->restaurant_id}}</td>
          <td>{{$data->created_at}}</td>
          <td class="text-center">
          <a href="{{url('/editcat')}}/{{$data->id}}">
                        <button
                            type="button"
                            class="btn btn-secondary btn-sm"
                        >
                            Edit
                        </button></a>
                        <a href="{{ route('category.delete', ['id' => $data->id]) }}">
        <button type="button" class="btn btn-danger btn-sm">Delete</button>
    </a>
          </td>
      </tr>
      @endforeach
  </tbody>
</table>
</div>
<!-- Add the session messages here -->
        <div class="container mt-3">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
        </div>
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"
></script>
    </body>
</html>
  <!-- Main Sidebar Container -->
@include('layouts.sidebar')

  <!-- Content Wrapper. Contains page content -->
  

  <!-- /.content-wrapper -->
 <!-- @include('layouts.footer') -->