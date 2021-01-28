@extends('Layouts.app3')
@section('template')

<center><h5><u><p class="font-weight-bold text-primary"><b> 
    
    <svg width="3em" height="2em" viewBox="0 0 16 16" class="bi bi-list" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M2.5 11.5A.5.5 0 0 1 3 11h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 3h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
      </svg>

    les Factures  </P></u></h5></center>
    <br>
    @foreach($factures as $facture)

    <center> <table  style = "width:60%" border="0" >
        <tr>
            
        <td style = "width:20%">
            <b> numéro de facture: </b>  {{$facture->id}}   <br>
            <b> nom de client:</b>       {{$facture->client->nom}}    <br>
            <b> type de produit:</b>   {{$facture->produit->type}}   <br>
            <b> Date:</b> {{$facture->created_at->format('d/m/Y')}}<br>
        </td>
    <td style = "width:7%"> <a href="{{url('/facture/show/'.$facture->id)}}" class="btn btn-primary btn-block"> Entrer
    
        <svg width="2em" height="1em" viewBox="0 0 16 16" class="bi bi-card-list" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M14.5 3h-13a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
            <path fill-rule="evenodd" d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5z"/>
            <circle cx="3.5" cy="5.5" r=".5"/>
            <circle cx="3.5" cy="8" r=".5"/>
            <circle cx="3.5" cy="10.5" r=".5"/>
          </svg>
    
    </a></td>
        </tr>
    </table>
    <center>
        <hr class="sidebar-divider" color=" blue">    
        
        @endforeach()

        <center> <table  style = "width:5%" border="0" >
            <tr><td>{{$factures->links()}}</td></tr>
        </table>
        <center>


@endsection