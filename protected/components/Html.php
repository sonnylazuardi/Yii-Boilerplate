<?php
class Html extends CHtml
{
	public static $errorSummaryCss='alert alert-error';

    public function activeField($type, CModel $model, $attribute, array $htmlOptions = array())
    {
        if (! array_key_exists('placeholder', $htmlOptions)) {
            $htmlOptions['placeholder'] = $model->getAttributeLabel($attribute);
        }
        if (! array_key_exists('required', $htmlOptions) && $model->isAttributeRequired($attribute)) {
            $htmlOptions['required'] = '';
        }
		self::resolveNameID($model, $attribute, $htmlOptions);
		self::clientChange('change', $htmlOptions);
		return self::activeInputField($type ,$model,$attribute,$htmlOptions);
    }

    public static function activeTextArea(CModel $model, $attribute, array $htmlOptions = array())
    {
        if (! array_key_exists('placeholder', $htmlOptions)) {
            $htmlOptions['placeholder'] = $model->getAttributeLabel($attribute);
        }
        if (! array_key_exists('required', $htmlOptions) && $model->isAttributeRequired($attribute)) {
            $htmlOptions['required'] = '';
        }
        return parent::activeTextArea($model, $attribute, $htmlOptions);
    }

	/**
	 * Generates a submit button.
	 * @param string $label the button label
	 * @param array $htmlOptions additional HTML attributes. Besides normal HTML attributes, a few special
	 * attributes are also recognized (see {@link clientChange} and {@link tag} for more details.)
	 * @return string the generated button tag
	 * @see clientChange
	 */
	public static function submitButton($label='submit', array $htmlOptions=array())
	{
		$htmlOptions['type'] = 'submit';
        if (array_key_exists('class', $htmlOptions)) {
            $htmlOptions['class'] .= ' btn-primary';
        } else {
            $htmlOptions['class'] = 'btn-primary';
        }
		return self::button($label,$htmlOptions);
	}

	/**
	 * Generates a button.
	 * @param string $label the button label
	 * @param array $htmlOptions additional HTML attributes. Besides normal HTML attributes, a few special
	 * attributes are also recognized (see {@link clientChange} and {@link tag} for more details.)
	 * @return string the generated button tag
	 * @see clientChange
	 */
	public static function button($label = 'button', array $htmlOptions=array())
	{
        if (array_key_exists('class', $htmlOptions)) {
            $htmlOptions['class'] .= ' btn';
        } else {
            $htmlOptions['class'] = 'btn';
        }
        return parent::button($label, $htmlOptions);
	}

    public static function errorSummary(
        CModel $model,
        $header = null,
        $footer = null,
        $htmlOptions = array()
    )
    {
        if (! isset($htmlOptions['class'])) {
            $htmlOptions['class']=self::$errorSummaryCss;
        }
        if (is_null($header)) {
            $header = self::tag(
                'a',
                array(
                    'data-dismiss' => 'alert',
                    'class' => 'close',
                ),
                '×'
            );
        }
        return parent::errorSummary($model, $header, $footer, $htmlOptions);
    }
}
