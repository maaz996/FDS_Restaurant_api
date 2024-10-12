@include('layouts.header')
<div class="wrapper">

  <!-- Navbar -->
 
  <!-- /.navbar -->
  <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }

      body {
        display: flex;
        min-height: 100vh;
        align-items: center;
        justify-content: center;
        background-color: #cccccc !important;
        font-family: "Poppins", sans-serif;
      }

      .wrapper {
        width: 100%;
        max-width: 640px;
        background-color: #fff;
        border-radius: 8px;
        padding: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      }

      .header-container {
        text-align: center; /* Centers the header text */
        padding: 20px;
        background-color: #f7f7f7;
        font-size: 25px;
        font-weight: 600;
        border-radius: 8px 8px 0 0;
        border-bottom: 1px solid #bfbfbf;
      }

      form {
        margin-top: 35px;
      }

      .dbl-field {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        padding: 0 15px;
      }

      .field {
        width: calc(100% - 10px);
        margin-bottom: 20px;
      }

      .field input {
        width: 100%;
        height: 46px;
        font-size: 16px;
        padding: 8px;
        border-radius: 5px;
        border: 1px solid #bfbfbf;
        outline: none;
      }

      .field input:focus {
        border: 2px solid #0d6efd;
      }

      .custom-file {
        overflow: hidden;
        position: relative;
        cursor: pointer;
      }

      .custom-file-input {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0;
        cursor: pointer;
      }

      .custom-file-label {
        display: flex;
        align-items: center;
        justify-content: left;
        padding: 0.375rem 0.75rem;
        font-size: 1rem;
        background-color: #e9ecef;
        border: 1px solid #ced4da;
        border-radius: 0.25rem;
      }

      .button-area {
        margin-top: 25px;
        padding: 28px;
        display: flex;
        justify-content: center;
      }

      button {
        font-size: 18px;
        border: none;
        color: #fff;
        cursor: pointer;
        background: #0d6efd;
        padding: 8px 14px;
      }

      @media (max-width: 600px) {
        .dbl-field {
          flex-direction: column;
        }
      }
      
    </style>
  </head>
  <body>
    <div class="wrapper">
      <div class="header-container">
        <h1>Update Category</h1>
      </div>

      <form action="{{ route('editcat') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{$category['id']}}" />
        <div class="dbl-field">
          <div class="field">
            <span>Category Name</span>
            <input type="text" id="name" name="name" placeholder="Category Name" value="{{$category['name']}}" />
          </div>

  <!------------------------------------------------------------------------------------------------------------------- -->

  <div class="field">
      <label for="restaurantDropdown">Select Restaurant</label>
      <select id="restaurantDropdown" class="form-select" name="restaurant_id">
        <option value="">Choose Restaurant</option>
        @foreach($restaurants as $restaurant)
          <option value="{{ $restaurant->id }}" {{ $category->restaurant_id == $restaurant->id ? 'selected' : '' }}>
            {{ $restaurant->name }}
          </option>
        @endforeach
      </select>
    </div>
  <!------------------------------------------------------------------------------------------------------------------- -->

        <div class="button-area">
          <button type="submit">Update</button>
        </div>
      </form>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>

    <script>
      // JavaScript to set the selected restaurant_id in the hidden input field
      document.getElementById('restaurantDropdown').addEventListener('change', function () {
        var selectedRestaurantId = this.value;
        document.getElementById('restaurant_id').value = selectedRestaurantId;
      });
    </script>
  </body>
</html>

  <!-- Main Sidebar Container -->
@include('layouts.sidebar')

  <!-- Content Wrapper. Contains page content -->
  

  <!-- /.content-wrapper -->
 <!-- @include('layouts.footer') -->