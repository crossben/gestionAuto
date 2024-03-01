@extends('layouts.app')

@section('content')
<div class="container"> 
    <div class="row">  
     <div class="col-xs-8 col-xs-offset-2"> 
      <div class="input-group"> 
       <input type="text" class="form-control" name="x" placeholder="Rechercher voiture..."> 
       <span class="input-group-btn"> 
        <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button> 
       </span> 
      </div> 
     </div> 
    </div> 
</div> 

                       
                        <img src="" alt="car1" style="display: block;margin: auto;" >
                       
       
                    
<div class="container">
    <div class="row">
        <div class="col-md-12" >
                @if(session()->has('success'))
            <div class="alert alert-success">
                {{session()->get('success')}}
                
                
            </div>
            @endif


</div>
</div>
</div>



            


        




        	<div style="color: #92a8d1; margin-left: 330px; "> <h1> </h1>
            </div>

        	<div class="pull-right">
        		<a href="{{url('voitures/create')}}" class="btn btn-success" > Nouvelle voiture </a> <br><br>
        	<div class="row">
                @foreach($vehicules as $vehicule)
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="{{asset('storage/'.$vehicule->photos)}}" alt="...">
      <div class="caption">
        <h3>{{$vehicule->marque}}</h3>
        <p>...</p>
        <p>
            <a href="{{ url('voitures/detail') }}" class="btn btn-info" role="button" style="margin-right: 150px">+</a> 
            
        </p>
      </div>
    </div>
  </div>
   @endforeach
</div>
    </div>
</div>
</div>

        


       
@endsection