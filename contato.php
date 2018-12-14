<?php include 'components/header.php'; ?>
	
	<section class="topo-interna">
		<div class="container">
			<h1>Contato</h1>
		</div><!-- container -->
	</section><!-- topo-interna -->

	<section class="interna contato">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-8">
					<form>
	                    <input type="text" class="form-control" placeholder="SEU NOME">
	                    <input type="text" class="form-control" placeholder="SEU E-MAIL">
	                    <input type="text" class="form-control" placeholder="SEU TELEFONE">
	                    <input type="text" class="form-control" placeholder="ASSUNTO">
	                    <textarea class="form-control" placeholder="MENSAGEM"></textarea>
	                    <button>ENVIAR</button>
	                </form>
				</div><!-- md-8 -->
				<?php include 'components/sidebar.php'; ?>
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- interna -->

<?php include 'components/footer.php'; ?>