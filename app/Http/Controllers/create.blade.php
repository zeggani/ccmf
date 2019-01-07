@extends('layouts.app')
@section('content')

<div class="container-fluid" >
<form class="form-horizontal" >
<div class="row">

  <div class="box box-solid bg-teal-gradient" style="background:#1d3c4e !important;color:white;margin:5px;">
              <div class="box-header ui-sortable-handle" style="cursor: move;">
                <i class="fa fa-th"></i>

                <h3 class="box-title">Statut : Appel</h3>

                <div class="box-tools pull-right">
                  <button type="button" class="btn bg-teal btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                  </button>
                  <button type="button" class="btn bg-teal btn-sm" data-widget="remove"><i class="fa fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="box-body border-radius-none">

                <div class="row">
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

        </div></div>
              </div>
              <!-- /.box-footer -->
            </div>

  @csrf

  <div class="col-lg-8">
    <div class="box box-primary box-solid">
                <div class="box-header with-border">
                  <h3 class="box-title">Assuré</h3>

                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                  </div>
                  <!-- /.box-tools -->
                </div>
                <!-- /.box-header -->

                <div class="box-body">


                  <div class="row">
                     <div class="col-lg-3">
                        <!-- <label  style="font-size:12px" > Civilié</label> -->
                        <div class="form-group" style="margin:3px;width:89%;">
                           <div class="form-group-prepend">
                              <div class="form-group-text">   Civilité</div>
                           </div>
                           <select name="civilite" class="input form-control">
                              <option value=""></option>
                              <option value="Mme">Mme</option>
                              <option value="Mlle">Mlle</option>
                              <option value="Mr">Mr</option>
                           </select>
                        </div>
                     </div>
                     <div class="col-lg-3">
                        <div class="form-group" >
                           <div class="form-group-prepend ">
                              <div class="form-group-text">   Prenom</div>
                           </div>
                           <input name="prenom" required class="input form-control">
                        </div>
                     </div>
                     <div class="col-lg-3">
                        <div class="form-group" >
                           <div class="form-group-prepend ">
                              <div class="form-group-text">Nom</div>
                           </div>
                           <input name="nom" required class="input form-control">
                        </div>
                     </div>
                     <div class="col-lg-3">
                        <div class="form-group" >
                           <div class="form-group-prepend ">
                              <div class="form-group-text">Nom JF</div>
                           </div>
                           <input name="nomjf" required class="input form-control">
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-4">
                        <div class="form-group" style="margin:3px;width:100%">
                           <div class="form-group-prepend">
                              <div class="form-group-text">Sit.Fam</div>
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
                     <div class="col-lg-4">
                        <div class="form-group" style="margin:3px;width:100%">
                           <div class="form-group-prepend ">
                              <div class="form-group-text">Né(e) le</div>
                           </div>
                           <input name="datenaiss" type="date" class="form-control form-control">
                        </div>
                     </div>
                     <div class="col-lg-4">
                        <div class="form-group" >
                           <div class="form-group-prepend">
                              <div class="form-group-text">Régime</div>
                           </div>
                           <select name="regime" class="form-control form-control">
                              <!-- <option value=""></option> -->
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
                     <div class="col-lg-4">
                        <div class="form-group" >
                           <div class="form-group-prepend ">
                              <div class="form-group-text">N°SS</div>
                           </div>
                           <input pattern="^[a-zA-Z0-9]{16}$" name="nss" class="form-control form-control">
                        </div>
                     </div>
                     <div class="col-lg-4">
                        <div class="form-group" style="width:100%;">
                           <div class="form-group-prepend ">
                              <div class="form-group-text">NOA</div>
                           </div>
                           <input pattern="^[a-zA-Z0-9]{10}$" name="noa" class="form-control form-control">
                        </div>
                     </div>
                     <div class="col-lg-4">
                        <div class="form-group" >
                           <div class="form-group-prepend ">
                              <div class="form-group-text">CSP</div>
                           </div>
                           <input name="csp" class="form-control form-control">
                        </div>
                     </div>
                  </div>


                </div>
                <!-- /.box-body -->
              </div>
              <div class="box box-primary box-solid">
                          <div class="box-header with-border">
                            <h3 class="box-title">Conjoint</h3>

                            <div class="box-tools pull-right">
                              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                              </button>
                            </div>
                            <!-- /.box-tools -->
                          </div>
                          <!-- /.box-header -->
                          <div class="box-body">
                               <div class="col-lg-12">
                                  <div class="row">
                                     <div class="col-lg-3">
                                        <div class="form-group" style="margin:3px;width:89%;">
                                           <div class="form-group-prepend">
                                              <div class="form-group-text">Civilité</div>
                                           </div>
                                           <select name="civilite_conjoint" class="form-control">
                                              <option value=""></option>
                                              <option value="Madame">Mme</option>
                                              <option value="Mademoiselle">Mlle</option>
                                              <option value="Monsieur">Mr</option>
                                           </select>
                                        </div>
                                     </div>
                                     <div class="col-lg-3">
                                        <div class="form-group" >
                                           <div class="form-group-prepend ">
                                              <div class="form-group-text">Prenom</div>
                                           </div>
                                           <input name="prenom_conjoint" required class="form-control">
                                        </div>
                                     </div>
                                     <div class="col-lg-3">
                                        <div class="form-group" >
                                           <div class="form-group-prepend ">
                                              <div class="form-group-text">Nom</div>
                                           </div>
                                           <input name="nom_conjoint" required class="form-control">
                                        </div>
                                     </div>
                                     <div class="col-lg-3">
                                        <div class="form-group" >
                                           <div class="form-group-prepend ">
                                              <div class="form-group-text">NomJf</div>
                                           </div>
                                           <input name="nomjf_conjoint" required class="form-control">
                                        </div>
                                     </div>
                                  </div>
                               </div>
                               <div class="col-lg-12">
                                  <div class="row">
                                     <div class="col-lg-6">
                                        <div class="form-group" style="margin:3px;width:60%;">
                                           <div class="form-group-prepend ">
                                              <div class="form-group-text">Né(e) le</div>
                                           </div>
                                           <input name="datenaiss_conjoint" type="date" class="form-control form-control">
                                        </div>
                                     </div>
                                     <div class="col-lg-6">
                                        <div class="form-group" >
                                           <div class="form-group-prepend ">
                                              <div class="form-group-text">N°SS</div>
                                           </div>
                                           <input pattern="^[a-zA-Z0-9]{16}$" name="nss_conjoint" class="form-control form-control">
                                        </div>
                                     </div>
                                  </div>
                               </div>
                               <div class="col-lg-12">
                                  <div class="row">
                                     <div class="col-lg-4">
                                        <div class="form-group" >
                                           <div class="form-group-prepend ">
                                              <div class="form-group-text">N.O.A</div>
                                           </div>
                                           <input pattern="^[a-zA-Z0-9]{10}$" name="noa_conjoint" class="form-control form-control">
                                        </div>
                                     </div>
                                     <div class="col-lg-4">
                                        <div class="form-group" >
                                           <div class="form-group-prepend">
                                              <div class="form-group-text">Régime</div>
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
                                     <div class="col-lg-4">
                                        <div class="form-group" >
                                           <div class="form-group-prepend ">
                                              <div class="form-group-text">CSP</div>
                                           </div>
                                           <input name="csp_conjoint" class="form-control form-control">
                                        </div>
                                     </div>
                                  </div>
                               </div>
                          </div>
                          <!-- /.box-body -->
                        </div>
                        <div class="box box-primary box-solid">
                                    <div class="box-header with-border">
                                      <h3 class="box-title">Enfants</h3>

                                      <div class="box-tools pull-right">
                                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                        </button>
                                      </div>
                                      <!-- /.box-tools -->
                                    </div>
                                    <!-- /.box-header -->
                                    <div class="box-body">
                                      The body of the box
                                    </div>
                                    <!-- /.box-body -->
                                  </div>
                                  <div class="box box-primary box-solid">
                                              <div class="box-header with-border">
                                                <h3 class="box-title">Commentaire</h3>

                                                <div class="box-tools pull-right">
                                                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                                  </button>
                                                </div>
                                              </div>
                                              <div class="box-body">
                                                The body of the box
                                              </div>
                                  </div>
  </div>
  <div class="col-lg-4">
    <div class="box box-primary box-solid">
                <div class="box-header with-border">
                  <h3 class="box-title">Coordonnées</h3>

                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                  </div>
                </div>
                <div class="box-body">

                     <div class="row">
                        <div class="col-lg-12">
                           <div class="form-group" >
                              <div class="form-group-prepend ">
                                 <div class="form-group-text">Tel 1</div>
                              </div>
                              <input name="tel" required class="form-control">
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-lg-12">
                           <div class="form-group" >
                              <div class="form-group-prepend ">
                                 <div class="form-group-text">Tel 2</div>
                              </div>
                              <input name="tel2" class="form-control">
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-lg-12">
                           <div class="form-group" >
                              <div class="form-group-prepend" >
                                 <div class="form-group-text">Tel 3</div>
                              </div>
                              <input name="tel3" class="form-control">
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-lg-12">
                           <div class="form-group" >
                              <div class="form-group-prepend ">
                                 <div class="form-group-text">Email</div>
                              </div>
                              <input name="email" class="form-control">
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-lg-12">
                           <div class="form-group" >
                              <div class="form-group-prepend ">
                                 <div class="form-group-text">Adresse</div>
                              </div>
                              <input name="adresse" required class="form-control">
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-lg-12">
                           <div class="form-group" >
                              <div class="form-group-prepend ">
                                 <div class="form-group-text">CP</div>
                              </div>
                              <input name="cp_client" required class="form-control">
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-lg-12">
                           <div class="form-group" >
                              <div class="form-group-prepend ">
                                 <div class="form-group-text">Ville</div>
                              </div>
                              <input name="ville" class="form-control">
                           </div>
                        </div>
                     </div>
              </div>
