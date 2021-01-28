@extends('Layouts.app3')
@section('template')

<center><h5><u><p class="font-weight-bold text-primary"><b> Plus Informations  </P></u></h5></center>
    <form action="{{url('information/'.$prix->id)}}"method="post" enctype="multipart/form-data">        
        @csrf
                            <br><br>
                    <center> <table  style = "width:70%" border=0 >
                        
                        <tr>
                                <td style = "width:60%"><h5><b> le Prix ​​du bois dans la plaque: </b></h5></td>
                                <td style = "width:%">
                                    <br>
                                  <h5>  <input type="float" name="Prix​dubois" value="{{old('Prix​dubois')}}" class="@if($errors->get('Prix​dubois')) alert-danger @endif" role="alert"><b>DH<br><br><h5>
                                    @if($errors->get('Prix​dubois'))
                                    @foreach($errors->get('Prix​dubois') as $message)
                                    <g class="font-weight-bold text-danger"><li>{{$message}}</li></g>
                                    @endforeach
                                    @endif
                                </td>   
                        </tr>
                    </table>
                    <br>
                    <center> <table  style = "width:40%" border=0 >
                        <tr>
                            
                            <td style="width:10%">
                                <input type="submit" class="form-control btn btn-primary" value="update">
                            </td>
                        </tr>
                        </table>
                    </center>
                   </form>
                    @endsection
