<?php

namespace nadar\quill\tests;

use nadar\quill\Lexer;
use nadar\quill\Line;
use PHPUnit\Framework\TestCase;

class LineTest extends TestCase
{
    public function testsNextLine()
    {
        $lexer = new Lexer(['insert' => 'foo']);

        $line = new Line(0, 'input', [], $lexer, false, false);
        $this->assertFalse($line->next());
        $this->assertFalse($line->next(function (Line $line) {
            return true;
        }));
        $this->assertFalse($line->next(function (Line $line) {
            return false;
        }));

        $this->assertNull($line->while(function (&$index, Line $line) {
            ++$index;
        }));
        $this->assertNull($line->while(function (&$index, Line $line) {
            --$index;
        }));
        $this->assertFalse($line->previous());
    }

    public function testNoNextElementException()
    {
        $lexer = new Lexer('[{"insert":"first "},{"insert":"second","attributes":{"bold":true}}]');
        
        $this->expectException('\Exception');
        $this->expectExceptionMessage('Unable to find a next element. Invalid DELTA on \'<strong>second</strong>\'. Maybe your delta code does not end with a newline?');
        $response = $lexer->render();
    }
}
