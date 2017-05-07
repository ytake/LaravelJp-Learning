<?php
declare(strict_types=1);

namespace Learning\Foundation;

use Learning\Http\Actions;
use Illuminate\Contracts\Routing\Registrar;

/**
 * Class ApplicationRoute
 */
final class ApplicationRoute
{
    /**
     * @param Registrar|\Illuminate\Routing\Route $registrar
     */
    public function register(Registrar $registrar)
    {
        $registrar->get('/',
            [
                'as'   => 'index',
                'uses' => Actions\IndexAction::class,
            ]);
        $registrar->get('/learning/{level}/{content?}',
            [
                'as'   => 'learning.level.index',
                'uses' => Actions\LearningAction::class,
            ]);
    }
}
