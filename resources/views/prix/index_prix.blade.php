@extends('Layouts.app3')
@section('template')

<center><h5><u><p class="font-weight-bold text-primary"><b> Plus Informations  </P></u></h5></center>
    
                    <br><br><br>
                    <center> <table  style = "width:80%" border=0 >
                        <tr>
                                <td style = "width:65%"> <h4>le prix​​ du bois dans la plaque:<h4></td>
                                    @foreach ($prixes as $prix)
                                    <td style = "width:%"></td>
                                <td style = "width:0%">   <b><h3>{{$prix->Prix​dubois}} DH</b></h3> </td>   
                                
                        </tr>
                    </table>
                    <br><br>
                    <center> <table  style = "width:40%" border=0 >
                            <td style="width: 100%">
                                <a href="{{url('information/'.$prix->id.'/edit')}}" class="btn btn-outline-primary btn-block"><h5><b>Update</h5></a>
                            </td>
                        </tr>
                        @endforeach

@endsection