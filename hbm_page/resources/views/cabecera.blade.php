<!doctype html>
<!--
  Copyright 2015 Google Inc. All rights reserved.
  Licensed under the Apache License, Version 2.0 (the "License");
  you may not use this file except in compliance with the License.
  You may obtain a copy of the License at
      https://www.apache.org/licenses/LICENSE-2.0
  Unless required by applicable law or agreed to in writing, software
  distributed under the License is distributed on an "AS IS" BASIS,
  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
  See the License for the specific language governing permissions and
  limitations under the License
-->
<html lang="en">
<head>
  <meta charset="utf-8">

  <title></title>
  <!-- Web Application Manifest -->
  <link rel="manifest" href="manifest.json">
  <!-- Tile icon for Win8 -->
  <meta name="msapplication-TileColor" content="#3372DF">
  <meta name="msapplication-navbutton-color" content="#303F9F">
  <!-- Material Design Lite -->
    <script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script> 
  {!! Html::style('css/bootstrap/css/bootstrap.min.css') !!}
  {!! Html::script('css/bootstrap/js/jquery-3.2.1.min.js') !!}
  {!! Html::script('css/bootstrap/js/bootstrap.min.js') !!}
  {!! Html::script('js/subir_csv.js') !!}
  {!! Html::script('js/json_libreria/d3.js') !!}
{!! Html::script('js/json_libreria/d3.min.js') !!}
@stack('js')
  <script src="https://cdn.firebase.com/js/client/2.0.2/firebase.js"></script>


   

</head>
<body>
<div class="container">

@yield('contenido')

</div>

<!-- Import and configure the Firebase SDK -->
<!-- These scripts are made available when the app is served or deployed on Firebase Hosting -->
<!-- If you do not want to serve/host your project using Firebase Hosting see https://firebase.google.com/docs/web/setup -->

</body>
</html>
