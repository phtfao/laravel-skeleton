<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Phtfao\Feegow\Broker\Model\Solicitacao;
use Phtfao\Feegow\Support\Repository\SolicitacaoRepository;
use Phtfao\Feegow\Support\Contracts\SolicitacaoRepositoryInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            SolicitacaoRepositoryInterface::class,
            SolicitacaoRepository::class
        );

        $this->app->bind(
            SolicitacaoRepositoryInterface::class,
            function () {
                return new SolicitacaoRepository(new Solicitacao());
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
