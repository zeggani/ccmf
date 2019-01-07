@extends('layouts.app')
@section('content')
{{dump($client)}}
<div class="container-fluid" >
  <form action="{{route('clients.update',$client->id_clients)}}" autocomplete="false" method="post">
    <input type="hidden" name="_method" value="put">

    <input type="hidden" name="id_clients" value="{{$client->id_clients}}">


    @csrf
<div class="row">
  <div class="box box-solid bg-teal-gradient" style="background:#1d3c4e !important;color:white;">
              <div class="box-header ui-sortable-handle" style="cursor:color;">
                <i class="fa fa-th"></i>

                <h3 class="box-title">Statut : Appel</h3>

                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-sm" style="background:#1d3c4e !important;color:white;" data-widget="collapse"><i class="fa fa-minus"></i>
                  </button>
                  <!-- <button type="button" class="btn bg-teal btn-sm" data-widget="remove"><i class="fa fa-times"></i> -->
                  </button>
                </div>
              </div>
              <div class="box-body border-radius-none">
                <div class="container-fluid">
                   <div class="col-lg-6">
                      <div class="form-group" >
                            <div class="form-group-text">Créer le :</div>
                            <input name="datecreation" type="date" value="{{date('Y-m-d')}}" class="form-control form-control">
                      </div>
                   </div>
                   <div class="col-lg-6">
                     <div class="form-group" >
                           <div class="form-group-text">Par : {{Auth::user()->username}}</div>
                           <input name=""  value=" <?php echo e(Auth::user()->name); ?>" class="form-control form-control">
                     </div>
                   </div>
                </div>

        </div>
      </div>

     </div>
    </div>
  @csrf
  <div class="col-lg-8">
    <div class="box box-solid">
                <div class="box-header with-border" style="background:#e71f0d;color:white;">
                  <h3 class="box-title">Assuré</h3>

                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" style="color:white" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                  </div>
                </div>

                <div class="box-body">
                  <div class="row">
                     <!-- <div class="col-lg-3">
                            <select name="civilite" value="{{$client->civilite}}" class="form-control">
                               <option disabled value="">Civilité</option>
                               <option value="Mme">Mme</option>
                               <option value="Mlle">Mlle</option>
                               <option value="Mr">Mr</option>
                            </select>
                     </div> -->

                     <div class="col-lg-3">
                            <select name="civilite" id="civilite" value="{{$client->civilite}}" class="form-control">
                               <!-- <option value=""></option> -->
                               <option disabled value="">Civilité</option>
                               <option value="Mme">Mme</option>
                               <option value="Mlle">Mlle</option>
                               <option value="Mr">Mr</option>
                            </select>
                     </div>

                  <div class="col-lg-3">
                    <input name="prenom" value="{{$client->prenom}}" class="form-control">
                    <input type="hidden" name="createby" class="form-control" value="{{Auth::user()->name}}">
                    <input type="hidden" name="step" class="form-control" value="{{\Auth::user()->role->name}}">

                 </div>

                 <div class="col-lg-3">
                        <input name="nom" value="{{$client->nom}}" class="form-control">
                </div>

                    <div class="col-lg-3">
                      <input name="nomjf" value="{{$client->nomjf}}" class="form-control">
                    </div>

                  </div>
                  <br>
                  <div class="row">
                       <div class="col-lg-4">
                         <select name="situationfamil" value="{{$client->situationfamil}}" class="form-control">
                           <option value="Marie">Marié(e)</option>
                           <option value="celibataire">Célibataire</option>
                           <option value="convubin">Concubin(e)</option>
                           <option value="divorce">Divorcé(e)</option>
                           <option value="separe">Séparé(e)</option>
                           <option value="veuf">Veuf(ve)</option>
                           <option value="seul">Seul(e)</option>
                         </select>
                       </div>

                     <div class="col-lg-4">
                        <div class="form-group">
                           <!-- <input name="datenaiss" type="date" class="form-control form-control"> -->
                           <input name="datenaiss" type="date" value="{{$client->datenaiss}}" class="form-control">
                        </div>
                     </div>
                     <div class="col-lg-4">
                       <!-- <select name="regime" class="form-control form-control"> -->
                       <select name="regime" value="{{$client->regime}}" class=" input form-control">
                          <!-- <option  value=""></option> -->
                            <option disabled value="regime">Regime</option>
                            <option value="Alsacemoselle">Alsace Moselle</option>
                            <option value="Enseignant">Enseignant</option>
                            <option value="Etudiant">Etudiant</option>
                            <option value="Exploitantagricole">Exploitant Agricole</option>
                            <option value="Fonctionnaire">Fonctionnaire</option>
                            <option value="Retraiteagricole">Retraité Agricole</option>
                            <option value="Retraitesalarie">Retraité Salarie</option>
                            <option value="Retraitetns">Retraité TNS</option>
                            <option value="Salarie">Salarié</option>
                            <option value="Salarieagricole">Salarie Agricole</option>
                            <option value="Sansemploi">Sans Emploi</option>
                            <option value="tnsidependant">TNS Independant</option>
                         </select>
                       </div>

                  </div>
                  <div class="row">
                    <div class="col-lg-4">
                           <!-- <input type="text" pattern="^[a-zA-Z0-9]{15}$" class="form-control" id="nss" placeholder="N°SS"> -->
                           <input name="nss" value="{{$client->nss}}" class="form-control" placeholder="NSS">
                    </div>

                     <div class="col-lg-4">
                            <!-- <input type="text" pattern="^[a-zA-Z0-9]{10}$" class="form-control" id="noa" placeholder="NOA"> -->
                            <input name="noa" value="{{$client->noa}}" class="form-control" placeholder="NOA">
                    </div>

                     <div class="col-lg-4">
                            <!-- <input type="text" class="form-control" id="csp" placeholder="CSP"> -->
                            <input name="csp" value="{{$client->csp}}" class="form-control" placeholder="CSP">
                    </div>

                  </div>
                </div>
                <!-- /.box-body -->
    </div>
              <div class="box box-solid">
                          <div class="box-header with-border" style="background:#e71f0d;color:white;">
                            <h3 class="box-title">Conjoint</h3>

                            <div class="box-tools pull-right">
                              <button type="button" class="btn btn-box-tool" style="color:white" data-widget="collapse"><i class="fa fa-minus"></i>
                              </button>
                            </div>
                          </div>

                          <div class="box-body">
                                  <div class="row">
                                     <!-- <div class="col-lg-3">
                                              <select name="civilite_conjoint" value="{{$client->civilite_conjoint}}" class="form-control">

                                                 <option disabled value="">Civilité</option>
                                                 <option value="Mme">Mme</option>
                                                 <option value="Mlle">Mlle</option>
                                                 <option value="Mr">Mr</option>
                                              </select>
                                       </div> -->

                                       <div class="col-lg-3">
                                              <select name="civilite_conjoint" id="civilite_conjoint" value="{{$client->civilite_conjoint}}" class="form-control">
                                                 <!-- <option value=""></option> -->
                                                 <option disabled value="">Civilité</option>
                                                 <option value="Mme">Mme</option>
                                                 <option value="Mlle">Mlle</option>
                                                 <option value="Mr">Mr</option>
                                              </select>
                                       </div>

                                     <div class="col-lg-3">
                                         <input name="prenom_conjoint" value="{{$client->prenom_conjoint}}" class="form-control">
                                    </div>

                                     <div class="col-lg-3">
                                            <!-- <input type="text" class="form-control" id="nom_conjoint" placeholder="Nom de conjoint"> -->
                                            <input name="nom_conjoint" value="{{$client->nom_conjoint}}" class="form-control" placeholder="Nom">
                                    </div>

                                     <div class="col-lg-3">
                                            <!-- <input type="text" class="form-control" id="nomjf_conjoint" placeholder="NomJF de conjoint"> -->
                                            <input name="nomjf_conjoint" value="{{$client->nomjf_conjoint}}" class="form-control" placeholder="Nom JF">
                                    </div>

                                  </div>
                               <br>
                                  <div class="row">
                                    <div class="col-lg-6">
                                       <div class="form-group">
                                          <input name="datenaiss_conjoint" type="date" value="{{$client->datenaiss_conjoint}}" class="form-control">
                                       </div>
                                    </div>

                                     <div class="col-lg-6">
                                            <!-- <input type="text" pattern="^[a-zA-Z0-9]{15}$" class="form-control" id="nss_conjoint" placeholder="N°SS de conjoint(e)"> -->
                                            <input name="nss_conjoint" value="{{$client->nss_conjoint}}" class="form-control" placeholder="NSS">
                                     </div>
                                  </div>
                               <!-- </div> -->

                                  <div class="row">
                                    <div class="col-lg-4">
                                           <!-- <input type="text" pattern="^[a-zA-Z0-9]{10}$" class="form-control" id="noa_conjoint" placeholder="NOA de conjoint(e)"> -->
                                           <input name="noa_conjoint" value="{{$client->noa_conjoint}}" class="form-control" placeholder="NOA">
                                    </div>

                                     <div class="col-lg-4">
                                       <!-- <select name="regime_conjoint" class="form-control form-control"> -->
                                       <select name="regime_conjoint" value="{{$client->regime_conjoint}}" class="form-control">
                                            <option value=""></option>
                                            <option disabled value="">Regime</option>
                                            <option value="Alsacemoselle">Alsace Moselle</option>
                                            <option value="Enseignant">Enseignant</option>
                                            <option value="Etudiant">Etudiant</option>
                                            <option value="Exploitantagricole">Exploitant Agricole</option>
                                            <option value="Fonctionnaire">Fonctionnaire</option>
                                            <option value="Retraiteagricole">Retraité Agricole</option>
                                            <option value="Retraitesalarie">Retraité Salarie</option>
                                            <option value="Retraitetns">Retraité TNS</option>
                                            <option value="Salarie">Salarié</option>
                                            <option value="Salarieagricole">Salarie Agricole</option>
                                            <option value="Sansemploi">Sans Emploi</option>
                                            <option value="tnsidependant">TNS Independant</option>
                                         </select>
                                       </div>

                                       <div class="col-lg-4">
                                              <!-- <input type="text" class="form-control" id="csp_conjoint" placeholder="CSP de conjoint"> -->
                                              <input name="csp_conjoint" value="{{$client->csp_conjoint}}" class="form-control">
                                      </div>
                                  </div>
                          </div>
                          <!-- /.box-body -->
                        </div>
                        <div class="box box-solid" >
                                    <div class="box-header with-border" style="background:#e71f0d;color:white;">
                                      <h3 class="box-title">Enfants</h3>

                                      <div class="box-tools pull-right">
                                        <button type="button" class="btn btn-box-tool" style="color:white" data-widget="collapse"><i class="fa fa-minus"></i>
                                        </button>
                                      </div>
                                    </div>

                                  <div class="box-body">
                                    <div class="row">
                                      <div class="col-lg-3">
                                               <!-- <select name="sexe_enfant" class="input form-control"> -->
                                               <select name="sexe_enfant" value="{{$client->sexe_enfant}}" class="form-control">
                                                  <!-- <option value=""></option> -->
                                                  <option disabled value="">Sexe de l'enfant</option>
                                                  <option value="fille">Fille</option>
                                                  <option value="Gar">Garçon</option>
                                               </select>
                                        </div>

                                      <div class="col-lg-3">
                                             <!-- <input type="text" class="form-control" id="nom_enfants" placeholder="Nom d'enfant"> -->
                                             <input name="nom_enfants" value="{{$client->nom_enfants}}" class="form-control">
                                     </div>
                                      <div class="col-lg-3">
                                             <!-- <input type="text" class="form-control" id="prenom_conjoint" placeholder="Prenom d'enfant"> -->
                                             <input name="prenom_enfants" value="{{$client->prenom_enfants}}" class="form-control">
                                     </div>

                                      <div class="col-lg-3">
                                         <div class="form-group">
                                            <!-- <input name="datenaiss_enfant" type="date" class="form-control form-control"> -->
                                            <input name="datenaiss_enfant" type="date" value="{{$client->datenaiss_enfant}}" class="form-control">
                                         </div>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-lg-6">
                                             <!-- <input type="text" class="form-control" id="ayantdroit_enfant" placeholder="Ayant droit"> -->
                                             <input name="ayantdroit_enfant" value="{{$client->ayantdroit_enfant}}" class="form-control">
                                     </div>
                                      <div class="col-lg-6">
                                             <!-- <input type="text"  pattern="^[a-zA-Z0-9]{15}$" class="form-control" id="nss_enfant" placeholder="N°SS d'Enfant"> -->
                                             <input name="nss_enfant" value="{{$client->nss_enfant}}" class="form-control">
                                     </div>
                                    </div>
                                    </div>
                                  </div>

                                  <div class="box box-solid">
                                    <div class="box-header with-border" style="background:#e71f0d;color:white;">
                                        <h3 class="box-title">Commentaire</h3>
                                        <div class="box-tools pull-right">
                                          <button type="button" class="btn btn-box-tool" style="color:white" data-widget="collapse"><i class="fa fa-minus"></i>                                                  </button>
                                        </div>
                                    </div>
                                    <div class="box-body">
                                      <!-- <textarea name="commentaire" class="form-control form-control"></textarea> -->
                                      <textarea name="commentaire"  class="form-control">{{$client->commentaire}}</textarea>
                                    </div>
                                  <div class="container-fluid">
                                    <div class="col-lg-6">
                                       <div class="input-group">
                                          <div class="input-group-prepend ">
                                             <div class="input-group-text">Statut Fiche</div>
                                          </div>
                                          <select

                                           name="statutfiche" class="form-control">
                                             <option value="A">Appel</option>
                                             @if(Auth::user()->role && Auth::user()->role->name=="ADMIN"
                                             || Auth::user()->role && Auth::user()->role->name=="ADMINISTRATEUR"
                                             || Auth::user()->role && Auth::user()->role->name=="RESPONSABLES"
                                             || Auth::user()->role && Auth::user()->role->name=="CHEFPLATEAU"
                                             || Auth::user()->role && Auth::user()->role->name=="OPERATEURS")
                                             <option value="R">Rappel</option>
                                             <option value="EnAtt">En attente</option>
                                             <option value="Dec">Décisions</option>
                                             <option value="Prom">Promesses</option>
                                             <option value="Inj">Injoignables</option>
                                             <option value="InjPer">Injoignables permanents</option>
                                             <option value="FxNum">Faux Numéros</option>
                                             <option value="Intrbl">Intraitables</option>
                                             <option value="Doub">Doublons</option>
                                             <option value="Refu">Refus</option>
                                             <option value="Sign">Signés</option>
                                             <option value="Inst">Instance</option>
                                             <option value="SansEffet">Sans Effet</option>
                                             <option value="SansEffetResign">Sans effet Re-Signés</option>
                                             <option value="Souscr">Souscrits</option>
                                             <option value="InstanceCie">Instance Cie</option>
                                             <option value="SansEffetCie"> Sans Effet Cie</option>
                                             <option value="SECieReSigne">Re Cie Re-signé</option>
                                             <option value="EnCours">En Cours</option>
                                             <option value="Resilies">Résiliés</option>
                                             <option value="ResiliesR">Résiliers R</option>
                                             @endif
                                          </select>
                                      </div>

                                  </div>


                                  <div class="col-lg-6">
                                    <div class="input-group-prepend ">
                                       <div class="input-group-text">RDV</div>
                                    </div>
                                    <input name="lheure_client" id="lheure_client" type="date" class="form-control">
                                  </div>
                                  <br>
                                  <br>
                                  <br>
                                  <br>
                                  <div class="pull-right">
                                     <!-- <button class="btn" style="background:#e71f0d;color:white;" type="reset">Annuler</button>
                                     <button class="btn" style="background:#1d3c4e;color:white;" type="submit">Enregistrer</button> -->
                                     <!-- <button class="btn" style="background:#38c172;color:white;" type="submit">Enregistrer</button> -->
                                     <button class="btn btn-danger" type="reset">Annuler</button>
                                     <button class="btn btn-primary" type="submit">Modifier</button>
                                  </div>
                        <br>
                        <br>
                  </div>
                </div>
       </div>
          <div class="col-lg-4">
            <div class="box box-solid">
                        <div class="box-header with-border" style="background:#e71f0d;color:white;">
                          <h3 class="box-title">Coordonnées</h3>

                          <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" style="color:white" data-widget="collapse">
                              <i class="fa fa-minus"></i></button>
                          </div>
                        </div>
                        <div class="box-body">

                          <div class="form-group">
                            <label for="tel" class="col-sm-2 control-label">Tel1</label>

                            <div class="col-sm-10">
                              <!-- <input type="text" class="form-control" id="tel" placeholder="Tel"> -->
                              <input name="tel" value="{{$client->tel}}" class="form-control">
                            </div>
                          </div>

                             <div class="form-group">
                               <label for="tel2" class="col-sm-2 control-label">Tel2</label>

                               <div class="col-sm-10">
                                 <!-- <input type="text" class="form-control" id="tel2" placeholder="Tel 2"> -->
                                 <input name="tel2" value="{{$client->tel2}}" class="form-control">
                               </div>
                             </div>

                             <div class="form-group">
                               <label for="tel3" class="col-sm-2 control-label">Tel3</label>
                               <div class="col-sm-10">
                                 <!-- <input type="text" class="form-control" id="tel3" placeholder="Tel 3"> -->
                                 <input name="tel3" value="{{$client->tel3}}" class="form-control">
                               </div>
                             </div>

                             <div class="form-group">
                               <label for="email" class="col-sm-2 control-label">Email</label>
                               <div class="col-sm-10">
                                 <!-- <input type="text" class="form-control" id="email" placeholder="Example@gmail.com"> -->
                                 <input name="email" value="{{$client->email}}" class="form-control">
                               </div>
                             </div>

                             <div class="form-group">
                               <label for="adresse" class="col-sm-2 control-label">Adresse</label>
                               <div class="col-sm-10">
                                 <!-- <input type="text" class="form-control" id="adresse" placeholder="Adresse"> -->
                                 <input name="adresse" value="{{$client->adresse}}" class="form-control">
                               </div>
                             </div>

                             <div class="form-group">
                               <label for="cp_client" class="col-sm-2 control-label">CP</label>
                               <div class="col-sm-10">
                                 <!-- <input type="text" class="form-control" id="cp_client" placeholder="Code Postal"> -->
                                 <input name="cp_client" value="{{$client->cp_client}}" class="form-control">
                               </div>
                             </div>

                             <div class="form-group">
                               <label for="ville" class="col-sm-2 control-label">Ville</label>
                               <div class="col-sm-10">
                                 <!-- <input type="text" class="form-control" id="ville" placeholder="Ville"> -->
                                 <input name="ville" value="{{$client->ville}}" class="form-control">

                               </div>
                             </div>
                      </div>
                </div>

            <div class="alert" style="background:#1d3c4e !important;color:white;margin:5px;" >
              <div class="row">
                <div class="form-group">
                  <label class="col-sm-4 control-label">Effet :</label>
                  <div class="col-sm-8">
                    <input value="{{date('Y-m-d')}}" type="date" class="form-control">
                  </div>
                </div>
              </div>
            </div>

              <div class="box box-solid">
                          <div class="box-header with-border" style="background:#e71f0d;color:white;">
                            <h3 class="box-title">A résilier :</h3>

                            <div class="box-tools pull-right">
                              <button type="button" class="btn btn-box-tool" style="color:white" data-widget="collapse"><i class="fa fa-minus"></i>
                              </button>
                            </div>
                          </div>

            <div class="box-body">
                <div class="form-group">
                  <label for="Echeance" class="col-sm-2 control-label">Echeance </label>

                  <div class="col-sm-10">
                    <input type="date" name="echeance_resilier" class="form-control" id="echeance_resilier" placeholder="Echeance">
                  </div>
                </div>

                <div class="form-group">
                  <label for="compagnie_resilier" class="col-sm-2 control-label">Cie</label>

                  <div class="col-sm-10">
                    <!-- <input type="text" class="form-control" id="compagnie_resilier"  name="compagnie_resilier" placeholder="Cie"> -->
                    <input name="compagnie_resilier" value="{{$client->compagnie_resilier}}" class="form-control">
                  </div>
                </div>

                <div class="form-group">
                  <label for="Npolice_resilier" class="col-sm-2 control-label">N°Police</label>

                  <div class="col-sm-10">
                    <!-- <input type="text" class="form-control" id="Npolice_resilier"  name="Npolice_resilier" placeholder="N°Police"> -->
                    <input name="Npolice_resilier" value="{{$client->Npolice_resilier}}" class="form-control">
                  </div>
                </div>

                <div class="form-group">
                  <label for="adresse_resilier" class="col-sm-2 control-label">Adresse</label>

                  <div class="col-sm-10">
                    <!-- <input type="text" class="form-control" id="adresse_resilier"  name="adresse_resilier" placeholder="Adresse"> -->
                    <input name="adresse_resilier" value="{{$client->adresse_resilier}}" class="form-control">
                  </div>
                </div>

            <div class="col">
                <div class="form-group">
                  <label for="cp_resilier" class="col-sm-2 control-label">CP</label>

                  <div class="col-sm-10">
                    <!-- <input type="text" class="form-control" id="cp_resilier"  name="cp_resilier" placeholder="CP"> -->
                    <input name="cp_resilier" value="{{$client->cp_resilier}}" class="form-control">
                  </div>

                  <label for="ville_resilier" class="col-sm-2 control-label">Ville</label>
                  <div class="col-sm-10">
                    <!-- <input type="text" class="form-control" id="ville_resilier"  name="ville_resilier" placeholder="Ville"> -->
                    <input name="ville_resilier" value="{{$client->ville_resilier}}" class="form-control">
                  </div>
                </div>
            </div>

            <div class="form-group">
              <label for="tel_resilier" class="col-sm-2 control-label">Tel</label>

              <div class="col-sm-10">
                <!-- <input type="text" class="form-control" id="tel_resilier" placeholder="Tel"> -->
                <input name="tel_resilier" value="{{$client->tel_resilier}}" class="form-control">
              </div>
            </div>

            <div class="form-group">
              <label for="aunom_resilier" class="col-sm-3 control-label">Au nom de</label>

              <div class="col-sm-9">
                <!-- <input type="text" class="form-control" id="aunom_resilier" placeholder="Au nom de"> -->
                <input name="aunom_resilier" value="{{$client->aunom_resilier}}" class="form-control">
              </div>
            </div>
           </div>
          </div>
         </div>
  <!-- </div> -->
