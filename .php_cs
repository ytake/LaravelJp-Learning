<?php

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__ . '/src');

return PhpCsFixer\Config::create()
    ->setRules(array(
        '@PSR2'        => true,
        'encoding' => true,
        'class_keyword_remove' => true,
        'no_empty_phpdoc' => true,
        'blank_line_after_namespace' => true,
        'single_quote' => true,
        'phpdoc_add_missing_param_annotation' => true,
        'no_useless_else' => true,
    ))
    ->setFinder($finder);
