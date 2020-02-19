<?php

namespace App\Service;

use KnpU\LoremIpsumBundle\WordProviderInterface;

class CustomWordProvider implements WordProviderInterface
{
    public function getWordList(): array
    {
        return [
            'sunshine',
            'rainbows',
            'unicorns',
            'puns',
            'butterflies',
            'cupcakes',
            'sprinkles',
            'glitter',
            'friend',
            'high-five',
            'friendship',
            'compliments',
            'sunsets',
            'cookies',
            'flowers',
            'bikes',
            'kittens',
            'puppies',
            'macaroni',
            'freckles',
            'baguettes',
            'presents',
            'fireworks',
            'chocholate',
            'marshmallow',
            'beach',
        ];
    }

}
