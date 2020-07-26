<template>
	<div id="home">
		<navbar/>

		<test/>

		<tabla/>

		<testimonios/>
	</div>
</template>

<script>
	import test from './Test'
	import tabla from './Table.vue'
	import testimonios from './Testimonios.vue'
	import navbar from './Navbar.vue'

	export default{
		components:{
			test,
			tabla,
			testimonios,
			navbar
		}
	}
</script>

<style>
	#home{
		height: 100%;
		overflow-x: hidden;
	}
</style>