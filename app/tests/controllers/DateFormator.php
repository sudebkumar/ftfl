<?php
/**
 * Created by PhpStorm.
 * User: LAB5
 * Date: 8/20/14
 * Time: 11:04 AM
 */

class DateFormatter{

protected $stamp;
    public function _construct(DateTime $stamp)
    {
        $this->stamp = $stamp;
    }

    public function getStamp()
    {
        return $this->stamp;
    }


public function testStampMustBeInstanceOfDateTime()
{

    $date = new DateFormatter(new DateTime);

    $this->assertInstanceOf('DateTime', $date->getStamp());
}
}