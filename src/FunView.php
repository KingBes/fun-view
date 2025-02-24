<?php

namespace Kingbes\FunView;

use Webman\View;
use Throwable;
use function app_path;
use function array_merge;
use function base_path;
use function extract;
use function is_array;
use function ob_end_clean;
use function ob_get_clean;
use function ob_start;
use function request;

class FunView implements View
{
    /**
     * Assign.
     * @param string|array $name
     * @param mixed $value
     */
    public static function assign($name, $value = null)
    {
        $request = request();
        $request->_view_vars = array_merge((array) $request->_view_vars, is_array($name) ? $name : [$name => $value]);
    }

    /**
     * Render.
     * @param string $template
     * @param array $vars
     * @param string|null $app
     * @param string|null $plugin
     * @return false|string
     */
    public static function render(string $template, array $vars, string $app = null, string $plugin = null): string
    {
        $request = request();
        $plugin = $plugin === null ? ($request->plugin ?? '') : $plugin;
        $app = $app === null ? ($request->app ?? '') : $app;
        $configPrefix = $plugin ? "plugin.$plugin." : '';
        $baseViewPath = $plugin ? base_path() . "/plugin/$plugin/app" : app_path();
        if ($template[0] === '/') {
            if (strpos($template, '/view/') !== false) {
                [$viewPath, $template] = explode('/view/', $template, 2);
                $viewPath = base_path("$viewPath/view/");
            } else {
                $viewPath = base_path() . dirname($template) . '/';
                $template = basename($template);
            }
        } else {
            $viewPath = $app === '' ? "$baseViewPath/view/" : "$baseViewPath/$app/view/";
        }
        $defaultOptions = [
            'view_dir' => $viewPath,
            'layout_name' => config("{$configPrefix}view.options.layout_name", 'layout'),
            'layout_item' => config("{$configPrefix}view.options.layout_item", '__CONTENT__'),
        ];
        $options = array_merge($defaultOptions, config("{$configPrefix}view.options", []));
        $view = new Template($options);
        if (isset($request->_view_vars)) {
            $vars = array_merge((array)$request->_view_vars, $vars);
        }
        return $view->fetch($template, $vars);
    }
}
