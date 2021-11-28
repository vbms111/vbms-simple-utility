<?php 

namespace vbms-simple-utility {
	
namespace ui {

class Element {
	
	$publicId;
	$cssClass = null;
	
}

class FormElement extends Element {
	
	$name;
	$value;
	$type;
	
	function getInputHtml () {
		$html = '<input';
		$html .= ' type="'.htmlspecialchars($this->type,ENT_QUOTES).'"';
		$html .= ' value="'.htmlspecialchars($this->value,ENT_QUOTES).'"';
		$html .= ' name="'.htmlspecialchars($this->name,ENT_QUOTES).'"';
		if ($cssClass != null) {
			$thml .= ' class="'.$this->cssClass.'"';
		}
		$html .= '/>'.PHP_EOL;
		return $html;
	}
}

class Checkbox extends FormElement {
	
	
	static function get ($name, $checked, $value=null, $cssClass=null) {
		if (!empty($value)) {
			$this->value = $value; 
		}
		if (!empty($cssClass)) {
			$this->cssClass = $cssClass; 
		}
		$this->checked = $checked;
		$this->name = $name;
	}
	
	function getHtml () {
		$html = '<input type="checkbox" value="';
		$html .= $this->value;
		$html .= '" ';
		if ($checked) {
			echo 'checked="true" ';
		}
		$html .= 'name="'.htmlspecialchars($this->name,ENT_QUOTES).'" ';
		if ($class != null) {
			$thml .= 'class="'.$this->cssClass.'" ';
		}
		$html .= '/>'.PHP_EOL;
		return $html;
	}
}

class TextFeild extends UIElement {
	
	static function get ($name, $value=null, $cssClass=null) {
		
		$obj = new self();
		if (!empty($value)) {
			$obj->value = $value; 
		}
		if (!empty($cssClass)) {
			$obj->cssClass = $cssClass; 
		}
		$obj->name = $name;
		$obj->type = "text"
		return $obj;
	}
	
	function getHtml () {
		$html = '<input type="text" value="';
		$html .= htmlspecialchars($this->value,ENT_QUOTES);
		$html .= '" ';
		if ($checked) {
			echo 'checked="true" ';
		}
		$html .= 'name="'.htmlspecialchars($this->name,ENT_QUOTES).'" ';
		if ($class != null) {
			$thml .= 'class="'.$this->cssClass.'" ';
		}
		$html .= '/>';
		return $html;
	}
}
class TextArea extends FormElement {
	
	$rows = null;
	
	static function get ($name, $value=null, $cssClass=null, $rows=null) {
		
		$obj = new self();
		if (!empty($value)) {
			$obj->value = $value; 
		}
		if (!empty($cssClass)) {
			$obj->cssClass = $cssClass; 
		}
		if (!empty($rows)) {
			$obj->rows = $rows; 
		}
		$obj->name = $name;
		return $obj;
	}
	
	function getHtml () {
		$html = '<textarea name="';
		$html .= htmlspecialchars($this->name,ENT_QUOTES);
		$html = '"';
		if ($class != null) {
			$thml .= ' class="'.$this->cssClass.'"';
		}
		if ($rows != null) {
			$rows .= ' rows="'.$this->rows.'"';
		}
		$html .= '"> ';
		$html .= htmlspecialchars($this->value,ENT_QUOTES);
		$html .= '</textarea>';
		return $html;
		
	}
}

class PasswordFeild extends UIElement {
	
	static function get ($name, $value=null, $cssClass=null) {
		
		$obj = new self();
		if (!empty($value)) {
			$obj->value = $value; 
		}
		if (!empty($cssClass)) {
			$obj->cssClass = $cssClass; 
		}
		$obj->name = $name;
		return $obj;
	}
	
	function getHtml () {
		$html = '<input type="password" value="';
		$html .= htmlspecialchars($this->value,ENT_QUOTES);
		$html .= '"';
		$html .= ' name="'.htmlspecialchars($this->name,ENT_QUOTES).'" ';
		if ($class != null) {
			$thml .= ' class="'.$this->cssClass.'"';
		}
		$html .= '/>';
		return $html;
	}
}

class FileUpload extends UIElement {
	
	static function get ($name, $value, $cssClass=null) {
		
		$obj = new self();
		$obj->name = $name;
		$obj->value = $value;
		$obj->cssClass = $cssClass;
		return $obj;
	}
	
	function getHtml () {
		$html = '<input type="file" value="';
		$html .= htmlspecialchars($this->value,ENT_QUOTES);
		$html .= '"';
		$html .= ' name="'.htmlspecialchars($this->name,ENT_QUOTES).'" ';
		if ($class != null) {
			$thml .= ' class="'.$this->cssClass.'"';
		}
		$html .= ' value="'.$value.'"';
		$html .= '/>';
		return $html;
	}
}

class MultiFileUpload extends Element {
	
