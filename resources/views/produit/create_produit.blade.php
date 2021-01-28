@extends('Layouts.app3')
@section('template')

<br>

<center><h5><u><p class="font-weight-bold text-primary"> <b>Information de Produit  </P></u></h5></center>
    <br>
    <form action="{{action('ProduitController@store')}}"method="post" enctype="multipart/form-data">        
      @csrf
        <br>
        <div class="@if($errors->get('type'))alert alert-danger @endif" role="alert">
        <center> <table  style = "width:65%" border=0 >
            <tr>
                    <td style = "width:20%">
                            <label for="numclient"><b>type:</label>
                    </td>
                   

                    <td style = "width:15%">
                        <input type="radio" id="lit" name="type" value="Lit">
                        <label for="male">lit</label>
                    </td>
                    <td style = "width:15%">
                        <input type="radio" id="porte" name="type" value="Porte">
                        <label for="female">porte</label>
                    </td>
                    <td style = "width:15%">
                        <input type="radio" id="fenetre" name="type" value="Fenetre">
                        <label for="other">fenetre</label>
                    </td>
                    <td style = "width:15%">
                        <input type="radio" id="table" name="type" value="Table">
                        <label for="other">table</label>
                    </td>
                    <td style = "width:15%">
                        <input type="radio" id="chiase" name="type" value="Chaise">
                        <label for="other">chaise</label>
                    </td>
                  
            </tr>
        </table>
        @if($errors->get('type'))
        @foreach($errors->get('type') as $message)
                <li>{{$message}}</li>
        @endforeach
        @endif
        </div>
        <br>
        <center> <table  style = "width:65%" border=0 >
            <tr>
                    <td style = "width:15%">
                            <label for="numclient"><b>longueur:</label>
                    </td>
                    <td style = "width:20%">
                        <br>
                        <input type="float"  name="longueur" value="{{old('longueur')}}" class="@if($errors->get('hauteur')) alert-danger @endif" role="alert"><b>m<br><br>
                            @if($errors->get('longueur'))
                            @foreach($errors->get('longueur') as $message)
                            <g class="font-weight-bold text-danger"><li>{{$message}}</li></g>
                            @endforeach
                            @endif
                            </div>
                    </td>
        
                    
            </tr>
        </table>

        <center> <table  style = "width:65%" border=0 >
            <tr>
                    <td style = "width:15%">
                            <label for="numclient"><b>largeur:</label>
                    </td>
                    <td style = "width:20%">
                        <br>
                        <input type="float"  name="largeur" value="{{old('largeur')}}" class="@if($errors->get('hauteur')) alert-danger @endif" role="alert"><b>m<br><br>
                            @if($errors->get('largeur'))
                            @foreach($errors->get('largeur') as $message)
                            <g class="font-weight-bold text-danger"><li>{{$message}}</li></g>
                            @endforeach
                            @endif
                            </div>
                    </td>
                    
            </tr>
        </table>
        <center> <table  style = "width:65%" border=0 >
            <tr>
                    <td style = "width:15%">
                            <label for="numclient"><b>hauteur:</label>
                    </td>
                    <td style = "width:20%">
                        <br>
                        <input type="float"  name="hauteur" value="{{old('hauteur')}}" class="@if($errors->get('hauteur')) alert-danger @endif" role="alert"><b>m<br><br>
                            @if($errors->get('hauteur'))
                            @foreach($errors->get('hauteur') as $message)
                            <g class="font-weight-bold text-danger"><li>{{$message}}</li></g>
                            @endforeach
                            @endif
                    </td>
        
                    
            </tr>
        </table>
        <br>
        <div class="@if($errors->get('couleur'))alert alert-danger @endif" role="alert">
        <center> <table  style = "width:65%" border=0 >
            <tr>
                    <td style = "width:25%">
                            <label for="numclient"><b>couleur:</label>
                            </td>
                            <td style = "width:20%">
                                <input type="radio" id="noir" name="couleur" value="noir">
                                <label for="male">noir</label>
                            </td>
                            <td style = "width:20%">
                                <input type="radio" id="blanc" name="couleur" value="blanc">
                                <label for="female">blanc</label>
                            </td>
                            <td style = "width:20%">
                                <input type="radio" id="vernis" name="couleur" value="vernis">
                                <label for="female">vernis</label>
                            </td>
                    
            </tr>
        </table>
        @if($errors->get('couleur'))
        @foreach($errors->get('couleur') as $message)
                <li>{{$message}}</li>
        @endforeach
        @endif
    </div>
<br><br>
<div class="@if($errors->get('couleur'))alert alert-danger @endif" role="alert">
        <center> <table  style = "width:65%" border=0 >
            <tr>
                    <td style = "width:28%">
                            <label for="numclient"><b> qualite: </label>
                    </td>
                    <td style = "width:20%">
                        <input type="radio" id="normale" name="qualite" value="0">
                        <label for="female">normale</label>
                    </td>
                    <td style = "width:20%">
                        <input type="radio" id="élevée" name="qualite" value="1">
                        <label for="male">élevée</label>
                    </td>
                    
            </tr>
        </table>
        @if($errors->get('qualite'))
        @foreach($errors->get('qualite') as $message)
                <li>{{$message}}</li>
        @endforeach
        @endif
    </div>
            <br><br>
        <center> <table  style = "width:40%" border=0 >
            <tr>
                
                <td style="width:10%">
                    <input type="submit"  class="form-control btn btn-primary" value="suivant">
                </td>
            </tr>
            </table>
        </center>
        <br><br>
        </form>

@endsection