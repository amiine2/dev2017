<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>VueJs training</title>
	<script src='<?php echo base_url() . "js/vuejs.js" ?>'></script>
	<script src='<?php echo base_url() . "js/axios.js" ?>'></script>
</head>
<body>
<div id="growler">
    <h2 v-html='appName' v-bind:style='{color:color}'>appName</h2> 
    <table>
    	<tr>
    		<td>{{appName}}</td>
    		<td>{{appName}}</td>
    	</tr>
    	<tr>
    		<td>{{appName}}</td>
    		<td>{{appName}}</td>
    	</tr>
    </table>
</div>
<script type="text/javascript">

		var growler = new Vue({
			el: '#growler',
			data:{
			  appName: 'Growler',
			  color: "#336699"	
			}
		});
	</script>
</body>
</html