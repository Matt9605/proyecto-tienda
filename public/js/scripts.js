(function(){
$("#btn_agregar_producto").on("click",function() {

   var productos = $("#list_productos").val();
   var json_productos = jQuery.parseJSON(productos);
   var id = $(".productos").length + 1;
   $(".btn_delete_producto").remove();
   var row = `<tr id="row-${id}">
                <td>
                    <select class="form-control productos" data-id="${id}" name="producto_id[]" id="producto_id-${id}">     
                    <option value="">Seleccione</option>` ;         
                    json_productos.forEach(producto => {
                        row+=`<option value="${producto.id}" data-precio="${producto.precio}"> ${producto.marca} </option>`;                       
                    })                
                    row+=`</select>                    
                </td>
                <td>
                    <input type="text" name="valor[]" id="valor-${id}" class="form-control" >
                </td>
                <td>
                    <input type="text" name="cantidad[]" value="1" data-id="${id}" id="cantidad-${id}" class="form-control cantidad" >
                </td>
                <td>
                    <input type="text"  name="total[]"  id="total-${id}" class="form-control totales" >
                </td>
                <td id="td_button-${id}">
                <button type="button" id="btn_delete_producto-${id}" data-id="${id}" class="btn btn-danger btn_delete_producto">-</button>
              </td>
                </tr> 
   `;
   $("#productos_table tbody").append(row)

 

    
});

$("#productos_table").on("change",'.productos',function() {
    var precio = $('option:selected', this).attr('data-precio');
    var id = $(this).attr("data-id");
    var cantidad = $("#cantidad-"+id).val();
    $("#valor-"+id).val(precio);
    var total = parseInt(precio)  * parseInt(cantidad)
    $("#total-"+id).val(total)
    calTotal() 
})

$("#productos_table").on("blur",'.cantidad',function() {
    var cantidad = $(this).val();
    var id = $(this).attr("data-id");
    var precio = $("#valor-"+id).val()
    var total = parseInt(precio)  * parseInt(cantidad)
    $("#total-"+id).val(total)
    calTotal() 
})

$("#productos_table").on("click",'.btn_delete_producto',function () {
    var id = parseInt($(this).attr("data-id"));
    $("#row-"+id).remove();
    id -=1;
    var button =  `<button type="button" id="btn_delete_producto-${id}" data-id="${id}" class="btn btn-danger btn_delete_producto">-</button> `;
        console.log(id)   
    $("#td_button-"+id).append(button)
    calTotal() 


 /*    var  next_id =(id+1);
    var next = $("#producto_id-"+next_id);
    
    while (next.length > 0) {
        

        $("#row-"+next_id).attr('id','row-'+id);
        $("#producto_id-"+next_id).attr('id','producto_id-'+id).attr('data-id',id);
        $("#valor-"+next_id).attr('id','valor-'+id).attr('data-id',id);
        $("#cantidad-"+next_id).attr('id','cantidad-'+id).attr('data-id',id);
        $("#total-"+next_id).attr('id','total-'+id).attr('data-id',id);
        $("#btn_delete_producto-"+next_id).attr('id','btn_delete_producto-'+id).attr('data-id',id);
        id =  parseInt($("#producto_id-"+(next_id)).attr("data-id"));
        console.log(next_id)
        next_id =  (id+1);
        next = $("#producto_id-"+(next_id));
        console.log(next_id)
        console.log(id);
        //console.log(id_x)

    } */
   
})


})()

function calTotal() {
    var total = 0;
    $(".totales").each((key,producto) => {        
        total += parseInt(producto.value)
});
$("#valor_venta").val(total)
console.log(total)
}