@if(Auth::user()->role && Auth::user()->role->name=="ADMIN"
|| Auth::user()->role && Auth::user()->role->name=="ADMINISTRATEUR"
|| Auth::user()->role && Auth::user()->role->name=="RESPONSABLES"
|| Auth::user()->role && Auth::user()->role->name=="CHEFPLATEAU"
|| Auth::user()->role && Auth::user()->role->name=="OPERATEURS")
  <div class="col-lg-12">
    <div class="box box-solid">
                <div class="box-header with-border"  style="background:#1d3c4e !important;color:white;">
                  <h3 class="box-title">Paiement</h3>
                  <div class="box-tools pull-right">



                                    <select
                    @if(!empty($client))
                                    onchange="

                    switch(this.value){
                      case 'P':
                      $('#paiement-civilite').val('{{$client->civilite}}')
                      $('#paiement-nom').val('{{$client->nom}}')
                      $('#paiement-prenom').val('{{$client->prenom}}')
                      $('#paiement-adresse').val('{{$client->adresse}}')
                      $('#paiement-cp').val('{{$client->cp_client}}')
                      $('#paiement-ville').val('{{$client->ville}}')
                        break;

                        case 'C':
                        $('#paiement-nom').val('{{$client->nom_conjoint}}')
                        $('#paiement-prenom').val('{{$client->prenom_conjoint}}')
                        $('#paiement-adresse').val('{{$client->adresse_conjoint}}')
                        $('#paiement-cp').val('{{$client->cp_conjoint}}')
                        $('#paiement-ville').val('{{$client->ville_conjoint}}')
                          break;

                          case 'A':
                          $('#paiement-nom').val('')
                          $('#paiement-prenom').val('')
                          $('#paiement-adresse').val('')
                          $('#paiement-cp').val('')
                          $('#paiement-ville').val('')
                            break;
                    }

                                    "

                    @endif class="tn btn-box-tool"
                                    >
                                      <option value="P">Prospect</option>
                                      <option value="C">Conjoint</option>
                                      <option value="A">Autre</option>
                                    </select>

                    <button type="button" class="btn btn-box-tool" style="color:white" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                  </div>
                </div>

                <div class="box-body">
                  <div class="row">
                    <div class="col-lg-3">
                           <input type="text" class="form-control" name="aunomde_paiement" id="aunomde_paiement" placeholder="Au nom de">
                    </div>

                     <div class="col-lg-3">
                            <select name="civilite_paiement" id="paiement-civilite" value="{{$client->civilite_paiement}}" class="form-control">
                               <!-- <option value=""></option> -->
                               <option disabled value="">Civilité</option>
                               <option value="Mme">Mme</option>
                               <option value="Mlle">Mlle</option>
                               <option value="Mr">Mr</option>
                            </select>
                     </div>

                     <div class="col-lg-6">
                            <input name="IBAN" value="{{$client->IBAN}}" class="form-control" placeholder="IBAN">
                    </div>
                   </div>
                 </div>

                 <div class="box-body">
                   <div class="row">
                     <div class="col-lg-3">
                            <input name="nom_paiement" id="paiement-nom" value="{{$client->nom}}" class="form-control" placeholder="Nom">
                     </div>
                     <div class="col-lg-3">
                            <input name="prenom_paiement" id="paiement-prenom" value="{{$client->prenom}}" class="form-control" placeholder="Prenom">
                     </div>
                     <div class="col-lg-3">
                            <input name="banque" value="{{$client->banque}}" class="form-control" placeholder="Banque">
                     </div>
                     <div class="col-lg-3">
                            <input name="bicbanque" value="{{$client->bicbanque}}" class="form-control" placeholder="BIC Banque">
                     </div>
                   </div>

                   <div class="box-body">
                     <div class="row">
                       <div class="col-lg-6">
                         <textarea name="adresse_paiement" autocomplete="false" id="paiement-adresse" value="{{$client->adresse}}" placeholder="Adresse" class="form-control"></textarea>
                       </div>
                       <div class="col-lg-6">
                         <textarea name="adresseBanque" placeholder="Adresse de la Banque" class="form-control"></textarea>
                       </div>
                     </div>
                   </div>

                   <div class="box-body">
                     <div class="row">
                       <div class="col-lg-3">
                         <input name="cp_paiement" id="paiement-cp" value="{{$client->cp_client}}" class="form-control" placeholder="CP">
                       </div>
                       <div class="col-lg-3">
                         <input name="ville_paiement" id="paiement-ville" value="{{$client->ville}}" class="form-control" placeholder="Ville">
                       </div>
                       <div class="col-lg-3">
                         <input name="cpbanque" value="{{$client->cpbanque}}" class="form-control" placeholder="CP Banque">
                       </div>
                       <div class="col-lg-3">
                         <input name="villebanque" value="{{$client->villebanque}}" class="form-control" placeholder="Ville banque">
                       </div>
                     </div>
                   </div>
                 </div>
    </div>
  </div>

@endif
</form>
@endsection
