<?php

namespace nadar\quill;

/**
 * Block Listener
 *
 * Block listeneres writes from $line->input into the $line->output.
 *
 * @author Basil Suter <basil@nadar.io>
 * @since 1.0.0
 */
abstract class BlockListener extends Listener
{
    /**
     * {@inheritDoc}
     */
    public function type()
    {
        return self::TYPE_BLOCK;
    }
}
