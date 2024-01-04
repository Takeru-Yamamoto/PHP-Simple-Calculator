<?php

namespace SimpleCalculator\Laravel;

use Illuminate\Support\ServiceProvider as Provider;

use SimpleCalculator\Laravel\CalculatorManager;
use SimpleCalculator\Laravel\Facade\Calculator;

/**
 * ServiceProvider
 * Facadeの登録を行う
 * 
 * @package SimpleCalculator\Laravel
 */
class ServiceProvider extends Provider
{
    /**
     * アプリケーションの起動時に実行する
     * FacadeとManagerの紐づけを行う
     * 
     * @return void
     */
    public function register(): void
    {
        $this->app->singleton(Calculator::class, function () {
            return new CalculatorManager();
        });
    }
}
