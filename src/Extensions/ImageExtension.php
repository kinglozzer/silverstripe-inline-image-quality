<?php

namespace Kinglozzer\SilverStripeInlineImageQuality\Extensions;

use SilverStripe\Assets\Image_Backend;
use SilverStripe\Core\Extension;

class ImageExtension extends Extension
{
    public function Quality($quality)
    {
        $variant = $this->owner->variantName(__FUNCTION__, $quality);
        return $this->owner->manipulateImage($variant, function (Image_Backend $backend) use ($quality) {
            $clone = clone $backend;
            $clone->setQuality($quality);
            return $clone;
        });
    }
}
