@extends('layouts.app')
@section('content')
<div class="row">
   <div class="card">
      <div class="card-header" style="background:#38c172;color:white;text-align:center;">
         <form class="form-inline my-2 my-lg-0">
            Créer une fiche
         </form>
      </div>
      <div class="card-body">
         <form action="{{route('clients.store')}}" method="post" >
            @csrf
            <div class="alert alert-dark" style="background:#1d3c4e;color:white;margin:5px;" role="alert">
               <strong  style="font-size:14px" > Statut : Appel</strong>
            </div>
            <div class="row">
               <div class="col-lg-8">
                  <div class="input-group" style="margin:3px;">
                     <div class="input-group-prepend">
                        <div class="input-group-text">Créer le :</div>
                        <input name="datecreation" type="date" value="{{date('Y-m-d')}}" class="form-control form-control">
                        <div class="input-group-text">Par : {{Auth::user()->username}}</div>
                        <input name=""  value=" <?php echo e(Auth::user()->name); ?>" class="form-control form-control">
                     </div>
                  </div>
               </div>
            </div>
            <!-- ////////////////////////////////////////////////////// Partie client /////////////////////////////////-->
            <div class="row">
               <div class="col-lg-8">
                  <div class="alert alert-dark" style="background:#0f7ea3;color:white;margin:3px"  role="alert">
                     <strong  style="font-size:14px" > Assuré : </strong>
                  </div>
                  <div class="row">
                     <div class="col">
                        <!-- <label  style="font-size:12px" > Civilié</label> -->
                        <div class="input-group" style="margin:3px;width:89%;">
                           <div class="input-group-prepend">
                              <div class="input-group-text">   Civilité</div>
                           </div>
                           <select name="civilite" class="form-control">
                              <option value=""></option>
                              <option value="Mme">Mme</option>
                              <option value="Mlle">Mlle</option>
                              <option value="Mr">Mr</option>
                           </select>
                        </div>
                     </div>
                     <div class="col">
                        <div class="input-group" style="margin:3px;">
                           <div class="input-group-prepend ">
                              <div class="input-group-text">   Prenom</div>
                           </div>
                           <input name="prenom" required class="form-control">
                        </div>
                     </div>
                     <div class="col">
                        <div class="input-group" style="margin:3px;">
                           <div class="input-group-prepend ">
                              <div class="input-group-text">Nom</div>
                           </div>
                           <input name="nom" required class="form-control">
                        </div>
                     </div>
                     <div class="col">
                        <div class="input-group" style="margin:3px;">
                           <div class="input-group-prepend ">
                              <div class="input-group-text">Nom JF</div>
                           </div>
                           <input name="nomjf" required class="form-control">
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col">
                        <div class="input-group" style="margin:3px;width:100%">
                           <div class="input-group-prepend">
                              <div class="input-group-text">Sit.Fam</div>
                           </div>
                           <select name="situationfamil" class="form-control">
                              <option value=""></option>
                              <option value="d">Marié(e)</option>
                              <option value="c">Calibataire</option>
                              <option value="con">Concubin(e)</option>
                              <option value="d">Divorcé(e)</option>
                              <option value="d">Séparé(e)</option>
                              <option value="v">Veuf(ve)</option>
                              <option value="s">Seul(e)</option>
                           </select>
                        </div>
                     </div>
                     <div class="col">
                        <div class="input-group" style="margin:3px;width:100%">
                           <div class="input-group-prepend ">
                              <div class="input-group-text">Né(e) le</div>
                           </div>
                           <input name="datenaiss" type="date" class="form-control form-control">
                        </div>
                     </div>
                     <div class="col">
                        <div class="input-group" style="margin:3px;">
                           <div class="input-group-prepend">
                              <div class="input-group-text">Régime</div>
                           </div>
                           <select name="regime" class="form-control form-control">
                              <option value=""></option>
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
                  </div>
                  <div class="row">
                     <div class="col">
                        <div class="input-group" style="margin:3px;">
                           <div class="input-group-prepend ">
                              <div class="input-group-text">N°SS</div>
                           </div>
                           <input pattern="^[a-zA-Z0-9]{16}$" name="nss" class="form-control form-control">
                        </div>
                     </div>
                     <div class="col">
                        <div class="input-group" style="width:100%;">
                           <div class="input-group-prepend ">
                              <div class="input-group-text">NOA</div>
                           </div>
                           <input pattern="^[a-zA-Z0-9]{10}$" name="noa" class="form-control form-control">
                        </div>
                     </div>
                     <div class="col">
                        <div class="input-group" style="margin:3px;">
                           <div class="input-group-prepend ">
                              <div class="input-group-text">CSP</div>
                           </div>
                           <input name="csp" class="form-control form-control">
                        </div>
                     </div>
                  </div>
                  <!-- ////////////////////////////////////////////////////////////////////////////////////// -->
                  <!-- //////////////////////////////////////////////////////Partie conjoint -->
                  <div class="alert alert-dark" style="background:#0f7ea3;color:white;margin:3px;"  role="alert">
                     <strong  style="font-size:14px" > Conjoint : </strong><button type="button" style="float:right;margin:-7px;background:#0f7ea3;" class="btn btn-outline-primary " onclick="$('#conjoint').toggle()">+</button>
                  </div>
                  <div style="display:none;"id="conjoint">
                     <div class="row">
                        <div class="col-12">
                           <div class="row">
                              <div class="col">
                                 <div class="input-group" style="margin:3px;width:89%;">
                                    <div class="input-group-prepend">
                                       <div class="input-group-text">Civilité</div>
                                    </div>
                                    <select name="civilite_conjoint" class="form-control">
                                       <option value=""></option>
                                       <option value="Madame">Mme</option>
                                       <option value="Mademoiselle">Mlle</option>
                                       <option value="Monsieur">Mr</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="col">
                                 <div class="input-group" style="margin:3px;">
                                    <div class="input-group-prepend ">
                                       <div class="input-group-text">Prenom</div>
                                    </div>
                                    <input name="prenom_conjoint" required class="form-control">
                                 </div>
                              </div>
                              <div class="col">
                                 <div class="input-group" style="margin:3px;">
                                    <div class="input-group-prepend ">
                                       <div class="input-group-text">Nom</div>
                                    </div>
                                    <input name="nom_conjoint" required class="form-control">
                                 </div>
                              </div>
                              <div class="col">
                                 <div class="input-group" style="margin:3px;">
                                    <div class="input-group-prepend ">
                                       <div class="input-group-text">NomJf</div>
                                    </div>
                                    <input name="nomjf_conjoint" required class="form-control">
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-12">
                           <div class="row">
                              <div class="col">
                                 <div class="input-group" style="margin:3px;width:60%;">
                                    <div class="input-group-prepend ">
                                       <div class="input-group-text">Né(e) le</div>
                                    </div>
                                    <input name="datenaiss_conjoint" type="date" class="form-control form-control">
                                 </div>
                              </div>
                              <div class="col">
                                 <div class="input-group" style="margin:3px;">
                                    <div class="input-group-prepend ">
                                       <div class="input-group-text">N°SS</div>
                                    </div>
                                    <input pattern="^[a-zA-Z0-9]{16}$" name="nss_conjoint" class="form-control form-control">
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-12">
                           <div class="row">
                              <div class="col">
                                 <div class="input-group" style="margin:3px;">
                                    <div class="input-group-prepend ">
                                       <div class="input-group-text">N.O.A</div>
                                    </div>
                                    <input pattern="^[a-zA-Z0-9]{10}$" name="noa_conjoint" class="form-control form-control">
                                 </div>
                              </div>
                              <div class="col">
                                 <div class="input-group" style="margin:3px;">
                                    <div class="input-group-prepend">
                                       <div class="input-group-text">Régime</div>
                                    </div>
                                    <select name="regime_conjoint" class="form-control form-control">
                                       <option value=""></option>
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
                              <div class="col">
                                 <div class="input-group" style="margin:3px;">
                                    <div class="input-group-prepend ">
                                       <div class="input-group-text">CSP</div>
                                    </div>
                                    <input name="csp_conjoint" class="form-control form-control">
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- ////////////////////////////////////////////////////////////////////////////////////// -->
                  <div class="alert alert-dark" style="background:#0f7ea3;color:white;margin:3px;"  role="alert">
                     <strong  style="font-size:14px" > Enfants : </strong><button type="button" style="float:right;margin:-7px;background:#0f7ea3;" class="btn btn-outline-primary " onclick="$('#Enfant').toggle()">+</button>
                  </div>
                  <div style="display:none;"id="Enfant">
                     <div class="col-12">
                        <div class="row">
                           <div class="col">
                              <div class="input-group" style="margin:3px;">
                                 <div class="input-group-prepend ">
                                    <div class="input-group-text">Nom</div>
                                 </div>
                                 <input name="nom_enfants" required class="form-control">
                              </div>
                           </div>
                           <div class="col">
                              <div class="input-group" style="margin:3px;">
                                 <div class="input-group-prepend ">
                                    <div class="input-group-text">Prenom</div>
                                 </div>
                                 <input name="prenom_enfants" required class="form-control">
                              </div>
                           </div>
                           <div class="col">
                              <div class="input-group" style="margin:3px;">
                                 <div class="input-group-prepend ">
                                    <div class="input-group-text">Né(e) le</div>
                                 </div>
                                 <input name="datenaiss_enfant" type="date" class="form-control form-control">
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-12">
                        <div class="row">
                           <div class="col">
                              <div class="input-group" style="margin:3px;">
                                 <div class="input-group-prepend ">
                                    <div class="input-group-text">Ayant droit</div>
                                 </div>
                                 <input name="ayantdroit_enfant" class="form-control form-control">
                              </div>
                           </div>
                           <div class="col">
                              <div class="input-group" style="margin:3px;">
                                 <div class="input-group-prepend ">
                                    <div class="input-group-text">N°SS</div>
                                 </div>
                                 <input pattern="^[a-zA-Z0-9]{16}$" name="nss_enfant" class="form-control form-control">
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="alert alert-dark" style="background:#0f7ea3;color:white;margin:1px;"  role="alert">
                     <strong  style="font-size:14px" > Commentaires : </strong>
                  </div>
                  <textarea name="commentaire" class="form-control form-control"></textarea>
                  <br>
                  <div class="col">
                     <div class="input-group">
                        <div class="input-group-prepend ">
                           <div class="input-group-text">Statut Fiche</div>
                        </div>
                        <select name="statutfiche" class="form-control">
                           <option value=""></option>
                           <option value="A">Appel</option>
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
                        </select>
                        <div class="input-group-prepend ">
                           <div class="input-group-text">RDV</div>
                        </div>
                        <input name="lheure_client" type="date" class="form-control">
                     </div>
                  </div>
                  <br>
                  <div style="float:right;">
                     <button class="btn btn-danger" type="reset">Annuler</button>
                     <button class="btn" style="background:#38c172;color:white;" type="submit">Enregistrer</button>
                  </div>
               </div>
               <div class="col">
                  <div class="alert alert-dark" style="background:#0f7ea3;color:white;margin:3px;"  role="alert">
                     <strong  style="font-size:14px" > Coordonées : </strong>
                  </div>
                  <div class="row">
                     <div class="col">
                        <div class="input-group" style="margin:3px;">
                           <div class="input-group-prepend ">
                              <div class="input-group-text">Tel 1</div>
                           </div>
                           <input name="tel" required class="form-control">
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col">
                        <div class="input-group" style="margin:3px;">
                           <div class="input-group-prepend ">
                              <div class="input-group-text">Tel 2</div>
                           </div>
                           <input name="tel2" required class="form-control">
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col">
                        <div class="input-group" style="margin:3px;">
                           <div class="input-group-prepend" >
                              <div class="input-group-text">Tel 3</div>
                           </div>
                           <input name="tel3" required class="form-control">
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col">
                        <div class="input-group" style="margin:3px;">
                           <div class="input-group-prepend ">
                              <div class="input-group-text">Email</div>
                           </div>
                           <input name="email" required class="form-control">
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col">
                        <div class="input-group" style="margin:3px;">
                           <div class="input-group-prepend ">
                              <div class="input-group-text">Adresse</div>
                           </div>
                           <input name="adresse" required class="form-control">
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col">
                        <div class="input-group" style="margin:3px;">
                           <div class="input-group-prepend ">
                              <div class="input-group-text">CP</div>
                           </div>
                           <input name="cp_client" required class="form-control">
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col">
                        <div class="input-group" style="margin:3px;">
                           <div class="input-group-prepend ">
                              <div class="input-group-text">Ville</div>
                           </div>
                           <input name="ville" required class="form-control">
                        </div>
                     </div>
                  </div>
                  <div class="alert alert-dark" style="background:#1d3c4e;color:white;margin:3px;"  role="alert">
                     <!-- <strong  style="font-size:14px" > Effet : <span  id="effet" ></span> </strong> -->
                     <div class="row">
                        <strong  style="font-size:14px" > Effet : </strong><input name="" type="date" class="form-control">
                     </div>
                  </div>
                  <div class="alert alert-dark" style="background:#0f7ea3;color:white;margin:3px;"  role="alert">
                     <strong  style="font-size:14px" > A résilier : </strong>
                  </div>
                  <div class="col">
                     <div class="input-group" style="margin:3px;">
                        <div class="input-group-prepend ">
                           <div class="input-group-text">Echeance</div>
                        </div>
                        <!-- <input name="echeance_resilier" type="date" onchange="$('#effet').text(new Date(new Date(this.value).getTime() +  (14 * 24 * 60 * 60 * 1000) ).toLocaleDateString())" class="form-control"> -->
                        <input name="echeance_resilier" type="date" class="form-control">
                     </div>
                  </div>
                  <div class="col">
                     <div class="input-group" style="margin:3px;">
                        <div class="input-group-prepend ">
                           <div class="input-group-text">Cie</div>
                        </div>
                        <input name="compagnie_resilier" class="form-control">
                     </div>
                  </div>
                  <div class="col">
                     <div class="input-group" style="margin:3px;">
                        <div class="input-group-prepend ">
                           <div class="input-group-text">N°Police</div>
                        </div>
                        <input name="Npolice_resilier" class="form-control">
                     </div>
                  </div>
                  <div class="col">
                     <div class="input-group" style="margin:3px;">
                        <div class="input-group-prepend ">
                           <div class="input-group-text">Adresse</div>
                        </div>
                        <input name="adresse_resilier" class="form-control">
                     </div>
                  </div>
                  <div class="col">
                     <div class="input-group" style="margin:3px;">
                        <div class="input-group-prepend ">
                           <div class="input-group-text">CP</div>
                        </div>
                        <input name="cp_resilier" class="form-control">
                        <div class="input-group-prepend ">
                           <div class="input-group-text">Ville</div>
                        </div>
                        <input name="ville_resilier"  class="form-control">
                     </div>
                  </div>
                  <div class="col">
                     <div class="input-group" style="margin:3px;">
                        <div class="input-group-prepend ">
                           <div class="input-group-text">Tel </div>
                        </div>
                        <input name="tel" class="form-control">
                     </div>
                  </div>
                  <div class="col">
                     <div class="input-group" style="margin:3px;">
                        <div class="input-group-prepend ">
                           <div class="input-group-text">Au nom de</div>
                        </div>
                        <input name="aunom_resilier" class="form-control">
                     </div>
                  </div>
               </div>
            </div>
      </div>
   </div>
