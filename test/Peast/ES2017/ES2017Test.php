<?php
namespace test\Peast\ES2017;

class ES2017Test extends \test\Peast\ES2016\ES2016Test
{
    protected $parser = "ES2017";
    
    protected function getTestVersions()
    {
        return array("ES2015", "ES2016", "ES2017");
    }
}