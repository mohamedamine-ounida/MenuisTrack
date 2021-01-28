@extends('Layouts.app3')
@section('template')


<center><h4><u><p class="font-weight-bold text-primary"> <b>Information de client  </P></u></h4></center>
<br>

<div class="row">
    <div class="col-sm-5">
      <div class="card border-primary shadow h-100 py-2">
        <div class="card-body">
            <h5 class="card-title font-weight-bold text-primary"><center> <P>nouveau client</P> </center></h5>


            <form action="{{action('ClientController@store')}}"method="post" enctype="multipart/form-data">
                {{csrf_field()}}
            <br>
                <br>
                
                <center> <table  style = "width:90%" border=0 >
                <tr>
            
                        <td style = "width:40%">
                            <label for="" ><b>nom et prénom:</label>
                        </td>
                        <td style = "width:20%">
                            <br> 
            
                            <input type="text"name="nom" value="{{old('nom')}} "class="@if($errors->get('nom')) alert-danger @endif" role="alert"><br><br>
                            @if($errors->get('nom'))
                            @foreach($errors->get('nom') as $message)
                            <g class="font-weight-bold text-danger"><li>{{$message}}</li></g>
                            @endforeach
                            @endif
                        </td>   
                    </div>
                    </tr>
            </table>
            <br><br>
            
            
            <center> <table  style = "width:90%" border=0 >
                <tr>
                        <td style = "width:40%">
                                <label for="numclient"><b>numéro:</label>
                        </td>
                        <td style = "width:20%">
                            <br>
                            <input type="number" name="numero" value="{{old('numero')}}" class="@if($errors->get('numero'))alert-danger @endif" role="alert"><br><br>
                            @if($errors->get('numero'))
                            @foreach($errors->get('numero') as $message)
                            <g class="font-weight-bold text-danger"><li>{{$message}}</li></g>
                            @endforeach
                            @endif
                            
                        </td>
                </tr>
            </table>
            
            <br><br>
            
            <center> <table  style = "width:90%" border=0 >
                <tr>
                        <td style = "width:40%">
                                <label for="adsclient"><b>Adresse:</label>
                        </td>
                        <td style = "width:20%">
                            <br>
                            <input type="email"  name="adresse" value="{{old('adresse')}}"  class="@if($errors->get('adresse'))alert-danger @endif" role="alert"><br><br>
                            @if($errors->get('adresse'))
                            @foreach($errors->get('adresse') as $message)
                            <g class="font-weight-bold text-danger"><li>{{$message}}</li></g>
                            @endforeach
                            @endif
                        </td>
                </tr>
            </table>
            <br><br>
            <center> <table  style = "width:90%" border=0 >
                <tr>
                    <td style="width:10%">
                        <input type="submit"  class="form-control btn btn-primary" value="suivant">
            
                    </td>
                </tr>
                </table>
            </center>
            </form>
        </div>
      </div>
    </div>






    <div class="col-sm-7">
      <div class="card border-success shadow h-100 py-2">
        <div class="card-body">
          <h5 class="card-title font-weight-bold text-primary"><center> <P>ancien client </P> <center></h5>
          <p class="card-text">                  
            <div class="form-group">
                <center>
                <div class="box-tools">
                    <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
                        <input type="text" name="table_search" name="search" id="search" class="form-control pull-right" placeholder="Rechercher">
                    </div>
                </div>
                <center>
                    <br>
                <div class="table-responsive" >
                 <table id="data_table" class="table table-hover" border="0">
                     <tr>  
                         <th class="bg-primary"> <b> <p style="color:white"> nom </p></b> </th>
                         <th class="bg-primary"> <b> <p style="color:white"> numéro </p>  </b> </th>
                         <th class="bg-primary"> <b> <p style="color:white"> adress </p></b> </th>
                         <th class="bg-primary"> <b> <p style="color:white"> action </p></b> </th> 
                    </tr>
                
                    @foreach ($Clc as $Clcs)    
                    
                    <tr>
                    <td> {{$Clcs->nom}} </td>
                    <td> 0{{$Clcs->numero}} </td>
                    <td> {{$Clcs->adresse}} </td>
                    <td>  <a class="btn btn-success" href="{{url('Clients/store',$Clcs->id)}}" > suivant </a> </td>
                    </tr>

                    @endforeach
                </table>

                <center> <table  style = "width:5%" border="0" >
                    <tr><td>{{$Clc->links()}}</td></tr>
                </table>
                <center>

                </div>
            </div>
        </div>
      </div>
    </div>


  </div>




@endsection

