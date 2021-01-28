@extends('Layouts.app3')
@section('template')


<br>
<center><h5><p class="font-weight-bold text-primary"> <b><u>Facture numéro</u></b><p>{{$factures->id}} </P></h5></center>
    <br>
    

    <center> <table  style = "width:60%" border=0 >
        <tr>
                <td style = "width:65%"><b>Nom et Prénom :</td>
                <td style = "width:45%"> {{$factures->client->nom}} </td>   
        </tr>
    </table>
    <br>
    
    <center> <table  style = "width:60%" border=0 >
        <tr>
                <td style = "width:65%"><b> Numéro :</td>
                <td style = "width:45%"> 0{{$factures->client->numero}}</td>   
        </tr>
    </table>
    <br>
    
    <center> <table  style = "width:60%" border=0 >
        <tr>
                <td style = "width:65%"><b> Adresse :</td>
                <td style = "width:45%">  {{$factures->client->adresse}} </td>   
        </tr>
    </table>
    <br>
    
    <center> <table  style = "width:60%" border=0 >
        <tr>
                <td style = "width:65%"><b> Produit :</td>
                <td style = "width:45%"> {{$factures->produit->type}}</td>
              
        </tr>
    </table>
    <br>
    
    <center> <table  style = "width:60%" border=0 >
        <tr>
                <td style = "width:65%"> <b> La date:</td>
                <td style = "width:45%">  {{$factures->created_at->format('d/m/Y')}} </td>   
        </tr>
    </table>
    <br>
    
    <center> <table  style = "width:60%" border=0 >
        <tr>
                <td style = "width:65%"> <b>Montant à payes d'avance :</td>
                <td style = "width:45%"> {{($factures->produit->totale)*25/100}}.DH </td>   
        </tr>
    </table>
    <br>
    
    <center> <table  style = "width:60%" border=0 >
        <tr>
                <td style = "width:65%"> <b>Montant à payes aprés: </td>
                <td style = "width:45%"> {{($factures->produit->totale)*75/100}}.DH</td>   
        </tr>
    </table>
    <br>
    <center> <table  style = "width:60%" border=0 >
        <tr>
                <td style = "width:65%"> <b>Totale :</td>
                <td style = "width:45%"> <b>{{$factures->produit->totale}}.DH</td>   
        </tr>
    </table>
    <br>
    <center> <table  style = "width:60%" border=0 >
        <tr>
                <td style = "width:65%"><b> pour suivi votre Commande : </td>
                <td style = "width:45%"> <a href="/">Link</a> </td>   
        </tr>
    </table>
    <br>
    <br>

    <center> <table  style = "width:70%" >
        <tr><td style = "width:10%"><a href="javascript:window.print()">
                    <button   class="btn btn-outline-primary btn-block">Imprimer 
                    
                        <svg width="2em" height="1em" viewBox="0 0 16 16" class="bi bi-printer" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11 2H5a1 1 0 0 0-1 1v2H3V3a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v2h-1V3a1 1 0 0 0-1-1zm3 4H2a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h1v1H2a2 2 0 0 1-2-2V7a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-1v-1h1a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1z"/>
                            <path fill-rule="evenodd" d="M11 9H5a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1zM5 8a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H5z"/>
                            <path d="M3 7.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
                          </svg>
                    
                    </button></a>
        </td>
            <td style = "width:1%"></td>
        
    <td style = "width:10%"><a href="{{url('/commande/show/'.$commandes->id)}}"  class="btn btn-outline-primary btn-block">passé de commande
    
        <svg width="2em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-right-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
            <path fill-rule="evenodd" d="M7.646 11.354a.5.5 0 0 1 0-.708L10.293 8 7.646 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0z"/>
            <path fill-rule="evenodd" d="M4.5 8a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5z"/>
          </svg>
        
    </a></td>
            
        </tr>
    </table>
    <center>

@endsection