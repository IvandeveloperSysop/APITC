
function  getDetailsOrder(id){

    $.ajax({
        url: routeG+'admin/get/order/details/'+ id,
        data: { 
            _token :$('meta[name="csrf-token"]').attr('content')
        },
        type : 'GET',
        dataType: 'json',
        success: function(resp) {
            // console.log(resp);
            if ( resp.result == 'ok' ) {

                document.getElementById('orderId').value = resp.order['orderId'];
                document.getElementById('updateAwardName').value = resp.order['productName'];
                document.getElementById('updateUserName').value = resp.order['userName'];
                document.getElementById('updateUserCellphone').value = resp.order['cellPhone'];
                document.getElementById('selectOrderStatus').innerHTML = resp.selectStatus;
                document.getElementById('updateAwardPrice').value = resp.order['price'];
                document.getElementById('imageAwardDetail').innerHTML = resp.image;
                // image

                document.getElementById('updateAwardAddress').value = resp.order['street'];
                document.getElementById('city').value = resp.order['city'];
                document.getElementById('estate').value = resp.order['state'];
                document.getElementById('country').value = resp.order['suburb'];
                document.getElementById('zip').value = resp.order['zip'];

                document.getElementById('country').value = "México";
                document.getElementById('zip').value = resp.order['cp'];

                status = resp.order['statusId'];
                if (status != 35) {
                    document.getElementById('rowOrderComment').style.display = 'block';
                }

                document.getElementById('commentEmail').value = resp.order['comment'];
                
            }
        },
        error: function(err) {
            console.log(err);
        }
    });

}

function addCommentEmail(){
    status = document.getElementById('statusSelectOrder').value;
    if (status != 35) {
        document.getElementById('rowOrderComment').style.display = 'block';
    }
}

function editOrder(){
    orderId = document.getElementById('orderId').value;
    status_id = document.getElementById('statusSelectOrder').value;
    comment = document.getElementById('commentEmail').value;

    // return status_id;

    Swal.fire({
        title: '¿Deseas editar la orden?',
        showDenyButton: true,
        showCancelButton: false,
        confirmButtonText: `Guardar`,
        denyButtonText: `No guardar`,
    }).then((result) => {
        if (result.isConfirmed) {
            
            loading();
            $.ajax({
                url: routeG+'admin/order/update',
                data: {
                    orderId,
                    status_id,
                    comment,
                    _token :$('meta[name="csrf-token"]').attr('content')
                },
                type : 'POST',
                dataType: 'json',
                success: function(resp) {
                    // console.log(resp);
                    Swal.close();
                    if ( resp.result == 'ok' ) {
                        $('#viewDetailsAwards').modal({
                            keyboard: false
                        });
                        $('#viewDetailsAwards').modal('hide');
                        Swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            title: 'Orden actualizada',
                            showConfirmButton: false,
                            timer: 1500
                        });
                        location.reload();
                    }
                },
                error: function(err) {
                    console.log(err);
                }
            });
            
        }
    });

}

function getDetailsOrderCancel(id){
    $.ajax({
        url: routeG+'admin/get/order/details/'+ id,
        data: { 
            _token :$('meta[name="csrf-token"]').attr('content')
        },
        type : 'GET',
        dataType: 'json',
        success: function(resp) {
            console.log(resp);
            if ( resp.result == 'ok' ) {

                document.getElementById('orderIdCancel').value = resp.order['orderId'];
                document.getElementById('numOrder').value = resp.order['orderId'];
                document.getElementById('orderProduct').value = resp.order['productName'];
                document.getElementById('orderUser').value = resp.order['userName'];
                document.getElementById('pointsOrder').value = resp.order['price'];
                
            }
        },
        error: function(err) {
            console.log(err);
        }
    });
}

function cancelOrder(){

    orderId = document.getElementById('orderIdCancel').value;
    pointsOrder = document.getElementById('pointsOrder').value;
    
    Swal.fire({
        title: '¿Deseas cancelar la orden?',
        showDenyButton: true,
        showCancelButton: false,
        confirmButtonText: `Guardar`,
        denyButtonText: `Cerrar`,
    }).then((result) => {
        if (result.isConfirmed) {
            // console.log('ok')
            // loading();
            $.ajax({
                url: routeG+'admin/order/canceled',
                data: {
                    orderId,
                    pointsOrder,
                    status_id: 37,
                    _token :$('meta[name="csrf-token"]').attr('content')
                },
                type : 'POST',
                dataType: 'json',
                success: function(resp) {
                    // console.log(resp);
                    if ( resp.result == 'ok' ) {
                        $('#viewDetailsAwardsCancel').modal({
                            keyboard: false
                        });
                        $('#viewDetailsAwardsCancel').modal('hide');
                        Swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            title: 'Orden cancelada',
                            showConfirmButton: false,
                            timer: 1500
                        });
                        location.reload();
                    }
                },
                error: function(err) {
                    console.log(err);
                }
            });
            
        }
    });

}