<?php

namespace GatherContent\Model;

class ItemTest extends \PHPUnit_Framework_TestCase
{
    function testDefaultAttributeState()
    {
        $subject = new Item;

        $this->assertNull($subject->id);
        $this->assertNull($subject->name);
        $this->assertNull($subject->overdue);
        $this->assertNull($subject->parent_id);
        $this->assertNull($subject->position);
        $this->assertNull($subject->project_id);
        $this->assertNull($subject->template_id);
    }

    function testSettingAllowedAttributes()
    {
        $attributes = [
            'id'          => 2,
            'name'        => 'Item',
            'parent_id'   => 1,
            'position'    => 0,
            'project_id'  => 3,
            'template_id' => 4,
            'overdue'     => false
        ];

        $subject = new Item($attributes);

        $this->assertSame(2, $subject->id);
        $this->assertSame(1, $subject->parent_id);
        $this->assertSame(0, $subject->position);
        $this->assertSame(3, $subject->project_id);
        $this->assertSame(4, $subject->template_id);

        $this->assertEquals('Item', $subject->name);

        $this->assertFalse($subject->overdue);
    }

}
