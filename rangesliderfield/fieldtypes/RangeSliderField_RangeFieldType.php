<?php
namespace Craft;

class RangeSliderField_RangeFieldType extends BaseFieldType
{
	public function getName()
	{
		return Craft::t('Range Slider');
	}
	/**
	 * Defines the settings.
	 *
	 * @access protected
	 * @return array
	 */
	protected function defineSettings()
	{
		return array(
			'minValue'   => array(AttributeType::Number,'default' => ('0'), 'required' => true),
			'maxValue'   => array(AttributeType::Number,'default' => ('1'), 'required' => true),
			'stepsValue'   => array(AttributeType::Number,'default' => ('0'))
		);
	}
	/**
	 * Returns the field's settings HTML.
	 *
	 * @return string|null
	 */
	public function getSettingsHtml()
	{
		return craft()->templates->render('RangeSliderField/settings', array(
			'settings' => $this->getSettings()
		));
	}
	/**
	 * Display fieldtype
	 *
	 * @param string $name  Our fieldtype handle
	 * @return string Return our fields input template
	 */
	public function getInputHtml($name, $value)
	{
		// Include CSS
		craft()->templates->includeCssResource('RangeSliderField/css/sliderField.css');
		// Include JS
		craft()->templates->includeJsResource('RangeSliderField/js/sliderField.min.js');

		$id = craft()->templates->formatInputId($name);

		return craft()->templates->render('RangeSliderField/_fields/input', array(
			'name'  => $name,
			'value' => $value,
			'settings' => $this->getSettings()
		));
	}
}