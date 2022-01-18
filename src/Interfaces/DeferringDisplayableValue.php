<?php

namespace Helper\Interfaces;

interface DeferringDisplayableValue
{
    /**
     * Resolve the displayable value that the class is deferring.
     *
     * @return \Helper\Interfaces\Htmlable|string
     */
    public function resolveDisplayableValue();
}
