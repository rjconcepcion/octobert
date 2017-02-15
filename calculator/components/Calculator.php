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
	/**
	 * computation
	 */
	public function onCompute()
	{
		//$data = request()->input();
		$total = input('num1') + input('num2');
		return ["total" => $total];
	}


}