</div>

              <div class="box box-primary box-solid">
                          <div class="box-header with-border">
                            <h3 class="box-title">A résilier :</h3>

                            <div class="box-tools pull-right">
                              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                              </button>
                            </div>
                          </div>
                          <div class="box-body">
                            <div class="alert"  style="background:#3c8dbc;color:white;" >

                              <div class="row">

                                <div class="form-group">
                                <label for="Echeance" class="col-sm-4 control-label">Effet :</label>

                                <div class="col-sm-8">
                                <input value="{{date('Y-m-d')}}" type="date" class="form-control">

                                </div>
                                </div>

                              </div>

                            </div>


                            <div class="form-group">
                  <label for="Echeance" class="col-sm-2 control-label">Echeance</label>

                  <div class="col-sm-10">
                    <input type="date" name="echeance_resilier" class="form-control" id="echeance_resilier" placeholder="Echeance">
                  </div>
                </div>

                <div class="form-group">
      <label for="compagnie_resilier" class="col-sm-2 control-label">Cie</label>

      <div class="col-sm-10">
        <input type="text" class="form-control" id="compagnie_resilier"  name="compagnie_resilier" placeholder="Cie">
      </div>
    </div>
                            <div class="col">
                               <div class="form-group" >
                                  <div class="form-group-prepend ">
                                     <div class="form-group-text">N°Police</div>
                                  </div>
                                  <input name="Npolice_resilier" class="form-control">
                               </div>
                            </div>
                            <div class="col">
                               <div class="form-group" >
                                  <div class="form-group-prepend ">
                                     <div class="form-group-text">Adresse</div>
                                  </div>
                                  <input name="adresse_resilier" class="form-control">
                               </div>
                            </div>
                            <div class="col">
                               <div class="form-group" >
                                  <div class="form-group-prepend ">
                                     <div class="form-group-text">CP</div>
                                  </div>
                                  <input name="cp_resilier" class="form-control">
                                  <div class="form-group-prepend ">
                                     <div class="form-group-text">Ville</div>
                                  </div>
                                  <input name="ville_resilier"  class="form-control">
                               </div>
                            </div>
                            <div class="col">
                               <div class="form-group" >
                                  <div class="form-group-prepend ">
                                     <div class="form-group-text">Tel </div>
                                  </div>
                                  <input name="tel" class="form-control">
                               </div>
                            </div>
                            <div class="col">
                               <div class="form-group" >
                                  <div class="form-group-prepend ">
                                     <div class="form-group-text">Au nom de</div>
                                  </div>
                                  <input name="aunom_resilier" class="form-control">
                               </div>
                            </div>
                         </div>
                          </div>
                          <!-- /.box-body -->
                        </div>
  </div>
</div>
</form>
</div>

@endsection
