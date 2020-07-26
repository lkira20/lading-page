<template>
	<div id="super-caja-ex">
		<div id="express">
			<navbar/>
			<br style="margin-top: 65px;">
			<div class="alert alert-success alert-dismissible fade show" role="alert" v-if="resultado == 1"  style="margin-top: 70px;">
				<p class="text-center">LA OPCIÓN IDEAL PARA TI ES UNA</p>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="container" style="margin-top: 65px;">
				<h1 class="text-center">TIENDA EXPRESS</h1>

				<p class="justify">"Con nuestra Tienda Express podrás tener una solución ágil y real para comercializar tus productos o servicios, en solo 5 días podrás tener montado tu negocio en la red y vender a todo el país. Las Tiendas Express permiten a través de un paquete de plantillas predeterminadas:</p>
				
				<ol>
				<li>Pesonalizar tu logo, banners, ctegorías y productos, referencias, precios, direcciones y políticas de pagos y envíos.</li>
				<li>Contará con un espacio tipo Blog para que posiciones tu página con contenido actualizado, y con un botón a tu whatsapp para responder las dudas de tus clientes.</li>
				<li>No necesitas un equipo experto para tramitarla y mantenerla actualizada, de nuestra mano, tendrás una tienda funcional que vende por ti 24/7</li>
				<li>Podrás cargar tus inventarios una o dos veces por semana según tu rotación</li>
				<li>Se articulará con alguna de las pasarelas de pago más conocidas del país</li>
				</ol>

				<p>¿Estamos listos?</p> 
				<p>¡Hablemos!</p> 
				<div>
					<p>(espacio para info de contacto)</p>
				</div>
				<br>
			</div>
		</div>							
			<div id="caja-ver-mas">
				<div>
					<br>
					<h2 class="text-center">TAMBIÉN PUEDE INTERESARTE</h2>
					<div class="row">
						<div class="col-12 col-md-6 my-3">
							<a href="" @click="navegarmarketplace">
							<marketplace/>
							</a>
						</div>
						<div class="col-12 col-md-6 my-3">
							<a href="" @click="navegarvtex">
							<vtex/>
							</a>
						</div>
					</div>
				</div>					
			<br>	
			</div>
					
	</div>
</template>

<script>
	import marketplace from './vermas/Marketplace'
	import vtex from './vermas/Vtex'
	import navbar from './Navbar.vue'
	export default{
		components:{
			marketplace,
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
			navegarmarketplace(){
				axios.get('/api/navegar-marketplace').then(response => {
					
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
	#express{
		height: 100%;
		background-image: url("../../../public/image/imagen-2.jpg");
		background-size: cover;
		background-position: center;
		
	}

	a{
		color: white;
	}

	#caja-ver-mas{
		background-image: url("../../../public/image/imagen-1.jpg");
		background-size: cover;
		background-position: center;
		height: 100%;
	}

	#super-caja-ex{
		overflow-x: hidden;
	}	
</style>