<div class="themosis-infinite-container">
    <table class="themosis-infinite">
        <tbody class="themosis-infinite-sortable" data-limit="{{ $field['limit'] }}">

        <?php
        // Rows
        for($i = 1; $i <= $field->getRows(); $i++):

            if(0 < $field['limit'] && $i > $field['limit']) break;
            ?>

            <tr class="themosis-infinite-row">
                <td class="themosis-infinite-order"><span>{{ $i }}</span></td>
                <td class="themosis-infinite-inner">
                    <table>
                        <tbody>
                        <?php
                        foreach($field['fields'] as $f):
                            // Set the id attribute.
                            $defaultId = $f['id'];
                            $f['id'] = $field['name'].'-'.$i.'-'.$f['name'].'-id';

                            // Grab the value if it exists.
                            if(isset($field['value'][$i][$f['name']])){
                                $f['value'] = $field['value'][$i][$f['name']];
                            }

                            // Set the name attribute.
                            // Note: this completely change the name attribute. Do not write
                            // any code that would need the default 'name' attribute below.
                            $defaultName = $f['name'];
                            $f['name'] = $field['name'].'['.$i.']['.$f['name'].']';

                            // Render the field.
                            echo(Themosis\Facades\View::make('_themosisMetaboxRow', array('field' => $f))->render());

                            // Reset Id, name and value.
                            $f['id'] = $defaultId;
                            $f['name'] = $defaultName;
                            unset($f['value']);
                        endforeach;
                        ?>
                        </tbody>
                    </table>
                </td>
                <td class="themosis-infinite-options">
                    <span class="themosis-infinite-add"></span>
                    <span class="themosis-infinite-remove"></span>
                </td>
            </tr>

        <?php
        endfor;
        // End rows.
        ?>

        </tbody>
    </table>
    @if(isset($field['info']))
    <div class="themosis-field-info">
        <p>{{ $field['info'] }}</p>
    </div>
    @endif
    <div class="themosis-infinite-add-field-container">
        <button type="button" id="themosis-infinite-main-add" class="button-primary">{{ __('Add Row', THEMOSIS_FRAMEWORK_TEXTDOMAIN) }}</button>
    </div>
</div>