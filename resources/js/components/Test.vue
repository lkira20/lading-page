<template>
	<div id="test">
		<div class="row align-items-center" style="height: 100%;" id="error">
	
			<div class="col-sm-12 col-md-12" >
				<div class="row justify-content-center">
					<div class="col-12">
						<p class="text-center d-lg-none" id="eslogan">El que tenga tienda que no la atienda</p>
						<p class="text-center h3" id="pregunta">¿Cual es la tienda virtual mas indicada para mi?</p>
					</div>
					
	
					<button type="button" class="btn-lg btn-primary rounded-pill" data-toggle="modal" data-target="#exampleModal">
					 Conocer la tienda ideal para mi
					</button>

					<!-- Modal -->
					<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  <div class="modal-dialog">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">
					       <!--FORMULARIO-->
							<div class="container card shadow-lg" style="color: black;">
							<div class="card-body">
								<form @submit.prevent="enviar">
								<div class="form-group" v-if="contador == 1">
								    <p>¿Tiene ya un hosting y o dominio adquirido para tu nueva tienda?</p>
								    <div class="form-check form-check-inline">
										<input required class="form-check-input" type="radio" name="pregunta1" value="1" v-model.number="pregunta1">
										<label class="form-check-label" for="pregunta11">si</label>
									</div>
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="pregunta1" value="2" v-model.number="pregunta1">
										<label class="form-check-label" for="pregunta12">no</label>
									</div>
										<div class="form-check form-check-inline">
										  <input class="form-check-input" type="radio" name="pregunta1" value="3" v-model.number="pregunta1">
										  <label class="form-check-label" for="pregunta13">no lo se</label>
										</div>
								</div>

								<div class="form-group" v-if="contador == 2">
								    <p>¿En cuanto tiempo necesitas que tu tienda virtual este al aire?</p>
								    <div class="form-check form-check-inline">
										<input required class="form-check-input" type="radio" name="pregunta2" value="1" v-model.number="pregunta2">
										<label class="form-check-label" for="pregunta21">puedo esperar 1 semana</label>
									</div>
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="pregunta2" value="3" v-model.number="pregunta2">
										<label class="form-check-label" for="pregunta22">puedo esperar entre 2 y cuatro semanas</label>
									</div>
										<div class="form-check form-check-inline">
										  <input class="form-check-input" type="radio" name="pregunta2" value="5" v-model.number="pregunta2">
										  <label class="form-check-label" for="pregunta23">puedo esperar 4 semanas</label>
										</div>
								</div>

								<div class="form-group" v-if="contador == 3">
								    <p>¿Cuantas tiendas fisicas o punto de atencion/venta tienes actualmente?</p>
								    <div class="form-check form-check-inline">
										<input required class="form-check-input" type="radio" name="pregunta3" value="1" v-model.number="pregunta3">
										<label class="form-check-label" for="pregunta31">0</label>
									</div>
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="pregunta3" value="3" v-model.number="pregunta3">
										<label class="form-check-label" for="pregunta32">1</label>
									</div>
										<div class="form-check form-check-inline">
										  <input class="form-check-input" type="radio" name="pregunta3" value="5" v-model.number="pregunta3">
										  <label class="form-check-label" for="pregunta33">mas de 1</label>
										</div>
								</div>

								<div class="form-group" v-if="contador == 4">
								    <p>¿Que tan personalizable quieres tu tienda virtual?</p>
								    <div class="form-check form-check-inline">
										<input required class="form-check-input" type="radio" name="pregunta4" value="1" v-model.number="pregunta4">
										<label class="form-check-label" for="pregunta41">Básica: que me permita actualizar Logo, banners, categorías, productos, referencias, precios, blog, direcciones, políticas de pago y botón de whatsapp.</label>
									</div>
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="pregunta4" value="3" v-model.number="pregunta4">
										<label class="form-check-label" for="pregunta42">Media: que me permita actualizar Logo, colores, Categorias, productos, referencias, precios, Upselling, politicas de pago, tipos de clientes, tipos de usuarios, notificaciones por correo, vendedores, canales de ventas</label>
									</div>
										<div class="form-check form-check-inline">
										  <input class="form-check-input" type="radio" name="pregunta4" value="5" v-model.number="pregunta4">
										  <label class="form-check-label" for="pregunta43">Full: Que pueda actualizar siempre mis productos, personalizar espacios y crear desarrolos a medida como probadores de ropa, personalización de productos, etc. </label>
										</div>
								</div>

								<div class="form-group" v-if="contador == 5">
								    <p>¿Tienes un equipo asignado internamente en tu empresa que te ayude a manejar tu Tienda Virtual?</p>
								    <div class="form-check form-check-inline">
										<input required class="form-check-input" type="radio" name="pregunta5" value="1" v-model.number="pregunta5">
										<label class="form-check-label" for="pregunta51">No, busco hacerlo yo mismo</label>
									</div>
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="pregunta5" value="3" v-model.number="pregunta5">
										<label class="form-check-label" for="pregunta52">Si, un equipo de mercadeo pequeño al que podría capacitar</label>
									</div>
										<div class="form-check form-check-inline">
										  <input class="form-check-input" type="radio" name="pregunta5" value="5" v-model.number="pregunta5">
										  <label class="form-check-label" for="pregunta53">Si, un equipo de mercadeo y TI robusto</label>
										</div>
								</div>

								<div class="form-group" v-if="contador == 6">
								    <p>¿Cómo podrías cargar inventario de tus productos o servicios en la Tienda Virtual?</p>
								    <div class="form-check form-check-inline">
										<input required class="form-check-input" type="radio" name="pregunta6" value="1" v-model.number="pregunta6">
										<label class="form-check-label" for="pregunta61">Manualmente</label>
									</div>
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="pregunta6" value="4" v-model.number="pregunta6">
										<label class="form-check-label" for="pregunta62">Tengo un software de inventarios que podría integrar</label>
									</div>
								</div>

								<div class="form-group" v-if="contador == 7">
								    <p>¿Cómo se daría la facturación en tu Tienda Virtual?</p>
								    <div class="form-check form-check-inline">
										<input required class="form-check-input" type="radio" name="pregunta7" value="1" v-model.number="pregunta7">
										<label class="form-check-label" for="pregunta71">La hago manualmente</label>
									</div>
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="pregunta7" value="3" v-model.number="pregunta7">
										<label class="form-check-label" for="pregunta72">Quiero que la haga mi Tienda Virtual</label>
									</div>
										<div class="form-check form-check-inline">
										  <input class="form-check-input" type="radio" name="pregunta7" value="5" v-model.number="pregunta7">
										  <label class="form-check-label" for="pregunta73">Tengo un software que podría integrar con mi Tienda Virtual para facturar</label>
										</div>
								</div>
								
								  <button type="submit" class="btn btn-primary btn-block" v-if="contador == 8">Conoce la tienda ideal para ti</button>
								  <button type="button" class="btn btn-primary" @click="contador= contador - 1" v-if="contador > 1 && contador < 8">Anterior</button>
								  <button type="button" class="btn btn-primary" @click="contar" v-if="contador < 8">Siguiente</button>
								</form>
							</div>
							</div>
							 <!--FORMULARIO-->
					      </div>
					    </div>
					  </div>
					</div>
				</div>
				
			</div>
		</div>

		<!--TABLE-->
		<!--
		<div>
			<tabla/>
		</div>
		-->
		<!--TABLE-->
	</div>
