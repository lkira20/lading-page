<template>
	<div id="testimonios" >
		<div>
		<br>
		<h2 class="text-center display-4">Testimonios</h2>
		<div class="row justify-content-center" v-for="(usuario,index) in usuarios" :key="index">
			<div class="col-sm-12 col-md-3"">
				<img :src="usuario.avatar" alt="" class="img-fluid mx-auto d-block rounded-circle w-100">
			</div>
			<div class="col-sm-12 col-md-9">
				<div class="card mt-3" id="card-testimonios">
					<div class="card-header">
						<h3 class="card-title text-center" style="color: black;">{{usuario.first_name}}</h3>
					</div>
					<div class="card-body">
						
						<p class="card-text" style="color: black;">Lorem ipsum tempor dolore eiusmod in officia pariatur in aute sit consectetur ut ad velit quis exercitation dolore sit officia laboris nisi commodo consectetur fugiat tempor dolor in quis ullamco ex incididunt aliqua qui id enim laborum duis mollit ut esse nisi cillum commodo deserunt elit cupidatat excepteur ut do ad ea mollit irure in non occaecat pariatur reprehenderit commodo aute aliqua cupidatat aliquip elit velit veniam do minim ad deserunt sunt excepteur cillum velit sed anim id quis in duis dolore dolor sunt velit labore do ea in ut culpa sit anim veniam deserunt non elit cupidatat cupidatat sint sint aute dolore eiusmod eu dolore consequat officia ut in veniam sint deserunt adipisicing non laboris ad id in est laborum ut magna sit amet laboris laboris voluptate laboris ut sed ullamco enim irure mollit aliquip elit consectetur dolor do id enim id eiusmod esse officia ut et aute ad cupidatat ut dolor in deserunt commodo sed duis nulla sed laboris aliquip aute id nostrud irure nostrud tempor proident officia dolore culpa sunt nisi aute officia incididunt ex nostrud eu dolor aliqua irure tempor sed consectetur do minim velit tempor mollit do duis adipisicing elit ut ea in eiusmod ad mollit qui mollit reprehenderit incididunt incididunt fugiat labore fugiat est veniam sit ad mollit aliqua culpa dolore do elit irure officia non nisi pariatur dolore velit ut labore sunt ullamco excepteur esse aute consequat ut qui consectetur eu ea labore dolor voluptate laborum pariatur minim dolor in eu ullamco adipisicing cupidatat voluptate eiusmod cupidatat anim et aliqua consequat fugiat esse exercitation.</p>
					</div>
				</div>
			</div>
		</div>
		</div>
	</div>
</template>

<script>
	export default{
		data(){
			return{
				usuarios: []
			}
		},
		methods:{
			perdirUsuarios(){
				axios.get('https://reqres.in/api/users?page=2').then(response => {
					console.log(response.data)
					this.usuarios = response.data.data
				}).catch(e => {
					console.log(e);
				})
			}
		},
		created(){
			this.perdirUsuarios()
		}
	}
</script>

<style>
	#testimonios{
		background-image: url("../../../public/image/imagen-2.jpg");
		background-size: 100%;
	}

	#card-testimonios{
		background-color: rgba(256,256,256,0.8);
	}
</style>