<?php 

namespace Octobert\Calculator\Components;

class Calculator extends \Cms\Classes\ComponentBase
{

    public function componentDetails()
    {
        return [
            'name' => 'Calculator',
            'description' => 'Display a simple computation box'
        ];
    }

	public function defineProperties()
	{
	    return [
	        'operation' => [
	            'title'       => 'Default operation',
	            'type'        => 'dropdown',
	            'default'     => 'add',
	            'placeholder' => 'Select math operation',
	            'options'     => [
					'add'	=>	'Addition',
					'minus'	=>	'Subtraction',
					'mult'	=>	'Multiplication',
					'div'	=>	'Division'
	            ]
	        ]
	    ];
	}

	public function math_operators()
	{		
		$operation = $this->defineProperties()['operation']['options'];
		return [
			"operators" => $operation,
			"default_operator" => $this->property('operation'),
		];
	}

	public function onCompute()
	{
		
		$operation = input('math-op');

		if( $operation == 'add' ){
			
			$total = input('num1') + input('num2');
		
		}elseif( $operation == 'minus' ){

			$total = input('num1') - input('num2');

		}elseif( $operation == 'mult' ){

			$total = input('num1') * input('num2');

		}elseif( $operation == 'div' ){

			$total = input('num1') / input('num2');

		}
		
		return ["total" => $total];
	}

}