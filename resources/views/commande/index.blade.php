@extends('Layouts.app3')
@section('template')


@if(session()->has('flascommande'))
<div class=" alert alert-success">
    {{session()->get('flascommande')}}
</div>
@endif

{{-- <center>
    <table  style="width:45%" border="0">
    <tr>
        <td style="width: 100%">
            <a href="{{url('Clients/create')}}" class="btn btn-outline-primary btn-block"><h5>Nouveau Commande</h5></a>
        </td>
    </tr>
    </table>    
<br> --}}
<center><h5><u><p class="font-weight-bold text-primary"><b> 
  
  <svg width="3em" height="2em" viewBox="0 0 16 16" class="bi bi-list" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
    <path fill-rule="evenodd" d="M2.5 11.5A.5.5 0 0 1 3 11h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 3h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
  </svg>

  les Commandes</P></u></h5></center>
    <br>

    @foreach($commandes as $commande)

    <center> <table  style = "width:63%" border="0" >
        <tr>
        <td style = "width:50%">
            <b> numéro de commande:</b> {{$commande->id}} <br>
            <b> numéro de facture:</b>   {{$commande->facture_id}} <br>
            <b> nom de client:</b>  {{$commande->facture->client->nom}}  <br>
            <b> date:</b>  {{$commande->created_at->format('d/m/Y')}} <br>
            
        </td>
        @if(($commande->fin)==0)
    <td style = "width:21%"> <a href="{{url('/commande/show/'.$commande->id)}}"   class="btn btn-primary btn-block "> Suivie 
    
      <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-repeat" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M2.854 7.146a.5.5 0 0 0-.708 0l-2 2a.5.5 0 1 0 .708.708L2.5 8.207l1.646 1.647a.5.5 0 0 0 .708-.708l-2-2zm13-1a.5.5 0 0 0-.708 0L13.5 7.793l-1.646-1.647a.5.5 0 0 0-.708.708l2 2a.5.5 0 0 0 .708 0l2-2a.5.5 0 0 0 0-.708z"/>
        <path fill-rule="evenodd" d="M8 3a4.995 4.995 0 0 0-4.192 2.273.5.5 0 0 1-.837-.546A6 6 0 0 1 14 8a.5.5 0 0 1-1.001 0 5 5 0 0 0-5-5zM2.5 7.5A.5.5 0 0 1 3 8a5 5 0 0 0 9.192 2.727.5.5 0 1 1 .837.546A6 6 0 0 1 2 8a.5.5 0 0 1 .501-.5z"/>
      </svg>

    </a></td>
    @else
    <td style = "width:21%"> <a href="{{url('/commande/show/'.$commande->id)}}" class="btn btn-success btn-block"> Terminer
    
      <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-check-all" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M8.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L2.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093L8.95 4.992a.252.252 0 0 1 .02-.022zm-.92 5.14l.92.92a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 1 0-1.091-1.028L9.477 9.417l-.485-.486-.943 1.179z"/>
      </svg>

    </a></td>
    @endif
    <td style = "width:7%"></td>
    <form action="{{url('/commande/delete/'.$commande->id)}}" method="post">
        {{csrf_field()}}
        {{method_field('DELETE')}}
    @if(($commande->fin)==0)
    <td style = "width:21%"> <button type="submit"  class="btn btn-danger btn-block " disabled > Supprimer &#9940; </button></td>
    @else
     <td style = "width:21%"> 
        
        
        {{-- <button type="submit" class="btn btn-danger btn-block"> supprimer </button>  --}}


        {{-- code modal --}}
        <button type="button" class="btn btn-danger btn-block" data-toggle="modal" data-target="#exampleModal">
            Supprimer 
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
              <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
            </svg>

          </button>
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Confirmer</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <h5>Êtes-vous sûr de la suppression ?</h5>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary"  data-dismiss="modal">Non</button>
                  <form action="{{url('/commande/delete/'.$commande->id)}}" >
                  <button type="submit" class="btn btn-danger" >Oui</a>
                  </form>
              </div>
              </div>
            </div>
          </div>
          {{-- fin code  modal --}}

    </td>
    @endif
    </form>  
    </tr>
    </table>
    <hr class="sidebar-divider" color=" blue">
    <center>    
    
    @endforeach()
    
    <center> <table  style = "width:5%" border="0" >
        <tr><td>{{$commandes->links()}}</td></tr>
    </table>
    <center>

       

@endsection