</div>

<div class="alert alert-dark" style="background:#1d3c4e;margin:3px;" role="alert">
   <strong  style="font-size:14px;color:white;" > Paiement</strong><button type="button" style="float:right;margin:-7px;background:#1d3c4e;" class="btn btn-outline-primary " onclick="$('#paiement').toggle()">+</button>
</div>
<div style="display:none;"id="paiement">
   <div class="col-12">
      <div class="row">
         <div class="col">
            <div class="row">
               <div class="col">
                  <div class="input-group" style="margin:3px;">
                     <div class="input-group-prepend ">
                        <div class="input-group-text">Au nom de</div>
                     </div>
                     <input name="nom" class="form-control">
                  </div>
               </div>
               <div class="col">
                  <div class="input-group" style="margin:3px;width:89%;">
                     <div class="input-group-prepend">
                        <div class="input-group-text">Civilité</div>
                     </div>
                     <select name="civilite" class="form-control">
                        <option value="mme">Mme</option>
                        <option value="mlle">Mlle</option>
                        <option value="mr">Mr</option>
                     </select>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col">
                  <div class="input-group" style="margin:3px;">
                     <div class="input-group-prepend">
                        <div class="input-group-text">Nom</div>
                     </div>
                     @if(!empty($client))
                     <input name="nom" value="{{ $client->nom }}" class="form-control">
                     @endif
                  </div>
               </div>
               <div class="col">
                  <div class="input-group" style="margin:3px;">
                     <div class="input-group-prepend">
                        <div class="input-group-text">Prenom</div>
                     </div>
                     @if(!empty($client))
                     <input name="prenom" value="{{ $client->prenom }}" class="form-control">
                     @endif
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col">
                  <div class="input-group" style="margin:3px;">
                     <div class="input-group-prepend">
                        <div class="input-group-text"> Adresse</div>
                     </div>
                     @if(!empty($client))
                     <textarea name="adresse" value="{{ $client->adresse }}" class="form-control form-control"></textarea>
                     @endif
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col">
                  <div class="input-group" style="margin:3px;">
                     <div class="input-group-prepend">
                        <div class="input-group-text">CP</div>
                     </div>
                     @if(!empty($client))
                     <input name="cp_client" value="{{ $client->cp_client}}" class="form-control">
                     @endif
                  </div>
               </div>
               <div class="col">
                  <div class="input-group" style="margin:3px;">
                     <div class="input-group-prepend">
                        <div class="input-group-text">Ville</div>
                     </div>
                     @if(!empty($client))
                     <input name="ville" value="{{ $client->ville }}" class="form-control">
                     @endif
                  </div>
               </div>
            </div>
         </div>
         <div class="col">
            <div class="row">
               <div class="col">
                  <div class="input-group" style="margin:3px;">
                     <div class="input-group-prepend ">
                        <div class="input-group-text">IBAN</div>
                     </div>
                     <input name="IBAN" class="form-control">
                  </div>
               </div>
            </div>
            <div class="row" >
               <div class="col">
                  <div class="input-group" style="margin:3px;">
                     <div class="input-group-prepend ">
                        <div class="input-group-text">Banque</div>
                     </div>
                     <input name="banque" class="form-control">
                  </div>
               </div>
               <div class="col">
                  <div class="input-group" style="margin:3px;">
                     <div class="input-group-prepend ">
                        <div class="input-group-text">BIC</div>
                     </div>
                     <input name="bicbanque" class="form-control">
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col">
                  <div class="input-group" style="margin:3px">
                     <div class="input-group-prepend">
                        <div class="input-group-text">Adresse banque</div>
                     </div>
                     <textarea name="adresseBanque" class="form-control form-control"></textarea>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col">
                  <div class="input-group" style="margin:3px">
                     <div class="input-group-prepend">
                        <div class="input-group-text">CP banque</div>
                     </div>
                     <input name="cpbanque" class="form-control">
                  </div>
               </div>
               <div class="col">
                  <div class="input-group" style="margin:3px">
                     <div class="input-group-prepend">
                        <div class="input-group-text">Ville</div>
                     </div>
                     <input name="villebanque" class="form-control">
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
</form>
</div>
<div class="card-footer text-muted"></div>
</div>
</div>
@endsection
