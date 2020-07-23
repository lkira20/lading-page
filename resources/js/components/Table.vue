<template>
	<div id="caja-tabla">
	<br>
	<div class="card container shadow" id="carta-tabla">
		<p class="display-4 text-center" style="color: black;">Tiendas virtuales</p>
		<div class="card-body">

				<table class="table table-sm table-striped table-hover table-bordered">
					<thead class="thead-dark">
						<tr>
							<th>Caractaristica</th>
							<th>Tienda Express</th>
							<th>Marketplace MC</th>
							<th>Tiendas Vtex</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td >Compra de dominio y hosting</td>
							<td>Incluido </td>
							<td>No incluido</td>
							<td>No incluido</td>
						</tr>

						<tr>
							<td>Tiempo de producción</td>
							<td>5 días</td>
							<td>variado</td>
							<td>13 meses</td>
						</tr>

						<tr>
							<td>Número de tiendas físicas </td>
							<td>0 - 1</td>
							<td>1</td>
							<td>>1</td>
						</tr>

						<tr>
							<td>Personalización </td>
							<td>"BÁSICA
Logo, banners, categorías, productos, referencias, precios, blog, direcciones, políticas de pago,  y whatsapp."</td>
							<td>"MEDIA
Logo, colores, Categorias, productos, referencias, precios, Upselling, politicas de pago, tipos de clientes, tipos de usuarios, notificaciones por correo, vendedores, canales de ventas"</td>
							<td>"FULL
									100% personailizable e inteligente"</td>
						</tr>

						<tr>
							<td>Articulación con pasarela de pagos </td>
							<td>Si</td>
							<td>Si</td>
							<td>Si</td>
						</tr>

						<tr>
							<td>Requiere experto para montarla </td>
							<td>No</td>
							<td>Requiere 8 horas de capacitación</td>
							<td>Si</td>
						</tr>

						<tr>
							<td>Inventario</td>
							<td>Se carga manual o semanal en un excel </td>
							<td>"Manual
Integra con Software (Integración la debe realizar el cliente final)"</td>
							<td>Integra con software o carga por API</td>
						</tr>

						<tr>
							<td>Facturación electrónica</td>
							<td>No</td>
							<td>Sí</td>
							<td>Integra con software</td>
						</tr>
					</tbody>
				</table>
		</div>
	</div>
	<br>
	</div>
</template>

<script>
	export default{
		
	}
</script>

<style scoped>
	#caja-tabla{
		background-image: url("../../../public/image/imagen-1.jpg");
		background-size: 100%;
	}

	#carta-tabla{
		background-color: rgba(256,256,256,0.8);
	}
</style>