</template>

<script>
	import tabla from './Table.vue'

	export default{
		components:{
			tabla
		},
		data(){
			return {
				pregunta1: 0,
				pregunta2: 0,
				pregunta3: 0,
				pregunta4: 0,
				pregunta5: 0,
				pregunta6: 0,
				pregunta7: 0,
				test: false,
				contador: 1
			}
		},
		methods:{
			enviar(){
				axios.post('/api/test-hecho', {total: this.suma}).then(response => {
					
					window.location.replace(response.data);
				}).catch(e => {
					console.log(e);
				})
			},
			contar(){
				this.contador += 1;
				console.log(this.contador);
			}
		},
		computed:{
			suma(){
				
				return 1 + this.pregunta2 + this.pregunta3 + this.pregunta4 + this.pregunta5 + this.pregunta6 + this.pregunta7;
			}
		},

	}
</script>

<style scoped>
	#test{
		height: 100%;
		background-image: url("../../../public/image/imagen-3.jpg");
		background-size: cover;
		background-position: center;
		position: relative;
		
		/*background-repeat: no-repeat;*/
	}

	#pregunta{
		margin-top: 10em;

	}

	#eslogan{
		margin-top: 50px;
		font-size: 3em;
	}

	#error{
		overflow: hidden;
	}

	@media (max-width: 768px){
		#test{
			background-image: url("../../../public/image/oficina.jpg");
			background-size: cover;
			background-position: center;
			position: relative;
		}

		#test:before{
		content:'';
		  position: absolute;
		        top: 0;
		  bottom: 0;
		  left: 0;
		  right: 0;
		  background-color: rgba(1,14,110,0.8);	
		}
	
		#pregunta{
			margin-top: auto;

		}

		#eslogan{
			margin-top: 3.5em;
			font-size: 3em;
		}

	}

	@media (min-width: 768px)and (max-width: 992px){
		#test{
		background-image: url("../../../public/image/oficina.jpg");
		background-size: cover;
		background-position: center;
		}

		#test:before{
		content:'';
		  position: absolute;
		        top: 0;
		  bottom: 0;
		  left: 0;
		  right: 0;
		  background-color: rgba(1,14,110,0.8);																					
		}

		#pregunta{
			margin-top: auto;

		}

		#eslogan{
			margin-top: 1.5em;
			font-size: 6em;
		}
	}

	@media (min-width: 992px)and (max-width: 1200px){
		#test{
		
			background-size: cover;
			background-position: center;
		}
	}

</style>