<?php

namespace Intervention\Image\Imagick\Commands;

use Intervention\Image\Commands\AbstractCommand;

class DeskewCommand extends AbstractCommand
{
    /**
     * Auto deskew image
     *
     * @param  \Intervention\Image\Image $image
     *
     * @return boolean
     */
    public function execute($image)
    {
        $threshold = $this->argument(0)->type('numeric')->value(0.4);
        
        // deskew image
        $image->getCore()->deskewImage($threshold);

        return true;
    }
}
