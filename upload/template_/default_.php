<html>
	<head>
		<title><?php echo $title_for_layout; ?></title>
		<?php 
			$this->css('style');
			$this->css('style2');

			$this->js('teste2');
			$this->js('teste2');
		?>
	</head>
	<body>
		<div class="topo">
			<?php $this->position('Topo') ?>
		</div>

		<div class="esquerda">
			<?php $this->position('Esquerda') ?>
		</div>

		<div class="conteudo">
			<?php $this->position('Acima_Conteudo') ?>
			<?php $this->content(); ?>
			<?php $this->position('Abaixo_Conteudo') ?>
		</div>
		<div class="direita">
			<?php $this->position('direita') ?>
		</div>

		<div class="rodape">
			<?php $this->position('rodape') ?>
		</div>

	</body>
</html>