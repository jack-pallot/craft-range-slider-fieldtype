<?php
namespace Craft;

class RangeSliderFieldPlugin extends BasePlugin
{
    function getName()
    {
         return Craft::t('Range Slider Field');
    }

    function getVersion()
    {
        return '0.5.2';
    }

    function getDeveloper()
    {
        return 'Jack Pallot';
    }

    function getDeveloperUrl()
    {
        return 'http://jackpallot.me';
    }
}