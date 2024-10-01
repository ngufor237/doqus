@extends('includes.footer')
@section('all')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="summernote-bs5.css" rel="stylesheet">
    <!-- Place the first <script> tag in your HTML's <head> -->
    <script src="https://cdn.tiny.cloud/1/dz7wfb7rq1qy29eyvc4he597d06n34lu0c3khilysaykay6g/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="summernote-bs5.js"></script>
    
<!-- Place the following <script> and <textarea> tags your HTML's <body> -->
<script>
  tinymce.init({
    selector: 'textarea',
    plugins: [
      // Core editing features
      'anchor', 'autolink', 'charmap', 'codesample', 'emoticons', 'image', 'link', 'lists', 'media', 'searchreplace', 'table', 'visualblocks', 'wordcount',
      // Your account includes a free trial of TinyMCE premium features
  ],
    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
    tinycomments_mode: 'embedded',
    tinycomments_author: 'Author name',
    mergetags_list: [
      { value: 'First.Name', title: 'First Name' },
      { value: 'Email', title: 'Email' },
    ],
    ai_request: (request, respondWith) => respondWith.string(() => Promise.reject('See docs to implement AI Assistant')),
  });
</script>

    <title>
      @yield('title','Docqus237')
    </title>  
</head>
<header class="header">
  <div class="row">
    <div class="image-container col-md-4">
      <img src="{{ asset('img/logo.png') }}"  alt="">
    </div>
    <div class="navbar-nav col-md-8">
        <ul class="nav-links">
         <li class="nav-items"> <a href="">HOME</a></li>
         <li class="nav-items"> <a href=""> ARTICLES</a></li>
         <li class="nav-items"> <a href=""> CONTACT</a></li>
        </ul>
    </div>
  </div>
</header>

    @yield('content')
@stop