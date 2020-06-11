@extends('layouts.app')
{{--<a href="{{route('addForm')}}" class="btn btn-success" >add form</a>--}}
@section('content')
               <div id="sidebar">
                   <div class="toggle-btn" onclick="openMenu()">
                       <span></span>
                       <span></span>
                       <span></span>
                   </div>
                   <ul>
                       <li>Opon-i</li>
                       <li><a href="{{route("operations")}}"><span style="font-size: 20px">1</span>.Операции</a></li>
                       <li><a href="{{route("documents")}}">2.Документы</a></li>
                       <li><a href="{{route("reports")}}">3.Отчеты</a></li>
                       <li><a href="#">Задачи</a></li>
                       <li><a href="#">Контрагенты</a></li>
                       <li><a href="#">Найстройки</a></li>
                   </ul>
               </div>
               <script>
                   function openMenu() {
                       document.getElementById("sidebar").classList.toggle('active');
                   }
               </script>


           <div class="col-md-9" style="float: right">
               @yield('main')
           </div>


@endsection
