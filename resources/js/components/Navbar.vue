<template>
	<div >
		<nav class="navbar navbar-dark fixed-top" id="barra" style="width: 100%; margin: 0px; padding: 0px;">
		<div class="row justify-content-center" style="width: 100%; margin: 0px;">
			<div class="col-12">
			  	<div class="text-center"><a target="_blank" href="https://www.cpcagencia.com/" class="navbar-brand"><img :src="logo" alt="" style="width: 125px;"></a></div>
			</div>
			<div class="col-12" style="background-color: rgba(256,256,256,0.5);">
				<div class="text-center ">
					<a target="_blank" href="https://www.facebook.com/CPCagencia/" class="nav-item mx-2"><img src="../../../public/image/facebook-square-brands.svg" style="width: 20px;" alt=""></a>
					<a target="_blank" href="https://www.instagram.com/cpcagencia/?hl=es" class="nav-item mx-2"><img src="../../../public/image/instagram-square-brands.svg" style="width: 20px" alt=""></a>
					<a target="_blank" href="https://twitter.com/cpcagencia?lang=es" class="nav-item mx-2"><img src="../../../public/image/twitter-square-brands.svg" style="width: 20px" alt=""></a>
					<a target="_blank" href="https://www.linkedin.com/company/cpcgroup" class="nav-item mx-2"><img src="../../../public/image/linkedin-brands.svg" style="width: 20px" alt=""></a>
				</div>
			</div>
		</div>
	
	
	
		  <!--
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNav">
		    <ul class="navbar-nav">
		      <li class="nav-item active">
		        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Features</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Pricing</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
		      </li>
		    </ul>
		  </div>
		-->
		</nav>
	</div>
</template>

<script>
	import cpc from '../../../public/image/logo-cpc.png'
	export default{
		data(){
			return{
				logo: cpc
			}
		}
	}
</script>

<style scoped>
	#barra{
		background-color: rgba(0,0,0,0.8);
	}
</style>