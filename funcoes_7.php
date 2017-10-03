<?php 

	$hierarquia = array (
		array(
			'nome_cargo' => 'CEO',
			'subordinados' => array (
				//inicio: diretor comercial
				array(
					'nome_cargo' => 'Diretor Comercial',
					'subordinados' => array (
						//inicio: gerente vendas
						array(
						'nome_cargo' => 'Gerente vendas',
						)
						//Termino: gerente vendas
					)
				),

				//termino: diretor comercial
				//inicio: diretor financeiro
				array(
					'nome_cargo' => 'Direto financeiro',
					'subordinados'=> array(
						//inicio gerente contas
						array(
							'nome_cargo'=> 'Gerente contas'
						)
						//termino gerente de contas 
					)
				)
			)


		)


	);

	function exibe ($cargos) {

		$html = '<ul>';

		foreach ($cargos as $cargo ) {
			$html.="<li>";

			$html.= $cargo['nome_cargo'];

			if (isset($cargo['subordinados'])&& count($cargo['subordinados']) > 0) {

				$html.= exibe($cargo['subordinados']);
			}

			$html.="</li>";
		}

		$html .= '</ul>';
	
		return $html;
	}

echo exibe($hierarquia);

?> 