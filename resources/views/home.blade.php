@extends('layouts.dashboard')

@section('content')

@if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

@if (session('error'))
<div class="alert alert-danger">
    {{ session('error') }}
</div>
@endif

<div class="container-fluid">
   
    <!-- ============================================================== -->
    <!-- Three charts -->
    <!-- ============================================================== -->
   {{--  <div class="row justify-content-center">
        <div class="col-lg-4 col-md-12">
            <div class="white-box analytics-info">
                <h3 class="box-title">Total progress</h3>
                <ul class="list-inline two-part d-flex align-items-center mb-0">
                    <li>
                        <div id="sparklinedash"><canvas width="67" height="30"
                                style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                        </div>
                    </li>
                    <li class="ms-auto"><span class="counter text-success">659</span></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-4 col-md-12">
            <div class="white-box analytics-info">
                <h3 class="box-title">Total Courses Views</h3>
                <ul class="list-inline two-part d-flex align-items-center mb-0">
                    <li>
                        <div id="sparklinedash2"><canvas width="67" height="30"
                                style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                        </div>
                    </li>
                    <li class="ms-auto"><span class="counter text-purple">869</span></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-4 col-md-12">
            <div class="white-box analytics-info">
                <h3 class="box-title">Unique Visitor</h3>
                <ul class="list-inline two-part d-flex align-items-center mb-0">
                    <li>
                        <div id="sparklinedash3"><canvas width="67" height="30"
                                style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                        </div>
                    </li>
                    <li class="ms-auto"><span class="counter text-info">911</span>
                    </li>
                </ul>
            </div>
        </div>
    </div> --}}
    <!-- ============================================================== -->
    <!-- PRODUCTS YEARLY SALES -->
    <!-- ============================================================== -->
    {{-- <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
            <div class="white-box">
                <h3 class="box-title">Products Yearly Sales</h3>
                <div class="d-md-flex">
                    <ul class="list-inline d-flex ms-auto">
                        <li class="ps-3">
                            <h5><i class="fa fa-circle me-1 text-info"></i>Mac</h5>
                        </li>
                        <li class="ps-3">
                            <h5><i class="fa fa-circle me-1 text-inverse"></i>Windows</h5>
                        </li>
                    </ul>
                </div>
                <div id="ct-visits" style="height: 405px;">
                    <div class="chartist-tooltip" style="top: -17px; left: -12px;"><span
                            class="chartist-tooltip-value">6</span>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- ============================================================== -->
    <!-- RECENT SALES -->
    <!-- ============================================================== -->
{{--     <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12">
            <div class="white-box">
                <div class="d-md-flex mb-3">
                    <h3 class="box-title mb-0">Recent sales</h3>
                    <div class="col-md-3 col-sm-4 col-xs-6 ms-auto">
                        <select class="form-select shadow-none row border-top">
                            <option>March 2021</option>
                            <option>April 2021</option>
                            <option>May 2021</option>
                            <option>June 2021</option>
                            <option>July 2021</option>
                        </select>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table no-wrap">
                        <thead>
                            <tr>
                                <th class="border-top-0">#</th>
                                <th class="border-top-0">Name</th>
                                <th class="border-top-0">Status</th>
                                <th class="border-top-0">Date</th>
                                <th class="border-top-0">Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td class="txt-oflo">Elite admin</td>
                                <td>SALE</td>
                                <td class="txt-oflo">April 18, 2021</td>
                                <td><span class="text-success">$24</span></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td class="txt-oflo">Real Homes WP Theme</td>
                                <td>EXTENDED</td>
                                <td class="txt-oflo">April 19, 2021</td>
                                <td><span class="text-info">$1250</span></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td class="txt-oflo">Ample Admin</td>
                                <td>EXTENDED</td>
                                <td class="txt-oflo">April 19, 2021</td>
                                <td><span class="text-info">$1250</span></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td class="txt-oflo">Medical Pro WP Theme</td>
                                <td>TAX</td>
                                <td class="txt-oflo">April 20, 2021</td>
                                <td><span class="text-danger">-$24</span></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td class="txt-oflo">Hosting press html</td>
                                <td>SALE</td>
                                <td class="txt-oflo">April 21, 2021</td>
                                <td><span class="text-success">$24</span></td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td class="txt-oflo">Digital Agency PSD</td>
                                <td>SALE</td>
                                <td class="txt-oflo">April 23, 2021</td>
                                <td><span class="text-danger">-$14</span></td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td class="txt-oflo">Helping Hands WP Theme</td>
                                <td>MEMBER</td>
                                <td class="txt-oflo">April 22, 2021</td>
                                <td><span class="text-success">$64</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
 --}}

   {{-- Created Category  --}}
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12">
            <div class="white-box">
                <div class="d-md-flex mb-3">
                    <h3 class="box-title mb-0">Recent Categories</h3>
                    {{-- <div class="col-md-3 col-sm-4 col-xs-6 ms-auto">
                        <select class="form-select shadow-none row border-top">
                            <option>March 2021</option>
                            <option>April 2021</option>
                            <option>May 2021</option>
                            <option>June 2021</option>
                            <option>July 2021</option>
                        </select>
                    </div> --}}
                </div>
                <div class="table-responsive">
                    <table class="table no-wrap">
                        <thead>
                            <tr>
                                <th class="border-top-0">#</th>
                                <th class="border-top-0">Category Name</th>
                                <th class="border-top-0">Created at</th>
                                <th class="border-top-0">Updated at</th>
                                <th class="border-top-0">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td class="txt-oflo">{{ $category->libelle }}</td>
                                <td>{{ $category->created_at }}</td>
                                <td class="txt-oflo">{{ $category->updated_at }}</td>
                                
                                <td>
                                    
                    
                                   <div class="d-flex flex-row">
                                    <form action="{{ route('update', ['category' => $category->id]) }}" method="POST">
                                        @csrf
                                    
                                        <button type="submit" class="btn btn-info">Update</button>
                                    </form> 
                                    <form  action="{{ route('categories.destroy', ['category' => $category->id]) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger ml-3">Delete</button>
                                    </form>
                                    {{-- <form method="POST" action="{{ route('categories.update', ['category' => $category->id]) }}">
                                        @csrf
                                        @method('PUT') <!-- Utilisez 'PUT' au lieu de 'save' pour la méthode -->
                                        <div class="form-group">
                                            <label for="name">Nouveau nom de catégorie :</label>
                                            <input type="text" class="form-control" id="name" name="libelle" value="{{ $category->libelle }}">
                                            <!-- Assurez-vous que le champ 'name' correspond au nom de la colonne dans votre modèle -->
                                        </div>
                                        <!-- Ajoutez d'autres champs de formulaire au besoin -->
                                    
                                        <button type="submit" class="btn btn-primary">update</button>
                                        <!-- Bouton pour la mise à jour -->
                                    
                                    </form> --}}
                                
                                   </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    
                </div>
                <h3 class="box-title mb-0">Recent Courses</h3>
               
            <div class="table-responsive">
                <table class="table no-wrap">
                    <thead>
                        <tr>
                            <th class="border-top-0">#</th>
                            <th class="border-top-0">Course Name</th>
                            <th class="border-top-0">section</th>
                            <th class="border-top-0">chapitre</th>
                            <th class="border-top-0">Didacticiel</th>
                            <th class="border-top-0">view</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($Courses as $co)
                        <tr>
                            <td>{{ $co->ID_cours }}</td>
                            <td class="txt-oflo">{{ $co->titre }}</td>
                            <td>
                                @php
                                    $elements = App\Models\Element::where('id_cours', $co->ID_cours)->first(); // Remplacez 'App\Element' par le namespace de votre modèle Element
                    
                                    if ($elements) {
                                        $section = App\Models\Section::find($elements->id_section); // Remplacez 'App\Section' par le namespace de votre modèle Section
                    
                                        if ($section) {
                                            echo $section->titre;
                                        } else {
                                            echo "Aucune section associée";
                                        }
                                    } else {
                                        echo "Aucun élément trouvé";
                                    }
                                @endphp
                            </td>
                            <td>
                                    @php
                                        $elements = App\Models\Element::where('id_cours', $co->ID_cours)->first();
                                        if ($elements) {
                                            $section = App\Models\Section::find($elements->id_section);
                                            if ($section) {
                                                $chapitre = App\Models\Chapitre::find ($section->chapitre_id); // Accédez à la relation 'chapitre' définie dans le modèle Section
                                                if ($chapitre) {
                                                    echo $chapitre->titre; // Remplacez 'nom_chapitre' par le nom du champ dans le modèle Chapitre
                                                } else {
                                                    echo "Aucun chapitre associé";
                                                }
                                            } else {
                                                echo "Aucune section associée";
                                            }
                                        } else {
                                            echo "Aucun élément trouvé";
                                        }
                                    @endphp
                        
                            </td>
                            <td>
                                @php
                                $elements = App\Models\Element::where('id_cours', $co->ID_cours)->first();
                                if ($elements) {
                                    $section = App\Models\Section::find($elements->id_section);
                                    if ($section) {
                                        $chapitre = App\Models\Chapitre::find($section->chapitre_id);
                                        if ($chapitre) {
                                            $didacticiel =App\Models\Didacticiel::find($chapitre->didacticiel_id); // Accédez à la relation 'didacticiel' dans le modèle Chapitre
                                            if ($didacticiel) {
                                                echo $didacticiel->titre; // Remplacez 'nom_didacticiel' par le nom du champ dans le modèle Didacticiel
                                            } else {
                                                echo "Aucun didacticiel associé";
                                            }
                                        } else {
                                            echo "Aucun chapitre associé";
                                        }
                                    } else {
                                        echo "Aucune section associée";
                                    }
                                } else {
                                    echo "Aucun élément trouvé";
                                }
                            @endphp

                            </td>
                            <td><a href="{{url('/viewcours', $co->ID_cours)}}">Visit the course</a></td>
                        @endforeach
                        
                    </tbody>
                </table>
                
            </div>
    

                            
                         {{--
                    
                            <!-- Modèle de mise à jour pour cette catégorie -->
                            <div class="modal fade" id="updateModal{{$category->id}}" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel{{$category->id}}" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="updateModalLabel{{$category->id}}">Modifier la catégorie</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <!-- Formulaire de mise à jour pour cette catégorie -->
                                            <form method="POST" action="{{ route('categories.update', ['category' => $category->id]) }}">
                                                @csrf
                                                @method('PUT') <!-- Utilisez 'PUT' au lieu de 'save' pour la méthode -->
                                                <div class="form-group">
                                                    <label for="name">Nouveau nom de catégorie :</label>
                                                    <input type="text" class="form-control" id="name" name="libelle" value="{{ $category->libelle }}">
                                                    <!-- Assurez-vous que le champ 'name' correspond au nom de la colonne dans votre modèle -->
                                                </div>
                                                <!-- Ajoutez d'autres champs de formulaire au besoin -->
                                            
                                                <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
                                            </form>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </tbody>
                    </table>
                    
                </div>
                       
                        {{-- <ul>
                            @foreach($categories as $category)
                                <li>{{ $category->libelle }}</li>
                            @endforeach
                        </ul> --}}
             
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- ============================================================== -->
    <!-- Recent Comments -->
    <!-- ============================================================== -->
    {{-- <div class="row">
        <!-- .col -->
        <div class="col-md-12 col-lg-8 col-sm-12">
            <div class="card white-box p-0">
                <div class="card-body">
                    <h3 class="box-title mb-0">Recent Comments</h3>
                </div>
                <div class="comment-widgets">
                    <!-- Comment Row -->
                    <div class="d-flex flex-row comment-row p-3 mt-0">
                        <div class="p-2"><img src="plugins/images/users/varun.jpg" alt="user" width="50" class="rounded-circle"></div>
                        <div class="comment-text ps-2 ps-md-3 w-100">
                            <h5 class="font-medium">James Anderson</h5>
                            <span class="mb-3 d-block">Lorem Ipsum is simply dummy text of the printing and type setting industry.It has survived not only five centuries. </span>
                            <div class="comment-footer d-md-flex align-items-center">
                                 <span class="badge bg-primary rounded">Pending</span>
                                 
                                <div class="text-muted fs-2 ms-auto mt-2 mt-md-0">April 14, 2021</div>
                            </div>
                        </div>
                    </div>
                    <!-- Comment Row -->
                    <div class="d-flex flex-row comment-row p-3">
                        <div class="p-2"><img src="plugins/images/users/genu.jpg" alt="user" width="50" class="rounded-circle"></div>
                        <div class="comment-text ps-2 ps-md-3 active w-100">
                            <h5 class="font-medium">Michael Jorden</h5>
                            <span class="mb-3 d-block">Lorem Ipsum is simply dummy text of the printing and type setting industry.It has survived not only five centuries. </span>
                            <div class="comment-footer d-md-flex align-items-center">

                                <span class="badge bg-success rounded">Approved</span>
                                
                                <div class="text-muted fs-2 ms-auto mt-2 mt-md-0">April 14, 2021</div>
                            </div>
                        </div>
                    </div>
                    <!-- Comment Row -->
                    <div class="d-flex flex-row comment-row p-3">
                        <div class="p-2"><img src="plugins/images/users/ritesh.jpg" alt="user" width="50" class="rounded-circle"></div>
                        <div class="comment-text ps-2 ps-md-3 w-100">
                            <h5 class="font-medium">Johnathan Doeting</h5>
                            <span class="mb-3 d-block">Lorem Ipsum is simply dummy text of the printing and type setting industry.It has survived not only five centuries. </span>
                            <div class="comment-footer d-md-flex align-items-center">

                                <span class="badge rounded bg-danger">Rejected</span>
                                
                                <div class="text-muted fs-2 ms-auto mt-2 mt-md-0">April 14, 2021</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12 col-sm-12">
            <div class="card white-box p-0">
                <div class="card-heading">
                    <h3 class="box-title mb-0">Chat Listing</h3>
                </div>
                <div class="card-body">
                    <ul class="chatonline">
                        <li>
                            <div class="call-chat">
                                <button class="btn btn-success text-white btn-circle btn" type="button">
                                    <i class="fas fa-phone"></i>
                                </button>
                                <button class="btn btn-info btn-circle btn" type="button">
                                    <i class="far fa-comments text-white"></i>
                                </button>
                            </div>
                            <a href="javascript:void(0)" class="d-flex align-items-center"><img
                                    src="plugins/images/users/varun.jpg" alt="user-img" class="img-circle">
                                <div class="ms-2">
                                    <span class="text-dark">Varun Dhavan <small
                                            class="d-block text-success d-block">online</small></span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <div class="call-chat">
                                <button class="btn btn-success text-white btn-circle btn" type="button">
                                    <i class="fas fa-phone"></i>
                                </button>
                                <button class="btn btn-info btn-circle btn" type="button">
                                    <i class="far fa-comments text-white"></i>
                                </button>
                            </div>
                            <a href="javascript:void(0)" class="d-flex align-items-center"><img
                                    src="plugins/images/users/genu.jpg" alt="user-img" class="img-circle">
                                <div class="ms-2">
                                    <span class="text-dark">Genelia
                                        Deshmukh <small class="d-block text-warning">Away</small></span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <div class="call-chat">
                                <button class="btn btn-success text-white btn-circle btn" type="button">
                                    <i class="fas fa-phone"></i>
                                </button>
                                <button class="btn btn-info btn-circle btn" type="button">
                                    <i class="far fa-comments text-white"></i>
                                </button>
                            </div>
                            <a href="javascript:void(0)" class="d-flex align-items-center"><img
                                    src="plugins/images/users/ritesh.jpg" alt="user-img" class="img-circle">
                                <div class="ms-2">
                                    <span class="text-dark">Ritesh
                                        Deshmukh <small class="d-block text-danger">Busy</small></span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <div class="call-chat">
                                <button class="btn btn-success text-white btn-circle btn" type="button">
                                    <i class="fas fa-phone"></i>
                                </button>
                                <button class="btn btn-info btn-circle btn" type="button">
                                    <i class="far fa-comments text-white"></i>
                                </button>
                            </div>
                            <a href="javascript:void(0)" class="d-flex align-items-center"><img
                                    src="plugins/images/users/arijit.jpg" alt="user-img" class="img-circle">
                                <div class="ms-2">
                                    <span class="text-dark">Arijit
                                        Sinh <small class="d-block text-muted">Offline</small></span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <div class="call-chat">
                                <button class="btn btn-success text-white btn-circle btn" type="button">
                                    <i class="fas fa-phone"></i>
                                </button>
                                <button class="btn btn-info btn-circle btn" type="button">
                                    <i class="far fa-comments text-white"></i>
                                </button>
                            </div>
                            <a href="javascript:void(0)" class="d-flex align-items-center"><img
                                    src="plugins/images/users/govinda.jpg" alt="user-img"
                                    class="img-circle">
                                <div class="ms-2">
                                    <span class="text-dark">Govinda
                                        Star <small class="d-block text-success">online</small></span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <div class="call-chat">
                                <button class="btn btn-success text-white btn-circle btn" type="button">
                                    <i class="fas fa-phone"></i>
                                </button>
                                <button class="btn btn-info btn-circle btn" type="button">
                                    <i class="far fa-comments text-white"></i>
                                </button>
                            </div>
                            <a href="javascript:void(0)" class="d-flex align-items-center"><img
                                    src="plugins/images/users/hritik.jpg" alt="user-img" class="img-circle">
                                <div class="ms-2">
                                    <span class="text-dark">John
                                        Abraham<small class="d-block text-success">online</small></span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /.col -->
    </div>
</div>
 --}}
{{-- <div class="card-header">{{ __('Dashboard') }}</div>

<div class="card-body">
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif

    {{ __('You are logged in!') }}
    <form id="logout-form" class="login100-form validate-form" action="{{ route('logout') }}" method="POST">
        @csrf
        <div class="container-login100-form-btn">
            <div class="wrap-login100-form-btn">
                <div class="login100-form-bgbtn"></div>
                <button type="submit" class="login100-form-btn ">
                    {{ __('Logged out') }}
                </button>
            </div>
        <div>
    </form>
</div>

@if (auth()->user())
<div class="card-body">
    @if (auth()->user()->isProfessor())
    <h1>Créer une Catégorie</h1>

    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="libelle" class="form-label">Libellé</label>
            <input type="text" class="form-control" id="libelle" name="libelle" required>
        </div>
        
        <button type="submit" class="btn btn-primary">Créer</button>
    </form>
    @endif
</div>
@endif --}}



@endsection