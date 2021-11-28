<?php

function getSystemTables () {
	
}
function getModuleTables () {
	
}

// select

// feilds

// from

from 
<select name="tableName_" />
	<optgroup label="Module Tables">
		<option value=""></option>
	</optgroup>
	<optgroup label="System Tables">
		<option value=""></option>
	</optgroup
</select>

as
<input type="text" name="tableAlias_" />

// join
type
<select name="joinType_">
	<option value="">join</option>
	<option value="">left join</option>
	<option value="">inner join</option>
	<option value="">outer join</option>
	<option value="">cross</option>
	<option value="">right inner join</option>
</select>

// where 
if (empty($conditions) {
	
} else {
	foreach ($conditions as $c => $condition) {
		
		?>
		<div>
			<label for="condition_table_">Table</label>
			<select name="condition_table_">
				<?php
				foreach ($tables as $pos =>$table) {
					?><option value="<?php ?>"><?php echo $table->name; ?></option><?php
				}
				?>
			</select>
		</div>
		<?php
	}
	?>
		<a href="">Add and</a>
		<a href="">Add or</a>
	<?php
}
where


// order

?>