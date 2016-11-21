#!/bin/bash

set -e $DRUPAL_TI_DEBUG

# Ensure the right Drupal version is installed.
# Note: This function is re-entrant.
drupal_ti_ensure_drupal

cd "$DRUPAL_TI_DRUPAL_DIR"

drush dl composer_manager --yes
drush pm-enable composer_manager --yes