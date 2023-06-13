<?php

declare(strict_types=1);

namespace MementoMori\Commands;

use MementoMori\Helpers\Printer;

/**
 * Initial Banner
 *
 * @package MementoMori\Commands
 * @author Thiago <thiiagoms@proton.me>
 * @version 1.0
 */
final class BannerCommand
{
    /**
     * Initial banner
     *
     * @return void
     */
    public static function init(): void
    {
         Printer::info('
            ███╗   ███╗███████╗███╗   ███╗███████╗███╗   ██╗████████╗ ██████╗     ███╗   ███╗ ██████╗ ██████╗ ██╗
            ████╗ ████║██╔════╝████╗ ████║██╔════╝████╗  ██║╚══██╔══╝██╔═══██╗    ████╗ ████║██╔═══██╗██╔══██╗██║
            ██╔████╔██║█████╗  ██╔████╔██║█████╗  ██╔██╗ ██║   ██║   ██║   ██║    ██╔████╔██║██║   ██║██████╔╝██║
            ██║╚██╔╝██║██╔══╝  ██║╚██╔╝██║██╔══╝  ██║╚██╗██║   ██║   ██║   ██║    ██║╚██╔╝██║██║   ██║██╔══██╗██║
            ██║ ╚═╝ ██║███████╗██║ ╚═╝ ██║███████╗██║ ╚████║   ██║   ╚██████╔╝    ██║ ╚═╝ ██║╚██████╔╝██║  ██║██║
            ╚═╝     ╚═╝╚══════╝╚═╝     ╚═╝╚══════╝╚═╝  ╚═══╝   ╚═╝    ╚═════╝     ╚═╝     ╚═╝ ╚═════╝ ╚═╝  ╚═╝╚═╝
            
                => Remember you must die
                
            [*] Author: Thiago AKA thiiagoms
            [*] Version: 1.0
        ');
    }
}
