<?php

/**

 * Flight: An extensible micro-framework.

 *

 * @copyright  Mike Cao

 * @license    MIT

 * @link       https://flightphp.com

 */

class Flight {

    protected static $vars = [];

    protected static $classes = [];

    protected static $filters = [];

    protected static $after = [];

    protected static $stopped = false;

    public static function route($pattern, $callback) {

        self::init();

        $method = $_SERVER['REQUEST_METHOD'];

        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        $pattern = '#^' . preg_replace('#/\*$#', '/?(.*)', $pattern) . '$#';

        if (preg_match($pattern, $uri, $params)) {

            array_shift($params);

            if (is_callable($callback)) {

                call_user_func_array($callback, $params);

            } else if (is_array($callback) && count($callback) == 2) {

                list($class, $method) = $callback;

                call_user_func_array([new $class, $method], $params);

            }

            self::$stopped = true;

        }

    }

    public static function render($file, $data = []) {

        self::init();

        $path = self::$vars['flight.views.path'] ?? __DIR__ . '/../views';

        $viewFile = rtrim($path, '/') . '/' . $file . '.php';

        if (!file_exists($viewFile)) {

            http_response_code(404);

            echo "View not found: " . htmlspecialchars($viewFile);

            return;

        }

        extract($data);

        include $viewFile;

    }

    public static function set($key, $value) {

        self::$vars[$key] = $value;

    }

    public static function get($key) {

        return self::$vars[$key] ?? null;

    }

    public static function start() {

        self::init();

        if (!self::$stopped) {

            http_response_code(404);

            echo "404 - Seite nicht gefunden.";

        }

    }

    protected static function init() {

        static $initialized = false;

        if ($initialized) return;

        $initialized = true;

        ob_start();

        register_shutdown_function(function () {

            if (!self::$stopped) {

                http_response_code(404);

                echo "404 - Seite nicht gefunden.";

            }

        });

    }

}