	static function get ($name, $value, $cssClass=null) {
		
		$obj = new self();
		$obj->name = $name;
		$obj->value = $value;
		$obj->cssClass = $cssClass;
		return $obj;
	}
	
	function getHtml () {
		$html = '';
		$html .= '<input type="file" value="';
		$html .= htmlspecialchars($this->value,ENT_QUOTES);
		$html .= '"';
		$html .= ' name="'.htmlspecialchars($this->name,ENT_QUOTES).'" ';
		if ($class != null) {
			$thml .= ' class="'.$this->cssClass.'"';
		}
		$html .= ' value="'.$value.'"';
		$html .= '/>';
		$html .= '<div class="uploadedFiles'
		if ($class != null) {
			$html .= ' '.$this->cssClass;
		}
		$html .= '">';
		
		$html .= '</div>';
		
		return $html;
	}
}

class Select extends UIElement {
	
	$multiple;
	$options;
	$optionGroup;
	$selected;
	
	static function get ($name, $options, $selected=null, $multiple=false, $cssClass=null) {
		
		$obj = new self();
		$obj->name = $name;
		$obj->options = $options;
		$obj->selected = $selected;
		$obj->multiple = $multiple;
		$obj->cssClass = $cssClass;
		return $obj;
	}
	
	function getHtml () {
		$html = '<select value="';
		$html .= htmlspecialchars($this->value,ENT_QUOTES);
		$html .= '"';
		$html .= ' name="'.htmlspecialchars($this->name,ENT_QUOTES).'" ';
		if ($class != null) {
			$html .= ' class="'.$this->cssClass.'"';
		}
		$html .= '>'.PHP_EOL;
		foreach ($this->options as $value => $text) {
			
			$html .= '<option';
			$html .= 'value="'.$value.'"'
            if ($selected == $value) {
                $html .= ' selected="selected"';
			}
			$html .= '>';
			$html .= htmlspecialchars($text,ENT_QUOTES);
			$html .= '</option>'.PHP_EOL;
		
		}
		$html .= '</select>'.PHP_EOL;
		return $html;
	}
}

class MultiSelect extends FormElement {
	
}




class DatePicker extends FormElement {
	
	static function get ($name, $value, $cssClass=null) {
		
		$obj = new self();
		$obj->name = $name;
		$obj->value = $value;
		$obj->cssClass = $cssClass;
		return $obj;
	}
	
	function getHtml () {
		
        if (empty($this->value)) {
            $value = date("Y-m-d");
        }
        $dateInfo = date_parse_from_format("Y-m-d", $value);
		$html = '';
		$html .= '<input type="date"';
		$html .= ' name="'.htmlspecialchars($this->name,ENT_QUOTES).'" ';
		$html .= ' value="'.htmlspecialchars($dateInfo["day"].'/'.$dateInfo["month"].'/'.$dateInfo["year"],ENT_QUOTES).'"';
		if ($class != null) {
			$thml .= ' class="'.$this->cssClass.'"';
		}
		$html .= '/>';
		return $html;
	}
}

class TimePicker extends FormElement {
	
	static function get ($name, $value, $cssClass=null) {
		
		$obj = new self();
		$obj->name = $name;
		$obj->value = $value;
		$obj->cssClass = $cssClass;
		return $obj;
	}
	
	function getHtml () {
		$html = '';
		$html .= '<input type="time"';
		$html .= ' value="'.htmlspecialchars($this->value,ENT_QUOTES).'"';
		$html .= ' name="'.htmlspecialchars($this->name,ENT_QUOTES).'" ';
		if ($class != null) {
			$thml .= ' class="'.$this->cssClass.'"';
		}
		$html .= '/>';
		$html .= '<div class="uploadedFiles'
		if ($class != null) {
			$html .= ' '.$this->cssClass;
		}
		$html .= '">';
		$html .= '</div>';
		
		return $html;
	}
}


class HumanVerification extends FormElement {
	
	
	function getHtml () {
		$html = '<input type="password" value="';
		$html .= htmlspecialchars($this->value,ENT_QUOTES);
		$html .= '"';
		$html .= ' name="'.htmlspecialchars($this->name,ENT_QUOTES).'" ';
		if ($class != null) {
			$thml .= ' class="'.$this->cssClass.'"';
		}
		$html .= '/>';
		return $html;
	}
	
