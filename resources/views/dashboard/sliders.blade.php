@extends('dashboard.template')
@section('content')
@include('dashboard.sidebar')
<main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
            @if (Session::has('status'))
              <div class="alert alert-success">
                {{Session::get('status')}}
</div>
             @endif
              <h6>Les Glisseurs</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                    <a class="btn btn-outline-primary float-end" href="{{url('/ajouterslider')}}">Ajouter Glisseur</a>
                  <thead>
                    <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Image</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Titre</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Description</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($sliders as $slider)
                        <tr>
                          <td><img width="60px" height="35px" src="/storage/slider_images/{{$slider->slider_image}}"/></td>
                          <td>{{$slider->title}}</td>
                          <td>{{$slider->description}}</td>
                          <td class=" text-center">
                            @if ($slider->status==1)
                            Active                      
                            @else
<label class="badge badge-danger">
  Desactive
                            @endif
                          </td>
                          <td>
                          <button class="btn btn-outline-primary" onclick="window.location='{{url('/edit_slider/'.$slider->id)}}'">Edit</button>
                          <a class="btn btn-outline-danger" id="delete" href="{{url('/supprimerslider/'.$slider->id)}}">Delete</a>
                          @if ($slider->status ==1)
                          <button class="btn btn-outline-warning" onclick="window.location='{{url('/desactiver_slider/'.$slider->id)}}'">Desactive</button>    
                          @else
                          <button class="btn btn-outline-success" onclick="window.location='{{url('/activer_slider/'.$slider->id)}}'">Activer</button>
                              
                          @endif
                          </td>
                        </tr>
                        @endforeach
        
                
             
                 
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>
</main>
@endsection