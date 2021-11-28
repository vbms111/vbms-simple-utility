<?php

$a_functions = array();
$a_stack = array();

class Condition {
	function renderEditor () {
		?>
		<select default="select variable">
			<option></option>
		</select>
		<select default="select condition">
			<option>&</option>
			<option>&&</option>
			<option>|</option>
			<option>||</option>
			<option>==</option>
			<option>!=</option>
			<option>&lt;</option>
			<option>&lt;=</option>
			<option>&gt;</option>
			<option>&gt;=</option>
			<option>function</option>
		</select>
		<select default="select variable">
			<option></option>
		</select>
		<a>add and</a>
		<a>add or</a>
		<a>delete</a>
		<?php
		for ($childCondition as $number => $condition) {
			$condition->renderEditor();
		}
	}
}



class Interprit_function () {
	$name;
	$description;
	$arguments;
	$instructions;
	
}

class Instruction {
	
	const type_if;
	const type_while;
	const type_for;
	const type_try;
	const type_assign;
	const type_invoke;
	const type_do;
	const type_return;
	
	$childInstructions = array();

	function getChildList () {
		return null;
	}
	
	function setChildInstructions ();
	
	function renderVariableEditor ($variable) {
		?>
		<input type="text" placeholder="enter variable name"/>
		<select placeholder="enter variable value">
			<?php
			
			?>
			<option name="<?php echo $function->name ?>">
		</select>
		<?php
	}
}

class If_instruction extends Instruction {

function renderEditor () {

?>
<div>
<div class="instructionTools">
<a>Delete</a>
</div>

</div>

<?php

}
function renderSymbol () {
}

}

class For_instruction extends Instruction {
	
	$variables = array();

	function renderEditor () {
	
		?>
		<div>
		<div class="instructionTools">
		<a>Delete</a>
		</div>
		
		<label>For</label>
		foreach ($this->variables as $position => $variable) {
			renderVariableEditor($variable);
		}
		variables
		
		condition
		itteration
		
		</div>

		<?php

	}

}

class Assign_instruction extends Instruction {


}

class Invoke_instruction extends Instruction {


}

class Do_instruction extends Instruction {


}

class While_instruction extends Instruction {

	function run;
}

class Try_instruction {

}



class Interpriter {
	
	$stack;
	
	function run ($instructionList) {
		
		
		
		foreach ($instructionList as $instruction_number => $instruction) {
			instruction
			
		}
		
		
		switch ($instruction) {
			case Instruction::type_if:
				
				break;
		}
		
		$instructionPointer = 0;
	}
}


?>