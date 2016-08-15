<?php

namespace Intervention\Image\Imagick\Commands;

class ValidCommand extends \Intervention\Image\Commands\AbstractCommand
{
    /**
     * Checks if image is valid.
     *
     * @param  \Intervention\Image\Image $image
     * @return boolean
     */
    public function execute($image)
    {
        $this->setOutput($image->getCore()->valid());
        return true;
    }
}
