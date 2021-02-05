@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
               
              <h4 style="color: red"> Devis N° :  </h4>  {{$devis->referenceDevis}} 
               Fait le : {{$devis->dateDevis}}<br/>
               Date effet : {{$devis->dateEffet}}<br/>
               <h4 style="color:red">Votre animal : </h4> 
               type : {{$devis->animal->type}} <br/>
               nom : {{$devis->animal->nom}}  <br/>
               sexe : {{$devis->animal->sexe}} <br/>
               dateNaissance : {{$devis->animal->dateNaissance}} <br/>
               race : {{$devis->animal->race}} <br/>
               <h4 style="color:red">Votre formule : </h4> 
               prix Mensuel : {{$devis->formule->prixMensuel}} € par mois<br/>
               délai de carence accident : {{$devis->formule->carenceAccident}} J <br/>
               délai de carence maladie : {{$devis->formule->carenceMaladie}} J <br/>
               plafond annuel : {{$devis->formule->plafondAnnuel}} €<br/>
               forfait prévention : {{$devis->formule->forfaitPrevention}} %<br/>


            </div>
        </div>
    </div>
</div>
@endsection
