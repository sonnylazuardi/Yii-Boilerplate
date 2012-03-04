<?php
class Form extends CActiveForm
{
	/**
	 * @var string the CSS class name for error messages. Defaults to 'errorMessage'.
	 * Individual {@link error} call may override this value by specifying the 'class' HTML option.
	 */
	public $errorMessageCssClass='error';

    public function textField(CModel $model, $attribute, $htmlOptions = array())
    {
        return Html::activeField('text', $model, $attribute, $htmlOptions);
    }

    public function emailField(CModel $model, $attribute, $htmlOptions = array())
    {
        return Html::activeField('email', $model, $attribute, $htmlOptions);
    }

	public function textArea($model,$attribute,$htmlOptions=array())
	{
		return Html::activeTextArea($model,$attribute,$htmlOptions);
	}

    public function errorSummary(
        CModel $models,
        $header = null,
        $footer = null,
        $htmlOptions=array()
    )
	{
        if (! $this->enableAjaxValidation && !$this->enableClientValidation) {
			return Html::errorSummary($models,$header,$footer,$htmlOptions);
        }

        if (! isset($htmlOptions['id'])) {
			$htmlOptions['id'] = $this->id.'_es_';
        }

		$html = Html::errorSummary($models,$header,$footer,$htmlOptions);

		if ($html==='') {
            if (is_null($header)) {
                $header = Html::tag('p', array(), 'Please fix the following input errors:');
            }
			if (!isset($htmlOptions['class']))
				$htmlOptions['class'] = Html::$errorSummaryCss;

            $htmlOptions['style'] = isset($htmlOptions['style'])
                    ?
                    rtrim($htmlOptions['style'], ';') . ';display:none'
                    :
                    'display:none'
            ;

            $html = CHtml::tag(
                'div', $htmlOptions,
                $header . Hmtl::tag('ul', array(), Html::tag('li', array(), 'dummy')) . $footer
            );
		}

		$this->summaryID = $htmlOptions['id'];
		return $html;
    }

}
