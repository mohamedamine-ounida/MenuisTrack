@extends('Layouts.app3')
@section('template')

<style>
    table, th, td ,a {
      border: 0px solid ;
    }
 </style>

   
<br>
<center><h5><p class="font-weight-bold text-primary"> <b><u>Commande numéro:</u></b><p>{{$commandes->id}} </P></h5></center>
    <br>
    <center> <table  style = "width:90%" >
        <tr>
                 <td style = "width:20%" align="center" ><b>numero facture:</b>{{$commandes->facture->id}}</td>
                <td style = "width:20%" align="center" ><b>Nom de client :</b> {{$commandes->facture->client->nom}}</td>
                <td style = "width:20%" align="center"><b>numéro client :</b> 0{{$commandes->facture->client->numero}}</td>     
                <td style = "width:20%" align="center"><b>produit :</b> {{$commandes->facture->produit->type}}</td>   

        </tr>
    </table>
    <br><br><br>
    <center><h6><p class="font-weight-bold text-primary"> <b>Stade de progression:</b><p></P></h6></center>
                <br><br>
    <center> <table  style = "width:100%" >
        <tr>
                <td style = "width:20%" align="center" ><b>montant avance :</b>
                    @if( ($commandes->montantavance)==0) 🕜
                    @else  ✅
                    @endif             
                </td>

                <td style = "width:20%" align="center" ><b>apportez les matières :</b>
                    @if( ($commandes->apportezlesmatières)==0) 🕜
                    @else  ✅
                    @endif       
                    
                 </td>

                <td style = "width:20%" align="center"><b>réalisation :</b>
                    
                    
                    @if( ($commandes->réalisation)==0) 🕜
                    @else  ✅
                    @endif       
                    
                </td>    

                <td style = "width:20%" align="center"><b>teinture :</b>
                
                    @if( ($commandes->teinture)==0) 🕜
                    @else  ✅
                    @endif       
                
                </td>   

                <td style = "width:10%" align="center"><b>fin :</b> 
                    
                    @if( ($commandes->fin)==0) 🕜
                    @else  ✅
                    @endif       
                    
                    
                </td>   
        </tr>
        </table>
    </center>
    <br>
    <center> <table  style = "width:100%" >
        <tr>
            <td style = "width:20%" align="center" >
                @if(($commandes->montantavance)==0 && ($commandes->apportezlesmatières)==0 && ($commandes->réalisation)==0 && ($commandes->teinture)==0 && ($commandes->fin)==0 )
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                  mise à jour
                                  
                                  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-screwdriver" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M0 1l1-1 3.081 2.2a1 1 0 0 1 .419.815v.07a1 1 0 0 0 .293.708L10.5 9.5l.914-.305a1 1 0 0 1 1.023.242l3.356 3.356a1 1 0 0 1 0 1.414l-1.586 1.586a1 1 0 0 1-1.414 0l-3.356-3.356a1 1 0 0 1-.242-1.023L9.5 10.5 3.793 4.793a1 1 0 0 0-.707-.293h-.071a1 1 0 0 1-.814-.419L0 1zm11.354 9.646a.5.5 0 0 0-.708.708l3 3a.5.5 0 0 0 .708-.708l-3-3z"/>
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
                                        <h5>Êtes-vous sûr de la mise à jour?</h5>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"  data-dismiss="modal">Non</button>
                                        <form action="{{action('CommandeController@updatemontantavance',$commandes->id)}}" >
                                        <button type="submit" class="btn btn-primary" >Oui</a>
                                        </form>
                                    </div>
                                    </div>
                                  </div>
                                </div>
                @else  
                @endif             
            </td>
            <td style = "width:20%" align="center" >
                @if(($commandes->montantavance)==1 && ($commandes->apportezlesmatières)==0 && ($commandes->réalisation)==0 && ($commandes->teinture)==0 && ($commandes->fin)==0 ) 
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                  mise à jour

                  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-screwdriver" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M0 1l1-1 3.081 2.2a1 1 0 0 1 .419.815v.07a1 1 0 0 0 .293.708L10.5 9.5l.914-.305a1 1 0 0 1 1.023.242l3.356 3.356a1 1 0 0 1 0 1.414l-1.586 1.586a1 1 0 0 1-1.414 0l-3.356-3.356a1 1 0 0 1-.242-1.023L9.5 10.5 3.793 4.793a1 1 0 0 0-.707-.293h-.071a1 1 0 0 1-.814-.419L0 1zm11.354 9.646a.5.5 0 0 0-.708.708l3 3a.5.5 0 0 0 .708-.708l-3-3z"/>
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
                        <h5>Êtes-vous sûr de la mise à jour?</h5>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"  data-dismiss="modal">Non</button>
                        <form action="{{action('CommandeController@updateapportezlesmatières',$commandes->id)}}" >
                        <button type="submit" class="btn btn-primary" >Oui</a>
                        </form>
                    </div>
                    </div>
                  </div>
                </div>
                @else  
                @endif             
            </td>
            <td style = "width:20%" align="center" >
                @if(($commandes->montantavance)==1 && ($commandes->apportezlesmatières)==1 && ($commandes->réalisation)==0 && ($commandes->teinture)==0 && ($commandes->fin)==0 ) 
              
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                  mise à jour

                  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-screwdriver" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M0 1l1-1 3.081 2.2a1 1 0 0 1 .419.815v.07a1 1 0 0 0 .293.708L10.5 9.5l.914-.305a1 1 0 0 1 1.023.242l3.356 3.356a1 1 0 0 1 0 1.414l-1.586 1.586a1 1 0 0 1-1.414 0l-3.356-3.356a1 1 0 0 1-.242-1.023L9.5 10.5 3.793 4.793a1 1 0 0 0-.707-.293h-.071a1 1 0 0 1-.814-.419L0 1zm11.354 9.646a.5.5 0 0 0-.708.708l3 3a.5.5 0 0 0 .708-.708l-3-3z"/>
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
                        <h5>Êtes-vous sûr de la mise à jour?</h5>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"  data-dismiss="modal">Non</button>
                        <form action="{{action('CommandeController@updateréalisation',$commandes->id)}}" >
                        <button type="submit" class="btn btn-primary" >Oui</a>
                        </form>
                    </div>
                    </div>
                  </div>
                </div>              
                @else  
                @endif             
            </td>
            <td style = "width:20%" align="center" >
                @if(($commandes->montantavance)==1 && ($commandes->apportezlesmatières)==1 && ($commandes->réalisation)==1 && ($commandes->teinture)==0 && ($commandes->fin)==0 ) 
                
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                  mise à jour

                  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-screwdriver" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M0 1l1-1 3.081 2.2a1 1 0 0 1 .419.815v.07a1 1 0 0 0 .293.708L10.5 9.5l.914-.305a1 1 0 0 1 1.023.242l3.356 3.356a1 1 0 0 1 0 1.414l-1.586 1.586a1 1 0 0 1-1.414 0l-3.356-3.356a1 1 0 0 1-.242-1.023L9.5 10.5 3.793 4.793a1 1 0 0 0-.707-.293h-.071a1 1 0 0 1-.814-.419L0 1zm11.354 9.646a.5.5 0 0 0-.708.708l3 3a.5.5 0 0 0 .708-.708l-3-3z"/>
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
                        <h5>Êtes-vous sûr de la mise à jour?</h5>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"  data-dismiss="modal">Non</button>
                        <form action="{{action('CommandeController@updateteinture',$commandes->id)}}" >
                        <button type="submit" class="btn btn-primary" >Oui</a>
                        </form>
                    </div>
                    </div>
                  </div>
                </div>

                @else  
                @endif             
            </td>
            <td style = "width:12%" align="center" >
                @if(($commandes->montantavance)==1 && ($commandes->apportezlesmatières)==1 && ($commandes->réalisation)==1 && ($commandes->teinture)==1 && ($commandes->fin)==0 ) 
              
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                  mise à jour

                  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-screwdriver" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M0 1l1-1 3.081 2.2a1 1 0 0 1 .419.815v.07a1 1 0 0 0 .293.708L10.5 9.5l.914-.305a1 1 0 0 1 1.023.242l3.356 3.356a1 1 0 0 1 0 1.414l-1.586 1.586a1 1 0 0 1-1.414 0l-3.356-3.356a1 1 0 0 1-.242-1.023L9.5 10.5 3.793 4.793a1 1 0 0 0-.707-.293h-.071a1 1 0 0 1-.814-.419L0 1zm11.354 9.646a.5.5 0 0 0-.708.708l3 3a.5.5 0 0 0 .708-.708l-3-3z"/>
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
                        <h5>Êtes-vous sûr de la mise à jour?</h5>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"  data-dismiss="modal">Non</button>
                        <form action="{{action('CommandeController@updatefin',$commandes->id)}}" >
                        <button type="submit" class="btn btn-primary" >Oui</a>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
                @else  
                @endif             
            </td>
    </tr>
    </table>

    

@endsection
