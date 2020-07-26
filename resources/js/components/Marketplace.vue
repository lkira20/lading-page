<template>
	<div id="super-caja-mar">
		<div id="marketplace">
			<navbar/>
			<br style="margin-top: 65px;">
			<div class="alert alert-success alert-dismissible fade show" role="alert" v-if="resultado == 1" style="margin-top: 70px;">
				<p class="text-center">LA OPCIÓN IDEAL PARA TI ES UNA</p>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="container" style="margin-top: 65px;">
				<h1 class="text-center">TIENDA PERSONALIZADA - MARKET PLACE</h1>

				<p class="justify">"Con nuestras Tiendas Personalizadas en el Market Place de MediaCommerce, tendrás una solución más a la medida de tus necesidades y a través de la cual, en un período no mayor a 4 semanas, podrás tener muchos beneficios para empezar o llevar al siguiente nivel tu canal de venta digital. Con este tipo de Tiendas podrás:</p>
				<ol>	
				<li>Pesonalizar tu logo, colores, categorías y productos, referencias, precios, canales de ventas y políticas de pagos y envíos.</li>
				<li>Podrás configurar tu upselling, y los tipos de clientes que tendrás para ofrecer diferentes beneficios.</li>
				<li>Tendrás categorías o tipos de usuarios dentro de tu equipo que tengan acceso a diferentes paneles de administración de la tienda. Así como también podrás configurar tu fuerza de venta dentro de la Tienda.</li>
				<li>Tú y tus clientes recibirán notificaciones de venta y compra por correo electrónico.</li>
				<li>Tú y tu equipo recibirán un espacio de entrenamiento para poder administrar correctamente la Tienda</li>
				<li>Además, si estás listo, podrás integrar tu software de inventarios y facturación electrónica</li>
				</ol>
				<p>¿Estamos listos?</p> 
				<p>¡Hablemos!</p> 
				(espacio para info de contacto) "							
			</div>
		</div>
		<div id="caja-ver-mas-2">
		<br>	
			<div>
				<h2 class="text-center">TAMBIÉN PUEDE INTERESARTE</h2>
			</div>								
			<div class="row">
				<div class="col-sm-12 col-md-6 my-3">
					<a href="" @click="navegarexpress">
					<express/>
					</a>
				</div>
				<div class="col-sm-12 col-md-6 my-3">
					<a href="" @click="navegarvtex">
					<vtex/>
					</a>
				</div>
			</div>
		<br>
		</div>							
	</div>
</template>

<script>
	import express from './vermas/Express'
	import vtex from './vermas/Vtex'
	import navbar from './Navbar.vue'

	export default{
		components:{
			express,
			vtex,
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
			navegarvtex(){
				axios.get('/api/navegar-vtex').then(response => {
					
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
	#marketplace{
		background-image: url("../../../public/image/imagen-2.jpg");
		background-size: cover;
		background-position: center;
		height: 100%;
	}

	a{
		color: white;
	}

	#caja-ver-mas-2{
		background-image: url("../../../public/image/imagen-1.jpg");
		background-size: cover;
		background-position: center;
		
	}

	#super-caja-mar{
		overflow-x: hidden;
	}
</style>