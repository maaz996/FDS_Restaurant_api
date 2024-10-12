@include('layouts.header')
<div class="wrapper">

  <!-- Navbar -->
 
  <!-- /.navbar -->
  <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add New Item</title>
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
        background-color: #CCCCCC;
        font-family: "Poppins", sans-serif;
      }

      .wrapper {
        width: 100%;
        max-width: 700px;
        background-color: #fff;
        border-radius: 10px;
        padding: 25px;
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
      }

      .header-container {
        text-align: center;
        padding-bottom: 20px;
        background-color: #f7f7f7;
        font-size: 28px;
        font-weight: 700;
        border-radius: 8px 8px 0 0;
        margin-bottom: 25px;
      }

      form {
        margin-top: 20px;
      }

      .dbl-field {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
      }

      .field {
        width: 100%;
        margin-bottom: 20px;
      }

      .field label {
        font-weight: 500;
        font-size: 15px;
        margin-bottom: 5px;
        display: block;
        color: #495057;
      }

      .field input[type="text"], .field input[type="file"], .field input[type="number"], .field select {
        width: 100%;
        height: 46px;
        font-size: 16px;
        padding: 8px 15px;
        border-radius: 5px;
        border: 1px solid #ced4da;
        background-color: #f8f9fa;
        transition: all 0.3s ease;
      }

      .field input[type="text"]:focus, 
      .field input[type="file"]:focus, 
      .field input[type="number"]:focus,
      .field select:focus {
        border-color: #007bff;
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.25);
      }

      .custom-file-label {
        position: relative;
        display: block;
        height: 46px;
        padding: 8px 15px;
        background-color: #f8f9fa;
        border: 1px solid #ced4da;
        border-radius: 5px;
        line-height: 26px;
        cursor: pointer;
        color: #495057;
        text-align: left;
        transition: background-color 0.3s ease;
      }

      .custom-file-label:hover {
        background-color: #e9ecef;
      }

      .button-area {
        margin-top: 30px;
        display: flex;
        justify-content: center;
      }

      button {
        font-size: 18px;
        border: none;
        color: #fff;
        cursor: pointer;
        background: #007bff;
        padding: 10px 20px;
        border-radius: 5px;
        transition: background-color 0.3s ease;
      }

      button:hover {
        background-color: #0056b3;
      }

      @media (max-width: 600px) {
        .dbl-field {
          flex-direction: column;
        }

        .field {
          width: 100%;
        }
      }
    </style>
  </head>
  <body>
    <div class="wrapper">
      <div class="header-container">
        <h1>Add New Item</h1>
      </div>

      <form action="{{ route('additem') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="dbl-field">

        <div class="field">
            <label for="categoryDropdown">Select Category</label>
            <select id="categoryDropdown" name="category_id" class="form-select" required>
              <option value="">Choose Category</option>
              @foreach($categorys as $category)
                <option value="{{ $category->id }}">{{ $category->name }} - {{ $category->id }}</option>
              @endforeach
            </select>
          </div>

          <div class="field">
            <label for="name">Item Name</label>
            <input type="text" name="name" id="name" placeholder="Enter Item Name" required />
          </div>

          <div class="field">
            <label for="price">Price</label>
            <input type="number" name="price" id="price" placeholder="Enter Price" required />
          </div>

          <div class="field">
            <label for="variations">Enter Variation</label>
            <input type="text" name="variations" id="variations" placeholder="Enter Item Variations" required />
          </div>

          <div class="dbl-field">
          <div class="field">
            <span>Image</span>
            <div class="custom-file">
              <input type="file" id="image" name="image" class="custom-file-input" required />
              <label class="custom-file-label" for="image">Browse</label>
            </div>
          </div>
        </div>

          <div class="field">
            <label for="description">Item Description</label>
            <input type="text" name="description" id="description" placeholder="Enter Item Description" required />
          </div>
          
          
        </div>

        <div class="button-area">
          <button type="submit">Add Item</button>
        </div>
      </form>
    </div>
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
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>

    <script>
      // JavaScript to set the selected category_id in the hidden input field
      document.getElementById('categoryDropdown').addEventListener('change', function () {
        var selectedCategoryId = this.value;
        document.getElementById('category_id').value = selectedCategoryId;
      });
    </script>
  </body>
</html>

  <!-- Main Sidebar Container -->
@include('layouts.sidebar')

  <!-- Content Wrapper. Contains page content -->
  

  <!-- /.content-wrapper -->
 <!-- @include('layouts.footer') -->