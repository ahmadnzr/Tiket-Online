<script>
 		function datadel(value,jenis){
 			document.getElementById('myLink').href="hapus.php?del="+value+"&data="+jenis;
 		}
 	</script>
 	<div class="modal fade" id="myModal" tab-index="-1" role="dialog" aria-labelledby="myModalLabel">
 		<div class="modal-dialog" role="document">
 			<div class="modal-content">
 				<div class="modal-header">
 					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
 					<h4 class="modal-title" id="myModalLabel">Data akan terhapus <span class="glyphicon glyphicon-warning-sign"></span></h4>
 				</div>
 				<div class="modal-footer">
 					<button class="btn btn-default" type="button" data-dismiss="modal">Batalkan</button>
 					<a id="myLink" href=""><button type="button" class="btn btn-warning">Hapus data</button></a>
 				</div>
 			</div>
 		</div>
 	</div>