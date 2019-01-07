@extends('layouts.app')
@section('content')

<div class="container-fluid" >
  <form class="form-horizontal" action="{{route('clients.store')}}"method="post" >
    @csrf
<div class="row">
  <div class="box box-solid bg-teal-gradient" style="background:#1d3c4e !important;color:white;">
              <div class="box-header ui-sortable-handle" style="cursor:color;">
                <i class="fa fa-th"></i>

                <h3 class="box-title">Statut : Appel</h3>

                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-sm" style="background:#1d3c4e !important;color:white;" data-widget="collapse"><i class="fa fa-minus"></i></button>
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
                     <div class="col-lg-3">
                            <select name="civilite" id="civilite" class="input form-control">
                               <!-- <option value=""></option> -->
                               <option disabled value="">Civilité</option>
                               <option value="Mme">Mme</option>
                               <option value="Mlle">Mlle</option>
                               <option value="Mr">Mr</option>
                            </select>
                     </div>

                     <div class="col-lg-3">
                        <input type="text" name="prenom" class="form-control" id="prenom" placeholder="Prenom">
                        <input type="hidden" name="createby" class="form-control" value="{{Auth::user()->name}}">
                        <input type="hidden" name="step" class="form-control" value="{{\Auth::user()->role->name}}">
                      </div>

                      <div class="col-lg-3">
                              <input type="text" name="nom" class="form-control" id="nom" placeholder="Nom">
                      </div>

                      <div class="col-lg-3">
                        <input type="text" class="form-control" name="nomjf" id="nomjf" placeholder="NomJf" >
                      </div>

                  </div>
                  <br>
                  <div class="row">
                       <div class="col-lg-4">
                         <select name="situationfamil" id="situationfamil" class="form-control">
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
                           <input name="datenaiss" type="date" class="form-control form-control">
                        </div>
                     </div>
                     <div class="col-lg-4">
                       <select name="regime" id="regime" class="form-control form-control">
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
                           <input type="text" pattern="^[a-zA-Z0-9]{15}$" class="form-control" name="nss" id="nss" placeholder="N°SS">
                    </div>

                     <div class="col-lg-4">
                            <input type="text" pattern="^[a-zA-Z0-9]{10}$" class="form-control" name="noa" id="noa" placeholder="NOA">
                    </div>

                     <div class="col-lg-4">
                            <input type="text" class="form-control" id="csp" name="csp" placeholder="CSP">
                    </div>

                  </div>
                </div>
    </div>
              <div class="box box-solid">
                          <div class="box-header with-border" style="background:#e71f0d;color:white;">
                            <h3 class="box-title">Conjoint</h3>

                            <div class="box-tools pull-right">
                              <button type="button" class="btn btn-box-tool" style="color:white" data-widget="collapse"><i class="fa fa-minus"></i>
                              </button>
                            </div>
                          </div>
                          <!-- /.box-header -->
                          <div class="box-body">
                                  <div class="row">
                                     <div class="col-lg-3">
                                              <select name="civilite_conjoint" class="input form-control">
                                                <option value=""></option>
                                                 <option disabled value="">Civilité</option>
                                                 <option value="Mme">Mme</option>
                                                 <option value="Mlle">Mlle</option>
                                                 <option value="Mr">Mr</option>
                                              </select>
                                       </div>

                                     <div class="col-lg-3">
                                            <input type="text" class="form-control" name="prenom_conjoint" id="prenom_conjoint" placeholder="Prenom de conjoint">
                                    </div>

                                     <div class="col-lg-3">
                                            <input type="text" class="form-control" name="nom_conjoint" id="nom_conjoint" placeholder="Nom de conjoint">
                                    </div>

                                     <div class="col-lg-3">
                                            <input type="text" class="form-control" name="nomjf_conjoint" id="nomjf_conjoint" placeholder="NomJF de conjoint">
                                    </div>

                                  </div>
                               <br>
                                  <div class="row">
                                    <div class="col-lg-6">
                                       <div class="form-group">
                                          <input name="datenaiss_conjoint" type="date" class="form-control form-control">
                                       </div>
                                    </div>

                                     <div class="col-lg-6">
                                            <input type="text" pattern="^[a-zA-Z0-9]{15}$" class="form-control" id="nss_conjoint" placeholder="N°SS de conjoint(e)">
                                     </div>
                                  </div>

                                  <div class="row">
                                    <div class="col-lg-4">
                                           <input type="text" pattern="^[a-zA-Z0-9]{10}$" class="form-control" name="noa_conjoint" id="noa_conjoint" placeholder="NOA de conjoint(e)">
                                    </div>

                                     <div class="col-lg-4">
                                       <select name="regime_conjoint" class="form-control form-control">
                                            <!-- <option value=""></option> -->
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
                                              <input type="text" class="form-control" name="csp_conjoint" id="csp_conjoint" placeholder="CSP de conjoint">
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
                                      <!-- /.box-tools -->
                                    </div>
                                    <!-- /.box-header -->
                                  <div class="box-body">
                                    <div class="row">
                                      <div class="col-lg-3">
                                               <select name="sexe_enfant" id="sexe_enfant" class="input form-control">
                                                  <!-- <option value=""></option> -->
                                                  <option disabled value="">Sexe de l'enfant</option>
                                                  <option value="fille">Fille</option>
                                                  <option value="Gar">Garçon</option>
                                               </select>
                                        </div>

                                      <div class="col-lg-3">
                                             <input type="text" class="form-control" name="nom_enfants" id="nom_enfants" placeholder="Nom d'enfant">
                                     </div>

                                      <div class="col-lg-3">
                                             <input type="text" class="form-control" name="prenom_enfants" id="prenom_enfants" placeholder="Prenom d'enfant">
                                     </div>

                                      <div class="col-lg-3">
                                         <div class="form-group">
                                            <input name="datenaiss_enfant" type="date" class="form-control form-control">
                                         </div>
                                      </div>

                                    </div>

                                    <div class="row">
                                      <div class="col-lg-6">
                                             <input type="text" class="form-control" name="ayantdroit_enfant" id="ayantdroit_enfant" placeholder="Ayant droit">
                                     </div>

                                      <div class="col-lg-6">
                                             <input type="text"  pattern="^[a-zA-Z0-9]{15}$" class="form-control" name="nss_enfant" id="nss_enfant" placeholder="N°SS d'Enfant">
                                     </div>
                                    </div>

                                    </div>
                                    <!-- /.box-body -->
                                  </div>
                                  <div class="box box-solid">
                                    <div class="box-header with-border" style="background:#e71f0d;color:white;">
                                        <h3 class="box-title">Commentaire</h3>
                                        <div class="box-tools pull-right">
                                          <button type="button" class="btn btn-box-tool" style="color:white" data-widget="collapse"><i class="fa fa-minus"></i>                                                  </button>
                                        </div>
                                    </div>
                                    <div class="box-body">
                                      <textarea name="commentaire" class="form-control form-control"></textarea>
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
                                     <button class="btn" style="background:#e71f0d;color:white;" type="reset">Annuler</button>
                                     <button class="btn" style="background:#1d3c4e;color:white;" type="submit">Enregistrer</button>
                                     <!-- <button class="btn" style="background:#38c172;color:white;" type="submit">Enregistrer</button> -->
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
                              <input type="text" name="tel" class="form-control" id="tel" placeholder="Tel">
                            </div>
                          </div>

                             <div class="form-group">
                               <label for="tel2" class="col-sm-2 control-label">Tel2</label>

                               <div class="col-sm-10">
                                 <input type="text" name="tel2" class="form-control" id="tel2" placeholder="Tel 2">
                               </div>
                             </div>

                             <div class="form-group">
                               <label for="tel3" class="col-sm-2 control-label">Tel3</label>
                               <div class="col-sm-10">
                                 <input type="text" name="tel3" class="form-control" id="tel3" placeholder="Tel 3">
                               </div>
                             </div>

                             <div class="form-group">
                               <label for="email" class="col-sm-2 control-label">Email</label>
                               <div class="col-sm-10">
                                 <input type="text" name="email" class="form-control" id="email" placeholder="Example@gmail.com">
                               </div>
                             </div>

                             <div class="form-group">
                               <label for="adresse" class="col-sm-2 control-label">Adresse</label>
                               <div class="col-sm-10">
                                 <input type="text" name="adresse" class="form-control" id="adresse" placeholder="Adresse">
                               </div>
                             </div>

                             <div class="form-group">
                               <label for="cp_client" class="col-sm-2 control-label">CP</label>
                               <div class="col-sm-10">
                                 <input type="text" name="cp_client" class="form-control" id="cp_client" placeholder="Code Postal">
                               </div>
                             </div>

                             <div class="form-group">
                               <label for="ville" class="col-sm-2 control-label">Ville</label>
                               <div class="col-sm-10">
                                 <input type="text" name="ville" class="form-control" id="ville" placeholder="Ville">
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
                    <input type="text" name="compagnie_resilier" class="form-control" id="compagnie_resilier"  name="compagnie_resilier" placeholder="Cie">
                  </div>
                </div>

                <div class="form-group">
                  <label for="Npolice_resilier" class="col-sm-2 control-label">N°Police</label>

                  <div class="col-sm-10">
                    <input type="text" name="Npolice_resilier" class="form-control" id="Npolice_resilier"  name="compagnie_resilier" placeholder="N°Police">
                  </div>
                </div>

                <div class="form-group">
                  <label for="adresse_resilier" class="col-sm-2 control-label">Adresse</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="adresse_resilier"  name="adresse_resilier" placeholder="Adresse">
                  </div>
                </div>

            <div class="col">
                <div class="form-group">
                  <label for="cp_resilier" class="col-sm-2 control-label">CP</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="cp_resilier"  name="cp_resilier" placeholder="CP">
                  </div>

                  <label for="ville_resilier" class="col-sm-2 control-label">Ville</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="ville_resilier"  name="ville_resilier" placeholder="Ville">
                  </div>
                </div>
            </div>

            <div class="form-group">
              <label for="tel_resilier" class="col-sm-2 control-label">Tel</label>

              <div class="col-sm-10">
                <input type="text" class="form-control" name="tel_resilier" id="tel_resilier" placeholder="Tel">
              </div>
            </div>

            <div class="form-group">
              <label for="aunom_resilier" class="col-sm-3 control-label">Au nom de</label>

              <div class="col-sm-9">
                <input type="text" class="form-control" name="aunom_resilier" id="aunom_resilier" placeholder="Au nom de">
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
                    <button type="button" class="btn btn-box-tool" style="color:white" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div>
                </div>

                <div class="box-body">
                  <div class="row">
                    <div class="col-lg-3">
                           <input type="text" class="form-control" name="aunomde_paiement" id="aunomde_paiement" placeholder="Au nom de">
                    </div>

                     <div class="col-lg-3">
                            <select name="civilite_paiement" class="input form-control">
                               <!-- <option value=""></option> -->
                               <option disabled value="">Civilité</option>
                               <option value="Mme">Mme</option>
                               <option value="Mlle">Mlle</option>
                               <option value="Mr">Mr</option>
                            </select>
                     </div>

                     <div class="col-lg-6">
                            <input type="text" class="form-control" name="IBAN" id="IBAN" placeholder="IBAN">
                    </div>
                   </div>
                 </div>

                 <div class="box-body">
                   <div class="row">
                     <div class="col-lg-3">
                            <input type="text" class="form-control" name="nom_paiement" id="nom_paiement" placeholder="Nom">
                     </div>
                     <div class="col-lg-3">
                            <input type="text" class="form-control" name="prenom_paiement"  id="prenom_paiement" placeholder="Prenom">
                     </div>
                     <div class="col-lg-3">
                            <input type="text" class="form-control" name="banque" id="banque" placeholder="Banque">
                     </div>
                     <div class="col-lg-3">
                            <input type="text" class="form-control" name="bicbanque" id="bicbanque" placeholder="BIC">
                     </div>
                   </div>

                   <div class="box-body">
                     <div class="row">
                       <div class="col-lg-6">
                         <textarea  placeholder="Adresse" name="adresse_paiement" class="form-control form-control"></textarea>
                       </div>
                       <div class="col-lg-6">
                         <textarea name="adresseBanque" placeholder="Adresse de la Banque" class="form-control from-control"></textarea>
                       </div>
                     </div>
                   </div>

                   <div class="box-body">
                     <div class="row">
                       <div class="col-lg-3">
                         <input type="text" class="form-control" name="cp_paiement" id="cp_paiement" placeholder="CP">
                       </div>
                       <div class="col-lg-3">
                         <input type="text" class="form-control" name="ville_paiement"  id="ville_paiement" placeholder="Ville">
                       </div>
                       <div class="col-lg-3">
                         <input type="text" class="form-control" name="cpbanque" id="cpbanque" placeholder="CP">
                       </div>
                       <div class="col-lg-3">
                         <input type="text" class="form-control" name="villebanque" id="villebanque" placeholder="Ville de Banque">
                       </div>
                     </div>
                   </div>
                 </div>
    </div>
  </div>

  <!-- @if(Auth::user()->role && Auth::user()->role->name=="ADMIN" || Auth::user()->role && Auth::user()->role->name=="ADMINISTRATEUR" )
  <div class="col-lg-12">
    <div class="box box-solid">
                <div class="box-header with-border"  style="background:#1d3c4e !important;color:white;">
                  <h3 class="box-title">Tarificateur</h3>
                  <div class="box-tools pull-right">
                    <button type="button" class="btn" style="color:red" data-widget="collapse">Devoir de conseil</button>
                    <button type="button" class="btn" style="color:red" data-widget="collapse">Propositions</button>
                    <button type="button" class="btn btn-box-tool" style="color:white" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                  </div>
                </div>
                <div class="box-body">
                  <div class="box-tools pull-left ">
                    <button type="button" class="btn " style="background:#68b869;color:#1d3c4e;margin:10%;padding:20px;"
                    data-widget="collapse">Complémentaire santé</button>
                  </div>
                  <div class="row">
                     <table style="width:156%">
                       <tr>
                          <th>Cie</th>
                          <th>Gamme</th>
                          <th>TG CG BA</th>
                      </tr>
                    </table>
                  </div>

                </div>
    </div>
  </div>
@endif -->
@endif

</form>


@endsection
