<?php

/*
 * PHP Coding Standards Fixer Config file for PHP 7.1 and up
 *
 * @see https://github.com/FriendsOfPHP/PHP-CS-Fixer/blob/master/README.rst
 *
 * based on https://github.com/koriym/Koriym.PhpSkeleton
 */

$header = <<<'EOF'
EOF;

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__);

return \PhpCsFixer\Config::create()
    ->setRiskyAllowed(true)
    ->setRules([
        '@PSR2' => true,
        '@PHP70Migration:risky' => true,
        '@PHP71Migration:risky' => true,
        'align_multiline_comment' => true,
        'array_indentation' => true,
        'array_syntax' => ['syntax' => 'short'],
        'backtick_to_shell_exec' => true,
        'binary_operator_spaces' => true, // @Symfony
        'blank_line_after_opening_tag' => true, // @Symfony
        'blank_line_before_statement' => ['statements' => ['break', 'continue', 'declare', 'throw']], // @Symfony
        'cast_spaces' => true, // @Symfony
        'class_attributes_separation' => ['elements' => ['const', 'method']], // @Symfony
        'combine_consecutive_issets' => true,
        'combine_consecutive_unsets' => true,
        'compact_nullable_typehint' => true,
        'concat_space' => ['spacing' => 'one'], // @Symfony
        'declare_equal_normalize' => true, // @Symfony
        'dir_constant' => true, // @Symfony:risky
        'ereg_to_preg' => true, // @Symfony:risky
        'error_suppression' => true, // @Symfony:risky
        'escape_implicit_backslashes' => true,
        'explicit_indirect_variable' => true,
        'explicit_string_variable' => true,
        'fully_qualified_strict_types' => true,
        'function_to_constant' => true, // @Symfony:risky
        'function_typehint_space' => true, // @Symfony
        'general_phpdoc_annotation_remove' => ['author', 'category', 'package', 'copyright', 'version'],
        'heredoc_to_nowdoc' => true,
        'include' => true, // @Symfony
        'indentation_type' => true,
        'linebreak_after_opening_tag' => true,
        'lowercase_cast' => true, // @Symfony
        'lowercase_static_reference' => true, // @Symfony
        'magic_constant_casing' => true,
        'method_chaining_indentation' => true,
        'method_separation' => true,
        'multiline_comment_opening_closing' => true,
        'multiline_whitespace_before_semicolons' => true,
        'native_function_casing' => true, // @Symfony
        'new_with_braces' => true, // @Symfony
        'no_alternative_syntax' => true,
        'no_binary_string' => true,
        'no_blank_lines_after_class_opening' => true, // @Symfony
        'no_blank_lines_after_phpdoc' => true, // @Symfony
        'no_empty_comment' => true, // @Symfony
        'no_empty_phpdoc' => true, // @Symfony
        'no_empty_statement' => true, // @Symfony
        'no_extra_blank_lines' => true,
        'no_homoglyph_names' => true, // @Symfony:risky
        'no_leading_import_slash' => true, // @Symfony
        'no_leading_namespace_whitespace' => true, // @Symfony
        'no_mixed_echo_print' => true, // @Symfony
        'no_multiline_whitespace_around_double_arrow' => true, // @Symfony
        'no_null_property_initialization' => true,
        'no_php4_constructor' => true,
        'no_short_bool_cast' => true, // @Symfony
        'no_short_echo_tag' => false,
        'no_singleline_whitespace_before_semicolons' => true, // @Symfony
        'no_spaces_around_offset' => true, // @Symfony
        'no_superfluous_elseif' => true,
        'no_superfluous_phpdoc_tags' => true,
        'no_trailing_comma_in_list_call' => true, // @Symfony
        'no_trailing_comma_in_singleline_array' => true, // @Symfony
        'no_trailing_whitespace' => true,
        'no_trailing_whitespace_in_comment' => true,
        'no_unneeded_control_parentheses' => true, // @Symfony
        'no_unneeded_curly_braces' => true, // @Symfony
        'no_unneeded_final_method' => true, // @Symfony
        'no_unreachable_default_argument_value' => true,
        'no_unset_on_property' => true,
        'no_unused_imports' => true,
        'no_useless_else' => true,
        'no_useless_return' => true,
        'no_whitespace_before_comma_in_array' => true, // @Symfony
        'no_whitespace_in_blank_line' => true, // @Symfony
        'non_printable_character' => true, // @Symfony
        'normalize_index_brace' => true, // @Symfony
        'not_operator_with_space' => false,
        'not_operator_with_successor_space' => false,
        'object_operator_without_whitespace' => true, // @Symfony
        'ordered_class_elements' => true,
        'ordered_imports' => false,
        'php_unit_construct' => true, // @Symfony:risky
        'php_unit_dedicate_assert' => true,
        'php_unit_expectation' => true,
        'php_unit_fqcn_annotation' => true, // @Symfony
        'php_unit_namespaced' => true,
        'php_unit_no_expectation_annotation' => true,
        'php_unit_ordered_covers' => true,
        'php_unit_set_up_tear_down_visibility' => true,
        'php_unit_strict' => true,
        'phpdoc_align' => true, // @Symfony]
        'phpdoc_annotation_without_dot' => true, // @Symfony]
        'phpdoc_indent' => true, // @Symfony]
        'phpdoc_inline_tag' => true, // @Symfony]
        'phpdoc_no_access' => true, // @Symfony]
        'phpdoc_no_alias_tag' => true, // @Symfony
        'phpdoc_no_empty_return' => true, // @Symfony
        'phpdoc_no_package' => true, // @Symfony
        'phpdoc_no_useless_inheritdoc' => true, // @Symfony
        'phpdoc_order' => true,
        'phpdoc_return_self_reference' => true, // @Symfony
        'phpdoc_scalar' => true, // @Symfony
        'phpdoc_separation' => true, // @Symfony
        'phpdoc_single_line_var_spacing' => true, // @Symfony
        'phpdoc_to_comment' => true, // @Symfony
        'phpdoc_trim' => true, // @Symfony
        'phpdoc_trim_consecutive_blank_line_separation' => true,
        'phpdoc_types' => true, // @Symfony
        'phpdoc_types_order' => true, // @Symfony
        'phpdoc_var_without_name' => true, // @Symfony
        'protected_to_private' => true,
        'psr0' => true,
        'psr4' => true, // @Symfony:risky
        'return_assignment' => false,
        'return_type_declaration' =>  ['space_before' => 'none'],
        'self_accessor' => true, // @Symfony:risky
        'semicolon_after_instruction' => true, // @Symfony
        'set_type_to_cast' => true, // @Symfony:risky
        'short_scalar_cast' => true, // @Symfony:risky
        'simplified_null_return' => true,
        'single_blank_line_before_namespace' => true, // @Symfony
        'single_line_after_imports' => true,
        'space_after_semicolon' => true, // @Symfony
        'standardize_increment' => true, // @Symfony
        'standardize_not_equals' => true, // @Symfony
        'strict_comparison' => true,
        'strict_param' => true,
        'switch_case_semicolon_to_colon' => true,
        'switch_case_space' => true,
        'ternary_operator_spaces' => true,
        'trailing_comma_in_multiline_array' => true, // @Symfony
        'trim_array_spaces' => true, // @Symfony
        'unary_operator_spaces' => true, // @Symfony
        'visibility_required' => true,
        'void_return' => true, // @PHP71Migration:risky
        'whitespace_after_comma_in_array' => true, // @Symfony
    ])
    ->setFinder($finder);
