<?php
/**
 * @file
 * API info
 */

/**
 * Register new GraphQL interface type, object type.
 */
function hook_graphql_api_info() {
  return [
    'types' => [
      'text_formatted' => new ObjectType([
        'name' => 'text_formatted',
        'fields' => [
          'value' => array(
            'type' => Type::string(),
            'description' => t('Text'),
          ),
          'summary' => array(
            'type' => Type::string(),
            'description' => t('Summary'),
          ),
          'format' => array(
            'type' => Type::string(),
            'description' => t('Text format'),
          ),
        ]
      ]),
    ]
  ];
}

/**
 * Ignore fields.
 */
function hook_graphql_api_ignored_fields() {
  return ['field_name'];
}
