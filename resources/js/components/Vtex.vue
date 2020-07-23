<template>
	<div >
		<div id="vtex">
			<navbar/>
			<br style="margin-top: 65px;">
			<div class="alert alert-success alert-dismissible fade show" role="alert" v-if="resultado == 1" style="margin-top: 70px;">
				<p class="text-center">LA OPCIÓN IDEAL PARA TI ES UNA</p>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="container" style="margin-top: 65px;">
				<h1 class="text-center">TIENDA VTEX</h1>
				<p class="justify">"Nuestros desarrollo de Tiendas VTEX son un gran salto para tus procesos de venta ONLINE. A través de esta gran plataforma Brasilera, que actualmente tiene el 90% del mercado e-commerce de Colombia; podrás desarrollar completamente a tu medida tu nueva Tienda Virtual y diseñar estrategias comerciales agresivas que te ayuden a vender más:</p>
				<ol>
				<li>Cada espacio de tu tienda estará siempre listo para tu personalización</li>
				<li>Podrás integrar todos tus software de manejo como CRM o ERP, para agilizar tus procesos de identificación y fidelización de clientes, y de facturación y gestión de inventarios. De igual forma, podrás siempre mantener tus inventarios al día a través de las APIs creadas para ello.</li> 
				<li>Tendrás acceso 24/7 al Ambiente VTEX, a través del cual podrás hacer actualizaciones de categorías, productos, promociones y cupones; como también, descargar reportes y conocer estados de ventas en vivo.</li>
				<li>Tú y tus clientes recibirán notificaciones de venta, compra y estado del producto por correo electrónico.</li>
				<li>También podrás integrarte con compañías transportadoras para brindarle a tu cliente una solución integral en la venta.</li>
				<li>Además, a través de la Tienda VTEX podrás crear desarrollos a tu medida, en los que tus clientes pueden tener espacios de personalización de tus productos, o vivir experiencias de usuario increíbles a través de diferentes aplicativos.</li>  
				</ol>
				<p>¿Estamos listos?</p> 
				<p>¡Hablemos!</p> 
				(espacio para info de contacto) "							
			</div>
		</div>
		<div id="caja-ver-mas-3">
			<br>
			<h2 class="text-center">TAMBIÉN PUEDE INTERESARTE</h2>
								
			<div class="row">
				<div class="col-sm-12 col-md-6">
					<a href="" @click="navegarexpress">
					<express/>
					</a>
				</div>
				<div class="col-sm-12 col-md-6">
					<a href="" @click="navegarmarketplace">
					<marketplace/>
					</a>
				</div>
			</div>
			<br>
		</div>			
	</div>
</template>

<script>
	import express from './vermas/Express'
	import marketplace from './vermas/Marketplace'
	import navbar from './Navbar.vue'

	export default{
		components:{
			express,
			marketplace,
			navbar
		},
		data(){
			return{
				resultado: 0
			}
		},
		methods:{
			getParameterByName(name) {
			    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
			    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
			    results = regex.exec(location.search);
			    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
			},
			navegarexpress(){
				axios.get('/api/navegar-express').then(response => {
					
					window.location.href = response.data;
				}).catch(e => {
					console.log(e);
				})
			},
			navegarmarketplace(){
				axios.get('/api/navegar-marketplace').then(response => {
					
					window.location.href = response.data;
				}).catch(e => {
					console.log(e);
				})
			}
		},
		created(){
			this.resultado = this.getParameterByName('resultado');
		}
	}
</script>

<style scoped>
	#vtex{
		background-image: url("../../../public/image/imagen-2.jpg");
		background-size: 100%;
	}

	a{
		color: white;
	}

	#caja-ver-mas-3{
		background-image: url("../../../public/image/imagen-1.jpg");
		background-size: 100%;
		height: 100%;
	}
</style>