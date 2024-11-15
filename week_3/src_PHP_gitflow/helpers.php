<?php

/**
 * Get the base path
 *
 * @param string $path
 * @return string
 */

function basePath($path = '')
{
    return __DIR__ . '/' . $path;
}

/**
 * Load a view file
 *
 * @param string $name
 * @return void
 *
 */
function loadView($name, $data = [])
{
    $viewPath = basePath("App/templates/{$name}.view.php");

    if (file_exists($viewPath)) {
        extract($data);
        require $viewPath;
    } else {
        echo "view '{$name}' not found. ";
    }
}

/**
 * Load a partial
 *
 * @param string $name
 * @return void
 *
 */
function loadPartial($name,$data=[])
{
    $partialPath = basePath("App/templates/partials/{$name}.php");

    if (file_exists($partialPath)) {
        extract($data);
        require $partialPath;
    } else {
        echo "partial '{$name}' not found. ";
    }
}


/**
 * Inspect a value and die
 *
 * @param mixed $value
 * @reuturn void
 *
 */
function inspect($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

}

/**
 * Inspect a value and die
 *
 * @param mixed $value
 * @reuturn void
 *
 */
function inspectAndDie($value)
{
    echo "<pre>";
    die(var_dump($value));
    echo "</pre>";

}

/**
 * Format salary
 *
 * @param string $salary
 * @return string $Formatted Salary
 */
function formatSalary($salary)
{
    return '$' . number_format(floatval($salary));
}

/**
 * Sanitize data
 * @param string $dirty
 * @return string
 */
function sanitize($dirty)
{
    return filter_var(trim($dirty),FILTER_SANITIZE_SPECIAL_CHARS);
}

/**
 * Redirect to a new page
 *
 * @param string $url
 * @return void
 */
function redirect($url)
{
    header("Location: {$url}");
    exit;
}
