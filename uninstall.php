<?php

if (!defined('WP_UNINSTALL_PLUGIN')) {
  die;
}

function dropTable()
{
  global $wpdb;
  $tableNameWithPrefix = $wpdb->prefix . 'ws_price_history';
  $query = $wpdb->prepare('DROP TABLE IF EXISTS ' . $tableNameWithPrefix);
  $wpdb->query($query);
}

dropTable();
