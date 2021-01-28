@extends('Layouts.app4')
@section('client')

<style>
ol.progtrckr {
    margin: 0;
    padding: 0;
    list-style-type none;
}

ol.progtrckr li {
    display: inline-block;
    text-align: center;
    line-height: 3em;
}

ol.progtrckr[data-progtrckr-steps="2"] li { width: 49%; }
ol.progtrckr[data-progtrckr-steps="3"] li { width: 33%; }
ol.progtrckr[data-progtrckr-steps="4"] li { width: 24%; }
ol.progtrckr[data-progtrckr-steps="5"] li { width: 19%; }
ol.progtrckr[data-progtrckr-steps="6"] li { width: 16%; }
ol.progtrckr[data-progtrckr-steps="7"] li { width: 14%; }
ol.progtrckr[data-progtrckr-steps="8"] li { width: 12%; }
ol.progtrckr[data-progtrckr-steps="9"] li { width: 11%; }

ol.progtrckr li.progtrckr-done {
    color: #0000FF;
    border-bottom: 4px solid #0000FF;
}
ol.progtrckr li.progtrckr-todo {
    color: silver; 
    border-bottom: 4px solid silver;
}

ol.progtrckr li:after {
    content: "\00a0\00a0";
}
ol.progtrckr li:before {
    position: relative;
    bottom: -2.5em;
    float: left;
    left: 50%;
    line-height: 1em;
}
ol.progtrckr li.progtrckr-done:before {
    content: "\2713";
    color: white;
    background-color: #0000FF;
    height: 1.2em;
    width: 1.2em;
    line-height: 1.2em;
    border: none;
    border-radius: 1.2em;
}
ol.progtrckr li.progtrckr-todo:before {
    content: "\039F";
    color: silver;
    background-color: white;
    font-size: 1.5em;
    bottom: -1.6em;
}
</style>

<center><h5><p class="font-weight-bold text-primary"><b><u>Suivez votre commande :</u> {{$com->id}}</P></h5></center>

        <br><br>
    <center> <table  style = "width:95%" border=0>
        <tr>
                <td style = "width:16%" align="center" ><b>numéro de Facture : </b>{{$com->facture->id}}   </td>
                <td style = "width:16%" align="center"><b>nom de client :</b>  {{$com->facture->client->nom}}</td>   
                <td style = "width:16%" align="center"><b>type de produit :</b> {{$com->facture->produit->type}}</td>   
        </tr>
    </table>
        <br><br><br><br><br><br><br>

        @if(($com->montantavance)==0 && ($com->apportezlesmatières)==0 && ($com->réalisation)==0 && ($com->teinture)==0 && ($com->fin)==0 )       
        <ol class="progtrckr" data-progtrckr-steps="5">
        <li class="progtrckr-todo">Montant avance</li><!--
        --><li class="progtrckr-todo">Apportez les matières</li><!--
        --><li class="progtrckr-todo">Réalisation</li><!--
        --><li class="progtrckr-todo">Teinture</li><!--
        --><li class="progtrckr-todo">fin</li>
        </ol> 
        
        @elseif(($com->montantavance)==1 && ($com->apportezlesmatières)==0 && ($com->réalisation)==0 && ($com->teinture)==0 && ($com->fin)==0 )       
        <ol class="progtrckr" data-progtrckr-steps="5">
            <li class="progtrckr-done">Montant avance</li><!--
            --><li class="progtrckr-todo">Apportez les matières</li><!--
            --><li class="progtrckr-todo">Réalisation</li><!--
            --><li class="progtrckr-todo">Teinture</li><!--
            --><li class="progtrckr-todo">fin</li>
            </ol> 
        
            @elseif(($com->montantavance)==1 && ($com->apportezlesmatières)==1 && ($com->réalisation)==0 && ($com->teinture)==0 && ($com->fin)==0 )       
            <ol class="progtrckr" data-progtrckr-steps="5">
                <li class="progtrckr-done">Montant avance</li><!--
                --><li class="progtrckr-done">Apportez les matières</li><!--
                --><li class="progtrckr-todo">Réalisation</li><!--
                --><li class="progtrckr-todo">Teinture</li><!--
                --><li class="progtrckr-todo">fin</li>
                </ol> 
        
                @elseif(($com->montantavance)==1 && ($com->apportezlesmatières)==1 && ($com->réalisation)==1 && ($com->teinture)==0 && ($com->fin)==0 )       
                <ol class="progtrckr" data-progtrckr-steps="5">
                    <li class="progtrckr-done">Montant avance</li><!--
                    --><li class="progtrckr-done">Apportez les matières</li><!--
                    --><li class="progtrckr-done">Réalisation</li><!--
                    --><li class="progtrckr-todo">Teinture</li><!--
                    --><li class="progtrckr-todo">fin</li>
                    </ol> 
        
                    @elseif(($com->montantavance)==1 && ($com->apportezlesmatières)==1 && ($com->réalisation)==1 && ($com->teinture)==1 && ($com->fin)==0 )       
                    <ol class="progtrckr" data-progtrckr-steps="5">
                        <li class="progtrckr-done">Montant avance</li><!--
                        --><li class="progtrckr-done">Apportez les matières</li><!--
                        --><li class="progtrckr-done">Réalisation</li><!--
                        --><li class="progtrckr-done">Teinture</li><!--
                        --><li class="progtrckr-todo">fin</li>
                        </ol> 
        

                        @elseif(($com->montantavance)==1 && ($com->apportezlesmatières)==1 && ($com->réalisation)==1 && ($com->teinture)==1 && ($com->fin)==1 )       
                        <ol class="progtrckr" data-progtrckr-steps="5">
                            <li class="progtrckr-done">Montant avance</li><!--
                            --><li class="progtrckr-done">Apportez les matières</li><!--
                            --><li class="progtrckr-done">Réalisation</li><!--
                            --><li class="progtrckr-done">Teinture</li><!--
                            --><li class="progtrckr-done">fin</li>
                            </ol>   
        
                                <br><br><br><br>
                      <center>  <h4><b> Votre demande est terminée.</b><h4><br>
                    Vous pouvez venir prendre votre commande et payer le reste: {{$com->facture->produit->totale*75/100}}DH
                                    


                        </center>

        @endif  
         



        <br><br><br><br><br> 
        <center> <table  style = "width:95%" border=0>
                  <tr>
                    <td style = "width:16%" align="center" >pour d'autres informations, contacter-nous
                    
                    
                    </td>
                    </tr>
        </table>
        </center>







@endsection