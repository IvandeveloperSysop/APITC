@extends('layouts.layout')
@section('css')
    <link href="{{asset('css/imagestyle.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/image-zoom.css')}}">
    {{-- <link rel="stylesheet" href="{{ asset('css/cardAward.css') }}"> --}}
    <style>
        .tableDetails{
            height: 300px;
        }

        .wrapper{
            height: 40px;
            width: 180px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #FFF;
            border-radius: 12px;
            box-shadow: 0 5px 10px rgba(0,0,0,0.2);
        }
        .wrapper span{
            width: 100%;
            text-align: center;
            font-size: 25px;
            font-weight: 600;
            cursor: pointer;
            user-select: none;
        }
        .wrapper .num{
            width: 100%;
            text-align: center;
            border: 0;
            font-size: 25px;
            /* border-right: 2px solid rgba(0,0,0,0.2);
            border-left: 2px solid rgba(0,0,0,0.2); */
            pointer-events: none;
        }
        td, th{
            vertical-align: middle;
        }
    </style>
   
@endsection
@section('content')

    {{-- <h1 class="mt-5">Premios</h1> --}}
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div id="alerts">
            </div>
        </div>
    </div>


    <div class="row my-5">
        <div class="col-md-12">
            <div class="card rounded cardsDetails" >
                <div class="card-header">
                    <div class="row justify-content-end">
                        <div class="col-md 3">
                            <h3>Ordenes de entrega</h3>
                        </div>
                    </div>
                </div>

                <div class="card-body p-0">

                        <div class="row justify-content-center">

                            <div class="col-md-12 ">
                                <table class="table text-center mb-0">
                                    <thead>
                                        <tr>
                                        <th scope="col">Imagen</th>
                                        <th scope="col">producto</th>
                                        <th scope="col">Usuario</th>
                                        <th scope="col">Precio</th>
                                        <th scope="col">Fecha</th>
                                        <th scope="col">Estatus</th>
                                        <th scope="col">Detalles</th>
                                        </tr>
                                    </thead>
                                    <tbody id="bodyTableOrder">
                                        @foreach ($orders as $order)

                                            @php
                                                $textClass = 'text-danger';

                                                if($order->statusId == 35 || $order->statusId == 39){
                                                    $textClass = 'text-warning';
                                                }elseif($order->statusId == 36 || $order->statusId == 40){
                                                    $textClass = 'text-success';
                                                }elseif($order->statusId == 37){
                                                    $textClass = 'text-danger';
                                                }


                                                if($order->statusId == 35){
                                                    $statusName = 'Pendiente por validar';
                                                }elseif($order->statusId == 36){
                                                    $statusName = 'Confirmado';
                                                }elseif($order->statusId == 37){
                                                    $statusName = 'Cancelado';
                                                }elseif($order->statusId == 39){
                                                    $statusName = 'En camino';
                                                }elseif($order->statusId == 40){
                                                    $statusName = 'Entregado';
                                                }else{
                                                    $statusName = 'Pendiente por validar';
                                                }
                                                
                                            @endphp


                                        <tr>
                                            <td scope="row" style="width: 20%;">
                                                <img src="{{ $routeGlobal }}{{ $order->imageProduct }}" style="width: 100px;" alt="{{ $order->productName }}" />
                                            </th>
                                            <th>{{ $order->productName }}</td>
                                            <th>{{ $order->userName }}</td>
                                            <td>{{ $order->price }}</td>
                                            <td>{{ \Carbon\Carbon::parse($order->orderProductDate)->format('d-m-Y') }}</td>
                                            <td class="{{ $textClass }}">
                                                {{ $statusName }}
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#viewDetailsAwards" onclick="getDetailsOrder({{ $order->orderId }})" ><i class="fas fa-eye me-2"></i>Ver detalles</button>
                                                <button type='button' class='btn btn-danger' data-bs-toggle="modal" data-bs-target="#viewDetailsAwardsCancel" onclick="getDetailsOrderCancel({{ $order->orderId }})">
                                                    <i class="fas fa-trash me-2"></i>Cancelar orden
                                                </button>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>

                </div>
            </div>
            <div id="paginationTable">
                {{ $orders->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>

                
@endsection

@section('modals')



    
    <!-- Modal Details Awrads -->
    <div class="modal fade" id="viewDetailsAwards" tabindex="-1" aria-labelledby="exampleModalPromo" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalPromo">Detalles de la orden</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="formAddAward" action="{{ route('addAward')  }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row justify-content-center">
                            <div class="col-md-10">

                                <div class="row justify-content-center">
                                    <div class="col-md-7">
                                        <div class="mb-3" id="imageAwardDetail">
                                            
                                        </div>
                                    </div>
                                </div>

                                <input type="hidden" id="orderId">

                                <div class="mb-3">
                                    <label for="user" class="form-label">Producto: </label>
                                    <input type="text" class="form-control" id="updateAwardName" name="updateAwardName" readonly >
                                </div>

                                <div class="mb-3">
                                    <label for="user" class="form-label">Usuario: </label>
                                    <input type="text" class="form-control" id="updateUserName" name="updateUserName" readonly >
                                </div>

                                <div class="mb-3">
                                    <label for="user" class="form-label">Telefono: </label>
                                    <input type="text" class="form-control" id="updateUserCellphone" name="updateUserCellphone" readonly >
                                </div>
                                

                                <div class="mb-3">
                                    <label for="user" class="form-label">Calle y número: </label>
                                    <input type="text" class="form-control" id="updateAwardAddress" name="updateAwardAddress" readonly >
                                </div>

                                
                                <div class="mb-3">
                                    <label for="user" class="form-label">Ciudad: </label>
                                    <input type="text" class="form-control" id="city" name="city" readonly >
                                </div>
                                
                                <div class="mb-3">
                                    <label for="user" class="form-label">Estado: </label>
                                    <input type="text" class="form-control" id="estate" name="estate" readonly >
                                </div>
                                
                                <div class="mb-3">
                                    <label for="user" class="form-label">Pais: </label>
                                    <input type="text" class="form-control" id="country" name="country" readonly >
                                </div>

                                <div class="mb-3">
                                    <label for="user" class="form-label">Zip: </label>
                                    <input type="text" class="form-control" id="zip" name="zip" readonly >
                                </div>
                               

                                <div class="row justify-content-center">
                                    
                                    <div class="col-md-6">
                                        <div class="mb-3" id="selectOrderStatus">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="updateAwardPrice" class="form-label">Precio en puntos: </label>
                                        <input type="number" class="form-control" id="updateAwardPrice" name="updateAwardPrice" >
                                    </div>

                                    <div class="row justify-content-center" id="rowOrderComment" style="display: none;">
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="commentEmail" class="form-label">Comentario del correo:</label>
                                                <textarea class="form-control" id="commentEmail" rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>


                                </div>


                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="editOrder()">Cargar premio</button>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal cancel Order --}}
    <div class="modal fade" id="viewDetailsAwardsCancel" tabindex="-1" aria-labelledby="exampleModalPromo" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalPromo">Cancelar orden</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="formAddAward" action="{{ route('addAward')  }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row justify-content-center">
                            <div class="col-md-10">

                                <input type="hidden" id="orderIdCancel">

                                <div class="mb-3">
                                    <label for="numOrder" class="form-label"># orden: </label>
                                    <input type="text" class="form-control" id="numOrder" name="numOrder" readonly >
                                </div>

                                <div class="mb-3">
                                    <label for="orderProduct" class="form-label">Producto: </label>
                                    <input type="text" class="form-control" id="orderProduct" name="orderProduct" readonly >
                                </div>

                                <div class="mb-3">
                                    <label for="orderUser" class="form-label">Usuario: </label>
                                    <input type="text" class="form-control" id="orderUser" name="orderUser" readonly >
                                </div>

                                

                                <div class="row justify-content-center">
                                    <div class="col-md-6">
                                        <label for="pointsOrder" class="form-label">Puntos a regresar al wallet del usuario: </label>
                                        <input type="number" class="form-control" id="pointsOrder" name="pointsOrder" >
                                    </div>
                                </div>


                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary" onclick="cancelOrder()">Cancelar orden</button>
                </div>
            </div>
        </div>
    </div>



@endsection

@section('js')

    {{-- <script src="{{asset('js/image-zoom.js')}}" type="text/javascript"></script> --}}
   <script src="{{ asset('js/orders.js') }}" type="text/javascript"></script>
   

@endsection