    static function printCaptcha ($name) {
        Context::addRequiredStyle("resource/css/captcha.css");
        $captcha = Captcha::getCaptcha($name);
        ?>
        <div class="captchaDiv">
            <div class="captchaImgDiv">
				<img src="<?php echo NavigationModel::createServiceLink("images",array("action"=>"captcha","name"=>$name,"rand"=>Common::rand())); ?>" alt="" />
			</div>
            <div class="captchaInputDiv">
				<input type="text" name="<?php echo $captcha->inputName; ?>_answer" value="" />
				<input type="hidden" name="<?php echo $captcha->inputName; ?>_key" value="<?php echo $captcha->key; ?>" />
			</div>
        </div>
        <?php
    }
}

class InputFeilds {
    
    
    static function printHtmlEditor ($name,$value="",$cssFile="",$fileSystem = array("action"=>"www")) {
        Context::addRequiredStyle("resource/js/elfinder/css/elfinder.min.css");
        Context::addRequiredScript("resource/js/elfinder/js/elfinder.min.js");
        Context::addRequiredStyle("resource/js/elrte/css/elrte.min.css");
        Context::addRequiredScript("resource/js/elrte/js/elrte.min.js");
        Context::addRequiredScript("resource/js/elrte/js/i18n/elrte.en.js");
        ?>
        <textarea id="<?php echo $name; ?>" name="<?php echo $name; ?>">
            <?php echo htmlspecialchars($value,ENT_QUOTES); ?>
        </textarea>
        <script>
        $('#<?php echo $name; ?>').elrte({
            doctype : '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN">',
            absoluteURLs: false,
            cssClass : 'el-rte',
            lang     : 'en',
            height   : 420,
            allowSource: true,
            toolbar  : 'maxi',
            cssfiles : ['<?php echo $cssFile; ?>'],
            fmOpen : function(callback) {
                $('<div />').dialogelfinder({
                    url : '<?php echo NavigationModel::createServiceLink("fileSystem", $fileSystem); ?>',
                    lang : 'en',
                    commandsOptions: {
                        getfile: {
                            oncomplete: 'destroy' // destroy elFinder after file selection
                        }
                    },
                    getFileCallback : function(file) { callback(file); }
                }).elfinder('instance');
            }
        });
        </script>
        <?php
    }
    
    static function printBBEditor ($name,$value="") {
        
    }
    
    static function printMultiSelect ($name,$options,$selection=null,$styled=true) {
        
        echo "<select class='multiselect' multiple='multiple' id='".htmlspecialchars($name,ENT_QUOTES)."' name='".htmlspecialchars($name,ENT_QUOTES)."[]'>";
        if (!empty($selection)) {
            foreach ($selection as $value) {
                if (isset($options[$value])) {
                    echo "<option value='".htmlspecialchars($value,ENT_QUOTES)."' selected='true'>".htmlspecialchars($options[$value])."</option>";
                }
            }
        }
        foreach ($options as $key => $valueName) {
            if (empty($selection) || !in_array($key, $selection)) {
                echo "<option value='".htmlspecialchars($key,ENT_QUOTES)."'>".htmlspecialchars($valueName)."</option>";
            }
        }
        echo "</select>";
        
        if ($styled) {
            Context::addRequiredStyle("resource/js/multiselect/css/ui.multiselect.css");
            Context::addRequiredScript("resource/js/multiselect/js/plugins/localisation/jquery.localisation-min.js");
            Context::addRequiredScript("resource/js/multiselect/js/plugins/scrollTo/jquery.scrollTo-min.js");
            Context::addRequiredScript("resource/js/multiselect/js/ui.multiselect.js");
            ?>
            <script type="text/javascript">
            $(function(){
                $("#<?php echo htmlspecialchars($name,ENT_QUOTES); ?>").multiselect();
            });
            </script>
            <?php
        }
    }
    
    static function printMultiFileUpload ($name,$action,$values=array()) {
        Context::addRequiredScript("resource/js/valums-file-uploader/client/fileuploader.js");
        Context::addRequiredStyle("resource/js/valums-file-uploader/client/fileuploader.css");
        ?>
            <div id="file-uploader-<?php echo htmlspecialchars($name,ENT_QUOTES); ?>">
            <noscript>          
                <p>Please enable JavaScript to use file uploader.</p>
                <!-- or put a simple form for upload here -->
            </noscript>         
        </div>
        <script>
        var uploader = new qq.FileUploader({
            // pass the dom node (ex. $(selector)[0] for jQuery users)
            element: document.getElementById('file-uploader-<?php echo htmlspecialchars($name,ENT_QUOTES); ?>'),
            // path to server-side upload script
            action: '<?php echo $action; ?>'
        });
        </script>
        <?php
    }
    

}

} 

} 