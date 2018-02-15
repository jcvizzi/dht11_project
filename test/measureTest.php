<?php
/**
 * Created by PhpStorm.
 * User: jean-christian
 * Date: 15/02/18
 * Time: 10:01
 */
use PHPUnit\Framework\TestCase;

use Domain\Measure;


include 'autoload.inc.php';

/**
 * Tests class measure
 */

class MeasureTest extends TestCase {

    public function testMeasure(){

        $measure = new Measure(25, 35, null);

        $this->assertEquals(25, $measure->temperature);

        $this->assertEquals(35, $measure->humidity);

        $this->assertEquals(null, $measure->datetime);

    }

}


?>