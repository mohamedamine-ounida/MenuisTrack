@extends('Layouts.app3')
@section('template')

<center> <h4> Commandes en cours </h4> </center> 

@foreach ($Dashs as $Dash)
    

<div class="row">
     
<div  class="pt-3 col-xl-4 col-md-5 mb-5 ">
    <div class="card border-left-info shadow h-100 py-2 ">
      <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                    Commande numéro  
                </div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">
                     {{$Dash->id}} 
                    
                </div>
            </div>
            <div class="col-auto">
                <i class="fas fa-calendar fa-2x text-gray-300">
                    
                    <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-list-ol" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5z"/>
                        <path d="M1.713 11.865v-.474H2c.217 0 .363-.137.363-.317 0-.185-.158-.31-.361-.31-.223 0-.367.152-.373.31h-.59c.016-.467.373-.787.986-.787.588-.002.954.291.957.703a.595.595 0 0 1-.492.594v.033a.615.615 0 0 1 .569.631c.003.533-.502.8-1.051.8-.656 0-1-.37-1.008-.794h.582c.008.178.186.306.422.309.254 0 .424-.145.422-.35-.002-.195-.155-.348-.414-.348h-.3zm-.004-4.699h-.604v-.035c0-.408.295-.844.958-.844.583 0 .96.326.96.756 0 .389-.257.617-.476.848l-.537.572v.03h1.054V9H1.143v-.395l.957-.99c.138-.142.293-.304.293-.508 0-.18-.147-.32-.342-.32a.33.33 0 0 0-.342.338v.041zM2.564 5h-.635V2.924h-.031l-.598.42v-.567l.629-.443h.635V5z"/>
                      </svg>

                </i>
            </div>
        </div>
    </div>
  </div>
</div>


<div  class="pt-3 col-xl-4 col-md-5 mb-5 ">
    <div class="card border-left-success shadow h-100 py-2 ">
      <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                    nom client :  {{$Dash->facture->client->nom}}
                </div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">
                     {{$Dash->facture->produit->type}} 
                </div>
            </div>
            <div class="col-auto">
                <i class="fas fa-calendar fa-2x text-gray-300">
                    
                    <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-info-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                        <path d="M8.93 6.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588z"/>
                        <circle cx="8" cy="4.5" r="1"/>
                      </svg>

                </i>
            </div>
        </div>
    </div>
  </div>
</div>


<div  class="pt-3 col-xl-4 col-md-5 mb-5 ">
    <div class="card border-left-warning shadow h-100 py-2 ">
      <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                    Facture : {{$Dash->facture_id}} 
                </div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">
                    {{$Dash->facture->produit->totale}}
                </div>
            </div>
            <div class="col-auto">
                <i class="fas fa-calendar fa-2x text-gray-300">

                    <h2> <b>DH</b> </h2>
                   
                </i>
            </div>
        </div>
    </div>
  </div>
</div>


  
<div class="card-body ">

    @if(($Dash->montantavance)==0 && ($Dash->apportezlesmatières)==0 && ($Dash->réalisation)==0 && ($Dash->teinture)==0 && ($Dash->fin)==0 )       
    <h4 class="text-xs font-weight-bold text-secondary text-uppercase mb-1 ">état d'avancement <span class="float-right">0%</span></h4>
    <div class="progress mb-4">
      <div class="progress-bar bg-secondary" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
    </div>



    @elseif(($Dash->montantavance)==1 && ($Dash->apportezlesmatières)==0 && ($Dash->réalisation)==0 && ($Dash->teinture)==0 && ($Dash->fin)==0 )       
    <h4 class="text-xs font-weight-bold text-danger text-uppercase mb-1 ">état d'avancement <span class="float-right">20%</span></h4>
    <div class="progress mb-4">
      <div class="progress-bar bg-danger" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
    </div>

    @elseif(($Dash->montantavance)==1 && ($Dash->apportezlesmatières)==1 && ($Dash->réalisation)==0 && ($Dash->teinture)==0 && ($Dash->fin)==0 )       

    <h4 class="text-xs font-weight-bold text-warning text-uppercase mb-1 ">état d'avancement <span class="float-right">40%</span></h4>
    <div class="progress mb-4">
      <div class="progress-bar bg-warning" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
    </div>

    @elseif(($Dash->montantavance)==1 && ($Dash->apportezlesmatières)==1 && ($Dash->réalisation)==1 && ($Dash->teinture)==0 && ($Dash->fin)==0 )       

    <h4 class="text-xs font-weight-bold text-Primary text-uppercase mb-1 ">état d'avancement <span class="float-right">60%</span></h4>
    <div class="progress mb-4">
      <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
    </div>

    @elseif(($Dash->montantavance)==1 && ($Dash->apportezlesmatières)==1 && ($Dash->réalisation)==1 && ($Dash->teinture)==1 && ($Dash->fin)==0 )       

    <h4 class="text-xs font-weight-bold text-info text-uppercase mb-1">état d'avancement <span class="float-right">80%</span></h4>
    <div class="progress mb-4">
      <div class="progress-bar bg-info" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
    </div>

    @elseif(($Dash->montantavance)==1 && ($Dash->apportezlesmatières)==1 && ($Dash->réalisation)==1 && ($Dash->teinture)==1 && ($Dash->fin)==1 )       

    <h4 class="text-xs font-weight-bold text-success text-uppercase mb-1">état d'avancement <span class="float-right">Complete!</span></h4>
    <div class="progress">
      <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
    </div>


  </div>

</div>

@endif  

@endforeach

<center> <table  style = "width:5%" border="0" >
    <tr><td>{{$Dashs->links()}}</td></tr>
</table>
<center>
    
@endsection