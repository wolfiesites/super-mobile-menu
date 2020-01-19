<?php 
if ($superoption['type'] == 'radio') {
    echo '<tr valign="top">';
    echo '<th scope="row">' . $superoption['label'] . '</th>';
    echo '<td>';
    echo '<div class="smm-option-wrapper">';
    $just_name = get_between($superoption['name'], "[", "]");
    $count = 0;
    foreach($superoption['options'] as $option ) {
        if( $count == $super_mobile_menu_settings[$just_name] ) {
            echo '<input type="radio" name="'.$superoption['name'].'" value="'.$count.'" checked > '. $option . '<br>';
        } else {
            echo '<input type="radio" name="'.$superoption['name'].'" value="'.$count.'">'.$option.'<br>';
        }
        $count++;
    }
    echo '</div>';
    echo '</td>';   
    echo '</tr>';
} 